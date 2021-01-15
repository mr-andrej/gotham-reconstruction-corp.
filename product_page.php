<?php
require "call_api.php";
require "getSuper.php";
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/product_page.css">
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
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
    <title>Portofolio - Gotham Reconstruction Corporation</title>
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

<!-- /* Random Signature */ -->

<?php
$polices = array('PWSignaturetwo', 'FreeSignature', 'MaestroSignature', 'PhilipSignature', 'SanteriaSignature', 'SebastianSignature');
$rand = rand(0, 5);
 
$police = $polices[$rand];
?>

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
                    <a href="index.php">Les Supers</a>
                    <a href="#">À Propos</a>
                    <a href="#">Contact</a>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                <div class="main">
                    <!-- Another variation with a button -->
                    <?php include "_search-bar.php"; ?>
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
                <br><br><br><br>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- Blog section -->
    <section class="blog-section spad" style="background:white !important;">
        <div class="container">
            <div class="row">
                <?php if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET != null) : ?>
                <?php $superHero = getSuperById($_GET["id"]); ?>
                <div class="col-lg-5">
                    <div class="featured-item box-img">
                        <?php echo '<img src="' . $superHero['image']['url'] . '">';?>
                        <h1 class="legend-img" style="font-family: <?php echo $police; ?>"><?php echo $superHero['name']?></h1>
                        <a href="#" class="site-btn" style="left: 30%">AJOUTER AU PANIER</a>
                    </div>
                </div>

                <div class="col-lg-7">
                    <h4 class="bgs-title">Prix : $<?php echo getPrice($superHero['powerstats']) . '.00';?> </h4>

                    <div class="blog-item">
                        <div class="bi-thumb" >
                            <img src="images/boom/98-983581_clip-black-and-white-download-cartoon-comics-comic.png" alt="">                            
                        </div>
                        <div class="bi-content">
                            <h5>Biography</h5>
                            <p><?php
                            foreach($superHero['biography'] as $key => $valeur)
                            {
                                if (is_array($valeur))
                                {
                                    foreach($valeur as $key2 => $valeur2)
                                    {
                                        echo '<i>' . ucfirst($key) . '</i> : ' . $valeur2 . '<br>';
                                    }
                                } else {
                                    echo '<i>' . ucfirst($key) . '</i> : ' . $valeur . '<br>';
                                }
                            };   ?><p>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="images/boom/98-981587_comic-png-transparent-comic-png.png" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>Appearance</h5>
                            <p><?php
                            foreach ($superHero["appearance"] as $key => $valeur)
                            {
                                if (is_array($valeur))
                                {
                                    foreach ($valeur as $key2 => $valeur2)
                                    {
                                        echo '<i>' . ucfirst($key) . '</i> : ' . $valeur2 . '<br>';
                                    }
                                } else {
                                    echo '<i>' . ucfirst($key) . '</i> : ' . $valeur . '<br>';
                                }
                            };

                            ?><p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->

     <!-- Blog section -->
     <section class="blog-section spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 div-graph mb-5">
                    <div class="featured-item box-img" id="container-graph">
                    <div ></div>   
                    </div>
                </div>

                <div class="col-lg-7">                
                    <div class="blog-item">
                        <div class="bi-thumb" >
                        <img src="images/boom/0-4617_comics-clipart-png-tumblr-comic-clipart.png" alt="">    
                            
                        </div>
                        <div class="bi-content">
                            <h5>Work</h5>
                            <p><?php
                            foreach($superHero['work'] as $key => $valeur)
                            {
                                echo '<i>' . ucfirst($key) . '</i> : ' . $valeur . '<br>';
                            };
                            ?><p>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                        <img src="images/boom/173-1738575_comic-pop-art-stickers-messages-sticker-0-comics.png" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>Connections</h5>
                            <p><?php
                            foreach($superHero['connections'] as $key => $valeur)
                            {
                                echo '<i>' . ucfirst($key) . '</i> : ' . $valeur . '<br>';
                            };
                            ?><p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
         <?php endif; ?>
     </section>
    <!-- Blog section end -->
    <?php include "_footer.php"; ?>
</div>



<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>

<script>
    anychart.onDocumentReady(function () {

      var data = [<?php foreach($superHero['powerstats'] as $key => $valeur){
         echo '{x: "'.ucfirst($key).'", value: '.$valeur.'},';
         }; ?>
      ];

      // create radar chart
      var chart = anychart.radar();
      // set chart yScale settings
      chart.yScale()
        .minimum(0)
        .maximum(100)
        .ticks({'interval':20});

      // create first series
      chart.line(data)

      // set chart title
      chart.title("<?php echo $superHero['name'];?> Power Stats");

      // set container id for the chart
      chart.container('container-graph');
      // initiate chart drawing
      chart.draw();

    });
  </script>

</body>
</html>