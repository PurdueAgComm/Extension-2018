<?php
preg_match('~^(.*)/subcategory/(?P<cat_id>(\d+))(.*)$~',$_SERVER['REQUEST_URI'],$matches);
if(isset($matches['cat_id'])){
    $cat_id = (int) $matches['cat_id'];
}
$page_size = 11;
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
get_subcategory_list($cat_id, $page_size, $page_count);
get_resource_links();
get_footer();