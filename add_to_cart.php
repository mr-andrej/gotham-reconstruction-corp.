<?php
require 'getSuper.php';

addToCart($_GET['id']);

header("pannier.php");