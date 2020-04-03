<?php

namespace App\Http\Controllers;

use App\{Departamento, Empresa,EmpresaContacto};
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
        // dd($request);
        $contactos=$request->contactos;
        foreach($contactos as $contacto){
            // dd($request->empresa_id);
            EmpresaContacto::create([
                'empresa_id'=>$request->empresa_id,
                'contacto_id'=>$contacto,
                'departamento','-'
            ]);
        }

        return redirect()->back()->with('message', 'Contactos Añadidos');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($empresa_id)
    {
        $empresa=Empresa::find($empresa_id);
        $empresacontactos=EmpresaContacto::where('empresa_id',$empresa_id)->get();
        $departamentos=Departamento::get();
        $contactos = Empresa::whereNotIn('id', function ($query) use ($empresa_id) {
            $query->select('contacto_id')->from('empresa_contacto')->where('empresa_id', $empresa_id);
            })
            ->get();
        return view('empresacontacto.index',compact('empresacontactos','empresa','departamentos','contactos'));

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
    // public function update(Request $request, EmpresaContacto $empresaContacto)
    public function update(Request $request)
    {
        EmpresaContacto::find($request->id)->update($request->all());
        if($request->ajax()){
            return response()->json(['message', 'Departamento Actualizado']);
        }
        else{
            return redirect()->back()->with('message', 'Departamento Actualizado');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmpresaContacto  $empresaContacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($empresaContacto)
    {
        EmpresaContacto::find($empresaContacto)->forceDelete();

        return redirect()->back()->with('message', 'Contacto eliminado');
    }
}
