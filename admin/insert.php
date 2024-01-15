<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$place=$_POST['t1'];
$price=$_POST['t2'];
$in_1=$_POST['t3'];
$in_2=$_POST['t4'];
$in_3=$_POST['t5'];
if($_POST['sub'])
{$qry="INSERT INTO item(img,place,price,in_1,in_2,in_3)VALUES('$img','$place','$price','$in_1','$in_2','$in_3')";
$result=mysql_query($qry) or die ("save items query fail.");
if($result)			
	   {mkdir("image/$i");
			move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		
	    $err="<font size='+2' color='lime'>item inserted successfully</font>";
	
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}  
	mysql_close($con);
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
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/admin.css">
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
                        <li><a href="insert.php" class="active">Insert</a></li>
                        <li><a href="view-package.php">Package</a></li>
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
              
              <h2>Insert Package</h2>

            </div>
          </div>
        </div>
    </div>
   <div class="reservation-form">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
       
          <form id="reservation-form" name="gs" method="post" enctype="multipart/form-data" >
            <div class="row">
              <div class="col-lg-12">
                <h4>Insert <em>Package</em></h4>
              </div>

              
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Image*</label>
                      <input name="img" type="file">
                  </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Place*</label>
                      <input type="text" id="t1" name="t1" class="input_field"  autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Price*</label>
                      <input type="text" id="t2" name="t2" class="input_field"  autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Include 1*</label>
                      <input type="text" id="t3" name="t3" class="input_field"  autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Include 2*</label>
                      <input type="text" id="t4" name="t4" class="input_field"  autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="Name" class="form-label">Include 3*</label>
                      <input type="text" id="t5" name="t5" class="input_field"  autocomplete="on" required>
                  </fieldset>
              </div>
              
              <div class="col-lg-12">                        
                  <fieldset>
                      <!-- <button class="main-button" name="log" id="log">Log In</button> -->
                      <input type="submit" class="main-button" name="sub" id="sub" value="Submit"> 
                      
                  </fieldset>
              </div>
              <h2><?php echo $err;?></h2>
              
              
            </div>
          </form>
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

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>