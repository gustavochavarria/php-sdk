<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\PhoneNumberLookup;

use BandwidthLib\PhoneNumberLookup\Controllers;

/**
 * BandwidthLib client class
 */
class PhoneNumberLookupClient
{
    private $config;
    public function __construct($config)
    {
        $this->config = $config;
    }


    private $client;

    /**
     * Provides access to API controller
     * @return Controllers\APIController
     */
    public function getClient()
    {
        if ($this->client == null) {
            $this->client = new Controllers\APIController($this->config);
        }
        return $this->client;
    }
}
