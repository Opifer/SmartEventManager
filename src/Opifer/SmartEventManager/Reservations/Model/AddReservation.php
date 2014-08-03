<?php
namespace Opifer\SmartEventManager\Reservations\Model;

class AddReservation
{
    
    /**
     * Represents the reservation codings data.
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservationCoding[]
     */
    public $AddReservationCodings;
    
    /**
     * Represents the optional product data to be added.
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservationOptionalProduct[]
     */
    public $AddReservationOptionalProducts;
    
    /**
     * Represents the product data to be added.
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservationProduct[]
     */
    public $AddReservationProducts;
    
    /**
     * Represents the standard reservation data to be applied.
     * 
     * @var \Opifer\SmartEventManager\Reservations\Model\AddReservationStandardReservation[]
     */
    public $AddReservationStandardReservations;
    
    /**
     * The CompanyID of the internal company to which the reservation belongs.
     * 
     * @var int
     */
    public $CompanyID;
    
    /**
     * The address or location where the reservation takes place.
     * 
     * @var string
     */
    public $Delivery;
    
    /**
     * The internal notes which are only available within the application.
     * 
     * @var string
     */
    public $InternalNotes;
    
    /**
     * The order number which is displayed on confirmations and invoices.
     * 
     * @var string
     */
    public $OrderNumber;
    
    /**
     * The public notes which will be displayed on multiple reports.
     * 
     * @var string
     */
    public $PublicNotes;
    
    /**
     * The RelationID of an existing relation.
     * 
     * @var int
     */
    public $RelationID;
    
    /**
     * Required. The date on which the reservation takes place.
     * 
     * @var string
     */
    public $ReservationDate;
    
    /**
     * The text which will be displayed on welcome boards.
     * 
     * @var string
     */
    public $WelcomeText;
   
    
    
    /**
     * 
     * @param \Opifer\SmartEventManager\Reservations\Model\AddReservationCoding $AddReservationCoding
     */
    public function addReservationCoding(AddReservationCoding $AddReservationCoding)
    {
        if (!is_array($this->AddReservationCodings))
            $this->AddReservationCodings = array();
        
        array_push($this->AddReservationCodings, $AddReservationCoding);
    }
    
    /**
     * 
     * @param \Opifer\SmartEventManager\Reservations\Model\AddReservationOptionalProduct $AddReservationOptionalProduct
     */
    public function addRelationAction(AddReservationOptionalProduct $AddReservationOptionalProduct)
    {
        if (!is_array($this->AddReservationOptionalProducts))
            $this->AddReservationOptionalProducts = array();
        
        array_push($this->AddReservationOptionalProducts, $AddReservationOptionalProduct);
    }
    
}