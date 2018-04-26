<?php
  //note: this is a patch to fix inline style url paths that are not setting the domain
  $banner->strBody = str_replace('url(/','url(https://extension.purdue.edu/',$banner->strBody);
  //echo $banner->strBody;
?>
<div class="wide-container">
  <div class="hero">
    <picture class="hero__banner">
      <source srcset="/assets/images/purpleag.png" media="(min-width: 992px)">
      <source srcset="/assets/images/purpleag--tablet.png" media="(min-width: 576px)">
      <img srcset="/assets/images/purpleag--mobile.png" alt="A test image">
    </picture>
    <div class="hero__search">
      <script>
        /*
        (function() {
          var cx = '008827541188184757261:ae-edc-nryi';
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        })();
        */
      </script>
      <!-- <gcse:searchbox-only resultsUrl="/results/" class="form__search form__search--hero"></gcse:searchbox-only> -->
      <h2 class="hero__search-title">What are you looking for?</h2>
      <form action="/results/" method="get" class="form__search form__search--hero">
        <input type="search" name="q" class="form__search-input form__search-input--hero" placeholder="Search" aria-label="Search" />
        <input type="image" value="Search" src="/assets/images/icon--search.svg" class="form__search-submit" alt="Search">
      </form>
    </div>
  </div>
</div>