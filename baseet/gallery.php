<!DOCTYPE html>
<html>
<head>
	<title>project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
body,html{
       background:rgba(26,26,26,0.3);
       width: 100%;
       height: 100%;
       overflow: hidden;
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
	border: hidden;
	width: 100%;
	height: 100%;
}

.main div{
	display: inline-block;
	margin-left:3px;
	margin-top: 10px;
	/*border: 2px solid yellow;*/
}

figcaption{
	text-align: center;
	font-weight: bolder;
	color:white;
}


</style>
</head>
<body>
	<nav class="topnav" id="mytopnav">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="" class="active">Gallery</a></li>
			<li><a href="upload_picture.php">Upload your picture</a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li><a href="javascript:void(0);" class="icon" onclick="myFunction()"></a></li>
		</ul>
	</nav>
	<div class="main">
			<div><img src="001.jpg" style="width: 200px; height: 200px;" class="pic"><figcaption>Screen shots</figcaption></div>
			<div><img src="002.jpg" style="width: 200px; height: 200px;" class="pic"><figcaption>Computing devices</figcaption></div>
			<div><img src="003.jpeg" style="width: 200px; height: 200px;" class="img"><figcaption>Spring</figcaption></div>
			<div><img src="004.jpg" style="width: 200px; height: 200px;" class="pic"><figcaption>Bitcoin</figcaption></div>
			<div><img src="005.jpg" style="width: 200px; height: 200px;" class="pic"><figcaption>nature</figcaption></div>
			<div><img src="006.jpeg" style="width: 200px; height: 200px;" class="pic"><figcaption>Road Path</figcaption></div>
			<div><img src="007.jpeg" style="width: 200px; height: 200px;" class="pic"><figcaption>Adventure</figcaption></div>
			<div><img src="008.jpeg" style="width: 200px; height: 200px;" class="pic"><figcaption>Road</figcaption></div>
			<div><img src="009.jpg" style="width: 200px; height: 200px;" class="pic"><figcaption>Bitcoin</figcaption></div>
			<div><img src="010.jpeg" style="width: 200px; height: 200px;" class="pic"><figcaption>Nature</figcaption></div>
			<div><img src="011.jpg" style="width: 200px; height: 200px;" class="pic"><figcaption>Cryptocurrency</figcaption></div>
			<div><img src="012.jpeg" style="width: 200px; height: 200px;" class="pic"><figcaption>nature</figcaption></div>
	</div>

</body>
</html>