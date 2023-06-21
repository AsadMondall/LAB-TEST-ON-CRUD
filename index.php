

<?php
// Md. Asad MOndall (20cse006)
	session_start(); //this function is used to put value in $_SESSION supergolbal variable
	include "dbconnect.php";
	
	//following two variables ($msg and $x) are used to show the message if password or username wrong
	$msg=""; 
	$x=0;
	
	if(isset($_POST['login'])){  //isset is a function which is used to check whether a variable hold a value or not
	
		$name=$_POST['f_name'];
		$pass=$_POST['f_pass'];
		$sql="SELECT * FROM user_info WHERE password='$pass'";
		
		$result=$conn->query($sql);
		$r=$result->fetch_assoc();
		//echo $result->num_rows;
		if($result->num_rows==1){
			$_SESSION['name']=$r['name'];
			$_SESSION['pass']=$r['pass'];
		

			header('location:crud.php');
			//echo "successfully logged in";
		}
		else {
			$x=1;
			$msg="<span style='color:red; font-weight:bold;'> Name  or Password is invalid!!!! </span>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Login</h1>
		<?php
			//if password or username wrong then this code will be executed
			if($x==1){ 
			 echo $msg;
			 }
		?>
		<form method="POST" action="index.php">
			<label>User Name:</label>
			<input type="text" placeholder="Enter user_name:" name="f_name"> <br> <br>
			<label>Password:</label>
			<input type="text"  placeholder="Enter user_password" name="f_pass" > <br> <br>
			<input type="submit" name ="login" value="Login">
			<p> Haven't account? <a href="userinfo.php"> Register Here</a> </p>
		</form>
	</center>	
	
</body>
</html>
