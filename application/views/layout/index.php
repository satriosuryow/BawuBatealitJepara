<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/guruma/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Dec 2020 12:02:48 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Guruma - Online Course & Education HTML Template" />
  <meta name="author" content="potenzaglobalsolutions.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url(); ?>images/logonu.svg" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="<?= base_url(); ?>css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>css/flaticon/flaticon.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap/bootstrap.min.css" />

  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
  <link rel="stylesheet" href="<?= base_url(); ?>css/select2/select2.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>css/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>css/swiper/swiper.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>css/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>css/animate/animate.min.css" />
  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/slick/slick-theme.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/agency.css" />

  <!-- Template Style -->
  <link rel="stylesheet" href="<?= base_url(); ?>css/style.css" />

</head>

<body>

  <!--=================================
    Header -->
  <!--=================================
    Modal login -->
  <?php if ($action == 'Beranda') {
    include "headerhome.php";
  } else {
    include "header.php";
  }
  ?>

  <!--=================================
    Modal login -->
  <!--=================================
    Header -->

  <!--=================================
    Banner -->

  <?php if ($action == 'Beranda') {
    include "bannerhome.php";
  } else if ($action == 'CourseGrid') {
    include "innerheader.php";
  } else if ($action == 'Events') {
    include "events.php";
    // } else if ($action == 'EventDetail' || $action == 'Teachers' || $action == 'TeacherDetail' || $action == 'AboutUs' || $action == 'ContactUs' || $action == 'Gallery' || $action == 'Login' || $action == 'Privacy') {
    //   include "eventdetail.php";
  } else {
    include "eventdetail.php";
  }
  ?>

  <!--=================================
    Banner -->

  <!--=================================
    categories-style-03 -->
  <?php if ($action == 'Beranda') {
    include "categories.php";
  }
  ?>
  <!--=================================
    categories-style-03 -->

  <?php
  if (isset($content) && $content) {
    $this->load->view($content);
  }
  ?>


  <!--=================================
    Back To Top -->
  <!--=================================
    footer-->
  <?php if ($action == 'Beranda') {
    include "footerhome.php";
  } else {
    include "footer.php";
  }
  ?>
  <!--=================================
    footer-->

  <!--=================================
    Back To Top -->

  <!--=================================
    Javascript -->

  <!-- JS Global Compulsory (Do not remove)-->
  <script src="<?= base_url(); ?>js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url(); ?>js/popper/popper.min.js"></script>
  <script src="<?= base_url(); ?>js/bootstrap/bootstrap.min.js"></script>

  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="<?= base_url(); ?>js/jquery.appear.js"></script>
  <script src="<?= base_url(); ?>js/select2/select2.full.js"></script>
  <script src="<?= base_url(); ?>js/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>js/swiper/swiper.min.js"></script>
  <script src="<?= base_url(); ?>js/shuffle/shuffle.min.js"></script>
  <script src="<?= base_url(); ?>js/jarallax/jarallax.min.js"></script>
  <script src="<?= base_url(); ?>js/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url(); ?>js/swiperanimation/SwiperAnimation.min.js"></script>
  <script src="<?= base_url(); ?>js/countdown/jquery.downCount.js"></script>
  <script src="<?= base_url(); ?>js/counter/jquery.countTo.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="<?= base_url(); ?>js/custom.js"></script>
  <script src="<?= base_url(); ?>js/slick/slick.min.js"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/guruma/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Dec 2020 12:05:14 GMT -->

</html>