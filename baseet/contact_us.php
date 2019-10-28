<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
body,html{
       background:rgba(26,26,26,0.3);
       width: 100%;
}

*{
	box-sizing: border-box;
	padding: ;
	margin: ;
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
	height: 530px;
}	

form input{
	margin-left: 80px;
	width: 250px;
	height: 40px;
}	

form{
	
}

textarea{
	margin-left:80px;
}

.submit{
}

input{
	font-size: 20px;n
}
		
	</style>
</head>
<body>
<nav class="topnav" id="mytopnav">
 <ul>
	<li><a href="home.php">Home</a></li>
	<li><a href="gallery.php">Gallery</a></li>
	<li><a href="upload_picture.php">Upload your picture</a></li>
	<li><a href="about_us.php">About Us</a></li>
	<li><a href="" class="active">Contact Us</a></li>
	<li><a href="javascript:void(0);" class="icon" onclick="myFunction()"></a></li>
</ul>
</nav>
<div class="main">
	<h1 style="text-align: center">
		CONTACT US
	</h1>
	<p>
		<form>
		<input type="" name="" placeholder="Name">
		<input type="" name="" placeholder="E-mail">
		<input type="" name="" placeholder="Phone"><p></p>
		<textarea cols="128px" rows="20px"></textarea><p></p>
		<input type="submit" name="submit" value="Send Form" class="submit">
		</form>
	</p>
	
</div>

</body>
</html>