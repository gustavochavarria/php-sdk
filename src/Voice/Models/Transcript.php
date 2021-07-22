<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\Voice\Models;

/**
 * @todo Write general description for this model
 */
class Transcript implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @var double|null $confidence public property
     */
    public $confidence;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->text       = func_get_arg(0);
            $this->confidence = func_get_arg(1);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['text']       = $this->text;
        $json['confidence'] = $this->confidence;

        return array_filter($json);
    }
}
