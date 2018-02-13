<?php
class AddanswerC extends CI_Controller{
  public function index(){

  }
  public function add(){
   
    $username=$this->session->userdata("username");
    $qid=$this->input->post('id');
    $answer=$this->input->post('txt');
    $stmt=$this->db->conn_id->prepare("insert into answer(username,quesid,answer)values(?,?,?)");
    $stmt->bindValue(1,$username);
    $stmt->bindvalue(2,$qid);
    $stmt->bindValue(3,$answer);
    $stmt->execute();
    $show=$this->db->conn_id->query("Select * from answer where username= '".$username ."' and quesid='".$qid."'");
    while($row=$show->fetch(PDO::FETCH_ASSOC)){
	     if($show->rowCount()>0){
	        $result=$row['username']."<br>".nl2br($row['answer'])."<br><br>";
          
        }
    }
    return $result;
    //echo "alert from controller";
  }
}
 ?>
