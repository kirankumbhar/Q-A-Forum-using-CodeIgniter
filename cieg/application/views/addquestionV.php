<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
    <meta charset="utf-8">
    <title></title>
    <script>
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
    <?php $username=$this->session->userdata('username'); ?>
    <div id="divid" style="position:absolute; top:120;right:105;"><p id="welcome"><?php echo 'welcome '.$username?>
    </p>
    <br><br>
    <button id="logout" type="submit" onclick="logout()">logout</button>
    </div>
    <br>
    <div id="addqform">
			<h1>Add your question here</h1>
			<br><br>
			<form action="addquestion.php" method="POST">
			<textarea id="q" name="question" rows="20" cols="70" required></textarea>
			<br><br>
			<button id="questionsubmit" type="submit">Submit</button>

		</div>

  </body>
</html>
