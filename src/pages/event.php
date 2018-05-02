<?php
preg_match('~^(.*)/event/(?P<event_id>(\d+))(.*)$~',$_SERVER['REQUEST_URI'],$matches);
if(isset($matches['event_id'])){
    $event_id = (int) $matches['event_id'];
}
get_header();
get_menu();
get_banner();
get_event($event_id);
get_resource_links();
get_footer();

