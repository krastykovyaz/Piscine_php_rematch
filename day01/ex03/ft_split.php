#!/usr/bin/php
<?php
function ft_split($string){
    $delimiter = " ";
    $newstr = explode ($delimiter, $string); 
    sort($newstr);
    return $newstr;
}
?>
