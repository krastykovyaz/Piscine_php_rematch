<?php
    require_once('auth.php');
	session_start();
	$_SESSION['loggued_on_user'] = "";
	if (!$_POST || !isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['passwd']) || empty($_POST['passwd']))
	{
		echo ("ERROR\n");
		?>
      <p>
	  <a href="index.html">repeat pls</a>
	  <?php
	  exit();
	}	
	if (!auth($_POST['login'], $_POST['passwd']))
	{
		echo ("ERROR\n");
		?>
      <p>
	  <a href="index.html">repeat pls</a>
	  <?php
	  exit();
	}
	$_SESSION['loggued_on_user'] = $_POST['login'];
	?>
		<html><body>
		
		<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
		<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
			<script>
        setInterval(function () 
		{
            frames['chat'].location = 'chat.php'
        }
		, 5000) // 5 sec
    </script>
	</form>
	<p>
	<a href="logout.php">Exit</a>
	<!-- <a href="index.html">go to Start</a> -->
	</body></html>
