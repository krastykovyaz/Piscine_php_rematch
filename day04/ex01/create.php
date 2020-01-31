<?php
session_start(); 
	$array = array();
	
	if (!(file_exists("../private"))) {
		mkdir("../private", 0777);
   }

	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))
      echo "ERROR\n";
   else{
      if (file_exists('../private/passwd'))
         $array = unserialize(file_get_contents("../private/passwd"));
      else
         $array = array();
   foreach ($array as $value){
      if ($value['login'] === $_POST['login'])
         echo "ERROR\n";
      exit();}
      
      $array[] = array(
      "login" => $_POST['login'],
      "passwd" => hash("whirlpool",$_POST['passwd'])
   );
   file_put_contents("../private/passwd", serialize($array));
   echo"OK\n";
}
?>