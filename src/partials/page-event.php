<div class="wide-container no-margin-auto event__title--wide--background">
  <div class="container event__title--background">
    <h1 class="event__title reveal"><?php echo $event->strTitle; ?></h1>
  </div>
</div>

<div class="container">
  <?php if(isset($event->strContactName)) : ?>
  <a href="mailto:<?php echo $event->strContactEmail; ?>">
    <div class="story__meta reveal-meta" data-toggle="tooltip" data-placement="bottom" title="Email <?php echo $event->strContactName; ?>">
      <i class="fas fa-user" data-toggle="tooltip" title="Contact"></i> <?php echo $event->strContactName; ?>
    </div>
  </a>
  <?php endif; ?>

  <div class="story__meta reveal-meta">
    <i class="fas fa-calendar" data-toggle="tooltip" data-placement="bottom" title="Date Modified"></i> <?php echo date("F j, Y", strtotime($event->datModified)); ?>
  </div>

  <br style="clear:both;">
  <div class="alert alert-info">
    <p>display map if only one dateTime?</p>
    <p>display map button if multiple datTimes?</p>
    <p>display multiple dateTimes</p>
    <p>display canceled dateTimes</p>
    <p>don't display dateTimes in the past</p>
    <p>contact</p>
    <p>registration</p>
  </div>




  <?php foreach ($event->DateList as $day) : ?>
    <section class="event__days">
      <h2><?php echo date("F j, Y", strtotime($day->datStartDate)); ?></h2>
      <div class="event__days--times">
        <?php ($day->chrTimeZone == "E") ? $timeZone = "ET" : $timeZone = "CT"; ?>
        <?php echo date("g:i a", strtotime($day->datStartTime)); ?> - <?php echo date("g:i a", strtotime($day->datEndTime)) . " " . $timeZone ?>
      </div>
      <address>
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
    </section>
  <?php endforeach; ?>

  <article class="event__body">
    <?php echo $event->strDescription; ?>
  </article>
</div>

<script type="text/javascript">
    document.title = "<?php echo $event->strTitle; ?> - Purdue Extension";
</script>

<hr>
<?php

print_r($event);

?>
