@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="text-center">LA PIEZA PEÓN</div>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>#</th>
            <th>ITEM</th>
            <th>DESCRIPCION</th>
            <th>GRAFICO</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Primer Movimiento</td>
                <td>Su movimiento inicial es de una o dos casillas hacia adelante</td>
                <td> <img src="" alt=""> </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Movimineto standar</td>
                <td>Después del primer movimiento, se mueve una casilla hacia adelante</td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ocurrencia</td>
                <td>El peón es la pieza más numerosa en el ajedrez, con ocho en el inicio de cada lado.</td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Captura</td>
                <td>El peón captura en diagonal, avanzando una casilla en diagonal para capturar una pieza enemiga.</td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Promoción</td>
                <td>Cuando un peón alcanza la última fila del tablero, puede promocionarse a cualquier otra pieza excepto el rey.</td>
                <td></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Passant</td>
                <td>El peón también puede realizar el en passant, capturando un peón que avanza dos casillas desde su posición inicial.</td>
                <td></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Bloqueo</td>
                <td>Los peones pueden bloquear el avance de las piezas enemigas y controlar el centro del tablero</td>
                <td></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Peón Pasado</td>
                <td>Un peón pasado, no obstaculizado por otros peones enemigos, puede ser una poderosa arma en el final del juego.</td>
                <td></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Como escudo</td>
                <td>Los peones son fundamentales en la defensa de la estructura del rey y pueden ser utilizados para crear un escudo protector.</td>
                <td></td>
            </tr>
            <tr>
                <td>10</td>
                <td>Al final del Juego</td>
                <td>En el final del juego, los peones se vuelven especialmente importantes, ya que pueden convertirse en piezas más poderosas a través de la promoción.</td>
                <td></td>
            </tr>
            <tr>
                <td>11</td>
                <td>Como escudo</td>
                <td>Los peones son fundamentales en la defensa de la estructura del rey y pueden ser utilizados para crear un escudo protector.</td>
                <td></td>
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