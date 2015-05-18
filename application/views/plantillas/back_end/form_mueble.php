<div>
     <h2 style="color: #75A64F"><strong>Crear Mueble</strong></h2>
     <h4 style="color: #75A64F">Los datos con * son requeridos por el sistema</h4>
     <br/>
     <br/>
     <br/>
</div>

<div style="text-align: left">
     <?php
          ?><h4 style="color: #75A64F" align=left>Información del mueble de especímenes</h4>
            <div class="divider">
            </div>
     <?php

          /**
           * Se inicia el formulario para crear Muebles en el Software
           */ 
          echo form_open('mueble/obtenerDatos');//Cuando se presiona el botón submit el ruteo es donde le indica el parametro del form_open

          //Etiqueta para el campo nombre del mueble
          echo form_label('Nombre: *', 'nombre_mueble');?>&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
              
          
               //Caja de texto para el ingreso del nombre del mueble
          $datos_nombre_mueble = array(
              'name'        => 'nombre_mueble',
              'id'          => 'nombre_mueble',
              'value'       => '',
              'placeholder' => 'Ingrese el nombre del mueble',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_nombre_mueble);
                    
          ?><br/><br/><br/><?php
     
           //Etiqueta para el campo ubicacion del mueble
          echo form_label('Ubicación: *', 'ubicacion_mueble');?>&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso la ubicación del mueble
          $datos_ubicacion_mueble = array(
              'name'        => 'ubicacion_mueble',
              'id'          => 'ubicacion_mueble',
              'value'       => '',
              'placeholder' => 'Ingrese la ubicación del mueble',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_ubicacion_mueble);

          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
     
          ?><br/><br/><br/><?php
     
          //Etiqueta para el campo ubicacion del mueble
          echo form_label('Descripción: *', 'descripcion_mueble');?><br/><?php
          
          //Caja de texto para el ingreso de la descrpción del mueble
          $datos_descripcion_mueble = array(
              'name'        => 'descripcion_mueble',
              'id'          => 'descripcion_mueble',
              'value'       => '',
              'placeholder' => 'Ingrese la descripción del mueble',
              'rows'        => '10',
              'cols'        => '10',
              'style'       => 'width:35%',
            );
          echo form_textarea($datos_descripcion_mueble);

          ?><br/><br/><br/><?php
               
          //Etiqueta para el adjuntar imagen del mueble
          echo form_label('Adjuntar imagen del mueble: *', 'imagen_mueble');?><br/><?php
          

          //boton para subir la imagen del mueble
          $datos_imagen_mueble = array(
              'name'        => 'imagen_mueble',
              'id'          => 'imagen_mueble',
              'type'        => 'file',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:25%',
            );
          echo form_upload($datos_imagen_mueble);

          //Botón que envia los datos al servidor para ser guardados
          //$datos_boton_mueble = array(
          //    'name'        => 'enviar_imagen',
          //    'class'       => 'button',
          //    'value'       => 'Guardar',
          //    'maxlength'   => '10',
          //    'size'        => '10',
          //    'style'       => 'width:15%',
          //  );
          
          //echo form_submit($datos_boton_mueble); 


          ?><br/><br/><br/><?php

          $data_boton_mueble = array(
               'name' => 'boton_mueble',
               'id'   => 'boton_mueble',
               'content' => 'Guardar',
               'style'       => 'width:10%',
               );

          echo form_button($data_boton_mueble);
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
          jQuery("#boton_mueble").click(function(){
               
               //lienea de codigo que vuelve a activar el elemento que oculta el fadeOut
               $("#mensaje").fadeIn(2000);
               //Estilo de la alerta que sale
	  	     $("#mensaje").css({"background-color":"#585858","color":"#75A64F","font-size":"150%"});
               
               var nombre_mueble = jQuery("#nombre_mueble").val();
               var ubicacion_mueble = jQuery("#ubicacion_mueble").val();
               var descripcion_mueble = jQuery("#descripcion_mueble").val();
               var imagen_mueble = jQuery("#imagen_mueble").val();
               
               if((nombre_mueble != "") && (ubicacion_mueble != "") && (descripcion_mueble != "") && (imagen_mueble != ""))
               {
                    //Se enviaran los datos con ajax para no recargarla pagina
                    jQuery.ajax({url:"<?php echo base_url().'mueble/obtenerDatos';?>",//url a donde va a ser enviada la información
                           type: 'post', //Método por el cual va a ser enviada la información
                           data:{descripcion: descripcion_mueble, nombre:nombre_mueble, ubicacion:ubicacion_mueble, url_imagen: imagen_mueble},
                           success:function(result){
                           jQuery("#mensaje").html(result);
                           }});
                           
                           jQuery("#nombre_mueble").val("");
                           jQuery("#ubicacion_mueble").val("");
                           jQuery("#descripcion_mueble").val("");
                           jQuery("#imagen_mueble").val("");
                    
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