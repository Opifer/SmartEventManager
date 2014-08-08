# SmartEventManager API PHP client

The SmartEventManager API PHP client enables PHP developers to use SmartEventManager API in their PHP code. The client is written on SEM API version 8.1.13, but other versions should probably work.
All the current implemented API functionality is described in the description.json, for expanding the client functionality this is also the place to get starting.

## Prerequisites

   * SmartEventManager API version 8.1.13 or above
   * PHP 5.3 or above
   * curl, json extensions must be enabled
   * composer for fetching dependencies (See http://getcomposer.org)


To install

    composer require opifer/smarteventmanager

or add this to your composer.json, and ```composer update``` 

```  
{
    "require": {
        "opifer/smarteventmanager": "0.*"
    }
}
```

## Quick Example

### Getting companies

```php
<?php

require 'vendor/autoload.php';

use Opifer\SmartEventManager\Client\Config;
use Opifer\SmartEventManager\Client\Client;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Exception\CurlException;

$config = new Config();
$config->setBaseUrl('https://myapihost.dev')
    ->setUserName('user')
    ->setPassword('password');
    //->setDebug(); // Show Guzzle request & response (headers + body)

try {
    $client = Client::getInstance($config);
    $companies = $client->getCompanies();
} catch (CurlException $e) {
    print "Error CurlException: " . $e->getMessage() . "\n";
} catch (BadResponseException $e) {
    print "Error BadResponseException: " . $e->getMessage() . "\n";
}

```