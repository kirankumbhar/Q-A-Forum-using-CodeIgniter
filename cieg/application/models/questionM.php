<?php
  class QuestionM extends CI_Model{

    public function get_question_answer($id){
        //echo $id;
      $stmt=$this->db->conn_id->query("select * from question where qid= '".$id."' ");
      //$stmt->bindParam("id",$id);
       $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;

    }
    public function get_answer($id){
      $ansid=0;
      $votes=0;
      $allvoteresults=array();
      $stmt1=$this->db->conn_id->query("select * from answer where quesid='".$id."'");
				while($row=$stmt1->fetch(PDO::FETCH_ASSOC)){

					$ansid=$row['ansid'];
          //echo $row['ansid'];
					$stmt2=$this->db->conn_id->query("select * from answer where ansid='".$ansid."'");
          $voteresults=$stmt2->fetchAll(PDO::FETCH_ASSOC);
          $allvoteresults[]=$voteresults;
					while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
						if($stmt2->rowCount()>0){
							$votes=$row2['votes'];
						}
					}
    }
    $stmt3=$this->db->conn_id->query("select * from answer where quesid='".$id."'");
    $results=$stmt3->fetchAll(PDO::FETCH_ASSOC);
    return array('ansid'=>$ansid,'results'=>$results);
  }
}
?>
