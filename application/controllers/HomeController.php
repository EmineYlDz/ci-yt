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
  public function checkuser()
  {
    $email = $this->input->post('email');
    $passwor = md5($this->input->post('password'));
    $checkuser = $this->um->checkuser($email,$passwor);
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
  public function edit($id)
	{
		$data['user'] = $this->um->getuser($id);
		$this->load->view(view:'user/layouts/header');
		$this->load->view('user/edit', $data);
		$this->load->view(view:'user/layouts/footer');

	}
  public function update($id)
	{
		$result = $this->um->update($id);
    if($result){
      $this->session->set_flashdata('success','User has been update');
      return redirect(uri:'users');
    }
	}
  public function destroy($id)
  {
    $result = $this->um->destroy($id);
    if($result){
      $this->session->set_flashdata('success','User has been delete');
      return redirect(uri:'users');
    }
  }
  public function my404()
  {
    $this->load->view(view:'errors/my404');
  }
  public function dashboard()
  {
    $this->load->view(view:'user/layouts/header');
    $this->load->view(view:'user/layouts/dashboard');
    $this->load->view(view:'user/layouts/footer');	
  }

}
?>