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
      return redirect(uri:'users');
    }
   }
   public function userList()
   {
    $data['users'] = $this->um->getAllUsers();
    $this->load->view(view:'user/layouts/header');
    $this->load->view('user/user_List',$data);
    //view: 'user/user_List, $data' Data did not arrive when 'view' was used
    $this->load->view(view:'user/layouts/footer');
   }

  public function register()
  { 
    $this->load->view(view:'user/layouts/header');
    $this->load->view(view:'user/register');
    $this->load->view(view:'user/layouts/footer');	
  }
  public function checkuser($email,$password)
  {
    $email = $this->input->post('email');
    $password = md5($this->load->input->post('password'));
    $checkuser = $this->um->checkuser($email,$password);
    if($checkuser){
      foreach($checkuser as $user);
      $this->session->set_userdata('name', $user->name);
      $this->session->set_userdata('email', $user->email);
      $this->session->set_userdata('phone', $user->phone);
      return redirect(uri:'users');
    }
    else{
      return redirect(uri:'users/login');
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('email');
    
  }

}
?>