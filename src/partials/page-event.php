<!--
TODO: display canceled dateTimes
      dateTime has passed styling
      toggle button text
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
    //var_dump($eventDate);
  }
?>
<div class="wide-container no-margin-auto event__title--wide--background">
  <div class="container event__title--background">
    <h1 class="event__title reveal"><?php echo $event->strTitle; ?></h1>
  </div>
</div>

<?php if (sizeof($event->DateList) == 1 && $event->DateList[0]->strCity != "N/A" && $event->DateList[0]->strCity != "Online" && $event->DateList[0]->strCity != "Available Online") : ?>
<?php $mapFix = 1; // fix margin on meta tags?>
<div class="wide-container no-margin-auto">
  <iframe
    width="100%"
    height="450"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAsACDVQ0WOsJNxWBAKN-GAp45ILf88Lt8
      &q=<?php echo $event->DateList[0]->strAddress1; ?>,<?php echo $event->DateList[0]->strCity; ?>+<?php echo $event->DateList[0]->strState; ?>" allowfullscreen>
  </iframe>
</div>`Ω
<?php endif; ?>
<div class="container">
  <?php if (!empty($event->strContactName)) : ?>
  <a href="mailto:<?php echo $event->strContactEmail; ?>">
    <div class="event__meta reveal-meta <?php if ($mapFix) {
    echo 'mapFix';
} ?>" data-toggle="tooltip" data-placement="bottom" title="Email <?php echo $event->strContactName; ?>">
      <i class="fas fa-user" data-toggle="tooltip" title="Contact"></i> <?php echo $event->strContactName; ?>
    </div>
  </a>
  <?php endif; ?>

  <div class="event__meta reveal-meta <?php if ($mapFix) {
    echo 'mapFix';
} ?>">
    <i class="fas fa-calendar" data-toggle="tooltip" data-placement="bottom" title="Date Modified"></i> <?php echo date("F j, Y", strtotime($event->datModified)); ?>
  </div>
  <br style="clear:both;">

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

  <div class="row">
    <?php if (!empty($event->strDescription)) : ?>
      <div class="col-sm-8">
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
