@extends('layouts.programin')

@section('title','Programin-Contactos')
@section('titlePag','Contactos')
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
                    {{-- mensajes de exito o error --}}
                    @include('layouts.partials.mensajes')
                    {{-- fin mensajes de exito o error --}}

                    <!-- card-body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10 row">
                                {{ $contactos->appends(request()->except('page'))->links() }} &nbsp; &nbsp;
                                <span class="badge text-primary"> Pág {{$contactos->currentPage()}} de {{$contactos->lastPage()}} </span>
                            </div>
                            {{-- <div class="card-tools col-auto"> --}}
                            <div class="col-2 mb-2">
                                <form method="GET" action="{{route('contacto.index') }}">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="busca" class="form-control float-right" value='{{$busqueda}}' placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table table-hover table-sm small">
                                <thead>
                                <tr>
                                    <th width=10px>#</th>
                                    <th>Contacto</th>
                                    <th>Cargo</th>
                                    <th>Departamento</th>
                                    <th>Nif</th>
                                    <th>Tfno</th>
                                    <th>Móvil</th>
                                    <th>Email</th>
                                    <th>Email 2</th>
                                    <th>Direccion</th>
                                    <th>Codigo Postal</th>
                                    <th>Población</th>
                                    <th width=100px></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($contactos as $contacto)
                                    <tr>
                                        <td class="badge badge-default">{{$contacto->id}}</a></td>
                                        <td>{{$contacto->nombre_completo}}</td>
                                        <td>{{$contacto->cargo}}</td>
                                        <td>{{$contacto->departamento}}</td>
                                        <td>{{$contacto->nif}}</td>
                                        <td>{{$contacto->tfno}}</td>
                                        <td>{{$contacto->movil}}</td>
                                        <td>{{$contacto->email}}</td>
                                        <td>{{$contacto->email2}}</td>
                                        <td>{{$contacto->direccion}}</td>
                                        <td>{{$contacto->cp}}</td>
                                        <td>{{$contacto->poblacion}}</td>
                                        <td  class="text-right m-0 p-0">
                                            <form  action="{{route('contacto.destroy',$contacto->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_tokenCampaign" value="{{ csrf_token()}}" id="tokenCampaign">    
                                                @can('contacto.edit')
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
    </script>
@endpush

