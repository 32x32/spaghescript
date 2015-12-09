<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Public_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model');
		$this->load->helper(['url','html','form']);
		
		$this->load->library(['form_validation','session']);
	}

	public function index()
	{
		

		 $this->data['images'] = $this->Gallery_model->all();
		$this->render('public/gallery/index');
	}

	
}
