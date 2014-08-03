<?php
namespace Opifer\SmartEventManager\General\Model;

class Company
{
    
    /**
     * The CompanyID of the company.
     * 
     * @var int
     */
    public $CompanyID;
    
    /**
     * The name of the company.
     * 
     * @var string
     */
    public $Name;

    
    
    public function getCompanyID()
    {
        return $this->CompanyID;
    }
    
    public function getName()
    {
        return $this->Name;
    }
    
}