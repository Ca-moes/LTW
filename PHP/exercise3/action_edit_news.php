<?php 
include_once('database/connection.php');
include_once('database/news.php');

$id = $_POST['id'];
$title = $_POST['title'];
$intro = $_POST['introduction'];
$fullt = $_POST['fulltext'];
$data = array($title, $intro, $fullt, $id);
updateNews($data);

header("Location: news_item.php?id=$id");
?>
