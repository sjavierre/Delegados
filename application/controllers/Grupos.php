<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends CI_Controller {

	public function index()
	{
		$grupos = $this->grupo->getAll();
				$data = array('grupos'=>$grupos);
		$this->load->view('includes/bootstrap');
		$this->load->view('includes/header');
		$this->load->view('grupos/index',$data);
		$this->load->view('includes/footer');
	}

	public function votos($id)
	{
		$candidatos = $this->grupo->getCandidatosFromGrupo($id);
				$data = array('grupo'=>$id,'candidatos'=>$candidatos);
		$this->load->view('includes/bootstrap');
		$this->load->view('includes/header');
		$this->load->view('grupos/votos',$data);
		$this->load->view('includes/footer');
	}

	public function votar()
	{
		$data = $this->input->post();
		$this->grupo->votar($data);

		redirect(base_url().'grupos/votos/'.$data['grupo']);
	}

	public function quitaVoto($grupo,$candidato)
	{
		$data = $this->input->post();
		$this->grupo->quitaVoto($grupo,$candidato);

		redirect(base_url().'grupos/votos/'.$grupo);
	}

	public function borrar($id)
	{
		$this->grupo->borrar($id);
		redirect(base_url().'grupos');
	}

	public function add()
	{
		$data = $this->input->post();
		$this->grupo->insertar($data);
		redirect(base_url().'grupos');
	}

	public function edit()
	{
		$data = $this->input->post();
		$this->grupo->update($data);
		redirect(base_url().'grupos');
	}

	public function editar($id)
	{
		$grupo = $this->grupo->get($id);
		$data = array('grupo'=>$grupo);
		$this->load->view('grupos/editar',$data);
	}
}