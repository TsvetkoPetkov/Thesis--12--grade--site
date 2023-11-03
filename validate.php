<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form
	
	$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

	if (empty($name)){
		die("Please enter your name");
	}
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
	if (empty($message)){
		die("Please fill the blank space");
	}
}

?>



