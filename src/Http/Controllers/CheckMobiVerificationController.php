<?php

namespace Myckhel\CheckMobi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Myckhel\CheckMobi\Support\MissedCall;
use Myckhel\CheckMobi\Models\CheckMobiVerification;
use CheckMobi;

class CheckMobiVerificationController extends Controller
{
  public function request(Request $request)
  {
    $request->validate([
      'number'                  => 'required',
      'type'                    => 'required|in:sms,ivr,reverse_cli',
      'language'                => '',
      'notification_callback'   => '',
      'platform'                => 'in:ios,android,web,desktop',
      'android_app_hash'        => '',
    ]);

    return CheckMobi::requestValidation($request->all());
  }

  public function verify(Request $request)
  {
    $request->validate([
      'id'                  => 'required',
      'pin'                 => 'required',
      'use_server_hangup'   => 'boolean',
    ]);

    return CheckMobi::verifyValidation($request->all());
  }

  public function getAccountDetails(Request $request)
  {
    return CheckMobi::getAccountDetails($request->all());
  }

  public function getCountriesList(Request $request)
  {
    return CheckMobi::getCountriesList($request->all());
  }

  public function getPrefixes(Request $request)
  {
    return CheckMobi::getPrefixes($request->all());
  }

  public function checkNumber(Request $request)
  {
    return CheckMobi::checkNumber($request->all());
  }

  public function validationStatus(Request $request, $id)
  {
    $request->validate([
    ]);

    return CheckMobi::validationStatus($id, $request->all());
  }

  public function sendSMS(Request $request)
  {
    $request->validate([
      'to'                    => 'required',
      'text'                  => 'required',
      'notification_callback' => '',
    ]);

    return CheckMobi::sendSMS($request->all());
  }

  public function getSmsDetails(Request $request, $id)
  {
    $request->validate([
    ]);

    return CheckMobi::getSmsDetails($id, $request->all());
  }

  public function placeCall(Request $request)
  {
    $request->validate([
      'to'                    => 'required',
      'from'                  => 'required',
      'platform'              => 'in:ios,android,web,desktop',
      'notification_callback' => '',
      'events'                => '',
    ]);

    return CheckMobi::placeCall($request->all());
  }

  public function getCallDetails(Request $request, $id)
  {
    $request->validate([
    ]);

    return CheckMobi::getCallDetails($id, $request->all());
  }

  public function hangUpCall(Request $request, $id)
  {
    $request->validate([
    ]);

    return CheckMobi::hangUpCall($id, $request->all());
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  \CheckMobiVerification  $checkMobiVerification
   * @return \Illuminate\Http\Response
   */
  public function show(CheckMobiVerification $checkMobiVerification)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \CheckMobiVerification  $checkMobiVerification
   * @return \Illuminate\Http\Response
   */
  public function edit(CheckMobiVerification $checkMobiVerification)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \CheckMobiVerification  $checkMobiVerification
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, CheckMobiVerification $checkMobiVerification)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \CheckMobiVerification  $checkMobiVerification
   * @return \Illuminate\Http\Response
   */
  public function destroy(CheckMobiVerification $checkMobiVerification)
  {
      //
  }
}
