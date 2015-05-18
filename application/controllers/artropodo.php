<?php

/**
 * Controlador que manejara las vistas y lógica de los artrópodos
 */
class Artropodo extends CI_Controller 
{

     /**
      * Metodo constructor de la clase contrulador Artropodo
      * Se carga el helper de formularios desde el autoload
      **/
     public function __construct()
     {
          parent::__construct();
          
     }
     
     /**
      * Metodo que muestra la vista principal del formulario para crear artropodos
      **/
	public function index()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body");
	}
     
     /**
      * Metodo que muestra la vista de la forma artrópodos
      **/
	public function form_artropodo()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_artropodo");
          $this->load->view("plantillas/front_end/body2");
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
      * Metodo que muestra la vista de la forma mueble
      **/
	public function form_gaveta()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/back_end/form_gaveta");
          $this->load->view("plantillas/front_end/body2");
	}
     
     
     
}//fin de la clase controlador

?>