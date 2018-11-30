<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends CI_Controller {

	public function index()
	{
		$grupos = $this->grupo->getAll();
		$data = array('grupos'=>$grupos);
		$this->load->view('grupos/index',$data);
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