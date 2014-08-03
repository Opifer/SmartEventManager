<?php
namespace Opifer\SmartEventManager\Relations\Model;

class RelationLogItem
{
    
    /**
     * The CorrespondenceTypeID of the way contact occured.
     * 
     * @var int
     */
    public $CorrespondenceTypeID;
    
    /**
     * A code that corresponds the direction of the contact.
     * 
     * @var string
     */
    public $FromToCode;
    
    /**
     * The notes.
     * 
     * @var string
     */
    public $Notes;
    
    /**
     * Required. The subject.
     * 
     * @var string
     */
    public $Subject;

}