<?php 

	$message = open_message();
 ?>
 <div div="message">
 	<h6>Изпратено от <?php echo $message['username']; ?></h6>
 	<h6>Изпратено на <?php echo $message['created_at']; ?></h6>
 	<h2><?php echo $message['title'] ?></h2>
 	<br>
 	<br>
 	<br>
 	<br>
 	<p><?php echo $message['body']; ?></p>

 </div>