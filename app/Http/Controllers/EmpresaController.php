<?php

namespace App\Http\Controllers;

use App\{Empresa,Pais,Provincia,TipoEmpresa};
use App\Http\Requests\EmpresaCreateRequest;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda=($request->busca) ? $request->busca : '';
        $empresas=Empresa::search($request->busca)
        ->paginate();
        return view('empresa.index',compact('empresas','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoempresas=TipoEmpresa::get();
        $paises=Pais::get()
        ->prepend(new Pais(['pais'=>'--selecciona un pais--']));
        $provincias=Provincia::get()
        ->prepend(new Provincia(['provincia'=>'selecciona una provincia']));
        $tipoempresas=TipoEmpresa::get();
        return view('empresa.create',compact('tipoempresas','paises','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaCreateRequest $request)
    {
        // dd($request);
        Empresa::create($request->all());
        return redirect()->back()->with('message', 'Empresa creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
