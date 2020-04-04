<?php

namespace App\Http\Controllers;

use App\{Pu,Empresa};
use Illuminate\Http\Request;

class PuController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function show($empresa_id)
    {
        $empresa=Empresa::find($empresa_id);
        $pus = Pu::where('empresa_id',$empresa_id)
            ->get();
        return view('pu.index',compact('pus','empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pu  $pu
     * @return \Illuminate\Http\Response
     */
    public function edit(Pu $pu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pu  $pu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pu $pu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pu  $pu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pu $pu)
    {
        //
    }
}
