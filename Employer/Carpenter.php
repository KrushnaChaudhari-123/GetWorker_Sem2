<?php
session_start();
if (isset($_SESSION['$UserName_emp'])) {
} else {
    header('location:../home.php');
}
?>
<!DOCTYPE HTML>
<!--[if IE 9 ]><html class="loading" lang="en" data-textdirection="ltr"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Employer Home Page</title>
    <link rel="icon" type="image/ico" href="../images/favicon.png">
    <meta name="google-site-verification" content="Btj65UJzhgL2yec17RikOMqsMEdl_QYW2vJdhKpkwIk" />

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
            var callback = function() {
                if (typeof(url) != 'undefined') {
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

<body id="single-blog-page">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="../css/bootstrap-select.min.css" rel="stylesheet">
    <!-- <link href="css/base.css" rel="stylesheet">
<link href="css/particles.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../css/vicons-font.css" />
    <link rel="stylesheet" type="text/css" href="../css/buttons.css" />
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <script>
        (function() {
            var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
            if (isSafari) {
                document.getElementById('support-note').style.display = 'block';
            }
        })();
    </script>




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
        * {
            margin: 0;
            padding: 0;

            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            min-height: 100vh;
            background: url(images/html_table.jpg) center / cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main.table {
            width: 82vw;
            height: 90vh;
            background-color: #fff5;

            backdrop-filter: blur(7px);
            box-shadow: 0 .4rem .8rem #0005;
            border-radius: .8rem;

            overflow: hidden;
        }

        .table__header {
            width: 100%;
            height: 10%;
            background-color: #fff4;
            padding: .8rem 1rem;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table__header .input-group {
            width: 35%;
            height: 100%;
            background-color: #fff5;
            padding: 0 .8rem;
            border-radius: 2rem;

            display: flex;
            justify-content: center;
            align-items: center;

            transition: .2s;
        }

        .table__header .input-group:hover {
            width: 45%;
            background-color: #fff8;
            box-shadow: 0 .1rem .4rem #0002;
        }

        .table__header .input-group img {
            width: 1.2rem;
            height: 1.2rem;
        }

        .table__header .input-group input {
            width: 100%;
            padding: 0 .5rem 0 .3rem;
            background-color: transparent;
            border: none;
            outline: none;
        }

        .table__body {
            width: 95%;
            max-height: calc(89% - 1.6rem);
            background-color: #fffb;

            margin: .8rem auto;
            border-radius: .6rem;

            overflow: auto;
            overflow: overlay;
        }

        .table__body::-webkit-scrollbar {
            width: 0.5rem;
            height: 0.5rem;
        }

        .table__body::-webkit-scrollbar-thumb {
            border-radius: .5rem;
            background-color: #0004;
            visibility: hidden;
        }

        .table__body:hover::-webkit-scrollbar-thumb {
            visibility: visible;
        }

        table {
            width: 100%;
        }

        td img {
            width: 36px;
            height: 36px;
            margin-right: .5rem;
            border-radius: 50%;

            vertical-align: middle;
        }

        table,
        th,
        td {
            border-collapse: collapse;
            padding: 1rem;
            text-align: left;
        }

        thead th {
            position: sticky;
            top: 0;
            left: 0;
            background-color: #d5d1defe;
            cursor: pointer;
            text-transform: capitalize;
        }

        tbody tr:nth-child(even) {
            background-color: #0000000b;
        }

        tbody tr {
            --delay: .1s;
            transition: .5s ease-in-out var(--delay), background-color 0s;
        }

        tbody tr.hide {
            opacity: 0;
            transform: translateX(100%);
        }

        tbody tr:hover {
            background-color: #fff6 !important;
        }

        tbody tr td,
        tbody tr td p,
        tbody tr td img {
            transition: .2s ease-in-out;
        }

        tbody tr.hide td,
        tbody tr.hide td p {
            padding: 0;
            font: 0 / 0 sans-serif;
            transition: .2s ease-in-out .5s;
        }

        tbody tr.hide td img {
            width: 0;
            height: 0;
            transition: .2s ease-in-out .5s;
        }

        .status {
            padding: .4rem 0;
            border-radius: 2rem;
            text-align: center;
        }

        .status.delivered {
            background-color: #86e49d;
            color: #006b21;
        }

        .status.cancelled {
            background-color: #d893a3;
            color: #b30021;
        }

        .status.pending {
            background-color: #ebc474;
        }

        .status.shipped {
            background-color: #6fcaea;
        }


        @media (max-width: 1000px) {
            td:not(:first-of-type) {
                min-width: 12.1rem;
            }
        }

        thead th span.icon-arrow {
            display: inline-block;
            width: 1.3rem;
            height: 1.3rem;
            border-radius: 50%;
            border: 1.4px solid transparent;

            text-align: center;
            font-size: 1rem;

            margin-left: .5rem;
            transition: .2s ease-in-out;
        }

        thead th:hover span.icon-arrow {
            border: 1.4px solid #6c00bd;
        }

        thead th:hover {
            color: #6c00bd;
        }

        thead th.active span.icon-arrow {
            background-color: #6c00bd;
            color: #fff;
        }

        thead th.asc span.icon-arrow {
            transform: rotate(180deg);
        }

        thead th.active,
        tbody td.active {
            color: #6c00bd;
        }

        .export__file {
            position: relative;
        }

        .export__file .export__file-btn {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background: #fff6 url(images/export.png) center / 80% no-repeat;
            border-radius: 50%;
            transition: .2s ease-in-out;
        }

        .export__file .export__file-btn:hover {
            background-color: #fff;
            transform: scale(1.15);
            cursor: pointer;
        }

        .export__file input {
            display: none;
        }

        .export__file .export__file-options {
            position: absolute;
            right: 0;

            width: 12rem;
            border-radius: .5rem;
            overflow: hidden;
            text-align: center;

            opacity: 0;
            transform: scale(.8);
            transform-origin: top right;

            box-shadow: 0 .2rem .5rem #0004;

            transition: .2s;
        }

        .export__file input:checked+.export__file-options {
            opacity: 1;
            transform: scale(1);
            z-index: 100;
        }

        .export__file .export__file-options label {
            display: block;
            width: 100%;
            padding: .6rem 0;
            background-color: #f2f2f2;

            display: flex;
            justify-content: space-around;
            align-items: center;

            transition: .2s ease-in-out;
        }

        .export__file .export__file-options label:first-of-type {
            padding: 1rem 0;
            background-color: #86e49d !important;
        }

        .export__file .export__file-options label:hover {
            transform: scale(1.05);
            background-color: #fff;
            cursor: pointer;
        }

        .export__file .export__file-options img {
            width: 2rem;
            height: auto;
        }
    </style>

    <header id="navigation">
        <div class="navbar main-nav animated fadeIn navbar-fixed-top" data-wow-duration="700ms" data-wow-delay="300ms" role="banner">
            <div class="new-nav" style="display: none;">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="text-right sm-center">
                                <p>Need Help? Call Us : 8087611222 / 8237611222 / 8087911222</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>


                    <a href="javascript:void(0)" class="button button--aylen button--border-thin button--round-s float-r" data-toggle="modal" data-target="#myModal">Login</a>

                    <a class="navbar-brand" href="https://www.serviceonwheel.com/">

                        <!-- <img src="../images/logo -sow.png"> -->

                        <!-- <h1> Service on wheel</h1>-->
                    </a>
                    <!-- <a class="cititext" href="#">Nagpur<i class="fa fa-angle-down" aria-hidden="true"></i></a> -->
                </div>
                <nav class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav float-right">
                        <li class="scroll "><a href="../home.php">Home</a></li>
                        <li class="scroll "><a href="../about-us.html">About Us</a></li>
                        <li class="scroll current-page-item"><a href="./Profile.php">Profile</a></li>

                        <li class="scroll current-page-item"><a href="../session_destroy.php">Logout</a></li>

                        <!--   <li class="scroll "><a href="rate-card.html">Rate Chart</a></li>-->

                        <!-- <li class="scroll "><a href="faq.html">Faq</a></li>-->




                    </ul>
                </nav>
                <div class="top-btn-block bg-2 xs-a-5px">






                    <!-- <a href="#" class="my-ac-btn">My Account</a>  -->




                </div>
            </div>
        </div>
    </header>

    <!--/#navigation-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main class="table">
        <section class="table__header">
            
            
        </section>
        <section class="table__body">
            <table>
                <thead>
               
                    <tr>
                        <th> <strong>Worker Name</strong> </th>
                        <th> <strong>City</strong> </th>
                        <th> <strong>Mobile Number</strong> </th>
                        <th> <strong>Experience</strong> </th>
                        <th> <strong>Available/Available From</strong> </th>
                    </tr>
                </thead>
        <?php
                                $con = mysqli_connect("localhost", "root", "", "job");
                                $sql = "select * from jobseeker_reg where WorkType= 'Carpenter'";




                                $result = mysqli_query($con, $sql);


                                //var_dump($result);
                                
                                // Loop through each records
                                while ($row = mysqli_fetch_array($result)) {
                                    $Name = $row['JobSeekerName'];
                                    $City = $row['City'];
                                    $Mobile = $row['Mobile'];
                                    $Experience = $row['Experience'];
                                    $Availability = $row['Availability'];


                                    ?>
       
               <tbody>
                    <tr>
                        <td>  <?php echo $Name; ?> </td>
                        <td> <?php echo $City; ?></td>
                        <td>  <?php echo $Mobile; ?> </td>
                        <td> <?php echo $Experience; ?> </td>
                        <td>
                           <?php if ($row['Availability'] == 'Yes'): ?>

                                           
                                                <?php echo $row['Availability']; ?>
                                           
                                        <?php else: ?>

                                            
                                                <?php echo $row['Availability_Date']; ?>
                                           

                                        <?php endif; ?>
                        </td>
                        
                    </tr>
               </tbody>
                    <?php
                                }
                                // Retrieve Number of records returned
                                $records = mysqli_num_rows($result);
                                ?>

                                <?php
                                // Close the connection
                                mysqli_close($con);
                                ?>
                   
               
            </table>
        </section>
    </main>




    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script type="text/javascript" src="../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../js/smooth-scroll.js"></script>
    <script type="text/javascript" src="../js/canvas.js"></script>
    <!-- <script type="text/javascript" src="../js/preloader.js"></script> -->
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript"></script>

    <script>
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        });
    </script>
</body>

</html>