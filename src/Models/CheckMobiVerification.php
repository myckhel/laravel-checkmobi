<?php

namespace Myckhel\CheckMobi\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CheckMobiVerification extends Model
{
  protected $fillable = ['number', 'validated', 'cc', 'retry_at'];

  public function isValidated()
  {
    return $this->validated;
  }

  public static function numberCanRequest($e164Number)
  {
    // return self::whereNumber($e164Number)->whereDate('retry_at', '>=', Carbon::now()->timestamp)->first();
  }
}
