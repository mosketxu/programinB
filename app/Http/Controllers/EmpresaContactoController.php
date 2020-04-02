<?php

namespace App\Http\Controllers;

use App\EmpresaContacto;
use Illuminate\Http\Request;

class EmpresaContactoController extends Controller
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
    public function storeempresas(Request $request)
    {
        EmpresaContacto::where('contacto_id',$request->contacto_id)->delete();
        $asociadas = $request->duallistbox;
        dd($asociadas);
        if(!is_null($request->duallistbox)){
            // dd($request->duallistbox[0]);
            foreach($asociadas as $asociada){
                if(!empty($asociada)){
                    $c=json_decode($asociada);
                        // dd($c);
                        EmpresaContacto::insert([
                                'contacto_id'=>$request->contacto_id,
                                'empresa_id'=>$c,
                            ]);
                    }
                }
            }
        return redirect()->back()->with('message', 'Empresas Asociadas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmpresaContacto  $empresaContacto
     * @return \Illuminate\Http\Response
     */
    public function show(EmpresaContacto $empresaContacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmpresaContacto  $empresaContacto
     * @return \Illuminate\Http\Response
     */
    public function edit(EmpresaContacto $empresaContacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmpresaContacto  $empresaContacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpresaContacto $empresaContacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmpresaContacto  $empresaContacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpresaContacto $empresaContacto)
    {
        //
    }
}
