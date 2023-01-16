<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$middleware = config('checkmobi.route_middleware');

Route::group(['middleware' => $middleware ? explode(',', $middleware) : []], function(){
  Route::prefix('/api/checkmobi')->name('checkmobi')->group(function(){
    Route::post('validation/request',     'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@request');
    Route::post('validation/verify',      'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@verify');
    Route::get('validation/status/{id}',  'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@validationStatus');
    Route::get('my-account',              'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@getAccountDetails');
    Route::get('countries',               'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@getCountriesList');
    Route::get('prefixes',                'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@getPrefixes');
    Route::post('checknumber',            'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@checkNumber');
    Route::post('sms/send',               'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@sendSMS');
    Route::get('sms/{id}',                'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@getSmsDetails');
    Route::post('call',                   'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@placeCall');
    Route::get('call/{id}',               'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@getCallDetails');
    Route::delete('call/{id}',            'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController@hangUpCall');
  
  });
  
  Route::resource('/api/checkmobi',        'Myckhel\CheckMobi\Http\Controllers\CheckMobiVerificationController');
});
