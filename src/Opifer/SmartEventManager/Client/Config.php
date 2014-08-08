<?php
namespace Opifer\SmartEventManager\Client;

class Config
{
    
    /**
     *
     * @var string
     */
    public $baseUrl;
    
    /**
     *
     * @var string
     */
    public $userName;
    
    /**
     *
     * @var string
     */
    public $password;
    
    /**
     *
     * @var bool
     */
    public $debug = false;
    
    

    /**
     * 
     * @return string
     */
    public function getBaseUrl() 
    {
        return $this->baseUrl;
    }

    /**
     * 
     * @return string
     */
    public function getUserName() 
    {
        return $this->userName;
    }

    /**
     * 
     * @return string
     */
    public function getPassword() 
    {
        return $this->password;
    }

    /**
     * 
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }
    
    /**
     * 
     * @param string $baseUrl
     * @return \Opifer\SmartEventManager\Client\Config
     */
    public function setBaseUrl($baseUrl) 
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * 
     * @param string $userName
     * @return \Opifer\SmartEventManager\Client\Config
     */
    public function setUserName($userName) 
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * 
     * @param string $password
     * @return \Opifer\SmartEventManager\Client\Config
     */
    public function setPassword($password) 
    {
        $this->password = $password;
        return $this;
    }
    
    /**
     * 
     * @param bool $debug
     * @return \Opifer\SmartEventManager\Client\Config
     */
    public function setDebug($debug = true)
    {
        $this->debug = $debug;
        return $this;
    }

}