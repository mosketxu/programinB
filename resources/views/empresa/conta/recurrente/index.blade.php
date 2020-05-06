<div class="card col-6">
    @include('layouts.partials.mensajes')
    <div class="card-header">
        Recurrentes
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm small table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Proveedor</th>
                        <th>Concepto</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recurrentes as $recurrente)
                    <tr>
                        <td>{{$recurrente->id}}</td>
                        <td>{{$recurrente->provcli->nombre??$recurrente->provcli_id}}</td>
                        <td>{{$recurrente->concepto}}</td>
                        <td  class="text-right m-0 pr-3">
                            <form>
                                @method('POST')
                                @csrf
                                    <a href="{{route('contarecurrente.edit',$recurrente)}}"><i class="far fa-edit text-primary fa-lg ml-2"></i></a>
                                    <button type="submit" class="enlace"><i class="far fa-trash-alt text-danger fa-lg ml-1"></i></button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            
    </div>
    <div class="card-footer">
        <table class="table table-hover table-sm small table-head-fixed text-nowrap">
            <thead>
                <tr>
                        <th width="45%">Proveedor</th>
                        <th width="50%">Concepto</th>
                        <th  width="5%"></th>
                </tr>
            </thead>
            <tbody>
                <form method="POST" action="{{route('contarecurrente.store')}}">
                @csrf
                    <tr>
                        <input type="hidden" name="empresa_id" id="empresa_id" value="{{$empresa->id}}"></td>
                        <td>
                            <select class="form-control form-control-sm select2"  name="provcli_id" id="provcli_id" style="width: 100%;">
                                <option value="">-</option>
                                @foreach($provclis as $provcli)
                                <option value="{{ $provcli->id }}">{{ $provcli->nombre }} - {{ $provcli->id }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td><input class="form-control form-control-sm" type="text" name="concepto" id="concepto" value=""></td>
                        <td><button type="submit" class="enlace"><i class="fas fa-plus-circle text-primary fa-2x"></i></button></td>
                    </tr>
                </form>
            </tbody>
            </table>
    </div>
</div>