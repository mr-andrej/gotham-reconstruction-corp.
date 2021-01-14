<?php
/* Part 1: Get the user's IP */

$url = "https://superheroapi.com/api.php/2762190224046152/28"; // URL containing our API call
$arrContextOptions = array( // Skip certification verification
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

/* NAME */
$nameJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$nameTemp = json_decode($nameJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$name = $nameTemp["name"]; // Take the value at "ip" in the array and put it in a string variable

/* STAT */
$powerstatsJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$powerstatsTemp = json_decode($powerstatsJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$powerstats = $powerstatsTemp["powerstats"]; // Take the value at "ip" in the array and put it in a string variable

/* BIO */
$bioJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$bioTemp = json_decode($bioJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$bio = $bioTemp["biography"]; // Take the value at "ip" in the array and put it in a string variable

/* APPEAR */
$appearJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$appearTemp = json_decode($appearJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$appear = $appearTemp["appearance"]; // Take the value at "ip" in the array and put it in a string variable

/* WORK */
$workJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$workTemp = json_decode($workJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$work = $workTemp["work"]; // Take the value at "ip" in the array and put it in a string variable

/* CONNEC */
$connecJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$connecTemp = json_decode($connecJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$connec = $connecTemp["connections"]; // Take the value at "ip" in the array and put it in a string variable

/* IMG */
$imgJson = file_get_contents($url, false, stream_context_create($arrContextOptions)); //Get JSON from url
$imgTemp = json_decode($imgJson, true); // Converts the JSON to an array ("ip" -> '127.0.0.1')
$img = $imgTemp["image"]; // Take the value at "ip" in the array and put it in a string variable
?>

