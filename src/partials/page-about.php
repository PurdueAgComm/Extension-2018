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
      <!-- FORMSTACK FORM EMBED -->
      <div class="col">
        <h1>About Purdue Extension</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h2>Reach Out</h2>
        <p>Have a question or comment? Fill out the form below to reach the Purdue Extension office directly.</p>
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
          <li><a href="http://extension.purdue.edu/Clark">Clark</li></a>
          <li><a href="http://extension.purdue.edu/Clay">Clay</li></a>
          <li><a href="http://extension.purdue.edu/Clinton">Clinton</a></li>
          <li><a href="http://extension.purdue.edu/Crawford">Crawford</a></li>
          <li><a href="http://extension.purdue.edu/Daviess">Daviess</a></li>
          <li><a href="http://extension.purdue.edu/Dearborn">Dearborn</a></li>
          <li><a href="http://extension.purdue.edu/Decatur">Decatur</a></li>
          <li><a href="http://extension.purdue.edu/DeKalb">DeKalb</a></li>
          <li><a href="http://extension.purdue.edu/Delaware">Delaware</a></li>
          <li><a href="http://extension.purdue.edu/Dubois">Dubois</a></li>
          <li><a href="http://extension.purdue.edu/Elkhart">Elkhart</a></li>
          <li><a href="http://extension.purdue.edu/Fayette">Fayette</a></li>
          <li><a href="http://extension.purdue.edu/Floyd">Floyd</a></li>
          <li><a href="http://extension.purdue.edu/Fountain">Fountain</a></li>
          <li><a href="http://extension.purdue.edu/Franklin">Franklin</a></li>
          <li><a href="http://extension.purdue.edu/Fulton">Fulton</a></li>
          <li><a href="http://extension.purdue.edu/Gibson">Gibson</a></li>
          <li><a href="http://extension.purdue.edu/Grant">Grant</a></li>
          <li><a href="http://extension.purdue.edu/Greene">Greene</a></li>
          <li><a href="http://extension.purdue.edu/Hamilton">Hamilton</a></li>
          <li><a href="http://extension.purdue.edu/Hancock">Hancock</a></li>
          <li><a href="http://extension.purdue.edu/Harrison">Harrison</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="about__office">
          <li><a href="http://extension.purdue.edu/Hendricks">Hendricks</a></li>
          <li><a href="http://extension.purdue.edu/Henry">Henry</a></li>
          <li><a href="http://extension.purdue.edu/Howard">Howard</a></li>
          <li><a href="http://extension.purdue.edu/Huntington">Huntington</a></li>
          <li><a href="http://extension.purdue.edu/Jackson">Jackson</a></li>
          <li><a href="http://extension.purdue.edu/Jasper">Jasper</a></li>
          <li><a href="http://extension.purdue.edu/Jay">Jay</a></li>
          <li><a href="http://extension.purdue.edu/Jefferson">Jefferson</a></li>
          <li><a href="http://extension.purdue.edu/Jennings">Jennings</a></li>
          <li><a href="http://extension.purdue.edu/Johnson">Johnson</a></li>
          <li><a href="http://extension.purdue.edu/Knox">Knox</a></li>
          <li><a href="http://extension.purdue.edu/Kosciusko">Kosciusko</a></li>
          <li><a href="http://extension.purdue.edu/LaGrange">LaGrange</a></li>
          <li><a href="http://extension.purdue.edu/Lake">Lake</a></li>
          <li><a href="http://extension.purdue.edu/LaPorte">LaPorte</a></li>
          <li><a href="http://extension.purdue.edu/Lawrence">Lawrence</a></li>
          <li><a href="http://extension.purdue.edu/Madison">Madison</a></li>
          <li><a href="http://extension.purdue.edu/Marion">Marion</a></li>
          <li><a href="http://extension.purdue.edu/Marshall">Marshall</a></li>
          <li><a href="http://extension.purdue.edu/Martin">Martin</a></li>
          <li><a href="http://extension.purdue.edu/Miami">Miami</a></li>
          <li><a href="http://extension.purdue.edu/Monroe">Monroe</a></li>
          <li><a href="http://extension.purdue.edu/Montgomery">Montgomery</a></li>
          <li><a href="http://extension.purdue.edu/Morgan">Morgan</a></li>
          <li><a href="http://extension.purdue.edu/Newton">Newton</a></li>
          <li><a href="http://extension.purdue.edu/Noble">Noble</a></li>
          <li><a href="http://extension.purdue.edu/Ohio">Ohio</a></li>
          <li><a href="http://extension.purdue.edu/Orange">Orange</a></li>
          <li><a href="http://extension.purdue.edu/Owen">Owen</a></li>
          <li><a href="http://extension.purdue.edu/Parke">Parke</a></li>
          <li><a href="http://extension.purdue.edu/Perry">Perry</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <ul class="about__office">
          <li><a href="http://extension.purdue.edu/Pike">Pike</a></li>
          <li><a href="http://extension.purdue.edu/Porter">Porter</a></li>
          <li><a href="http://extension.purdue.edu/Posey">Posey</a></li>
          <li><a href="http://extension.purdue.edu/Pulaski">Pulaski</a></li>
          <li><a href="http://extension.purdue.edu/Putnam">Putnam</a></li>
          <li><a href="http://extension.purdue.edu/Randolph">Randolph</a></li>
          <li><a href="http://extension.purdue.edu/Ripley">Ripley</a></li>
          <li><a href="http://extension.purdue.edu/Rush">Rush</a></li>
          <li><a href="http://extension.purdue.edu/stjoseph">Saint Joseph</a></li>
          <li><a href="http://extension.purdue.edu/Scott">Scott</a></li>
          <li><a href="http://extension.purdue.edu/Shelby">Shelby</a></li>
          <li><a href="http://extension.purdue.edu/Spencer">Spencer</a></li>
          <li><a href="http://extension.purdue.edu/Starke">Starke</a></li>
          <li><a href="http://extension.purdue.edu/Steuben">Steuben</a></li>
          <li><a href="http://extension.purdue.edu/Sullivan">Sullivan</a></li>
          <li><a href="http://extension.purdue.edu/Switzerland">Switzerland</a></li>
          <li><a href="http://extension.purdue.edu/Tippecanoe">Tippecanoe</a></li>
          <li><a href="http://extension.purdue.edu/Tipton">Tipton</a></li>
          <li><a href="http://extension.purdue.edu/Union">Union</a></li>
          <li><a href="http://extension.purdue.edu/Vanderburgh">Vanderburgh</a></li>
          <li><a href="http://extension.purdue.edu/Vermillion">Vermillion</a></li>
          <li><a href="http://extension.purdue.edu/Vigo">Vigo</a></li>
          <li><a href="http://extension.purdue.edu/Wabash">Wabash</a></li>
          <li><a href="http://extension.purdue.edu/Warren">Warren</a></li>
          <li><a href="http://extension.purdue.edu/Warrick">Warrick</a></li>
          <li><a href="http://extension.purdue.edu/Washington">Washington</a></li>
          <li><a href="http://extension.purdue.edu/Wayne">Wayne</a></li>
          <li><a href="http://extension.purdue.edu/Wells">Wells</a></li>
          <li><a href="http://extension.purdue.edu/White">White</a></li>
          <li><a href="http://extension.purdue.edu/Whitley">Whitley</a></li>
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
