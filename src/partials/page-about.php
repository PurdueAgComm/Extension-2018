<?php
// Output about page contact information for state and counties
?>

<?php $contact = (object) $about['contact']; ?>

<div class="wide-container no-margin-auto">
  <iframe
    width="100%"
    height="450"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAsACDVQ0WOsJNxWBAKN-GAp45ILf88Lt8
      &q=<?php echo $contact->Address->strAddress1; ?>,<?php echo $contact->Address->strCity; ?>+<?php echo $contact->Address->strStateID; ?>" allowfullscreen>
  </iframe>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>About <?php echo $contact->strCountyName; ?> County <small>Purdue Extension</small></h1>

      <h2>Contact Us</h2>
      <address class="about__address">
        <?php echo $contact->Address->strAddress1; ?><br>
        <?php if (!empty($contact->Address->strAddress2)) : ?>
          <?php echo $contact->Address->strAddress2; ?><br>
        <?php endif; ?>
        <?php echo $contact->Address->strCity; ?>, <?php echo $contact->Address->strStateID; ?> <?php echo $contact->Address->strZip; ?><br>
        <?php if (!empty($contact->Address->strPhone)) : ?>
          <?php echo $contact->Address->strPhone; ?><br>
        <?php endif; ?>
      </address>
    </div>
  </div>
</div>

<div class="container">
  <h2><?php $contact->strCountyName; ?> Staff Directory</h2>
  <div class="row">
  <?php foreach ($about['staff'] as $staff): ?>
      <?php if ($staff->strAlias != $profile->strAlias): ?>
          <div class="col-6">
            <a class="about" href="profile/<?php echo $staff->strAlias; ?>">
              <div class="about__staff">
                <h3 class="about__staff-name"><?php echo $staff->strFirstName . " " . $staff->strLastName . " " . $staff->strSuffix; ?></h3>
                <p class="about__staff-title"><?php echo $staff->strPreferredTitle; ?></p>
              </div>
            </a>
          </div>
      <?php endif; ?>
  <?php endforeach; ?>
  </div> <!-- /.row -->
</div> <!-- /. container -->
