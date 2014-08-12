<?php
namespace Opifer\SmartEventManager\Relations\Model;

class ContactPerson
{
    
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
     * The default email address of the contact person.
     * 
     * @var string
     */
    public $EmailAddress;
    
    /**
     * The email addresses.
     * 
     * @var string
     */
    public $EmailAddresses;
    
    /**
     * The first name.
     * 
     * @var string
     */
    public $FirstName;
    
    /**
     * A code that corresponds with the contactperson's gender.
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
     * The default phone number of the contact person.
     * 
     * @var string
     */
    public $PhoneNumber;
    
    /**
     * The phone numbers.
     * 
     * @var string
     */
    public $PhoneNumbers;
    
    /**
     * The prefix of the last name.
     * 
     * @var string 
     */
    public $Prefix;
    
    /**
     * The title obtained by study.
     * 
     * @var string
     */
    public $Title;
    
}