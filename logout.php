<?php
// Md. Asad MOndall (20cse006)
	session_start();
	if(session_destroy())
	{
		header('location:index.php');
	}
?>