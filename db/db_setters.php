<?php

require_once "db.php";

$insert_userquery = $con->prepare("INSERT INTO users (email, username, password, permissions) VALUES (?, ?, ?, ?)");
$INSERT_IMG = $con->prepare("INSERT INTO images (img, imageName) VALUES (?, ?)");

function insert_user($email, $username, $password)
{
	global $con;
	global $insert_userquery;
	$default_permission = 2;
	$insert_userquery->bind_param("sssi", $email, $username, $password, $default_permission);
	$insert_userquery->execute();
	return $con->insert_id;
}


function insert_img($img, $imgName)
{
	global $con;
	global $INSERT_IMG;
	$INSERT_IMG->bind_param("bs", $img, $imgName);
	$INSERT_IMG->execute();
	return $con->insert_id;
}
