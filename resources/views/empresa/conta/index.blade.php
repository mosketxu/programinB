@extends('layouts.programin')

@section('title','Programin-Go')
@section('titlePag','Go')
@section('navbar')
@include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}}-{{$empresa->nif}}</p>
@include('empresa.conta.navbar')
@include('layouts.partials.navbarderecha')

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
        </div>
        {{-- main content  --}}
        <section class="content">
            <div class="container-fluid">
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
    <script>
    </script>
@endpush

