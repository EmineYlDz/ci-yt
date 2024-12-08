<?php

class HomeController extends CI_Controller
{

   public function __construct()
   {
    parent::__construct();
   }

   public function login()
   {
     $this->load->view(view:'user/login');

   }
   public function singup()
   {
     $this->load->view(view:'user/singup');

   }

}
?>