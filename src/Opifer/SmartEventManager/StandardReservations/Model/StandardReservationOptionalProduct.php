<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

use JMS\Serializer\Annotation as JMS;

class StandardReservationOptionalProduct
{
    
    /**
     * Indicates whether this reservation product, while still optional, is selected by default.
     * 
     * @var bool 
     * @JMS\Type("boolean")
     */
    public $IsSelectedByDefault;
    
    /**
     * The StandardProduct this reservation product is based upon.
     * 
     * @var \Opifer\SmartEventManager\StandardProducts\Model\StandardProduct
     * @JMS\Type("Opifer\SmartEventManager\StandardProducts\Model\StandardProduct")
     */
    public $StandardProduct;
    
    /**
     * The StandardReservationProductID of the StandardReservationProduct.
     * 
     * @var int 
     * @JMS\Type("integer")
     */
    public $StandardReservationProductID;
    
    /**
     * The ReservationProgramGroupID of the ReservationProgramGroup where the reservation product belongs to.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationProgramGroupID;
    
    /**
     * The ReservationProgramID of the ReservationProgram where the reservation product belongs to.
     * 
     * @var int
     * @JMS\Type("integer")
     */
    public $StandardReservationProgramID;
    
}