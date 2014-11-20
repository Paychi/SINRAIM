@extends('layouts.home')

@section('titulo')
Formulario
@stop

@section('css')
<?php echo HTML::style('css/texto.css'); ?>
<?php echo HTML::style('css/estilosFormulario.css'); ?>
@stop

@section('javascript')
<?php echo HTML::script('js/agregarfila.js'); ?>
<?php echo HTML::script('js/jquery-1.9.1.min.js'); ?>
<?php echo HTML::script('js/jquery.easing.min.js'); ?>
<?php echo HTML::script('js/scriptFormulario.js'); ?>
@stop

@section('content')
		
	<div class ="container">
			
			@if(Session::has('mensaje'))
				<h2> {{Session::get('mensaje')}} </h2>
			@endif
			
			<div class ="row container">
				{{ Form::open(array('url' => '/notificar','method'=>'post','id'=>'msform')) }}
					<ul id="progressbar">
						<li class="active">Datos Personales</li>
						<li>Insumos M&eacute;dicos</li>
						<li>Reacciones</li>
						<li>Medicamento Concomitente</li>
						<li>Antecedentes</li>
						<li>Observaciones</li>
						<li>Notificador</li>
					</ul>
					<fieldset>
						<h2 class="fs-title">DATOS PERSONALES</h2>
						<div class="row">				
							<label class="centrado control-label col-md-5">No. Expediente</label>					
							<div class="col-md-3"> 
								<!--<input class="form-control" type="text" id="expediente"/>-->
								{{ Form::text('expediente',null, array('class' => 'form-control') ) }}
								{{$errors->first("expediente")}}
							</div>
						</div> 			

						<div class = "row">		
							<label class="centrado control-label col-md-5">Nombre del Paciente</label>					
							<div class="col-md-5">								
								{{ Form::text('nombre',null, array('class' => 'form-control') ) }}
								{{$errors->first("nombre")}}
							</div>
						</div>
						
						<div class = "row">						
							<label class="centrado control-label col-md-5">Departamento/Municipio</label>					
							<div class="col-md-5">
								<!--<select class="form-control">
									  <option>Diriamba, Carazo</option>
									  <option>Managua</option>
								</select>-->
								{{Form::select('departamento', array('1' => 'Diriamba, Carazo', '2' => 'Managua'), null, array('class' => 'form-control'))}}
							</div>											
						</div>
						
						<div class = "row margenformulario">							
							<label class="centrado control-label col-md-5">Establecimiento de Salud</label>					
							<div class="col-md-5">
								<!--<select class="form-control">
									  <option>Centro de Salud de Diriamba</option>
									  <option>Centro de Salud del Distrito III</option>
								</select>-->
								{{Form::select('centro_salud', array('1' => 'Centro de Salud de Diriamba', '2' => 'Centro de Salud del Distrito III'), null, array('class' => 'form-control'))}}
							</div>									
						</div>
						
						<div class = "row margenformulario">						
							<label class="centrado control-label col-md-5">Edad</label>					
							<div class="col-md-2">
								{{ Form::text('edad',null, array('class' => 'form-control') ) }}
							</div>												
						</div>	
						
						<div class = "row">							
							<label class="centrado control-label col-md-5">Sexo</label>
							<div class ="col-md-3">
								<!--<select class="form-control">
									  <option>Hombre</option>
									  <option>Mujer</option>
								</select>					-->		
								{{Form::select('genero', array('1' => 'Hombre', '2' => 'Mujer'), null, array('class' => 'form-control'))}}
							</div>	
						</div>	
						
						<div class = "row margenformulario">							
							<label class="centrado control-label col-md-5">Peso (Kg)</label>					
							<div class="col-md-2">
								{{ Form::text('peso',null, array('class' => 'form-control') ) }}
							</div>									
						</div>
					
						<input type="button" name="next" class="next action-button" value="Siguiente" />
					
					</fieldset>
					<fieldset>
						<h2 class="fs-title">INSUMO (S) MÉDICO (S)</h2>
						
						<div class = "row margenformulario">
							<div class="agregar col-xs-1">
								<div class="agregar2" style="margin: -7px 0px 0px -8px;">
									<label class="control-label">
										<a id="agregarinsumo" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">+</a>
									</label>
								</div>
							</div>
						</div>
						
						<div class = "row margenformulario">		
							<div class="col-xs-10">
							   <section>
								  <table class="table-hover">
									  <thead>
										<tr>
										   <th colspan="5" scope="col" class="col-xs-8 text-center" bgcolor="#87D37C">
											   <h4 style="color:#FFF">Farmaco</h4>
										   </th>
										</tr>
										<tr>
										   <th scope="col" class="col-xs-3">
											   <label class="control-label text-center">Nombre Generico o Comercial</label>
										   </th>
										   <th scope="col" class="col-xs-2 text-center">
											   <label class="control-label">No Lote</label>
										   </th>
										   <th scope="col" class="col-xs-2 text-center">
											   <label class="control-label">Fabricante</label>
										   </th>
										   <th scope="col" class="col-xs-1 text-center">
											   <label class="control-label text-center">Fecha de Vencimiento</label>
										   </th>

										   <th scope="col" class="col-xs-1 text-center">
											   <label class="control-label text-center">Eliminar</label>
										   </th>
										</tr>
									  </thead>

									  <tbody id="m">
										<tr>
										   <td>
											   <div class="alinear">
												   <input type="text" name="nombrecomercial[]" id="ncomercial_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Nombre de Insumo"/>
												</div>
											</td>

										   <td>
											   <div class="alinear">
												   <input type="text" name="lote[]" id="lote_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="No Lote"/>
											   </div> 
										   </td>

										   <td>
											   <div class="alinear">
												   <input type="text" name="fabricante[]" id="fabricante_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Fabricante"/> 
											   </div>
										   </td>

										   <td>
											   <div class="alinear">
												   <input type="date" name="vence[]" id="vence_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Fecha"/>
												</div>
											</td>

										   <td scope="col">
											   <label class="control-label" style="margin-left:25px;">--------</label>
										   </td>
										</tr>
										  
									  </tbody>
									 </table>
								  </section>
							   </div>                        
						</div>
						
						<div class="row margenformulario">
							<div class="col-xs-10">
							   <section>
								  <table class="table-hover" style="margin-top:10px;">
									  <thead>
										<tr>
										   <th colspan="7" scope="col" class="col-xs-5 text-center" bgcolor="#66CC99">
											   <h4 style="color:#FFF;">Paciente</h4>
										   </th>
										</tr>
										<tr>
										   <th rowspan="2" scope="col" class="col-xs-1 text-center">
											   <label class="control-label">Dosis Diaria</label>
										   </th>
										   <th rowspan="2" scope="col" class="col-xs-1">
											   <label class="control-label text-center">Unidad de Medida</label>
										   </th>
										   <th rowspan="2" scope="col" class="col-xs-1">
											   <label class="control-label text-center">Via Admon.</label>
										   </th>
										   <th colspan="2" scope="col" class="col-xs-2 text-center">
											   <label class="control-label">Fecha</label>
										   </th>
										   <th rowspan="2" scope="col" class="col-xs-3 text-center">
											   <label class="control-label">Motivo de Prescripcion</label>
										   </th>
										</tr>
										<tr>
										   <th class="col-xs-1 text-center">
											   <label class="control-label">Comienzo</label>
										   </th>
										   <th class="col-xs-1 text-center">
											   <label class="control-label">Fin</label>
										   </th>
										</tr>
									  </thead>

									  <tbody id="p">
										<tr id="fila_base">

										   <td>
											   <div class="alinear">
												   <input type="text" name="dosis[]" id="dosis_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Cantidad"/> 
											   </div>
										   </td>

										   <td>
											   <div class="alinear">
												   <select name="unidad[]" id="unidad_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;">
													  <option value="0">None</option>
													  <option value="1">Cucharadas</option>
													  <option value="2">Capsulas</option>
													  <option value="3">CC</option>
													  <option value="4">Supositorio</option>
													</select>
												</div> 
											</td>

										   <td>
											   <div class="alinear">
												   <select name="viadmo[]" id="viadmo_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;">
													  <option value="0">None</option>
													  <option value="1">Oral</option>
													  <option value="2">Anal</option>
													  <option value="3">Inyeccio</option>
												   </select>
											   </div> 
										   </td>

										   <td>
											   <div class="alinear">
												   <input type="date" name="fechai[]" id="fechai_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Inicio"/> 
											   </div>
										   </td>

										   <td>
											   <div class="alinear">
												   <input type="date" name="fechaf[]" id="fechaf_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Finalizo"/>
											   </div> 
										   </td>

										   <td>
											   <div class="alinear">
												   <textarea class="form-control" name="motivo[]" id="motivo_1" style="margin-bottom:2px; border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Breve descripcion del motivo de medicacion"></textarea>
											   </div> 
										   </td>
										</tr>
										  
									  </tbody>
								  </table>
							   </section>
						   </div>				 
						</div>
						
					
						<input type="button" name="previous" class="previous action-button" value="Atr&aacute;s" />
						<input type="button" name="next" class="next action-button" value="Siguiente" />
					</fieldset>
					<fieldset>
						<h2 class="fs-title">REACCIONES</h2>
						
						<div class = "row margenformulario">
							<div class="agregar col-xs-1" title="Agregar Reaccion">
								<div class="agregar2" style="margin: -7px 0px 0px -8px;">
									<label class="control-label">
										<a id="agregarreaccion" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">+</a>
									</label>
								</div>
							</div>
						</div>
						
						<div class = "row margenformulario">		
							<div class="col-xs-10">
								<section>
									  <table class="table-hover" style="margin-top:10px;">
										  <thead>
											<tr>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label">Naturaleza</label></th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Localizacion</label></th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label text-center">Intensidad</label></th>
											   <th colspan="2" scope="col" class="col-xs-2 text-center"><label class="control-label">Fecha</label></th>
											   <th rowspan="2" scope="col" class="col-xs-2 text-center"><label class="control-label">Desenlace</label></th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center"><label class="control-label">Eliminar</label></th>
											   
											</tr>
											<tr>
											   <th class="col-xs-1 text-center"><label class="control-label">Comienzo</label></th>
											   <th class="col-xs-1 text-center"><label class="control-label">Fin</label></th>
											</tr>
										  </thead>

										  <tbody id="reaccion">
											<tr id="fila_base">

											   <td><div class="alinear"><input type="text" name="naturaleza[]" id="natural_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Naturaleza"> </div></td>
											   <td><div class="alinear"><input type="text" name="localizacion[]" id="punto_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Localizacion"> </div></td>
											   <td><div class="alinear"><input type="text" name="intensidad[]" id="intensidad_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Intensidad"> </div></td>
											   <td><div class="alinear"><input type="date" name="fechair[]" id="fechair_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Inicio"> </div></td>

											   <td><div class="alinear"><input type="date" name="fechafr[]" id="fechafr_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Finalizo"></div> </td>


											   <td><div class="alinear"><select name="desenlace[]" id="desenlace_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;">
												  <option value="0">None</option>
												  <option value="1">Recuperado</option>
												  <option value="2">Secuela</option>
												  <option value="3">Mortal</option>
												  <option value="4">otro</option>
											   </select></div> </td>
											   <td scope="col"> <label class="control-label" style="margin-left:25px;">--------</label></td>
											   
											</tr>
											  
										  </tbody>
									  </table>
								</section>                           
							</div> 
						</div>
				
						<div class="row margenformulario">

						   <div class="col-xs-4" style="margin-top:10px;">
								  <label class="control-label">Requirio Ingreso:</label>
						   </div>
						   <div class="col-xs-2" style="margin-top:10px;">
								  <label class="control-label" style="margin-left:-50px;">Si</label>
								  <input type="radio" name="ingreso" id="ingresosi" value="si" >
						   </div>
						   <div class="col-xs-2" style="margin-top:10px;">
								  <label class="control-label" style="margin-left:-100px;">No</label>
								  <input type="radio" name="ingreso" id="ingresono" value="no" checked="checked" >
						   </div>
						</div>
						
						<input type="button" name="previous" class="previous action-button" value="Atr&aacute;s" />
						<input type="button" name="next" class="next action-button" value="Siguiente" />
					</fieldset>
					
					<fieldset>
						<h2 class="fs-title">MEDICAMENTO (S) CONCOMITANTE (S)</h2>
						<div class = "row margenformulario">
							<div class="agregar col-xs-1" title="Agregar Concomitante">
								<div class="agregar2" style="margin: -7px 0px 0px -8px;">
									<label class="control-label">
										<a id="agregarconcomitante" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">+</a>
									</label>
								</div>
							</div>
						</div>
						
						<div class = "row margenformulario">	
							<div class="col-xs-10">
							   <section>
								  <table class="table-hover" style="margin-top:10px;">
									  <thead>
											<tr>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center">
												   <label class="control-label">Nombre Generico o Comercial</label>
											   </th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center">
												   <label class="control-label">Dosis Diaria</label>
											   </th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center">
												   <label class="control-label text-center">Unidad de Medida</label>
											   </th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center">
												   <label class="control-label text-center">Via Admon.</label>
											   </th>
											   <th colspan="2" scope="col" class="col-xs-2 text-center">
												   <label class="control-label">Fecha</label>
											   </th>
											   <th rowspan="2" scope="col" class="col-xs-3 text-center">
												   <label class="control-label">Motivo de Prescripcion</label>
											   </th>
											   <th rowspan="2" scope="col" class="col-xs-1 text-center">
												   <label class="control-label text-center">Eliminar</label>
											   </th>
											</tr>
											<tr>
											   <th class="col-xs-1 text-center">
												   <label class="control-label">Comienzo</label>
											   </th>
											   <th class="col-xs-1 text-center">
												   <label class="control-label">Fin</label>
											   </th>
											</tr>
									  </thead>

									  <tbody id="concomitante">
											<tr id="fila_base">
											   <td>
												   <div class="alinear">
													   <input type="text" name="nombrem[]" id="nombrem_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Nombre"> 
												   </div>
											   </td>
											   <td>
												   <div class="alinear">
													   <input type="text" name="dosis[]" id="dosis_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Cantidad"> 
												   </div>
											   </td>
											   <td>
												   <div class="alinear">
													   <select name="unidad[]" id="unidad_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;">
														  <option value="0">None</option>
														  <option value="1">Cucharadas</option>
														  <option value="2">Capsulas</option>
														  <option value="3">CC</option>
														  <option value="4">Supositorio</option>
													   </select>
												   </div>
												</td>
											   <td>
												   <div class="alinear">
													   <select name="viadmo[]" id="viadmo_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;">
														  <option value="0">None</option>
														  <option value="1">Oral</option>
														  <option value="2">Anal</option>
														  <option value="3">Inyeccio</option>
													   </select>
												   </div> 
											   </td>
											   <td>
												   <div class="alinear">
													   <input type="date" name="fechai[]" id="fechai_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Inicio"> 
												   </div>
											   </td>
											   <td>
												   <div class="alinear">
													   <input type="date" name="fechaf[]" id="fechaf_1" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Finalizo">
												   </div> 
											   </td>
											   <td>
												   <div class="alinear">
													   <textarea class="form-control" name="motivo[]" id="motivo_1" style="margin-bottom:2px; border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Breve descripcion del motivo de medicacion"></textarea>
												   </div> 
											   </td>
											   <td scope="col"> 
												   <label class="control-label" style="margin-left:25px;">--------</label>
											   </td>                                       
											</tr>                                      
									  </tbody>
								  </table>
							   </section>
							</div>			
						</div>
				
						
						<input type="button" name="previous" class="previous action-button" value="Atr&aacute;s" />
						<input type="button" name="next" class="next action-button" value="Siguiente" />
					</fieldset>
					
					<fieldset>
						<h2 class="fs-title">ANTRCEDENTES</h2>
						
						<h3 class="fs-subtitle">Comorbilidades</h3>
						<div class = "row margenformulario">		
							<div class= "col-lg-12">
								<!--<textarea class="form-control" rows="3"></textarea>-->
								{{Form::textarea('comorbilidades',null, array('class' => 'form-control', 'rows' => '3'))}}
							</div>
						</div>
						
						<h3 class="fs-subtitle">Antecedentes Familiares</h3>
						<div class = "row margenformulario">		
							<div class= "col-lg-12">
								{{Form::textarea('antecedentesfamiliares',null, array('class' => 'form-control', 'rows' => '3'))}}
							</div>
						</div>
						
						<h3 class="fs-subtitle">Antecedentes Familiares</h3>
						<div class = "row margenformulario">		
							<div class= "col-lg-12">
								{{Form::textarea('factoresriesgo',null, array('class' => 'form-control', 'rows' => '3'))}}
							</div>
						</div>
				
						<input type="button" name="previous" class="previous action-button" value="Atr&aacute;s" />
						<input type="button" name="next" class="next action-button" value="Siguiente" />
					</fieldset>
					
					<fieldset>
						<h2 class="fs-title">OBSERVACIONES</h2>
						
						<div class = "row">		
							<div class= "col-lg-12">
								{{Form::textarea('observaciones',null, array('class' => 'form-control', 'rows' => '9'))}}
							</div>
						</div>
				
						<input type="button" name="previous" class="previous action-button" value="Atr&aacute;s" />
						<input type="button" name="next" class="next action-button" value="Siguiente" />
					</fieldset>
					
					<fieldset>
						<h2 class="fs-title">NOTIFICADOR</h2>
						
						<div class = "row margenformulario">		
							<label class="centrado control-label col-md-2">Nombre</label>					
							<div class="col-md-5"> 
								<input class="form-control" type="text" id="nombrenotificador"/>	
							</div>
							
							<label class="centrado control-label col-md-2">Profesi&oacute;n</label>					
							<div class="col-md-3"> 
								<!--<select class="form-control">
									  <option>Doctor</option>
									  <option>Farmaceutico</option>
								</select>	-->
								{{Form::select('profesion', array('1' => 'Doctor', '2' => 'Farmaceutico'), null, array('class' => 'form-control'))}}
							</div>					
						</div> 
						
						<div class = "row margenformulario">						
							<label class="centrado control-label col-md-2">Correo Electr&oacute;nico</label>					
							<div class="col-md-5"> 						
								<input type="email" class="form-control" id="correo" placeholder="Enter email">
							</div>				
							
							<label class="centrado control-label col-md-2">Especialidad</label>					
							<div class="col-md-3"> 
								<!--<select class="form-control">
									  <option>Cirujano</option>
									  <option>Medico General</option>
								</select>	-->
								{{Form::select('especialidad', array('1' => 'Cirujano', '2' => 'Medico General'), null, array('class' => 'form-control'))}}
							</div>						
						</div> 
						
						<div class = "row margenformulario">	
							<label class="centrado control-label col-md-2">Tel&eacute;fono de Contacto</label>					
							<div class="col-md-3"> 
								<input class="form-control" type="text" id="telefono"/>	
							</div>
							<div class="col-md-2"></div>
							<label class="centrado control-label col-md-2">Fecha</label>					
							<div class="col-md-3"> 
								<input class="form-control" type="text" id="telefono"/>	
							</div>
						</div> 
						
						<div class="row">
						  
						  <div class="col-lg-1 checkinforme" >
							{{Form::checkbox('informe', 'value')}}
						  </div>
						  <div class="col-lg-11 textocheck">
							<label class="control-label">
								Marque si requiere informe
						  </label>
						  </div>
						</div>
			
						<input type="button" name="previous" class="previous action-button" value="Atr&aacute;s" />
						{{Form::submit('Enviar',['class' => 'btn btn-success action-button'])}}
					</fieldset>
				{{ Form::close() }}
			</div>
	</div>
@stop

