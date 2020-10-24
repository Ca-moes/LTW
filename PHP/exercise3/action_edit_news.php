<?php 
include_once('database/connection.php');
include_once('database/news.php');

if (array_key_exists('username',$_SESSION) && !empty($_SESSION['username'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $intro = $_POST['introduction'];
    $fullt = $_POST['fulltext'];
    $data = array($title, $intro, $fullt, $id);
    updateNews($data);
}
header("Location: list_news.php?");?>
