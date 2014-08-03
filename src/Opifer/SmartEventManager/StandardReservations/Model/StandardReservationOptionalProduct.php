<?php
namespace Opifer\SmartEventManager\StandardReservations\Model;

class StandardReservationOptionalProduct
{
    
    /**
     * Indicates whether this reservation product, while still optional, is selected by default.
     * 
     * @var bool 
     */
    public $IsSelectedByDefault;
    
    /**
     * The StandardProduct this reservation product is based upon.
     * 
     * @var \Opifer\SmartEventManager\StandardProducts\Model\StandardProduct[]
     */
    public $StandardProduct;
    
    /**
     * The StandardReservationProductID of the StandardReservationProduct.
     * 
     * @var int 
     */
    public $StandardReservationProductID;
    
    /**
     * The ReservationProgramGroupID of the ReservationProgramGroup where the reservation product belongs to.
     * 
     * @var int
     */
    public $StandardReservationProgramGroupID;
    
    /**
     * The ReservationProgramID of the ReservationProgram where the reservation product belongs to.
     * 
     * @var int
     */
    public $StandardReservationProgramID;
    
}