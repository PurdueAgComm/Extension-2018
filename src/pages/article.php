<?php
preg_match('~^(.*)/article/(?P<article_id>(\d+))(.*)$~',$_SERVER['REQUEST_URI'],$matches);
if(isset($matches['article_id'])){
    $article_id = (int) $matches['article_id'];
}
get_header();
get_menu();
get_banner();
get_article($article_id);
get_article_list(4, 0, "state");
get_resource_links();
get_footer();