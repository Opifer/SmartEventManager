<?php
namespace Opifer\SmartEventManager\StandardProducts\Model;

use JMS\Serializer\Annotation as JMS;

class StandardProduct
{
    
    /**
     * The name displayed on external documents.
     * 
     * @var string
     * @JMS\Type("string")
     */
    public $ExternalName;
    
    /**
     * The name of the standard product.
     * 
     * @var string
     * @JMS\Type("string")
     */
    public $Name;
    
    /**
     * The StandardProductID of the standard product.
     * 
     * @var int
     * @JMS\Type("integer")
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