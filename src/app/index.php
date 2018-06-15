<?php
ob_start();
/** Begin Bootstrap */
//require the application functions file
require_once('functions.php');
//set the homepath URL variable
$homepath = get_homepath();
//kick off the bootstrap
bootstrap();
/** End Bootstrap */

//get the template file
if($homepath === 'extension.purdue.edu/'){
    $county = '';
}
else{
    $county = str_replace('extension.purdue.edu/','',$homepath);
}

$template = get_template($county);

/*
*
*   Echo out homepath, county, and template
*
*/

// echo '$homepath : ' . $homepath
//     . '<br />$county : ' . $county
//     . '<br />$template : ' . $template
//     . '<br />';


if(is_file('../pages/'.$template)){
    include('../pages/'.$template);
}

ob_end_flush();