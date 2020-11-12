@extends('layouts.programinlive')

@section('title','Programin-Editar Facturacion')
@section('titlePag','Editar Facturacion')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag')</p>
    @include('facturacion.navbar')
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
                    <div class="card-body">
                        <div class="row">
                                @livewire('facturacion-create',['facturacion'=>$facturacion])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
<script>

</script>
@endpush

