<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div id="heading">
  	<a href="<?php echo site_url("dashboardC")?>"><h1>Q&A FORUM</h1></a>
  	</div>
    <hr>
    <h1 align="center">Login</h1>

      <?php echo form_open('loginC/login'); ?>
    <table align="center">
      <tr>
        <td>Username:</td>
        <td><?php echo form_input(['name'=>'username','placeholder'=>'Enter username','required'=>'true','value'=>set_value('username')]);  ?></td>

      </tr>
      <tr>
        <td>Password:</td>
        <td><?php echo form_password(['name'=>'password','placeholder'=>'Enter password','required'=>'true']); ?></td>
      </tr>
    </table>
    <div align="center">
      <br/>
    <?php echo form_submit(['name'=>'submit','value'=>'Login']); ?>
    <?php echo form_reset(['name'=>'reset','value'=>'Reset']); ?>
  </div>
  <div align="center"><?php echo validation_errors(); ?></div>
  </form>
  </body>
</html>
