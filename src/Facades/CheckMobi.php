<?php

namespace Myckhel\CheckMobi\Facades;

use Illuminate\Support\Facades\Facade;

use Myckhel\CheckMobi\Traits\Request;
use Myckhel\CheckMobi\Traits\HasQuery;

class CheckMobi extends Facade
{
  use Request, HasQuery;

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
      return 'checkmobi';
  }
}
