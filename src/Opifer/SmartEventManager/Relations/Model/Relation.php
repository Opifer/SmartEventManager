<?php
namespace Opifer\SmartEventManager\Relations\Model;

class Relation
{
    
    /**
     * Represents the relation action data.
     * 
     * @var \Opifer\SmartEventManager\Actions\Model\Action[] 
     */
    public $Actions;
    
    /**
     * Represents the relation contact persons data.
     * 
     * @var \Opifer\SmartEventManager\Relations\Model\ContactPerson[]
     */
    public $ContactPersons;
    
    /**
     * The day of birth.
     * 
     * @var \DateTime
     */
    public $DateOfBirth;
    
    /**
     * The department this relation works for.
     * 
     * @var string
     */
    public $Department;
    
    /**
     * The default email address of the relation.
     * 
     * @var string
     */
    public $EMailAddress;
    
    /**
     * The first name.
     * 
     * @var string
     */
    public $FirstName;
    
    /**
     * A code that corresponds with the relation's gender.
     * 
     * @var string
     */
    public $GenderCode;
    
    /**
     * The initials.
     * 
     * @var string
     */
    public $Initials;

    /**
     * The city of the invoice address.
     * 
     * @var string
     */
    public $InvoiceCity;
    
    /**
     * The country of the invoice address.
     * 
     * @var string
     */
    public $InvoiceCountry;
    
    /**
     * The postal code of the invoice address.
     * 
     * @var string
     */
    public $InvoicePostalCode;
    
    /**
     * The joined street and number of the invoice address.
     * 
     * @var string
     */
    public $InvoiceStreetAndNumber;

    /**
     * The job function.
     * 
     * @var string
     */
    public $JobFunction;
    
    /**
     * The last name.
     * 
     * @var string
     */
    public $LastName;
    
    /**
     * The abbreviation of the organization meant for searching.
     * 
     * @var string
     */
    public $OrganizationAbbreviation;
    
    /**
     * The name of the organization.
     * 
     * @var string
     */
    public $OrganizationName;
    
    /**
     * The default phone number of the relation.
     * 
     * @var string
     */
    public $PhoneNumber;
    
    /**
     * The city of the postal address.
     * 
     * @var string
     */
    public $PostalCity;
    
    /**
     * The country of the postal address.
     * 
     * @var string
     */
    public $PostalCountry;
    
    /**
     * The postal code of the postal address.
     * 
     * @var string
     */
    public $PostalPostalCode;
    
    /**
     * The joined street and number of the postal address.
     * 
     * @var string
     */
    public $PostalStreetAndNumber;
    
    /**
     * The prefix of the last name.
     * 
     * @var string
     */
    public $Prefix;
    
    /**
     * PriceGroupID applicable to the relation
     * 
     * @var int
     */
    public $PriceGroupID;
    
    /**
     * Represents the relation action data. This is a wrapper around Actions, maintained for compatibility.
     * 
     * @var \Opifer\SmartEventManager\Actions\Model\Action[]
     */
    public $RelationActions;
    
    /**
     * Represents the relation codings data.
     * 
     * @var \Opifer\SmartEventManager\Relations\Model\RelationCoding[]
     */
    public $RelationCodings;
    
    /**
     * Represents the relation contact group data.
     * 
     * @var \Opifer\SmartEventManager\Relations\Model\RelationContactGroup[]
     */
    public $RelationContactGroups;
    
    /**
     * Represents the relation log items data.
     * 
     * @var \Opifer\SmartEventManager\Relations\Model\RelationLogItem[]
     */
    public $RelationLogItems;
    
    /**
     * The title obtained by study.
     * 
     * @var string
     */
    public $Title;
    
    /**
     * The website.
     * 
     * @var string
     */
    public $Website;

    
    
    /**
     * 
     * @param \Opifer\SmartEventManager\Action\Model\Action $RelationAction
     */
    public function addRelationAction(\Opifer\SmartEventManager\Action\Model\Action $RelationAction)
    {
        if (!is_array($this->RelationActions))
            $this->RelationActions = array();
        
        array_push($this->RelationActions, $RelationAction);
    }
    
    /**
     * 
     * @param \Opifer\SmartEventManager\Relations\Model\RelationCoding $RelationCoding
     */
    public function addRelationCoding(RelationCoding $RelationCoding)
    {
        if (!is_array($this->RelationCodings))
            $this->RelationCodings = array();
        
        array_push($this->RelationCodings, $RelationCoding);
    }
    
    /**
     * 
     * @param \Opifer\SmartEventManager\Relations\Model\RelationContactGroup $RelationContactGroup
     */
    public function addRelationContactGroup(RelationContactGroup $RelationContactGroup)
    {
        if (!is_array($this->RelationContactGroups))
            $this->RelationContactGroups = array();
        
        array_push($this->RelationContactGroups, $RelationContactGroup);
    }
    
    /**
     * 
     * @param \Opifer\SmartEventManager\Relations\Model\RelationLogItem $RelationLogItem
     */
    public function addRelationLogItem(RelationLogItem $RelationLogItem)
    {
        if (!is_array($this->RelationLogItems))
            $this->RelationLogItems = array();
        
        array_push($this->RelationLogItems, $RelationLogItem);
    }
    
}