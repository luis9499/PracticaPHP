<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividades_model extends CI_Model {

	public function saveActividades($data)
	{
		$this->db->insert('actividades',$data);
	}

	public function getActividades()
	{
		$query = $this->db->get('actividades');
		return $query->result();
	}
	
}

/* End of file Actividades_model.php */
/* Location: ./application/models/Actividades_model.php */