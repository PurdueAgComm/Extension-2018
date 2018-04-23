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
          <?php if(isset($article->thumb)): ?>
            <div class="col-md-auto">
              <a href="/article/<?php echo $article->intItemID; ?>">
                <img src="<?php echo $article->thumb->url; ?>" class="stories-angled__story-image"  alt="<?php echo $article->thumb->alt; ?>" />
              </a>
            </div>
          <?php endif; ?>
          <div class="col">
            <p class="stories-angled__story-date">
              <?php echo $article->datCreated; ?>
              FakeDate 30, 2018
              <?php if($article->bln4H) : echo " | 4-H"; endif; ?>
            </p>
            <a href="/article/<?php echo $article->intItemID; ?>">
              <h3 class="stories-angled__story-title"><?php echo $article->strTitle ?></h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="/articles/" class="cta cta__primary" style='position:relative;z-index: 3;'>View All Stories</a>
        </div>
      </div>
    </div>
  </div>
</div>

