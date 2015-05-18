<?php

class Mauq extends CI_Controller 
{

     /**
      * Metodo constructor de la clase contrulador Bienvenido
      **/
     public function __construct()
     {
          parent::__construct();
     }
     
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('plantillas/front_end/index');
	}
     
}//fin de la clase controlador


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */