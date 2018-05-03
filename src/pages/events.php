<?php
$page_size = 10;
$page_count = 0;
if(isset($_GET['ps'])){
    $page_size = (int) $_GET['ps'];
}
if(isset($_GET['pc'])){
    $page_count = (int) $_GET['pc'];
}
get_header();
get_menu();
get_banner();
echo "<br>";
get_event_list($page_size, $page_count, "events");
get_resource_links();
get_footer();