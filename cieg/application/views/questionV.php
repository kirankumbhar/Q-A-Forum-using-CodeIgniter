<html>
  <head>
      <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
      <script>
      </script>
  </head>
  <body>
    <div id="heading">
	     <a href="<?php echo site_url("dashboardC")?>"><h1>Q&A FORUM</h1></a>
	  </div>
	  <br><br>
    <?php $username=$this->session->userdata('username'); ?>
    <div id="divid" style="position:absolute; top:120;right:105;"><p id="welcome"><?php echo 'welcome '.$username?>
    </p>
    <br><br>
    <button id="logout" type="submit" onclick="logout()">logout</button>
    </div>
    <?php $question_id=$id;  ?>

    <?php foreach ($rows as $row){ ?>


    <div id="question">
		<?php echo "Asked by: " .$row['usrname']."<br><br>";
		echo $row['question'];"<br><br>";
		?>
		</div>
    <?php if($this->session->userdata("username")){
      ?>
      <br><br>
				<button id="ans" type="submit">Answer</button>
      <?php
      } ?>

		<div id="answer">
		<form method="POST">
			<textarea name="txt" rows=10 cols=60></textarea>
			<input type="hidden" name="id" value="<?php echo htmlspecialchars($question_id);?>">
			<br>
			<button id="anspost" type="submit">POST</button>
		</form>
		</div>
		<br><br><br><br>
    <div id="allanswers">
      <?php foreach ($results as $result) {
        # code...
      //  echo $result['ansid'];
      echo"Answered By: " .$result['username']."<br><br>";
      echo"<div style='float:right'>";


      ?>
      <p align="center" class="display" id="<?php echo $result['ansid']; ?>"><?php echo $result['votes']; ?></p>

					<button name="up" class='votebtn' id="<?php echo $result['ansid']; ?>"><img style='float:right' src="<?php echo base_url('images/up.png') ?>"/></button>
					<button name="down" class='votebtn' id="<?php echo $result['ansid'];?>"><img style='float:right' src="<?php echo base_url('images/down.png') ?>"/></button><br></div>



					<?php

					echo nl2br($result['answer'])."<br/><br><br>";
					?>

					<hr id='afterans'/>
          <?php
      }
      ?>
    </div>



<?php } ?>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/show.js" ></script>

  </body>
  </head>
</html>
