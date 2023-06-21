
<?php
// Md. Asad MOndall (20cse006)
include "dbconnect.php";

$name=$_POST['f_name'];
$password=$_POST['f_password'];
$age=$_POST['f_age'];
$email=$_POST['f_email'];

$sql = "INSERT INTO user_info(user_id  ,user_name ,password , age, email)
		VALUES (NULL, '$name', '$password', '$age','$email')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

