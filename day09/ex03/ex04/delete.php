<?php
if (!isset($_GET['id']))
    exit();

$file = file_get_contents('list.csv');
$data = explode("\n", $file);
$array = array();
foreach ($data as $value) {
    $explode = explode(';', $value);
    if ($explode[0] == $_GET['id'])
        continue;
    if (count($explode) != 2)
        break;
    $array[] = $value;
}
file_put_contents('list.csv', implode("\n", $array));
?>