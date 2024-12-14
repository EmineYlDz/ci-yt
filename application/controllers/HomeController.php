<?php

class HomeController extends CI_Controller
{

   public function __construct()
   {
    parent::__construct();
    $this->load->model(model:'UserModel', name:'um');
   }

   public function login()
   {
     $this->load->view(view:'user/login');

   }
   public function singup()
   {
     $this->load->view(view:'user/singup');

   }

   public function store()
   {
    $result = $this->um->store();
    if($result){
      $this->load->view(view:'user/login');
    }
   }
   public function userList()
   {
      $data['users']=$this->um->getalluser();
      $this->load->view(view:'user/user_List',$data);
   }

}
?>