<?php
/**
 * Homepage Event Feed List
 */
?>
<div class="container">
  <div class="events">
    <h2>Upcoming Events</h2>
    <?php foreach($events as $event) :
      // deconstruct event date
      $eventDay = date("D", strtotime($event->datStartDate));
      $eventMonth = date("M", strtotime($event->datStartDate));
      $eventDate = date("d", strtotime($event->datStartDate));
      // format event time
      $eventTime = date('h:i A', strtotime($event->datStartTime));
      //set class for different event states
      // TODO: API does not have Featured Event status
      if($event->blnFeatureEvent) {
        $eventClassFlag = "events__event--featured";
      }
      if($event->blnCancelEvent) {
        $eventClassFlag = "events__event--canceled";
      }
    ?>
    <a href="/event/<?php echo $event->intEventID; ?>">
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
            <div class="events__event-title">
              <h3><?php echo $event->strTitle; ?></h3>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="events__event-details">
              <?php if($event->blnCancelEvent)  : ?>
                <p class="events__event-canceled">Canceled</p>
              <?php endif; ?>
              <p class="events__event-location"><?php echo $event->strCity; ?></p>
              <p class="events__event-time"><?php echo $eventTime; ?></p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <?php endforeach;?>
  </div>
</div>