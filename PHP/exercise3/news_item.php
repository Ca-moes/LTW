<?php 
  session_start();

  include_once('database/connection.php');
  include_once('database/news.php');
  include_once('database/comments.php');

  $article = getArticle($_GET['id']);
  $comments = getComments($_GET['id']);
  $tags = explode(',',$article['tags']);

  include('templates/common/header.php');  // prints the initial part of the HTML document
  include('templates/news/view_news.php');
  include('templates/common/footer.php');  // prints the initial part of the HTML document
?>