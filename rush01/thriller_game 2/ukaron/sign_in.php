<?php
session_start();
if ($_GET['login'] != '' and $_GET['passwd'] != '')
{
   $_SESSION['login'] = $_GET['login'];
   $_SESSION['passwd'] = $_GET['passwd'];
   
}
if ($_SESSION['login'] != '')
	header("Location: ../game_lobby/playground.html");
$login = $_SESSION['login'];
$passwd = $_SESSION['passwd'];
echo "
<!DOCTYPE html>
<html>
	<head>
		<title>Sign in</title>
		<link rel='stylesheet' type='text/css' href='sing_in.css'>
		<link href='https://fonts.googleapis.com/css?family=Alfa+Slab+One|Cinzel|Lakki+Reddy|Odibee+Sans|Source+Code+Pro&display=swap' rel='stylesheet'>
	</head>
	<body>
		<div class='bg'>
			<div class='header'>
				<ul>
					<li>
						<a href='signup.php'>Sign Up</a>
					</li>
					<li>
						
					</li>
					<li>
						<a href='user_info.html'>Profile</a>
					</li>
				</ul>
			</div>
			<h1 class='game_name'>Sing in</h1>
			<div class='menu'>
				<ul>
                    <form name='login.php' action='login.php' method='get'>
                        <li>Username</li>    
                        <input type='text' name='login'  value=''>
                            <br/>
                            <li>Password</li> 
                             <input type='password' name='passwd'  value=''><br>
                             <input type='submit' id='button' name='submit' value='OK'>
					</form>
				</ul>
			</div>
		</div>
	</body>
</html> ";
?>