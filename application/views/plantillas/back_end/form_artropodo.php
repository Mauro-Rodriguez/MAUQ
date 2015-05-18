<div>
     <h2 style="color: #bdfa66"><strong>Almacenar/Editar Artrópodos</strong></h2>
     <h4 style="color: #bdfa66">Los datos con * son requeridos por el sistema</h4>
     <br/>
     <br/>
     <br/>
</div>

<div style="text-align: left">
     <?php
          ?><h4 style="color: #bdfa66" align=left>Información del espécimen</h4>
            <div class="divider">
            </div>
     <?php

          /**
           * Se inicia el formulario para crear Artropodo en el Software
           */ 
          echo form_open('artropodo/form_artropodo');//Cuando se presiona el botón submit el ruteo es donde le indica el parametro del form_open

          //Etiqueta para el campo clase del artropodo
          echo form_label('Clase: *', 'clase_artropodo');?>&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la clase del usuario
          $datos_clase_artropodo = array(
              'name'        => 'clase_artropodo',
              'id'          => 'clase_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese la clase del espécimen',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_clase_artropodo);

          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el orden del artrópodo
          echo form_label('Orden: *', 'orden_artropodo');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de orden del artrópodo
          $datos_orden_artropodo = array(
              'name'        => 'orden_artropodo',
              'id'          => 'orden_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese El orden del espécimen', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_orden_artropodo);

          ?><br/><br/><br/><?php

          //Etiqueta para el campo familia del artrópodo
          echo form_label('Familia: *', 'familia_artropodo');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la familia del artrópodo
          $datos_familia_artropodo = array(
              'name'        => 'familia_artropodo',
              'id'          => 'familia_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese la familia del espécimen', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_familia_artropodo);

          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el campo Subfamilia del artrópodo
          echo form_label('Sub-Familia: *', 'sub_familia_artropodo');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la sub familia del artropodo
          $datos_sub_familia_artropodo = array(
              'name'        => 'sub_familia_artropodo',
              'id'          => 'sub_familia_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese la sub-familia del espécimen', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_sub_familia_artropodo);

          ?><br/><br/><br/><?php

          //Etiqueta para el campo nombre científico del artrópodo
          echo form_label('Nom. Científico: *', 'nombre_cientifico_artropodo');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso del nombre cientifico del artrópodo
          $datos_nombre_cientifico_artropodo = array(
              'name'        => 'nombre_cientifico_artropodo',
              'id'          => 'nombre_cientifico_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese el nom-científico del espécimen', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_nombre_cientifico_artropodo);

          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el campo Nombre del artrópodo
          echo form_label('Nombre: *', 'nombre_artropodo');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la sub familia del artropodo
          $datos_nombre_artropodo = array(
              'name'        => 'nombre_artropodo',
              'id'          => 'nombre_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese el nombre del espécimen', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_nombre_artropodo);

          ?><br/><br/><br/><?php
          
          //Etiqueta para el campo descripcion del artrópodo.
          echo form_label('Descripción: *', 'descripcion_artropodo');

          ?><br/><?php

          //Area de texto para ingresar la descripción del artrópodo
          $datos_descripcion_artropodo = array(
              'name'        => 'descripcion_artropodo',
              'id'          => 'descripcion_artropodo',
              'value'       => '',
              'placeholder' => 'Ingrese la descripción del espécimen', 
              'rows'        => '10',
              'cols'        => '10',
              'style'       => 'width:25%',
            );
          echo form_textarea($datos_descripcion_artropodo);

          ?><br/><br/><br/><?php

          //Etiqueta para el campo descripción del artrópodo.
          echo form_label('Ubicación en gaveta: *', 'descripcion_artropodo');

          ?>&nbsp;&nbsp;&nbsp;&nbsp;
          <?php

          //Boton desplegable para elegir el mueble en el cual estará ubicado
          $numero_mueble = array(
               'mueble' => 'Mueble',
               '1'         => 'Mueble - 1',
               '2'         => 'Mueble - 2',
               '3'         => 'Mueble - 3',
               '4'         => 'Mueble - 4',
               '5'         => 'Mueble - 5',
               '6'         => 'Mueble - 6',
               '7'         => 'Mueble - 7',
               '8'         => 'Mueble - 8',
          );
          echo form_dropdown('muebles', $numero_mueble, 'mueble');
     
          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Boton desplegable para elegir la gaveta en la cual estará ubicado el especimen
          $letra_gaveta = array(
               'gaveta' => 'Gaveta',
               '-A'         => 'Gaveta - A',
               '-B'         => 'Gaveta - B',
               '-C'         => 'Gaveta - C',
               '-D'         => 'Gaveta - D',
               '-E'         => 'Gaveta - E',
               '-F'         => 'Gaveta - F',
               '-G'         => 'Gaveta - G',
               '-H'         => 'Gaveta - H',
               '-I'         => 'Gaveta - I',
               '-J'         => 'Gaveta - J',
               '-K'         => 'Gaveta - K',
               '-L'         => 'Gaveta - L',
               );
          echo form_dropdown('gavetas', $letra_gaveta, 'gaveta');
          
          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el adjuntar imagen de especimen
          echo form_label('Adjuntar imagen del espécimen: *', 'imagen_artropodo');
          
          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //boton para subir la imagen del artropodo
          $datos_imagen_artropodo = array(
              'name'        => 'imagen_artropodo',
              'id'          => 'imagen_artropodo',
              'type'        => 'file',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:25%',
            );
          echo form_upload($datos_imagen_artropodo);
          
          ?><br/><br/><br/><?php

          //Botón que envia los datos al servidor para ser guardados
          echo form_submit('enviar_artropodo', 'Guardar');       

          //Se cierra el formulario
          echo form_close();
     
     ?>
</div>
