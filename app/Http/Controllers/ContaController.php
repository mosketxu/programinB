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


    public function emitidas(Empresa $empresa, Request $request)
    {
        $busqueda=($request->busca);
        $provclis=Provcli::orderBy('nombre')->get();
        $emitidas=Conta::search($request->busca)
        ->where('empresa_id',$empresa->id)
        ->where('tipo','E')
        ->get();

        return view('empresa.conta.emitidas',compact('emitidas','empresa','provclis','busqueda')); 
    }

    public function recibidas(Empresa $empresa, Request $request)
    {
        $busqueda=($request->busca);
        $provclis=Provcli::orderBy('nombre')->get();
        $recibidas=Conta::search($request->busca)
        ->where('empresa_id',$empresa->id)
        ->where('tipo','R')
        ->with('provclis')
        ->get();

        return view('empresa.conta.recibidas',compact('recibidas','empresa','provclis','busqueda')); 
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
        $conta=Conta::create($request->all());

        if($request->tipo=="R"){
            $respuesta=[
                'id'=>$conta->id,
                'token'=>$request->_token,
                'fechaasiento'=>$conta->fechaasiento,
                'fechafactura'=>$conta->fechafactura,
                'factura'=>$conta->factura,
                'provcli'=>$conta->provcli->nombre??'-',
                'concepto'=>$conta->concepto,
                'base21'=>$conta->base21,
                'iva21'=>$conta->iva21,
                'base10'=>$conta->base10,
                'iva10'=>$conta->iva10,
                'base4'=>$conta->base4,
                'iva4'=>$conta->iva4,
                'exento'=>$conta->exento,
                'baseretencion'=>$conta->baseretencion,
                'porcentajeretencion'=>$conta->porcentajeretencion,
                'retencion'=>$conta->retencion,
                'total'=>$conta->base21+$conta->iva21+$conta->base10+$conta->iva10+$conta->base4+$conta->iva4+$conta->exento-$conta->retencion,
            ];
        }
        elseif($request->tipo=="E"){
            $respuesta=[
                'id'=>$conta->id,
                'fechaasiento'=>$conta->fechaasiento,
                'fechafactura'=>$conta->fechafactura,
                'factura'=>$conta->factura,
                'provcli'=>$conta->provcli->nombre??'-',
                'concepto'=>$cont->concepto,
                'base21'=>$conta->base21,
                'iva21'=>$conta->iva21,
                'base10'=>$conta->base10,
                'iva10'=>$conta->iva10,
                'base4'=>$conta->base4,
                'iva4'=>$conta->iva4,
                'exento'=>$conta->exento,
                'baseretencion'=>$conta->baseretencion,
                'porcentajeretencion'=>$conta->porcentajeretencion,
                'retencion'=>$conta->retencion,
                'baserecargo'=>$conta->baserecargo,
                'porcentajerecargo'=>$conta->porcentajerecargo,
                'recargo'=>$conta->recargo,
                'total'=>$conta->base21+$conta->iva21+$conta->base10+$conta->iva10+$conta->base4+$conta->iva4+$conta->exento-$conta->retencion+$conta->recargo,
            ];
        }

        return response()->json($respuesta);

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
    public function destroy($id)
    {
        // $c=Conta::find($id);
        // $c->delete();
        // return response()->json(['message', 'Asiento eliminado']);
        $conta=Conta::find($id);
        $conta->destroy($id);

        return response()->json(['message', 'Asiento eliminado']);

    }
}
