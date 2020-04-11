<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveedorRequest;
use App\{Proveedor,Provincia,Pais};
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda=($request->busca);
        $proveedores=Proveedor::search($request->busca)
        ->orderBy('proveedor')
        ->paginate();
        return view('proveedor.index',compact('proveedores','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises=Pais::get();
        $provincias=Provincia::get();
        return view('proveedor.create',compact('paises','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorRequest $request)
    {
        Proveedor::create($request->all());
        return redirect()->back()->with('message', 'Proveedor creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        $paises=Pais::get();
        $provincias=Provincia::get();
        $proveedor=Proveedor::find($proveedor->id);
      
        return view('proveedor.edit',compact('proveedor','paises','provincias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(ProveedorRequest $request)
    {
        Proveedor::find($request->id)->update($request->all());
        if($request->ajax()){
            return response()->json(['message', 'Proveedor Actualizado']);
        }
        else{
            return redirect()->back()->with('message', 'Proveedor Actualizado');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->back()->with('message', 'Proveedor '.$proveedor->proveedor.' eliminado');

    }
}
