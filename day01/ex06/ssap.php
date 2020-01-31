#!/usr/bin/php
<?php
function ft_split($string){
    $delimiter = " ";
    $newstr = explode ($delimiter, $string); 
    sort($newstr);
    return $newstr;
}

if ($argc < 2)
    exit;
$ar = array();

for ($i = 1; $i < $argc; $i++){
  $ar2 = ft_split($argv[$i]);
  $ar = array_merge($ar2, $ar);
}
asort($ar);
foreach($ar as $value)
{
  echo "$value\n";
}
?>