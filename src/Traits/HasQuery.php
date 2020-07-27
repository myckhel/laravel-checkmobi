<?php
namespace Myckhel\CheckMobi\Traits;

use Illuminate\Support\Facades\Http;

/**
 * Default Check Mobi Requests
 */
trait HasQuery
{
  public static function requestValidation($params)
  {
    return self::post("validation/request", $params)->json();
  }

  public static function verifyValidation($params)
  {
    return self::post("validation/verify", $params)->json();
  }

  public static function validationStatus($id, $params=[])
  {
    return self::get("validation/status/$id", $params)->json();
  }

  public static function sendSMS($params=[])
  {
    return self::post("sms/send", $params)->json();
  }

  public static function getSmsDetails($id, $params=[])
  {
    return self::get("sms/$id", $params)->json();
  }

  public static function placeCall($params=[])
  {
    return self::post("call", $params)->json();
  }

  public static function getCallDetails($id, $params=[])
  {
    return self::get("call/$id", $params)->json();
  }

  public static function hangUpCall($id, $params=[])
  {
    return self::delete("call/$id", $params)->json();
  }

  public static function getAccountDetails($params=[])
  {
    return self::get("my-account", $params)->json();
  }

  public static function getCountriesList($params=[])
  {
    return self::get("countries", $params)->json();
  }

  public static function getPrefixes($params=[])
  {
    return self::get("prefixes", $params)->json();
  }

  public static function checkNumber($params=[])
  {
    return self::post("checknumber", $params)->json();
  }
}
