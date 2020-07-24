<?php

namespace Myckhel\CheckMobi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use {{ namespacedModel }};

class CheckMobiVerificationController extends Controller
{
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
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function show({{ model }} ${{ modelVariable }})
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function edit({{ model }} ${{ modelVariable }})
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, {{ model }} ${{ modelVariable }})
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \{{ namespacedModel }}  ${{ modelVariable }}
     * @return \Illuminate\Http\Response
     */
    public function destroy({{ model }} ${{ modelVariable }})
    {
        //
    }
}
