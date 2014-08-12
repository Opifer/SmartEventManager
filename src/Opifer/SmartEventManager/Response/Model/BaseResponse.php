<?php
namespace Opifer\SmartEventManager\Response\Model;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

use JMS\Serializer\Annotation\Type;

abstract class BaseResponse implements ResponseClassInterface
{
    
    /**
     * @Type("array<string>")
     * @var array
     */
    public $Errors;
    
    
    
    /**
     * Unserialize a response model object from a json string
     *
     * @param OperationCommand $command That serialized the request
     *
     * @return self
     */
    public static function jsonUnserialize($data, $object)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                    new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()))
            ->build();
        return $serializer->deserialize($data, get_class($object), 'json');      
    }
    
    /**
     * Create a response model object from a completed command
     *
     * @param OperationCommand $command That serialized the request
     *
     * @return self
     */
    public static function fromCommand(OperationCommand $command)
    {
        return self::jsonUnserialize($command->getResponse()->getBody(true), new static);
    }

}