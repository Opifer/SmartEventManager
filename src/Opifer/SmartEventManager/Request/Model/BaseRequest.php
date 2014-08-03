<?php
namespace Opifer\SmartEventManager\Request\Model;

class BaseRequest
{
    
    /**
     * Can be used to match requests with responses when multiple concurrent requests are made.
     * 
     * @var string 
     */
    public $CorrelationID;
    
    public function jsonSerialize() 
    {
        return json_decode(json_encode($this), true);
    }
    
}