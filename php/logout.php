<?php
session_start();
$_SESSION["username"] = null;
$_SESSION["userID"] = null;
$_SESSION["permission"] = null;
$_SESSION["error"] = false;
header("Location: ../Pages/login.php");
