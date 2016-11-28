<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Actividades extends CI_controller
{
	
	public function add()
	{
		$this->load->view('actividades/add_view');
	}
	public function record()
	{
		$nombres = $this->input->post('nombres');
		$apellidos = $this->input->post('apellidos');
		$documento = $this->input->post('documento');
		$email = $this->input->post('email');
		$telefono = $this->input->post('telefono');
		$descripcion = $this->input->post('descripcion');

		$data = array('nombres'=>$nombres, 'apellidos'=>$apellidos,'documento'=>$documento,'email'=>$email,'telefono'=>$telefono,'descripcion'=>$this->input->post('descripcion'));

		$this->load->model('Actividades_model');

		
		$this->Actividades_model->saveActividades($data);
		$data['mensaje']="Contacto registrado";
		$this->load->view('mensajes/mensajes_view',$data);
	}

	public function listar()
	{
		$this->load->model('Actividades_model');
		$data['actividades']=$this->Actividades_model->getActividades();
		$this->load->view('actividades/listar_view',$data);
	}

	
}

