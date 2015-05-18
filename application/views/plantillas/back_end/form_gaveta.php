<div>
     <h2 style="color: #75A64F"><strong>Crear/Editar Gaveta</strong></h2>
     <h4 style="color: #75A64F">Los datos con * son requeridos por el sistema</h4>
     <br/>
     <br/>
     <br/>
</div>

<div style="text-align: left">
     <?php
          ?><h4 style="color: #75A64F" align=left>Información de la gaveta de especímenes</h4>
            <div class="divider">
            </div>
     <?php

          /**
           * Se inicia el formulario para crear gaveta en el Software
           */ 
          echo form_open('gaveta/obtenerDatos');//Cuando se presiona el botón submit el ruteo es donde le indica el parametro del form_open

          //Etiqueta para el campo nombre de la gaveta
          echo form_label('Nombre: *', 'nombre_gaveta');?>&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso del nombre de la gaveta
          $datos_nombre_gaveta = array(
              'name'        => 'nombre_gaveta',
              'id'          => 'nombre_gaveta',
              'value'       => '',
              'placeholder' => 'Ingrese el nombre de la gaveta',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_nombre_gaveta);

          ?><br/><br/><br/><?php
     
           //Etiqueta para el campo ubicacion de la gaveta
          echo form_label('Ubicación: *', 'ubicacion_gaveta');?>&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso la ubicación de la gaveta
          $datos_ubicacion_gaveta = array(
              'name'        => 'ubicacion_gaveta',
              'id'          => 'ubicacion_gaveta',
              'value'       => '',
              'placeholder' => 'Ingrese la ubicación de la gaveta',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_ubicacion_gaveta);

          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
     
          ?><br/><br/><br/><?php
     
           //Etiqueta para el campo ubicacion de la gaveta
          echo form_label('Descripción: *', 'descripcion_gaveta');?><br/><?php
          
          //Caja de texto para el ingreso de la descrpción de la gaveta
          $datos_descripcion_gaveta = array(
              'name'        => 'descripcion_gaveta',
              'id'          => 'descripcion_gaveta',
              'value'       => '',
              'placeholder' => 'Ingrese la descripción de la gaveta',
              'rows'        => '10',
              'cols'        => '10',
              'style'       => 'width:35%',
            );
          echo form_textarea($datos_descripcion_gaveta);

          ?><br/><br/><br/><?php
           
          //Etiqueta para el campo mueble de la gaveta
          echo form_label('Mueble al que pertenece: *', 'descripcion_artropodo');

          ?>&nbsp;&nbsp;&nbsp;&nbsp;
          <?php

          //Boton desplegable para elegir el mueble al cual pertenecera la gaveta
          $numero_mueble = array(
               'mueble' => 'Mueble',
               'Mueble - 1'         => 'Mueble - 1',
               'Mueble - 2'         => 'Mueble - 2',
               'Mueble - 3'         => 'Mueble - 3',
               'Mueble - 4'         => 'Mueble - 4',
               'Mueble - 5'         => 'Mueble - 5',
               'Mueble - 6'         => 'Mueble - 6',
               'Mueble - 7'         => 'Mueble - 7',
               'Mueble - 8'         => 'Mueble - 8',
          );
          echo form_dropdown('muebles', $numero_mueble, 'mueble', 'id="mueble"');

           ?>&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el adjuntar imagen de la gaveta
          echo form_label('Adjuntar imagen de la gaveta: *', 'imagen_gaveta');
          
          ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //boton para subir la imagen de la gaveta
          $datos_imagen_gaveta = array(
              'name'        => 'imagen_gaveta',
              'id'          => 'imagen_gaveta',
              'type'        => 'file',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:25%',
            );
          echo form_upload($datos_imagen_gaveta);
          
          ?><br/><br/><br/><?php

          //Botón que envia los datos al servidor para ser guardados
          //echo form_submit('enviar_imagen', 'Guardar'); 
          
          $data_boton_gaveta = array(
               'name' => 'boton_gaveta',
               'id'   => 'boton_gaveta',
               'content' => 'Guardar',
               'style'       => 'width:10%',
               );

          echo form_button($data_boton_gaveta);

          //Fin del formulario
          echo form_close();

     ?>
<div id="mensaje";>
</div>
</div>
<script>
     jQuery(document).ready(function(){
          
          //Se oculta la etiqueta label del error
          jQuery(".error").hide();
          
          //Se validan los botones con jquery para que no ingresen espacios en blanco
          jQuery("#boton_gaveta").click(function(){
               
               //lienea de codigo que vuelve a activar el elemento que oculta el fadeOut
               $("#mensaje").fadeIn(2000);
               //Estilo de la alerta que sale
	  	     $("#mensaje").css({"background-color":"#585858","color":"#75A64F","font-size":"150%"});
               
               var nombre_gaveta = jQuery("#nombre_gaveta").val();
               var ubicacion_gaveta = jQuery("#ubicacion_gaveta").val();
               var descripcion_gaveta = jQuery("#descripcion_gaveta").val();
               var imagen_gaveta = jQuery("#imagen_gaveta").val();
               var mueble =parseInt(jQuery("#mueble").val());
              
               if((nombre_gaveta != "") && (ubicacion_gaveta != "") && (descripcion_gaveta != "") && (imagen_gaveta != "") && (mueble != ""))
               {
                    //Se enviaran los datos con ajax para no recargarla pagina
                    jQuery.ajax({url:"<?php echo base_url().'gaveta/obtenerDatos';?>",//url a donde va a ser enviada la información
                           type: 'post', //Método por el cual va a ser enviada la información
                           data:{nombre: nombre_gaveta, ubicacion: ubicacion_gaveta, url_imagen: imagen_gaveta, gaveta_mueble: mueble, descripcion: descripcion_gaveta},
                           success:function(result){
                           jQuery("#mensaje").html(result);
                                alert(result);
                           }});
                           
                           jQuery("#nombre_gaveta").val("");
                           jQuery("#ubicacion_gaveta").val("");
                           jQuery("#descripcion_gaveta").val("");
                           jQuery("#imagen_gaveta").val("");
                    
                           //Desvanece el elemento con un retardo
                           $("#mensaje").fadeOut(5000);
               }else
                    {
                         jQuery("#mensaje").html("Complete todos los campos.");
                         //Desvanece el elemento con un retardo
                         $("#mensaje").fadeOut(5000);
                    }
               
              
               
          });
     });
</script>