<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="uft-8" />
	<meta name="author" content="Omar Maadarani" />
	<meta name="email" content="maad0009@algonquinlive.com" />
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/99ef503066.js" crossorigin="anonymous"></script>
	<script src="js/slideshow.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
	<?php include "php/navbar.php" ?>
	<div id="content">
		<h1>Welcome to AutoBid Trader!</h1>
		<div class="info-section">
			<div class="info-row">
				<div class="column-image">
					<img src="imgs/mercedes-amg.jpg" />
				</div>
				<div class="column-text">
					Welcome to AutoBid Trader, your one-stop solution for buying and selling premium vehicles. With years of experience in the industry, we strive to provide exceptional service and a vast selection of high-quality vehicles at
					competitive prices.
				</div>
			</div>
			<div class="info-row2">
				<div class="column-text">
					<p>Whether you're in the market for a new ride or looking to sell your current car, our knowledgeable team is here to assist you every step of the way.</p>
					<p>Visit us today and experience the difference at AutoBid Trader!</p>
				</div>
				<div class="column-image2">
					<img src="imgs/car-lineup.jpg" />
				</div>
			</div>
		</div>
		<div class="slide-section">
			<h2>Popular Cars For Sale!</h2>
			<div class="slide-container">
				<div class="slides">
					<div class="slide-image active" id="s1">
						<img src="imgs/2016-c450.png" alt="2016 Mercedes C450 AMG" />
					</div>
					<div class="slide-image" id="s2">
						<img src="imgs/2019-accord-sport.jpg" alt="2019 Honda Accord Sport" />
					</div>
					<div class="slide-image" id="s3">
						<img src="imgs/2015-camry.jpg" alt="2015 Toyota Camry" />
					</div>
					<div class="slide-image" id="s4">
						<img src="imgs/black-audi-car.jpg" alt="Audi S4" />
					</div>
					<div class="slide-image" id="s5">
						<img src="imgs/renault-kadjar-suv-car.jpg" alt="Renault Kadjar SUV" />
					</div>
				</div>
				<div class="thumbnails">
					<div class="slide-thumbnail active" id="t1">
						<img src="imgs/2016-c450.png" alt="" />
					</div>
					<div class="slide-thumbnail" id="t2">
						<img src="imgs/2019-accord-sport.jpg" alt="2019 Honda Accord Sport" />
					</div>
					<div class="slide-thumbnail" id="t3">
						<img src="imgs/2015-camry.jpg" alt="2015 Toyota Camry" />
					</div>
					<div class="slide-thumbnail" id="t4">
						<img src="imgs/black-audi-car.jpg" alt="Audi S4" />
					</div>
					<div class="slide-thumbnail" id="t4">
						<img src="imgs/renault-kadjar-suv-car.jpg" alt="Renault Kadjar SUV" />
					</div>
				</div>
				<button class="left fa-solid fa-chevron-left fa-xl" onclick="nextSlide(-1, true)"></button>
				<button class="right fa-solid fa-chevron-right fa-xl" onclick="nextSlide(1, true)"></button>
			</div>
		</div>
	</div>

	<?php include "php/footer.php"; ?>
</body>

</html>