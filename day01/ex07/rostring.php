#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        for ($a = 0; $a < $argc; $a++)
        {
            $data = trim(preg_replace("/ +/", " ", $argv[1]));
            $word = explode(" ", $data);
        }
        for ($a = 1; $a < count($word); $a++)
            echo $word[$a] . " ";
        echo $word[0] . PHP_EOL;
    }
?>