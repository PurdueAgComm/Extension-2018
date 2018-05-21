<div class="wide-container no-margin-auto label__title--wide--background">
  <div class="container label__title--background">
    <h1 class="label__title reveal">Articles tagged: <?php echo $label->strLabel; ?></h1>
  </div>
</div>
<div class="container">
  <ul class="label__list">
  <?php foreach ($list as $article): ?>
      <a class="label" href="/article/<?php echo $article->intItemID; ?>">
        <li class="label__list-item">
          <?php //todo: set the url base to the county so users stay "on-site" when linking??>
          <h2><?php echo $article->strTitle; ?></h2>
          <p><?php echo $article->strShortBody; ?></p>
        </li>
      </a>
  <?php endforeach; ?>
  </ul>
</div>
