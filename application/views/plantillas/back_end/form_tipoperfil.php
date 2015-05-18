<div>
     <h2 style="color: #bdfa66"><strong>Crear/Editar Tipos de usuarios</strong></h2>
     <h4 style="color: #bdfa66">Los datos con * son requeridos por el sistema</h4>
     <br/>
     <br/>
     <br/>
</div>

<div style="text-align: left">
     <?php
          ?><h4 style="color: #bdfa66" align=left>Información de los tipos de perfil de los usuarios</h4>
            <div class="divider">
            </div>
     <?php

          /**
           * Se inicia el formulario para crear los tipos de perfiñ en el Software
           */ 
          echo form_open('artropodo/form_tipoperfil');//Cuando se presiona el botón submit el ruteo es donde le indica el parametro del form_open

          //Etiqueta para el campo nombre de la gaveta
          echo form_label('Nombre tipo: *', 'nombre_tipo');?>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso del nombre del perfil
          $datos_nombre_tipo = array(
              'name'        => 'nombre_tipo',
              'id'          => 'nombre_tipo',
              'value'       => '',
              'placeholder' => 'Ingrese el nombre del tipo del perfil',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_nombre_tipo);

          ?><br/><br/><br/><?php
     
           //Etiqueta para el campo descripcion del perfil
          echo form_label('Descripción : *', 'descripcion_tipo');?><br/><?php
          
          //Caja de texto para el ingreso de la descripcion del perfil
          $datos_descripcion_tipo = array(
              'name'        => 'descripcion_tipo',
              'id'          => 'descripcion_tipo',
              'value'       => '',
              'placeholder' => 'Ingrese la descripción del tipo de perfil',
              'rows     '   => '10',
              'cols'        => '10',
              'style'       => 'width:35%',
            );
          echo form_textarea($datos_descripcion_tipo);

          ?><br/><br/><br/><?php
     
          //Botón que envia los datos al servidor para ser guardados
          echo form_submit('enviar_imagen', 'Guardar'); 

          //Fin del formulario
          echo form_close();

     ?>
</div>
