@extends('layouts.programinlive')

@section('title','Programin-Facturacion')
@section('titlePag','Facturacion')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') </p>
    @can('facturaciones.create')
    &nbsp;&nbsp; <a href="{{route('facturacion.create')}}"><i class="fas fa-plus-circle fa-2x text-primary mt-2"></i></a>
    @endcan
    @include('facturacion.navbar')
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
                @livewire('facturaciones')
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
<script>

</script>
@endpush
