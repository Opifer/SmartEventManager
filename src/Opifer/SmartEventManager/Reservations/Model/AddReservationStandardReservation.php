<?php
namespace Opifer\SmartEventManager\Reservations\Model;

class AddReservationStandardReservation
{
    
    /**
     * The end date and time
     * 
     * @var \DateTime
     */
    public $EndDateTime;
    
    /**
     * Required. The number of persons attending the event.
     * 
     * @var int
     */
    public $NumberOfPersons;
    
    /**
     * Specifies the distribution of persons over specific types e.g. childeren or adults. If any PersonSpecification is present the NumberOfPersons property is ignored.
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservationPersonSpecification[]
     */
    public $PersonSpecifications;
    
    /**
     * Required. The StandardReservationID of the standard reservation to be added.
     * 
     * @var int
     */
    public $StandardReservationID;
    
    /**
     * The start date and time
     * 
     * @var \DateTime
     */
    public $StartDateTime;
    
    /**
     * @FIXME NO DOCS!!!
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservationOptionalProduct[]
     */
    public $AddReservationOptionalProducts;
    
}