<html>
  <head>
      <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
      <script>
      </script>
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
      <li><a href="<?php echo site_url("loginC/register")?>"><button type="button" class="btn btn-secondary">Sign Up</button></a></li>&nbsp
      <li><a href="<?php echo site_url("loginC")?>"><button type="button" class="btn btn-secondary">Log In</button></a></li>
       <?php
    }?>
    </ul>
  </div>
</nav>
<div class="container">
    <?php $question_id=$id;  ?>

    <?php foreach ($rows as $row){ ?>

    <br>
    <div id="question">
		<?php echo "Asked by: " .$row['usrname']."<br><br>";
		echo $row['question'];"<br><br>";
		?>
		</div>
    <?php if($this->session->userdata("username")){
      ?>
      <br><br>
				<button class="btn btn-secondary" id="ans" type="submit">Answer</button>
      <?php
      } ?>

		<div id="answer">
		<form class="form-group" method="POST">
			<textarea name="txt" class="form-control" rows=10 ></textarea>
			<input type="hidden" name="id" value="<?php echo htmlspecialchars($question_id);?>">
			<br>
			<button id="anspost" class="btn btn-secondary" type="submit">POST</button>
		</form>
		</div>
		<br><br>
    <div id="allanswers">
      <?php foreach ($results as $result) {
        ?>
        <div id="eachanswer">
        <?php
      echo"Answered By: " .$result['username']."<br><br>";

					echo nl2br($result['answer'])."<br><br>";
					?>

          <div class="votecount" id="<?php echo $result['ansid']; ?>"><?php echo $result['votes']; ?></div>
          <button name="up" class=' votebtn btn btn-secondary' id="<?php echo $result['ansid']; ?>"><img style='float:right' width="40" height="40" src="<?php echo base_url('images/up.png') ?>"/></button>
          <button name="down" class='votebtn btn btn-secondary' id="<?php echo $result['ansid'];?>"><img style='float:right' width="40" height="40" src="<?php echo base_url('images/down.png') ?>"/></button>
          </div>
					<hr id='afterans'/>
          <?php
      }?>
      </div>

<?php } ?>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/show.js" ></script>
  </body>
  </head>
</html>
