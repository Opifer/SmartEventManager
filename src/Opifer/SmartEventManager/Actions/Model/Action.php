<?php
namespace Opifer\SmartEventManager\Actions\Model;

class Action
{
    
    /**
     * The ID of the employee who the action is assigned to, if the action is assigned to any particular employee.
     * 
     * @var int
     */
    public $ActionEmployeeID;
    
    /**
     * Required. The name describing the action.
     * 
     * @var string
     */
    public $Name;

    /**
     * The start date and time of the action.
     * 
     * @var string
     */
    public $StartDateTime;
    
}