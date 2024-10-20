@extends('adminlte::page')

@section('title', 'Casa Blanca')

@section('content_header')
    <h1>PROYECTO GESTION DE PENSIONISTAS</h1>
@stop

@section('content')
    <p>Bienvenidos a restaurante Casa Blanca.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/custom.css"> 
    {{-- <link rel="icon" href="{{ asset('logoo.ico') }}?v=2" type="image/x-icon"> --}}

@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop