<?php

namespace App\Http\Controllers;

use App\Models\diario;
use Illuminate\Http\Request;

class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('index');
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
     * @param  \App\Models\diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function show(diario $diario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function edit(diario $diario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diario $diario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function destroy(diario $diario)
    {
        //
    }
}
