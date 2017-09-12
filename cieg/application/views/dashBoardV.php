<html>
<head>
<link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
<script>
  function login(){
    window.location.href='loginC';
  }
  function addq(){
    window.location.href="questionC/addquestion";
  }
  function signup(){
    window.location.href='loginC/register';
  }
  function logout(){
    window.location.href="loginC/logout";
  }
</script>
</head>
<body>
  <div id="heading">
	<a href="<?php echo site_url("dashboardC")?>"><h1>Q&A FORUM</h1></a>
	</div>
  <hr>
  <?php
    if($this->session->userdata('username')){
      $username=$this->session->userdata('username');
      ?>
      <div id="divid" style="position:absolute; top:120;right:105;"><p id="welcome"><?php echo 'welcome '.$username?>
    	</p>
    	<br><br>
    	<button id="logout" type="submit" onclick="logout()">logout</button>
    	<button id="addquestion" type="submit" onclick="addq()">Add question</button>
    	</div>
      <?php
    }
    else{
      ?>
      <div>
	<button id="login" type="submit" onclick="login()">login</button>
	<button id="signup" type="submit" onclick="signup()">Signup</button>
	</div>
      <?php
    }

    foreach($rows as $row){
      echo '<div id="qdisplay">';
      	echo '<div id="askedby">';
      		echo 'Asked by: '.$row['usrname'];
      	echo'</div><br><br>';
        ?> <a href= <?php echo site_url("questionC/display")."/".$row['qid'];?>>
          <?php
      echo $row['question']."</a>"."<br><br>";
      echo '</div><hr>';
    }
   ?>
</body>
</html>
