#!/usr/bin/php
<?PHP
if ($argc != 2)
    exit;
$s = preg_replace("/\s+/", " ", $argv[1]);
$s = trim($s);
echo "$s\n";
?>