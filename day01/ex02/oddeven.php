#!/usr/bin/php
<?php
while (1)
{
    print("Enter a number: ");
    $fr = fopen("php://stdin","r");
    $input = fgets($fr);
    if (!$input)
        break;
    $input = rtrim($input);
    fclose($fr);
    if (is_numeric($input)){
        if ($input % 2 == 0){
            echo "The number " .$input." is even\n";
        } else
            echo "The number ".$input." is odd\n";
    }
    else
        echo "'$input' is not a number\n";
}
<<<<<<< HEAD
<<<<<<< HEAD
echo "\n";
=======
echo "\n";
?>
>>>>>>> add6
=======
echo "\n";
?>
>>>>>>> 03f17b588a52cae62dfb18fdcc171ac14f4d81c3
