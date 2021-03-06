<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>studyaid</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.0.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?php
error_reporting(0);
include "connection.php";
$querysub="SELECT * FROM subjects";
$datasub=mysqli_query($q,$querysub);
?>

<body>

  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">StudyAid</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        </div>
      </div>

    </div>
      </header>

      <main id="main">
 
    <section id="portfolio" class="section-bg" style="padding-top: 125px">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Subjects We Deal</h3>
        </header>

    <!-----filter     <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Mathematics</li>
            <li data-filter=".filter-card">physics</li>
            <li data-filter=".filter-web">chemistry</li>
          </ul>
        </div>
      </div>
----->
          
<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<?php
while($r4= mysqli_fetch_assoc($datasub))
{
$name=$r4['subject_name'];
$image=$r4['subject_img'];

 ?>   
    
      

        <div class="col-lg-4 col-md-6 col-12 portfolio-item">
          <div class="portfolio-wrap">
           <a href='subreltute.php?sub=<?php echo "$name"; ?>' class="link-details" title="More Details"><div class='row'><div class="col-12"> <figure>
              <img src= '<?php echo "$image" ; ?>' class="img-fluid" alt="" style="height:100%;width:100%">
              
            </figure></div></div></a>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html"><?php echo "$name"; ?></a></h4>
             
                
            </div>
          </div>
          </div>

      
          
<?php
}
          
          ?>
          
          
      </div>
          
 </div>            

    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

    
    
    
    
    
  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>StudyAid</h3>
            <p>StudyAid is a small effort of us to make sure that students can find their best tutors in their locality </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Krishnanagar <br>
              Thakurpalli Road,opposite TRTC<br>
              Agartala, Tripura (W)<br>
              Pin:799001<br>
              <strong>Phone:</strong> 7827249896<br>
              <strong>Email:</strong> Studyaid78@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/StudyAidEducat1?s=09" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/studyaid.in/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/education.study_aid/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/company/studyaideducation" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        

        </div>
        </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>studyaid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://nofrdz.com/">Nofrdz.pvt lmtd</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    
</body>

</html>