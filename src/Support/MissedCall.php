<?php
namespace Myckhel\CheckMobi\Support;

use Myckhel\CheckMobi\Traits\Request;
use Myckhel\CheckMobi\Traits\HasQuery;

/**
 *
 */
class MissedCall
{
  use Request, HasQuery;

  public static function request($params)
  {
    $res = self::requestValidation(array_merge([
      "type"              => "reverse_cli",
      "use_server_hangup" => true
    ], $params));
    // todo log to db

    return $res;
  }

  public static function verify($params)
  {
    $res = self::verifyValidation(self::merge([], $params));
    // todo log to db

    return $res;
  }
}
