<?php
namespace Opifer\SmartEventManager\Response\Model;

use JsonMapper;
use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

abstract class BaseResponse implements ResponseClassInterface
{
    
    /**
     *
     * @var array
     */
    public $Errors;
    
    
    
    public static function jsonUnserialize($data, $object)
    {
        $mapper = new JsonMapper();
        return $mapper->map($data, $object);
    }
    
    public static function fromCommand(OperationCommand $command)
    {
        return self::jsonUnserialize($command->getResponse()->json(), new static);
    }
        
    
}