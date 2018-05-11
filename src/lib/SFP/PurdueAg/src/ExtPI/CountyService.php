<?php

namespace SFP\PurdueAg\ExtPI;

require_once('Call.php');

class CountyService extends Call
{
    private $call;

    public function __construct()
    {
        $this->call = $this->baseurl.'CountyService.svc/json/';
    }

    public function getCounty($intCountyID = 0)
    {
        $this->url = $this->call.'GetCounty?intCountyID='.$intCountyID;
        return $this->get();
    }

    public function getCountyList()
    {
        $this->url = $this->call.'GetCountyList';
        return $this->get();
    }

    public function getStaffDirectory($intCountyID)
    {
        $this->url = $this->call.'GetStaffDirectory?intCountyID='.$intCountyID;
        return $this->get();
    }

    public function getVersion()
    {
        $this->url = $this->call.'Version';
        return $this->get();
    }
}