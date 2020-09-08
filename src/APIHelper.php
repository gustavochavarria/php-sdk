<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib;

use InvalidArgumentException;
use JsonSerializable;

/**
 * API utility class
 */
class APIHelper
{
    /**
    * Replaces template parameters in the given url
    * @param    string  $url         The query string builder to replace the template parameters
    * @param    array   $parameters  The parameters to replace in the url
    * @return   string  The processed url
    */
    public static function appendUrlWithTemplateParameters($url, $parameters, $encode = true)
    {
        //perform parameter validation
        if (is_null($url) || !is_string($url)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }

        if (is_null($parameters)) {
            return $url;
        }

        //iterate and append parameters
        foreach ($parameters as $key => $value) {
            $replaceValue = '';

            //load parameter value
            if (is_null($value)) {
                $replaceValue = '';
            } elseif (is_array($value)) {
                $replaceValue = implode("/", array_map("urlencode", $value));
            } else {
                $val = strval($value);
                $replaceValue = $encode ? urlencode($val) : $val;
           }

            //find the template parameter and replace it with its value
            $url = str_replace('{' . strval($key) . '}', $replaceValue, $url);
        }

        return $url;
    }

    /**
    * Appends the given set of parameters to the given query string
    * @param    string  $queryBuilder   The query url string to append the parameters
    * @param    array   $parameters     The parameters to append
    * @return   void
    */
    public static function appendUrlWithQueryParameters(&$queryBuilder, $parameters)
    {
        //perform parameter validation
        if (is_null($queryBuilder) || !is_string($queryBuilder)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //does the query string already has parameters
        $hasParams = (strrpos($queryBuilder, '?') > 0);

        //if already has parameters, use the &amp; to append new parameters
        $queryBuilder = $queryBuilder . (($hasParams) ? '&' : '?');

        //append parameters
        $queryBuilder = $queryBuilder . http_build_query($parameters);
    }

    /**
    * Validates and processes the given Url
    * @param    string  $url The given Url to process
    * @return   string       Pre-processed Url as string */
    public static function cleanUrl($url)
    {
        //perform parameter validation
        if (is_null($url) || !is_string($url)) {
            throw new InvalidArgumentException('Invalid Url.');
        }
        //ensure that the urls are absolute
        $matchCount = preg_match("#^(https?://[^/]+)#", $url, $matches);
        if ($matchCount == 0) {
            throw new InvalidArgumentException('Invalid Url format.');
        }
        //get the http protocol match
        $protocol = $matches[1];

        //remove redundant forward slashes
        $query = substr($url, strlen($protocol));
        $query = preg_replace("#//+#", "/", $query);

        //return process url
        return $protocol.$query;
    }

    /**
     * Deserialize a Json string
     * @param  string   $json       A valid Json string
     * @param  mixed    $instance   Instance of an object to map the json into
     * @param  boolean  $isArray    Is the Json an object array?
     * @return mixed                Decoded Json
     */
    public static function deserialize($json, $instance = null, $isArray = false)
    {
        if ($instance == null) {
            return json_decode($json, true);
        } else {
            $mapper = new \apimatic\jsonmapper\JsonMapper();
            if ($isArray) {
                return $mapper->mapArray(json_decode($json), array(), $instance);
            } else {
                return $mapper->map(json_decode($json), $instance);
            }
        }
    }

    /**
     * Check if an array isAssociative (has string keys)
     * @param  array   $arr   A valid array
     * @return boolean        True if the array is Associative, false if it is Indexed
     */
    private static function isAssociative($arr)
    {
        foreach ($arr as $key => $value) {
            if (is_string($key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Prepare a model for form encoding
     * @param  JsonSerializable  $model  A valid instance of JsonSerializable
     * @return array                     The model as a map of key value pairs
     */
    public static function prepareFormFields($model)
    {
        if (!$model instanceof JsonSerializable) {
            return $model;
        }

        $arr = $model->jsonSerialize();

        foreach ($arr as $key => $value) {
            if ($value instanceof JsonSerializable) {
                $arr[$key] = static::prepareFormFields($value);
            } elseif (is_array($value) && !empty($value) && !static::isAssociative($value) &&
                $value[0] instanceof JsonSerializable) {
                $temp = array();
                foreach ($value as $k => $v) {
                    $temp[$k] = static::prepareFormFields($v);
                }
                $arr[$key] = $temp;
            }
        }
        
        return $arr;
    }
}
