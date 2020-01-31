<?php
function auth($login, $passwd)
{
    if (file_exists('../private/passwd'))
        $old_data = unserialize(file_get_contents('../private/passwd'));
    else
        return (0);
    $len = count($old_data);
    $i = 0;
    
    while($i < $len)
    {
        if ($old_data[$i]['login'] == $login)
        {
            if ($old_data[$i]['passwd'] == hash('sha512', $passwd))
            {
                return(1);
            }
        }
        $i++;
    }
    return(0);
}
?>
