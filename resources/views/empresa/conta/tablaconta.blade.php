<div id="tablaconta" class="table-responsive p-0 alturatabla">
   <table id="tablaasientos" class="table table-hover table-sm small table-head-fixed text-nowrap">
       <thead>
           <tr>
               <th>#</th>
               <th>F.Asiento</th>
               <th>F.Fact.</th>
               <th>Proveedor</th>
               <th>NºFact.</th>
               <th>Concepto</th>
               <th>Categoria</th>
               <th class="text-right">Base 21<br>{{number_format($contas->sum('base21'),2)}}</th>
               <th class="text-right">21%<br>{{number_format($contas->sum('iva21'),2)}}</th>
               <th class="text-right">Base 10<br>{{number_format($contas->sum('base10'),2)}}</th>
               <th class="text-right">10%<br>{{number_format($contas->sum('iva10'),2)}}</th>
               <th class="text-right">Base 4<br>{{number_format($contas->sum('base4'),2)}}</th>
               <th class="text-right">4%<br>{{number_format($contas->sum('iva4'),2)}}</th>
               <th class="text-right">Exento<br>{{number_format($contas->sum('exento'),2)}}</th>
               <th class="text-right">Base Ret<br>{{number_format($contas->sum('baseretencion'),2)}}</th>
               <th class="text-right">% Ret</th>
               <th class="text-right">Retención<br>{{number_format($contas->sum('retencion'),2)}}</th>
               <th class={{$tipo=='R'? "d-none":"text-right"}}>Base Req<br>{{number_format($contas->sum('baserecargo'),2)}}</th>
               <th class={{$tipo=='R'? "d-none":"text-right"}}>% Req</th>
               <th class={{$tipo=='R'? "d-none":"text-right"}}>R.Equiv<br>{{number_format($contas->sum('recargo'),2)}}</th>
               <th class="text-right">Total<br>{{number_format($contas->sum('base21')+$contas->sum('iva21')+$contas->sum('base10')+$contas->sum('iva10')+$contas->sum('base4')+$contas->sum('iva4')+$contas->sum('exento')-$contas->sum('retencion')+$contas->sum('recargo'),2)}}</th>
               <th></th>
           </tr>
       </thead>
       <tbody id="bodyasientos">
           @foreach($contas as $conta)
           <tr id="tr{{$conta->id}}">
               <td>{{$conta->id}}</td>
               <td>{{$conta->fechaasiento}}</td>
               <td>{{$conta->fechafactura}}</td>
               <td>{{$conta->provclis->nombre??$conta->provcli_id}}</td>
               <td>{{$conta->factura}}</td>
               <td>{{$conta->concepto}}</td>
               <td>{{$conta->categoria->categoria??''}}</td>
               <td class="text-right">{{number_format($conta->base21,2)}}</td>
               <td class="text-right">{{number_format($conta->iva21,2)}}</td>
               <td class="text-right">{{number_format($conta->base10,2)}}</td>
               <td class="text-right">{{number_format($conta->iva10,2)}}</td>
               <td class="text-right">{{number_format($conta->base4,2)}}</td>
               <td class="text-right">{{number_format($conta->iva4,2)}}</td>
               <td class="text-right">{{number_format($conta->exento,2)}}</td>
               <td class="text-right">{{number_format($conta->baseretencion,2)}}</td>
               <td class="text-right">{{number_format($conta->porcentajeretencion,2)}}</td>
               <td class="text-right">{{number_format($conta->retencion,2)}}</td>
               <td class={{$tipo=='R'? "d-none":"text-right"}}>{{number_format($conta->baserecargo,2)}}</td>
               <td class={{$tipo=='R'? "d-none":"text-right"}}>{{number_format($conta->porcentajerecargo,2)}}</td>
               <td class={{$tipo=='R'? "d-none":"text-right"}}>{{number_format($conta->recargo,2)}}</td>
               <td class="text-right">{{number_format($conta->base21+$conta->iva21+$conta->base10+$conta->iva10+$conta->base4+$conta->iva4
               +$conta->exento-$conta->retencion+$conta->recargo,2)}}</td>
               <td  class="text-right m-0 pr-3">
                   <form  id="formDelete{{$conta->id}}">
                    @method('POST')
                    @csrf
                        <a href="{{route('conta.edit',[$conta,$anyo,$periodo?? '17'])}}"><i class="far fa-edit text-primary fa-lg ml-2"></i></a>
                        <a href="#!" class="btn-delete " title="Eliminar" onclick="eliminarfila('{{$conta->id}}')"><i class="far fa-trash-alt text-danger fa-lg ml-1"></i></a>
                    </form>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>
