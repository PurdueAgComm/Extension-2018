<?php

namespace SFP\PurdueAg\ExtPI;

require_once('Call.php');

class CampusInformationService extends Call
{
    private $call;

    public function __construct()
    {
        $this->call = $this->baseurl.'CampusInformationService.svc/json/';
    }

    public function getCampusList()
    {
        $this->url = $this->call.'GetCampusList';
        return $this->get();
    }

    public function getEmployeeGroupList()
    {
        $this->url = $this->call.'GetEmployeeGroupList';
        return $this->get();
    }

    public function getEmployeeSubGroupList($chrEmployeeGroupID = '')
    {
        $this->url = $this->call.'GetEmployeeSubGroupList?chrEmployeeGroupID='.$chrEmployeeGroupID;
        return $this->get();
    }

    public function getHrJobList()
    {
        $this->url = $this->call.'GetHrJobList';
        return $this->get();
    }

    public function getStateList()
    {
        $this->url = $this->call.'GetStateList';
        return $this->get();
    }

    public function getVersion()
    {
        $this->url = $this->call.'Version';
        return $this->get();
    }
}