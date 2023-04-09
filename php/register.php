<?php
session_start();
require_once "../db/db_getters.php";
require_once "../db/db_setters.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = htmlspecialchars($_POST["emailReg"]);
	$username = htmlspecialchars($_POST["usernameReg"]);
	$pass = htmlspecialchars($_POST["passwordReg"]);
	$user = get_user_by_email($email);

	if (!isset($user["email"])) {
		$user = get_user($username);
		if (!isset($user["username"])) {
			$id = insert_user($email, $username, $pass);
			$_SESSION["username"] = $username;
			$_SESSION["email"] = $email;
			$_SESSION["userID"] = $id;
			$_SESSION["permission"] = 2;
			$_SESSION["error"] = false;
			header("Location: ../Pages/login.php");
		} else {
			$_SESSION["username"] = null;
			echo '<script>alert("ERROR! Username is already taken!"); window.location.href="../Pages/login.php";</script> ';
		}
	} else {
		$_SESSION["username"] = null;
		echo '<script>alert("ERROR! Email is already being used!"); window.location.href="../Pages/login.php";</script>';
	}
}
