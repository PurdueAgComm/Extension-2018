<?php
get_header();
get_menu();
get_banner(); ?>
<br>
<!-- TODO: put this in a function and make a partial -->
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Search Results</h1>
      <gcse:searchresults-only></gcse:searchresults-only>
    </div>
  </div>
</div>
<?php
get_resource_links();
get_footer(); ?>



<script>
  (function() {
    var cx = '008827541188184757261:ae-edc-nryi';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>