<?php
session_start();
function auth($login, $passwd)  
{
    if (!file_exists('../private')) 
        mkdir("../private");
    if (!file_exists('../private/passwd'))
        file_put_contents('../private/passwd', null);
    $array = array();
    $array = unserialize(file_get_contents("../private/passwd"));
    if ($array)
    {
        foreach ($array as $value)  
        {
            if ($value['login'] === $login) 
            {
                if ($value['passwd'] === hash("whirlpool", $_POST['passwd']))
                    return TRUE;
            }
        }
    }
    return (FALSE);
}
?>
