<?php
session_start();
ob_start();

//echo $Username = $_SESSION['username'];
//echo $fullname = $_SESSION['fullname'];
$username = $_SESSION['username'];
$fullname = $_SESSION['fullname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
body,html{
       background:rgba(26,26,26,0.3);
       height:100vh;
}

*{
	box-sizing: border-box;
	padding:;
	margin:;
}

nav{
   border: 1px solid black;
   background: #1a1a1a;
   border-radius: 10px;
}

nav li{
	list-style: none;
	display: inline;
}

nav li a{
	padding: 15px 20px;
	text-decoration:none; 
	color: white;
	font-family: verdana;
	font-weight: bold;
}	

a:hover{
	border-bottom: 4px solid rgb(64,230,64);
}

.active{
	background:rgb(64,230,64);
	border-radius: 15px;
}

.main{
	border:hidden;
	width: 100%;
	height: 500px;
	margin: 
}	

.content{
	border: 2px solid white;
	width: 40%;
	height: 400px;
	margin-top:20px; 
	margin-left: 28%;
	border-radius: 15px;
}	

form{
	margin-left: 20px;
	margin-top: 30px;
}

.footer{
	border: 2px solid black;
	background:black;
	padding:0px;
	margin: 0px;
	width: 100%;
	height:100px;
	position: relative;
}

.footer .footer_bottom{
	color: white;
	width: 100%;
	background:rgba(26,26,26,0.7);
	bottom: 0px;
	left: 0px;
	position: absolute;
	text-align: center;
}

.footer a{
	text-decoration: none;
}
 .footer a:hover{
 	text-decoration: none;
 	background-color: none; 
 }
</style>

</head>
<body>
	<nav class="topnav" id="mytopnav">
		<ul>
			<li><a href="home.php" >Home</a></li>
			<li><a href="gallery.php" >Gallery</a></li>
			<li><a href="upload_picture.php" class="active">Upload your picture</a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li><a href="javascript:void(0);" class="icon" onclick="myFunction()"></a></li>
		</ul>
	</nav>
<div class="main">
	<div class="content">
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Full Name<br><input type="text" name="fullname" size="55" value='<?php echo $fullname ?>' readonly="readonly"><p></p>
		Username<br><input type="text" name="username" size="55" value='<?php echo $username ?>' readonly="readonly"><p></p>
		<input type="file" name="image" value="file" accept="image/png,image/jpg,image/iso,image/jpeg"><p></p>
		<textarea placeholder="Description of the image....." cols="49" rows="8" name="description"></textarea><p></p>
		<input type="submit" name="Upload" value="Upload"><P></P>
	</form>
	</div>
</div>


<div class="footer">

	<div class="footer_bottom">
		Designed by <a href="mailto:youngnetwork2000@gmail.com">Bastocurrency</a>
		
	</div>
	
</div>


</body>
</html>

