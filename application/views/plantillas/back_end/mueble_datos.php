<div>
     <h2 style="color: #75A64F"><strong>Muebles Registrados</strong></h2>
     <br/>
</div>
<div id="mensaje">
</div>
<div class="div_tabla">
    <table class="tabla_datos">
         <tr>
              <th class="th_datos">ID</th>
              <th class="th_datos">NOMBRE</th>
              <th class="th_datos">UBICACION</th>
              <th class="th_datos">DESCRIPCION</th>
              <th class="th_datos">URL</th>
              <th class="th_datos">ACCIONES</th>
         </tr>
         
         <?php 
               if($muebles != false){     
                    foreach($muebles->result() as $mueble){

                         echo "<tr>";
                         echo "<td class='td_datos'>".$mueble->id."</td>";
                         echo "<td class='td_datos'>".$mueble->nombre."</td>";
                         echo "<td class='td_datos'>".$mueble->ubicacion."</td>";
                         echo "<td class='td_datos'>".$mueble->descripcion."</td>";
                         echo "<td class='td_datos'>".$mueble->url_imagen."</td>";
                         echo "<td class='td_datos'><a class='a_editar' id='".$mueble->id."' href='".base_url()."mueble/obtenerMueble/".$mueble->id."'>Editar</a>";
                         echo " | ";
                         echo "<a class='a_borrar'  id='".$mueble->id."' href=''>Borrar</a>";
                         echo "</td>";
                         echo "</tr>";

                    }
               }else{
                    
                    echo "<h4 style='color: #75A64F'>No hay datos registrados</h4>";
               }
          ?>
          
     </table>

</div>

<script>
     jQuery(document).ready(function(){
          
          //Se oculta la etiqueta label del error
          //jQuery(".error").hide();
          
          //Se valida que opción ha sido presionada
          jQuery(".a_borrar").click(function(){
                                         
               var id_mueble = this.id;               
               
               jQuery.post("<?php echo base_url().'mueble/eliminarMuebleAjax';?>",//url a donde va a ser enviada la información
                          {id: id_mueble}                          
                           );
                           
                           //Desvanece el elemento con un retardo
                           //jQuery("#mensaje").fadeOut(7000);
          });
          
          jQuery(".a_editar").click(function(){
               
               var id_mueble = this.id;               
               
               jQuery.post("<?php echo base_url().'mueble/obtenerMueble';?>",//url a donde va a ser enviada la información
                          {id: id_mueble}                          
                           );
               
                           
          });
          
     });
</script>