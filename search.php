<?php require 'getSuper.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Les Supers - Gotham Reconstruction Corporation</title>
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
    <link rel="icon" href="images/favicon.png" type="image/gif"/>
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
<!-- banner bg main start -->
<div class="banner_bg_main">
    <!-- header top section start -->
    <?php include "_header.php"; ?>
    <!-- header top section start -->
    <!-- logo section start -->
    <div class="logo_section" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- logo section end -->
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="containt_main">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php">Home</a>
                    <a href="fashion.html">Fashion</a>
                    <a href="electronic.html">Electronic</a>
                    <a href="jewellery.html">Jewellery</a>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                <div class="main">
                    <!-- Another variation with a button -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button"
                                    style="background-color: black; border-color: black; ">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header_box">
                    <div class="login_menu">
                        <ul>
                            <li><a href="#">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="padding_10">Cart</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- Featured section -->
    <div class="featured-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="featured-item">
                        <img src="images/marvel_logo.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-item mb-0">
                        <img src="images/DC_logo.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured section end -->

    <!-- Product section -->
    <section class="product-section spadTwo">
        <div class="container">
            <div class="row" id="product-filter">
                <?php
                for ($i = 75; $i <= 82; $i++) {
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
    <!-- Product section end -->


    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="featured-item">
                        <!-- 16:9 aspect ratio -->

                        <video src="https://i.imgur.com/coxxJKP.mp4" width="454" controls="" style="margin-bottom: -8px;"> No video support in this browser.</video>

                    </div>
                </div>
                <div class="col-lg-7">
                    <h4 class="bgs-title">Superman</h4>
                    <div class="blog-item">
                        <p>Superman est un super-héros de bande dessinée américaine appartenant au monde imaginaire de l’Univers DC.
                            Ce personnage est considéré comme une icône culturelle américaine.</p>
                        <p>Superman a popularisé l'archétype de super-héros et défini ses conventions, bien qu'il ne soit pas le premier
                            personnage de super-héros. Les super-héros sont généralement jugés en fonction de leur ressemblance avec la norme établie par Superman.
                            Il reste le super-héros de bandes dessinées le plus vendu de tous les temps ; et sa franchise est une des plus lucratives même en dehors des bandes dessinées</p>
                        <p>
                            Ses parents adoptifs Jonathan et Martha Kent apparaissent pour la première fois dans le premier numéro de Action Comics, créé par Jerry Siegel et Joe Shuster.
                            C'est Martha Kent qui conçoit le costume de Superman. Ses parents sont présents dans de nombreux comics de Superman. Ils apparaissent également dans de nombreuses adaptations cinématographiques et télévisées.
                        </p>
                        <p>Kal-El a une cousine Kara Zor-El, alias Supergirl qui est également envoyée sur Terre.
                            Alors que Clark Kent est adulte, un autre enfant kryptonien arrive de la même manière, Superman l'adopte et le prénomme Chris Kent.</p>
                        <p>Kal-El cotoie régulierement les autres membres de la Justice League, en particulier avec Batman qui en dépit de conflits parfois très violents devient l'un de ses meilleurs alliés et amis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->


    <?php include "_footer.php"; ?>


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>