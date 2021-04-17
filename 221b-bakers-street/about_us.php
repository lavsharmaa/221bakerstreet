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
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>221 | About us</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="css/animsition.min.css" rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

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
                            <li class="nav-item"> <a class="nav-link active" href="dishes.php?res_id=48">Menu<span class="sr-only"></span></a> </li>
        
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
                    <h1>About Us</h1>
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Our Team</h2>
                </div>
                <div class="row">
						<?php 
						// fetch records from database to display popular first 3 dishes from table
						$query_res= mysqli_query($db,"select * from team"); 
									      while($r=mysqli_fetch_array($query_res))
										  {	
						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
														<div class="food-item-wrap">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/team/'.$r['img'].'">
															</div>
															<div class="content">
																<h5><a href="dishes.php?res_id='.$r['t_id'].'">'.$r['name'].'</a></h5>
															</div>
														</div>
												</div>';
										  }
						?>
                </div>
            </div>
        </section>
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
    <script src="js/jquery.min.js" async></script>
    <script src="js/tether.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>
    <script src="js/animsition.min.js" async></script>
    <script src="js/bootstrap-slider.min.js" async></script>
    <script src="js/jquery.isotope.min.js" async></script>
    <script src="js/headroom.js" async></script>
    <script src="js/foodpicky.min.js" async></script>
</body>
</html>