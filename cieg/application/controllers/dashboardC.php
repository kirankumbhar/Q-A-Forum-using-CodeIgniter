<?php
  class DashboardC extends CI_Controller{
    public function index(){
      $username=$this->session->userdata('username');
      //echo "welcome $username";
      $this->load->model('DashboardM');
      $data['rows']=$this->DashboardM->get_questions();
      $this->load->view('dashboardV',$data);
    }
  }
 ?>
