<section id="news">
      <article>
        <header>
          <h1><a href="item.html"><?= $article['title'] ?></a></h1>
        </header>
        <img src="http://picsum.photos/600/300?id=<?=$article['id']?>" alt="">
        <p><?= $article['introduction'] ?></p>
          <p><?= $article['fulltext'] ?></p>
        <?php   include('templates/comments/list_comments.php');  // prints the initial part of the HTML document
        ?>
        <?php if (array_key_exists('username',$_SESSION) && !empty($_SESSION['username'])) {?>
        <a href="edit_news.php?id=<?=$article['id']?>">Edit News</a>
        <?php } ?>
        <footer>
          <span class="author"><?= $article['name']?></span>
          <span class="tags">
          <?php foreach ($tags as $tag) { ?>
            <a href="index.html"><?= "#" . $tag ?></a> 
          <?php } ?>
          </span>
          <span class="date"><?= date('Y-m-d H:i:s', $article['published'])?></span>
          <a class="comments" href="item.html#comments"> <?= count($comments) ?> </a>
        </footer>
      </article>
    </section>