<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class json extends Public_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model');
		$this->load->helper(['url','html','form']);
		
		$this->load->library(['form_validation','session']);
	}

	public function jpost()
	{
		

		$data = [];
		$query = $this->db->get('gallery');
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row) {
			    $data[] = $row;
		    }
		}

		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
		print json_encode($data);
		
	}

	
}
