<?php
namespace Opifer\SmartEventManager\Client;

use Guzzle\Service\Client as GuzzleClient;
use Guzzle\Service\Description\ServiceDescription as GuzzleServiceDescription;
use Guzzle\Plugin\Log\LogPlugin;
use Opifer\SmartEventManager\Account\Model\LogOnRequest;
use Opifer\SmartEventManager\Client\Config;
use Opifer\SmartEventManager\Request\Model\BaseRequest;

class Client
{

    /**
     * The singleton Client instance
     * 
     * @var \Opifer\SmartEventManager\Client
     */
    private static $instance = null; 
   
    /**
     *
     * @var \Opifer\SmartEventManager\Client\Config
     */
    private $config = null;
    
    /**
     * 
     */
    private $client;
    
    /**
     * HTTP headers
     * 
     * @var array
     */
    private $headers = array();

    
    
    /**
     * Construct the singleton Client instance
     * And LogOn to the webClient
     */
    private function __construct(Config $config = null) 
    {
        $this->config = $config;
        $this->setHeader('Content-Type', 'application/json; charset=utf-8');
        $this->initializeClient();
        $this->loadServiceDescription(__DIR__.'/description.json');
        $this->logOnClient();
    }
    
    /**
     * Return the singleton Client instance
     * 
     * @return \Opifer\SmartEventManager\Client
     */
    public static function getInstance(Config $config = null) 
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }
    
    /**
     * Initializes the HTTP Client
     */
    private function initializeClient()
    {
        $this->client = new GuzzleClient($this->config->getBaseUrl());
        $this->client->setDefaultOption('headers', $this->getHeaders());   
        $this->client->getConfig()->set('curl.options', array(CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4));
        if ($this->config->getDebug()) $this->client->addSubscriber(LogPlugin::getDebugPlugin());
    }
    
    /**
     * Loads the service description document which stores the service information
     * 
     * @param string $document
     */
    private function loadServiceDescription($document)
    {
        $description = GuzzleServiceDescription::factory($document);
        $this->client->setDescription($description);        
    }
    
    /**
     * Authenticate to the API
     * 
     * @return boolean
     */
    private function logOnClient()
    {
        $logOnRequest = new LogOnRequest();
        $logOnRequest->UserName = $this->config->getUserName();
        $logOnRequest->Password = $this->config->getPassword();
        
        $LogOnResponse = $this->client->logOn($logOnRequest->jsonSerialize());

        if ($LogOnResponse->IsSuccess) {
            $this->setHeader('SecurityToken', $LogOnResponse->SecurityToken);
            $this->client->setDefaultOption('headers', $this->getHeaders());
            return true;
        } else {
            return false;
        }
    }
    
    
    
    /**
     * Magic method used to pass a command to the Guzzle Service Client
     *
     * @param string $method Name of the command object to instantiate
     * @param array  $args   Arguments to pass to the command
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        if (isset($args[0]) && $args[0] instanceof BaseRequest) {
            $args[0] = $args[0]->jsonSerialize();
        }
        return $this->client->$method(isset($args[0]) ? $args[0] : array());
    }

    
    
    /**
     * Set an HTTP header
     *
     * @param string $header
     * @param string $value
     *
     * @return self
     */
    public function setHeader($header, $value)
    {
        $this->headers[$header] = $value;
        return $this;
    }
    
    /**
     * Get an specific HTTP header
     * 
     * @param string $header
     * 
     * @return string
     */
    public function getHeader($header)
    {
        return (isset($this->headers[$header])) ? $this->headers[$header] : false;
    }
    
    /**
     * Gets the HTTP headers
     * 
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

}