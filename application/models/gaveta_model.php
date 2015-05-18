<?php

/*
 * To change this template use Tools | Templates.
 */
     class Gaveta_Model extends CI_Model {
          //Atributos de la clase
          
          
          /**
           * Metodo cosntructor de la clase
           */
          public function __construct(){
               
               parent::__construct();
              
          }
          
           /**
           * Metodo que inserta una gaveta en la base de datos
           */
          public function insertar_gaveta($data){
               //Se inserta el arreglo data en la base de datos
               return $this->db->insert('gaveta', $data);
               
          }
          
          /**
           * Metodo que lista las gavetas existentes en la base de datos
           */
          public function listarGavetas(){
               //Se consulta la base de datos gaveta para saber los registros
               $query = $this->db->get('gaveta');
               
               //Se valida que el arreglo traiga datos
               if($query->num_rows() > 0){
                    
                    return $query;
               }else{
                    
                    return false;
               }
               
          }
          
          
          /**
           * Método que elimina un mueble de la base de datos
           */
          public function eliminar($id){
               //Se consulta la base de datos con el where a partir del id
               $this->db->where('id', $id);
               
               //luego se elimina el dato
               $this->db->delete('gaveta');
               
          }
          
           /**
           * Método que obtiene una gaveta de la base de datos
           */
          public function obtener($id){
               //Se consulta la base de datos con el where a partir del id
               $this->db->where('id', $id);
               
               //luego se elimina el dato
               $query = $this->db->get('gaveta');
               
               if($query->num_rows() > 0){
                    
                    return $query;
               }else{
                    
                    return false;
               }
               
          }
          
          /**
           * Método que edita una gaveta de la base de datos
           */
          public function editar($id, $data){
               //Se consulta la base de datos con el where a partir del id
               $this->db->where('id', $id);
               
               //luego se elimina el dato
               $this->db->update('gaveta', $data);
               
          }
          
          
          
     }//Fin de la clase

?>