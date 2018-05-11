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

    }

    public function findByRequestingPUID($strLastname = '', $strName = '', $intRequestingPUID = 0)
    {

    }

    public function getCesAppointments($strAlias = '')
    {

    }

    public function getCountyGeneralInfo($strAlias = '', $intCountyID = 0)
    {

    }

    public function getEmployeeCountyList($strAlias = '')
    {

    }

    public function getEmployeeByAlias($strAlias = '')
    {
        $this->url = $this->call.'GetEmployeeByAlias?strAlias='.$strAlias;
        return $this->get();
    }

    public function getEmployeeCountyInfo($strAlias = '', $intOrgID = 0)
    {

    }

    public function getEmployeeOrgInfo($strAlias = '', $intOrgID = 0)
    {

    }

    public function getEmployeeOrgList($strAlias = '', $intDirectoryListID = 0)
    {

    }

    public function getGeneralInfo($strAlias = '', $intOrgID = 0, $intDirectoryID = 0)
    {

    }

    public function getOrgAppointments($strAlias = '')
    {

    }

    public function getVersion()
    {

    }
}