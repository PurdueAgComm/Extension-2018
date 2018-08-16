<!DOCTYPE html>
<html lang="en">
<?php
global $article;
global $event;
global $county;

// determine URL structure since dev and production is different
// dev = purdue.edu/extension
// prod = extension.purdue.edu
if($_SERVER["SERVER_NAME"] == "dev.www.purdue.edu") {
  $GLOBALS['SITE_PATH'] = "/extension";
}
else {
  $GLOBALS['SITE_PATH'] = "";
}
// Social media variable setting
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$title = "Purdue Extension";
$image = "https://extension.purdue.edu/annualreport/images/cover.jpg";
$description = 'See how Purdue Extension connects Indiana to Purdue University research and programs in agriculture, communities, families, health, and youth development.';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo get_county_name(); ?> - Purdue Extension</title>
  <link rel="stylesheet" href="<?php echo $GLOBALS['SITE_PATH']; ?>/_compiled/styles.css">
  <meta name="description" content="<?php echo $description; ?>" />
  <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png" />
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-ipad-retina.png" />
  <!-- Twitter Card data -->
  <meta name="twitter:card" value="summary">
  <!-- Open Graph data -->
  <meta property="og:url" content="<?php echo $url; ?>" />
  <?php if(isset($article->strTitle)) : // if this is an article ?>
    <!-- Article specific OG tags -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $article->strTitle; ?>" />
    <?php if(isset($article->strShortBody)) : // If this article has a 'blurb' ?>
      <meta property="og:description" content="<?php echo $article->strShortBody; ?>" />
    <?php elseif(isset($description)) : // If not, use the standard description ?>
      <meta property="og:description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php if(isset($article->strAuthorName)) : // If the article has an author ?>
      <meta property="article:author" content="<?php echo $article->strAuthorName; ?>" />
    <?php endif; ?>
    <?php if(count($article->details->Images)) : // If there are images with this article ?>
      <?php foreach($article->details->Images as $image) : // List all the images ?>
        <meta property="og:image" content="<?php echo $image->strImageLink; ?>" />
      <?php endforeach; ?>
    <?php else : // This article does not have an image ?>
      <meta property="og:image" content="<?php echo $image; ?>" />
    <?php endif; ?>
  <?php elseif(isset($event->strTitle)) : // if this is an event ?>
    <!-- Event specific tags -->
    <meta property="og:title" content="<?php echo $event->strTitle; ?>" />
    <?php if(!empty($description)) : // If there is a default description given ?>
      <meta property="og:description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <meta property="og:image" content="<?php echo $image; ?>" />
    <?php foreach($event->DateList as $day) : // For each day listed ?>
      <?php if(isset($day->datStartDate)) : // If a start date is listed ?>
        <?php $strDate = date('Y-m-d', strtotime($day->datStartDate)); ?>
        <meta property="startdate" content="<?php echo $strDate ?>" />
      <?php endif; ?>
      <?php if(isset($day->datStartTime)) : // If a start time is listed ?>
        <?php $strStartTime = date('h:i', strtotime($day->datStartTime)); ?>
        <meta property="starttime" content="<?php echo $strStartTime; ?>" />
      <?php endif; ?>
      <?php
        $strAddress = ''; // Start with an empty string
        // Add individual pieces of the address
        if(!empty($day->strAddress1)) {
          if(trim(strtoupper($day->strAddress1)) != 'N/A') {
            $strAddress .= $day->strAddress1 . ', ';
          }
        }
        if(isset($day->strAddress2)) {
          if(trim(strtoupper($day->strAddress2)) != 'N/A') {
            $strAddress .= $day->strAddress2 . ', ';
          }
        }
        if(isset($day->strCity)) {
          $strAddress .= $day->strCity . ', ';
        }
        if(isset($day->strState)) {
          $strAddress .= $day->strState . ' ';
        }
        if(isset($day->strZip)) {
          $strAddress .= $day->strZip;
        }
        // If the address ends with whitespace or commas
        $strAddress = preg_replace('~\W*$~', '', $strAddress);
      ?>
      <?php if(trim($strAddress) != '') : // If strAddress contains an address ?>
        <meta property="address" content="<?php echo $strAddress; ?>" />
      <?php endif; ?>
    <?php endforeach; ?>
  <?php else : // This is something else, like the home page, use default title, description, and image ?>
    <!-- Default OG tags -->
    <meta property="og:title" content="<?php echo $title; ?>" />
    <?php if(!empty($description)) : // If there is a default description provided ?>
      <meta property="og:description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <meta property="og:image" content="<?php echo $image; ?>" />
  <?php endif; ?>

</head>

<body>
  <div class="container">
    <header class="header">
      <!-- TODO: svg of logo -->
      <a href="/"><img src="<?php echo $GLOBALS['SITE_PATH']; ?>/assets/images/logo.svg" alt="Purdue Extension - Purdue University" class="header__logo" /></a>
      <?php if(!empty($county)) : ?>
        <h2 class="header-county--title"><?php echo get_county_name(); ?></h2>
      <?php endif; ?>
      <form action="<?php echo $county ? '/'.$county : ''; ?>/results/" method="get" class="form__search form__search--header">
        <input type="search" name="q" class="form__search-input" placeholder="Search people, articles, and more" aria-label="Search" aria-placeholder="Search people, articles, and more"/>
        <input type="image" value="Search" src="/assets/images/icon--search.svg" class="form__search-submit"  alt="Search">
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
        aria-expanded="false" aria-label="Toggle navigation">
        <p class="navbar-toggler__menu">Menu</p>
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
  </div>