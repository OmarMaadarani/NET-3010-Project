<?php
session_start();
require_once "../db/db_getters.php";

$listings = get_user_listings($_SESSION["$userID"]);
$numLists = count($listings);
$data = array();
for ($i = 0; $i < $numLists; $i++) {
    $img = get_listing_img($listings[$i]["listingID"]);
    //$listObj[$i]->append($img);
    array_push($data, $listings[$i]);
    $data[$i]["img"] = base64_encode($img["img"]);
}

echo " " . json_encode($data) . " ";;