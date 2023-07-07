<?php
session_start();
if (isset($_SESSION['$UserName_emp'])) {
} else {
  header('location:../home.php');
}
?>

<?php
$ID = $_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost", "root", "", "job");

$sql = "select * from jobseeker_reg where JobSeekId ='" . $ID . "'  ";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
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
    <link rel="stylesheet" href="../css/tablestyle.css">

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

        <img src="../images/logo -sow.png">

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
        <br>
            <h1>Profile Details</h1>
            <br>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Sr No.</th>
                        <th> Employer Id </th>
                        <th> Contact Person </th>
                        <th> City </th>
                        <th> UserName </th>
                        <th> Mobile </th>
                        <th> Edit Profile </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> <?php echo $row['JobSeekId'];?></td>
                        <td> <?php echo $row['ContactPerson'];?> </td>
                        <td> <?php echo $row['City'];?> </td>
                        <td> <?php echo $row['UserName'];?></td>
                        <td> <?php echo $row['Mobile'];?> </td>
                        <td> <a href="EditPro.php?EmployerId=<?php echo $row['JobSeekId']; ?>">Click Here</a> </td>

                        
  </div>
                       
                    </tr>
                  
                </tbody>
            </table>
           
        </section>
        
    </main>
 
  </table>
 


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
    <script type="text/javascript" src="../js/tablescript.js"></script>
    
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript"></script>

   
</body>
</html>








<?php
mysqli_close($con);
?>