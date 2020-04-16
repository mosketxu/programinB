@extends('layouts.programin')

@section('title','Programin-Contactos')
@section('titlePag','Contactos de ')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}}</p>
    @include('empresa.navbar')
{{-- @include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}}</p>
    @include('empresa.navbar')
    @include('layouts.partials.navbarderecha') --}}
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
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
                                {{-- {{ $empresacontactos->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$empresacontactos->currentPage()}} de {{$empresacontactos->lastPage()}} </span> --}}
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
                                    <th>Nombre</th>
                                    <th>Departamento</th>
                                    <th>Tfno</th>
                                    <th>Email 1</th>
                                    <th>Email 2</th>
                                    <th>Provincia</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($empresacontactos as $empresacontacto)
                                    <tr>
                                        <td class="badge badge-default">{{$empresacontacto->id}}-{{$empresacontacto->empresa_id}}-{{$empresacontacto->contacto_id}}</a></td>
                                        <td>{{$empresacontacto->contacto->empresa ?? '-'}}</td>
                                        {{-- <form id="form{{$empresacontacto->id}}" role="form" method="post" action="{{ route('empresacontacto.update',$empresacontacto->id) }}" > --}}
                                        <form id="form{{$empresacontacto->id}}" role="form" method="post" action="{{ route('empresacontacto.update') }}" >
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="id" value="{{$empresacontacto->id}}" >
                                            <td>
                                            <select class="selectsinborde" name="departamento" id="departamento" onchange="update('form{{$empresacontacto->id}}','{{ route('empresacontacto.update') }}')" required aria-placeholder="departamento">
                                                @foreach($departamentos as $departamento)
                                                    <option value="{{old('departamento',$departamento->departamento)}}"  {{ $departamento->departamento == $empresacontacto->departamento ? 'selected' : '' }}>{{ $departamento->departamento }}</option>
                                                @endforeach
                                            </select>
                                            </td>
                                        </form>
                                        <td>{{$empresacontacto->contacto->tfno ?? '-'}}</td>
                                        <td>{{$empresacontacto->contacto->emailgral ?? '-'}}</td>
                                        <td>{{$empresacontacto->contacto->emailadm ?? '-'}}</td>
                                        <td>{{$empresacontacto->contacto->provincia_id ?? '-'}}</td>
                                        <td>{{$empresacontacto->contacto->observaciones}}</td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('empresacontacto.destroy',$empresacontacto->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="token">    
                                                @can('empresacontactos.edit')
                                                    <a href="{{route('contacto.edit', $empresacontacto->contacto_id) }}" title="Editar contacto"><i class="far fa-edit text-primary fa-2x ml-3"></i></a>
                                                @endcan
                                                @can('empresacontactos.destroy')
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
                        <form method="POST" action="{{ route("empresacontacto.store") }}">
                        @csrf
                        <input type="hidden" name="empresa_id" value="{{$empresa->id}}">
                        <label for="empresas">Selecciona contactos 
                            @can('empresacontactos.create')
                            o pulsa  
                            <a href="{{route('empresacontacto.create',$empresa)}}">AQUÍ</a> 
                            aqui para crear uno nuevo
                            @endcan
                        </label>
                        <select class="form-control" name="contactos[]" id="contactos" multiple="multiple">
                            @foreach($contactos as $contacto)
                                <option value="{{$contacto->id}}">{{$contacto->empresa}}</option>
                            @endforeach
                        </select>
                        <button type="submit">Guardar</button>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
    <script>

    $(document).ready(function(){
        $('#contactos').select2({
            placeholder :"Selecciona contactos",
            tags:true,
            allowClear:true,
        });
    });


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

