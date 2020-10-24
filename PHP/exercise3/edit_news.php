<?php 
    session_start();

    if (array_key_exists('username',$_SESSION) && !empty($_SESSION['username'])) {
        include_once('database/connection.php');
        include_once('database/news.php');
        $article = getArticle($_GET['id']);
        $id=$_GET['id'];

        include_once('templates/common/header.php');
        include_once('templates/news/edit_news.php');
        include_once('templates/common/footer.php');
    }
    else
        header("Location: list_news.php?");

?>

