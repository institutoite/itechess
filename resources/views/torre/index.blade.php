@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="text-center">LA PIEZA PEÓN</div>
    <table class="table table-bordered table-striped table-hover">
        / 
        <tbody>
            <tr>
                <td>1</td>
                <td>Primer Movimiento</td>
                <td>Su movimiento inicial es de una o dos casillas hacia adelante</td>
                <td> <img src="" alt=""> </td>
            </tr>
        </tbody>
    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop