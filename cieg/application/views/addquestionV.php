<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <meta charset="utf-8">
    <title></title>
    <script>
    function logout(){
      window.location.href="loginC/logout";
    }
    </script>
  </head>
  <body background="<?php echo base_url('images/background.jpg') ?>">
    
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
      <li><a href="<?php echo site_url("dashboardC")?>"><button type="button" class="btn btn-secondary"><h5>Home</h5></button></a></li>&nbsp
      <li><a href="<?php echo site_url("loginC/logout")?>"><button type="button" class="btn btn-secondary"><h5>Log out</h5></button></a></li>

      <?php
    }
    else{
      ?>
      <li><a href="<?php echo site_url("loginC/register")?>"><button type="button" class="btn btn-secondary">Sign Up</button></a></li>&nbsp
      <li><a href="<?php echo site_url("loginC")?>"><button type="button" class="btn btn-secondary">Log In</button></a></li>
       <?php
    }?>
    </ul>
  </div>
</nav>
<br>
<div class="container">
    <div id="addqform">
			<h1>Add your question here</h1>
			<br><br>
      <div class="form-group">
			<form action="add" method="POST">
			<textarea class="form-control" id="q" name="question" rows="10"  required></textarea>
      
			<br><br>
			<button class="btn btn-secondary" type="submit"><h5>Submit</h5></button>
      </div>

		</div>
    </div>
  </body>
</html>
