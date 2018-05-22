<?php
/**
 * Assortment of functions that provide middleware wrappers for the ExtDCR class.
 * Inspired by wordpress style function call and templating.
 * This is an optional approach to using the API.
 * Instantiating the ExtDCR class and calling methods can also be done in your template files.
 *
 * @author: John Alder
 * @email: john@sfp.net
 *
 */
function get_homepath()
{
    $known_routes = [
        'category',
        'subcategory',
        'events',
        'event',
        'label',
        'about',
        'article',
        'profile',
        'articles'
    ];
    require_once('../lib/SFP/PurdueAg/src/ExtDCR.php');
    $path = trim($_SERVER['REQUEST_URI'],'/');
    $query_parts =explode('?',$path);
    $path = $query_parts[0];
    $path_parts = explode('/',$path);
    $is_county = '';
    foreach($known_routes as $route) {
        if(strpos($path,$route) === 0){
            //known reserved path is at /, this *must* be the main page, no need to contact the API
            return 'extension.purdue.edu/';
        }
    }
    if(isset($path_parts[0])){
        $is_county = $path_parts[0];
        if(isset($path_parts[1]) && $path_parts[0] === 'extension'){
            //this may be the dev server, get the next subdir
            $is_county = $path_parts[1];
        }
    }
    $ext = SFP\PurdueAg\ExtDCR::validateHomepath('extension.purdue.edu/'.$is_county);
    if($ext){
        return 'extension.purdue.edu/'.$is_county;
    }
    return 'extension.purdue.edu/';
}
function get_template($county = false)
{
    $known_routes = [
        '/category',
        '/subcategory',
        '/events',
        '/event',
        '/label',
        '/about',
        '/articles',
        '/article',
        '/profile',
    ];
    foreach($known_routes as $route){
        if(strpos($_SERVER['REQUEST_URI'],$route) !== false){
            //known route is present in request uri
            return trim($route, '/').'.php';
        }
    }
    if($county){
        return 'county.php';
    }
    return 'home.php';
}
function bootstrap()
{
    //require API Interaction class
    require_once('../lib/SFP/PurdueAg/src/ExtDCR.php');
    //get the global homepath from the view and create the ext global var
    global $homepath, $ext;
    if($homepath == ''){
        //either return an error that the template never set homepath
        error_log('homepath not set by template. Using default value.', 0);
        //or provide a default
        $homepath = 'extension.purdue.edu/';
    }
    //instantiate the ExtDCR with homepath to begin fetching relevant content
    $ext = new SFP\PurdueAg\ExtDCR($homepath);
}
function get_banner()
{
    global $ext;
    $banner = $ext->getPageBanner();
    include('../partials/tpl-banner.php');
}
function get_menu()
{
    global $ext;
    $navigation = $ext->getMenu();
    include('../partials/header-menu.php');
}
function get_navigation()
{
    global $ext;
    $navigation = $ext->getMenu();
    include('../partials/page-navigation.php');
}
function get_article_list($pagesize = 7, $pagecount = 0, $type = 'state')
{
    global $ext;
    $articles = $ext->getArticleList($pagesize, $pagecount);
    if($type == 'state') {
        include('../partials/feed-state-articles.php');
    }
    else {
        include('../partials/feed-county-articles.php');
    }
}
function get_category_list($cat_id, $page_size = 7, $page_count = 0)
{
    global $ext;
    $articles = $ext->getCategoryPage($cat_id, $page_size, $page_count);
    include('../partials/feed-category.php');
}
function get_category_name($cat_id)
{
    //I didn't see a better way to go about matching a category ID to a menu.  Perhaps at a different layer in the framework we can set this on the previous
    //getMenu call to avoid duplicating API calls on category list pages. Maybe set a global var at that time or something.
    global $ext;
    $navigation = $ext->getMenu();
    foreach($navigation->listMenuCategories as $cats){
        if($cats->intCategoryID === $cat_id){
            $cat = $cats->strCategoryText;
        }
    }
    return $cat;
}
function get_event_list($pagesize = 5, $pagecount = 0, $page = "home")
{
    global $ext;
    $events = $ext->getEventList($pagesize, $pagecount, $page);
    include('../partials/feed-event.php');
}
function get_event_filter($pagesize = 10, $pagecount = 0)
{
    global $ext;
    $events = $ext->getEventsByFilter($pagesize, $pagecount);
    include('../partials/feed-event.php');
}
function get_article($article_id)
{
    global $ext;
    global $article;
    $article = $ext->getArticlePage($article_id);
    include('../partials/page-article.php');
}
function get_event($event_id, $event_ed = 0)
{
    global $ext;
    $event = $ext->getEventPage($event_id);
    include('../partials/page-event.php');
}
function get_footer()
{
    include('../partials/tpl-footer.php');
}
function get_header()
{
    include('../partials/tpl-header.php');
}
function get_marketing()
{
    include('../partials/tpl-marketing.php');
}
function get_4h_marketing()
{
    include('../partials/tpl-4h-marketing.php');
}
function get_resource_links()
{
    include('../partials/tpl-resource-links.php');
}
function get_about($countyName)
{
    global $ext;
    $about = $ext->getAboutPage($countyName);
    include('../partials/page-about.php');
}
function get_label($label_id)
{
    global $ext;
    $labels = $ext->getLabelList();
    foreach($labels as $label) {
        if($label->intLabelID == $label_id){
            return $label;
        }
    }
    return false;
}
function get_label_list($label_id)
{
    global $ext;
    $articles = $ext->getLabelPage($label_id);
    usort($articles, 'sort_label_list');
    return $articles;
}
function sort_label_list($a, $b)
{
    return strcmp($a->strTitle, $b->strTitle);
}
function get_label_page($label, $list)
{
    include('../partials/page-label.php');
}
function get_profile($profile_id, $county_name)
{
    global $ext;
    $profile = $ext->getProfile($profile_id);
    $about = $ext->getAboutPage($county_name);
    include('../partials/page-profile.php');
}
function get_county_name()
{
    global $ext;
    return $ext->getCountyTitle();
}
function validate_county($county)
{
    //todo: use the PI API to get county list instead?
    $known_counties = array(
        'Adams',
        'Allen',
        'Bartholomew',
        'Benton',
        'Blackford',
        'Boone',
        'Brown',
        'Carroll',
        'Cass',
        'Clark',
        'Clay',
        'Clinton',
        'Crawford',
        'Daviess',
        'Dearborn',
        'Decatur',
        'DeKalb',
        'Delaware',
        'Dubois',
        'Elkhart',
        'Fayette',
        'Floyd',
        'Fountain',
        'Franklin',
        'Fulton',
        'Gibson',
        'Grant',
        'Greene',
        'Hamilton',
        'Hancock',
        'Harrison',
        'Hendricks',
        'Henry',
        'Howard',
        'Huntington',
        'Jackson',
        'Jasper',
        'Jay',
        'Jefferson',
        'Jennings',
        'Johnson',
        'Knox',
        'Kosciusko',
        'LaGrange',
        'Lake',
        'LaPorte',
        'Lawrence',
        'Madison',
        'Marion',
        'Marshall',
        'Martin',
        'Miami',
        'Monroe',
        'Montgomery',
        'Morgan',
        'Newton',
        'Noble',
        'Ohio',
        'Orange',
        'Owen',
        'Parke',
        'Perry',
        'Pike',
        'Porter',
        'Posey',
        'Pulaski',
        'Putnam',
        'Randolph',
        'Ripley',
        'Rush',
        'Saint Joseph',
        'Scott',
        'Shelby',
        'Spencer',
        'Starke',
        'Steuben',
        'Sullivan',
        'Switzerland',
        'Tippecanoe',
        'Tipton',
        'Union',
        'Vanderburgh',
        'Vermillion',
        'Vigo',
        'Wabash',
        'Warren',
        'Warrick',
        'Washington',
        'Wayne',
        'Wells',
        'White',
        'Whitley',
    );
    foreach($known_counties as $check){
        if(strtolower($check) === strtolower($county)){
            return true;
        }
    }
    return false;
}