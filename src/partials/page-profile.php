<?php
// Page to display profiles for Extension staff members
// If users are on a county site, it will display other county staff members
// $about['contact'] is available for county-location information, but is not currently used
?>
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
    <br>
    <div class="row">
      <div class="col-md-3">
        <div class="profile__person-photo">
          <img src="https://extension.purdue.edu/ProfileImages/<?php echo $profile->strAlias; ?>.jpg" alt="Photo of <?php echo $profile->strFirstName . " " . $profile->strLastName . " " . $profile->strSuffix; ?>" class="img-responsive" />
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-12">
            <h3 class="profile__person-name"><?php echo $profile->strFirstName . " " . $profile->strLastName . " " . $profile->strSuffix; ?></h3>
            <h4 class="profile__person-title"><?php echo $profile->strPreferredTitle; ?></h4>
          </div>
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="profile__person-email--icon col-2">
                <i class="fas fa-envelope fa-fw"></i>
              </div>
              <div class="profile__person-email--email col-10">
                <a href="mailto:<?php echo $profile->strEmail; ?>"><?php echo $profile->strEmail; ?></a>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="profile__person-phone--icon col-2">
                <i class="fas fa-phone fa-fw"></i>
              </div>
              <div class="profile__person-phone--phone col-10">
                <a href="tel:<?php echo $profile->strEmail; ?>"><?php echo $profile->strPhone; ?></a>
              </div>
            </div>
          </div> <!-- /.col-6 -->
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="profile__person-email--icon col-2">
                <i class="fas fa-envelope fa-fw"></i>
              </div>
              <div class="profile__person-email--email col-10">
                <a href="mailto:<?php echo $profile->strEmail; ?>"><?php echo $profile->strEmail; ?></a>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="profile__person-phone--icon col-2">
                <i class="fas fa-phone fa-fw"></i>
              </div>
              <div class="profile__person-phone--phone col-10">
                <a href="tel:<?php echo $profile->strEmail; ?>"><?php echo $profile->strPhone; ?></a>
              </div>
            </div>
          </div> <!-- /.col-6 -->
        </div> <!-- /.row -->
      </div> <!-- /.col-sm-9 -->
    </div> <!-- /.row -->
  <?php endif; ?>
</div>

<?php if (!empty($county_name)) : ?>
<br>
<div class="container">
  <h2>Meet Other <?php echo ucwords($county_name); ?> County Colleagues</h2>
  <div class="row">
  <?php foreach ($about['staff'] as $staff): ?>
      <?php if ($staff->strAlias != $profile->strAlias): ?>
          <div class="col-6">
            <div class="profile__staff">
              <h3 class="profile__staff-name"><?php echo $staff->strFirstName . " " . $staff->strLastName . " " . $staff->strSuffix; ?></h3>
              <p class="profile__staff-title"><?php echo $staff->strPreferredTitle; ?></p>
            </div>
          </div>
      <?php endif; ?>
  <?php endforeach; ?>
  </div> <!-- /.row -->
</div> <!-- /. container -->
<?php endif; ?>
