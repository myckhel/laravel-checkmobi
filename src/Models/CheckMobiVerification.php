<?php

namespace Myckhel\CheckMobi\Models;

use Illuminate\Database\Eloquent\Model;

class CheckMobiVerification extends Model
{
  $protectd fillable = ['number', 'validated', 'retry_at'];

  public function isValidated()
  {
    return $this->validated;
  }
}
