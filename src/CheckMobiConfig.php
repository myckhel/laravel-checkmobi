<?php
namespace Myckhel\CheckMobi;

/**
 *
 */
class CheckMobiConfig
{

  public function __construct()
  {
    $this->secret    = config('checkmobi.secret_key');

    $this->url       = "https://api.checkmobi.com/v1/";
  }

}
