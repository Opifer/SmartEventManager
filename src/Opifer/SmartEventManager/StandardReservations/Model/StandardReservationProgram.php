<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

class StandardReservationProgram
{
    
    /**
     * Shift of the program's end date with respect to the start date of the reservation, in days.
     * 
     * @var int 
     */
    public $EndDayNumerator;
    
    /**
     * The end time of this standard reservation.
     * 
     * @var \DateTime
     */
    public $EndTime;
    
    /**
     * The name of the standard reservation program.
     * 
     * @var string
     */
    public $Name;
    
    /**
     * The StandardReservationID this standard reservation program belongs to.
     * 
     * @var int
     */
    public $StandardReservationID;
    
    /**
     * The StandardReservationProgramGroupID of the program group this program belongs to.
     * 
     * @var int
     */
    public $StandardReservationProgramGroupID;
    
    /**
     * The StandardReservationProgramID of the standard reservation program.
     * 
     * @var int
     */
    public $StandardReservationProgramID;
    
    /**
     * Shift of the program's start date with respect to the start date of the reservation, in days.
     * 
     * @var int
     */
    public $StartDayNumerator;
    
    /**
     * The start time of this standard reservation.
     * 
     * @var \DateTime
     */
    public $StartTime;
    
}