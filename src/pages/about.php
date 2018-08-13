<?php
if($homepath !== 'extension.purdue.edu/'){
    $county = str_replace('extension.purdue.edu/','',$homepath);
}
else{
    $county = '';
}

get_header();
get_menu();
get_about($county);
get_resource_links();
get_footer();