<?php

namespace SFP\PurdueAg\ExtPI;

require_once('Call.php');

class CesInformationService extends Call
{
    private $call;

    public function __construct()
    {
        $this->call = $this->baseurl.'CesInformationService.svc/json/';
    }

    public function getCesJobList()
    {
        $this->url = $this->call.'GetCesJobList';
        return $this->get();
    }

    public function getTitleCesList()
    {
        $this->url = $this->call.'GetTitleCesList';
        return $this->get();
    }

    public function getVersion()
    {
        $this->url = $this->call.'Version';
        return $this->get();
    }
}