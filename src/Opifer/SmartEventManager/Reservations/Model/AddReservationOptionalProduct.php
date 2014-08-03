<?php
namespace Opifer\SmartEventManager\Reservations\Model;

class AddReservationOptionalProduct
{
    
    /**
     * Optional. If ommitted the number of units from the reservation will be used.
     * 
     * @var int
     */
    public $NumberOf;
    
    /**
     * Required. The StandardReservationProductID of the reservation product to be added.
     * 
     * @var int
     */
    public $StandardReservationProductID;
    
}