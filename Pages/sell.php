<?php
session_start();
require_once "../db/db_setters.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// If Logout button is set, and username is empty(from logout form)
	echo '<script>alert("' . empty($_FILES["images"]["name"]) . '")<script>';

	if (!empty($_FILES["images"]["name"])) {
		// Get file info 
		$fileName = basename($_FILES["images"]["name"]);
		$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		echo '<script>alert("Test")<script>';

		// Allow certain file formats 
		$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
		if (in_array($fileType, $allowTypes)) {
			$image = $_FILES['images']['tmp_name'];
			$imgContent = addslashes(file_get_contents($image));

			// Insert image content into database 
			$insert = insert_img($imgContent, $fileName);

			if ($insert) {
				$status = 'success';
				$statusMsg = "File uploaded successfully.";
			} else {
				$statusMsg = "File upload failed, please try again.";
			}
			echo '<script>alert(' . $statusMsg . ')<script>';
		}
	}
}
?>

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
	<script type="module" src="../js/sell.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
	<?php include "../php/navbar.php"; ?>
	<div id="content">
		<h1>Sell Your Car</h1>
		<form id="sell" class="container" action="sell.php" method="POST">
			<div class="form-outline row row-cols-2 mb-3">
				<div class="col">
					<label for="make">Car Make</label>
					<select class="form-control" id="make" required>
						<option disabled selected value> -- Select a Car Make -- </option>
					</select>
				</div>
				<div class="col">
					<label for="model">Model</label>
					<select class="form-control" id="model" required>
					</select>
				</div>
			</div>
			<div class="form-outline row row-cols-2 mb-3">
				<div class="col" id="mileage">
					<label for="mileage">Car Kilometers</label>
					<div class="input-group">
						<input class="form-control" type="number" name="mileage" required>
						<div class="input-group-append">
							<span class="input-group-text">Km</span>
						</div>
					</div>
				</div>
				<div class="col" id="price">
					<label for="price">Price</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">$</span>
						</div>
						<input class="form-control" type="number" name="price" required>
					</div>

				</div>
			</div>
			<div class="form-outline row row-cols-2 mb-3">
				<div class="col">
					<label for="description">Enter Information About The Car</label>
					<textarea class="form-control" rows="3" name="description"></textarea>
				</div>
				<div class="col">
					<label class="form-label" for="images">Upload Car Images</label>
					<input type="file" accept="image/*" class="form-control" id="images" name="images" multiple />
				</div>
			</div>
			<button class="btn btn-primary btn-block mb-4 w-100">Upload</button>
		</form>

	</div>
	<?php include "../php/footer.php"; ?>
</body>

</html>