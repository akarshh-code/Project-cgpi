<?php 
	$server_name="localhost";
	$user_name="root";
	$password="";
	$database_name="razer";

	$conn= mysqli_connect("$server_name","$user_name","$password","$database_name");

	if(!$conn)
	{
		die("enable to connect". mysqli_connect_error());
	}
	else{
		if(isset($POST['save']))
	{
			$username= $POST['username'];
			$pw = $POST['pw'];
			$phone = $POST['phone'];
			$email= $POST['email'];

			$sql= "INSERT INTO registration
			 VALUES ('$username','$pw','$phone','$email')";

			if (mysqli_query($conn, $sql)) {
				echo "user is successfully registered";
			}
			else{
				echo "error". $sql ."". mysqli_error($conn);		
			}
			mysqli_close($conn);
	} 	
	}
	
?>