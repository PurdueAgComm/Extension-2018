<!DOCTYPE html>
<html lang="en">
<?php
// determine URL structure since dev and production is different
// dev = purdue.edu/extension
// prod = extension.purdue.edu
if($_SERVER["SERVER_NAME"] == "dev.www.purdue.edu") {
  $GLOBALS['SITE_PATH'] = "/extension";
}
// Social media variable setting
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$title = "Purdue Extension";
$image = "https://extension.purdue.edu/annualreport/images/cover.jpg";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Purdue Extension</title>
  <link rel="stylesheet" href="<?php echo $GLOBALS['SITE_PATH']; ?>/_compiled/styles.css">
  <meta name="description" content="Purdue Extension helps Indiana build vibrant communities, strong families, and profitable businesses on its Main Streets and at its farm gates." />
  <!-- Twitter Card data -->
  <meta name="twitter:card" value="summary">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?php echo $title; ?>" />
  <?php if(isset($article->strTitle)) : ?>
  <meta property="og:type" content="article" />
  <?php endif; ?>
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:image" content="<?php echo $image; ?>" />
  <?php if(isset($description)) : ?>
  <meta property="og:description" content="<?php echo $description; ?>" />
  <?php endif; ?>
</head>

<body>
  <div class="container">
    <header class="header">
      <!-- TODO: svg of logo -->
      <a href="/"><img src="<?php echo $GLOBALS['SITE_PATH']; ?>/assets/images/logo.png" alt="Purdue Extension - Purdue University" class="header__logo" /></a>
      <form action="<?php echo $GLOBALS['SITE_PATH']; ?>/results/" method="get" class="form__search form__search--header">
        <input type="search" name="q" class="form__search-input" placeholder="Search people, articles, and more" aria-label="Search" aria-placeholder="Search people, articles, and more"/>
        <input type="image" value="Search" src="<?php echo $GLOBALS['SITE_PATH']; ?>/assets/images/icon--search.svg" class="form__search-submit"  alt="Search">
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
        aria-expanded="false" aria-label="Toggle navigation">
        <p class="navbar-toggler__menu">Menu</p>
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
  </div>