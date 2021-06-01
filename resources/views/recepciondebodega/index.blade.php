@extends('adminlte::page')

@section('title', 'Departamento')

@section('content_header')
<h1>Recepcion de bodega OP</h1>

@stop

@section('content')   
    
     
    {{--  <div class="card">   
        <h4><b>Proveedores</b></h4>   
    
        <div class="form-check-inline ">
            <div class="form-group col-4">
                <select name="" id="" class="form-control custom-select">
                    
                    <option value="">--Selecione un proveedor --</option>
                    @foreach ($lista_final as $p)            
                    <option value="{{$p['codigo']}}">{{$p['descripcion']}}</option>
                    @endforeach           
                    
                </select>     
            </div>  
        </div>
    </div>  --}}



    <div class="card">
        <div class="form-group">              
            
            <h4><b>Empresa</b></h4>
        
            <div class="form-group col-4">
                <select name="" id="empresa" class="form-control custom-select">                    
                    <option value="">-- Todas --</option>        
                    
                    @foreach($empresas as $emp)
                    <option value="{{$emp->emp_id}}">{{$emp->emp_descripcion}}</option>
                    @endforeach
                    
                </select>     
            </div>  


            <h4><b>Unidad de negocio</b></h4>
        
            <div class="form-group col-4">
                <select name="" id="unidadN" class="form-control custom-select">                    
                    <option value="">-- Todas --</option>                              
                    
                </select>     
            </div>  
        
            <div class="form-check-inline col-lg-6">   
                
                <div class="form-group">
                    <div class="form-check">
                        <h4><b>Recursos</b></h4>
                        <select name="" id="recurso" class="form-control custom-select">                    
                            <option value="">-- Todas --</option>                              
                            
                        </select> 
                    </div>
                    <div class="form-check">
                        <h4><b>Unidad de medida</b></h4>
                        <select name="" id="unidadM" class="form-control custom-select">                    
                            <option value="">-- Todas --</option>                              
                            
                        </select>   
                    </div>                    
                </div>
                
                <div class="form-group" style="padding-bottom: 60px">
                    <div class="form-check ">
                        <h4><b>Centro de costos</b></h4>
                        <select name="" id="centroC" class="form-control custom-select">                    
                            <option value="">-- Todas --</option>                              
                            lista_finalv2
                        </select> 
                    </div>
                           
                    <div class="form-check">
                        <div class="card"></div> 
                    </div>          
                </div>
            </div>

        </div>    
        
    </div>



<div class="card">
    <div class="card-header">
        {{--  Lista de radios  --}}
       <center>
        
            
            <div class="form-check-inline col-2">
                
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                </div>
            </div> 

            <div class="form-check-inline col-2">   
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                </div>
            </div>

            <div class="form-check-inline col-2">    
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                </div>
            </div>

            <div class="form-check-inline col-2">    
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked="">
                        <label class="form-check-label">Test</label>
                    </div>
                </div>
            </div>

        
    </center>

    </div>
    <!-- /.card-header -->

    <div class="card-header">
        {{-- Segunda Lista de radios  --}}
                 
        <center>

            <div class="form-group">
                <div class="form-check-inline col-2">
                    <input class="form-check-input" type="radio" name="radio2" checked="">
                    <label class="form-check-label">Test</label>
                </div>
                <div class="form-check-inline col-2">
                    <input class="form-check-input" type="radio" name="radio2" checked="">
                    <label class="form-check-label">Test</label>
                </div>
                <div class="form-check-inline col-2">
                    <input class="form-check-input" type="radio" name="radio2" checked="">
                    <label class="form-check-label">Test</label>
                </div>
            </div>           

        </center>


    </div>
    <!-- /.card-header -->

    <div class="card">
        {{-- Buscadores  --}}
        <br>
        
        <div class="form-row">
            <div class="col-1"></div>
            <div class="col-md-4 mb-3">
              <h5><b>Texto para buscar:</b></h5>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4 mb-3">
              <h5><b>Nº OP:</b></h5>
              <input type="text" class="form-control" id="">
            </div>            
        </div>
             
        <center>   
            <div>
                <div class="form-check-inline col-4">                        
                    
                        <div class="form-check col-6">
                            <button type="button" class="btn btn-block btn-primary">Buscar</button>
                        </div>            
                    
                </div>     
                 
            </div>
        </center>

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
                            <th>Nombre</th>
                            <th>Numero</th>
                            <th>Test</th>
                            <th>Test</th>
                            <th>Test</th>
                            <th>Test</th>                            
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
    <center>   
        <div>
            <div class="form-check-inline col-4">                        
                
                    <div class="form-check col-6">
                        <button type="button" class="btn btn-block btn-success">Aceptar</button>
                    </div>            
                
            </div> 

            <div class="form-check-inline col-4">   
                
                    <div class="form-check col-6">
                        <button type="button" class="btn btn-block btn-danger" onclick="return confirm('¿Esta seguro?');">Eliminar</button>
                    </div>           
                
            </div>    
        </div>
    </center>
    
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
    $(document).ready(function(){

        $('#empresa').on('change',function(){
            var empresa_id = $(this).val();
            if ($.trim(empresa_id) != ''){

                

                $.get('unidadN',{empresa_id: empresa_id},function(unidadN){
                    $('#unidadN').empty();
                    $('#unidadN').append("<option value=''>-- Todas --</option>");                    
                    for(var x of unidadN){                        
                        $('#unidadN').append("<option value='"+ x.unn_id +"'>"+ x.unn_descripcion +"</option>");
                    }                   
                });
            }
        });

        $('#unidadN').on('change',function(){
            var unidadN_id = $(this).val();
            if ($.trim(unidadN_id) != ''){
                $.get('centroC',{unidadN_id: unidadN_id},function(centroC){
                    $('#centroC').empty();
                    $('#centroC').append("<option value=''>-- Todas --</option>");
                    for(var x of centroC){                        
                        $('#centroC').append("<option value='"+ x.ceg_id +"'>"+ x.ceg_titulo +"</option>");
                    }   
                });

                $.get('recurso',{unidadN_id: unidadN_id},function(recurso){
                    $('#recurso').empty();
                    $('#recurso').append("<option value=''>-- Todas --</option>");
                    for(var x of recurso){     
                        console.log(x);                                         
                        $('#recurso').append("<option value='"+ x.rec_id +"'>"+ x.rec_descripcion +"</option>");
                    }   
                });
            }
        });
       

    });

</script>
@stop
 