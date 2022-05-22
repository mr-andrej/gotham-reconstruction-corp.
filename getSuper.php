<?php
session_start();
$_SESSION['panier'] = [];

function getSuperById($id) {
    $url = "https://www.superheroapi.com/api/2762190224046152/" . $id;
    $arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

$superHeroJson = file_get_contents($url, false, stream_context_create($arrContextOptions));
$superHero = json_decode($superHeroJson, true);

return $superHero;
}

function getSupersByName($name) {
    $url = "https://www.superheroapi.com/api/2762190224046152/search/" . $name;
    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );

    $superHeroJson = file_get_contents($url, false, stream_context_create($arrContextOptions));
    $superHero = json_decode($superHeroJson, true);

    return $superHero;
}

function getPrice($powerstats) {
    $price = 0;
    $price = (int) (array_sum($powerstats)/6);

    if ($price <= 20)
        return "20";
    else
        return strval($price);

}

function addToCart($id) {
    array_push($_SESSION['panier'], $id);
}