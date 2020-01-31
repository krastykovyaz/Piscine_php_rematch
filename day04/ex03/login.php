<?php
	session_start();
	if ($_GET['login'] && $_GET['passwd'] && include 'auth.php')
	{
		echo "OK\n";
		$_SESSION['loggued_on_user'] = $_GET['login'];
    }
	else if (!($_GET['login'] && $_GET['passwd']))
	    echo "ERROR\n";
		
?>
<html><body>
    <form action="login.php" name="login.php" method="GET">
       Username: <input type="text" name="login" value="" />
    <br />
    Password: <input type="password" name="passwd" value=""/>
    <input type="submit" name="submit" value="OK"/>
    </form>
    </body></html>