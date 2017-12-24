<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">

    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body background="<?php echo base_url('images/background.jpg') ?>">
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-3">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="<?php echo site_url("dashboardC")?>"><h2> QA Forum</h2></a>
    </div>
    
   
  </div>
</nav>
<div class="container">
    <h1 align="center">Login</h1>

      <?php echo form_open('loginC/login'); ?>
    <div class="form-group">
      <tr>
        <label>Username:</label>
        <div class="form-group"><?php echo form_input(['name'=>'username','placeholder'=>'Enter username','class'=>'form-control','required'=>'true','value'=>set_value('username')]);  ?></div>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <div><?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter password','required'=>'true']); ?>
          
        </div>
      
    </div>
    <div align="center">
      <br/>
    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-outline-secondary','value'=>'Login']); ?>
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-outline-secondary','value'=>'Reset']); ?>
  </div>
  <div align="center"><?php echo validation_errors(); ?></div>
  </form>
  </div>
  </body>
</html>
