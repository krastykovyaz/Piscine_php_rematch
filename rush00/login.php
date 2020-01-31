<?php
    require_once('auth.php');
	session_start();
	$_SESSION['loggued_on_user'] = "";
	if (!$_POST || !isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['passwd']) || empty($_POST['passwd']))
	{
		?>
      <p>
	  <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
	  <a href="index.html" style="font-family: Courier New">repeat pls</a>
	</div>
	  <?php
	  exit();
	}	
	if (!auth($_POST['login'], $_POST['passwd']))
	{
		?>
      <p>
	  <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
	  <a href="index.html" style="font-family: Courier New">repeat pls</a>
	</div>
	  <?php
	  exit();
	}
	$_SESSION['loggued_on_user'] = $_POST['login'];
	?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>shopping cart</title>

	</head>
	<body>
	<p>
	<link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
	<a href="index.php" style="font-family: Courier New">Let's go shopping</a></p>
	<a href="logout.php" style="font-family: Courier New">Exit</a>
</div>
	<!-- <a href="index.html">go to Start</a> -->
	</body></html>
