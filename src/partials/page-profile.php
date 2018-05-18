
<?php var_dump($profile); ?>

<?php var_dump($about['contact']); ?>

<h2>Other Profiles in <?php echo ucwords($county_name); ?></h2>
<ul>
<?php foreach($about['staff'] as $p): ?>
    <?php if($p->strAlias != $profile->strAlias): ?>
        <li><?php var_dump($p); ?></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
