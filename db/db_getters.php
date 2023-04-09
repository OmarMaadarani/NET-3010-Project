<?php

require_once "db.php";

$get_userquery = $con->prepare("SELECT userID, email, username, password, permissions FROM users WHERE username = ?");
$SELECT_USER_EMAIL_QUERY = $con->prepare("SELECT * FROM users WHERE email = ?");

function get_user($username)
{
	global $get_userquery;
	$get_userquery->bind_param("s", $username);
	$get_userquery->execute();
	$result = $get_userquery->get_result();
	return $result->fetch_assoc();
}

function get_user_by_email($email)
{
	global $SELECT_USER_EMAIL_QUERY;
	$SELECT_USER_EMAIL_QUERY->bind_param("s", $email);
	$SELECT_USER_EMAIL_QUERY->execute();
	$result = $SELECT_USER_EMAIL_QUERY->get_result();
	return $result->fetch_assoc();
}
