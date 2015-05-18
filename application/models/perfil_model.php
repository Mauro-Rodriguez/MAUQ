<?php

/*
 * To change this template use Tools | Templates.
 */
     class Perfil_Model extends CI_Model
     {
          //Atributos de la clase
          
          /**
           * Variable que representa el codigo del perfil usuario
           */
           private $codigo;
          
          /**
           * Variable que representa el nombre del perfil usuario
           */
           private $nombre;
          
          /**
           * Variable que representa el codigo del usuario
           */
          private $codigo_visitante;
          
          /**
           * Metodo constructor de la clase
           */
          public function __construct($codigo, $nombre, $codigo_visitante)
          {
               parent::__construct();    
               this->codigo = $codigo;
               this->nombre = $nombre;
               this->codigo_visitante = $codigo_visitante;
          }
          
          //Metodos accesores y modificadores
          
          /**
           * Metodo que devuelve el codigo del perfil
           */ 
          public function get_codigo()
          {
               return codigo;     
          }
          
          /**
           * Metodo que devuelve el nombre_del perfil_Usuario.
           */ 
          public function get_codigo()
          {
               return nombre;     
          }
          
          /**
           * Metodo que devuelve el codigo_visitante del perfil_Usuario.
           */
          public function get_codigo_visitante()
          {
               return codigo_visitante;     
          }
          
     }//Fin de la clase

?>