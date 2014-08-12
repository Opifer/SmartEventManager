<?php
namespace Opifer\SmartEventManager\General\Model;

use JMS\Serializer\Annotation as JMS;

class Company
{
    
    /**
     * The CompanyID of the company.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $CompanyID;
    
    /**
     * The name of the company.
     * 
     * @var string
     * @JMS\Type("string")
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