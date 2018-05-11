<?php
preg_match('~^(.*)/event/(?P<event_id>(\d+))/(?P<event_ed>(\d+))(.*)$~',$_SERVER['REQUEST_URI'],$matches);
if(count($matches) === 0){
    //let's try getting the default event instead.
    preg_match('~^(.*)/event/(?P<event_id>(\d+))(.*)$~',$_SERVER['REQUEST_URI'],$matches);
}
if(isset($matches['event_id'])){
    $event_id = (int) $matches['event_id'];
}
if(isset($matches['event_ed'])){
    $event_ed = (int) $matches['event_ed'];
}

get_header();
get_menu();
get_banner();
get_event($event_id, $event_ed);
get_resource_links();
get_footer();
