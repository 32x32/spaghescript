<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $c_gal = $this->db->get('gallery');       
        $this->data['countgal'] = $c_gal->num_rows();

        $c_blog = $this->db->where("content_type","post");
        $c_blog = $this->db->get('contents');
        $this->data['countblog'] = $c_blog->num_rows();

        $c_user = $this->db->get('users');       
        $this->data['countuser'] = $c_user->num_rows();


        $this->data['page_title'] = 'Dashboard';
        $this->render('admin/dashboard_view');


        

    }

    public function clear_cache()
    {
        $leave_files = array('.htaccess', 'index.html');
        $i = 0;
        foreach( glob(APPPATH.'cache/*') as $file ) {
            if(!in_array(basename($file), $leave_files))
            {
                unlink($file);
                $i++;
            }
        }
        $this->session->set_flashdata('message', $i.' files were deleted from the cache directory.');
        redirect('admin','refresh');
    }
}