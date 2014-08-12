<?php
namespace Opifer\SmartEventManager\StandardProducts\Model;

use JMS\Serializer\Annotation as JMS;
use Opifer\SmartEventManager\Response\Model\BaseResponse;

class GetStandardProductsResponse extends BaseResponse
{
    
    /**
     * The standard products in the StandardProductModel.
     * 
     * @var \Opifer\SmartEventManager\StandardProducts\Model\StandardProduct[]
     * @JMS\Type("array<Opifer\SmartEventManager\StandardProducts\Model\StandardProduct>")
     */
    public $StandardProducts;

}