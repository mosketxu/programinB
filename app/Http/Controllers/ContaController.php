<?php

namespace App\Http\Controllers;

use App\{Empresa, Conta,Provcli};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Empresa $empresa, Request $request)
    {
        $busqueda=($request->busca);
        $emitidas=Conta::search($request->busca)
        ->where('empresa_id',$empresa->id)
        ->where('tipo','E')
        ->get();

        $recibidas=Conta::search($request->busca)
        ->where('empresa_id',$empresa->id)
        ->where('tipo','R')
        ->get();

        return view('empresa.conta.index',compact('emitidas','recibidas','empresa','busqueda')); 
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
     * @param  \App\conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function show(conta $conta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function edit(conta $conta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conta $conta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function destroy(conta $conta)
    {
        //
    }
}
