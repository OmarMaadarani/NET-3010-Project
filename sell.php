<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UFT-8" />
		<meta name="author" content="Omar Maadarani" />
		<meta name="email" content="maad0009@algonquinlive.com" />
		<title>Sell Your Car</title>
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
			<h1>Sell Your Car</h1><br>
            
            <h2>Insert Images</h2>
            <button class="btn btn-secondary">Upload Images</button><br><br>   
            
            <h2>Add Description</h2>
            <input type="text" id="Description" name="Description"><br><br>

            <h2>Add Starting Price</h2>
            <input type="text" id="Price" name="Price"><br><br>

            <h2>Amount of Kilometers on the Car</h2>
            <input type="text" id="Distance" name="Distance"><br><br>

            <button class="btn btn-secondary" onclick="alert('Car has Been Uploaded!')">Upload</button>



                    
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
