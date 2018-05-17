<?php

/**
 * class ExtPI sets the API call location, gathers and assigns parameters, and makes the GET request via curl.
 * It provides, in a loose sense, a library of API calls available from the PI API service.
 *
 * @author: John Alder
 * @email: john@sfp.net
 *
 */

namespace SFP\PurdueAg;

use SFP\PurdueAg\ExtPI\CountyService;
use SFP\PurdueAg\ExtPI\EmployeeService;

class ExtPI
{

    public function __construct()
    {

    }

    public function example()
    {
        require_once(dirname(__FILE__).'/ExtPI/EmployeeService.php');
        $svc = new EmployeeService();
        return $svc->getEmployeeByAlias('abbottar');
    }

    public function getCountyAbout($countyName = '')
    {
        require_once(dirname(__FILE__).'/ExtPI/CountyService.php');
        $svc = new CountyService();
        $counties = $svc->getCountyList();
        foreach($counties as $county){
            if(strtolower($county->strCountyName) == strtolower($countyName)){
                $countyID = $county->intCountyID;
            }
        }
        $county = $svc->getCounty($countyID); //this contains the phone numbers and street address

        $staff = $svc->getStaffDirectory($countyID);

        //todo: where are the hours stored?
        $about = array(
            'contact' => $county,
            'staff' => $staff
        );

        return $about;
    }
}