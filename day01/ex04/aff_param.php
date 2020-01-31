#!/usr/bin/php
<?php
// loop through each element in the $argv array
unset($argv[0]);
foreach($argv as $value)
{
  echo "$value\n";
}
?>