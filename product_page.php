<?php
require "call_api.php"
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
<p><?php foreach($img as $key => $image){
         echo '<img src="' . $image . '">';
         };
         ?></p>


<!-- /* Signature */ -->

<?php
$polices = array('PWSignaturetwo', 'FreeSignature', 'MaestroSignature', 'PhilipSignature', 'SanteriaSignature', 'SebastianSignature');
$rand = rand(0, 5);
 
$police = $polices[$rand];
?>

<h1 style="font-family: <?php echo $police; ?>"><?php echo($name);?></h1>




<div class="card" style="width: 18rem;">

  <div class="card-body" style="background-image:url('<?php echo $image;?>')">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="featured-item box-img">
                        <img src="<?php echo $image;?>" alt="">
                        <h1 class="legend-img" style="font-family: <?php echo $police; ?>"><?php echo($name);?></h1>
                        <a href="#" class="site-btn">Buy it !</a>
                    </div>
                </div>

                <div class="col-lg-7">
                    <h4 class="bgs-title">from the blog</h4>
                    <div class="blog-item">
                        <div class="bi-thumb" >
                            <img src="images/blog-thumb/1.jpg" alt="">
                            
                        </div>
                        <div class="bi-content">
                            <h5>10 tips to dress like a queen</h5>
                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="images/blog-thumb/2.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>Fashion Outlet products</h5>
                            <div class="bi-meta">July 02, 2018 | By Jessica Smith</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="images/blog-thumb/3.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>the little black dress just for you</h5>
                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>
                            <a href="#" class="readmore">Read More</a>
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

                <div class="col-lg-5 div-graph">
                    <div class="featured-item box-img" id="container-graph">
                    <div ></div>   
                    </div>
                </div>

                <div class="col-lg-7">
                    <h4 class="bgs-title">from the blog</h4>
                    <div class="blog-item">
                        <div class="bi-thumb" >
                            <img src="images/blog-thumb/1.jpg" alt="">
                            
                        </div>
                        <div class="bi-content">
                            <h5>10 tips to dress like a queen</h5>
                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="images/blog-thumb/2.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>Fashion Outlet products</h5>
                            <div class="bi-meta">July 02, 2018 | By Jessica Smith</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="images/blog-thumb/3.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>the little black dress just for you</h5>
                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->

<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>

<script>
    anychart.onDocumentReady(function () {

      var data = [<?php foreach($powerstats as $key => $valeur){
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
      chart.title("<?php echo $name ?> Power Stat");

      // set container id for the chart
      chart.container('container-graph');
      // initiate chart drawing
      chart.draw();

    });
  </script>

</body>
</html>