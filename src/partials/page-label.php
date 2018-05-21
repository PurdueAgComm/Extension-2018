<h1><?php echo $label->strLabel; ?></h1>
<ul>
<?php foreach($list as $article): ?>
    <li>
        <?php //todo: set the url base to the county so users stay "on-site" when linking? ?>
        <a href="/<?php global $county; echo $county; ?>/article/<?php echo $article->intItemID; ?>"><?php echo $article->strTitle; ?></a>
        <?php var_dump($article); ?>
    </li>
<?php endforeach; ?>
</ul>