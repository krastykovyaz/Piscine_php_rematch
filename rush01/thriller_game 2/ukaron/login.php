<?php
session_start();
include 'auth.php';

if (auth($_GET['login'], $_GET['passwd']))
{
    $_SESSION['login'] = $_GET['login'];

    header("Location: ../game_lobby/lobby.html");
}
else
    {
        $_SESSION['login'] = '';
        header("Location: ../ukaron/sign_in.php");
    }
?>