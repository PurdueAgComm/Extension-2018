<?php $root = $navigation->currentHome->strPublicURLRoot; ?>

<div class="wide-container no-margin-auto story__title--wide--background">
  <div class="container story__title--background">
    <h1 class="story__title"><?php echo $article->strTitle; ?></h1>
  </div>
</div>

<div class="container">
  <!-- TODO: get_category_name() function create for human name -->
  <a href="/<?php echo $root; ?>/profile/<?php echo $article->strAuthorAlias; ?>">
    <div class="story__meta">
      <i class="fas fa-user" title="Author"></i> <?php echo $article->strAuthorName; ?>
    </div>
  </a>

  <div class="story__meta">
    <i class="fas fa-calendar" title="Date Modified"></i> <?php echo date("F j, Y", strtotime($article->datModified)); ?>
  </div>

  <div class="story__body">
    <?php echo $article->strBody; ?>
  </div>
</div>

<hr>


<h4>NOTE:Full Object Dump</h4>
<pre>
<?php var_dump($article); ?>
</pre>
