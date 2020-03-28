@extends('layouts.programin')

@section('title','Programin-Empresas')
@section('titlePag','Empresas')
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
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Listado de empresas</h3>
                        <div class="card-tools">
                            <form method="GET" action="{{route('empresa.index') }}">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="busca" class="form-control float-right" value='{{$busqueda}}' placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-sm small text-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Empresa</th>
                                <th>Nif</th>
                                <th>Provincia</th>
                                <th>Estado</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($empresas as $empresa)
                                <tr>
                                    <td>{{$empresa->id}}</td>
                                    <td>{{$empresa->alias}}</td>
                                    <td>{{$empresa->name}}</td>
                                    <td>{{$empresa->nif}}</td>
                                    <td>{{$empresa->provincia_id}}</td>
                                    <td>{{$empresa->estado}}</td>
                                    <td  class="text-right m-0 p-0">
                                        <form  action="{{route('empresa.destroy',$empresa->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="tokenCampaign">    
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
    </script>
@endpush

