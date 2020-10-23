<form action="action_edit_news.php" method="post">
    <h2>Edit</h2>
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Title 
        <input type="text" name="title" value="<?= $article['title']?>">
    </label>
    <label>Introduction
        <textarea name="introduction" cols="37" rows="20"><?= $article['introduction']?></textarea>
    </label>
    <label>Full Text
        <textarea name="fulltext" cols="37" rows="40"><?= $article['fulltext']?></textarea>            
    </label>
    <input type="submit" value="Submit">
</form>