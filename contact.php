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
    <title>Gotham-corp</title>
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
    </div>

    <!-- Featured section end -->

<div class="row mt-5 mb-5">

<div class="form-event col-4 offset-4">

  <h2> Contact Us ! </h2><br>


    <form method="post" action="/form/add">
        <div class="form-group">
            <label for="">Lastname : </label>
            <input type="text"
                   class="form-control"
                   name="lastname"
                   id="lastname" required/>
        </div>

        <div class="form-group">
            <label for="">Firstname : </label>
            <input type="text"
                   class="form-control"
                   name="firstname"
                   id="firstname" required/>

        </div>

       <div class="form-group">
         <label for="">Username : </label>
        <input type="text"
               class="form-control"
               name="login"
               id="login" required/>
       </div>

       <div class="form-group">
         <label for="">Password : </label>
        <input type="password"
               class="form-control"
               name="password"
               id="password" required/>
       </div>

       <div class="form-group">
         <label for="">E-mail : </label>
        <input type="email"
               class="form-control"
               name="email"
               id="email" required/>
       </div>

       <div class="form-group">
         <label for="">Number : </label>
        <input type="number"
               class="form-control"
               name="number"
               id="number" required/>
       </div>

       <div class="form-group">
         <label for="">Street Name : </label>
        <input type="text"
             class="form-control"
             name="address"
             id="address" required/>
       </div>

       <div class="form-group">
         <label for="">Zip Code : </label>
        <input type="text"
             class="form-control"
             name="postal"
             id="postal" required/>
       </div>

       <div class="form-group">
         <label for="">City : </label>
        <input type="text"
             class="form-control"
             name="city"
             id="city" required/>
       </div>

       <input type="submit" class="btn-submit btn" value="Send"/>
    </form>
</div>
</div>

<?php include "_footer.php"; ?>
</body>
