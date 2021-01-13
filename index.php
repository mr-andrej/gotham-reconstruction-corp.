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
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <?php include "_header.php"; ?>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
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
                      <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </div>
                      <div class="main">
                          <!-- Another variation with a button -->
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search this blog">
                              <div class="input-group-append">
                                  <button class="btn btn-secondary" type="button"
                                          style="background-color: #f26522; border-color:#f26522 ">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="header_box">
                          <div class="lang_box ">
                              <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                                  <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i
                                          class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                              </a>
                              <div class="dropdown-menu ">
                                  <a href="#" class="dropdown-item">
                                      <img src="images/flag-france.png" class="mr-2" alt="flag">
                                      French
                                  </a>
                              </div>
                          </div>
                          <div class="login_menu">
                              <ul>
                                  <li><a href="#">
                                          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                          <span class="padding_10">Cart</span></a>
                                  </li>
                                  <li><a href="#">
                                          <i class="fa fa-user" aria-hidden="true"></i>
                                          <span class="padding_10">Cart</span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
         <!-- header section end -->

          <!-- Hero section -->
          <section class="hero-section set-bg" data-setbg="images/bg.jpg">
              <div class="hero-slider owl-carousel">
                  <div class="hs-item">
                      <div class="hs-left"><img src="images/slider-img.png" alt=""></div>
                      <div class="hs-right">
                          <div class="hs-content">
                              <div class="price">from $19.90</div>
                              <h2><span>2018</span> <br>summer collection</h2>
                              <a href="" class="site-btn">Shop NOW!</a>
                          </div>
                      </div>
                  </div>
                  <div class="hs-item">
                      <div class="hs-left"><img src="images/slider-img.png" alt=""></div>
                      <div class="hs-right">
                          <div class="hs-content">
                              <div class="price">from $19.90</div>
                              <h2><span>2018</span> <br>summer collection</h2>
                              <a href="" class="site-btn">Shop NOW!</a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Hero section end -->


          <!-- Intro section -->
          <section class="intro-section spad pb-0">
              <div class="section-title">
                  <h2>pemium products</h2>
                  <p>We recommend</p>
              </div>
              <div class="intro-slider">
                  <ul class="slidee">
                      <li>
                          <div class="intro-item">
                              <figure>
                                  <img src="images/intro/1.jpg" alt="#">
                              </figure>
                              <div class="product-info">
                                  <h5>Pink Sunglasses</h5>
                                  <p>$319.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="intro-item">
                              <figure>
                                  <img src="images/intro/2.jpg" alt="#">
                              </figure>
                              <div class="product-info">
                                  <h5>Black Nighty</h5>
                                  <p>$319.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="intro-item">
                              <figure>
                                  <img src="images/intro/3.jpg" alt="#">
                                  <div class="bache">NEW</div>
                              </figure>
                              <div class="product-info">
                                  <h5>Yellow Sholder bag</h5>
                                  <p>$319.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="intro-item">
                              <figure>
                                  <img src="images/intro/4.jpg" alt="#">
                              </figure>
                              <div class="product-info">
                                  <h5>Yellow Sunglasses</h5>
                                  <p>$319.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="intro-item">
                              <figure>
                                  <img src="images/intro/5.jpg" alt="#">
                              </figure>
                              <div class="product-info">
                                  <h5>Black Sholder bag</h5>
                                  <p>$319.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
              <div class="container">
                  <div class="scrollbar">
                      <div class="handle">
                          <div class="mousearea"></div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Intro section end -->


          <!-- Featured section -->
          <div class="featured-section spad">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="featured-item">
                              <img src="images/featured/featured-1.jpg" alt="">
                              <a href="#" class="site-btn">see more</a>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="featured-item mb-0">
                              <img src="images/featured/featured-2.jpg" alt="">
                              <a href="#" class="site-btn">see more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Featured section end -->


          <!-- Product section -->
          <section class="product-section spad">
              <div class="container">
                  <ul class="product-filter controls">
                      <li class="control" data-filter=".new">New arrivals</li>
                      <li class="control" data-filter="all">Recommended</li>
                      <li class="control" data-filter=".best">Best sellers</li>
                  </ul>
                  <div class="row" id="product-filter">
                      <div class="mix col-lg-3 col-md-6 best">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/1.jpg" alt="">
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>Long red Shirt</h6>
                                  <p>$39.90</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 new">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/2.jpg" alt="">
                                  <div class="bache">NEW</div>
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>Hype grey shirt</h6>
                                  <p>$19.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 best">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/3.jpg" alt="">
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>long sleeve jacket</h6>
                                  <p>$59.90</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 new best">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/4.jpg" alt="">
                                  <div class="bache sale">SALE</div>
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>Denim men shirt</h6>
                                  <p>$32.20 <span>RRP 64.40</span></p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 best">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/5.jpg" alt="">
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>Long red Shirt</h6>
                                  <p>$39.90</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 new">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/6.jpg" alt="">
                                  <div class="bache">NEW</div>
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>Hype grey shirt</h6>
                                  <p>$19.50</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 best">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/7.jpg" alt="">
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>long sleeve jacket</h6>
                                  <p>$59.90</p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
                      <div class="mix col-lg-3 col-md-6 best">
                          <div class="product-item">
                              <figure>
                                  <img src="images/products/8.jpg" alt="">
                                  <div class="pi-meta">
                                      <div class="pi-m-left">
                                          <img src="images/icons/eye.png" alt="">
                                          <p>quick view</p>
                                      </div>
                                      <div class="pi-m-right">
                                          <img src="images/icons/heart.png" alt="">
                                          <p>save</p>
                                      </div>
                                  </div>
                              </figure>
                              <div class="product-info">
                                  <h6>Denim men shirt</h6>
                                  <p>$32.20 <span>RRP 64.40</span></p>
                                  <a href="#" class="site-btn btn-line">ADD TO CART</a>
                              </div>
                          </div>
                      </div>
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
                              <img src="images/featured/featured-3.jpg" alt="">
                              <a href="#" class="site-btn">see more</a>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <h4 class="bgs-title">from the blog</h4>
                          <div class="blog-item">
                              <div class="bi-thumb">
                                  <img src="images/blog-thumb/1.jpg" alt="">
                              </div>
                              <div class="bi-content">
                                  <h5>10 tips to dress like a queen</h5>
                                  <div class="bi-meta">July 02, 2018   |   By maria deloreen</div>
                                  <a href="#" class="readmore">Read More</a>
                              </div>
                          </div>
                          <div class="blog-item">
                              <div class="bi-thumb">
                                  <img src="images/blog-thumb/2.jpg" alt="">
                              </div>
                              <div class="bi-content">
                                  <h5>Fashion Outlet products</h5>
                                  <div class="bi-meta">July 02, 2018   |   By Jessica Smith</div>
                                  <a href="#" class="readmore">Read More</a>
                              </div>
                          </div>
                          <div class="blog-item">
                              <div class="bi-thumb">
                                  <img src="images/blog-thumb/3.jpg" alt="">
                              </div>
                              <div class="bi-content">
                                  <h5>the little black dress just for you</h5>
                                  <div class="bi-meta">July 02, 2018   |   By maria deloreen</div>
                                  <a href="#" class="readmore">Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Blog section end -->


          <!-- Footer top section -->
          <section class="footer-top-section home-footer">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-8 col-sm-12">
                          <div class="footer-widget about-widget">
                              <img src="images/logo.png" class="footer-logo" alt="">
                              <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                              <div class="cards">
                                  <img src="images/cards/5.png" alt="">
                                  <img src="images/cards/4.png" alt="">
                                  <img src="images/cards/3.png" alt="">
                                  <img src="images/cards/2.png" alt="">
                                  <img src="images/cards/1.png" alt="">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="footer-widget">
                              <h6 class="fw-title">usefull Links</h6>
                              <ul>
                                  <li><a href="#">Partners</a></li>
                                  <li><a href="#">Bloggers</a></li>
                                  <li><a href="#">Support</a></li>
                                  <li><a href="#">Terms of Use</a></li>
                                  <li><a href="#">Press</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="footer-widget">
                              <h6 class="fw-title">Sitemap</h6>
                              <ul>
                                  <li><a href="#">Partners</a></li>
                                  <li><a href="#">Bloggers</a></li>
                                  <li><a href="#">Support</a></li>
                                  <li><a href="#">Terms of Use</a></li>
                                  <li><a href="#">Press</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="footer-widget">
                              <h6 class="fw-title">Shipping & returns</h6>
                              <ul>
                                  <li><a href="#">About Us</a></li>
                                  <li><a href="#">Track Orders</a></li>
                                  <li><a href="#">Returns</a></li>
                                  <li><a href="#">Jobs</a></li>
                                  <li><a href="#">Shipping</a></li>
                                  <li><a href="#">Blog</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-6">
                          <div class="footer-widget">
                              <h6 class="fw-title">Contact</h6>
                              <div class="text-box">
                                  <p>Your Company Ltd </p>
                                  <p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
                                  <p>+53 345 7953 32453</p>
                                  <p>office@youremail.com</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Footer top section end -->

          <!-- Footer section -->
          <footer class="footer-section">
              <div class="container">
                  <p class="copyright">
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
              </div>
          </footer>
          <!-- Footer section end -->


      <!-- footer section start
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
         </div>
      </div>
       copyright section end -->
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