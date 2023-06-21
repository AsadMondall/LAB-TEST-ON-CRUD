<?php
// Md. Asad MOndall (20cse006)
	$servername = "sql213.infinityfree.com";
	$username = "if0_34471923";
	$password = "79DcYdEsgy2jhXY";
	$db="if0_34471923_productbuy_sell";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
    //echo "Connected successfully";
	
	
?>