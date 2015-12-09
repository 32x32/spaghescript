<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function blog($blogs)
    {
        $this->load->library('encrypt');
        $msg = 'My secret message';

$encrypted_string = $this->encrypt->encode($msg);
    }
}