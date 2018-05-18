<?php
preg_match('~^(.*)/profile/(?P<profile>(.*))$~',$_SERVER['REQUEST_URI'],$matches);
if(isset($matches['profile'])){
    $profile = $matches['profile'];
}
if($homepath !== 'extension.purdue.edu/'){
    $county = str_replace('extension.purdue.edu/','',$homepath);
}
else{
    $county = '';
}
get_header();
get_menu();
get_banner();
get_profile($profile, $county);
get_resource_links();
get_footer();