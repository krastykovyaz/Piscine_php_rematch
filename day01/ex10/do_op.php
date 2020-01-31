#!/usr/bin/php
<?php
function ft_split($string){
    $delimiter = " ";
    $newstr = explode ($delimiter, $string); 
    return $newstr;
}

if ($argc === 4)
{
    if (trim($argv[2])  == "+")
        echo trim($argv[1]) + trim($argv[3])."\n";
    else if (trim($argv[2])  == "-")
        echo trim($argv[1]) - trim($argv[3])."\n";
    else if ($argv[2] == "*")
        echo trim($argv[1]) * trim($argv[3])."\n";
    else if (trim($argv[2]) == "/")
        echo trim($argv[1]) / trim($argv[3])."\n";
    else if (trim($argv[2]) == "%")
        echo trim($argv[1]) % trim($argv[3])."\n";
}
else
    echo "Incorrect Parameters\n";
?>