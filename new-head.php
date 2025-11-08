<?php
session_start();

include_once('includes/functions.php');
?>


<!DOCTYPE html>
<!-- saved from url=(0033)https://www.luxurialifestyle.com/ -->
<html lang="en-GB">

<head>

    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6B8KHT0BQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T6B8KHT0BQ');
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="msapplication-TileColor" content="#FFFFFF">

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <title>Luxury Hotel - Magazine</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.luxuryhotelsmagazines.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- icofont -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionic/1.3.2/css/ionic.css">-->
    <!-- carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!--Hcapcha-->
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    <link rel="stylesheet" id="wp-block-library-css" href="<?= $base_url ?>css/style.min.css" type="text/css" media="all">

    <link href="<?= $base_url ?>css/sweetalert.css" rel="stylesheet">

    <link rel="stylesheet" id="main-style-css" href="<?= $base_url ?>css/styles.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script async src="<?= $base_url ?>js/sweetalert.min.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>


    <!-- Bootstrap 5 CDN Link -->
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Summernote CSS - CDN Link -->
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <style>
        .eq-footer-container {
            width: 85%;
            margin: 0 auto;
        }

        body {
            color: #000;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.667;
            word-spacing: 0.2px;
            letter-spacing: 0.5px;
            overflow-x: hidden !important;
        }

        div#top-wrapper {
            max-width: 100vw !important;
        }

        .numberss {
            font-family: 'Festive', cursive;
            font-size: 30px;
            color: #8d6c21;
        }


        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #B78628;
        }

        ul.magazine-distributed {
            display: block;
            text-align: justify;
            list-style: inherit;
        }

        .header-logo {
            height: auto;
            padding: 0;
            width: 50%;
        }

        strong.numberss {
            /* font-family: 'Festive', cursive;*/
            font-size: 15px;
        }

        main-menu__list,
        .sub-menu {
            display: none;
            list-style: none;
        }

        /*Change toggle size by adjusting width & height*/
        .tb-menu-toggle {
            border: 0;
            position: relative;
            background: transparent;
            cursor: pointer;
        }

        /*Change toggle color here*/
        .tb-menu-toggle i {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20%;
            -webkit-transition: all .2s;
            -moz-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
        }

        .tb-menu-toggle i:nth-child(2) {
            top: 40%;
        }

        .tb-menu-toggle i:nth-child(3) {
            top: 80%;
        }

        /* Style the active toggle here */
        .tb-menu-toggle.tb-active-toggle i {}

        /*Animation of the toggle*/
        .tb-menu-toggle.tb-animate-toggle i:first-child,
        .tb-menu-toggle.tb-animate-toggle i:nth-child(2) {
            top: 40%;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .tb-menu-toggle.tb-animate-toggle i:nth-child(3) {
            top: 40%;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        #publish-form input {
            font-size: 16px;
        }

        .article-form .form-group {
            margin-bottom: 14px;
        }

        .article-form .error {
            color: #ef0d0d;
            margin-top: 0px;
        }

        .master-div,
        .master-copy {
            width: 1px;
            height: 1px;
            opacity: 0.1;
        }

        label#tnx_id-error {
            background: #ef0d0d;
            color: #fff;
            padding: 10px 10px 5px 10px;
            text-align: center;
            vertical-align: bottom;
            border-radius: 4px;
        }

        .submit-action {
            background: #b7191e;
            padding: 8px 40px;
        }

        .submit-action i {
            position: relative;
            top: -2px;
        }

        select.form-control {
            color: #495057 !important;
        }


        textarea#summernote {
            display: block !important;
            width: 0px !important;
            height: 0px !important;
            opacity: 0;
            font-size: 1px;
            line-height: 1px;
            min-height: 0px;
            resize: none;
        }

        i.fas.fa-square.fa-stack-2x {
            color: #5e5151;
        }

        .search-action {
            position: relative;
            top: 28px;
        }

        .accordion {
            background-color: transparent;
            color: #fff;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            /*font-size: 15px;*/
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: transparent;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: transparent;
            overflow: hidden;
            color: white;
            font-size: 12px;
            padding-left: 10px;
        }

        .header-a:hover {
            color: #B78729 !important;
        }

        @media screen and (max-width:768px) {
            .new-head-logo {
                width: 190px !important;
            }


        }

        #findhotelbutnhome {
            text-decoration: none;
            background-color: #B6191F;
            color: white;
        }

        @media screen and (max-width:426px) {

            #findhotelbutnhome {
                font-size: 12px !important;
            }

            #findhotelbutnhomelogo {
                width: 200px !important;
            }

        }

        @media screen and (max-width: 394px) {

            #findhotelbutnhome {
                font-size: 10px !important;
            }

            #findhotelbutnhomelogo {
                width: 150px !important;
            }

        }
    </style>

</head>

<body class="clearfix homepage">
    <div class="top-wrapper wrapper clearfix" id="top-wrapper">
        <div class="eq-header-home">


            <div class="eq-header-main">
                <a href="javascript:void(0);" class="eq-menu-btn nav-toggle" tabindex="-1">Menu</a>

                <a href="/" id="findhotelbutnhomelogo" title="Luxury Hotels Magazines!">
                    <img src="assets/images/logo/logo.svg" alt="Luxury Hotels Magazines!" title="Luxury Hotels Magazines!" class="new-head-logo" style="width: 300px;">
                </a>

                <a href="<?= $base_url ?>luxury-hotels-selection" aria-label="toggle searsch" id="findhotelbutnhome" class="eq-search-btns search-toggles find-class btn">Find Hotel</a>

            </div>

            <div class="eq-header-menu text-center">

                <ul class="align-items-center gap-4 text-center" style="display:inline-flex;margin-right:90px;color:#B6191F;">
                    <li><a href="https://www.luxuryhotelsmagazines.com/login">Login</a></li>
                    <li><a href="https://www.luxuryhotelsmagazines.com/create-profile">Create Hotel Profile</a></li>
                    <li><a href="https://www.luxuryhotelsmagazines.com/Publish-News-PR">Publish Your News</a></li>
                </ul>

            </div>
            <nav id="main-menu" class="main-menu" style="z-index: 100001;transition: 0.5s;">
                <button class="close-btn"></button>
                <div class="eq-side-menu">

                    <ul id="menu">


                        <li><a href="<?= $base_url ?>">Home</a></li>
                        <li><a href="<?= $base_url ?>luxury-magazines">Magazines</a></li>

                        <li>
                            <a href="#news" class="accordion">Latest News</a>
                            <ul class="panel">
                                <!-- <li><a href="<?= $base_url ?>Publish-News-PR">-Publish your News</a></li>
                                <li><a href="<?= $base_url ?>supercars">-Super Cars</a></li>
                                <li><a href="<?= $base_url ?>boutiques">-Boutiques & Jewellery</a></li>
                                <li><a href="<?= $base_url ?>spa">-Spa & Beauty</a></li> -->
                                <li><a href="<?= $base_url ?>hotels">-Hotels & Resorts</a></li>
                                <!-- <li><a href="<?= $base_url ?>properties">-Properties</a></li>
                                <li><a href="<?= $base_url ?>restaurants">-Restaurants/Bars</a></li>
                                <li><a href="<?= $base_url ?>yachts">-Yachts & Boats</a></li> -->
                                <?php
                                // }
                                ?>

                            </ul>
                        </li>

                        <li>
                            <a href="#" class="accordion">Luxury Hotels/Resorts</a>
                            <ul class="panel">
                                <li><a href="<?= $base_url ?>luxury-hotels-selection">-Find Luxury Hotels</a></li>
                                <li><a href="<?= $base_url ?>create-profile">-Create Profile</a></li>
                                <li><a href="<?= $base_url ?>Publish-Hotel-News-PR">-Publish Hotel News/PR</a></li>

                            </ul>
                        </li>

                    </ul>

                    <ul class="main-menu__socials">
                        <li><a href="https://www.instagram.com/luxuryhotelsbrand/" target="_blank" title="Follow us on Instagram"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a href="https://www.facebook.com/LuxuryHotelsMagazines" target="_blank" title="Like us on Facebook"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCxV4ClKpFA95eU-4c8sN3Tg" target="_blank" title="Follow on Youtube"><i class="fab fa-youtube-square"></i></a></li>
                        <li><a href="mailto:info@luxuryhotelsmagazines.com" title="Mail Us"><i class="far fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <section class="search-fullscreen" id="search-fullscreen">
                <form method="get" action="#">
                    <input type="text" name="s" class="search-fullscreen__input" placeholder="Enter Keyword">
                    <p>Enter your search keyword or phrase and press enter.</p>
                </form>
            </section>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
                $('.toggle').click(function(e) {
                    e.preventDefault();

                    var $this = $(this);

                    if ($this.next().hasClass('show')) {
                        $this.next().removeClass('show');
                        $this.next().slideUp(350);
                    } else {
                        $this.parent().parent().find('li .inner').removeClass('show');
                        $this.parent().parent().find('li .inner').slideUp(350);
                        $this.next().toggleClass('show');
                        $this.next().slideToggle(350);
                    }
                });


                jQuery(document).ready(function($) {
                    $('.eq-menu-btn, .close-btn').click(function() {
                        $('#main-menu').toggleClass('open');
                        $('.eq-search-btn').removeClass('open');
                        $('#search-fullscreen').fadeOut();
                    });

                    $('.eq-search-btn').click(function() {
                        $('#search-fullscreen').fadeToggle();
                        $('.search-fullscreen__input').focus();
                        $('.eq-search-btn').toggleClass('open');
                        $('#main-menu').removeClass('open');
                    });
                });
            </script>
        </div>
    </div>