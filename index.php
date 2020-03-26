//THIS PART NEED TO BE AT THE TOP
<?php
	$errName = "";
	$errEmail = "";
	$errMessage = "";
	$result = "";

	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to = 'PUT YOUR EMAIL HERE';
		$subject = 'Message from Personal Website';

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

	// If there are no errors, show posted data
	if (!$errName && !$errEmail && !$errMessage) {
		$result='<div><strong>Thank You!</strong> I will be in touch</div>';
	}
	else {
		$result='<div><strong>Sorry!</strong> there was an error sending your message. Please try again later.</div>';
	}

	$headers = 'Reply-To: '.$email."\r\n" .
	'From: '.$name."\r\n".
	'Message: '.$message."\r\n".
	'X-Mailer: PHP/' . phpversion();
	@mail($to, $subject, $headers);

}
?>

<!--THIS CAN GO ANYWHERE ON YOUR WEBSITE -->
<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Message me
                    </h5>
                  </div>
                  <div>
										<form class="contactForm" role="form" method="post" action="index.php">
											<div class="row">
												<div class="col-md-12 mb-3">
													<div class="form-group">
															<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" data-rule="minlen:4" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" required>
															<?php echo "<p class='text-danger'>$errName</p>";?>
														</div>
													</div>
													<div class="col-md-12 mb-3">
														<div class="form-group">
																<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" data-rule="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
																<?php echo "<p class='text-danger'>$errEmail</p>";?>
															</div>
														</div>
														<div class="col-md-12 mb-3">
															<div class="form-group">
																	<textarea class="form-control" rows="4" name="message" data-msg="Please write me something" placeholder="Message" required><?php if(isset($_POST['message'])) echo htmlspecialchars(isset($_POST['message'])); ?></textarea>
																	<?php echo "<p class='text-danger'>$errMessage</p>";?>
																</div>
															</div>
															<!--<div class="col-md-12 mb-3">
																<div class="form-group">
																		<input class="form-control" name="file" type="file" id="file"></input>
																	</div>
																</div>-->
															<div class="col-md-12">
																<div class="form-group">
																		<input id="submit" name="submit" type="submit" value="Send" class="button button-a button-big button-rouded submit">
																	</div>
																</div>
																</div>
															</form>
                						</div>
													</div>
                						<div class="col-md-6">
                  					<div class="title-box-2 pt-4 pt-md-0">
                    					<h5 class="title-left">
                      					Get in Touch
                    					</h5>
                  					</div>
                  					<div class="more-info">
                    					<p class="lead">
                      					put some info here
                    				</p>
                    			<ul class="list-ico">
                      		<li><span class="ion-email"></span> example@gmail.com</li>
                    		</ul>
                  		</div>
                  		<div class="socials">
                    		<ul>
                      		<li><a href="put github url here"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      	<li><a href="put instagram url here"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      	<li><a href="put twitter url here"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                    	</ul>
                  	</div>
                	</div>
              	</div>
            	</div>
          	</div>
        	</div>
      	</div>
    	</div>
