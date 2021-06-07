<?php

namespace App\Http\Controllers;

use App\Models\Cikuya;
use Illuminate\Http\Request;

class CikuyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('index');
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
     * @param  \App\Models\Cikuya  $cikuya
     * @return \Illuminate\Http\Response
     */
    public function show(Cikuya $cikuya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cikuya  $cikuya
     * @return \Illuminate\Http\Response
     */
    public function edit(Cikuya $cikuya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cikuya  $cikuya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cikuya $cikuya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cikuya  $cikuya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cikuya $cikuya)
    {
        //
    }
}
