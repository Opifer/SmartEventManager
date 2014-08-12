<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

use JMS\Serializer\Annotation as JMS;

class StandardReservation
{
    
    /**
     * The name of the standard reservation.
     * 
     * @var string
     * @JMS\Type("string")
     */
    public $Name;
    
    /**
     * The StandardReservationID of the standard reservation.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationID;
    
    /**
     * Represents the standard reservation's optional products data.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservationOptionalProduct[]
     * @JMS\Type("array<Opifer\SmartEventManager\StandardReservations\Model\StandardReservationOptionalProduct>")
     */
    public $StandardReservationOptionalProducts;
    
    /**
     * Represents the standard reservation program group data.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservationProgramGroup[]
     * @JMS\Type("array<Opifer\SmartEventManager\StandardReservations\Model\StandardReservationProgramGroup>")
     */
    public $StandardReservationProgramGroups;
    
    /** 
     * Represents the standard reservation program data.
     * 
     * @var \Opifer\SmartEventManager\StandardReservations\Model\StandardReservationProgram[]
     * @JMS\Type("array<Opifer\SmartEventManager\StandardReservations\Model\StandardReservationProgram>")
     */
    public $StandardReservationPrograms;
    
    
    
    public function getName()
    {
        return $this->Name;
    }
    
    public function getStandardReservationID()
    {
        return $this->StandardReservationID;
    }
    
    public function getStandardReservationOptionalProducts()
    {
        return $this->StandardReservationOptionalProducts;
    }
    
    public function getStandardReservationProgramGroups()
    {
        return $this->StandardReservationProgramGroups;
    }
    
    public function getStandardReservationPrograms()
    {
        return $this->StandardReservationPrograms;
    }
    
}