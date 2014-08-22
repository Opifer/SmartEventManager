<?php
namespace Opifer\SmartEventManager\Relations\Model;

use JMS\Serializer\Annotation as JMS;
use Opifer\SmartEventManager\Response\Model\BaseResponse;

class GetContactGroupsResponse extends BaseResponse
{
    
    /**
     * The contact groups in the ContactGroupModel.
     * 
     * * @var \Opifer\SmartEventManager\General\Model\Company[] 
     * @JMS\Type("array<Opifer\SmartEventManager\Relations\Model\ContactGroup>")
     */
    public $ContactGroups;
    
}