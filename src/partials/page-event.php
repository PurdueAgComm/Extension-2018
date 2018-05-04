<div class="wide-container no-margin-auto event__title--wide--background">
  <div class="container event__title--background">
    <h1 class="event__title reveal"><?php echo $event->strTitle; ?></h1>
  </div>
</div>


<div class="container">
  <?php if(isset($event->strContactName)) : ?>
  <a href="mailto:<?php echo $event->strContactEmail; ?>">
    <div class="event__meta reveal-meta" data-toggle="tooltip" data-placement="bottom" title="Email <?php echo $event->strContactName; ?>">
      <i class="fas fa-user" data-toggle="tooltip" title="Contact"></i> <?php echo $event->strContactName; ?>
    </div>
  </a>
  <?php endif; ?>

  <div class="event__meta reveal-meta">
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
    <div class="events__event <?php echo $eventClassFlag; ?> reveal">
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
            <?php echo date("g:i a", strtotime($day->datStartTime)); ?> - <?php echo date("g:i a", strtotime($day->datEndTime)) . " " . $timeZone ?>
          </div>
          <address class="events__event-address">
            <?php if(!empty($day->strBuilding)) : ?>
              <?php echo $day->strBuilding; ?><br>
            <?php endif; ?>
            <?php if(!empty($day->strAddress1) && $day->strAddress1 != "N/A") : ?>
              <?php echo $day->strAddress1; ?><br>
            <?php endif; ?>
            <?php if(!empty($day->strAddress2)) : ?>
              <?php echo $day->strAddress2; ?><br>
            <?php endif; ?>
            <?php if(!empty($day->strCity) && $day->strCity != "N/A") : ?>
              <?php echo $day->strCity; ?>, <?php echo $day->strState; ?> <?php echo $day->strZip; ?>
            <?php endif; ?>
          </address>
        </div>
        <div class="col-lg-4">
          <div class="events__event-details">
            <?php if($day->blnCancelEvent)  : ?>
              <p class="events__event-canceled">Canceled</p>
            <?php endif; ?>
            <p class="events__event-year"><?php echo $eventYear; ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php $num++; ?>
  <?php endforeach; ?>

  <?php if($num > 1) : ?>
  <a data-toggle="collapse" href="#additionalEvents" role="button" aria-expanded="false" aria-controls="additionalEvents" class="cta cta__primary-small" style='position:relative;z-index: 3;'>See Additional Times & Locations</a>

  <div class="collapse" id="additionalEvents">
    <div class="card card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
  </div>
  <?php endif; ?>

  <div class="row">
    <div class="col">
      <article class="event__body">
        <h2>About <?php echo $event->strTitle; ?></h2>
        <?php echo $event->strDescription; ?>
      </article>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 offset-md-2">
      <div class="event__resource">
        <div class="event__resource-circle event__resource-circle--purple reveal-resource">
          <i class="fas fa-envelope fa-2x center-circle"></i>
        </div>
        <h3 class="event__resource-title">Contact</h3>

        <p class="event__resource-copy">
          <strong>Persons Name</strong> <br>
          <a href="#">email@email.com</a> <br>
          <a href="tel:">654.435.2342</a>
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="event__resource">
        <div class="event__resource-circle event__resource-circle--teal reveal-resource-2">
          <i class="far fa-check-square fa-2x center-circle"></i>
        </div>
        <h3 class="event__resource-title">Register</h3>
        <p class="event__resource-copy">
          <strong>Cost:</strong> <?php echo $event->strCost; ?>
        </p>
        <a href="#" class="btn cta cta__tertiary-no-margin">Register Now <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div> <!-- /.row -->
</div> <!-- /.container -->
<br style="clear:both;">

<?php get_event_list(5, 0); ?>

<script type="text/javascript">
    document.title = "<?php echo $event->strTitle; ?> - Purdue Extension";
</script>

<hr>
<div class="alert alert-info">
    <p>display map if only one dateTime?</p>
    <p>display map button if multiple dateTimes?</p>
    <p>display multiple dateTimes</p>
    <p>display canceled dateTimes</p>
    <p>dateTime has passed styling</p>
    <p>don't display dateTimes in the past</p>
    <p>contact</p>
    <p>registration</p>
  </div>

<?php

// print_r($event);

?>
