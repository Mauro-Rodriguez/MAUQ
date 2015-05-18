<?php

/**
 * Controlador que manejara las vistas principales de los carruceles
 */
class Usuario extends CI_Controller 
{

     /**
      * Metodo constructor de la clase contrulador HomeMauq
      * Se carga el helper de formularios
      **/
     public function __construct()
     {
          parent::__construct();
          
     }
     
     /**
      * Metodo que muestra la vista principal del formulario para crear usuarios
      **/
	public function index()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body");
	}
     
     /**
      * Metodo que muestra la vista del carrucel de gavetes asociado al mueble 1
      **/
	public function form_usuario()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_usuario");
          $this->load->view("plantillas/front_end/body2");
	}
     
     /**
      * Metodo que muestra la vista de la forma tipo de perfil
      **/
	public function form_tipoperfil()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_tipoperfil");
          $this->load->view("plantillas/front_end/body2");
	}
     
}//fin de la clase controlador

?>