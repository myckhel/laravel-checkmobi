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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
