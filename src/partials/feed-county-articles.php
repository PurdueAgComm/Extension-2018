<div class="wide-container">
  <div class="stories-angled">
    <div class="container">
      <h2 class="stories-angled__title">Recent Stories</h2>
    </div>
    <?php
    // alternate classes for each article to tesselate
    $n = 1;
    foreach($articles as $article):
    if($n%2) :
      $storyClassFlag = "edge--both--reverse";
    else :
      $storyClassFlag = "edge--both";
    endif;
    $n++;
    ?>
    <div class="stories-angled__story edge <?php echo $storyClassFlag; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-auto">
            <a href="<?php echo get_article_link($article->intItemID); ?>">
              <?php if($article->thumb->url != "") : ?>
                <img src="<?php echo $article->thumb->url; ?>" class="stories-angled__story-image"  alt="<?php echo $article->thumb->alt; ?>" />
              <?php else : ?>
                <!-- alt tag is empty, but this is the correct way to display decorative images
                  https://www.w3.org/WAI/tutorials/images/decorative/
                -->
                <img src="<?php echo $GLOBALS['SITE_PATH']; ?>/assets/images/placeholder.jpg" class="stories-angled__story-image"  alt="" role="presentation" />
              <?php endif; ?>
            </a>
          </div>
          <div class="col">
            <p class="stories-angled__story-date">
              <?php echo date('F j, Y', strtotime($article->datModified)); ?>
              <!-- FakeDate 30, 2018 -->
              <?php if($article->bln4H) : echo " | 4-H"; endif; ?>
            </p>
            <a href="<?php echo get_article_link($article->intItemID); ?>">
              <h3 class="stories-angled__story-title"><?php echo $article->strTitle ?></h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <div class="container" style="margin-top: 5rem;">
      <div class="row">
        <div class="col">
          <a href="<?php echo get_article_link(); ?>" class="cta cta__primary" style='position:relative;z-index: 3;'>View All Stories</a>
        </div>
      </div>
    </div>
  </div>
</div>

