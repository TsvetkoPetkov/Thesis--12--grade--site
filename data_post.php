<?php
 
// Connect to the database 

include("connect.php");
		
// Insert Form Data to the database 

	$statement = $mysqli->prepare("INSERT INTO ceco_database (name, email , message) VALUES(?, ?,  ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $name, $email, $message); //bind values and execute insert query
	
	if($statement->execute()){
		print "Здравейте, " .$name. "! Вашето съобщение беше изпратено успешно!";
                $url='http://cecooopetkov.bg.cm/contactUs.html';
                echo '<script>window.location = "'.$url.'";</script>';
                die;
                
	}else{
		print $mysqli->error; //show mysql error if any
	}


// Read From the database and display in the table

include("data_get.php");


?>