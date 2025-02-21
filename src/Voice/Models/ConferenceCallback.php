<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\Voice\Models;

/**
 *This object represents all possible fields that may be included in callbacks related to conference
 * events
 */
class ConferenceCallback implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $conferenceId public property
     */
    public $conferenceId;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @var string|null $eventType public property
     */
    public $eventType;

    /**
     * @todo Write general description for this property
     * @var string|null $eventTime public property
     */
    public $eventTime;

    /**
     * @todo Write general description for this property
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * @todo Write general description for this property
     * @var string|null $callId public property
     */
    public $callId;

    /**
     * @todo Write general description for this property
     * @var string|null $to public property
     */
    public $to;

    /**
     * @todo Write general description for this property
     * @var string|null $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @var string|null $recordingId public property
     */
    public $recordingId;

    /**
     * @todo Write general description for this property
     * @var integer|null $channels public property
     */
    public $channels;

    /**
     * @todo Write general description for this property
     * @var string|null $startTime public property
     */
    public $startTime;

    /**
     * @todo Write general description for this property
     * @var string|null $endTime public property
     */
    public $endTime;

    /**
     * @todo Write general description for this property
     * @var string|null $duration public property
     */
    public $duration;

    /**
     * @todo Write general description for this property
     * @var string|null $fileFormat public property
     */
    public $fileFormat;

    /**
     * @todo Write general description for this property
     * @var string|null $mediaUrl public property
     */
    public $mediaUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->conferenceId = func_get_arg(0);
            $this->name         = func_get_arg(1);
            $this->eventType    = func_get_arg(2);
            $this->eventTime    = func_get_arg(3);
            $this->tag          = func_get_arg(4);
            $this->callId       = func_get_arg(5);
            $this->to           = func_get_arg(6);
            $this->from         = func_get_arg(7);
            $this->accountId    = func_get_arg(8);
            $this->recordingId  = func_get_arg(9);
            $this->channels     = func_get_arg(10);
            $this->startTime    = func_get_arg(11);
            $this->endTime      = func_get_arg(12);
            $this->duration     = func_get_arg(13);
            $this->fileFormat   = func_get_arg(14);
            $this->mediaUrl     = func_get_arg(15);
            $this->status       = func_get_arg(16);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['conferenceId'] = $this->conferenceId;
        $json['name']         = $this->name;
        $json['eventType']    = $this->eventType;
        $json['eventTime']    = $this->eventTime;
        $json['tag']          = $this->tag;
        $json['callId']       = $this->callId;
        $json['to']           = $this->to;
        $json['from']         = $this->from;
        $json['accountId']    = $this->accountId;
        $json['recordingId']  = $this->recordingId;
        $json['channels']     = $this->channels;
        $json['startTime']    = $this->startTime;
        $json['endTime']      = $this->endTime;
        $json['duration']     = $this->duration;
        $json['fileFormat']   = $this->fileFormat;
        $json['mediaUrl']     = $this->mediaUrl;
        $json['status']       = $this->status;

        return array_filter($json);
    }
}
