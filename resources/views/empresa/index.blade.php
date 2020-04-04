@extends('layouts.programin')

@section('title','Programin-Empresas')
@section('titlePag','Empresas')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
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
                        <p class="h3 pt-2 text-dark">@yield('titlePag')</p>
                    </div>
                    <div class="col-auto mr-auto">
                        @can('empresas.create')
                        <a href="{{route('empresa.create')}}"><i class="fas fa-plus-circle fa-2x text-primary mt-2"></i></a>
                        @endcan
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
                                {{ $empresas->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$empresas->currentPage()}} de {{$empresas->lastPage()}} </span>
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
                                    <th width="5px"></th>
                                    <th width=10px>#</th>
                                    <th>Alias</th>
                                    <th>Empresa</th>
                                    <th>Nif</th>
                                    <th>Provincia</th>
                                    <th>Cliente</th>
                                    <th>Tipo</th>
                                    <th>Tfno</th>
                                    <th>Email</th>
                                    <th>Suma</th>
                                    <th width=20px>Estado</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($empresas as $empresa)
                                    <tr>
                                        <td><a href="{{route('empresa.go', $empresa) }}" title="go"><i class="fab fa-goodreads text-primary fa-2x ml-3"></i></a></td>
                                        <td class="badge badge-default">{{$empresa->id}}</a></td>
                                        <td><a href="{{route('empresa.go', $empresa) }}">{{$empresa->alias}}</a></td>
                                        <td>{{$empresa->empresa}}</td>
                                        <td>{{$empresa->nif}}</td>
                                        <td>{{$empresa->provincia_id}}</td>
                                        <form id="form{{$empresa->id}}" role="form" method="post" action="{{ route('empresa.update') }}" >
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="id" value="{{$empresa->id}}" >
                                            <input type="hidden" name="empresa" value="{{$empresa->empresa}}" >
                                            <input type="hidden" name="alias" value="{{$empresa->alias}}" >
                                            <input type="hidden" name="tipoempresa" value="{{$empresa->tipoempresa}}" >
                                            <td>
                                            <select class="selectsinborde" name="cliente" id="cliente" onchange="update('form{{$empresa->id}}','{{ route('empresa.update') }}')" required aria-placeholder="cliente">
                                                    <option value="{{old('cliente','0')}}" {{$empresa->cliente=='0' ? 'selected' : '' }}>No</option>
                                                    <option value="{{old('cliente','1')}}"  {{$empresa->cliente=='1' ? 'selected' : ''}}>Sí</option>
                                                </select>
                                                {{-- <button type="submit">G</button> --}}
                                            </td>
                                        </form>
                                        <td>{{$empresa->tipoempresa}}</td>
                                        <td>{{$empresa->tfno}}</td>
                                        <td>{{$empresa->emailgral}}</td>
                                        <td>{{$empresa->contactosuma}}</td>
                                        <td class="mt-1 pt-1 badge {{($empresa->estado==0) ? "badge-danger" : "badge-success"}}">{{($empresa->estado==0) ? "Baja" : "Activo"}}</td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('empresa.destroy',$empresa->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="token">    
                                                @can('empresas.edit')
                                                    <a href="{{route('empresa.edit', $empresa) }}" title="Editar empresa"><i class="far fa-edit text-primary fa-2x ml-3"></i></a>
                                                @endcan
                                                @can('empresas.destroy')
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
                    <div>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
<script>
    function update(formulario,ruta) {
        var token= $('#token').val();

        $.ajaxSetup({
            headers: { "X-CSRF-TOKEN": $('#token').val() },
        });
        var formElement = document.getElementById(formulario);
        var formData = new FormData(formElement);

        $.ajax({
            type:'POST',
                url: ruta,
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data) {
                    toastr.success(data[1],{
                    "progressBar":true,
                    "positionClass":"toast-top-center"
                    });
                },
                error: function(data){
                    toastr.error("No se ha actualizado el contacto",{
                        "closeButton": true,
                        "progressBar":true,
                        "positionClass":"toast-top-center",
                        "options.escapeHtml" : true,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": 0,
                    });
                }
            });
        }
    

    </script>
@endpush

