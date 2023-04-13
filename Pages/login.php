	<?php
	session_start();
	require_once "../db/db_getters.php";


	if (!isset($_SESSION["username"])) {
		$_SESSION["username"] = null;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// If Logout button is set, and username is empty(from logout form)

		$username = htmlspecialchars($_POST["username"]);
		$pass = htmlspecialchars($_POST["password"]);
		$user = get_user($username);
		//echo $user;
		if (isset($user["password"])) {
			if ($user["password"] == $pass) {
				$_SESSION["username"] = $username;
				$_SESSION["userID"] = $user["userID"];
				$_SESSION["email"] = $user["email"];
				$_SESSION["permission"] = $user["permissions"];
				$_SESSION["error"] = false;
				//header("Location: ../index.php");
			}
		} else {
			$_SESSION["username"] = null;
			echo '<script>alert("ERROR! Invalid Credentials")</script>';
			//header("Location: login.php");
		}
	}
	?>

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
		<?php include "../php/navbar.php"; ?>
		<div id="content">
			<?php if ($_SESSION["username"] == null) { ?>

				<ul class="nav nav-pills nav-justified gap-3" role="tablist" id="login-reg">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="login-tab" role="tab" data-bs-toggle="tab" data-bs-target="#login" href="#login" aria-controls="login" aria-selected="true">Login</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="register-tab" role="tab" data-bs-toggle="tab" data-bs-target="#register" href="#register" aria-controls="register" aria-selected="false">Register</a>
					</li>
				</ul>

				<div class="tab-content">
					<form action="login.php" class="form-login tab-pane fade show active" role="tabpanel" id="login" method="post">
						<h1>Login</h1>

						<div class="form-outline mb-4">
							<label for="username" class="sr-only">Username</label>
							<input type="text" name="username" id="inputUser" class="form-control" placeholder="Enter Your Username" required>
						</div>
						<div class="form-outline mb-4">
							<label for="password" class="sr-only">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
						</div>
						<button class="btn btn-primary btn-block mb-4 w-100" type="submit" name="submit" value="login">Log in</button>
					</form>

					<form action="../php/register.php" class="form-login tab-pane fade" role="tabpanel" id="register" method="post">
						<h1>Register</h1>

						<div class="form-outline mb-4">
							<label for="emailReg" class="sr-only">Email</label>
							<input type="text" name="emailReg" class="form-control" placeholder="Enter Your Email" required>
						</div>
						<div class="form-outline mb-4">
							<label for="usernameReg" class="sr-only">Username</label>
							<input type="text" name="usernameReg" class="form-control" placeholder="Enter Your Username" required>
						</div>
						<div class="form-outline mb-4">
							<label for="passwordReg" class="sr-only">Password</label>
							<input type="password" name="passwordReg" class="form-control" placeholder="Password" required>
						</div>
						<button class="btn btn-primary btn-block mb-4 w-100" type="submit" name="submit" value="reg">Register</button>

					</form>
				</div>

		</div>

	<?php } else {
				echo "<h2>Hey User " . $_SESSION["username"] . "! You have Level " . $_SESSION["permission"] . " Permissions!</h2>"; ?>

		<form action="../php/logout.php" class="form-login" id="login" method="post">
			<input type="hidden" name="username" id="inputUser" class="form-control" placeholder="Enter Your Username" value="">
			<button class="btn btn-primary btn-block mb-4 w-100" type="submit" name="logout">Log Out</button>

		</form>

	<?php } ?>
	</div>

	<?php include "../php/footer.php"; ?>
	</body>

	</html>