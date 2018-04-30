<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Purdue Extension</title>
  <link rel="stylesheet" href="/_compiled/styles.css">
</head>

<body>
  <div class="container">
    <header class="header">
      <!-- TODO: svg of logo -->
      <a href="/"><img src="/assets/images/logo.png" alt="Purdue Extension - Purdue University" class="header__logo" /></a>
      <form action="/results/" method="get" class="form__search form__search--header">
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