<?php 
    include_once('database/connection.php');
    include_once('database/news.php');
    $article = getArticle($_GET['id']);
    $id=$_GET['id'];
?>

<form action="">
    <label>Title
        <input type="text" name="title" value="aaa">
    </label>
    <label>Introduction
        <textarea name="fulltext" cols="30" rows="10">aaaa</textarea>
    </label>
    <label>Full Text
        <textarea name="fulltext" cols="30" rows="10">aaa</textarea>
    </label>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="Enter">
</form>
<!-- http://gnomo.fe.up.pt/~up201806224/exercise3/edit_news.php?id=1 -->