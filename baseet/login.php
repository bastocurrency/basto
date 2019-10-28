<?php
//connection statement//
session_start();
ob_start();

$server_name = "localhost";
$database_user = "root";
$database_password ="";
$database_name ="signup";

$conn = new mysqli($server_name,$database_user,$database_password,$database_name);
if ($conn->connect_error) {
	die("connection error".$conn->connect_error);
}
else{
	//echo "<script>
   //       alert('connected successfully')
	//</script>";
}

if (isset($_POST["login"])) {
	$Username = $_POST["Username"];
	$password =$_POST["password"];
	$sel="SELECT * FROM form WHERE username='$Username' AND password='$password'";
	$result = $conn->query($sel);
	if ($result->num_rows > 0) {
		# code...
		//echo "you are now logged In successfully";
		echo "<script> alert ('you are now logged in successfully')</script>";

		while ($row = $result->fetch_assoc()) {
		# code...
		//echo $id = $row['id'];
		//echo $username = $row ['username'];
		//echo $password = $row ['password'];
        $_SESSION["id"] = $row['id'];
	$_SESSION["Username"] = $row['Username'];
    $_SESSION["fullname"] = $row['fullname'];
	
     header('location:upload.php');

	// IS USED TO FETCH INFORMATION FROM THE DATABASE TO THE PAGE YOU ARE REFERRRING TO//


	}
	}
	else{
		echo "Error".$conn->error;
	}

}





















?>