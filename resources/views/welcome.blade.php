@extends('adminlte::page')

@section('title', 'Entrada de bodega')

@section('content_header')
<h1>Visto bueno Quien Solicita OP</h1>

@stop

@section('content')
    <div class="row">

        <h3><b>Empresa</b></h3>
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

    

</div>

@stop

@section('footer')

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div>
    <strong>Copyright © 2014-2021 <a href="https://adminlte.io/%22%3EAdminLTE.io</a>.</strong> All rights reserved".
  </footer>



@stop

@section('css')
<link rel=" stylesheet" href="/css/admin_custom.css">
            @stop

            @section('js')

            @stop
