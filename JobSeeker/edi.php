<?php
session_start();
if (isset($_SESSION['$UserName_emp'])) {
} else {
  header('location:../index.php');
}
?>

<?php
$ID = $_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost", "root", "", "job");

$sql = "select * from Employer_Reg where EmployerId ='" . $ID . "'  ";
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
    <link rel="stylesheet" href="../css/tablestyle2.css">
    <link rel="stylesheet" href="../css/profile.css">

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
        <br>
            <h1>Profile Details</h1>
            <br>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Worker Id:</th>
                        <th> Name:</th>
                        <th> City: </th>
                        <th> Mobile: </th>
                        <th> Past Experience: </th>
                        <th> User Name: </th>
                        <th> Password: </th>
                        <th> Availability: </th>
                    </tr>
                </thead>
                <tbody>
                    


                    <tr data-Label="Worker Id:">
                  
                  <td><span id="sprytextfield1">
                      <label>
                        <input name="txtId" type="text" id="txtId" value="<?php echo $row['JobSeekId']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr data-Label="Name">
                  
                  <td><span id="sprytextfield3">
                      <label>
                        <input name="txtContact" type="text" id="txtContact"
                          value="<?php echo $row['JobSeekerName']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr data-Label="City">
                  
                  <td><span id="sprytextfield4">
                      <label>
                        <input name="txtCity" type="text" id="txtCity" value="<?php echo $row['City']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr data-Label="Mobile">
                  
                  <td><span id="sprytextfield6">
                      <label>
                        <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Mobile']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr data-Label="Past Experience">
                  
                  <td><span id="sprytextfield6">
                      <label>
                        <input name="txtExperience" type="text" id="txtExperience"
                          value="<?php echo $row['Experience']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr data-Label="User Name:">
                  
                  <td><span id="sprytextfield8">
                      <label>
                        <input name="txtUser" type="text" id="txtUser" value="<?php echo $row['UserName']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr data-Label="Password">
                  
                  <td><span id="sprytextfield9">
                      <label>
                        <input name="txtPassword" type="password" id="txtPassword"
                          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                          title="Password must contain at least one number, one uppercase letter, one lowercase letter, and be at least 8 characters long."
                          required value="<?php echo $row['Password']; ?>" /> </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr data-Label="Availability">
                  
                  <td>
                    <span id="sprytextfield9">
                      <label>
                        Yes <input type="radio" name="availability" value="Yes" onclick="hideAvailableFrom()" />
                        No <input type="radio" name="availability" value="No" onclick="showAvailableFrom()" />
                      </label>
                    </span>
                  </td>
                </tr>
                <tr id="available-from-row" style="display:none;" data-Label="Avaailable From">
                  <th><>Available From:</th>
                  <td>
                    <span id="sprytextfield9">
                      <label>
                        <input name="selectedDate" type="date" id="selectedDate" pattern="\d{2}-\d{2}-\d{4}"
                          placeholder="dd-mm-yyyy" min="<?php echo date('Y-m-d'); ?>" />
                      </label>
                    </span>
                  </td>
                </tr>
                <p id="date-error" style="color: red"></p>

                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                      <input type="submit" name="button" id="button" value="Submit" />
                    </label></td>
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