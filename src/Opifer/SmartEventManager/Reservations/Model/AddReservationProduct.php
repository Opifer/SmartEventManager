<?php
namespace Opifer\SmartEventManager\Reservations\Model;

class AddReservationProduct
{
    
    /**
     * The end date and time. Depending on the level of the product within the reservation, one of these end times will be chosen.
     * 
     * @var \DateTime 
     */
    public $EndDateTime;
    
    /**
     * Required. The number of units.
     * 
     * @var int
     */
    public $NumberOf;
    
    /**
     * Required. The StandardProductID of the reservation product to be added.
     * 
     * @var int
     */
    public $StandardProductID;
    
    /**
     * The StandardReservationProgramGroupID of the ReservationProgramGroup where the reservation product will be added to.
     * 
     * @var int
     */
    public $StandardReservationProgramGroupID;
    
    /**
     * The StandardReservationProgramID of the ReservationProgram where the reservation product will be added to.
     * 
     * @var int
     */
    public $StandardReservationProgramID;
    
    /**
     * The start date and time.
     * 
     * @var \DateTime
     */
    public $StartDateTime;
    
}