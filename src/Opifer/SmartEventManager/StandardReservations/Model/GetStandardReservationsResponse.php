<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

use JMS\Serializer\Annotation as JMS;
use Opifer\SmartEventManager\Response\Model\BaseResponse;

class GetStandardReservationsResponse extends BaseResponse
{
    
    /**
     * The standard reservations in the StandardReservationModel.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservation[]
     * @JMS\Type("array<Opifer\SmartEventManager\StandardReservations\Model\StandardReservation>")
     */
    public $StandardReservations;
    
}