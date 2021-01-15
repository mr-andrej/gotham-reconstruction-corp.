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

<div class="banner_bg_main" style="height: 40vh;">
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
            </div>
        </div>
    </div>
        <!-- header section end -->


    <br><br><br><br><br><br>
    <!-- Featured section end -->

<div class="row mt-5 mb-5">

<div class="form-event col-4 offset-4">

  <h2> Contactez Nous ! </h2><br>


    <form method="post" action="/form/add">
        <div class="form-group">
            <label for="">Nom : </label>
            <input type="text"
                   class="form-control"
                   name="lastname"
                   id="lastname" required/>
        </div>

        <div class="form-group">
            <label for="">
                Prénom : </label>
            <input type="text"
                   class="form-control"
                   name="firstname"
                   id="firstname" required/>

        </div>

       <div class="form-group">
         <label for="">E-mail : </label>
        <input type="email"
               class="form-control"
               name="email"
               id="email" required/>
       </div>

       <div class="form-group">
         <label for="">Message : </label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
       </div>


       <input type="submit" class="btn-submit btn" value="Envoyer"/>
    </form>
</div>
</div>

<?php include "_footer.php"; ?>
</body>
