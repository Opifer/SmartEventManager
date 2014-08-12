<?php
namespace Opifer\SmartEventManager\Account\Model;

use JMS\Serializer\Annotation as JMS;
use Opifer\SmartEventManager\Response\Model\BaseResponse;

class LogOnResponse extends BaseResponse
{
    
    /**
     * Returns True if the user is successfully authenticated.
     * 
     * @var bool 
     * @JMS\Type("boolean")
     */
    public $IsSuccess;
    
    /**
     * Gets the security token that must be set in the header of consecutive requests.
     * 
     * @var string
     * @JMS\Type("string")
     */
    public $SecurityToken;
    
}