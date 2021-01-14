<?php
require "call_api.php"
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="#">
  <script src="script.js"></script>
</head>
<body>

<style>
@font-face {
	font-family: "PWSignaturetwo";
	src: url('font/PWSignaturetwo.ttf');
}

@font-face {
	font-family: "MaestroSignature";
	src: url('font/MaestroSignature.ttf');
}

@font-face {
	font-family: "PhilipSignature";
	src: url('font/PhilipSignature.ttf');
}

@font-face {
	font-family: "SanteriaSignature";
	src: url('font/SanteriaSignature.ttf');
}

@font-face {
	font-family: "SebastianSignature";
	src: url('font/SebastianSignature.ttf');
}

@font-face {
	font-family: "FreeSignature";
	src: url('font/FreeSignature.ttf');
}
</style>

<!-- /* NAME */ -->
<h1><?php echo($name);?></h1>

<!-- /* STAT */ -->
<p><?php foreach($powerstats as $key => $valeur){
         echo $key. ' : ' .$valeur. '<br>';
         };?></p>

<!-- /* BIO */ -->
<p><?php foreach($bio as $key => $valeur){
             if (is_array($valeur)){
                foreach($valeur as $key2 => $valeur2){
                    echo $key . ' : ' . $valeur2 . '<br>';
                    }
                }
                else {
                    echo $key . ' : ' . $valeur . '<br>';
                }
            };         
?></p>

<!-- /* APPEAR */ -->
<p><?php foreach($appear as $key => $valeur){
             if (is_array($valeur)){
                 foreach($valeur as $key2 => $valeur2){
                    echo $key . ' : ' . $valeur2 . '<br>';
                    }
                }
                else {
                    echo $key . ' : ' . $valeur . '<br>';
                }
            };         
?></p>

<!-- /* WORK */ -->
<p><?php foreach($work as $key => $valeur){
         echo $key. ' : ' .$valeur. '<br>';
         };?></p>

<!-- /* CONNEC */ -->
<p><?php foreach($connec as $key => $valeur){
             if (is_array($valeur)){
                foreach($valeur as $key2 => $valeur2){
                    echo $key . ' : ' . $valeur2 . '<br>';
                    }
                }
                else {
                    echo $key . ' : ' . $valeur . '<br>';
                }
            };         
?></p>

<!-- /* IMG */ -->
<p><?php foreach($img as $key => $valeur){
         echo '<img src="' . $valeur . '">';
         };?></p>


<!-- /* Signature */ -->

<?php
$polices = array('PWSignaturetwo', 'FreeSignature', 'MaestroSignature', 'PhilipSignature', 'SanteriaSignature', 'SebastianSignature');
$rand = rand(0, 5);
 
$police = $polices[$rand];
?>

<h1 style="font-family: <?php echo $police; ?>"><?php echo($name);?></h1>




</body>
</html>