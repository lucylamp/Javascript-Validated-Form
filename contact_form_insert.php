<?php
//File for inserting data from form 'contact_form'. 
//Inserting into table 'contactForm', Media Temple database 'db203089_contact_form'
?>
<!-- <html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Contact Form Insert</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> -->
	<?php
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$subject= $_POST['subject'];
	$message = $_POST['message'];

    
	$dbc = mysqli_connect('internal-db.s203089.gridserver.com', 'db203089', 'aZlml2?!aZ', 'db203089_contact_form') or die('Error connecting to DB');

	$query = "INSERT INTO demoContactForm (firstname, email, subject, message) " . "VALUES ('$firstname', '$email', '$subject', '$message'); ";

	$result = mysqli_query($dbc, $query)or die('Error connecting to db203089');

	mysqli_close($dbc);
	?>
	<div class="form-response-message">
		<blockquote>
			<?php	
	//Response generated after submitting the form.
			 echo 'Thanks for contacting me, ' . $firstname . '. <br> ' ;  
			 echo 'I will reply to your email ' . '"' . $subject . '"' . 'as soon as possible.'
			?>
		</blockquote>
	</div>
<!-- </body>
</html> -->


