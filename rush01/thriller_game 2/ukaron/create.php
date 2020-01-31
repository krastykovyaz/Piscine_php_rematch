<?php
if ($_POST['login'] == '' or $_POST['passwd'] == '' or $_POST['submit'] != 'OK')
    echo "ERROR\n";
else
{
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $passwd_hash = hash('sha512', $passwd);

    $data = array('login' => $login, 'passwd' => $passwd_hash);
    if (!file_exists('../private/passwd'))
    {
        mkdir('../private');
        $data_new[0] = array('login' => $login, 'passwd' => $passwd_hash);
        file_put_contents('../private/passwd', serialize($data_new));
        header("Location: ../game_lobby/lobby.html");
    }
    else
        {
        $data_old = file_get_contents('../private/passwd');
        $data_uns = unserialize($data_old);
        $len = count($data_uns);
        $n = 0;
        for($i = 0; $i < $len; $i++)
        {
            if ($data_uns[$i]['login'] != $data['login'])
                $n++;
        }
        if ($n == $len)
        {
            $data_uns[] = $data;
            file_put_contents('../private/passwd', serialize($data_uns));
            header("Location: ../game_lobby/lobby.html");
        }
        else
            echo "ERROR\n";
    }
}

?>

