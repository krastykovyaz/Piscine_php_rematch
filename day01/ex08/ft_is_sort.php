#!/usr/bin/php
<?php
function ft_is_sort($argv)
{
    if (count($argv) == 1)
        return (TRUE);
    $sort_str = $argv;
    sort($sort_str);
    for ($a = 0; $a < count($sort_str); $a++)
    {
        if ($chek_str[$a] != $argv[$a])
            return (FALSE);
    }
    return(TRUE);
}
?>