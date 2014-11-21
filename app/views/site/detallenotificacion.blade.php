@extends('layouts.home')

@section('titulo')
Detalle
@stop

@section('css')
<?php HTML::style('css/view.css'); ?>
@stop

@section('content')
	<h1>El valor enviado para mostrar detalle es el {{$id}}</h1>

	<div class="container has-success rellenar-header">
         <div class="row">
            <div class="col-xs-12 text-center">
               <h2 class="titulo letra">Notificacion de Reacciones Adversas a Insumos Medicos</h2>
            </div>
         </div>

         <!--************ Datos de Hoja ************ -->
         <div class="row separar">
            <div class="col-xs-1"></div>
            <div class="col-xs-2 text-center">
               <label class="control-label letra datos-size">No. Notificacion</label>
               <input type="text" name="notificacion" id="notificacion" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "numero";?>" />
            </div>
            <div class="col-xs-2 text-center">
               <label class="control-label letra datos-size">Fecha de Notificacion</label>
               <input type="text" name="fechahoja" id="fechahoja" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Fecha";?>" />
            </div>
         </div>
         

         <!--************** etiquetas para mostrar datos ********************************* -->
         <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-3 letra"><h3>1. Datos del Paciente</h3></legend>
            </fieldset>
         </div>
         <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-3 text-center">
               <label class="control-label letra datos-size">No. Expediente</label>
               <input type="text" name="noexpe" id="noexpe" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "No Expediente";?>" />
            </div>
            <div class="col-xs-4 text-center">
               <label class="control-label letra datos-size">Nombre(s) y Apellido(s)</label>
               <input type="text" name="nombrep" id="nombrep" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Nombre del Paciente";?>" />
            </div>
            <div class="col-xs-2 text-center">
               <label class="control-label letra datos-size">Sexo</label>
               <input type="text" name="sexo" id="sexo" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Sexo";?>" />
            </div>
            <div class="col-xs-1 text-center">
               <label class="control-label letra datos-size">Edad</label>
               <input type="text" name="edad" id="edad" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Edad";?>" />
            </div>
         </div>
         <div class="row separar">
            <div class="col-xs-1"></div>
            <div class="col-xs-3 text-center">
               <label class="control-label letra datos-size">Establecimiento de Salud</label>
               <input type="text" name="centrosalud" id="centrosalud" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Establecimiento de Salud";?>" />
            </div>
            <div class="col-xs-4 text-center">
               <label class="control-label letra datos-size">Departamento</label>
               <input type="text" name="departamento" id="departamento" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Departamento";?>" />
            </div>
            <div class="col-xs-2 text-center">
               <label class="control-label letra datos-size">Municipio</label>
               <input type="text" name="Municipio" id="Municipio" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Municipio";?>" />
            </div>
            <div class="col-xs-1 text-center">
               <label class="control-label letra datos-size">Peso (kg)</label>
               <input type="text" name="peso" id="peso" class="form-control letra text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Peso";?>" />
            </div>
         </div>

         <!-- Insumos medicos-->
         <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-3 letra"><h3>2. Insumos Medicos</h3></legend>
            </fieldset>
         </div>
         <div class="row">
            <!-- Tabla -->
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
               <table>
                  <thead>
                     <tr>
                        <th colspan="5" scope="col" class="col-xs-8 text-center fill">
                           <h4 class="letra fill"><strong>Farmaco</strong></h4>
                        </th>
                     </tr>
                     <tr>
                        <th scope="col" class="col-xs-3 text-center"><label class="control-label text-center">Nombre Generico o Comercial</label></th>
                        <th scope="col" class="col-xs-2 text-center"><label class="control-label">No Lote</label></th>
                        <th scope="col" class="col-xs-2 text-center"><label class="control-label">Fabricante</label></th>
                        <th scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Fecha de Vencimiento</label></th>
                     </tr>
                  </thead>

                  <tbody id="m">
                     <?php for ($i=0; $i < 2; $i++) { ?>
                        <tr>
                           <td><div class="alinear"><input type="text" name="nombrecomercial" id="ncomercial" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Nombre Comercial";?>" /> </div></td>

                           <td><div class="alinear"><input type="text" name="lote" id="lote" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "No Lote"; ?>" /></div> </td>

                           <td><div class="alinear"><input type="text" name="fabricante" id="fabricante" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Fabricante";?>" /> </div></td>

                           <td><div class="alinear"><input type="date" name="vence" id="vence" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Fecha";?>" /> </div></td>

                        </tr>
                     <?php }?>                 
                  </tbody>
               </table>    
            </div>
         </div>

         <!-- Tabla de Paciente -->
         <div class="row separar">
            <!-- Tabla -->
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
               <table style="margin-top:10px;">
                  <thead>
                     <tr>
                        <th colspan="7" scope="col" class="col-xs-5 text-center fill">
                              <h4 class="letra fill"><strong>Paciente</strong></h4>
                        </th>
                     </tr>
                     <tr>
                        <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label">Dosis Diaria</label></th>
                        <th rowspan="2" scope="col" class="col-xs-1"><label class="control-label text-center">Unidad de Medida</label></th>
                        <th rowspan="2" scope="col" class="col-xs-1"><label class="control-label text-center">Via Admon.</label></th>
                        <th colspan="2" scope="col" class="col-xs-2 text-center"><label class="control-label">Fecha</label></th>
                        <th rowspan="2" scope="col" class="col-xs-3 text-center"><label class="control-label">Motivo de Prescripcion</label></th>
                     </tr>
                     <tr>
                        <th class="col-xs-1 text-center"><label class="control-label">Comienzo</label></th>
                        <th class="col-xs-1 text-center"><label class="control-label">Fin</label></th>
                     </tr>
                  </thead>
                  <tbody id="p">
                     <?php for ($i=0; $i < 2; $i++) { ?>
                        <tr id="fila_base">
                           <td><div class="alinear"><input type="text" name="dosis" id="dosis" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Dosis";?>" /> </div></td>

                           <td><div class="alinear"><input type="text" name="unidadm" id="unidadm" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Medida";?>" /> </div></td>

                           <td><div class="alinear"><input type="text" name="viadmin" id="viadmin" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Aministracion"; ?>" /> </div></td>
                           <td><div class="alinear"><input type="date" name="fechaii" id="fechaii" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Inicio";?>" /> </div></td>

                           <td><div class="alinear"><input type="date" name="fechafi" id="fechafi" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Fin";?>" ></div> </td>

                           <td><div class="alinear"><textarea class="form-control letra text-center border-tabla cuadrado" name="motivo" id="motivo" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;"><?php echo "Motivo de Preescripcion";?></textarea></div> </td>
                        </tr>
                     <?php } ?>
                                
                  </tbody>
               </table>
            </div>
         </div>    

         <!--*************  Reacciones ********************************************* -->
          <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-3 letra"><h3>3. Reacciones</h3></legend>
            </fieldset>
         </div>

         <div class="row">
            <!-- Tabla -->
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
               <table style="margin-top:10px;">
                  <thead>
                     <tr>
                        <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label">Naturaleza</label></th>
                        <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Localizacion</label></th>
                        <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Intensidad</label></th>
                        <th colspan="2" scope="col" class="col-xs-2 text-center"><label class="control-label">Fecha</label></th>
                        <th rowspan="2" scope="col" class="col-xs-2 text-center"><label class="control-label">Desenlace</label></th>
                                                              
                     </tr>
                     <tr>
                        <th class="col-xs-1 text-center"><label class="control-label">Comienzo</label></th>
                        <th class="col-xs-1 text-center"><label class="control-label">Fin</label></th>
                     </tr>
                  </thead>

                  <tbody id="reaccion">
                     <?php for ($i=0; $i < 2; $i++) { ?>
                        <tr id="fila_base">
                           <td><div class="alinear"><input type="text" name="naturaleza" id="natural"class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Naturaleza";?>"/> </div></td>

                           <td><div class="alinear"><input type="text" name="localizacion" id="localizacion" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Localizacion"; ?>" /> </div></td>

                           <td><div class="alinear"><input type="text" name="intensidad" id="intensidad" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Intensidad";?>" /> </div></td>

                           <td><div class="alinear"><input type="date" name="fechair" id="fechair" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" style="border-color: #EEEEEE;" value="<?php echo "Inicio";?>" /> </div></td>
                           <td><div class="alinear"><input type="date" name="fechafr" id="fechafr"class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Finalizo";?>" /></div> </td>

                           <td><div class="alinear"><input type="date" name="desenlace" id="desenlace" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Desenlace";?>"></div> </td>
                        </tr> 
                     <?php } ?>                         
                 </tbody>
               </table>
            </div>
         </div>
         <div class="row separar">
            <div class="col-xs-1"></div>
            <div class="col-xs-2">
               <label class="control-label">Requirio Ingreso:</label>
            </div>
            <div class="col-xs-1">
               <label class="control-label" style="margin-left:-50px;">Si</label>
               <input type="radio" name="ingreso" id="ingresosi" value="si" />
            </div>
            <div class="col-xs-1">
               <label class="control-label" style="margin-left:-100px;">No</label>
               <input type="radio" name="ingreso" id="ingresono" value="no" checked="checked" />
            </div>
         </div>

         <!--*************  Conmitante ********************************************* -->
         <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-5 letra"><h3>4. Medicamento(s) Conmitante(s)</h3></legend>
            </fieldset>
         </div>
         <!-- Tabla de Paciente -->
         <div class="row">
            <!-- Tabla -->
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
               <table style="margin-top:10px;">
                     <thead>
                        <tr>
                           <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label">Nombre Generico o Comercial</label></th>
                           <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label">Dosis Diaria</label></th>
                           <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Unidad de Medida</label></th>
                           <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Via Admon.</label></th>
                           <th colspan="2" scope="col" class="col-xs-2 text-center"><label class="control-label">Fecha</label></th>
                           <th rowspan="2" scope="col" class="col-xs-3 text-center"><label class="control-label">Motivo de Prescripcion</label></th>
                           
                        </tr>
                        <tr>
                           <th class="col-xs-1 text-center"><label class="control-label">Comienzo</label></th>
                           <th class="col-xs-1 text-center"><label class="control-label">Fin</label></th>
                        </tr>
                     </thead>
                     <tbody id="concomitante">
                        <?php for ($i=0; $i < 2; $i++) { ?>
                           <tr id="fila_base">
                              <td><div class="alinear"><input type="text" name="nombrem" id="nombrem" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Medicamento";?>" /></div></td>
                              <td><div class="alinear"><input type="text" name="cantidad" id="cantidad" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "cantidad";?>" /></div></td>
                              <td><div class="alinear"><input type="text" name="medida" id="medida" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Medida";?>" /></div></td>
                              <td><div class="alinear"><input type="text" name="admon" id="admon" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Administracion";?>" /></div></td>
                              
                              <td><div class="alinear"><input type="date" name="fechaim" id="fechaim" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Inicio";?>"> </div></td>
                              <td><div class="alinear"><input type="date" name="fechafm" id="fechafm" class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" value="<?php echo "Finalizo";?>"></div> </td>
                              <td><div class="alinear"><textarea class="form-control letra text-center border-tabla cuadrado" disabled="disabled" style="border-color: #EEEEEE; background-color: #FFF;" name="motivom" id="motivom" > <?php echo "Motivo de Preescripcion";?></textarea></div> </td>
                                          
                           </tr>  
                        <?php } ?>       
                     </tbody>
                  </table>
               </div>
            </div>

            <!--*************  Conmitante ********************************************* -->
          <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-3 letra"><h3>5. Comorbilidades</h3></legend>
               <legend class="col-xs-4 letra"><h3>6. Antecedentes Familiares</h3></legend>
               <legend class="col-xs-4 letra"><h3>7. Factotores de Riesgo</h3></legend>
            </fieldset>
         </div>
         <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-3">
               <?php for ($i=0; $i < 2; $i++) { ?>
                  <div class="alinear"><input type="text" name="comorbilidad" id="comorbilidad" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Comorbilidades";?>"> </div>
               <?php }?>
            </div>
            <div class="col-xs-3">
               <?php for ($i=0; $i < 2; $i++) { ?>
                  <div class="alinear"><input type="text" name="afamiliar" id="afamiliar" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Antecedentes";?>"> </div>
               <?php }?>
            </div>
            <div class="col-xs-3">
               <?php for ($i=0; $i < 2; $i++) { ?>
                  <div class="alinear"><input type="text" name="friesgo" id="friesgo" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Factores";?>"> </div>
               <?php }?>
            </div>
         </div>

          <!--*************  Conmitante ********************************************* -->
         <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-5 letra"><h3>8. Observaciones Adicionales</h3></legend>
            </fieldset>
         </div>
         <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                  <div class="alinear"><textarea class="form-control text-center cuadrado" style="background-color: #FFF;" name="motivom" id="motivom" disabled="disabled"> <?php echo "Observaciones";?></textarea></div>
            </div>
         </div>

          <!--*************  Conmitante ********************************************* -->
         <div class="row">
            <div class="col-xs-1"></div>
            <fieldset>
               <legend class="col-xs-5 letra"><h3>9. Notificador</h3></legend>
            </fieldset>
         </div>
         <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-4 text-center">
               <label class="control-label letra datos-size">Nombre(s) y Apellido(s)</label>
               <input type="text" name="nombremed" id="nombremed" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Nombre del Medico";?>" />
            </div>
            <div class="col-xs-3 text-center">
               <label class="control-label letra datos-size">Profesion</label>
               <input type="text" name="profesion" id="profesion" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Profesion";?>" />
            </div>
            <div class="col-xs-3 text-center">
               <label class="control-label letra datos-size">Especialidad</label>
               <input type="text" name="especialidad" id="especialidad" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Especialidad";?>" />
            </div>
         </div>
         <div class="row separar">
            <div class="col-xs-1"></div>
            <div class="col-xs-2 text-center">
               <label class="control-label letra datos-size">Telefono(s) de Contacto</label>
               <?php for ($i=0; $i < 2; $i++) { ?>
                  <input type="text" name="formulario" id="formulario" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Telefono";?>" />
               <?php }?>
            </div>
            <div class="col-xs-5 text-center">
               <label class="control-label letra datos-size">Correo Electronico</label>
               <input type="text" name="correo" id="correo" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Correo Electronico";?>" />
            </div>
            <div class="col-xs-2 text-center">
               <label class="control-label letra datos-size">Requiere Formulario</label>
               <input type="text" name="formulario" id="formulario" class="form-control text-center cuadrado" style="background-color: #FFF;" disabled="disabled" value="<?php echo "Formulario";?>" />
            </div>
         </div>

         <div class="row separar">
            <div class="col-xs-12"></div>
         </div>

      </div><!-- fin del contenedor ********************************************** -->
@stop
