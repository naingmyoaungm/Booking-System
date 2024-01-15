<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <title>Summer Trip</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="css/templatemo-woox-travel.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/owl.css">
        <link rel="stylesheet" href="css/animate.css">
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
                              <img src="images/logo4rv.png" alt="">
                              SumMer Trip
                          </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="insert.php">Insert</a></li>
                            <li><a href="view-package.php" class="active">Package</a></li>
                            <li><a href="view-booking.php">Booking</a></li>
                            <li><a href="view-feedback.php">Feedback</a></li>
                            <li><a href="logout.php">Log Out</a></li>
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
        <div class="second-page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  
                  <h2> View Package </h2>

                </div>
              </div>
            </div>
        </div>
        
        <!-- <h2 align="center"> View Product </h2> -->
        
       
       
    
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
 <td><img src='image/$i' height='200' width='150'></td>
 <td>".$arr['place']."</td>
 <td>".$arr['price']."</td>
 <td>".$arr['in_1']."</td>
 <td>".$arr['in_2']."</td>
 <td>".$arr['in_3']."</td>
";
  
  $n++;

   }
      echo "</tr></tbody></table>
       </form>";
    ?>  
       
            
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
<?php }  ?>

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
    </body>
</html>