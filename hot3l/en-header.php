<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo @$description; ?>">
    <meta name="keywords" content="<?php echo @$keywords; ?>">
    <meta name="robots" content="index, follow" />
    <meta name="copyright" content="Smart Hotel Montevideo | Uruguay" />
    <meta name="author" content="Federico Tosi - www.federicotosi.me">
    <link rel="shortcut icon" type="text/css" href="../img/iso.svg?v1.2"/>
    <title><?php echo @$title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS ?v1.1 -->
    <link href="../css/site.css?v2.2" rel="stylesheet">
    <link href="../css/full-slider.css?v2.1" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom Fonts -->
    <link href="../css/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom sendinblue -->
    <link href="../css/sendinblue.css" rel="stylesheet">
    <link href="../css/sib-styles.css" rel="stylesheet">

    <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-P8V76ZH4');</script>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>
    <!-- End Google Tag Manager -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>-->

</head>

<body id="page-top" class="index">

  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8V76ZH4"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="padding-site">

    <nav class="navbar navbar-default navbar-fixed-top" data-aos="fade-in">

        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <div style="float:left">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </div>
                </button>
                <a title="Home | Smart Hotel Montevideo" href="./"><div class="lg"></div></a>
            </div>

            <!--<div class="container-btn-navbar">
              <div class="icons">
                <i class="fas fa-wifi fa-xs"></i>
                <span class="title">1 GB</span>
              </div>
            </div>-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                      <a href="#page-top"></a>
                    </li>
                    <li class="flags visible-xs">
            					<a href="../es"><img src="../img/es.png" class="img-responsive"></a>
            					<a href="../pt"><img src="../img/pt.png" class="img-responsive"></a>
                      <div class="divider-svg"></div>
                    </li>
                    <div class="clearfix"></div>
                    <li>
                      <a title="Hotel | Smart Hotel Montevideo" class="<?php echo ($selected=='hotel')?'selected':''; ?>" href="./">Hotel</a>
                    </li>
                    <li>
                      <a class="page-scroll" title="Location | Smart Hotel Montevideo" href="./#ubicacion">Location</a>
                    </li>
                    <li>
                      <a class="<?php echo ($selected=='habitaciones')?'selected':''; ?>" title="Rooms | Smart Hotel Montevideo" href="rooms-and-suites">Rooms</a>
                    </li>
                    <li>
                      <a class="page-scroll" title="Food & Drink | Smart Hotel Montevideo" href="./#servicios">Food & Drink</a>
                    </li>
                    <li>
                      <a title="Gallery | Smart Hotel Montevideo" data-gallery="site-gallery" href="../img/sections/gallery/1.jpg">Gallery</a>
                    </li>
                    <li>
                      <a class="page-scroll" title="News & Promotions | Smart Hotel Montevideo" href="./#novedades">News & Promotions</a>
                    </li>
                    <li>
                      <a class="page-scroll" title="Contact | Smart Hotel Montevideo" href="./#footer">Contact</a>
                    </li>
                    <div class="divider-svg visible-xs"></div>
                    <li class="dropdown visible-sm visible-md visible-lg">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="../img/en.png" class="img-carpet"> Languages <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a title="Español" href="../es"><img src="../img/es.png" alt="English" class="flags">Español</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a title="Português" href="../pt"><img src="../img/pt.png" alt="Português" class="flags">Português</a></li>
                      </ul>
                    </li>
                    <li class="visible-md visible-lg">
                      <a title="Instagram | Smart Hotel Montevideo" href="https://www.instagram.com/smartmontevideo" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                    <li class="visible-md visible-lg">
                    <a title="Facebook | Smart Hotel Montevideo" href="https://www.facebook.com/smarthotelmontevideo/?fref=ts" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    </li>
                    <!--<li class="visible-sm visible-md visible-lg">
                      <a class="speed-connection"><i class="fas fa-wifi"></i> <span>1 GB</span></a>
                    </li>-->
                    <li class="visible-sm visible-md visible-lg">
                      <a class="btn btn-xl" title="Book Now | Smart Hotel Montevideo" href="https://be.synxis.com/?Hotel=36383&Chain=28734&locale=en-US" target="_blank"><div class="extra-border">Book Now</div></a>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>

    <div class="quick-contact">
      <a title="Book Now | Smart Hotel Montevideo" class="btn btn-xl book-now show-mobile" href="https://be.synxis.com/?Hotel=36383&Chain=28734&locale=en-US" target="_blank"><div class="extra-border">Book Now</div></a>
      <a title="Phone | Smart Hotel Montevideo" class="btns show-mobile" href="tel:59842440229"><i class="fas fa-phone"></i></a>
      <a title="Reservations Email | Smart Hotel Montevideo" class="btns show-mobile" href="mailto:info@smarthotelmontevideo.com"><i class="fas fa-envelope"></i></a>
      <a title="WhatsApp | Smart Hotel Montevideo" class="btns" href="https://api.whatsapp.com/send?phone=59895521999" target="_blank"><div class="icon-wa center-block"></div></a>
    </div>
