<?php
// FILE WRITTEN BY OMAR, DB GETTER FUNCTIONS

require_once "db.php";

$get_userquery = $con->prepare("SELECT userID, email, username, password, permissions FROM users WHERE username = ?");
$SELECT_USER_BY_ID = $con->prepare("SELECT * FROM users WHERE userID = ?");
$SELECT_USER_EMAIL_QUERY = $con->prepare("SELECT * FROM users WHERE email = ?");
$SELECT_ALL_LISTINGS = $con->prepare("SELECT * FROM listings");
$SELECT_USER_LISTINGS = $con->prepare("SELECT * FROM listings WHERE userID = ?");
$SELECT_LISTING_IMG = $con->prepare("SELECT imgPath FROM images WHERE listingID = ?");
$SELECT_USERID_BY_LISTING = $con->prepare("SELECT userID FROM listings WHERE listingID = ?");
$SELECT_FAV_BY_LISTING_USER = $con->prepare("SELECT * FROM favourites WHERE listingID = ? AND userID = ?");

function get_user($username)
{
	global $get_userquery;
	$get_userquery->bind_param("s", $username);
	$get_userquery->execute();
	$result = $get_userquery->get_result();
	return $result->fetch_assoc();
}

function get_user_by_id($userID)
{
	global $SELECT_USER_BY_ID;
	$SELECT_USER_BY_ID->bind_param("i", $userID);
	$SELECT_USER_BY_ID->execute();
	$result = $SELECT_USER_BY_ID->get_result();
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

function get_user_listings($userID)
{
	global $SELECT_USER_LISTINGS;
	$SELECT_USER_LISTINGS->bind_param("i", $userID);
	$SELECT_USER_LISTINGS->execute();
	$result = $SELECT_USER_LISTINGS->get_result();
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

function get_listing_user($listingID)
{
	global $SELECT_USERID_BY_LISTING;
	$SELECT_USERID_BY_LISTING->bind_param("i", $listingID);
	$SELECT_USERID_BY_LISTING->execute();
	$result = $SELECT_USERID_BY_LISTING->get_result();
	return $result->fetch_assoc();
}

function get_is_favourite($listingID, $userID)
{
	global $SELECT_FAV_BY_LISTING_USER;
	$SELECT_FAV_BY_LISTING_USER->bind_param("ii", $listingID, $userID);
	$SELECT_FAV_BY_LISTING_USER->execute();
	$result = $SELECT_FAV_BY_LISTING_USER->get_result();
	return $result->fetch_assoc();
}
