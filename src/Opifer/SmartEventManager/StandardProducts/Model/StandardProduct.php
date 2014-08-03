<?php
namespace Opifer\SmartEventManager\StandardProducts\Model;

class StandardProduct
{
    
    /**
     * The name displayed on external documents.
     * 
     * @var string
     */
    public $ExternalName;
    
    /**
     * The name of the standard product.
     * 
     * @var string
     */
    public $Name;
    
    /**
     * The StandardProductID of the standard product.
     * 
     * @var int
     */
    public $StandardProductID;

    
    
    public function getExternalName()
    {
        return $this->ExternalName;
    }
    
    public function getName()
    {
        return $this->Name;
    }
    
    public function getStandardProductID()
    {
        return $this->StandardProductID;
    }
    
}