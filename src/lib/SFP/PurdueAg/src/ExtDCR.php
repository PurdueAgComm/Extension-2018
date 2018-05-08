<?php
/**
 * class ExtDCR is an API wrapper for the ag DepotWS service.
 * It relies on ExtCall class to make the cURL web requests to the API.
 * It organizes and structures the responses and then returns data for the PHP templates to render out.
 *
 * @author: John Alder
 * @email: john@sfp.net
 *
 */

namespace SFP\PurdueAg;

//require API Calling Class
require_once('ExtCall.php');

use stdClass;

class ExtDCR
{
    private $call;
    private $api = 'https://api.ag.purdue.edu/api/DepotWS/';
    private $homeId = 0;
    private $countyUrl;

    public function __construct($county_url)
    {
        $this->call = new ExtCall($this->api);
        $this->countyUrl = $county_url;
        $this->homeId = $this->_getHomeID($this->countyUrl);
    }

    //todo: deprecate this, move to wrapper functions
    public function getHeaderElements($county_url)
    {
        //get the home id for the current landing page
        $id = $this->_getHomeID($county_url);

        $social = $this->call->getSocialMediaLinks($id);

        $header = array(
            'social' => $social
        );

        return $header;
    }

    public function getMenu()
    {
        $menu = $this->call->getMenu($this->homeId);
        return $menu;
    }

    public function getAboutPage()
    {

    }

    public function getProfilePage()
    {

    }

    //todo: move this to the ExtCall Class
    public function getArticlePage($article_id)
    {
        $params = array(
            't' => 'd', //get item details
            'i' => $article_id,
        );
        $result = $this->call->post('Item.ashx', $params);
        $article = $result;
        return $article;
    }

    public function getLabelPage()
    {
        return $this->call->getLabelList();
    }

    //todo: move this to the ExtCall Class
    public function getEventPage($event_id)
    {
        $params = array(
            't' => 'd', //get event details?
            'i' => $event_id,
        );
        $result = $this->call->post('event.ashx', $params);
        $event = $result; //todo: transform or modify?
        return $event;
    }

    public function getEventsPage()
    {

    }

    //todo: move this to the ExtCall Class
    public function getCategoryPage($cat_id, $page_size = 7, $page_count = 0)
    {
        //retrieve item blurb list
        $params = array(
            't' => 'bp',
            'i' => $this->_getHomeID(),
            'ps' => $page_size,
            'pc' => $page_count,
            'c' => $cat_id,
            's' => -1
        );
        $results = $this->call->post('Item.ashx', $params);

        foreach($results as &$result){
            $expandedDetails = $this->call->getExpandedItemDetails($result->intItemID);
            if(count($expandedDetails->Images)){
                //let's get the thumbnail
                $imageUrl = $this->call->getImageLink($expandedDetails->Images[0]->intImageID);
                $result->thumb = new stdClass();
                $result->thumb->url = $imageUrl;
                $result->thumb->alt = $expandedDetails->Images[0]->strAltText;
            }
        }

        return $results;
    }

    //todo: move this to the ExtCall Class
    public function getSubCategoryPage()
    {
        //retrieve item blurb list
        $params = array(
            't' => 'b',
            'i' => 1
        );
        $result = $this->call->post('Item.ashx', $params);
        return $result;
    }

    public function getPageBanner()
    {
        return $this->call->getStaticItemDetails($this->_getHomeID());
    }

    private function _getHomeID($url = false)
    {
        if ($url === false) {
            $url = $this->countyUrl;
        }
        if ($this->homeId === 0 && $url !== false) {
            $result = $this->call->getHomeID($url);
            $this->homeId = $result->intHomeID;
        }
        return $this->homeId;
    }

    public static function validateHomepath($url)
    {
        $call = new ExtCall('https://api.ag.purdue.edu/api/DepotWS/');
        $ext = $call->getHomeID($url);
        if(isset($ext->intHomeID)){
            return true;
        }
        return false;
    }

    public function getArticleList($size = 7, $count = 0)
    {
        $articles = $this->call->getItemBlurbList($this->_getHomeID(), $size, $count);

        //build article list additional details/assets
        foreach($articles as &$article){
            //extra API calls could become a performance concern, let's consider caching this information
            $expandedDetails = $this->call->getExpandedItemDetails($article->intItemID);
            $articleDetails = $this->call->getItemDetails($article->intItemID);
            $article->datCreated = $articleDetails->datCreated;
            $article->datModified = $articleDetails->datModified;

            if(count($expandedDetails->Images)){
                //let's get the thumbnail
                $imageUrl = $this->call->getImageLink($expandedDetails->Images[0]->intImageID);
                $article->thumb = new stdClass();
                $article->thumb->url = $imageUrl;
                $article->thumb->alt = $expandedDetails->Images[0]->strAltText;
            }
        }

        return $articles;
    }

    public function getEventList($size = 5, $count = 0)
    {
        $events = $this->call->getEventList($this->_getHomeID(), $size, $count);
        return $events;
    }

    public function getEventsByFilter($size = 10, $count = 0)
    {
        $params = array(
            't' => 'ef',
            'l' => $this->_getHomeID(),
            'tids' => -1,
            //'cids' => 7,
            'ps' => $size,
            'pn' => $count,
            'sd' => date('m-d-Y'),
            //'ed',
            //'scids' => 33,
            'sar' => false,
            'bc' => true,
        );

        $result = $this->call->post('event.ashx', $params);
        return $result;
    }
}
