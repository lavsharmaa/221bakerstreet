<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:login.php');
}
else{

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
						
														mysqli_query($db,$SQL);
														
														$success = "Thankyou! Your Order Placed successfully!";

														
														
													}
												}
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
    <title>221 | Checkout</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="css/animsition.min.css" rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="site-wrapper">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="images/221b-2.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="dishes.php?res_id=48">Menu<span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
                              echo '<li class="nav-item"> <a class="nav-link active" href="about_us.php">About us<span class="sr-only"></span></a> </li>
                              <li class="nav-item"> <a class="nav-link active" href="contact_us.php">Contact us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="faq.php">FAQ<span class="sr-only"></span></a> </li>';
							}
						else
							{
									
									
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
        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      
                        <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Choose Category</a></li>
                        <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item active" ><span>3</span><a href="checkout.php">Order and Pay online</a></li>
                    </ul>
                </div>
            </div>
			
                <div class="container">
                 
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>
                </div>
            <div class="container m-t-30">
			<form action="" method="post">
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
										
                                            <table class="table">
											<tbody>
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td> <?php echo "₹".$item_total; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping &amp; Handling</td>
                                                        <td>Free Shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo "₹".$item_total; ?></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="payment-option">
                                        <p class="text-xs-center"> <input type="submit" onclick="return confirm('Are you sure?');" name="submit"  class="btn btn-outline-success btn-block" value="Pay On Delivery"> </p>
                                        <a href="payment.php"><p class="text-xs-center"> <input type="submit" name="submit"  class="btn btn-outline-success btn-block" value="Card"> </p>
                                    </div>
									</form>
                                </div>
                            </div>
                    </div>
                </div>
				 </form>
            </div>
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
        <!-- end:page wrapper -->
         </div>
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
<?php
}
?>