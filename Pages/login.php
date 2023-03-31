<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="uft-8" />
		<meta name="author" content="Omar Maadarani" />
		<meta name="email" content="maad0009@algonquinlive.com" />
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/99ef503066.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
	</head>
	<body>
		<?php include "../php/navbar.php" ?>
		<div id="content">
			<h1>Login</h1>
			<form id="login">
				<p>Name</p>
				<input type="text" name="name" placeholder="Enter Your Name" />
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Your Email" />
				<p>Mailing Address</p>
				<input type="text" name="mailAddress" placeholder="Enter Your Mailing Address" />
				<p>How Did You Hear About Us?</p>
				<label for="social">Social Media</label>
				<input type="radio" name="referral" id="social" /> <br />
				<label for="advertising">Advertising</label>
				<input type="radio" name="referral" id="advertising" /> <br />
				<label for="word">Word of Mouth</label>
				<input type="radio" name="referral" id="word" /> <br />
				<label for="other">Other</label>
				<input type="radio" name="referral" id="other" /> <br />
				<input type="submit" name="" value="Login" />
			</form>
		</div>

		<footer>
			<p>
				Owner: Omar Maadarani <br />
				<a class="footer-link" href="mailto:maad0009@algonquinlive.com?subject=Contact%20Us">Contact Us</a>
			</p>
			<p>&copy AutoBid Trader Company</p>
		</footer>
	</body>
</html>
