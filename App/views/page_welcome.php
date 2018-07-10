<?php
defined('ROOT')or die("Not allowed");

echo html_open();
?>
<head>
	<title>Welcome MaFrame</title>
	<meta charset="utf-8">
	<meta name="author" content="Alin Koko Mansuby">
	<?=meta('description','MaFrame - Simple MVC Framework for PHP');?>
	<?=$this->loader->publicdir('css','welcome-style');?>
	<!--  <link rel="stylesheet" type="text/css" href="Public/css/welcome-style.css"> -->
</head>
<body>
	<nav class="navbar">
		<a href="#" class="brand">
			<b>MAFRAME</b>
		</a>
		<div class="menu">
			<a href="//github.com/justalinko/maframe">HOMEPAGE</a>
			<a href="//github.com/justalinko/maframe/release">DOWNLOAD</a>
			<a href="//github.com/justalinko/maframe/wiki">DOCUMENTATION</a>
			<a href="mailto:alinkokomansuby@gmail.com">CONTACT US</a>
			<a href="//facebook.com/alinko.jp"><b>DONATE</b></a>
		</div>
	</nav>
	<tag id="refresh"></tag>d
	<div class="container-full">
		<header class="padding-64" id="home" >
			<h1>M A F R A M E<br><small>Simple MVC Framework</small></h1>

			<small>Made with &hearts; by Alin Koko Mansuby </small><br><br><br><br>
		</header>
	</div>
</body>
</html>