<?php
// Md. Asad MOndall (20cse006)
	$servername = "sql303.infinityfree.com";
	$username = "if0_34470249";
	$password = "DwnVMJA75POsKN";
	$db="if0_34470249_crudlabtest";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
    //echo "Connected successfully";
	
	
?>
