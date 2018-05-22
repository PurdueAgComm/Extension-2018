<?php
/** Begin Bootstrap */

//require the application functions file
//require_once('../app/functions.php');

//set the homepath URL variable
//$county = '';
//if(isset($_GET['county'])){
//    $county = $_GET['county'];
//    if(!validate_county($county)){
//        $county = '';
//    }
//}
//
//$homepath = 'extension.purdue.edu/'.$county;

//kick off the bootstrap
//bootstrap(); //this is already bootstrapped

/** End Bootstrap */
get_header();
get_menu();
get_banner();
get_article_list(4, 0, "county");
get_marketing();
get_event_list(5, 0, "home");
get_resource_links();
get_footer();
?>
