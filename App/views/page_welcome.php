<?php
defined('ROOT')or die("Not allowed");

echo html_open();
?>
<head>
	<title>Welcome MaFrame</title>
	<meta charset="utf-8">
	<meta name="author" content="Alin Koko Mansuby">
	<?=meta('description','MaFrame - Simple MVC Framework for PHP');?>
	<style type="text/css">
			*{
		box-sizing: border-box;
	}
	body, html{
		font-family: sans-serif;
		font-size: 16px;
		margin: 0;
		padding: 0;
		scroll-behavior: smooth;
	}
	nav{
		background: #888;
		margin: 0;
		padding: 0;
		overflow: hidden;
		position: fixed;
		top: 0;
		width: 100%;
	}
	nav a.brand{
		float: left;
		display: block;
		padding: 14px 16px;
		text-decoration: none;
		color: #eee;
	}
	nav .menu{
		float: right;
	}
	nav .menu a{
		display: inline-block;
		padding: 14px 16px;
		color: #fff;
		text-decoration: none;
	}
	nav .menu a:hover{
		background: #999;
	}
	.container-full{
		width: 100%;
	}
	header.padding-64{
		padding: 200px 0;
		text-align: center;
		height: 700px;
	}
	header.padding-64 h4{
		font-size: 22px;
		font-weight: 100;
		margin: 16px 0 8px 0;
		padding: 0;
	}
	header.padding-64 h1{
		font-weight: 100%;
		font-family: serif;
		margin: 20px 0 20px 0;
	}
	header.padding-64 small{
		margin: 16px 0 16px 0;
		font-size: 14px;
	}
	a.btn{
		background: #444;
		color: #fff;
		padding: 16px 32px;
		text-decoration: none;
		border-radius: 4px;
	}
	a.btn:hover{
		background: #555;
	}
	#home{
		background: #eee;
	}
	h1{
		letter-spacing: 69px;
		text-align: center;;
		font-size: 300%;
		color: #333;

	}
	p{
		letter-spacing:17px;
	}
	</style>
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
			<h1>MAFRAME</h1><br>
			<p>Simple MVC framework for PHP.</p><br><br>
			<small>Made with &hearts; by Alin Koko Mansuby </small>
		</header>
	</div>
</body>
</html>