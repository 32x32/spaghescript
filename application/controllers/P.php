<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//SpagheScript
//Pages are here

class P extends Public_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gallery_model');
		$this->load->model('content_model');
        $this->load->model('content_translation_model');
        $this->load->model('slug_model');
        $this->load->model('language_model');
		$this->load->helper(['url','html','form']);
		
		$this->load->library(['form_validation','session']);
	}

	public function gallery()
	{
		

		 $this->data['images'] = $this->Gallery_model->all();
		$this->render('public/gallery/_index');
	}
	
	public function blog($language_slug, $content_id)
	{
		$content = $this->content_model->get($content_id);
        if($content == FALSE)
        {
            $this->postal->add('There is no content to translate.','error');
            redirect('admin/contents/index', 'refresh');
        }
        
        
        $translation = $this->content_translation_model->where(array('content_id'=>$content_id, 'language_slug'=>$language_slug))->get();
        $this->data['content_language'] = $this->langs[$language_slug]['name'];
        if($translation == FALSE)
        {
            
            redirect('admin/contents/index/'.$content_type, 'refresh');
        }

        $this->data['translation'] = $translation;
        $this->data['parents'] = $this->content_model->get_parents_list($content_type,$content_id,$language_slug);
        $this->data['content'] = $content;
        $this->data['slugs'] = $this->slug_model->where(array('translation_id'=>$translation->id))->get_all();
        $rules = $this->content_model->rules;
        $this->form_validation->set_rules($rules['update']);
        if($this->form_validation->run()===FALSE)
        {
            $this->render('public/blog/_singlepage');
        }
        
        
	}
	
	public function notfound()
	{
		

		 $this->data['images'] = $this->Gallery_model->all();
		$this->render('public/error/_404');
	}

	
}
