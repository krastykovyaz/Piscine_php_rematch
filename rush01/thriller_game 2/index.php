<?php

require_once('Game.class.php');

$game = new Game('save.game');
$game->handle_events($_POST);
$game->show_board();
$game->show_controler();
$game->save();
?>
