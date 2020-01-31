<?php
session_start(); 
	$array = array();
	
	if (!(file_exists("../private"))) 
      mkdir("../private", 0777);
   if (!file_exists('../private/passwd')) 
      file_put_contents('../private/passwd', null);

	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))
   {
      echo "ERROR\n";
      ?>
      <p>
      <a href="create.html">go back</a>
      <?php
   }   
   else
   {
      if (file_exists('../private/passwd'))
         $array = unserialize(file_get_contents("../private/passwd"));
      else
         $array = array();
      if ($array)
      {
         foreach ($array as $value)
         {
            if ($value['login'] === $_POST['login'])
            {
               echo "ERROR\n";
               ?>
            <p>
            <a href="create.html">repeat pls (already exist)</a>
            <?php
               exit();
            }
         }
      }     
      $array[] = array(
      "login" => $_POST['login'],
      "passwd" => hash("whirlpool",$_POST['passwd'])
      );
         file_put_contents("../private/passwd", serialize($array));
         // header('Location: index.html');
         echo"OK\n";
         ?>
         <html>
      <body>
         <p>
         <a href="index.html">go to Start</a>
      </body>
      </html>
      <?php
   }
?>