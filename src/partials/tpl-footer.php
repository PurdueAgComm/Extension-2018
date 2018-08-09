<?php global $county; ?>
  <div class="wide-container">
    <footer class="footer edge edge--top--reverse">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-8 col-12">
            <?php if(!empty($county)) : ?>
              <p><a href="/<?php echo $county; ?>/about/"><?php echo get_county_name(); ?> Extension</a></p>
            <?php endif; ?>
            <p>&copy; <?php echo date("Y"); ?> Purdue University | <a href="http://www.purdue.edu/purdue/disclaimer.html">An equal access, equal opportunity university</a></p>
            <p>615 West State Street, West Lafayette, IN 47907-2053</p>
            <p>If you have trouble accessing this page because of a disability, please email us at <a href="mailto:extension@purdue.edu?subject=<?php echo $county; ?> ADA Request">extension@purdue.edu</a>.</p>
            <p><a href="https://intranet.extension.purdue.edu/SitePages/Home.aspx">Extension Intranet</a></p>
          </div>
          <div class="col-md-2 col-sm-4 col-6 offset-sm-0 offset-3 ">
            <a href="https://purdue.edu"><img src="https://www.purdue.edu/purdue/images/logo.png" alt="Purdue University"></a>
          </div>
        </div>
      </div>
    </footer>
  </div>


<!-- SCRIPTS -->
  <script src="<?php echo $GLOBALS['SITE_PATH']; ?>/_compiled/vendor.js" async></script>
  <script src="<?php echo $GLOBALS['SITE_PATH']; ?>/_compiled/app.js" async></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</body>
</html>
