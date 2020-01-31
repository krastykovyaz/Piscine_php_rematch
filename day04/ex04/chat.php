<?php
    date_default_timezone_set('Europe/Moscow');
    if (!file_exists('../private/chat')) 
    {
        if (!is_dir('../private'))
            mkdir('../private');
        file_put_contents('../private/chat', serialize([]));
    }
    $fd = fopen('../private/chat', 'r');
    $chat = array();
    if (flock($fd, LOCK_SH)) 
    {
        $chat = unserialize(file_get_contents('../private/chat'));
        if (!$chat)
            $chat = array();
        flock($fd, LOCK_UN);
        fclose($fd);
    }
    foreach ($chat as $value)
        echo "[" . date('H:i', $value['time']) . "] <b>" . $value['login'] . "</b>: " . $value['msg'] . "<br />";
?>