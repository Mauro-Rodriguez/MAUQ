<?php

/**
 * Controlador que manejara las vistas y lógica de las gavetas
 */
class Gaveta extends CI_Controller 
{

     /**
      * Metodo constructor de la clase contrulador gaveta
      * Se carga el helper de formularios desde el autoload
      **/
     public function __construct()
     {
          parent::__construct();
          $this->load->model('gaveta_model');
          
     }
     
     /**
      * Metodo que muestra la vista de la forma gaveta
      **/
	public function form_gaveta()
	{    
          
          
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_gaveta");
          $this->load->view("plantillas/front_end/body2");
          
	}
     
     /**
      * Metodo que muestra la vista de la forma gaveta para editar
      **/
	public function form_gaveta_edit()
	{             
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_gaveta_edit");
          $this->load->view("plantillas/front_end/body2");
          
	}
     
      /**
      * Metodo que muestra la vista de los datos que hay de las gavetas
      **/
	public function gaveta_datos()
	{    
          $data = $this->listadoGavetas();
          
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/gaveta_datos", $data);
          $this->load->view("plantillas/front_end/body2");
          
	}
     
     /**
      * Metodo que obtiene los valores de los campos de la forma gavetas y envia al modelo para ser insertados
      */
     public function obtenerDatos(){
          
          $data = array(
               'nombre'        => $this->input->post('nombre', TRUE),
               'ubicacion'     => $this->input->post('ubicacion', TRUE),
               'url_imagen'    => $this->input->post('url_imagen', TRUE),
               'gaveta_mueble' => $this->input->post('gaveta_mueble', TRUE),
               'descripcion'   => $this->input->post('descripcion', TRUE),
          );
          
          $this->gaveta_model->insertar_gaveta($data);
         
          echo "Registro exitoso.";
     }
     
     /**
      * Metodo que listara las gavetas de existentes en la base de datos
      */
     public function listadoGavetas(){
          
          $data = array(
               'gavetas' => $this->gaveta_model->listarGavetas(),
          );
          return $data;
     }
     
     /**
      * Metodo que elimina una gaveta de la base de datos
      */
     public function eliminarGaveta(){
                 
          $this->gaveta_model->eliminar($id);
          
          //Se vuelve a llamar la vista
          redirect(base_url()."gaveta/gaveta_datos");
     }
     
      /**
      * Metodo que elimina una gaveta de la base de datos
      */
     public function eliminarGavetaAjax(){
          
          //Se consulta el segmento de la url que trae el id
          $id = $this->input->post('id');
          
          $this->gaveta_model->eliminar($id);
          
          redirect(base_url()."gaveta/gaveta_datos");
     }
     
     /**
      * Metodo que obtine un gaveta de la base de datos
      */
     public function obtenerGaveta(){
          
          //Se consulta el segmento de la url que trae el id
          //$id = $this->input->post('id', TRUE);
          $id = $this->uri->segment(3);
          $gaveta = $this->gaveta_model->obtener($id);
          
          $nombre;
          $ubicacion;
          $descripcion;
          $url_imagen;
          
          if($gaveta != false){
               
               foreach($gaveta->result() as $dato){
                    
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
               $this->load->view("plantillas/back_end/form_gaveta_edit", $data);
               $this->load->view("plantillas/front_end/body2");
               return false;
          }
          
          $this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_gaveta_edit", $data);
          $this->load->view("plantillas/front_end/body2");
         
     }
     
     /**
      * Metodo que edita una gaveta de la base de datos
      */
     public function editarGaveta(){
          
          $id = $this->input->post('id', TRUE);
          
          //Se obtiene la información 
          $data = array(
               
               'descripcion'   => $this->input->post('descripcion', TRUE),
               'nombre'        => $this->input->post('nombre', TRUE),
               'ubicacion'     => $this->input->post('ubicacion', TRUE),
               'url_imagen'    => $this->input->post('url_imagen', TRUE),
          
          );
          
          $this->gaveta_model->editar($id, $data);
          echo "Actualización exitosa.";
     }
     
}//fin de la clase controlador

?>