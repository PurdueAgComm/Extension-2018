<?php

namespace SFP\PurdueAg\ExtPI;

require_once('Call.php');

class OrganizationService extends Call
{
    private $call;

    public function __construct()
    {
        $this->call = $this->baseurl.'OrganizationService.svc/json/';
    }

    public function getDepartmentDirectoryList()
    {
        $this->url = $this->call.'DepartmentDirectoryList';
        return $this->get();
    }

    public function getOrganization($intOrgID = 0)
    {
        $this->url = $this->call.'GetOrganization?intOrgID='.$intOrgID;
        return $this->get();
    }

    public function getStaffDirectory($intDirectoryListID = 0, $chrInitialLetter = '', $strEmployeeGroupIDList = '')
    {
        $this->url = $this->call.'GetStaffDirectory?intDirectoryListID='.$intDirectoryListID.'&chrInitialLetter='.$chrInitialLetter.'&strEmployeeGropuIDList='.$strEmployeeGroupIDList;
        return $this->get();
    }

    public function getStaffDirectoryWithPaging($intDirectoryListID = 0, $chrInitialLetter = '', $strEmployeeGroupIDList = '', $intPageSize = 10, $intCurrentPage = 0)
    {
        $this->url = $this->call.'GetStaffDirectoryWithPaging?intDirectoryListID='.$intDirectoryListID.'&chrInitialLetter='.$chrInitialLetter.'&strEmployeeGropuIDList='.$strEmployeeGroupIDList.'&intPageSize='.$intPageSize.'&intCurrentPage='.$intCurrentPage;
        return $this->get();
    }

    public function getVersion()
    {
        $this->url = $this->call.'Version';
        return $this->get();
    }
}