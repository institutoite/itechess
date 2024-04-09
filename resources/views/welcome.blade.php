@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>itechess</h1>
@stop

@section('content')
<div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chess-pawn"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">
                    Peón
                </span>
                <span class="info-box-number">1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa-solid fa-chess-rook"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Torre Madera</span>
                <span class="info-box-number">Bs. 50</span>
                <button class="btn btn-success">Comprar</button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Caballo</span>
                <span class="info-box-number">Bs. 80</span>
                <button class="btn btn-success">Comprar</button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Alfil</span>-x-number">Bs. 850</span>
                <a href=""><button class="btn btn-success">Comprar</button></a>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop