<?php
session_start(); 
	$array = array();
	
	if (!(file_exists("database/private"))) 
      mkdir("database/private", 0777);
   if (!file_exists('database/private/passwd')) 
      file_put_contents('database/private/passwd', null);

	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))
   {
      echo "ERROR\n";
      ?>
      <link rel="stylesheet" href="StorageStyle.css">
      <div class=head>
      <p>
      <a href="create.html" style="font-family: Courier New">go back</a>
   </div>
      <?php
   }   
   else
   {
      if (file_exists('database/private/passwd'))
         $array = unserialize(file_get_contents("database/private/passwd"));
      else
         $array = array();
      if ($array)
      {
         foreach ($array as $value)
         {
            if ($value['login'] === $_POST['login'])
            {
               ?>
               <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
            <p>
            <a href="create.html" style="font-family: Courier New">repeat pls (already exist)</a>
            </div>
            <?php
               exit();
            }
         }
      }     
      $array[] = array(
      "login" => $_POST['login'],
      "passwd" => hash("whirlpool",$_POST['passwd'])
      );
         file_put_contents("database/private/passwd", serialize($array));
         // header('Location: index.html');
         ?>
         <html>
         <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
         <p>
         <a href="index.html" style="font-family: Courier New">go to Start</a>
   </div>
      </html>
      <?php
   }
?>