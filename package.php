<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SumMer Trip</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/package.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
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
                        <li><a href="package.php" class="active">Package</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="contact.php">Contact</a></li>
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

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>EXPLORE OUR COUNTRY</h4>
            <div class="line-dec"></div>
            <h2>Welcome To Caribbean</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
            <div class="main-button">
              <a href="package.php">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Caribbean’s <em>Cities &amp; Towns</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-01.jpg" alt="">
                    <h4>Havana</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-02.jpg" alt="">
                    <h4>Kingston</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-03.jpg" alt="">
                    <h4>George Town</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-04.jpg" alt="">
                    <h4>Santo Domingo</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-01.jpg" alt="">
                    <h4>Havana</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-02.jpg" alt="">
                    <h4>Kingston</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-03.jpg" alt="">
                    <h4>George Town</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-04.jpg" alt="">
                    <h4>Santo Domingo</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
    
 
   <?php
                     error_reporting(1);
                     include("connection.php");
                        $sel=mysql_query("select * from item ");
                        echo"<form method='post'><table  class='content-box'>
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Include 1</td>
                        <td>Include 2</td>
                        <td>Include 3</td>
                        <td></td>
                    </tr>
                </thead>
            ";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%1==0)
    {
    echo "<tbody><tbody>
          ";
    }
   echo "
 <td><img src='admin/image/$i' height='200' width='150'></td>
 <td>".$arr['place']."</td>
 <td>".$arr['price']."</td>
 <td>".$arr['in_1']."</td>
 <td>".$arr['in_2']."</td>
 <td>".$arr['in_3']."</td>
 <td><button class='button-arounder'><a href='login.php?img=$i'>Book</a></button></td>
";
  
  $n++;

   }
      echo "</tr></tbody></table>
       </form>";
    ?>  

  <div class="best-locations">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Locations In Caribbeans</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2">
          <div class="options">
            <div class="option active" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-01.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                     <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Havana</div>
                     <div class="sub">Population: 2M</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-02.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Kingston</div>
                     <div class="sub">Population: 3.5M</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-03.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">London</div>
                     <div class="sub">Population: 4.1M</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-04.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Pristina</div>
                     <div class="sub">Population: 520K</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-05.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Paris</div>
                     <div class="sub">Population: 3M</div>
                  </div>
               </div>
            </div>
         </div>
        </div>
        <div class="col-lg-12">
          <div class="main-button text-center">
            <a href="package.php">Discover All Places</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking To Travel ?</h2>
          <h4>Make A Reservation By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="package.php">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
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
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
