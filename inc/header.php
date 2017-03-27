<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<a style="position: relative; right: 146px; bottom: 7px;"class="branding-title" href="./">B-Side Book Club
				<img id="logo-title" class="hero" src="img/bside-name.png" style="position: relative; top: 21px; left: 150px; border-radius: 5px; z-index:0;"></a>
			<!-- <h1 class="branding-title"><a href="./">B-Side Book Club
				<img id="logo-title" class="hero" src="img/bside-name.png" style="position: relative; top: 16px; left: 58px;"></a></h1> -->



			<ul class="nav">
				<li class="shirts <?php if($section == "shirts") {echo "on";}?>"><a href="merch.php">Shirts</a></li>
				<li class="contact <?php if($section == "contact") {echo("on");}?>"><a href="contact.php">Contact</a></li>
				<li class="cart<?php if($section == "cart") {echo("on");}?>"><a id="shopping-cart" target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=2KEC6VB3NFUQU&amp;display=1"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i>
</a></li>
			</ul>

		</div>

	</div>

	<div id="content">
