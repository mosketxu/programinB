@extends('layouts.programin')

@section('title','Programin-Prov-Cli')
@section('titlePag','Proveedores-Clientes')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') </p>
    @can('empresas.create')
    &nbsp;&nbsp; <a href="{{route('empresa.create')}}"><i class="fas fa-plus-circle fa-2x text-primary mt-2"></i></a>
    @endcan
    @include('empresa.navbar')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
            {{-- <div class="container-fluid">
            </div> --}}
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
                                {{ $provclis->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$provclis->currentPage()}} de {{$provclis->lastPage()}} </span>
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
                                    <th>Prov-Cli</th>
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
                                    @foreach($provclis as $provcli)
                                    <tr>
                                        <td class="badge badge-default">{{$provcli->id}}</a></td>
                                        <td>{{$provcli->nombre}}</td>
                                        <td>{{$provcli->nif}}</td>
                                        <td>{{$provcli->codpostal}}</td>
                                        <td>{{$provcli->provincia_id}}</td>
                                        <td>{{$provcli->pais_id}}</td>
                                        <td>{{$provcli->tfno}}</td>
                                        <td>{{$provcli->email}}</td>
                                        <td>{{$provcli->banco1}}</td>
                                        <td>{{$provcli->iban1}}</td>
                                        <td>{{$provcli->banco2}}</td>
                                        <td>{{$provcli->iban2}}</td>
                                        <td>{{$provcli->observaciones}}</td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('provcli.destroy',$provcli->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="token">    
                                                    <a href="{{route('provcli.edit', $provcli) }}" title="Editar prov-cli"><i class="far fa-edit text-primary fa-2x ml-3"></i></a>
                                                    <button type="submit" class="enlace"><i class="far fa-trash-alt text-danger fa-2x ml-1"></i></button>
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

