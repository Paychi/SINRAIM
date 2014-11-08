@extends('layouts.home')

@section('content')
		
	<div class ="container">
		
			<div class="row" >
				<label class="control-label col-lg-12 titulo text-center"> FORMULARIO DE NOTIFICACIÓN DE REACCIONES ADVERSAS A INSUMOS MÉDICO </label>
			</div>
			
		<div class="menulateral col-lg-3">
			
			<div id="logo-principal">
			</div>
			
			<div id="item-I" class="contenedor-general">
				<div id = "icon-I" class="logo-interior"></div>
				<p class = "texto-menulateral">Datos Personales</p>
			</div>
			
			<div id="item-II" class="contenedor-general">
				<div id = "icon-II" class="logo-interior"></div>
				<p class = "texto-menulateral">Insumos M&eacute;dicos</p>
			</div>
			
			<div id="item-III" class="contenedor-general">
				<div id = "icon-III" class="logo-interior"></div>
				<p class = "texto-menulateral">Reacciones</p>
			</div>
			
			<div id="item-IV" class="contenedor-general">
				<div id = "icon-IV" class="logo-interior"></div>
				<p class = "texto-menulateral">Medicamento Concomitente</p>
			</div>
			
			<div id="item-V" class="contenedor-general">
				<div id = "icon-V" class="logo-interior"></div>
				<p class = "texto-menulateral">Antecedentes</p>
			</div>
			
			<div id="item-VI" class="contenedor-general">
				<div id = "icon-VI" class="logo-interior"></div>
				<p class = "texto-menulateral">Observaciones</p>
			</div>
			
			<div id="item-VII" class="contenedor-general">
				<div id = "icon-VII" class="logo-interior"></div>
				<p class = "texto-menulateral">Notificador</p>
			</div>
			
		</div>
		
		<div class="col-lg-1">
		</div>
		
		<div class="container">
			<fieldset class="container col-lg-8 has-success">	
				
				<div id="I">											
					<legend>1. DATOS PERSONALES </legend>
					
					<div class="row margenformulario">				
						<label class="centrado control-label col-md-3">No. Expediente</label>					
						<div class="col-md-3"> 
							<input class="form-control" type="text" id="expediente"/>	
						</div>
					</div>
					
					<div class = "row margenformulario">		
						<label class="centrado control-label col-md-3">Nombre del Paciente</label>					
						<div class="col-md-5">
							<input class="form-control" type="text" id="nombre"/>	
						</div>
					</div>	
					
					<div class = "row margenformulario">						
						<label class="centrado control-label col-md-3">Departamento/Municipio</label>					
						<div class="col-md-5">
							<select class="form-control">
								  <option>Diriamba, Carazo</option>
								  <option>Managua</option>
							</select>
						</div>											
					</div>	
					
					<div class = "row margenformulario">							
						<label class="centrado control-label col-md-3">Establecimiento de Salud</label>					
						<div class="col-md-5">
							<select class="form-control">
								  <option>Centro de Salud de Diriamba</option>
								  <option>Centro de Salud del Distrito III</option>
							</select>
						</div>									
					</div>
					
					<div class = "row margenformulario">						
						<label class="centrado control-label col-md-3">Edad</label>					
						<div class="col-md-2">
							<input class="form-control" type="text" id="edad"/>	
						</div>												
					</div>	
					
					
					<div class = "row margenformulario">							
						<label class="centrado control-label col-md-3">Sexo</label>
						<div class ="col-md-3">
							<select class="form-control">
								  <option>Hombre</option>
								  <option>Mujer</option>
							</select>
						</div>	
					</div>	
					
					<div class = "row margenformulario">							
						<label class="centrado control-label col-md-3">Peso (Kg)</label>					
						<div class="col-md-2">
							<input class="form-control" type="text" id="peso"/>	
						</div>
								
					</div>
					
					<div class = "row margenformulario">
						<div id="nextI" class = "col-lg-1 btn btn-success" >-></div>
					</div>	
				</div>
				
				<div id= "II">
					<legend class="col-xs-6">2. INSUMO (S) MÉDICO (S)</legend>
					
					<div class="agregar col-xs-1">
						<div class="agregar2" style="margin: -7px 0px 0px -8px;">
							<label class="control-label">
								<a id="agregarinsumo" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">+</a>
							</label>
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
				
				<div class = "row margenformulario">
					<div id="backII" class = "col-lg-1 btn btn-success" ><-</div>
					<div id="nextII" class = "col-lg-1 btn btn-success" >-></div>
				</div>	
			</div>
			
			<div id= "III">
				<legend class = "col-xs-6">3. REACCIONES</legend>
				
				<div class="agregar col-xs-1" title="Agregar Reaccion">
					<div class="agregar2" style="margin: -7px 0px 0px -8px;">
						<label class="control-label">
							<a id="agregarreaccion" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">+</a>
						</label>
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
				
				<div class = "row margenformulario">
					<div id="backIII" class = "col-lg-1 btn btn-success" ><-</div>
					<div id="nextIII" class = "col-lg-1 btn btn-success" >-></div>
				</div>	
			</div>
			
			<div id= "IV">
				<legend class = "col-xs-8">4. MEDICAMENTO (S) CONCOMITANTE (S)</legend>
				
				<div class="agregar col-xs-1" title="Agregar Concomitante">
					<div class="agregar2" style="margin: -7px 0px 0px -8px;">
						<label class="control-label">
							<a id="agregarconcomitante" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">+</a>
						</label>
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
				
				<div class = "row margenformulario">
					<div id="backIV" class = "col-lg-1 btn btn-success" ><-</div>
					<div id="nextIV" class = "col-lg-1 btn btn-success" >-></div>
				</div>	
			</div>

			<div id= "V">
				<legend>5. Comorbilidades</legend>
				<div class = "row margenformulario">		
					<div class= "col-lg-5">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
			</div>
			
			<div id= "VI">
				<legend>6. Antecedentes Familiares</legend>
				<div class = "row margenformulario">		
					<div class= "col-lg-5">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
			</div>
				
			<div id= "VII">
				<legend>7. Factores de Riesgo</legend>
				<div class = "row margenformulario">		
					<div class= "col-lg-5">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class = "row margenformulario">
					<div id="backVII" class = "col-lg-1 btn btn-success" ><-</div>
					<div id="nextVII" class = "col-lg-1 btn btn-success" >-></div>
				</div>	
			</div>
				
			<div id= "VIII">
				<legend >8. OBSERVACIONES ADICIONALES</legend>
				<div class = "row">		
					<div class= "col-lg-6">
						<textarea class="form-control" rows="9"></textarea>
					</div>
				</div>
				<div class = "row margenformulario">
					<div id="backVIII" class = "col-lg-1 btn btn-success" ><-</div>
					<div id="nextVIII" class = "col-lg-1 btn btn-success" >-></div>
				</div>	
			</div>

			<div id= "IX">
				<legend>9. NOTIFICADOR</legend>
				<div class = "row margenformulario">		
					<label class="centrado control-label col-md-2">Nombre</label>					
					<div class="col-md-5"> 
						<input class="form-control" type="text" id="nombrenotificador"/>	
					</div>
					
					<label class="centrado control-label col-md-2">Profesi&oacute;n</label>					
					<div class="col-md-3"> 
						<select class="form-control">
							  <option>Doctor</option>
							  <option>Farmaceutico</option>
						</select>	
					</div>					
				</div> 
				
				<div class = "row margenformulario">						
					<label class="centrado control-label col-md-2">Correo Electr&oacute;nico</label>					
					<div class="col-md-5"> 						
						<input type="email" class="form-control" id="correo" placeholder="Enter email">
					</div>				
					
					<label class="centrado control-label col-md-2">Especialidad</label>					
					<div class="col-md-3"> 
						<select class="form-control">
							  <option>Cirujano</option>
							  <option>Medico General</option>
						</select>	
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
			</div>
						
			<div id= "X">
				<div class="checkbox">
				  <label class="centrado control-label">
					<input type="checkbox" value="">
					Marque si requiere informe
				  </label>
				</div>
				<div id="backIX" class = "col-lg-1 btn btn-success" ><-</div>
				<button type="button" class="btn btn-success">Enviar</button>
			</div>
			
		</fieldset>
		
	</div>
@stop
