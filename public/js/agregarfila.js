$(document).ready(function() {

             var AddButton  = $("#agregarinsumo"); //ID del Botón Agregarinsumo
             var AddButton2 = $("#agregarreaccion"); //ID del Botón Agregarreaccion
             var AddButton3 = $("#agregarconcomitante");
             

             $(AddButton).click(function (e) {
                var MaxInputs  = 3; //Número Maximo de Campos
                var x = $("#p tr").length + 8;
                var FieldCount = x-8; //para el seguimiento de los campos

                 if(1 <= MaxInputs) //max input box allowed
                 {
                    FieldCount++;
                    //agregar campo Farmaco
                    nombre = '<td><div class="alinear"><input type="text" name="nombrecomercial[]" id="ncomercia_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Nombre de Insumo"> </div></td>';
                    lote = '<td><div class="alinear"><input type="text" name="lote[]" id="lote_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="No Lote"></div> </td>';
                    fabricante = '<td><div class="alinear"><input type="text" name="fabricante[]" id="fabricante_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Fabricante"> </div></td>';
                    vence      = '<td><div class="alinear"><input type="date" name="vence[]" id="vence_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Fecha"> </div></td>';
                    link = '<td scope="col"> <div class="eliminar col-xs-1"><div class="eliminar2" style="margin: -7px 0px 0px -6px;"><label class="control-label"><a class="elimina" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">x</a></label></div></div></td>';

                    //agregar campo paciente
                    fila = '<tr id="'+FieldCount+'">';        
                    dosis = '<td><div class="alinear"><input type="text" name="dosis[]" id="dosis_'+FieldCount+ '" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Cantidad"> </div></td>';
                    unidad = '<td><div class="alinear"><select name="unidad[]" id="unidad_'+FieldCount+ '" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;"><option value="0">None</option><option value="1">Cucharadas</option><option value="2">Capsulas</option><option value="3">CC</option><option value="4">Supositorio</option></select></div> </td>';
                    viadmo = '<td><div class="alinear"><select name="viadmo[]" id="viadmo_'+FieldCount+ '" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;"><option value="0">None</option><option value="1">Oral</option><option value="2">Anal</option><option value="3">Inyeccion</option></select></div> </td>';
                    fechai = '<td><div class="alinear"><input type="date" name="fechai[]" id="fechai_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Inicio"> </div></td>';
                    fechaf = '<td><div class="alinear"><input type="date" name="fechaf[]" id="fechaf_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Finalizo"> </div></td>';
                    motivo = '<td><div class="alinear"><textarea class="form-control" name="motivo[]" id="motivo_'+FieldCount+'" style="margin-bottom:2px; border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Breve descripcion del motivo de medicacion"></textarea></div> </td>';
                    fin = '</tr>';

                    //agregar Campo Farmaco
                    $('#m').append(fila+nombre+lote+fabricante+vence+link+fin);
                    //Agregar Campo Paciente
                    $('#p').append(fila+dosis+unidad+viadmo+fechai+fechaf+motivo+fin);

                    x++; //text box increment
                    MaxInputs--;
                 }
                 return false;
             });
              
              $(AddButton2).click(function (e) {

                var MaxInputs  = 9; //Número Maximo de Campos
                //var x = número de campos existentes en el contenedor
                var x = $("#reaccion tr").length + 8;
                var FieldCount = x-8; //para el seguimiento de los campos
                
                 if(1 <= MaxInputs) //max input box allowed
                 {
                    FieldCount++;
                    //agregar campo reaacion
                    fila = '<tr id="'+FieldCount+'">';  

                    naturaleza = '<td><div class="alinear"><input type="text" name="naturaleza[]" id="natural_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Naturaleza"> </div></td>';
                    localizacion='<td><div class="alinear"><input type="text" name="localizacion[]" id="punto_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Localizacion"> </div></td>';
                    intensidad = '<td><div class="alinear"><input type="text" name="intensidad[]" id="intensidad_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Intensidad"> </div></td>';
                    fechai = '<td><div class="alinear"><input type="date" name="fechair[]" id="fechair_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Inicio"> </div></td>';
                    fechaf = '<td><div class="alinear"><input type="date" name="fechafr[]" id="fechafr_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Finalizo"></div> </td>';
                    desenlace = '<td><div class="alinear"><select name="desenlace[]" id="desenlace_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;"><option value="0">None</option><option value="1">Recuperado</option><option value="2">Secuela</option><option value="3">Mortal</option><option value="4">otro</option></select></div> </td>';
                    link = '<td scope="col"> <div class="eliminar col-xs-1"><div class="eliminar2" style="margin: -7px 0px 0px -6px;"><label class="control-label"><a class="elimina" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">x</a></label></div></div></td>';

                    fin = '</tr>';
                    //agregar Campo Farmaco
                    $('#reaccion').append(fila+naturaleza+localizacion+intensidad+fechai+fechaf+desenlace+link+fin);

                    x++; //text box increment
                    MaxInputs--;
                 }
                 return false;
             });

              $(AddButton3).click(function (e) {

                var MaxInputs  = 5; //Número Maximo de Campos
                //var x = número de campos existentes en el contenedor
                var x = $("#concomitante tr").length + 9;
                var FieldCount = x-9; //para el seguimiento de los campos

                 if(1 <= MaxInputs) //max input box allowed
                 {
                    FieldCount++;
                    
                    //agregar campo de medicamento Concomitante
                    fila = '<tr id="'+FieldCount+'">';        
                    nombre = '<td><div class="alinear"><input type="text" name="nombrem[]" id="nombrem_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Nombre"> </div></td>';
                    dosis = '<td><div class="alinear"><input type="text" name="dosism[]" id="dosism_'+FieldCount+ '" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Cantidad"> </div></td>';
                    unidad = '<td><div class="alinear"><select name="unidadm[]" id="unidadm_'+FieldCount+ '" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;"><option value="0">None</option><option value="1">Cucharadas</option><option value="2">Capsulas</option><option value="3">CC</option><option value="4">Supositorio</option></select></div> </td>';
                    viadmo = '<td><div class="alinear"><select name="viadmom[]" id="viadmom_'+FieldCount+ '" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;"><option value="0">None</option><option value="1">Oral</option><option value="2">Anal</option><option value="3">Inyeccion</option></select></div> </td>';
                    fechai = '<td><div class="alinear"><input type="date" name="fechaim[]" id="fechaim_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Inicio"> </div></td>';
                    fechaf = '<td><div class="alinear"><input type="date" name="fechafm[]" id="fechafm_'+FieldCount+'" class="form-control" style="border-radius:0px; border: 1px solid #87D37C;" placeholder="Finalizo"> </div></td>';
                    motivo = '<td><div class="alinear"><textarea class="form-control" name="motivom[]" id="motivom_'+FieldCount+'" style="margin-bottom:2px; border-radius:0px; border: 1px solid #87D37C; margin-top:2px; margin-bottom:2px;" placeholder="Breve descripcion del motivo de medicacion"></textarea></div> </td>';
                    link = '<td scope="col"> <div class="eliminar col-xs-1"><div class="eliminar2" style="margin: -7px 0px 0px -6px;"><label class="control-label"><a class="elimina" style="color:#FFF; font-size:30px; padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" href="#">x</a></label></div></div></td>';

                    fin = '</tr>';
                    //Agregar Campo Paciente
                    $('#concomitante').append(fila+nombre+dosis+unidad+viadmo+fechai+fechaf+motivo+link+fin);

                    x++; //text box increment
                    MaxInputs--;
                 }
                 return false;
             });

             $(document).on("click",".elimina",function (e){ //click en eliminar campo
                var parent = $(this).parent();
                var parent2 = $(parent).parent();
                var parent3 = $(parent2).parent();
                var parent4 = $(parent3).parent();
                var parent5 = $(parent4).parent(); 
                var parent6 = $(parent5).attr('id');
                $("#"+parent6).remove();
                $('#'+parent6).remove();
               return false;
            });
            $(document).on("click",".elimina2",function (e){ //click en eliminar campo
                var parent = $(this).parent();
                var parent2 = $(parent).parent();
                var parent3 = $(parent2).parent();
                var parent4 = $(parent3).parent();
                var parent5 = $(parent4).parent(); 
                var parent6 = $(parent5).attr('id');
                $("#"+parent6).remove();
               return false;
            });
         });
