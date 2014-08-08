<?php
namespace Opifer\SmartEventManager\Account\Model;

use Opifer\SmartEventManager\Response\Model\BaseResponse;

class LogOnResponse extends BaseResponse
{
    
    /**
     * Returns True if the user is successfully authenticated.
     * 
     * @var bool 
     */
    public $IsSuccess;
    
    /**
     * Gets the security token that must be set in the header of consecutive requests.
     * 
     * @var string
     */
    public $SecurityToken;
    
}