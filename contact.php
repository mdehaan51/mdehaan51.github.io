
<html>
<head>
</head>
<body>

<?php
if($_POST["submit"]){
	$recipient="mdehaan51@gmail.com";
	$subject="Email for DeHaan Development";
	$sender=$_POST["name"];
	$senderEmail = $_POST["sender-email"];
	$message=$_POST["message"];
	$mailBody = "Name: $name\nEmail: $sender-email\n\n$message";


	if(!$_POST['name']){
		$errName = "Please enter your name";
	}

	if(!$_POST['sender-email'] || !filter_var($_POST['sender-email'],FILTER_VALIDATE_EMAIL)){
		$errEmail = "Please enter a valid email";
	}

	if(!$_POST['message']){
		$errMessage = "Please enter your message";
	}

	if(!$errName && !$errEmail && !$errMessage){
	if(mail($recipient, $subject, $mailBody, $sender)){;
		$result = "<p>Thank you! Your message has been sent.</p>"
	} else {
		$result = "<p>Sorry! There was an error! Please try again!</p>";

}}}
?>
</body>
</html>