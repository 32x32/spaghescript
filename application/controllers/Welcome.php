<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('public/homepage_view');
    }
}