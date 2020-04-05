<?php

namespace App\Http\Controllers;

use App\{Contacto,Pais,Provincia,TipoEmpresa,EmpresaContacto,Empresa};
use App\Http\Requests\ContactoRequest;
use Illuminate\Http\Request;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda=($request->busca);
        $contactos=Contacto::search($request->busca)
        ->where('deleted_at',null)
        ->orderBy('empresa')
        ->paginate();

        return view('contacto.index',compact('contactos','busqueda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises=Pais::get()
        ->prepend(new Pais(['pais'=>'--selecciona un pais--']));
        $provincias=Provincia::get()
        ->prepend(new Provincia(['provincia'=>'selecciona una provincia']));
        return view('contacto.create',compact('tipoempresas','paises','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        Contacto::create($request->all());
        return redirect()->back()->with('message', 'Contacto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        $tipoempresas=TipoEmpresa::get();
        $paises=Pais::get();
        $provincias=Provincia::get();
        $contacto=Contacto::find($contacto->id);
        $c=$contacto->id;
        // $empresas=EmpresaContacto::where('contacto_id',$contacto->id)->get()->toArray();
        $empresasasociadas=EmpresaContacto::where('contacto_id',$contacto->id)->pluck('empresa_id')->toArray();
        
        $empresas= Empresa::orderBy('empresa')
            ->get();

        return view('contacto.edit',compact('contacto','tipoempresas','paises','provincias','empresasasociadas','empresas'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoRequest $request)
    {
        Contacto::find($request->id)->update($request->all());
        if($request->ajax()){
            return response()->json(['message', 'Contacto Actualizado']);
        }
        else{
            return redirect()->back()->with('message', 'Contacto Actualizado');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    { 
        $contacto->delete();
        return redirect()->back()->with('message', 'Contacto '.$contacto->empresa.' eliminado');

    }
}
