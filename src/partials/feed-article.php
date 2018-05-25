<div class="wide-container">
  <div class="stories-angled">
    <div class="container">
      <h2 class="stories-angled__title">Purdue Extension Stories</h2>
    </div>
    <?php
    // alternate classes for each article to tesselate
    $n = 1;
    foreach ($articles as $article):
    if ($n%2) :
      $storyClassFlag = "edge--both--reverse";
    else :
      $storyClassFlag = "edge--both";
    endif;
    $n++;
    ?>
    <div class="stories-angled__story edge <?php echo $storyClassFlag; ?>">
      <div class="container">
        <div class="row">
          <?php if (isset($article->thumb)): ?>
            <div class="col-md-auto">
              <a href="<?php echo $GLOBALS['SITE_PATH']; ?>/article/<?php echo $article->intItemID; ?>">
                <img src="<?php echo $article->thumb->url; ?>" class="stories-angled__story-image"  alt="<?php echo $article->thumb->alt; ?>" />
              </a>
            </div>
          <?php endif; ?>
          <div class="col">
            <p class="stories-angled__story-date">
              <?php echo date('F j, Y', strtotime($article->datModified)); ?>
              <!-- FakeDate 30, 2018 -->
              <?php if ($article->bln4H) : echo " | 4-H"; endif; ?>
            </p>
            <a href="<?php echo $GLOBALS['SITE_PATH']; ?>/article/<?php echo $article->intItemID; ?>">
              <h3 class="stories-angled__story-title"><?php echo $article->strTitle ?></h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <div class="container">
      <div class="row">
        <?php
        if ($page != "home") : //don't show pagination on home page
          if (isset($_GET['pc'])) :
            $page_count = (int) $_GET['pc'];
          endif;
          if ($page_count < 1) :
          ?>
            <a href="?pc=<?php echo $page_count+1;?>" class="cta cta__primary" style='position:relative;z-index: 3;'>Next Page &raquo;</a>
          <?php
          else :
          ?>
            <div class="col-sm-6">
              <a href="?pc=<?php echo $page_count-1;?>" class="cta cta__primary" style='position:relative;z-index: 3;'>&laquo; Previous Page</a>
            </div>
            <div class="col-sm-6">
              <a href="?pc=<?php echo $page_count+1;?>" class="cta cta__primary" style='position:relative;z-index: 3;'>Next Page &raquo;</a>
            </div>
          <?php endif;
        else : ?>
          <a href="<?php echo $GLOBALS['SITE_PATH']; ?>/events/" class="cta cta__primary">View All Events</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
