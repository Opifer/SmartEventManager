<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

use JMS\Serializer\Annotation as JMS;

class StandardReservationProgramGroup
{
    
    /**
     * The name of the standard reservation program group.
     * 
     * @var string
     * @JMS\Type("string")
     */
    public $Name;
    
    /**
     * The StandardReservationID this standard reservation program belongs to.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationID;
    
    /**
     * The StandardReservationProgramGroupID of the standard reservation program group.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationProgramGroupID;
    
}