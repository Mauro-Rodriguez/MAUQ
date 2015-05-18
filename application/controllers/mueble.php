<?php

/**
 * Controlador que manejara las vistas y lógica de los muebles
 */
class Mueble extends CI_Controller 
{

     /**
      * Metodo constructor de la clase contrulador mueble
      * Se carga el helper de formularios desde el autoload
      **/
     public function __construct()
     {
          parent::__construct();
          $this->load->model('mueble_model');
          
     }
     
     /**
      * Metodo que muestra la vista de la forma muble
      **/
	public function form_mueble()
	{    
          
          
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_mueble");
          $this->load->view("plantillas/front_end/body2");
          
	}
     
     /**
      * Metodo que muestra la vista de la forma mueble para editar
      **/
	public function form_mueble_edit()
	{             
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_mueble_edit");
          $this->load->view("plantillas/front_end/body2");
          
	}
     
      /**
      * Metodo que muestra la vista de los datos que hay de los muebles
      **/
	public function mueble_datos()
	{    
          $data = $this->listadoMuebles();
          
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/mueble_datos", $data);
          $this->load->view("plantillas/front_end/body2");
          
	}
     
     /**
      * Metodo que obtiene los valores de los campos de la forma mueble y envia al modelo para ser insertados
      */
     public function obtenerDatos(){
          $data = array(
               'descripcion'   => $this->input->post('descripcion', TRUE),
               'nombre'        => $this->input->post('nombre', TRUE),
               'ubicacion'     => $this->input->post('ubicacion', TRUE),
               'url_imagen'    => $this->input->post('url_imagen', TRUE),
          
          );
          
          $this->mueble_model->insertar_mueble($data);
          echo "Registro exitoso.";
     }
     
     /**
      * Metodo que listara los muebles de existentes en la base de datos
      */
     public function listadoMuebles(){
          
          $data = array(
               'muebles' => $this->mueble_model->listarMuebles(),
          );
          return $data;
     }
     
     /**
      * Metodo que elimina un mueble de la base de datos
      */
     public function eliminarMueble(){
                 
          $this->mueble_model->eliminar($id);
          
          //Se vuelve a llamar la vista
          redirect(base_url()."mueble/mueble_datos");
     }
     
      /**
      * Metodo que elimina un mueble de la base de datos
      */
     public function eliminarMuebleAjax(){
          
          //Se consulta el segmento de la url que trae el id
          $id = $this->input->post('id');
          
          $this->mueble_model->eliminar($id);
          
          redirect(base_url()."mueble/mueble_datos");
     }
     
     /**
      * Metodo que obtine un mueble de la base de datos
      */
     public function obtenerMueble(){
          
          //Se consulta el segmento de la url que trae el id
          //$id = $this->input->post('id', TRUE);
          $id = $this->uri->segment(3);
          $mueble = $this->mueble_model->obtener($id);
          
          $nombre;
          $ubicacion;
          $descripcion;
          $url_imagen;
          
          if($mueble != false){
               
               foreach($mueble->result() as $dato){
                    
                    $nombre = $dato->nombre;
                    $ubicacion = $dato->ubicacion;
                    $descripcion = $dato->descripcion;
                    $url_imagen = $dato->url_imagen;
               }
               
               $data = array(
                    'id'      => $id,
                    'nombre' => $nombre,
                    'ubicacion' => $ubicacion,
                    'descripcion' => $descripcion,
                    'url_imagen' => $url_imagen,
               );
               
          }else{
               
               $data = "";
               
               
               $this->load->view("plantillas/front_end/header");
               $this->load->view("plantillas/front_end/body1");
               $this->load->view("plantillas/back_end/form_mueble_edit", $data);
               $this->load->view("plantillas/front_end/body2");
               return false;
          }
          
          $this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_mueble_edit", $data);
          $this->load->view("plantillas/front_end/body2");
         
     }
     
     /**
      * Metodo que edita un mueble de la base de datos
      */
     public function editarMueble(){
          
          $id = $this->input->post('id', TRUE);
          
          //Se obtiene la información 
          $data = array(
               
               'descripcion'   => $this->input->post('descripcion', TRUE),
               'nombre'        => $this->input->post('nombre', TRUE),
               'ubicacion'     => $this->input->post('ubicacion', TRUE),
               'url_imagen'    => $this->input->post('url_imagen', TRUE),
          
          );
          
          $this->mueble_model->editar($id, $data);
          echo "Actualización exitosa.";
     }
     
}//fin de la clase controlador

?>