#!/usr/bin/php
<?php
if ($argc < 2)
    exit();
if (!in_array($argv[1], ['moyenne', 'moyenne_user', 'dif_moulinette']))
    exit();
$file = fopen('php://stdin', 'r');
if (!$file)
    exit();
$line = fgetcsv($file, 0, ';'); //length 0 to ommit, dellimeter=";"

function displayAverage($file) //without moulinette
{
    $count = 0;
    $total = 0;
    while ($line = fgetcsv($file, 0, ';')) 
    {
        if ($line[2] != 'moulinette') //colomn "C" !moulinette
        {
            print($line[2] . PHP_EOL);
            $total += $line[1]; //add notes from colomn "B" calculate total users
            if ($line[1] !== "") //compute all notes without empty cells
                ++$count;
        }
    }
    echo $total / $count . PHP_EOL; //average grade
}
function getUserAverage($file) //average grade per user (moulinette)
{
    $count = [];
    $total = [];
    $moulinette = [];
    while ($line = fgetcsv($file, 0, ';')) //length 0 to ommit, dellimeter=";"
    {
        if ($line[2] != 'moulinette') //without moulinette evaluation
        {
            if (!isset($total[$line[0]])) 
            {
                $total[$line[0]] = 0;
                $count[$line[0]] = 0;
                // print_r($line . PHP_EOL);
            }
            $total[$line[0]] += $line[1];
            if ($line[1] !== "")
                ++$count[$line[0]];
        } 
        else 
        {
            if (!isset($moulinette[$line[0]])) //calculate how many grades from moulinette
                $moulinette[$line[0]] = 0;
            if ($line[1] !== "")
                $moulinette[$line[0]] = $line[1];//moulinette evaluations
        }
    }
    ksort($total); //alphabetical order means key
    foreach ($total as $user => $value)
        $total[$user] = $value / $count[$user]; //average grade for each user
    return [$total, $moulinette];
}
function displayUserAverage($file)
{
    $total = getUserAverage($file)[0];
    foreach ($total as $user => $value)//the average grade per user ordered by alphabetical order.
        echo "$user:$value\n";//print key->value
}
function displayMoulinette($file)
{
    list($total, $moulinette) = getUserAverage($file);
    foreach ($total as $user => $value) 
    {
        if (!isset($moulinette[$user]))
            $moulinette[$user] = 0;
        echo "$user:" . ($value - $moulinette[$user]) . PHP_EOL;
    }//di erence between a grade received by your peer and by Moulinettedi erence between a grade received by your peer and by Moulinette
}
switch ($argv[1]) {
    case 'moyenne':
        displayAverage($file);
        break;
    case 'moyenne_user':
        displayUserAverage($file);
        break;
    case 'ecart_moulinette':
        displayMoulinette($file);
        break;
}