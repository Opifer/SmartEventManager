<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

class StandardReservationProgramGroup
{
    
    /**
     * The name of the standard reservation.
     * 
     * @var string
     */
    public $Name;
    
    /**
     * The StandardReservationID of the standard reservation.
     * 
     * @var int
     */
    public $StandardReservationID;
    
    /**
     * Represents the standard reservation's optional products data.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservationOptionalProduct[]
     */
    public $StandardReservationOptionalProducts;
    
    /**
     * Represents the standard reservation program group data.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservationProgramGroup[]
     */
    public $StandardReservationProgramGroups;
    
    /**
     * Represents the standard reservation program data.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservationProgram[]
     */
    public $StandardReservationPrograms;
    
}