<?php
  session_start();                         // starts the session
  include_once('database/connection.php'); // connects to the database
  include_once('database/users.php');      // loads the functions responsible for the users table

  session_unset();

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>