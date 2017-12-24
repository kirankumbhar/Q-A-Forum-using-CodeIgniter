<?php
class QuestionC extends CI_Controller{
  public function index(){

    echo "question page";
  }
  public function display($id){
    //echo $id;
    $this->load->model('questionM');
    $data['rows']=$this->questionM->get_question_answer($id);
    $data['id']=$id;
    $data2=$this->questionM->get_answer($id);
     $data['ansid']=$data2['ansid'];
    $data['results']=$data2['results'];
    //echo rows['question'];
    $this->load->view("questionV",$data);
  }

  public function addquestion(){
    //echo "page to add your question";
    $this->load->view('addquestionV');

  }

  public function add(){
    $question=$_POST['question'];
    $username=$this->session->userdata('username');
    $this->load->model('questionM');
    $result=$this->questionM->add_question($question,$username);

    if($result==1){
      echo "<script>
        alert('succesfully added question');
      </script>";
      return redirect('dashboardC');
    }
    else{
      echo "<script>alert ('error');</script>";
    }
  }
}
?>
