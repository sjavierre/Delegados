<?php

class Candidato extends CI_Model {

        public function getAll(){
            $query = $this->db->query('select c.*, g.nombre as grupo 
            from candidatos
            join candidatos_grupos on c.id = cg.candidato 
            join grupos on cg.grupo = g.id');
            return $query->result_array();
        }

        public function get($id){
            $query = $this->db->query('select * from candidatos where id = '.$id);
            return $query->result_array()[0];
        }

        public function insertar($data){
    		$this->db->query('insert into candidatos (nombre, email) values ("'.$data['nombre'].'", "'.$data['email'].'")');
        }

        public function borrar($id){
    		$this->db->query('delete from candidatos where id = '.$id);
        }

        public function update($data){
			$this->db->query('update candidatos set nombre = "'.$data['nombre'].'", email = "'.$data['email'].'" where id ='.$data['id']);
        }
}

?>