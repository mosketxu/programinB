@extends('layouts.programin')

@section('title','Programin-Contactos')
@section('titlePag','Contactos')
@section('navbar')
    @include('layouts.partials.navbar')
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
                        @can('contactos.create')
                        <a href="{{route('contacto.create')}}"><i class="fas fa-plus-circle fa-2x text-primary mt-2"></i></a>
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
                                {{ $contactos->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$contactos->currentPage()}} de {{$contactos->lastPage()}} </span>
                            </div>
                            {{-- <div class="card-tools col-auto"> --}}
                            <div class="col-2 mb-2">
                            </div>
                        </div>
                        @if($errors->any())
                        <div id="error" class="alert alert-danger">
                            <h6>Por favor, corrige los errores</h6>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        @if(session()->has('message'))
                            <div id="success" class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="table-responsive p-0">
                            <table class="table table-hover table-sm small text-nowrap">
                                <thead>
                                <tr>
                                    <th width=10px>#</th>
                                    <th>Alias</th>
                                    <th>Nombre</th>
                                    <th>Nif</th>
                                    <th>Provincia</th>
                                    <th>Cliente</th>
                                    <th>Tipo</th>
                                    <th width=20px>Estado</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($contactos as $contacto)
                                    <tr>
                                        <td class="badge badge-default">{{$contacto->id}}</a></td>
                                        <td><a href="{{route('contacto.edit', $contacto) }}">{{$contacto->alias}}</a></td>
                                        <td>{{$contacto->empresa}}</td>
                                        <td>{{$contacto->nif}}</td>
                                        <td>{{$contacto->provincia_id}}</td>
                                        <form id="form{{$contacto->id}}" role="form" method="post" action="{{ route('contacto.update') }}" >
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="id" value="{{$contacto->id}}" >
                                            <input type="hidden" name="empresa" value="{{$contacto->empresa}}" >
                                            <input type="hidden" name="alias" value="{{$contacto->alias}}" >
                                            <input type="hidden" name="tipoempresa" value="{{$contacto->tipoempresa}}" >
                                            <td>
                                            <select class="selectsinborde" name="cliente" id="cliente" onchange="update('form{{$contacto->id}}','{{ route('contacto.update') }}')" required aria-placeholder="cliente">
                                                    <option value="{{old('cliente','0')}}" {{$contacto->cliente=='0' ? 'selected' : '' }}>No</option>
                                                    <option value="{{old('cliente','1')}}"  {{$contacto->cliente=='1' ? 'selected' : ''}}>Sí</option>
                                                </select>
                                                {{-- <button type="submit">G</button> --}}
                                            </td>
                                        </form>
                                        <td>{{$contacto->tipoempresa}}</td>
                                        <td class="mt-1 pt-1 badge {{($contacto->estado==0) ? "badge-danger" : "badge-success"}}">{{($contacto->estado==0) ? "Baja" : "Activo"}}</td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('contacto.destroy',$contacto->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="tokenCampaign">    
                                                @can('contactos.edit')
                                                    <a href="{{route('contacto.edit', $contacto) }}" title="Editar contacto"><i class="far fa-edit text-primary fa-2x ml-3"></i></a>
                                                @endcan
                                                @can('contactos.destroy')
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

