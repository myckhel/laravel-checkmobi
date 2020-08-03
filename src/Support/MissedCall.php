<?php
namespace Myckhel\CheckMobi\Support;

use Myckhel\CheckMobi\Traits\Request;
use Myckhel\CheckMobi\Traits\HasQuery;
use Myckhel\CheckMobi\Models\CheckMobiVerification;
use Carbon\Carbon;

/**
 *
 */
class MissedCall
{
  use Request, HasQuery;

  public static function flash($params)
  {
    // check number retry limit
    $verification = CheckMobiVerification::hasActiveRetry($params['number'])
    ->whereType('reverse_cli')->first();
    if ($verification) {
      return $verification->toArray();
    }

    $p = self::merge([
      "type"              => "reverse_cli",
      "use_server_hangup" => true
    ], $params);

    $res = self::requestValidation($p);
    $retry_after = config('checkmobi.retry_after');
    // log to db
    CheckMobiVerification::create([
      'id'        => $res['id'],
      'type'      => $res['type'],
      'number'    => str_replace(str_split(' -'), '', $res['validation_info']['formatting']),
      'cc'        => $res['validation_info']['country_code'],
      'retry_at'  => Carbon::now()->addSeconds($retry_after),
    ]);


    return $res;
  }

  public static function verify($params)
  {
    $res = self::verifyValidation(self::merge([], $params));
    // todo log to db
    if ($res['validated']) {
      try {
        CheckMobiVerification::pending($res['number'])->update(['validated' => true]);
      } catch (\Exception $e) {
        dd($e);
      }

    }

    return $res;
  }
}
