<?php
session_start();
function auth($login, $passwd)  {
    $array = array();
    if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))    {
        return FALSE;
    }
    $array = unserialize(file_get_contents("../private/passwd"));
    foreach ($array as $key)  {
        if ($key['login'] === $_GET['login']) {
            if ($key['passwd'] === hash("whirlpool", $_POST['passwd']))
                return TRUE;
        }
    }
    return (FALSE);
}
?>
