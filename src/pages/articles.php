<?php
$page_size = 11;
$page_count = 0;
if (isset($_GET['ps'])) {
    $page_size = (int) $_GET['ps'];
    //todo: consider a cap so people can request more than X articles?
}
if (isset($_GET['pc'])) {
    $page_count = (int) $_GET['pc'];
}
get_header();
get_menu();
get_banner();
get_article_list($page_size, $page_count, "feed"); //todo: this calls a template partial probably not intended for this page, how about get_article_feed?
get_resource_links();
get_footer();
