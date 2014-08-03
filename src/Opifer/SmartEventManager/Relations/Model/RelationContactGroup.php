<?php
namespace Opifer\SmartEventManager\Relations\Model;

class RelationContactGroup
{
    
    /**
     * Required. The ContactGroupID of the contact group to which the relation will be added.
     * 
     * @var int
     */
    public $ContactGroupID;
    
    /**
     * Required. The RelationID of the relation who will be added.
     * 
     * @var int
     */
    public $RelationID;
    
    /**
     * Start date of the relation's contact group membership.
     * 
     * @var string 
     */
    public $StartDate;
    
}