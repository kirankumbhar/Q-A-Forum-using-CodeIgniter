<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
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
      <div id="reg" class="form-group">
        <h1>Register</h1>
      <?php echo form_open('loginC/register'); ?>
        <label>first name:</label>
        <div class="form-group col-sm-6"><?php echo form_input(['name'=>'firstname','placeholder'=>'Enter firstname','class'=>'form-control','required'=>'true']);  ?></div>
     
        <label>last name:</label>
        <div class="form-group col-sm-6"><?php echo form_input(['name'=>'lastname','placeholder'=>'Enter lastname','class'=>'form-control','required'=>'true']);  ?></div>
        <label>email:</label>
        <div class="form-group col-sm-6"><?php echo form_input(['name'=>'email','placeholder'=>'Enter email','class'=>'form-control','required'=>'true']);  ?></div>
        <label>Username:</label>
        <div class="form-group col-sm-6"><?php echo form_input(['name'=>'username','placeholder'=>'Enter username','class'=>'form-control','required'=>'true','value'=>set_value('username')]);  ?></div>
        <label>Password:</label>
        <div class="form-group col-sm-6"><?php echo form_password(['name'=>'password','placeholder'=>'Enter password','class'=>'form-control','required'=>'true']); ?></div>
        <label>Enter Password again:</label>
        <div class="form-group col-sm-6"><?php echo form_password(['name'=>'repassword','placeholder'=>'Enter password again','class'=>'form-control','required'=>'true']); ?></div>
      <br/>
    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-secondary','value'=>'Sign Up']); ?>
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-secondary','value'=>'Reset']); ?>
  </div>
  <div align="center"><?php echo validation_errors(); ?></div>
  </form>
</div>
  </body>
</html>
