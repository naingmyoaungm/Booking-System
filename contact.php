<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SumMer Trip Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                          <img src="assets/images/logo4rv.png" alt="">
                          SumMer Trip
                      </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="package.php">Package</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="contact.php" class="active">Contact</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  

  

  

<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mesg=$_POST['message'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}

?>

   <div id="fishcontactform">       
    <div id="wheader">
      <h1>Contact us</h1>
    </div>

    <div id="wwform">

      <div class="fish" id="fish"></div>
      <div class="fish" id="fish2"></div>

      <form id="waterform" method="post">

        <div class="formgroup" id="name-form">
          <label for="name">Your name*</label>
          <input type="text" id="name" name="name" required />
        </div>

        <div class="formgroup" id="email-form">
          <label for="email">Your e-mail*</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div class="formgroup" id="email-form">
          <label for="email">Your phone*</label>
          <input type="phone" id="phone" name="phone" required />
        </div>

        <div class="formgroup" id="message-form">
          <label for="message">Your message</label>
          <textarea id="message" name="message" required></textarea>
        </div>

        <input type="submit" name="sub"  id="sub" value="Send your message!" />
      </form>
      <h2 align="center"><?php echo $er;?></h2>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">SumMer Trip</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
   

    $('document').ready(function(){
  $('input[type="text"], input[type="email"], textarea').focus(function(){
    var background = $(this).attr('id');
    $('#' + background + '-form').addClass('formgroup-active');
    $('#' + background + '-form').removeClass('formgroup-error');
  });
  $('input[type="text"], input[type="email"], textarea').blur(function(){
    var background = $(this).attr('id');
    $('#' + background + '-form').removeClass('formgroup-active');
  });

function errorfield(field){
  $(field).addClass('formgroup-error');
  console.log(field); 
}

$("#waterform").submit(function() {
  var stopsubmit = false;

if($('#name').val() == "") {
  errorfield('#name-form');
  stopsubmit=true;
}
if($('#email').val() == "") {
  errorfield('#email-form');
  stopsubmit=true;
}
  if(stopsubmit) return false;
});
    
});
    
  </script>

  </body>

</html>
