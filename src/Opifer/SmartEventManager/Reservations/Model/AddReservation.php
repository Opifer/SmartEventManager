<?php

namespace Opifer\SmartEventManager\Reservations\Model;

class AddReservation
{
    /**
     * Represents the reservation codings data.
     * 
     * @var AddReservationCoding[]
     */
    public $AddReservationCodings;

    /**
     * Represents the product data to be added.
     * 
     * @var AddReservationProduct[]
     */
    public $AddReservationProducts;
    
    /**
     * Represents the standard reservation data to be applied.
     * 
     * @var AddReservationStandardReservation[]
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
     * Optional. Overrides the default ReservationStatusID when set.
     *
     * @var int
     */
    public $ReservationStatusID;
    
    /**
     * The text which will be displayed on welcome boards.
     * 
     * @var string
     */
    public $WelcomeText;
    
    /**
     * 
     * @param AddReservationCoding $AddReservationCoding
     */
    public function addReservationCoding(AddReservationCoding $AddReservationCoding)
    {
        if (!is_array($this->AddReservationCodings)) {
            $this->AddReservationCodings = array();
        }
        
        array_push($this->AddReservationCodings, $AddReservationCoding);
    }
    
    /**
     * 
     * @param AddReservationProduct $AddReservationProduct
     */
    public function addReservationProduct(AddReservationProduct $AddReservationProduct)
    {
        if (!is_array($this->AddReservationProducts)) {
            $this->AddReservationProducts = array();
        }
        
        array_push($this->AddReservationProducts, $AddReservationProduct);
    }
    
    /**
     * 
     * @param AddReservationStandardReservation $AddReservationStandardReservation
     */
    public function addReservationStandardReservation(AddReservationStandardReservation $AddReservationStandardReservation)
    {
        if (!is_array($this->AddReservationStandardReservations)) {
            $this->AddReservationStandardReservations = array();
        }
        
        array_push($this->AddReservationStandardReservations, $AddReservationStandardReservation);
    }
}
