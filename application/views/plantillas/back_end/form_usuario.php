<div>
     <h2 style="color: #bdfa66"><strong>Crear/Editar Usuarios</strong></h2>
     <h4 style="color: #bdfa66">Los datos con * son requeridos por el sistema</h4>
     <br/>
     <br/>
     <br/>
</div>
<div style="text-align: left">
     <?php
         ?><h4 style="color: #bdfa66" align=left>Información de los usuarios</h4>
            <div class="divider">
            </div>
     <?php 
          /**
           * Se inicia el formulario para crear Usuarios en el Software
           */ 
          echo form_open('usuario/form_usuario');
          
           //Etiqueta para el campo cedula
          echo form_label('Cédula: *', 'cedula_usuario');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la cédula del usuario
          $datos_cedula_usuario = array(
              'name'        => 'cedula_usuario',
              'id'          => 'cedula_usuario',
              'value'       => '',
              'placeholder' => 'Ingrese el No. cédula del usuario', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_cedula_usuario);
          
          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el campo nombre
          echo form_label('Nombre: *', 'nombre_usuario');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso del nombre del usuario
          $datos_nombre_usuario = array(
              'name'        => 'nombre_usuario',
              'id'          => 'nombre_usuario',
              'value'       => '',
              'placeholder' => 'Ingrese el nombre del usuario', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_nombre_usuario);

          ?><br/><br/><br/><?php

           //Etiqueta para el campo apellido
          echo form_label('Apellido: *', 'apellido_usuario');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la cédula del usuario
          $datos_apellido_usuario = array(
              'name'        => 'apellido_usuario',
              'id'          => 'apellido_usuario',
              'value'       => '',
              'placeholder' => 'Ingrese el apellido del usuario', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_apellido_usuario);
          
          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el campo correo
          echo form_label('Correo: *', 'correo_usuario');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso del correo del usuario
          $datos_correo_usuario = array(
              'name'        => 'correo_usuario',
              'id'          => 'correo_usuario',
              'value'       => '',
              'placeholder' => 'Ingrese el correo del usuario', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_correo_usuario);

          ?><br/><br/><br/><?php

          //Etiqueta para el campo profesión
          echo form_label('Profesión: *', 'profesion_usuario');?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la profesion del usuario
          $datos_profesion_usuario = array(
              'name'        => 'profesion_usuario',
              'id'          => 'profesion_usuario',
              'value'       => '',
              'placeholder' => 'Ingrese la profesión del usuario', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_profesion_usuario);
          
          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php

          //Etiqueta para el campo entidad
          echo form_label('Entidad: *', 'entidad_usuario');?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
          
          //Caja de texto para el ingreso de la entidad del usuario
          $datos_entidad_usuario = array(
              'name'        => 'entidad_usuario',
              'id'          => 'entidad_usuario',
              'value'       => '',
              'placeholder' => 'Ingrese la entidad a la que pertenece', 
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:35%',
            );
          echo form_input($datos_entidad_usuario);

          ?><br/><br/><br/><?php

          //Etiqueta para el campo descripción del artrópodo.
          echo form_label('Perfil: *', 'tipo_perfil_usuario');

          ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php

          //Boton desplegable para elegir el mueble en el cual estará ubicado
          $tipo_perfiles = array(
               'tipo_perfil' => 'Perfil',
               'estudiante'         => 'Estudiante',
               'investigador'         => 'Investigador',
          );
          echo form_dropdown('perfiles', $tipo_perfiles, 'perfil');
     
          ?><br/><br/><br/><?php

          //Botón que envia los datos al servidor para ser guardados
          echo form_submit('enviar_usuario', 'Guardar');       

          //Cierre del formulario
          echo form_close();
     ?>
</div>