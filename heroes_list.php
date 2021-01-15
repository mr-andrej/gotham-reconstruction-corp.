<?php
require "call_api2.php"
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Product Page</title>
    <link rel="stylesheet" href="css/product_page.css">
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
</head>
<body>
<?php include "_header.php"; ?>
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

<!-- /* Random Signature */ -->

<?php
$polices = array('PWSignaturetwo', 'FreeSignature', 'MaestroSignature', 'PhilipSignature', 'SanteriaSignature', 'SebastianSignature');
$rand = rand(0, 5);

$police = $polices[$rand];
?>

<!-- Product section -->


<section class="product-section spadTwo">
    <div class="container">
        <div class="row" id="product-filter">

                                <?php
                                for ($i = 172; $i <= 191; $i++) {
                                    $superHero = getSuper($i);

                                    echo '<div class="mix col-lg-3 col-md-6 best">';
                                    echo '<div class="product-item">';
                                    echo '<figure>';
                                    echo '<img src="' . $superHero['image']['url'] . '" alt="">';
                                    echo '<div class="bache">' . $superHero['biography']['publisher'] . '</div>';
                                    echo '</figure>';

                                    echo '<div class="product-info">';
                                    echo '<h6>' . $superHero['name'] . '</h6>';
                                    echo '<p>$' . getPrice($superHero['powerstats']). '.00</p>';
                                    echo '<a href="#" class="site-btn btn-line">AJOUTER AU PANIER</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </section>
        }
    ?>
<!-- Product section end -->

</body>
<?php include "_footer.php"; ?>
</html>