<?php
session_start();
$_SESSION['login'] = '';
header("Location: ../game_lobby/lobby.html");
?>
