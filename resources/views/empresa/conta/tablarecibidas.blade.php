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
               <th class="text-right">Base 21<br>{{number_format($recibidas->sum('base21'),2)}}</th>
               <th class="text-right">21%<br>{{number_format($recibidas->sum('iva21'),2)}}</th>
               <th class="text-right">Base 10<br>{{number_format($recibidas->sum('base10'),2)}}</th>
               <th class="text-right">10%<br>{{number_format($recibidas->sum('iva10'),2)}}</th>
               <th class="text-right">Base 4<br>{{number_format($recibidas->sum('base4'),2)}}</th>
               <th class="text-right">4%<br>{{number_format($recibidas->sum('iva4'),2)}}</th>
               <th class="text-right">Exento<br>{{number_format($recibidas->sum('exento'),2)}}</th>
               <th class="text-right">Base Ret<br>{{number_format($recibidas->sum('baseretencion'),2)}}</th>
               <th class="text-right">% Ret</th>
               <th class="text-right">Retención<br>{{number_format($recibidas->sum('retencion'),2)}}</th>
               <th class="text-right">Total<br>{{number_format($recibidas->sum('base21')+$recibidas->sum('iva21')+$recibidas->sum('base10')+$recibidas->sum('iva10')+$recibidas->sum('base4')+$recibidas->sum('iva4')+$recibidas->sum('exento')-+$recibidas->sum('retencion'),2)}}</th>
               <th></th>
           </tr>
       </thead>
       <tbody id="bodyasientos">
           @foreach($recibidas as $recibida)
           <tr id="tr{{$recibida->id}}">
               <td>{{$recibida->id}}</td>
               <td>{{$recibida->fechaasiento}}</td>
               <td>{{$recibida->fechafactura}}</td>
               <td>{{$recibida->provclis->nombre??$recibida->provcli_id}}</td>
               <td>{{$recibida->factura}}</td>
               <td>{{$recibida->concepto}}</td>
               <td class="text-right">{{number_format($recibida->base21,2)}}</td>
               <td class="text-right">{{number_format($recibida->iva21,2)}}</td>
               <td class="text-right">{{number_format($recibida->base10,2)}}</td>
               <td class="text-right">{{number_format($recibida->iva10,2)}}</td>
               <td class="text-right">{{number_format($recibida->base4,2)}}</td>
               <td class="text-right">{{number_format($recibida->iva4,2)}}</td>
               <td class="text-right">{{number_format($recibida->exento,2)}}</td>
               <td class="text-right">{{number_format($recibida->baseretencion,2)}}</td>
               <td class="text-right">{{number_format($recibida->porcentajeretencion,2)}}</td>
               <td class="text-right">{{number_format($recibida->retencion,2)}}</td>
               <td class="text-right">{{number_format($recibida->base21+$recibida->iva21+$recibida->base10+$recibida->iva10+$recibida->base4+$recibida->iva4
               +$recibida->exento-$recibida->retencion,2)}}</td>
               <td  class="text-right m-0 pr-3">
                   <form  id="formDelete{{$recibida->id}}">
                    @method('POST')
                    @csrf
                        <a href="{{route('conta.edit',[$recibida,$anyo,$periodo?? '17'])}}"><i class="far fa-edit text-primary fa-lg ml-2"></i></a>
                        <a href="#!" class="btn-delete " title="Eliminar" onclick="eliminarfila('{{$recibida->id}}')"><i class="far fa-trash-alt text-danger fa-lg ml-1"></i></a>
                    </form>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>
