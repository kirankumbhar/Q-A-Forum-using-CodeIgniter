<?php
  class DashboardM extends CI_Model{
    public function get_questions(){
      $stmt=$this->db->conn_id->query("select * from question ");
	    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
}
?>
