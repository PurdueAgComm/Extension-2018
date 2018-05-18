<?php
preg_match('~^(.*)/label/(?P<label_id>(\d+))(.*)$~',$_SERVER['REQUEST_URI'],$matches);
if(isset($matches['label_id'])){
    $label_id = (int) $matches['label_id'];
}
get_header();
get_menu();
get_banner();
$label = get_label($label_id);
$list = get_label_list($label_id);
get_label_page($label, $list);
get_resource_links();
get_footer();