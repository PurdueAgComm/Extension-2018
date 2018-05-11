<?php

namespace SFP\PurdueAg\ExtPI;

require_once('Call.php');

class DistrictService extends Call
{
    private $call;

    public function __construct()
    {
        $this->call = $this->baseurl.'DistrictService.svc/json/';
    }

    public function getCountyList($intDistrictID)
    {
        $this->url = $this->call.'GetCountyList?intDistrictID='.$intDistrictID;
        return $this->get();
    }

    public function getDistrictList()
    {
        $this->url = $this->call.'GetDistrictList';
        return $this->get();
    }

    public function getStaffDirectory($intDistrictID)
    {
        $this->url = $this->call.'GetStaffDirectory?intDistrictID='.$intDistrictID;
        return $this->get();
    }

    public function getVersion()
    {
        $this->url = $this->call.'Version';
        return $this->get();
    }
}