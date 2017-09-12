<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <h1 align="center">Register</h1>

      <?php echo form_open('loginC/register'); ?>
    <table align="center">
      <tr>
        <td>first name:</td>
        <td><?php echo form_input(['name'=>'firstname','placeholder'=>'Enter firstname','required'=>'true']);  ?></td>
      </tr>
      <tr>
        <td>last name:</td>
        <td><?php echo form_input(['name'=>'lastname','placeholder'=>'Enter lastname','required'=>'true']);  ?></td>
      </tr>
      <tr>
        <td>email:</td>
        <td><?php echo form_input(['name'=>'email','placeholder'=>'Enter email','required'=>'true']);  ?></td>
      </tr>
      <tr>
        <td>Username:</td>
        <td><?php echo form_input(['name'=>'username','placeholder'=>'Enter username','required'=>'true','value'=>set_value('username')]);  ?></td>

      </tr>
      <tr>
        <td>Password:</td>
        <td><?php echo form_password(['name'=>'password','placeholder'=>'Enter password','required'=>'true']); ?></td>
      </tr>
      <tr>
        <td>Enter Password again:</td>
        <td><?php echo form_password(['name'=>'repassword','placeholder'=>'Enter password again','required'=>'true']); ?></td>
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
