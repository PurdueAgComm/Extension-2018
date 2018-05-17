<?php $root = $navigation->currentHome->strPublicURLRoot; ?>
<div class="wide-container no-margin-auto story__title--wide--background">
  <div class="container story__title--background">
    <h1 class="story__title reveal"><?php echo $article->strTitle; ?></h1>
  </div>
</div>

<!-- example of additional article media being accessed -->
<?php var_dump($article->details); ?>
<?php foreach($article->details->Images as $image): ?>
    <img src="<?php echo $image->strImageLink; ?>" title="<?php echo $image->strCaption; ?>" alt="<?php echo $image->strAltText; ?>" />
<?php endforeach; ?>
<!-- end example -->

<div class="container">
  <?php if(!$article->blnSuppressByline) : ?>
  <a href="<?php echo $GLOBALS['SITE_PATH']; ?>/profile/<?php echo $article->strAuthorAlias; ?>">
    <div class="story__meta reveal-meta" data-toggle="tooltip" data-placement="bottom" title="<?php echo $article->strAuthorTitle;?>">
      <i class="fas fa-user" data-toggle="tooltip" title="Author"></i> <?php echo $article->strAuthorName; ?>
    </div>
  </a>
  <?php endif; ?>

  <div class="story__meta reveal-meta">
    <i class="fas fa-calendar" data-toggle="tooltip" data-placement="bottom" title="Date Modified"></i> <?php echo date("F j, Y", strtotime($article->datModified)); ?>
  </div>

  <article class="story__body">
    <?php echo $article->strBody; ?>
  </article>
</div>

<script type="text/javascript">
    document.title = "<?php echo $article->strTitle; ?> - Purdue Extension";
</script>