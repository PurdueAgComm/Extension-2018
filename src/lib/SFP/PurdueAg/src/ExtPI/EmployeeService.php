<?php

namespace SFP\PurdueAg\ExtPI;

require_once('Call.php');

class EmployeeService extends Call
{
    private $call;

    public function __construct()
    {
        $this->call = $this->baseurl.'EmployeeService.svc/json/';
    }

    public function find($strLastName = '', $strName = '')
    {
        $this->url = $this->call.'Find?strLastName='.$strLastName.'&strName='.$strName;
        return $this->get();
    }

    public function findByRequestingPUID($strLastName = '', $strName = '', $intRequestingPUID = 0)
    {
        $this->url = $this->call.'FindByRequestingPUID?strLastName='.$strLastName.'&strName='.$strName.'&intRequestingPUID='.$intRequestingPUID;
        return $this->get();
    }

    public function getCesAppointments($strAlias = '')
    {
        $this->url = $this->call.'GetCesAppointments?strAlias='.$strAlias;
        return $this->get();
    }

    public function getCountyGeneralInfo($strAlias = '', $intCountyID = 0)
    {
        $this->url = $this->call.'GetCountyGeneralInfo?strAlias='.$strAlias.'&intCountyID='.$intCountyID;
        return $this->get();
    }

    public function getEmployeeCountyList($strAlias = '')
    {
        $this->url = $this->call.'GetEmployeeCountyList?strAlias='.$strAlias;
        return $this->get();
    }

    public function getEmployeeByAlias($strAlias = '')
    {
        $this->url = $this->call.'GetEmployeeByAlias?strAlias='.$strAlias;
        return $this->get();
    }

    public function getEmployeeCountyInfo($strAlias = '', $intOrgID = 0)
    {
        $this->url = $this->call.'GetEmployeeCountyInfo?strAlias='.$strAlias.'&intOrgID='.$intOrgID;
        return $this->get();
    }

    public function getEmployeeOrgInfo($strAlias = '', $intOrgID = 0)
    {
        $this->url = $this->call.'GetEmployeeOrgInfo?strAlias='.$strAlias.'&intOrgID='.$intOrgID;
        return $this->get();
    }

    public function getEmployeeOrgList($strAlias = '', $intDirectoryListID = 0)
    {
        $this->url = $this->call.'GetEmployeeOrgList?strAlias='.$strAlias.'&intDirectoryListID='.$intDirectoryListID;
        return $this->get();
    }

    public function getGeneralInfo($strAlias = '', $intOrgID = 0, $intDirectoryID = 0)
    {
        $this->url = $this->call.'GetGeneralInfo?strAlias='.$strAlias.'&intOrgID='.$intOrgID.'&intDirectoryID='.$intDirectoryID;
        return $this->get();
    }

    public function getOrgAppointments($strAlias = '')
    {
        $this->url = $this->call.'GetOrgAppointments?strAlias='.$strAlias;
        return $this->get();
    }

    public function getVersion()
    {
        $this->url = $this->call.'Version';
        return $this->get();
    }
}