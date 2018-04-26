<?php
get_header();
get_menu();
get_banner(); ?>
<gcse:searchresults-only></gcse:searchresults-only>
<?php
get_resource_links();
get_footer();



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