<?php

namespace App\Http\Controllers;

use App\{Empresa,Conta, ContaRecurrente, Periodo, Provcli};
use Illuminate\Http\Request;

class ContaRecurrenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Empresa $empresa)
    {
        $recurrentes=ContaRecurrente::where('empresa_id',$empresa->id)
            ->with('provcli')
            ->get();
        $provclis=Provcli::orderBy('nombre')->get();
        return view('empresa.conta.recurrente.index',compact('empresa','recurrentes','provclis')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa,$anyo,$periodo,$tipo)
    {
        // dd($empresa,$anyo,$periodo,$tipo);
        $recurrentes=ContaRecurrente::where('empresa_id',$empresa)
            ->where('tipo',$tipo)
            ->get();
        $per=Periodo::find($periodo);
        $fecha=$anyo.'-'.$per->perI.'-01';
        // dd($fecha);
        foreach ($recurrentes as $recurrente) {
            Conta::create([
                'empresa_id' => $empresa,
                'fechaasiento' => $fecha,
                'fechafactura' => $fecha,
                'tipo'=>$tipo,
                'provcli_id'=>$recurrente->provcli_id,
                'concepto'=>$recurrente->provcli->nombre . ' ' . $per->periodo,
                'categoria_id'=>$recurrente->categoria_id,
            ]);
        }
        return redirect()->back()->with(['message'=> 'Recurrentes Creadas']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ContaRecurrente::create($request->all());
        return redirect()->back()->with(['message'=>'Actualizado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContaRecurrente  $contaRecurrente
     * @return \Illuminate\Http\Response
     */
    public function show(ContaRecurrente $contaRecurrente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContaRecurrente  $contaRecurrente
     * @return \Illuminate\Http\Response
     */
    public function edit(ContaRecurrente $contaRecurrente)
    {
        $recurrente=ContaRecurrente::find($contaRecurrente->id);
        $provclis=Provcli::orderBy('nombre')->get();
        return view('empresa.conta.recurrente.edit',compact('empresa','recurrente','provclis')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContaRecurrente  $contaRecurrente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContaRecurrente $contaRecurrente)
    {
        ContaRecurrente::where('id',$request->id)->update($request->all());
        return redirect()->back()->with(['message'=>'Actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContaRecurrente  $contaRecurrente
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContaRecurrente $contaRecurrente)
    {
        $recurrente=ContaRecurrente::find($contaRecurrente->id);
        $recurrente->destroy($id);

        return redirect()->back()->with(['message'=>'Eliminado']);
    }
}
