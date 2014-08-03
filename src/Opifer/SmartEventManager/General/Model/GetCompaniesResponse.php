<?php
namespace Opifer\SmartEventManager\General\Model;

use Opifer\SmartEventManager\Response\Model\BaseResponse;

class GetCompaniesResponse extends BaseResponse
{
    
    /**
     * The companies in the CompanyModel.
     * 
     * @var \Opifer\SmartEventManager\General\Model\Company[] 
     */
    public $Companies;
    
}