<?php
// FILE WRITTEN BY OMAR
require_once "db.php";

$insert_userquery = $con->prepare("INSERT INTO users (email, username, password, permissions) VALUES (?, ?, ?, ?)");
$INSERT_LISTING = $con->prepare("INSERT INTO listings (userID, carMake, carModel, price, mileage, year, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
$INSERT_IMG = $con->prepare("INSERT INTO images (userID, listingID, imgPath, imageName) VALUES (?, ?, ?, ?)");
$INSERT_FAVOURITE = $con->prepare("INSERT INTO favourites (listingID, userID) VALUES (?, ?)");

function insert_user($email, $username, $password)
{
	global $con;
	global $insert_userquery;
	$default_permission = 2;
	$insert_userquery->bind_param("sssi", $email, $username, $password, $default_permission);
	$insert_userquery->execute();
	return $con->insert_id;
}

function insert_listing($userId, $make, $model, $price, $mileage, $year, $description)
{
	global $con;
	global $INSERT_LISTING;
	$INSERT_LISTING->bind_param("issdiss", $userId, $make, $model, $price, $mileage, $year, $description);
	$INSERT_LISTING->execute();
	return $con->insert_id;
}
function insert_img($userId, $listingId, $imgPath, $imgName)
{
	global $con;
	global $INSERT_IMG;
	$INSERT_IMG->bind_param("iiss", $userId, $listingId, $imgPath, $imgName);
	$INSERT_IMG->execute();
	return $con->insert_id;
}
function insert_favourite($userId, $listID)
{
	global $con;
	global $INSERT_FAVOURITE;
	$INSERT_FAVOURITE->bind_param("ii", $listID, $userId);
	$INSERT_FAVOURITE->execute();
	return $con->insert_id;
}
