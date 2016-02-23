<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Yunxia Wang - Contact</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<!--use header.php in the components folder for all pages' header to make consistency-->
	<?php include 'components/header.php'; ?>

	<!--contact information-->
	<div id="contact_info">
		<h1>Contact Me</h1>
		<p>Phone: 607-307-9117</p>
		<p>Email: yw747@cornell.edu</p>
		<p>126 Westbourne Ln Apt 12</p>
		<p>Ithaca, NY 14850</p>
	</div>

	<!--php form to send messages, use sticky forms-->
	<?php include "scripts/stickform.php"; ?>
	<div id="send_message">
		<h2>Send Me a Message</h2><span class="error">* required field</span>
		<form id="sticky_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">			
			<label>Name</label>
			<input 
				type="text" name="name" 
				value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"/>
			<span class="error">* <?php echo "$nameErr";?></span><br>
			<label>Email</label>
			<input 
				type="email" name="email"
				value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"/>
			<span class="error">* <?php echo "$emailErr";?></span><br>
			<label>Subject</label>
			<input 
				type="text" name="subject"
				value="<?php if(isset($_POST['subject'])) echo $_POST['subject']; ?>"/>
			<span class="error">* <?php echo "$subjectErr";?></span><br>
			<label>Message</label><br>
			<textarea 
				name="message" rows="10"><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
			<span class="error">* <?php echo "$messageErr";?></span><br>
			<input class="submit" type="submit" name="submit" value="Send!">
			<span class="error"><?php echo $submitInfo;?></span><br>
		</form>
	</div>

	<div id="message_info">
		<?php
        	echo "<h2>Your Message:</h2>";
        	echo "<p>Name: $name </p>";
        	echo "<p>Email: $email </p>";
        	echo "<p>Subject: $subject </p>";
        	echo "<p>Message:<br>$message</p>";
    	?>
	</div>


	<!--use footer.php in the components folder for all pages' footer to make consistency-->
	<?php include 'components/footer.php'; ?>
</body>
</html>