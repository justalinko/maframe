<!DOCTYPE html>
<html>
<head>
	<title>Welcome MaFrame</title>
	<meta charset="utf-8">
	<meta name="author" content="Alin Koko Mansuby">
	<meta name="description" content="MaFrame - Simple MVC Framework">
	<?=$this->loader->publicdir('css','welcome-style');?>
	<!--  <link rel="stylesheet" type="text/css" href="Public/css/welcome-style.css"> -->
</head>
<body>
	<nav class="navbar">
		<a href="#" class="brand">
			<b>MAFRAME</b>
		</a>
		<div class="menu">
			<a href="#">HOMEPAGE</a>
			<a href="#download">DOWNLOAD</a>
			<a href="#documentation">DOCUMENTATION</a>
			<a href="#contact_us">CONTACT US</a>
			<a href="#donate"><b>DONATE</b></a>
		</div>
	</nav>
	<tag id="refresh"></tag>d
	<div class="container-full">
		<header class="padding-64" id="home" >
			<h1>M A F R A M E<br><small>Simple MVC Framework</small></h1>

			<small>Made with &hearts; by Alin Koko Mansuby </small><br><br><br><br>
			<a href="#infoDaftar" onclick="openDaftar();" class="btn">DONATE</a>
		</header>
	</div>
</body>
</html>