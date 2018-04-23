<?php
/**
 * Feed item/article markup
 */
?>
<div class="container">
  <div class="story-callouts">
    <h2 class="story-callouts__title">Recent Stories</h2>
    <div class="row no-gutters">
      <?php foreach($articles as $article):?>
        <a href="/article/<?php echo $article->intItemID; ?>" class="col-md-3 story-callouts__callout">
          <p class="story-callouts__callout-date"><?php echo $article->datCreated; ?>
            FakeDate 30, 2018
            <?php if($article->bln4H) : echo " | 4-H"; endif; ?>
          </p>
          <h3 class="story-callouts__callout-title"><?php echo $article->strTitle; ?></h3>
        </a>
      <?php endforeach; ?>
      <a href="#" class="cta cta__primary">View All Stories</a>
    </div>
  </div>
</div>