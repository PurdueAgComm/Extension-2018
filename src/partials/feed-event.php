<?php
/**
 * Homepage Event Feed List
 */
?>

<div class="container">
  <div class="events">
    <h2>Upcoming Events</h2>
    <div class="events__event">
      <div class="row justify-content-md-center">
        <div class="col-md-auto">
          <div class="events__event-date">
            <p class="events__event-day">Wed</p>
            <p class="events__event-num">05</p>
            <p class="events__event-month">Jan</p>
          </div>
        </div>
        <div class="col">
          <div class="events__event-title">
            <h3>Susutainable Farm Law 101: Beginning Farmer Central Region Workshop</h3>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="events__event-details">
            <p class="events__event-location">Indianapolis</p>
            <p class="events__event-time">9:00 AM EST</p>
          </div>
        </div>
      </div>
    </div>
    <div class="events__event events__event--featured">
      <div class="row justify-content-md-center">
        <div class="col-md-auto">
          <div class="events__event-date">
            <p class="events__event-day">Wed</p>
            <p class="events__event-num">05</p>
            <p class="events__event-month">Jan</p>
          </div>
        </div>
        <div class="col">
          <div class="events__event-title">
            <h3>Susutainable Farm Law 101: Beginning Farmer Central Region Workshop</h3>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="events__event-details">
            <p class="events__event-location">Indianapolis</p>
            <p class="events__event-time">9:00 AM EST</p>
          </div>
        </div>
      </div>
    </div>
    <div class="events__event events__event--canceled">
      <div class="row justify-content-md-center">
        <div class="col-md-auto">
          <div class="events__event-date">
            <p class="events__event-day">Wed</p>
            <p class="events__event-num">05</p>
            <p class="events__event-month">Jan</p>
          </div>
        </div>
        <div class="col">
          <div class="events__event-title">
            <h3>Susutainable Farm Law 101: Beginning Farmer Central Region Workshop</h3>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="events__event-details">
            <p class="events__event-canceled">Canceled</p>
            <p class="events__event-location">Indianapolis</p>
            <p class="events__event-time">9:00 AM EST</p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="cta cta__primary">View All Events</a>
  </div>
</div>


<ul>
<?php foreach($events as $event): ?>
    <li><?php print_r($event); ?></li>
<?php endforeach; ?>
</ul>
