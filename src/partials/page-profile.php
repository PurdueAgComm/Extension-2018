<div class="wide-container no-margin-auto profile__title--wide--background">
  <div class="container label__title--background">
    <?php if (!empty($profile)) : ?>
      <h1 class="profile__title reveal">Meet <?php echo $profile->strFirstName . " " . $profile->strLastName; ?></h1>
    <?php else : ?>
      <h1>We couldn't find that staff member</h1>
    <?php endif; ?>
  </div>
</div>
<div class="container">
  <?php if (empty($profile)) : ?>
    <br>
    <h2>Help is on the way!</h2>
    <p>Sorry, but we can't find anyone with the alias you've provided. Try these popular links below to see if you can get to where you're going.</p>
    <ul>
      <!-- TODO: add helpful links -->
      <li><a href="/">Extension Home</a></li>
      <li><a href="https://ag.purdue.edu">Purdue Agriculture</a></li>
      <li><a href="mailto:extension@purdue.edu">Tell us if we've made a mistake</a></li>
    </ul>
  <?php else : ?>
      
  <?php endif; ?>
</div>


<?php var_dump($profile); ?>

<h3>contact</h3>

<?php var_dump($about['contact']); ?>

<h2>Other Profiles in <?php echo ucwords($county_name); ?></h2>
<ul>
<?php foreach ($about['staff'] as $p): ?>
    <?php if ($p->strAlias != $profile->strAlias): ?>
        <li><?php var_dump($p); ?></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
