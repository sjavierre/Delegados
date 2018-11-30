<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidatos extends CI_Controller {

	public function grupo($id)
	{
		$candidatos = $this->candidato->getFromGrupo($id);
		$data = array('candidatos'=>$candidatos);
		$this->load->view('candidatos/index',$data);
	}



	public function add()
	{
		$data = $this->input->post();
		$this->candidato->insertar($data);
		redirect(base_url().'candidatos');
	}
}