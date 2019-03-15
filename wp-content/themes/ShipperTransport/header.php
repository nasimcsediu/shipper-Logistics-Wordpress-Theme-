 <?php 
  
 global $shipper;
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<meta name="author" content="Themezinho">
<meta name="description" content="><?php bloginfo('description'); ?>">
<meta name="keywords" content="">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Shipper Logistic - Transportation Template">
<meta property="og:image" content="../../www.themezinho.net/shipper/preview.html">
<meta property="og:site_name" content="SHIPPER">
<meta property="og:title" content="SHIPPER">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/shipper">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@SHIPPER">
<meta name="twitter:creator" content="@SHIPPER">
<meta name="twitter:title" content="SHIPPER">
<meta name="twitter:description" content="Shipper Logistic - Transportation Template">
<meta name="twitter:image" content="../../www.themezinho.net/shipper/preview.html">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
<link href="ico/favicon.png" rel="shortcut icon">



    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="soft-transition"></div>
<!-- end soft-transition -->
<div class="transition-overlay"></div>
<!-- end transition-overlay -->
<main>
  <aside class="side-box hidden-sm"> <span class="close-side-box"><i class="ion-close"></i></span>
    <div class="side-about">
      <h5>SHIPPER LOGISTIC</h5>
      <figure><img src="images/image1.jpg" alt="Image"></figure>
      <p>You can use the icons above to access more information about our credentials, providing solutions in a host of specific industries.</p>
      <a href="#">READ MORE</a> </div>
    <!-- end side-about -->
    <div class="side-location">
      <h5>FIND A LOCATION</h5>
      <select class="selectpicker">
        <option>Select Dealer</option>
        <option>New York - NYC</option>
      </select>
    </div>
    <!-- end quick-services -->
    <div class="pdf-catalog">
      <h5>DOWNLOAD CATALOGUE</h5>
      <p>App is designed to provide the most reliable information and make the most of your travel experience.</p>
      <i class="ion-document-text"></i> <a href="#">DOWNLOAD</a> </div>
    <!-- end pdf-catalog --> 
  </aside>
  <!-- end side-box -->
  <header class="full-header">
    <nav class="navbar navbar-default">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 hidden-xs"><?php echo $shipper['Header-top-Left-Text'] ?> </div>
            <!-- end col-6 -->
            <div class="col-md-3 col-sm-2 col-xs-4">
              <div class="language dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/flag-en.jpg" alt="Image">Language</a>
                <ul class="dropdown-menu" role="menu">

                  <?php if($shipper['languages']['english']==1):  ?><li><a href="#">ENGLISH</a></li><?php endif; ?>
                  <?php if($shipper['languages']['spanis']==1):  ?><li><a href="#">SPANISH</a></li><?php endif; ?>
                  <?php if($shipper['languages']['bangla']==1):  ?><li><a href="#">BANGLA</a></li><?php endif; ?>
                </ul>
              </div>
            </div>
            <!-- end col-3 -->
            <div class="col-md-3 col-sm-4 col-xs-8"> <span class="date"><?php echo set_current_time(); ?> </span> <span class="weather"><i class="ion-ios-partlysunny"></i> 15°</span> <span class="phone"><i class="ion-ios-telephone"></i> <?php echo $shipper['phone-number'] ?></span> </div>
            <!-- end col-3 --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </div>
      <!-- end top-bar -->
      <div class="container">
        <div class="navbar-header">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
              <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="<?php home_url(); ?>"><img src="<?php echo $shipper['upload-logo']['url'] ?>" alt="Image"></a> </div>
            <!-- end col-5 -->
            <div class="col-md-3 col-sm-4 hidden-xs"> <i class="icon-global"></i>
              <h6>OPENING HOURS<br>
                <span><?php echo $shipper['opening-hours']; ?> </span></h6>
            </div>
            <!-- end col-2 -->
            <div class="col-md-3 col-sm-4 hidden-xs"> <i class="icon-map-pin"></i>
              <h6>OUR LOCATION<br>
                <span><?php echo $shipper['our-location']; ?></span></h6>
            </div>
            <!-- end col-2 -->
            <div class="col-md-3 hidden-sm hidden-xs"> <i class="icon-chat"></i>
              <h6>QUICK SUPPORT<br>
                <span><?php echo $shipper['quick-suport'] ?></span></h6>
            </div>
            <!-- end col-2 --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end navbar-header -->
        <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1">



          <!--<ul class="nav navbar-nav main-menu">
            <li><a href="index-2.html" class="transition">HOME</a></li>
            <li><a href="about-us.html" class="transition">ABOUT US</a></li>
            <li><a href="dealers.html" class="transition">DEALERS</a></li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="services1.html" class="transition">Trade Services</a></li>
                <li><a href="services2.html" class="transition">Dry Cargo</a></li>
                <li><a href="services3.html" class="transition">Reefer Cargo</a></li>
                <li><a href="services4.html" class="transition">Oversized & Breakbulk Cargo</a></li>
                <li><a href="services5.html" class="transition">Intermodal</a></li>
                <li><a href="services6.html" class="transition">Warehousing & Storage </a></li>
                <li><a href="services7.html" class="transition">Cross Trading</a></li>
                <li><a href="services8.html" class="transition">Cargo Trailers</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">PAGES</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="vehicles.html" class="transition">VEHICLES</a></li>                <li><a href="gallery.html" class="transition">GALLERY</a></li>
<li><a href="career.html" class="transition">CAREER</a></li>
<li><a href="masonry.html" class="transition">MASONRY</a></li>
<li><a href="video.html" class="transition">VIDEO</a></li>
<li><a href="elements.html" class="transition">ELEMENTS</a></li>
              </ul>
            </li>
            <li><a href="news.html" class="transition">NEWS</a></li>
            <li><a href="contact.html" class="transition">CONTACT</a></li>
          </ul>-->


  <?php wp_nav_menu(array(
     'theme_location' => 'main-menu',
     'menu_class'     => 'nav navbar-nav main-menu',
     'fallback_cb'    =>  'default_menu',
     'depth'          =>   '3',
     'walker'         => new shipper_Navwalker()


  )); ?>



          
          <ul class="nav navbar-nav social-nav visible-lg visible-xs">
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="ion-social-facebook"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+"><i class="ion-social-googleplus"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="ion-social-youtube"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Vimeo"><i class="ion-social-vimeo"></i></a></li>
          </ul>
          <ul class="nav navbar-nav icon-nav hidden-sm">
            <li><a href="javascript:void(0)" class="hamburger-menu"><i class="ion-navicon"></i></a></li>
            <li><a href="javascript:void(0)" class="search-btn"><i class="ion-search"></i></a></li>
            <li><a href="javascript:void(0)"><!--<i class="ion-android-cart"></i>--></a></li>
            <li class="search-box">
              <form action="<?php echo home_url(); ?>" method="GET">
                <input type="text" name="s" placeholder="Type here">
                <button type="submit"><i class="ion-chevron-right"></i></button>
              </form>
            </li>
          </ul>
        </div>
        <!-- end navbar-collapse --> 
      </div>
      <!-- end container --> 
    </nav>
  </header>
  <!-- end full-header -->


  