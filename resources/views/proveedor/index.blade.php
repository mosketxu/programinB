@extends('layouts.programin')

@section('title','Programin-Proveedores')
@section('titlePag','Proveedores')
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
                        @can('proveedores.create')
                        <a href="{{route('proveedor.create')}}"><i class="fas fa-plus-circle fa-2x text-primary mt-2"></i></a>
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
                                {{ $proveedores->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$proveedores->currentPage()}} de {{$proveedores->lastPage()}} </span>
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
                                    <th>Proveedor</th>
                                    <th>Nif</th>
                                    <th>Cod.Postal</th>
                                    <th>Localidad</th>
                                    <th>Provincia</th>
                                    <th>Pais</th>
                                    <th>Tfno</th>
                                    <th>Email</th>
                                    <th>Banco 1</th>
                                    <th>Iban1</th>
                                    <th>Banco 2</th>
                                    <th>Iban 2</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($proveedores as $proveedor)
                                    <tr>
                                        <td class="badge badge-default">{{$proveedor->id}}</a></td>
                                        <td>{{$proveedor->proveedor}}</td>
                                        <td>{{$proveedor->nif}}</td>
                                        <td>{{$proveedor->codpostal}}</td>
                                        <td>{{$proveedor->provincia_id}}</td>
                                        <td>{{$proveedor->pais_id}}</td>
                                        <td>{{$proveedor->tfno}}</td>
                                        <td>{{$proveedor->email}}</td>
                                        <td>{{$proveedor->banco1}}</td>
                                        <td>{{$proveedor->iban1}}</td>
                                        <td>{{$proveedor->banco2}}</td>
                                        <td>{{$proveedor->iban2}}</td>
                                        <td>{{$proveedor->observaciones}}</td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('proveedor.destroy',$proveedor->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="token">    
                                                @can('proveedores.edit')
                                                    <a href="{{route('proveedor.edit', $proveedor) }}" title="Editar proveedor"><i class="far fa-edit text-primary fa-2x ml-3"></i></a>
                                                @endcan
                                                @can('proveedores.destroy')
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

    </script>
@endpush

