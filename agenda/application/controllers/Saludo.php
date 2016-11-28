<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saludo extends CI_Controller {

	public function index()
	{
		$data['saludo'] = "Saludos desde Codeingiter";

		$this->load->view('saludo_view',$data);
	}

	public function operacion()
	{
		$this->load->view('operaciones/operaciones_view');
	}

	public function presentacion()
	{
		$this->load->view('operaciones/presentacion_view');
	}

	public function sumar()
	{
		$numero1 = $this->input->post('valor1');
		$numero2 = $this->input->post('valor2');

		$data['resultado'] =  $numero1 + $numero2;

		$this->load->view('operaciones/operaciones_view', $data);
	}

	public function calculo()
	{
		$numero1 = $this->input->post('valor1');
		$numero2 = $this->input->post('valor2');
		$operacion = $this->input->post('operacion');

		switch ($operacion) {
			case 1:
				$data['resultado'] =  $numero1 + $numero2;
				break;
			case 2:
				$data['resultado'] =  $numero1 - $numero2;
				break;

			case 3:
				$data['resultado'] =  $numero1 * $numero2;
				break;

			case 4:
				$data['resultado'] =  $numero1 / $numero2;
				break;	

			default:
				$data['resultado']	 = "No hay datos para operar";
		}
		$this->load->view('operaciones/operaciones_view', $data);
	}

}

/* End of file Saludo.php */
/* Location: ./application/controllers/Saludo.php */