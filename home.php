<?php
session_start();
if(isset($_SESSION['$UserName'])){
	header('location:Admin/index.php');
} 
if(isset($_SESSION['$UserName_job'])){
	header('location:JobSeeker/index.php');
} 
if(isset($_SESSION['$UserName_emp'])){
	header('location:Employer/index.php');
} 
?>


<!DOCTYPE HTML>
<!--[if IE 9 ]><html class="loading" lang="en" data-textdirection="ltr"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Get Worker</title>

    <link rel="icon" type="image/ico" href="images/favicon.png">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131764623-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-131764623-1');
    </script>
    <!-- Event snippet for SOW conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-619724014/uoFACMaak94BEO75wKcC',
                'event_callback': callback
            });
            return false;
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Product",
            "name": "Service On Wheel",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "reviewCount": "789586"
            }
        }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z05TNMDV14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Z05TNMDV14');
    </script>
</head>

<body>
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->

    <link rel="stylesheet" type="text/css" href="css/vicons-font.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="js/news/li-scroller.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="css/custom.css" rel="stylesheet">
    <style>
        .blink_me {
            -webkit-animation: blink 1s step-end infinite;
            animation: blink 1s step-end infinite;
        }

        @-webkit-keyframes blink {
            50% {
                visibility: hidden;
            }
        }

        @keyframes blink {
            50% {
                visibility: hidden;
            }
        }
    </style>

    <script>
        (function () {

            var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);

            if (isSafari) {

                document.getElementById('support-note').style.display = 'block';

            }

        })();
    </script>
    
    <!--<div itemscope="itemscope" itemtype="http://schema.org/LocalBusiness" style="display:none">
    <span itemprop="name">Service on wheel</span>

    <div itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">m.b.town</span>
        <span itemprop="addressLocality">NAGPUR</span>,
        <span itemprop="addressRegion">IN</span>
        <span itemprop="postalCode">44003</span>
        <span itemprop="addressCountry">IN</span>
    </div>
    Phone: <span itemprop="telephone">8087611222</span>
    Website: <a itemprop="URL">https://www.serviceonwheel.com/</a>
</div>-->

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Service on wheel",
            "image": "https://www.serviceonwheel.com/uploads/service/89011584079038.png",
            "logo": "https://www.serviceonwheel.com/uploads/service/89011584079038.png",
            "url": "https://www.serviceonwheel.com/",
            "telephone": "8087611222",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "69,m.b.town,koradi road,mankapur",
                "addressLocality": "Nagpur",
                "postalCode": "440030",
                "addressCountry": "India"
            }
        }
    </script>
    <style type="text/css">
        @media (max-width:767px) {
            .bootstrap-select>.dropdown-menu ul li:last-child {
                margin-bottom: 26px;
            }
        }
    </style>
    <div class="preloader">
        <div id="loaderImage"></div>
    </div>
    <style>
        /*input.error

	  {

		border:1px solid red !important;

	  }

	  label.error

	  {

		display:none !important;

	  }*/
    </style>
    <header id="navigation">
        <div class="navbar main-nav animated fadeIn navbar-fixed-top" data-wow-duration="700ms" data-wow-delay="300ms"
            role="banner">
            <div class="new-nav" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="text-left sm-center"> <a
                                    href="download-app.html"><!--<i class="fa fa-download" aria-hidden="true"> </i>--><img
                                        src="images/app_download.gif" style="width:15px; padding-right:2px" /> Download
                                    Mobile App </a> </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="text-right sm-center">
                                <p>Need Help? Call Us : 9823483469 / 7950478708 / 9689843553</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    
                    <a class="button button--aylen button--border-thin button--round-s float-r" href="./registration.html">Join Us</a>
                    <a href="./Login.php"
                        class="button button--aylen button--border-thin button--round-s float-r" data-toggle="modal"
                        data-target="#myModal">Login</a>

                    <a class="navbar-brand" href="./home.php">

                    <!-- <img src="images/Logo.png"> -->

                        <!-- <h1> Service on wheel</h1>-->
                    </a>
                    <!-- <a class="cititext" href="#">Nagpur<i class="fa fa-angle-down" aria-hidden="true"></i></a> -->
                </div>
                <nav class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav float-right">
                        <li><a href="home.php">Home</a></li>
                        <li class="scroll "><a href="about-us.html">About Us</a></li>
                        <li class="scroll "><a href="./Services.html">Services</a></li>
                        <li class="scroll"><a href="#customer-says">Blogs</a></li>

                    </ul>
                </nav>
                <div class="top-btn-block bg-2 xs-a-5px">






                    <!-- <a href="#" class="my-ac-btn">My Account</a>  -->


                    <a href="./Login.php"
                        class="button button--aylen button--border-thin button--round-s float-r" >Login</a>

                        <a href="./registration.html"
                        class="button button--aylen button--border-thin button--round-s float-r" >Join Us</a>
    

                </div>
            </div>

    
        </div>
    </header>

    <div class="banner-new-home">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-6 col-md-5">
                    <h2 class="animated zoomIn">Expert Professional Home Services, Book Online</h2>
                    <p class="title-sub-banner">Get Worker helps you live smarter, giving you time to focus what's most
                        important.</p>
                    <a href="./Employerregistration.php"
                        class="button button--aylen button--border-thin button--round-s">Register</a>
                </div>
                <div class="col-sm-6 ml-auto text-right ban-img col-md-6">
                    <img class="img-max" src="images/banner-clean.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="categ-slide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  col-md-12">

                    <div id="category-slide" class="owl-carousel text-center owl-theme">


                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/530771670303201.png"
                                alt="Air Conditioner" /><br /> Air Conditioner</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/793741670309606.png"
                                alt="Refrigerator" /><br /> Refrigerator</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/251981670309575.png"
                                alt="Washing machine" /><br /> Washing machine</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/962211670309545.png"
                                alt="Microwave oven" /><br /> Microwave oven</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/578261670309501.png"
                                alt="Water purifier" /><br /> Water purifier</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/54511670307655.png"
                                alt="Geyser" /><br /> Geyser</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/914761670307602.png"
                                alt="Kitchen Chimney" /><br /> Kitchen Chimney</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/460461670412206.png"
                                alt="Kitchen Appliances" /><br /> Kitchen Appliances</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/782821670307558.png"
                                alt="TV repair" /><br /> TV repair</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/463041670415979.png"
                                alt="Plumber" /><br /> Plumber</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/308121670306867.png"
                                alt="Carpenter" /><br /> Carpenter</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/734311670304344.png"
                                alt="Electrician" /><br /> Electrician</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/647771670309969.png"
                                alt="Home Painter" /><br /> Home Painter</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/404631670309707.png"
                                alt="Civil contractor" /><br /> Civil contractor</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/705551670412628.png"
                                alt="Interior Designer" /><br /> Interior Designer</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/519621677322304.jpg"
                                alt="Bathroom Accessories & Sanitary war.." /><br /> Bathroom Accessories & Sanitary
                            war..</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/22371670309343.png"
                                alt="Barber" /><br /> Barber</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/679671670415922.png"
                                alt="Car Repair" /><br /> Car Repair</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/805471670309135.png"
                                alt="Bike Repair" /><br /> Bike Repair</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/763121670307429.png"
                                alt="Computer Repair" /><br /> Computer Repair</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/491351670304038.png"
                                alt="CCTV Camera" /><br /> CCTV Camera</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/442541670309656.png"
                                alt="Room cooler" /><br /> Room cooler</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/890041670303552.png"
                                alt="Air Cooler" /><br /> Air Cooler</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/830421670303993.png"
                                alt="Water cooler" /><br /> Water cooler</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/648341670303852.png"
                                alt="Deep Freezer" /><br /> Deep Freezer</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/34621670415862.png"
                                alt="Inverter" /><br /> Inverter</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/496481670311713.png"
                                alt="Pest control" /><br /> Pest control</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/464851674651280.jpg"
                                alt="Cleaning" /><br /> Cleaning</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/967151670309225.png"
                                alt="Sanitization" /><br /> Sanitization</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/678541670310146.png"
                                alt="Fabrication" /><br /> Fabrication</a>
                        </div>

                        <div class="item">
                            <img src="https://www.serviceonwheel.com/uploads/service/550721670307346.png"
                                alt="Solar" /><br /> Solar</a>
                        </div>

                    </div>

                    <div class="owl-theme">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div id="how-work" class="padding-top">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-4">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">How it works</h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">3 simple steps to
                        Trukky freedom</p>
                </div>
                <div class="col-sm-8 b-left">
                    <!-- <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>-->
                </div>
            </div>
            <div class="row section-title">
                <div class="col-sm-4 text-center">
                    <div class="how-works-block text-left">
                        <img class="harrow" src="images/harrow.png" alt="">
                        <div class="img"> <img src="images/hstep1.png" alt=""></div>
                        <h5><span>Step 1</span><br /> Find Worker Online </h5>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="how-works-block text-left">
                        <img class="harrow" src="images/harrow.png" alt="">
                        <div class="img"> <img src="images/hstep2.png" alt=""></div>
                        <h5><span>Step 2</span><br /> Contact </h5>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="how-works-block text-left">
                        <div class="img"> <img src="images/hstep3.png" alt=""></div>
                        <h5><span>Step 3</span><br /> Pay After Work is Done</h5>
                    </div>
                </div>
            </div>
            <div class="how-works-block hide">
                <ul>
                    <li class="step-1 col-md-3">
                        <div class="img"> <img src="images/hstep1.png" alt=""></div> <span><em>Step 1</em><br /> Book
                            Online or Phone</span>
                    </li>
                    <li class="arrow col-md-2"><img src="images/harrow.png" alt=""></li>
                    <li class="step-2 col-md-2">
                        <div class="img"> <img src="images/hstep2.png" alt=""></div> <span><em>Step 2</em><br />Get
                            Booking Details Via SMS</span>
                    </li>
                    <li class="arrow col-md-2"><img src="images/harrow.png" alt=""></li>
                    <li class="step-3 col-md-3">
                        <div class="img"> <img src="images/hstep3.png" alt=""></div> <span><em>Step 3</em><br />Pay
                            After Work is Done</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>





    <div id="salonHome" class="padding-top padding-bottom">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-6">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">Washing machine</h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">There are only
                        two times that your washing machine will talk to you: when it’s done and when it needs help, so
                        don't worry we are here !!!!!!!</p>
                </div>

            </div>



            <div class="row">
                <div class="col-sm-12 refitem text-center">

                    <div id="H-slide-1" class="owl-carousel text-center owl-theme">

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/351681671537830.jpg"
                                    alt="Repair">
                            </div>
                            <span class="appText">Repair</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/721901671537788.jpg"
                                    alt="display issue">
                            </div>
                            <span class="appText">display issue</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/463151671537910.jpg"
                                    alt="Water drain issue">
                            </div>
                            <span class="appText">Water drain issue</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/840051671537879.jpg"
                                    alt="Tub rotation issue">
                            </div>
                            <span class="appText">Tub rotation issue</span>

                        </div>

                        <div class="item">
                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/611091671599226.jpg"
                                    alt="No Power issue">
                            </div>
                            <span class="appText">No Power issue</span>


                        </div>





                    </div>

                    <div class="owl-theme hide">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <div id="cleanPest" class="padding-top padding-bottom">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-6">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">Carpenter</h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">Our Carpentry
                        work is the Illusion of Perfection!!!!</p>
                </div>

            </div>



            <div class="row">
                <div class="col-sm-12 refitem text-center">

                    <div id="H-slide-3" class="owl-carousel text-center owl-theme">

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/555911671535934.jpg"
                                    alt="Cuborad & Drawer">
                            </div>
                            <span class="appText">Cuborad & Drawer</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/117811671188219.jpg"
                                    alt="Repair">
                            </div>
                            <span class="appText">Repair</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/849891670587516.jpg"
                                    alt="Installation">
                            </div>
                            <span class="appText">Installation</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/247491675746541.jpg"
                                    alt="Hardware  material supplier">
                            </div>
                            <span class="appText">Hardware material supplier</span>

                        </div>





                    </div>

                    <div class="owl-theme hide">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div id="cleanPest" class="padding-top padding-bottom">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-6">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">Geyser</h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">"Human beings are
                        like tea-bags. You don't know your own strength until you get hot water."</p>
                </div>

            </div>



            <div class="row">
                <div class="col-sm-12 refitem text-center">

                    <div id="H-slide-4" class="owl-carousel text-center owl-theme">

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/566381671797478.jpg"
                                    alt="Electric Geyser Repair">
                            </div>
                            <span class="appText">Electric Geyser Repair</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/164091671794414.jpg"
                                    alt="Electric Geyser Shifting">
                            </div>
                            <span class="appText">Electric Geyser Shifting</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/191081671795026.jpg"
                                    alt="Gas geyser Repair">
                            </div>
                            <span class="appText">Gas geyser Repair</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/180221671795046.jpg"
                                    alt="Gas geyser heating issue">
                            </div>
                            <span class="appText">Gas geyser heating issue</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/373391671795063.jpg"
                                    alt="Gas geyser sparking issue">
                            </div>
                            <span class="appText">Gas geyser sparking issue</span>

                        </div>





                    </div>

                    <div class="owl-theme hide">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div id="" class="padding-top padding-bottom">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-6">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">Air Conditioner</h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">Beat the heat ,
                        Book for instant Services</p>
                </div>

            </div>



            <div class="row">
                <div class="col-sm-12 refitem text-center">

                    <div id="H-slide-5" class="owl-carousel text-center owl-theme">

                        <div class="item">
                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/729651670412834.jpg"
                                    alt="Repair">
                            </div>
                            <span class="appText">Repair</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/885241673525900.jpg"
                                    alt="Service">
                            </div>
                            <span class="appText">Service</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/765461670409535.jpg"
                                    alt="Installation">
                            </div>
                            <span class="appText">Installation</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/893251675743861.jpg"
                                    alt="Air Conditioner  Purchase">
                            </div>
                            <span class="appText">Air Conditioner Purchase</span>

                        </div>





                    </div>

                    <div class="owl-theme hide">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div id="salonHome" class="padding-top padding-bottom">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-6">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">Plumber</h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">“People say they
                        are always waiting for GOD to appear, but have you ever tried to find a plumber on a Sunday?”
                    </p>
                </div>

            </div>



            <div class="row">
                <div class="col-sm-12 refitem text-center">

                    <div id="H-slide-6" class="owl-carousel text-center owl-theme">

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/891591670584966.jpg"
                                    alt="Repair">
                            </div>
                            <span class="appText">Repair</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/478661670587230.jpg"
                                    alt="Removal">
                            </div>
                            <span class="appText">Removal</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/609611670584726.jpg"
                                    alt="Installation">
                            </div>
                            <span class="appText">Installation</span>

                        </div>

                        <div class="item">

                            <div class="col-xs-12 bg-white text-center">
                                <img src="https://www.serviceonwheel.com/uploads/service/315811673929679.jpg"
                                    alt="Other">
                            </div>
                            <span class="appText">Other</span>

                        </div>





                    </div>

                    <div class="owl-theme hide">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>







    <div id="customer-says" class="padding-top">
        <div class="container">
            <div class="row section-title">
                <div class="col-sm-4">
                    <h3 class="wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">What Customer say </h3>
                    <p class="wow fadeInUp sub-title" data-wow-duration="700ms" data-wow-delay="300ms">Testimonials </p>
                </div>
                <div class="col-sm-8 b-leftis">
                    <p>The truth is that you can not satisfy everyone all of the time. And you never read minds. But
                        ServiceOnWheel is Expert in the home services industry. and We are perfect to Retain a client by
                        our exceptional customer experience and
                        professional technician.</p>
                </div>
            </div>
            <div class="row section-title">
                <div class="col-sm-12">
                    <div id="testimonial-slide" class="owl-carousel text-center owl-theme">

                        <div class="item">
                            <div class="col-xs-12 text-left bg-white">
                                <div class="col-lg-12 headi">
                                    <img src="uploads/homereview/399411671172940.jpg" alt="">
                                    <h4>sneha<br /><span>RANCHI</span><br /> <span class="s2">Service Rated <em><i
                                                    class="fa fa-star"></i> 5.5</em></span></h4>
                                </div>
                                <div class="col-lg-12">
                                    <p><img src="images/quote-left.png" />I purchased Lg split air conditioner from a
                                        local shop but not getting timely air conditioning installation service.searched
                                        air conditioning companies.and called Service on wheel
                                        technician.they offered and completed Ac installation service at reasonable
                                        cost.</p>
                                </div>
                                <div class="col-lg-12 text-center p-0" style="padding: 0;">
                                    <hr />
                                    <span class="exprt">Expert</span>
                                </div>
                                <div class="col-lg-7 col-xs-8 headi down">
                                    <img src="uploads/homereview/687811671174678.jpg" alt="">
                                    <h4><i class="fa fa-star"></i> <span>5.5</span><br /> Santosh
                                        prasad<br /><span>Ranchi</span></h4>
                                </div>
                                <div class="col-lg-5 col-xs-4 text-right">
                                    <span class="tg">Air Conditioner</span>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 text-left bg-white">
                                <div class="col-lg-12 headi">
                                    <img src="uploads/homereview/467301671172983.jpg" alt="">
                                    <h4>Ram Daryani<br /><span>Ahmedabad</span><br /> <span class="s2">Service Rated
                                            <em><i class="fa fa-star"></i> 5.0</em></span></h4>
                                </div>
                                <div class="col-lg-12">
                                    <p><img src="images/quote-left.png" />Only 5 stars?! if I could give Service on
                                        wheel 10 stars I would. My new home had some real issues, and local electricians
                                        in Ahmedabad. went above-and-beyond to resolve them all.
                                        He was generous with his time and knowledge. I found him to be honest and
                                        trustworthy, and I'm very pleased with his work. Will definitely use him again
                                        if needed."</p>
                                </div>
                                <div class="col-lg-12 text-center p-0" style="padding: 0;">
                                    <hr />
                                    <span class="exprt">Expert</span>
                                </div>
                                <div class="col-lg-7 col-xs-8 headi down">
                                    <img src="uploads/homereview/975761671174583.jpg" alt="">
                                    <h4><i class="fa fa-star"></i> <span>4.0</span><br /> Milind
                                        Manohar<br /><span>Ahmedabad</span></h4>
                                </div>
                                <div class="col-lg-5 col-xs-4 text-right">
                                    <span class="tg">Electrician</span>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 text-left bg-white">
                                <div class="col-lg-12 headi">
                                    <img src="uploads/homereview/319051671173434.jpg" alt="">
                                    <h4>Anjali saxena<br /><span>Bhopal</span><br /> <span class="s2">Service Rated
                                            <em><i class="fa fa-star"></i> 4.9</em></span></h4>
                                </div>
                                <div class="col-lg-12">
                                    <p><img src="images/quote-left.png" />I had a wonderful experience of beauty salon
                                        service at home in Bhopal. Service quality is comparable to top salons in
                                        metros. Key thing is the personal attention from the owners.
                                        Nisha really understands your needs. Nice and good experience, also I would
                                        recommend for everyone Who is looking for hair salon service at home in Bhopal
                                        or beauty parlor service at home in Bhopal.Would love to
                                        call again.</p>
                                </div>
                                <div class="col-lg-12 text-center p-0" style="padding: 0;">
                                    <hr />
                                    <span class="exprt">Expert</span>
                                </div>
                                <div class="col-lg-7 col-xs-8 headi down">
                                    <img src="uploads/homereview/683061671174664.png" alt="">
                                    <h4><i class="fa fa-star"></i> <span>4.0</span><br />
                                        Simardeep<br /><span>Bhopal</span></h4>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <style>
        .google-language-div .skiptranslate {
            color: #333132;
        }

        .google-language-div {
            color: #333132;
            max-width: 250px;
            margin-top: 25px;
        }

        .google-language-div .goog-te-combo {
            padding: 5px;
            border-radius: 5px;
            min-width: 230px;
            color: #000 !important;
        }

        .google-language-div span {
            display: none;
        }

        .icon-com {
            position: fixed;
            bottom: 14px;
            box-shadow: 0px 2px 15px rgb(44 73 100 / 22%);
            left: 10px;
            border-radius: 5px;
            padding: 6px 16px;
            background: #57bb63;
            z-index: 99999;
            color: #fff;
        }

        .icon-com:hover {
            background-color: #333;
            color: #fff;
        }
    </style>





    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <script type="text/javascript" src="js/canvas.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script id="rendered-js">
        $(function () {
            // Owl Carousel
            var owl = $("#category-slide");
            owl.owlCarousel({

                items: 10,
                margin: 10,
                loop: false,
                dots: false,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#categ-slide .custom-nav',
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 7
                    },
                    1000: {
                        items: 10
                    }
                }

            });



            var owl = $("#H-slide-1");
            owl.owlCarousel({

                items: 4,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#appliance .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });


            var owl = $("#H-slide-2");
            owl.owlCarousel({

                items: 4,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#appliance .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });


            var owl = $("#H-slide-3");
            owl.owlCarousel({

                items: 4,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#appliance .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });


            var owl = $("#H-slide-4");
            owl.owlCarousel({

                items: 4,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#appliance .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });


            var owl = $("#H-slide-5");
            owl.owlCarousel({

                items: 4,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#appliance .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });


            var owl = $("#H-slide-6");
            owl.owlCarousel({

                items: 4,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#appliance .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });





            var owl = $("#testimonial-slide");
            owl.owlCarousel({

                items: 3,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#testimonial-slide .custom-nav',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }

            });


            var owl = $("#client-slide");
            owl.owlCarousel({

                items: 3,
                margin: 20,
                loop: false,
                dots: false,
                autoplay: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navContainer: '#client-slide .custom-nav',
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }

            });



        });
    </script>
    <link rel="stylesheet" href="js/jqueryui/jquery-ui.min.css">
    <script src="js/jqueryui/jquery-ui.min.js"></script>
    <script>
        $(function () {
            $("#searchinput").autocomplete({
                source: function (request, response) {


                    $.ajax({
                        url: "scripts/ajax/index.php",
                        type: 'post',
                        dataType: "json",
                        data: 'method=show_suggessions_service&queryString=' + request.term,
                        success: function (data) {
                            response(data);
                        }
                    });
                },
                minLength: 0,
                select: function (event, ui) {



                    window.location.href = ui.item.URL;
                    return false;
                }
            }).focus(function () {
                $(this).autocomplete("search");
            });
        });
    </script>
       
</body>

</html>