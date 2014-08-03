<?php
namespace Opifer\SmartEventManager\Account\Model;

use Opifer\SmartEventManager\Response\Model\BaseResponse;

/**
 * Represents the data that is available in the response of a request to the LogOn action of the AccountClient.
 */
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