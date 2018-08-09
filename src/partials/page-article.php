<?php $root = $navigation->currentHome->strPublicURLRoot; ?>
<div class="wide-container no-margin-auto story__title--wide--background">
  <div class="container story__title--background">
    <h1 class="story__title reveal"><?php echo $article->strTitle; ?></h1>
  </div>
</div>

<div class="container">
  <?php if (!$article->blnSuppressByline) : ?>
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
    <?php foreach ($article->details->Images as $image): ?>
        <img class="reveal float-right img-responsive story__body-image" src="<?php echo $image->strImageLink; ?>" title="<?php echo $image->strCaption; ?>" alt="<?php echo $image->strAltText; ?>" />
    <?php endforeach; ?>
    <?php echo $article->strBody; ?>

    <?php if(!empty($article->details->Files)) : ?>
      <h3>Additional Files</h3>
      <div class="container">
        <div class="row">
          <?php foreach ($article->details->Files as $file): ?>
            <?php if(!$file->blnArchive) : ?>
              <a href="<?php echo $file->strFileLink; ?>" class="story__file"><i class="far fa-file-alt fa-fw"></i> <?php echo $file->strLinkText; ?></a>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

  </article>
</div>

<script type="text/javascript">
    document.title = "<?php echo $article->strTitle; ?> - Purdue Extension";
</script>
