<?php
namespace Opifer\SmartEventManager\Relations\Model;

use Opifer\SmartEventManager\Request\Model\BaseRequest;

class AddRelationRequest extends BaseRequest
{
    
    /**
     * Represents the relation data.
     * 
     * @var \Opifer\SmartEventManager\Relations\Model\Relation
     */
    public $Relation;
    
}