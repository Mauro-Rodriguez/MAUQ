<?php
     
/*
 * Clase modelo que representará el tipo de perfil.
 */
     class Tipo_Perfil_Model extends CI_Model
     {
          
        //atributos de la clase
        
        /**
         * Variable que representa el código del tipo_perfil
         */
        private $codigo;
          
        /**
         * Variable que representa el código del tipo_perfil
         */
        private $nombre;  
          
        //Metodo constructor de la clase
        public function __construct($codigo, $nombre)
        {
             parent::__construct();
             this->codigo = $codigo;
             this->nombre = $nombre;
        }
          
        //Metodos accesores y modificadores
        
        public function getCodigo()
        {
             return codigo;
        }
          
        public function getCodigo()
        {
             return codigo;
        }
          
     }//Fin de la clase
?>