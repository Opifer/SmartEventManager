<?php
namespace Opifer\SmartEventManager\Relations\Model;

use Opifer\SmartEventManager\Response\Model\BaseResponse;

class AddRelationResponse extends BaseResponse
{
    
    /**
     * Returns True if the relation has successfully been added.
     * 
     * @var bool
     */
    public $IsSuccess;
    
    /**
     * The RelationID of the added relation.
     * 
     * @var int
     */
    public $RelationID;
    
}