<?php
namespace Opifer\SmartEventManager\Reservations\Model;

use Opifer\SmartEventManager\Request\Model\BaseRequest;

class AddReservationRequest extends BaseRequest
{
    
    /**
     * Represents the relation data of a new relation to be added.
     * 
     * @var \Opifer\SmartEventManager\Relations\Model\Relation
     */
    public $Relation;
    
    /**
     * Represents the reservation data.
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservation
     */
    public $Reservation;
    
}