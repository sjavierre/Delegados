<?php

class Grupo extends CI_Model {

        public function getAll(){
            $query = $this->db->query('select g.*, c.nombre as candidato 
                from grupos
                join grupos_candidatos on g.id = gc.grupo 
                join candidatos c on gc.candidato = c.id');
            return $query->result_array();
        }

        public function get($id){
            $query = $this->db->query('select * from grupos where id = '.$id);
            return $query->result_array()[0];
        }

        public function insertar($data){
    		$this->db->query('insert into grupos (nombre) values ("'.$data['nombre'].'")');
        }

        public function borrar($id){
    		$this->db->query('delete from grupos where id = '.$id);
        }

        public function update($data){
			$this->db->query('update grupos set nombre = "'.$data['nombre'].'" where id ='.$data['id']);
        }
}

?>