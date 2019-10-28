<?php
// this is the php code that will work for the image.php//
session_start();
ob_start();
error_reporting(0);
$server_name = "localhost";
$database_user = "root";
$database_password ="";
$database_name ="register";

$conn = new mysqli($server_name,$database_user,$database_password,$database_name);
if ($conn->connect_error) {
	die("connection error".$conn->connect_error);
}
else{
	//echo "<script>
      //    alert('connected successfully')
	//</script>";
}

if(isset($_FILES['image'])){
	$error =array();
	$file_name =$_FILES["image"]["name"];
	$file_size =$_FILES["image"]["size"];
	$file_tmp =$_FILES["image"]["tmp_name"];
	$file_type =$_FILES["image"]["type"];
	 $description = $_POST["description"];
	$file_ext =strtolower(end(explode(".",$file_name)));
	$format_accepted = array("jpg","jpeg","png","img",);

	if(in_array($file_ext,$format_accepted)===False){
   $error [] = "extension not allowed, please choose a JPEG or PNG files";
	}

	if($file_size>2097152){
		$error[]="file must be exactly 2mb";
	}
$name = $file_name;
	if(empty($error)==true){
		move_uploaded_file($file_tmp,"pictures/".$file_name);
		$ins="INSERT INTO image VALUES(NULL,'$name','$description', NULL)";
		$result = $conn->query($ins);

		if($result==true){
			
			echo "<script> alert('Success')</script>";
		}

		//echo "<script> alert('Success')</script>";
		}
		else{
			var_dump($error);
		}

		
	}

	//var_dump($format_accepted); to test for the $format_accepted = array("jpg","jpeg","png","img",);//
// 

?>