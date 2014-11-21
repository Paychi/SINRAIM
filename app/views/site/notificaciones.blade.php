@extends('layouts.home')

@section('titulo')
Notificaciones
@stop

@section('css')
<?php HTML::style('css/app.css'); ?>
@stop

@section('content')
	<div class="container rellenar-header">
         <div class="row">
            <div class="col-xs-12 text-center">
               <h2 class="titulo letra">Lista de Notificaciones</h2>
            </div>
         </div>

         
         <div class="row">
            <!-- Tabla -->
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
               <table class="table-hover">
                  <thead>
                     <tr>
                        <th scope="col" class="col-xs-1 text-center"><label class="control-label text-center">ID</label></th>
                        <th scope="col" class="col-xs-2 text-center"><label class="control-label">Fecha</label></th>
                        <th scope="col" class="col-xs-2 text-center"><label class="control-label">Notificador</label></th>
                        
                     </tr>
                  </thead>

                  <tbody id="m">
					  
					  @foreach($datos as $dato)
                     
                        
                           <tr>
                              <td bgcolor="#FFF" style="border:1px solid #DADFE1;"><a href="detalle/{{$dato}}"><div class=" alinear text-center" ><label class="control-label text-center texto dato"> {{$dato}}</label></div></a></td>

                              <td><div class="alinear"><input type="text" name="fecha" id="fecha" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "28//11/92"; ?>" /></div> </td>

                              <td><div class="alinear"><input type="text" name="Notificador" id="Notificador" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "santiago";?>" /> </div></td>

                           </tr>
                        
                       
                     @endforeach     
                  </tbody>
               </table>    
            </div>
         </div>

       
      </div><!-- fin del contenedor ********************************************** -->
@stop

