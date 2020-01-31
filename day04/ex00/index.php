<?php
session_start(); 
if ($_GET["submit"] === "OK"){
$_SESSION['login'] = $_GET["login"];
$_SESSION['passwd'] = $_GET["passwd"];}

/*
curl -v -c cook.txt  'http://localhost:8080/index.php'  check page
curl -v -b cook.txt  'http://localhost:8080/index.php?login=sb&passwd=beeone&submit=OK' send data
curl -v -b cook.txt  'http://localhost:8080/index.php' not send data and check
curl -v  'http://localhost:8080/index.php' not send id=>new id
*/
?>

<html><body>
<form action="create.php" method="GET">
   Username: <input type="text" name="login" value="<?=$_SESSION['login'];?>"/>
<br />
Password: <input type="text" name="passwd" value="<?=$_SESSION['passwd']?>"/>
<input type="submit" name="submit" value="OK"/>
</form>
</body></html>