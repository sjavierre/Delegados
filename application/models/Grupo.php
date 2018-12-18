<?php

class Grupo extends CI_Model {

        public function getAll(){
            $query = $this->db->query('select g.*
            from grupos g
            left outer join grupos_candidatos gc on gc.grupo = g.id
            left outer join candidatos c on c.id = gc.candidato
            group by g.id');
            return $query->result_array();
        }

        public function getCandidatosFromGrupo($id){
            $query = $this->db->query('select c.*, gc.votos
            from grupos g
            join grupos_candidatos gc on gc.grupo = g.id
            join candidatos c on c.id = gc.candidato 
            where g.id = '.$id.' order by gc.votos DESC' );
            return $query->result_array();
        }

        public function votar($data){
            $i = 0;
            while($i < $data['candidatos']){
                if(isset($data['candidato_'.$i])){
                    $this->db->query('update grupos_candidatos set votos = votos + 1 where candidato = '.$data['candidato_'.$i].' and grupo = '.$data['grupo']);
                }
                $i++;
            }
        }

        public function quitaVoto($grupo,$candidato){
            $this->db->query('update grupos_candidatos set votos = case
            when votos > 0 then votos -1
            else votos 
            end
            where candidato = '.$candidato.' and grupo = '.$grupo);
        }


        public function get($id){
            $query = $this->db->query('select * from grupos where id = '.$id);
            return $query->result_array()[0];
        }

        public function insertar($data){
    		$this->db->query('insert into grupos (nombre,descripcion) values ("'.$data['nombre'].'","'.$data['descripcion'].'")');
        }

        public function borrar($id){
    		$this->db->query('delete from grupos where id = '.$id);
        }

        public function update($data){
			$this->db->query('update grupos set nombre = "'.$data['nombre'].'" where id ='.$data['id']);
        }
}

?>