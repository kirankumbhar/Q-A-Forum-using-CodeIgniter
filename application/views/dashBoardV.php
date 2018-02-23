<html>
<head>
  
<link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">

</head>
<body background="<?php echo base_url('images/background.jpg') ?>" >
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-3">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="<?php echo site_url("dashboardC")?>"><h2> QA Forum</h2></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <?php
    if($this->session->userdata('username')){
      $username=$this->session->userdata('username');
      ?>
      <li class="list-group-item"><?php echo 'welcome '.$username?></li>&nbsp
      <li><a href="<?php echo site_url("questionC/addquestion")?>"><button type="button" class="btn btn-secondary"><h5>Ask Question</h5></button></a></li>&nbsp
      <li><a href="<?php echo site_url("loginC/logout")?>"><button type="button" class="btn btn-secondary"><h5>Log out</h5></button></a></li>

      <?php
    }
    else{
      ?>
      <li><a href="<?php echo site_url("loginC/register")?>"><button type="button" class="votebtn btn btn-secondary">Sign Up</button></a></li>&nbsp
      <li><a href="<?php echo site_url("loginC")?>"><button type="button" class="votebtn btn btn-secondary">Log In</button></a></li>
       <?php
    }?>
    </ul>
  </div>
</nav>

	<div class="container">
  <hr>     
<?php
    foreach($rows as $row){
      echo '<div id="qdisplay">';
      	echo '<div id="askedby">';
      		echo 'Asked by: '.$row['usrname'];
      	echo'</div><br><div id="questiontext">';
        ?> <a href= <?php echo site_url("questionC/display")."/".$row['qid'];?>>
          <?php
      echo $row['question']."</a>"."<br></div>";
      echo '</div><hr>';
    }
   ?>
   </div>
</body>
</html>
