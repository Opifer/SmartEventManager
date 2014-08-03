<?php
namespace Opifer\SmartEventManager\Reservations\Model;

class AddReservationPersonSpecification
{
    
    /**
     * Number of persons of the designated type.
     * 
     * @var int
     */
    public $NumberOfPersons;
    
    /**
     * String representing a case sensitive type code.
     * 
     * @var string
     */
    public $TypeCode;

}