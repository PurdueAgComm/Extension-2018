<?php

/**
 * class ExtPI sets the API call location, gathers and assigns parameters, and makes the GET request via curl.
 * It provides, in a loose sense, a library of API calls available from the PI API service.
 *
 * @author: John Alder
 * @email: john@sfp.net
 *
 */

namespace SFP\PurdueAg\ExtPI;

class Call
{
    public $baseurl = 'https://ag.purdue.edu/api/pi/2014/04/'; //base url for API service
    private $ch; //holds the curl handle
    public $url;

    public function __construct()
    {

    }

    public function get()
    {
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_URL, $this->url);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($this->ch);
        curl_close($this->ch);
        return json_decode($result);
    }

}