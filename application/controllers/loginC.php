<?php
class LoginC extends CI_Controller{
  public function index(){
    $this->load->view("loginV");

  }
  public function login(){
    //echo "Reached login controller";
    //$this->load->library('form_validation');
    $this->form_validation->set_rules('username','Username','alpha|min_length[2]');
    $this->form_validation->set_rules('password','Password','numeric|min_length[2]');

    if($this->form_validation->run()){
    //  echo "Success";
      $username=$_POST['username'];
      $password=$_POST['password'];

        $this->load->model("loginM");
      if($this->loginM->validate_login($username,$password)){
        $this->session->set_userdata('username',$username);


        return redirect('dashboardC');
      }
      else{
        echo "<script>alert('login failed');</script>";
          $this->load->view("loginV");
      }
    }
    else{
      $this->load->view('loginV');
      //echo "failed";
      //echo validation_errors();

    }
  }

  public function register(){
    $this->load->view('registerV');
    $this->form_validation->set_rules('firstname','First Name','alpha|min_length[4]');
    $this->form_validation->set_rules('lastname','Last Name','alpha|min_length[4]');
    $this->form_validation->set_rules('email','Email','trim|valid_email');
    $this->form_validation->set_rules('username','Username','is_unique[user.username]|alpha|min_length[2]');
    $this->form_validation->set_rules('password','Password','numeric|min_length[2]');
    $this->form_validation->set_rules('repassword','RePassword','numeric|min_length[2]');

    if($this->form_validation->run()){
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $repassword=$_POST['repassword'];

      $this->load->model('loginM');
      if($password==$repassword){
        if($this->loginM->register_user($firstname,$lastname,$email,$username,$password)){
          echo "<script>alert('register successful');window.location.href='index';</script>";
        }
        else{
          echo "<script>alert('something went wrong');</script>";
        }

      }
      else{
        echo "<script>alert('password does not match');</script>";
      }
    }
    else{
      echo validation_errors();
    }
  }

  public function logout(){
    $this->session->unset_userdata('username');
    $this->session->sess_destroy();
    return redirect ('loginC');
  }
}
 ?>
