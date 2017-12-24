<?php
  class DownvoteC extends CI_Controller{
    public function index(){

    }
    public function vote(){
      //echo "hello from upvote";
      $id=$this->input->post('id');
      $this->load->model('downvoteM');
      $votecount=$this->downvoteM->get_votecount($id);
      //echo $votecount;
    }
  }
 ?>
