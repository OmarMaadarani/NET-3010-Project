<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UFT-8" />
	<meta name="author" content="Omar Maadarani" />
	<meta name="email" content="maad0009@algonquinlive.com" />
	<title>Buy A Car</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/99ef503066.js" crossorigin="anonymous"></script>
	<script type="module" src="../js/viewAllListings.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/listings.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
	<?php include "../php/navbar.php" ?>
	<div id="content">
		<h1>Buy A Car</h1>
		<div class="container" id="listings">
			<div class="row mb-3">
				<div class="col thumb">
					<img class="listing-thumb" src="../imgs/2016-c450.png">
				</div>
				<div class="col">
					<a href="#">2016 C450 AMG</a>
					<p class="description">
						The 2016 Mercedes C450 AMG is a high-performance luxury sedan that offers a thrilling driving experience.
						This vehicle is equipped with a powerful 3.0-liter V6 engine that produces 362 horsepower and 384 lb-ft of torque, which is paired with a smooth and responsive seven-speed automatic transmission.
						The C450 AMG can accelerate from 0 to 60 mph in just 4.9 seconds.
					</p>
					<p><span class="mileage">Kilometers:</span> 100,000 km</p>
				</div>
				<div class="col price">
					<div class="listing-price">$50,000</div>
					<a href="#" class="btn btn-primary" role="button" data-bs-toggle="button" aria-pressed="false">Favourite</a>
				</div>
			</div>
		</div>
	</div>
	<?php include "../php/footer.php"; ?>
</body>

</html>