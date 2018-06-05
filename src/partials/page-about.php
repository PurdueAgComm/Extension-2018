<?php
// Output about page contact information for state and counties
?>

<?php $contact = (object) $about['contact']; ?>

<?php if ($contact->strCountyName == "") : ?>
  <div class="wide-container no-margin-auto">
    <iframe
      width="100%"
      height="450"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAsACDVQ0WOsJNxWBAKN-GAp45ILf88Lt8
        &q=615 West State Street, Lafayette IN" allowfullscreen>
    </iframe>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>About Purdue Extension</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h2>Reach Out</h2>
        <p>Have a question or comment? Fill out the form below to reach the Purdue Extension office directly.</p>
      <!-- FORMSTACK FORM EMBED -->
        <script type="text/javascript" src="https://purdueagcommunication.formstack.com/forms/js.php/extension_2018_contact_form"></script><noscript><a href="https://purdueagcommunication.formstack.com/forms/extension_2018_contact_form" title="Online Form">Online Form - Extension 2018 Contact Form</a></noscript>
      <!-- END FORMSTACK FORM EMBED -->
      </div>
      <div class="col-sm-6">
        <h2>Call or Visit</h2>
        <address class="about__address">
          615 West State Street<br>
          West Lafayette, IN 47906<br>
          <a href="tel:7654948491">765.494.8491</a><br>
          <a href="tel:8883984636">888.EXT.INFO (888.398.4636)</a><br>
        </address>
      </div>
    </div>
  </div>

  <div class="container">
    <h2>County Offices</h2>
    <!-- TODO: remove alert and update links -->
    <div class="alert alert-info">Updating link styles still, having student intern work on it </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <ul class="about__office">
          <a href="http://extension.purdue.edu/Adams"><li>Adams</li></a>
          <a href="http://extension.purdue.edu/Allen"><li>Allen</li></a>
          <a href="http://extension.purdue.edu/Bartholomew"><li>Bartholomew</li></a>
          <a href="http://extension.purdue.edu/Benton"><li>Benton</li></a>
          <a href="http://extension.purdue.edu/Blackford"><li>Blackford</li></a>
          <a href="http://extension.purdue.edu/Boone"><li>Boone</li></a>
          <a href="http://extension.purdue.edu/Brown"><li>Brown</li></a>
          <a href="http://extension.purdue.edu/Carroll"><li>Carroll</li></a>
          <a href="http://extension.purdue.edu/Cass"><li>Cass</li></a>
          <a href="http://extension.purdue.edu/Clark"><li>Clark</li></a>
          <a href="http://extension.purdue.edu/Clay"><li>Clay</li></a>
          <a href="http://extension.purdue.edu/Clinton"><li>Clinton</li></a>
          <a href="http://extension.purdue.edu/Crawford"><li>Crawford</li></a>
          <a href="http://extension.purdue.edu/Daviess"><li>Daviess</li></a>
          <a href="http://extension.purdue.edu/Dearborn"><li>Dearborn</li></a>
          <a href="http://extension.purdue.edu/Decatur"><li>Decatur</li></a>
          <a href="http://extension.purdue.edu/DeKalb"><li>DeKalb</li></a>
          <a href="http://extension.purdue.edu/Delaware"><li>Delaware</li></a>
          <a href="http://extension.purdue.edu/Dubois"><li>Dubois</li></a>
          <a href="http://extension.purdue.edu/Elkhart"><li>Elkhart</li></a>
          <a href="http://extension.purdue.edu/Fayette"><li>Fayette</li></a>
          <a href="http://extension.purdue.edu/Floyd"><li>Floyd</li></a>
          <a href="http://extension.purdue.edu/Fountain"><li>Fountain</li></a>
          <a href="http://extension.purdue.edu/Franklin"><li>Franklin</li></a>
          <a href="http://extension.purdue.edu/Fulton"><li>Fulton</li></a>
          <a href="http://extension.purdue.edu/Gibson"><li>Gibson</li></a>
          <a href="http://extension.purdue.edu/Grant"><li>Grant</li></a>
          <a href="http://extension.purdue.edu/Greene"><li>Greene</li></a>
          <a href="http://extension.purdue.edu/Hamilton"><li>Hamilton</li></a>
          <a href="http://extension.purdue.edu/Hancock"><li>Hancock</li></a>
          <a href="http://extension.purdue.edu/Harrison"><li>Harrison</li></a>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="about__office">
          <a href="http://extension.purdue.edu/Hendricks"><li>Hendricks</li></a>
          <a href="http://extension.purdue.edu/Henry"><li>Henry</li></a>
          <a href="http://extension.purdue.edu/Howard"><li>Howard</li></a>
          <a href="http://extension.purdue.edu/Huntington"><li>Huntington</li></a>
          <a href="http://extension.purdue.edu/Jackson"><li>Jackson</li></a>
          <a href="http://extension.purdue.edu/Jasper"><li>Jasper</li></a>
          <a href="http://extension.purdue.edu/Jay"><li>Jay</li></a>
          <a href="http://extension.purdue.edu/Jefferson"><li>Jefferson</li></a>
          <a href="http://extension.purdue.edu/Jennings"><li>Jennings</li></a>
          <a href="http://extension.purdue.edu/Johnson"><li>Johnson</li></a>
          <a href="http://extension.purdue.edu/Knox"><li>Knox</li></a>
          <a href="http://extension.purdue.edu/Kosciusko"><li>Kosciusk</li></a>
          <a href="http://extension.purdue.edu/LaGrange"><li>LaGrange</li></a>
          <a href="http://extension.purdue.edu/Lake"><li>Lake</li></a>
          <a href="http://extension.purdue.edu/LaPorte"><li>LaPorte</li></a>
          <a href="http://extension.purdue.edu/Lawrence"><li>Lawrence</li></a>
          <a href="http://extension.purdue.edu/Madison"><li>Madison</li></a>
          <a href="http://extension.purdue.edu/Marion"><li>Marion</li></a>
          <a href="http://extension.purdue.edu/Marshall"><li>Marshall</li></a>
          <a href="http://extension.purdue.edu/Martin"><li>Martin</li></a>
          <a href="http://extension.purdue.edu/Miami"><li>Miami</li></a>
          <a href="http://extension.purdue.edu/Monroe"><li>Monroe</li></a>
          <a href="http://extension.purdue.edu/Montgomery"><li>Montgomery</li></a>
          <a href="http://extension.purdue.edu/Morgan"><li>Morgan</li></a>
          <a href="http://extension.purdue.edu/Newton"><li>Newton</li></a>
          <a href="http://extension.purdue.edu/Noble"><li>Noble</li></a>
          <a href="http://extension.purdue.edu/Ohio"><li>Ohio</li></a>
          <a href="http://extension.purdue.edu/Orange"><li>Orange</li></a>
          <a href="http://extension.purdue.edu/Owen"><li>Owen</li></a>
          <a href="http://extension.purdue.edu/Parke"><li>Parke</li></a>
          <a href="http://extension.purdue.edu/Perry"><li>Perry</li></a>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="about__office">
          <a href="http://extension.purdue.edu/Pike"><li>Pike</li></a>
          <a href="http://extension.purdue.edu/Porter"><li>Porter</li></a>
          <a href="http://extension.purdue.edu/Posey"><li>Posey</li></a>
          <a href="http://extension.purdue.edu/Pulaski"><li>Pulaski</li></a>
          <a href="http://extension.purdue.edu/Putnam"><li>Putnam</li></a>
          <a href="http://extension.purdue.edu/Randolph"><li>Randolph</li></a>
          <a href="http://extension.purdue.edu/Ripley"><li>Ripley</li></a>
          <a href="http://extension.purdue.edu/Rush"><li>Rush</li></a>
          <a href="http://extension.purdue.edu/stjoseph"><li>Saint Joseph</li></a>
          <a href="http://extension.purdue.edu/Scott"><li>Scott</li></a>
          <a href="http://extension.purdue.edu/Shelby"><li>Shelby</li></a>
          <a href="http://extension.purdue.edu/Spencer"><li>Spencer</li></a>
          <a href="http://extension.purdue.edu/Starke"><li>Starke</li></a>
          <a href="http://extension.purdue.edu/Steuben"><li>Steuben</li></a>
          <a href="http://extension.purdue.edu/Sullivan"><li>Sullivan</li></a>
          <a href="http://extension.purdue.edu/Switzerland"><li>Switzerland</li></a>
          <a href="http://extension.purdue.edu/Tippecanoe"><li>Tippecanoe</li></a>
          <a href="http://extension.purdue.edu/Tipton"><li>Tipton</li></a>
          <a href="http://extension.purdue.edu/Union"><li>Union</li></a>
          <a href="http://extension.purdue.edu/Vanderburgh"><li>Vanderburgh</li></a>
          <a href="http://extension.purdue.edu/Vermillion"><li>Vermillion</li></a>
          <a href="http://extension.purdue.edu/Vigo"><li>Vigo</li></a>
          <a href="http://extension.purdue.edu/Wabash"><li>Wabash</li></a>
          <a href="http://extension.purdue.edu/Warren"><li>Warren</li></a>
          <a href="http://extension.purdue.edu/Warrick"><li>Warrick</li></a>
          <a href="http://extension.purdue.edu/Washington"><li>Washington</li></a>
          <a href="http://extension.purdue.edu/Wayne"><li>Wayne</li></a>
          <a href="http://extension.purdue.edu/Wells"><li>Wells</li></a>
          <a href="http://extension.purdue.edu/White"><li>White</li></a>
          <a href="http://extension.purdue.edu/Whitley"><li>Whitley</li></a>
        </ul>
      </div>
    </div> <!-- /.row -->
  </div>

<?php else : //county about page?>
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

<?php endif; ?>
