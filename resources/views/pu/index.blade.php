@extends('layouts.programin')

@section('title','Programin-Pu')
@section('titlePag','Pu de la empresa')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    @include('empresa.navbar')
    @include('layouts.partials.navbarderecha')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    {{-- <div class="col-sm-3 text-left pl-2"> --}}
                    <div class="col-auto">
                    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}}</p>
                    </div>
                    <div class="col-auto mr-auto">
                        {{-- @can('contactos.create')
                        <a href="{{route('contacto.create')}}"><i class="fas fa-plus-circle fa-2x text-primary mt-2"></i></a>
                        @endcan --}}
                    </div>
                    <div class="col-sm-3 text-right pr-2">
                    <a href="{{url()->previous()}}">Volver</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- - /.content-header --}}
        {{-- main content  --}}
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <!-- card-header -->
                    {{-- <div class="card-header">
                    </div> --}}
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10 row">
                                {{-- {{ $pus->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$pus->currentPage()}} de {{$pus->lastPage()}} </span> --}}
                            </div>
                            {{-- <div class="card-tools col-auto"> --}}
                            <div class="col-2 mb-2">
                            </div>
                        </div>

                        {{-- mensajes de exito o error --}}
                        @include('layouts.partials.mensajes')
                        {{-- fin mensajes de exito o error --}}


                        <div class="table-responsive p-0">
                            <table class="table table-hover table-sm small text-nowrap">
                                <thead>
                                <tr>
                                    <th width=10px>#</th>
                                    <th>Destino</th>
                                    <th>Us</th>
                                    <th>Us2</th>
                                    <th>Ps</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($pus as $pu)
                                    <tr>
                                        <td class="badge badge-default">{{$pu->id}}-{{$pu->empresa_id}}</td>
                                        <td><input type="text" readonly class="form-control-plaintext" value="{{$pu->destino}}"/></td>
                                        <td><input type="text" readonly class="form-control-plaintext" value="{{$pu->us}}"/></td>
                                        <td><input type="text" readonly class="form-control-plaintext" value="{{$pu->us2}}"/></td>
                                        <td><input type="text" readonly class="form-control-plaintext" value="{{$pu->ps}}"/></td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('pu.destroy',$pu->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">    
                                                @can('pu.edit')
                                                    <a href="{{route('pu.edit', $pu->id) }}" title="Editar pu"><i class="far fa-edit text-primary fa-2x ml-3"></i></a>
                                                @endcan
                                                @can('pu.destroy')
                                                    <button type="submit" class="enlace"><i class="far fa-trash-alt text-danger fa-2x ml-1"></i></button>
                                                @endcan
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <!-- card-footer -->
                    <div class="card-footer">
                        <form method="POST" action="{{ route("pu.store") }}">
                        @csrf
                        <input type="hidden" name="empresa_id" value="{{$pu->empresa_id}}">
                        <div class="row">
                            <div class="form-group col">
                                <label for="destino">Destino</label>
                                <input type="text" class="form-control form-control-sm" name="destino" id="destino">
                            </div>
                            <div class="form-group col">
                                <label for="us">Us</label>
                                <input type="text" class="form-control form-control-sm" name="us" id="us">
                            </div>
                            <div class="form-group col">
                                <label for="us2">Us2</label>
                                <input type="text" class="form-control form-control-sm" name="us2" id="us2">
                            </div>
                            <div class="form-group col">
                                <label for="ps">Ps</label>
                                <input type="text" class="form-control form-control-sm" name="ps" id="ps">
                            </div>
                            <div class="form-group col">
                                <label for="observaciones">Observaciones</label>
                                <input type="text" class="form-control form-control-sm" name="observaciones" id="observaciones">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a class="btn btn-default" href="{{route('empresa.index')}}" title="Ir la página anterior">Volver</a>

                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
    <script>
    </script>
@endpush

