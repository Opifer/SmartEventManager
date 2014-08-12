<?php
namespace Opifer\SmartEventManager\Relations\Model;

use JMS\Serializer\Annotation as JMS;
use Opifer\SmartEventManager\Response\Model\BaseResponse;

class AddRelationResponse extends BaseResponse
{
    
    /**
     * Returns True if the relation has successfully been added.
     * 
     * @var bool
     * @JMS\Type("boolean")
     */
    public $IsSuccess;
    
    /**
     * The RelationID of the added relation.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $RelationID;
    
}