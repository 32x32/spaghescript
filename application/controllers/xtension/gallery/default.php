<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Default extends Admin_Controller {
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
		$this->render('admin/gallery/index_view');
	}

	public function add(){
		$rules = 	[
				        [
				                'field' => 'caption',
				                'label' => 'Caption',
				                'rules' => 'required'
				        ],
				        [
				                'field' => 'description',
				                'label' => 'Description',
				                'rules' => 'required'
				        ]
					];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/gallery/add_view');
		}
		else
		{

			/* Start Uploading File */
			$config =	[
							'upload_path'	=> './uploads/',
	            			'allowed_types' => 'gif|jpg|png',
	            		
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admin/gallery/add_view', $error);
            }
            else
            {
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                    			'file' 			=> 'uploads/' . $file['file_name'],
                    			'caption'		=> set_value('caption'),
                    			'description'	=> set_value('description')
                    		];
                    $this->Gallery_model->create($data);
					$this->session->set_flashdata('message','New image has been added..');
					redirect('/admin/xtension/gallery');
            }
		}
	}

	public function edit($id){
		$rules = 	[
				        [
				                'field' => 'caption',
				                'label' => 'Caption',
				                'rules' => 'required'
				        ],
				        [
				                'field' => 'description',
				                'label' => 'Description',
				                'rules' => 'required'
				        ]
					];

		$this->form_validation->set_rules($rules);
		$image = $this->Gallery_model->find($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/gallery/edit_view',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> './uploads/',
		            			'allowed_types' => 'gif|jpg|png',
		            			'max_size'      => 100,
		            			'max_width'     => 1024,
		            			'max_height'    => 768
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('admin/gallery/edit_view',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'uploads/' . $file['file_name'];
						unlink($image->file);
	            }
			}

			$data['caption']		= set_value('caption');
			$data['description']	= set_value('description');
			
			$this->Gallery_model->update($id,$data);
			$this->session->set_flashdata('message','New image has been updated..');
			redirect('/admin/xtension/gallery');
		}
	}


	public function delete($id)
	{
		$this->Gallery_model->delete($id);
		$this->session->set_flashdata('message','Image has been deleted..');
		redirect('/admin/xtension/gallery');
	}
}
