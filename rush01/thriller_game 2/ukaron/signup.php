<?php
session_start();
if ($_SESSION['login'] != '')
header("Location: lobby.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign in</title>
		<link rel="stylesheet" type="text/css" href="sing_in.css">
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Cinzel|Lakki+Reddy|Odibee+Sans|Source+Code+Pro&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="bg">
			<div class="header">
				<ul>
					<li>
						<a href="sign_in.php">Sign in</a>
					</li>
					<li>
						
					</li>
					<li>
						<a href="user_info.html">Profile</a>
					</li>
				</ul>
			</div>
			<h1 class="game_name">Sing up</h1>
			<div class="menu">
				<ul>
                    <form name="create.php" action="create.php" method="post">
                        <li>Username</li>    
                        <input type="text" name="login" value="">
                            <br/>
                        <li>Password</li> 
						<input type="password" name="passwd" value=""><br>
                        <input type="submit" id="button" name="submit" value="OK">
					</form>
				</ul>
			</div>
		</div>
	</body>
</html>