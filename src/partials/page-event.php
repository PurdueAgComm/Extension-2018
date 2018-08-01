<!--
TODO: display canceled dateTimes
      dateTime has passed styling
      toggle button text
      show datetime at top when clicking into specific datetime, logic right below
-->
<?php //var_dump($event);?>
<?php
  $eventDate = false;
  foreach ($event->DateList as $eventDateList) {
      if ($eventDateList->intEventDateID == $event_ed) {
          $eventDate = $eventDateList; //This is the selected Date of the multidate event
      }
  }
  if ($eventDate) {
      //the specified event date is set, let's get those details instead to put into the template below.
    //TODO: da future
    //var_dump($eventDate);
  }
?>


<div class="wide-container no-margin-auto event__title--wide--background">
  <div class="container event__title--background">
    <h1 class="event__title reveal"><?php echo $event->strTitle; ?></h1>
  </div>
</div>

<div class="container">
  <?php if (!empty($event->strContactName)) : ?>
  <a href="mailto:<?php echo $event->strContactEmail; ?>">
    <div class="event__meta reveal-meta" data-toggle="tooltip" data-placement="bottom" title="Email <?php echo $event->strContactName; ?>">
      <i class="fas fa-user" data-toggle="tooltip" title="Contact"></i> <?php echo $event->strContactName; ?>
    </div>
  </a>
  <?php endif; ?>
  <br style="clear:both;">

<?php
if($event->blnNotRequired) : // the datetimes should be outputted seperately ?>

  <?php if(sizeof($event->DateList) > 1 ) : ?>
    <br>
    <div class="alert alert-info"><i class="fas fa-info-circle"></i> You are not expected to attend all of the dates below, you can pick and choose what is convenient for you.</div>
  <?php endif; ?>

  <?php $num = 0; ?>
  <?php foreach ($event->DateList as $day) : ?>
  <?php
    $eventDay = date("D", strtotime($day->datStartDate));
    $eventMonth = date("M", strtotime($day->datStartDate));
    $eventDate = date("d", strtotime($day->datStartDate));
    $eventYear = date("Y", strtotime($day->datStartDate))
  ?>

  <?php if ($num == 1) : ?>
    <a data-toggle="collapse" href="#additionalEvents" role="button" aria-expanded="false" aria-controls="additionalEvents" class="cta cta__primary-small" style='position:relative;z-index: 3;'>See Additional Times & Locations</a>
    <div class="collapse" id="additionalEvents">
  <?php endif; ?>
      <div class="events__event <?php echo $eventClassFlag; ?>">
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <div class="events__event-date">
              <p class="events__event-day"><?php echo $eventDay; ?></p>
              <p class="events__event-num"><?php echo $eventDate; ?></p>
              <p class="events__event-month"><?php echo $eventMonth; ?></p>
            </div>
          </div>
          <div class="col">
            <div class="events__event-time-detail">
              <?php ($day->chrTimeZone == "E") ? $timeZone = "ET" : $timeZone = "CT"; ?>
              <?php if (date("g:i a", strtotime($day->datStartTime)) != "12:00 am" && date("g:i a", strtotime($day->datEndTime)) != "11:59 pm") : ?>
                <?php echo date("g:i a", strtotime($day->datStartTime)); ?> - <?php echo date("g:i a", strtotime($day->datEndTime)) . " " . $timeZone ?>
              <?php else : ?>
                All Day
              <?php endif; ?>
            </div>
            <address class="events__event-address">
              <?php if (!empty($day->strBuilding)) : ?>
                <?php echo $day->strBuilding; ?><br>
              <?php endif; ?>
              <?php if (!empty($day->strAddress1) && $day->strAddress1 != "N/A") : ?>
                <?php echo $day->strAddress1; ?><br>
              <?php endif; ?>
              <?php if (!empty($day->strAddress2)) : ?>
                <?php echo $day->strAddress2; ?><br>
              <?php endif; ?>
              <?php if (!empty($day->strCity) && $day->strCity != "N/A"  && $event->DateList[0]->strCity != "Online" && $event->DateList[0]->strCity != "Available Online") : ?>
                <?php echo $day->strCity; ?>, <?php echo $day->strState; ?> <?php echo $day->strZip; ?>
              <?php endif; ?>
            </address>
            <?php if (!$mapFix && $day->strCity != "Online" && $day->strCity != "N/A" && $day->strCity != "Available Online") : // more than one address so show buttons?>
              <div class="events__event-address">
                <a class="cta cta__tertiary-no-margin" style="font-size: .7em; width: fit-content;" href="https://maps.google.com/?q=<?php echo $day->strAddress1 . ' ' . $day->strCity . ' ' . $day->strState . ' ' . $day->strZip;?>"><i class="fas fa-map-marker"></i> View Map</a>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-4">
            <div class="events__event-details">
              <?php if ($day->blnCancelEvent)  : ?>
                <p class="events__event-canceled">Canceled</p>
              <?php endif; ?>
              <p class="events__event-year"><?php echo $eventYear; ?></p>
            </div>
          </div>
        </div>
      </div>
  <?php $num++; ?>
  <?php if ($num == sizeof($event->DateList) && $num > 1) : // close the collapse div on the last iteration?>
    </div> <!-- //#additionalEvents -->
  <?php endif; ?>
  <?php endforeach; ?>

<?php else : // the datetimes should be combined to show that people need to attend all datetimes ?>

  <?php
  // get first and last elements in the date array to display as a heading
  $dateList = array();
  foreach($event->DateList as $day) {
    $eventMonth = date("F", strtotime($day->datStartDate));
    $eventDate = date("j", strtotime($day->datStartDate));
    $eventYear = date("Y", strtotime($day->datStartDate));
    $dateList[] = $eventMonth . " " . $eventDate;
  }
    $firstDate = reset($dateList);
    $lastDate = end($dateList);
  ?>
  <br>
      <h2><?php echo $firstDate . " - " . $lastDate . ", " . $eventYear; ?></h2>
      <?php if(sizeof($event->DateList) > 1 ) : ?>
        <br>
        <div class="alert alert-info"><i class="fas fa-info-circle"></i> You are expected to attend all dates below.</div>

        <div class="alert alert-success"><i class="fas fa-info-circle"></i> You are expected to attend all dates below.</div>

        <div class="alert alert-warning"><i class="fas fa-info-circle"></i> You are expected to attend all dates below.</div>

        <div class="alert alert-danger"><i class="fas fa-info-circle"></i> You are expected to attend all dates below.</div>

        <div class="alert alert-primary"><i class="fas fa-info-circle"></i> You are expected to attend all dates below.</div>

        <div class="alert alert-secondary"><i class="fas fa-info-circle"></i> You are expected to attend all dates below.</div>
      <?php endif; ?>

  <?php foreach ($event->DateList as $day) : ?>
  <?php
    $eventDay = date("D", strtotime($day->datStartDate));
    $eventMonth = date("M", strtotime($day->datStartDate));
    $eventDate = date("d", strtotime($day->datStartDate));
    $eventYear = date("Y", strtotime($day->datStartDate))
  ?>
    <br>
      <div class="events__event <?php echo $eventClassFlag; ?>">
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <div class="events__event-date">
              <p class="events__event-day"><?php echo $eventDay; ?></p>
              <p class="events__event-num"><?php echo $eventDate; ?></p>
              <p class="events__event-month"><?php echo $eventMonth; ?></p>
            </div>
          </div>
          <div class="col">
            <div class="events__event-time-detail">
              <?php ($day->chrTimeZone == "E") ? $timeZone = "ET" : $timeZone = "CT"; ?>
              <?php if (date("g:i a", strtotime($day->datStartTime)) != "12:00 am" && date("g:i a", strtotime($day->datEndTime)) != "11:59 pm") : ?>
                <?php echo date("g:i a", strtotime($day->datStartTime)); ?> - <?php echo date("g:i a", strtotime($day->datEndTime)) . " " . $timeZone ?>
              <?php else : ?>
                All Day
              <?php endif; ?>
            </div>
            <address class="events__event-address">
              <?php if (!empty($day->strBuilding)) : ?>
                <?php echo $day->strBuilding; ?><br>
              <?php endif; ?>
              <?php if (!empty($day->strAddress1) && $day->strAddress1 != "N/A") : ?>
                <?php echo $day->strAddress1; ?><br>
              <?php endif; ?>
              <?php if (!empty($day->strAddress2)) : ?>
                <?php echo $day->strAddress2; ?><br>
              <?php endif; ?>
              <?php if (!empty($day->strCity) && $day->strCity != "N/A"  && $event->DateList[0]->strCity != "Online" && $event->DateList[0]->strCity != "Available Online") : ?>
                <?php echo $day->strCity; ?>, <?php echo $day->strState; ?> <?php echo $day->strZip; ?>
              <?php endif; ?>
            </address>
            <?php if (!$mapFix && $day->strCity != "Online" && $day->strCity != "N/A" && $day->strCity != "Available Online") : // more than one address so show buttons?>
              <div class="events__event-address">
                <a class="cta cta__tertiary-no-margin" style="font-size: .7em; width: fit-content;" href="https://maps.google.com/?q=<?php echo $day->strAddress1 . ' ' . $day->strCity . ' ' . $day->strState . ' ' . $day->strZip;?>"><i class="fas fa-map-marker"></i> View Map</a>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-4">
            <div class="events__event-details">
              <?php if ($day->blnCancelEvent)  : ?>
                <p class="events__event-canceled">Canceled</p>
              <?php endif; ?>
              <p class="events__event-year"><?php echo $eventYear; ?></p>
            </div>
          </div>
        </div>
      </div>
  <?php endforeach; ?>


<?php endif; //end if required to attend all datetimes ?>


  <div class="row">
    <?php if (!empty($event->strDescription)) : ?>
      <div class="col-sm-8">
        <?php if (sizeof($event->DateList) == 1 && $event->DateList[0]->strCity != "N/A" && $event->DateList[0]->strCity != "Online" && $event->DateList[0]->strCity != "Available Online") : ?>
          <div class="wide-container no-margin-auto">
            <iframe
              width="100%"
              height="450"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAsACDVQ0WOsJNxWBAKN-GAp45ILf88Lt8
                &q=<?php echo $event->DateList[0]->strAddress1; ?>,<?php echo $event->DateList[0]->strCity; ?>+<?php echo $event->DateList[0]->strState; ?>" allowfullscreen>
            </iframe>
          </div>
        <?php endif; ?>
        <article class="event__body">
          <h2>About</h2>
          <?php echo $event->strDescription; ?>
        </article>
      </div>
      <div class="col-sm-4">
        <?php if (!empty($event->strContactName)) : ?>
            <div class="col">
              <div class="event__resource">
                <div class="event__resource-circle event__resource-circle--purple reveal-resource">
                  <i class="fas fa-envelope fa-2x center-circle"></i>
                </div>
                <h3 class="event__resource-title">Contact</h3>
                <?php if (!empty($event->strContactEmail)) : ?>
                  <a href="mailto:<?php echo $event->strContactEmail; ?>" class="cta cta__tertiary-no-margin">Email <?php echo $event->strContactName; ?> <i class="fas fa-arrow-right"></i></a>
                <?php endif;?>
                <?php if (!empty($event->strContactPhone)) : ?>
                    <a href="tel:<?php echo $event->strContactPhone; ?>" class="cta cta__tertiary-no-margin">Call <?php echo $event->strContactName; ?> <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>

          <?php if (!empty($event->strCost) || !empty($event->strRegistration)) : ?>
            <div class="col">
              <div class="event__resource">
                <div class="event__resource-circle event__resource-circle--orange reveal-resource">
                  <i class="far fa-check-square fa-2x center-circle"></i>
                </div>
                <h3 class="event__resource-title">Register</h3>
                <?php if (!empty($event->strCost)) : ?>
                  <p class="event__resource-copy">
                    <strong>Cost:</strong> <?php echo $event->strCost; ?>
                  </p>
                <?php endif; ?>
                <?php if (!empty($event->strRegister)) : ?>
                  <a href="<?php echo $event->strRegister; ?>" class="cta cta__tertiary-no-margin">Register Now <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
      </div>

  <?php else : ?>
      <div class="col-sm-4">
        <?php if (!empty($event->strContactName)) : ?>
            <div class="col">
              <div class="event__resource">
                <div class="event__resource-circle event__resource-circle--purple reveal-resource">
                  <i class="fas fa-envelope fa-2x center-circle"></i>
                </div>
                <h3 class="event__resource-title">Contact</h3>
                <?php if (!empty($event->strContactEmail)) : ?>
                  <a href="mailto:<?php echo $event->strContactEmail; ?>" class="cta cta__tertiary-no-margin">Email <?php echo $event->strContactName; ?> <i class="fas fa-arrow-right"></i></a>
                <?php endif;?>
                <?php if (!empty($event->strContactPhone)) : ?>
                    <a href="tel:<?php echo $event->strContactPhone; ?>" class="cta cta__tertiary-no-margin">Call <?php echo $event->strContactName; ?> <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>

          <?php if (!empty($event->strCost) || !empty($event->strRegistration)) : ?>
            <div class="col">
              <div class="event__resource">
                <div class="event__resource-circle event__resource-circle--orange reveal-resource">
                  <i class="far fa-check-square fa-2x center-circle"></i>
                </div>
                <h3 class="event__resource-title">Register</h3>
                <?php if (!empty($event->strCost)) : ?>
                  <p class="event__resource-copy">
                    <strong>Cost:</strong> <?php echo $event->strCost; ?>
                  </p>
                <?php endif; ?>
                <?php if (!empty($event->strRegister)) : ?>
                  <a href="<?php echo $event->strRegister; ?>" class="cta cta__tertiary-no-margin">Register Now <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
      </div>

  <?php endif; // if no description?>
</div> <!--/.row -->


</div> <!-- /.container -->
<br style="clear:both;">

<?php get_event_list(5, 0); ?>

<script type="text/javascript">
    document.title = "<?php echo $event->strTitle; ?> - Purdue Extension";
</script>
