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
         if (isset($_GET['code']))
 {
     $this->facebook_ion_auth->login();
     if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
     {
           header('Location:/?alert=facebooklogin');
           exit();
     }

     header('Location:/');
 }
        $this->render('public/homepage_view');
    }
}