<?php

require_once "db.php";

$get_userquery = $con->prepare("SELECT userID, email, username, password, permissions FROM users WHERE username = ?");
$SELECT_USER_EMAIL_QUERY = $con->prepare("SELECT * FROM users WHERE email = ?");
$SELECT_ALL_LISTINGS = $con->prepare("SELECT * FROM listings");
$SELECT_LISTING_IMG = $con->prepare("SELECT img FROM images WHERE listingID = ?");

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

function get_listings()
{
	global $SELECT_ALL_LISTINGS;
	$SELECT_ALL_LISTINGS->execute();
	$result = $SELECT_ALL_LISTINGS->get_result();
	return $result->fetch_all(MYSQLI_ASSOC);
}

function get_listing_img($listingID)
{
	global $SELECT_LISTING_IMG;
	$SELECT_LISTING_IMG->bind_param("i", $listingID);
	$SELECT_LISTING_IMG->execute();
	$result = $SELECT_LISTING_IMG->get_result();
	return $result->fetch_assoc();
}
