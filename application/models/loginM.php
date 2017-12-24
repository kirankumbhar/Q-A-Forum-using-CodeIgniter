<?php
  class loginM extends CI_Model{
    public function validate_login($username,$password){
      $stmt=$this->db->conn_id->query("select * from user where username='".$username."' and password='".$password."'");
      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        if($stmt->rowCount()>0){
          return true;
        }
        else{
          return false;
        }
      }
    }

    public function register_user($firstname,$lastname,$email,$username,$password){
      $stmt2=$this->db->conn_id->prepare("insert into user(firstname,lastname,email,username,password) values(?,?,?,?,?)");
      $stmt2->bindValue(1,$firstname);
      $stmt2->bindValue(2,$lastname);
      $stmt2->bindValue(3,$email);
      $stmt2->bindValue(4,$username);
      $stmt2->bindValue(5,$password);
      $stmt2->execute();
      return true;
    }
  }
?>
