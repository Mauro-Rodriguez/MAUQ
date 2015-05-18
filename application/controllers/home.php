<?php

/**
 * Controlador que manejara las vistas principales de los carruceles
 */
class Home extends CI_Controller 
{

     /**
      * Metodo constructor de la clase contrulador HomeMauq
      **/
     public function __construct()
     {
          parent::__construct();
     }
     
     /**
      * Metodo que muestra la vista principal de Inicio
      **/
	public function index()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body");
	}
     
     /**
      * Metodo que muestra la vista del carrucel de gavetes asociado al mueble 1
      **/
	public function car_mueble1()
	{
		$this->load->view("plantillas/front_end/header");
          $this->load->view("plantillas/front_end/body1");
          $this->load->view("plantillas/front_end/carruceles/car_mueble1");
          $this->load->view("plantillas/front_end/body2");
	}
}//fin de la clase controlador

?>