@extends('adminlte::page')

@section('title', 'Departamento')

@section('content_header')
<h1>Visto bueno Quien Solicita OP</h1>

@stop

@section('content')
    <div class="row">

        <h4><b>Empresa</b></h4>
    </div>

    <div class="form-group">

        <select name="" id="" class="form-control custom-select">
            <option value="">-- Todas --</option>
        </select>

    </div>




<br>
<div class="card">
    <div class="card-header">
        {{--  Lista de radios  --}}
        <div class="form-group">

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
            </div>

        </div>


    </div>
    <!-- /.card-header -->

    <div class="card-header">
        {{-- Segunda Lista de radios  --}}
        <div class="form-group">            

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio2" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio2" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio2" checked="">
                    <label class="form-check-label">Radio checked</label>
                </div>
            </div>           

        </div>


    </div>
    <!-- /.card-header -->

    <div class="card-header">
        {{-- Buscadores  --}}
        <h5><b>Texto para buscar:</b></h5>
        <input type="text" name="" id="">

        <h5><b>Nº OP</b></h5>
        <input type="text" name="" id="">

        <br><br>

        <button type="button" class="btn btn-block btn-primary">Buscar</button>

    </div>
    <!-- /.card-header -->
    <div class="card">

        <div class="card-success">
            <div class="card-header table-responsive p-0">
                <table class="table table-fixed text-nowrap" id="tabla1">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Numero OP</th>
                            <th>Nombre algo</th>
                            <th>Numero OP</th>
                            <th>asdasd</th>
                            <th>hgjghj</th>
                            <th>hjkhjk</th>
                            <th>werwerwer</th>                            
                        </tr>
                    </thead>
                </table>
            </div>            
        </div>
        
        <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-fixed text-nowrap" id="tabla1">
                <tbody>
                    {{--  cosas dentro de la lista  --}}

                </tbody>
            </table>
        </div>        
    </div>
    <!-- /.card-header -->

    <button type="button" class="btn btn-block btn-success">Success</button>
    <button type="button" class="btn btn-block btn-danger">Danger</button>

</div>

@stop

@section('footer')

<footer class="blockquote-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div>
    <strong>Copyright © 2014-2021 <a href="https://adminlte.io/%22%3EAdminLTE.io</a>.</strong> All rights reserved".
  </footer>



@stop

@section('css')
<style> <?php include public_path('adminlte.css'); ?> </style>     

@stop           

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
