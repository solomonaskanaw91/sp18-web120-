<?php include "finial-config.php"?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$title?></title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700|Raleway:200,400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body id="body">
	<nav class="nav">
	<div class="flex-center">
		<ul class="nav-items">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<button class="nav-toggle pull-right">
		<span class="nav-burger">
			<span class="line"></span> 
			<span class="line"></span>
			<span class="line"></span>
		</span>
	</button>
</nav>	 <header class="masthead flex-center parallax-container">
		<a href="../FP/index.php">
			<div class="main-heading-container text-center">
				<h1>Allen's Designs</h1>
				<h2>Freelance Web Devloper</h2>
                <h2 class="pageID"><?=$PageID?></h2>

			</div>
		</a>
		<img src="img/mop.jpeg" class="parallax-bg" data-speed=".25" data-offset="75" />
	</header>
<main>
		<section class="icons">
			<div class="container">
				<div class="row">
					<div class="col-one-fourth">
						<div class="icon-container">
							<div class="text-center">
								<i class="fa fa-user fa-5"></i>
								<h3>Reviews</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a justo odio.</p>
						</div>
					</div>
					<div class="col-one-fourth">
						<div class="icon-container">
							<div class="text-center">
								<i class="fa fa-question fa-5"></i>
								<h3>FAQ</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a justo odio.</p>
						</div>
					</div>
					<div class="col-one-fourth">
						<div class="icon-container">
							<div class="text-center">
								<i class="fa fa-tasks fa-5"></i>
								<h3>Current Projects</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a justo odio.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
    </main>
    </body>
