<?php
session_start();
ob_start();
$server_name ="localhost";
$database_user = "root";
$database_password = "";
$database_name = "register";

//create connection //
$conn = new mysqli($server_name,$database_user,$database_password,$database_name);
if ($conn->connect_error) {
	die("error connecting to the server".$conn->connect_error);
}
else{
	//echo "<script>
    //  alert ('connected successfully')
	//</script>";
}

if (isset($_POST["submit"])) {
 $fullname =$_POST ["fullname"];
 $username =$_POST ["username"];
 $email =$_POST ["email"];
 $phone_no =$_POST ["phone_no"];
 $gender =$_POST ["gender"];
 $date_of_birth =$_POST ["date_of_birth"];
 $password =$_POST ["password"];
 $confirm_password =$_POST["confirm_password"];

 if ($password!=$confirm_password) {
 	//die("password mismatched".$conn->connect_error);//
 	echo "<script> alert ('password mismatched')</script>";
 }

 else{
 	$ins=" INSERT INTO form VALUES(NULL,'$fullname','$username','$email','$phone_no','$gender','$date_of_birth','$password',NULL)";
    $result=$conn->query($ins);
    if ($result==true) {
    	$login="record inserted successfully";
    	echo "<script> alert ('record inserted successfully')</script>";
    }
    else{
    	echo "error".$conn->error;
    }

 }






}
?>