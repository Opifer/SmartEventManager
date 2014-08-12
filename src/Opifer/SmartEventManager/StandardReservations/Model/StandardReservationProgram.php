<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

use JMS\Serializer\Annotation as JMS;

class StandardReservationProgram
{
    
    /**
     * Shift of the program's end date with respect to the start date of the reservation, in days.
     * 
     * @var int 
     * @JMS\Type("integer")
     */
    public $EndDayNumerator;
    
    /**
     * The end time of this standard reservation.
     * 
     * @var \DateTime
     * @JMS\Type("DateTime<'Y-m-d\TH:i:s'>")
     */
    public $EndTime;
    
    /**
     * The name of the standard reservation program.
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
     * The StandardReservationProgramGroupID of the program group this program belongs to.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationProgramGroupID;
    
    /**
     * The StandardReservationProgramID of the standard reservation program.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationProgramID;
    
    /**
     * Shift of the program's start date with respect to the start date of the reservation, in days.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StartDayNumerator;
    
    /**
     * The start time of this standard reservation.
     * 
     * @var \DateTime
     * @JMS\Type("DateTime<'Y-m-d\TH:i:s'>")
     */
    public $StartTime;
    
}