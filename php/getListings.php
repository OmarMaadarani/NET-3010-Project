<?php
// FILE WRITTEN BY OMAR TO GET LISTINGS AND RETURN TO JS FILE viewAllListings
session_start();
require_once "../db/db_getters.php";

$listings = get_listings();
$numLists = count($listings);
$data = array();
for ($i = 0; $i < $numLists; $i++) {
    $img = get_listing_img($listings[$i]["listingID"]);
    //$listObj[$i]->append($img);
    array_push($data, $listings[$i]);
    $data[$i]["img"] = $img["imgPath"];
}

echo " " . json_encode($data) . " ";
