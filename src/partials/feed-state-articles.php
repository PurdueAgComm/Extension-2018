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
        <a href="<?php echo get_article_link($article->intItemID); ?>" class="col-md-3 story-callouts__callout">
          <p class="story-callouts__callout-date">
            <?php echo date('F j, Y', strtotime($article->datModified)); ?>
            <?php if($article->bln4H) : echo " | <span style='color:rgba(51,153,102)'>4-H</span>"; endif; ?>
          </p>
          <h3 class="story-callouts__callout-title"><?php echo $article->strTitle; ?></h3>
        </a>
      <?php endforeach; ?>
      <a href="<?php echo get_article_link(); ?>" class="cta cta__primary">View All Stories</a>
    </div>
  </div>
</div>

