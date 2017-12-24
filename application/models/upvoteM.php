<?php
  class UpvoteM extends CI_Model{
    public function get_votecount($id){
      $username=$this->session->userdata('username');
      $count=0;
      $userid=0;
      $votecount=0;
      if($this->session->userdata('username')){
      $stmt=$this->db->conn_id->query("select * from user where username='".$username."'");
    	while($row1=$stmt->fetch(PDO::FETCH_ASSOC)){
    		if($stmt->rowCount()>0){
    			$userid=$row1['uid'];
    		}
	    }

      $stmt1=$this->db->conn_id->query("select * from vote where answerid='".$id."' and userid='".$userid."' ");
    	while($row=$stmt1->fetch(PDO::FETCH_ASSOC)){
    		if($stmt1->rowCount()>0){
    			$count=$count+1;
    		}
    	}

      if($count==0){
    		$stmt2=$this->db->conn_id->prepare("update answer set votes=votes+1 where ansid='".$id."'");
    		$stmt2->execute();

    		$stmt3=$this->db->conn_id->prepare("insert into vote(answerid,userid)values(?,?)");
    		$stmt3->bindValue(1,$id);
    		$stmt3->bindValue(2,$userid);
    		$stmt3->execute();

    		$stmt4=$this->db->conn_id->query("select * from answer where ansid='".$id."' ");
    		while($row3=$stmt4->fetch(PDO::FETCH_ASSOC)){
    			if($stmt4->rowCount()>0){
    				$votecount=$row3['votes'];
    			}
    		}
    			echo $votecount;
	    }



    }
  
  }
  }
?>
