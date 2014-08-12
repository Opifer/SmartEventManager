<?php
namespace Opifer\SmartEventManager\Reservations\Model;

use JMS\Serializer\Annotation as JMS;
use Opifer\SmartEventManager\Response\Model\BaseResponse;

class AddReservationResponse extends BaseResponse
{
    
    /**
     * Returns True if the reservation and relation have successfully been added.
     * 
     * @var bool
     * @JMS\Type("boolean")
     */    
    public $IsSuccess;

    /**
     * The RelationID of the added relation.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $RelationID;
    
    /**
     * The ReservationID of the added reservation.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $ReservationID;
    
}