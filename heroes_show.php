<?php
require "call_api2.php"
?>

<?php

$id = $_GET['id'];

$gladiator = $pdo->query('SELECT g.name as gname, country, weight, height, sword, shield, hand, winner, losing, likes, dislike, 
c.name as cname 
FROM gladiator g 
join category c on c.id=g.id_category WHERE g.id=' . $id)->fetch();

echo imgArray($img);

?>

