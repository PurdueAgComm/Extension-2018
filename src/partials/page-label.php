<?php global $county; ?>
<div class="wide-container no-margin-auto label__title--wide--background">
  <div class="container label__title--background">
    <h1 class="label__title reveal">Articles tagged: <?php echo $label->strLabel; ?></h1>
  </div>
</div>
<div class="container">
  <ul class="label__list">
  <?php if(!isset($list)) : ?>
    <?php foreach ($list as $article): ?>
        <a class="label" href="<?php echo $county ? '/'.$county : ''; ?>/article/<?php echo $article->intItemID; ?>">
          <li class="label__list-item">
            <h2><?php echo $article->strTitle; ?></h2>
            <p><?php echo $article->strShortBody; ?></p>
          </li>
        </a>
    <?php endforeach; ?>
  <?php else : ?>
    <br>
    <div class="alert alert-secondary" role="alert" style='color: #383d41;'><i class="fas fa-info-circle"></i> It looks like there are no articles tagged with this label. Go back, <a style='color: #383d41; text-decoration: underline;' href="<?php echo !empty($county) ? '/' . $county : ''; ?>/about/">contact us</a>, or search for what you're looking for above.</div>
  <?php endif; ?>
  </ul>
</div>
