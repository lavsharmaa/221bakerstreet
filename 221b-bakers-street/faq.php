<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>221 | FAQ</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="css/animsition.min.css" rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
</head>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="images/221b-2.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="dishes.php?res_id=48">Menu <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
                              echo '<li class="nav-item"> <a class="nav-link active" href="about_us.php">About us<span class="sr-only"></span></a> </li>
                              <li class="nav-item"> <a class="nav-link active" href="contact_us.php">Contact us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="faq.php">FAQ<span class="sr-only"></span></a> </li>';
							}
						else
							{
									//if user is login
									
                                    echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="user_profile.php">Profile<span class="sr-only"></span></a> </li>';
                                    echo '<li class="nav-item"> <a class="nav-link active" href="about_us.php">About us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="contact_us.php">Contact us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="faq.php">FAQ<span class="sr-only"></span></a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                            }
                            

                        ?>
                        
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/main.jpeg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>FAQ</h1>
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
      
	  
    <!-- Contact us form -->
      <!-- Popular block starts -->
      <br><br><br>
      <section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h2 class="heading">Frequently ask Questions</h2>
      <hr class="heading_space">
        <div class='faq_wrapper'>
          <ul class='items'>
            <li>
              <a href='#'> How do I edit my order after placing it?</a>
              <ul class='sub-items'>
                <li>
                  <p class="half_space"> Please call us on +91-7259085922 or write email to packaging@swiggy.in mentioning your Order #.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>How do I cancel my order?</a>
              <ul class='sub-items'>
                <li>
                  <p>Please refer to our return & cancellation policy here.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>How will be my orders delivered?</a>
              <ul class='sub-items'>
                <li>
                  <p class="half_space">Orders are delivered directly by the Swiggy Packaging Assist suppliers. Different items in an order could be fulfilled by different suppliers. We will share the contact details and amount payable for all deliveries via email and SMS.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>We offer lot of service in a best price</a>
              <ul class='sub-items'>
                <li>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>When is the order delivered?</a>
              <ul class='sub-items'>
                <li>
                  <p>Our suppliers deliver the products within 3-4 days of orders being placed. For products with your logo printed, lead time could be higher. Please check details at the product page.</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>Is delivery free?</a>
              <ul class='sub-items'>
                <li>
                  <p>Yes. There are no delivery or handling charges.</p>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

                                <hr>
                                <br><br><br>
                        

        <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="images/221b-2.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="about_us.php">About us</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Address</h5>
                            <p>221 Bakers street </p>
                            <h5>Phone: <a href="tel:+080000012222">011 1010 1010</a></h5> </div> 
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
    </div>
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>