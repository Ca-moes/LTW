<?php
// include_once('game.php');

/*
 * if (isset($_POST['position'])){
  play($_POST['id'], $_POST['position']);
}*/
echo json_encode(array('state' => 'playing', 'squares' => array ('X', 'O', 'X', 'O', '', '', '', '', '')));