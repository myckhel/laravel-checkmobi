<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$middleware = config('checkmobi.route_middleware');

Route::group(['middleware' => $middleware ? explode(',', $middleware) : []], function(){
  Route::prefix('/api/checkmobi')->name('checkmobi')->group(function(){
    Route::post('validation/request', 'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@request');
    Route::post('validation/verify',  'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@verify');
  });
});
