<?php 
include 'edmin/netting/baglan.php';
$ayarsorgu="SELECT * FROM ayarlar";
$sonuc=mysqli_query($baglan,$ayarsorgu);
$ayarcek=mysqli_fetch_assoc($sonuc);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<title><?php echo $ayarcek['ayar_title'] ?></title>


<meta name="description" content="<?php echo $ayarcek['description'] ?>">
  <meta name="keywords" content="<?php echo $ayarcek['keywords'] ?>">
  <meta name="author" content="Emre Uğur">

<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
<header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">

          <img style="margin-top: 30px; margin-left: 30px;" src="<?php echo $ayarcek['ayar_logo']; ?>" alt="">  
            <strong class="support"><?php echo $ayarcek['ayar_telefon'] ?></strong> </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="prices.html">Prices</a></li>
            <li><a href="staff.html">Our Staff</a></li>
            <li class="last"><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
      <div class="wrapper">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-img1.jpg" alt=""></li>
            <li><img src="images/slider-img2.jpg" alt=""></li>
            <li><img src="images/slider-img3.jpg" alt=""></li>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>
    </header>