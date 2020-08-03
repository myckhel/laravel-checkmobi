<?php

namespace Myckhel\CheckMobi\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CheckMobiVerification extends Model
{
  protected $fillable = ['id', 'type', 'number', 'validated', 'cc', 'retry_at'];
  protected $casts = ['validated' => 'boolean'];
  protected $dates = ['retry_at'];

  public function isValidated()
  {
    return $this->validated;
  }

  public static function stripNumber($e164Number){
    return str_replace(str_split(' -'), '', $e164Number);
  }

  public function scopePending($q, $e164Number)
  {
    $q->number($e164Number)->where('validated', false);
  }

  public function scopeNumber($q, $e164Number)
  {
    $number = self::stripNumber($e164Number);
    $q->whereNumber($number);
  }

  public function scopeHasActiveRetry($q, $e164Number)
  {
    return $q->number("$e164Number")->whereValidated(false)
    ->where('retry_at', '>', Carbon::now())
    ->latest();
  }
}
