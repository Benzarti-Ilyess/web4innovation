<?php
  session_start();
  if (isset($_SESSION['signed-in'])){
    header('location: sign/home.php');
  }
 ?>
 <html>
	<head>
		<title>Cathage Bay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
	</head>
	<body>
		<header id="header">
			<div class="inner">
			<a href="#" class="logo">  <strong>Site web pour la commerce des artisanats</strong></a>
				<nav id="nav">
					<a href="./index.html">Home</a>
					<a href="generic.html">Generic</a>
					<a href="elements.html">Elements</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>
    <section id="banner">
			<div class="inner">
				<header>
					<h1>Welcome to Tunisia</h1>
				</header>
				<div class="flex ">
					<div>
						<img class="animation animated bounce" src="./images/jebba.jpg" width="150px" height="150px" />
						<h3>dbach</h3>
						<p>baaaarcha dbach</p>
					</div>
					<div>
						<img class="animation animated bounce" src="./images/makla.jpg" width="150px" height="150px" />
						<h3>makla </h3>
						<p>ka3k war9a fi 5ater si fakher</p>
					</div>
					<div>
						<img class="animation animated bounce" src="./images/decor.jpg" width="150px" height="150px" />
						<h3>decor</h3>
						<p>zayan betek frere</p>
					</div>
				</div>
				<footer>
					<a href="choix.php" class="button">Je veux vendre</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="./achat/achat.php" class="button">Je veux acheter</a>
				</footer>
			</div>
		</section>
		<section id="three" class="wrapper align-center">
			<div class="inner">
				<div class="flex flex-2">
					<article>
						<div class="image round">
							<img src="images/pic01.jpg" alt="Pic 01" />
						</div>
						<header>
							<h3>Lorem ipsum<br /> dolor amet nullam</h3>
						</header>
						<p>Morbi in sem quis dui placerat ornare. Pellentesquenisi<br />euismod in, pharetra a, ultricies in diam sed arcu. Cras<br />consequat  egestas augue vulputate.</p>
						<footer>
							<a href="#" class="button">Learn More</a>
						</footer>
					</article>
					<article>
						<div class="image round">
							<img src="images/pic02.jpg" alt="Pic 02" />
						</div>
						<header>
							<h3>Sed feugiat<br /> tempus adipicsing</h3>
						</header>
						<p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
						<footer>
							<a href="#" class="button">Learn More</a>
						</footer>
					</article>
				</div>
			</div>
		</section>
	</body>
</html>
