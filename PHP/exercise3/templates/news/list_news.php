<section id="news">
    <?php
    foreach ($articles as $article) {
      $tags = explode(',',$article['tags']);
    ?>
      <article>
      <header>
        <h1><a href="news_item.php?id=<?=$article['id']?>"><?= $article['title']?></a></h1>
      </header>
      <img src="http://picsum.photos/600/300?id=<?=$article['id']?>" alt="">
      <p><?= $article['introduction']?></p> 
      <p><?= $article['fulltext']?></p>
      <footer>
        <span class="author"><?= $article['name']?></span>
        <span class="tags">
        <?php foreach ($tags as $tag) { ?>
          <a href="index.html"><?= "#" . $tag ?></a> 
        <?php } ?>
        </span>
        <span class="date"><?= date('Y-m-d H:i:s', $article['published'])?></span>
        <a class="comments" href="item.html#comments"> <?= $article['comments'] ?> </a>
      </footer>
    </article>
    <?php } ?>
    
  </section>