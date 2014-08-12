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

    
    
    /**
     * Serialize a request model object to a json string
     *
     * @return string
     */
    public function jsonSerialize() 
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                    new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()))
            ->build();
        $json = $serializer->serialize($this, 'json');      
        
        return json_decode($json, true);
    }
    
}