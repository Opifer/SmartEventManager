<?php
namespace Opifer\SmartEventManager\Relations\Model;

use JMS\Serializer\Annotation as JMS;

class ContactGroup
{
    
    /**
     * The ContactGroupID of the contact group.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $ContactGroupID;
    
    /**
     * The name of the contact group.
     * 
     * @var string
     * @JMS\Type("string")
     */
    public $Name;
    
}