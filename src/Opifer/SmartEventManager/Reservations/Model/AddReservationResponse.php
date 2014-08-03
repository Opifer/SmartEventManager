<?php
namespace Opifer\SmartEventManager\Reservations\Model;

use Opifer\SmartEventManager\Response\Model\BaseResponse;

class AddReservationResponse extends BaseResponse
{
    
    /**
     * Returns True if the reservation and relation have successfully been added.
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
    
    /**
     * The ReservationID of the added reservation.
     * 
     * @var int
     */
    public $ReservationID;
    
}