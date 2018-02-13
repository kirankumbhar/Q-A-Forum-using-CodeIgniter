<?php
  class UpvoteC extends CI_Controller{
    public function index(){

    }
    public function vote(){
      //echo "hello from upvote";
      $id=$this->input->post('id');
      $this->load->model('upvoteM');
      $votecount=$this->upvoteM->get_votecount($id);
      //echo $votecount;
    }
  }
 ?>
