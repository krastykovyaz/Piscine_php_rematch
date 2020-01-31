#!/usr/bin/php
<?php
    if ($argc != 2) {
        echo "Incorrect Parameters\n";
        exit();
    }
    $calcule = str_replace(" ", "", trim($argv[1]));
    $nb1 = intval($calcule);
    $a = (string)$nb1;
    $b = substr($calcule, strlen($a));
    $op = substr(($b), 0, 1);
    $c = strlen((string)$nb1);
    $d = substr($calcule, $c);
    $nb2 = substr(($d), 1);
    $nb2 = intval($nb2);
    if (!is_numeric($nb1) || !is_numeric($nb2)){
        echo "Syntax Error\n";
        exit();
    }
  switch ($op) {
      case ("*") :
          echo $nb1 * $nb2;
          break;
      case ("+") :
          echo $nb1 + $nb2;
          break;
      case ("-") :
          echo $nb1 - $nb2;
          break;
      case ("/") :
          echo $nb1 / $nb2;
          break;
      case ("%") :
          echo $nb1 % $nb2;
          break;
      default:
          echo "Syntax Error\n";
          exit();
  }
  echo "\n";
  ?>