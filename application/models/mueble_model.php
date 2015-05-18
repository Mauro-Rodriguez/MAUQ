<?php

/*
 * To change this template use Tools | Templates.
 */
     class Mueble_Model extends CI_Model {
          
          /**
           * Metodo cosntructor de la clase
           */
          public function __construct(){
               
               parent::__construct();  
               
          }
          
          /**
           * Metodo que inserta un mueble en la base de datos
           */
          public function insertar_mueble($data){
               //Se inserta el arreglo data en la base de datos
               return $this->db->insert('mueble', $data);
               
          }
          
          /**
           * Metodo que lista los muebles existentes en la base de datos
           */
          public function listarMuebles(){
               //Se consulta la base de datos mueble para saber los registros
               $query = $this->db->get('mueble');
               
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
               $this->db->delete('mueble');
               
          }
          
           /**
           * Método que obtiene un mueble de la base de datos
           */
          public function obtener($id){
               //Se consulta la base de datos con el where a partir del id
               $this->db->where('id', $id);
               
               //luego se elimina el dato
               $query = $this->db->get('mueble');
               
               if($query->num_rows() > 0){
                    
                    return $query;
               }else{
                    
                    return false;
               }
               
          }
          
          /**
           * Método que edita un mueble de la base de datos
           */
          public function editar($id, $data){
               //Se consulta la base de datos con el where a partir del id
               $this->db->where('id', $id);
               
               //luego se elimina el dato
               $this->db->update('mueble', $data);
               
          }
          
     }//fin de la clase

?>