<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\Voice\Models;

/**
 * The machine detection mode. If set to 'async', the detection result will be sent in a
 * 'machineDetectionComplete' callback. If set to 'sync', the 'answer' callback will wait for the
 * machine detection to complete and will include its result. Default is 'async'.
 */
class ModeEnum
{
    /**
     * TODO: Write general description for this element
     */
    const SYNC = "sync";

    /**
     * TODO: Write general description for this element
     */
    const ASYNC = "async";
}
