<!DOCTYPE html>
<html>

<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['cardno']) ||  //fetching and find if its empty
         empty($_POST['expiry']) || 
     empty($_POST['cvv']))
		{
			$message = "All fields must be Required!";
		}
	else{
       
	 //inserting values into db
	$mql = "INSERT INTO transaction(c_no, exp, cvv) VALUES('".$_POST['cardno']."','".$_POST['expiry']."','".$_POST['cvv']."')";
	mysqli_query($db, $mql);
		$success = "Transaction successful! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('counter');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'your_orders.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";
		
		
		
		
		 header("refresh:5;url=your_orders.php"); // redireted once inserted success
    }
}
?>

    <head>
        <meta charset="utf-8">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <title>Payment</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/payment_styles.css">
    </head>
    <body>
        <div class="full-screen">
            <div class="container">
                <div class="payment-box">
                    <section class="row options first">
                        <div class="item">
                            <label class="label">
                                <input class="radio" type="radio" name="channel">
                                <span class="radioInput"></span><span>PayPal</span>
                            </label>
                        </div>
                        <div class="item">
                            <img class="img" src="images/paypal.png" alt="" />
                        </div>
                    </section>
                    <section class="row options no-border-bottom">
                        <div class="item">
                            <label class="label">
                                <input class="radio" type="radio" name="channel" checked>
                                <span class="radioInput"></span><span>Debit/credit card</span>
                            </label>
                        </div>
                        <div class="item">
                            <img class="img" src="images/visa.png" alt="" />
                            <img class="img" src="images/master_card.png" alt="" />
                            <img class="img" src="images/jcb_card.png" alt="" />
                        </div>
                    </section>
                    <section class="row blanks">
                        <div class="col">
                            <div class="item">
                                <span class="title">Card number</span>
                                <input name="cardno" class="blank card-number" value="4111 1111 1111 1111" onFocus="this.value = ''" onBlur="if (this.value === '') { this.value = '4111 1111 1111 1111' }" onkeyup="if (this.value.length === 4 || this.value.length === 4 * 2 + 1 || this.value.length === 4 * 3 + 2) { this.value += ' ' }" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength=19 required />
                            </div>
                        </div>
                    </section>
                    <section class="row blanks last">
                        <div class="col">
                            <div class="item">
                                <span class="title">Expiry</span>
                                <input name="expiry" class="blank" placeholder="MM/YY" onkeyup="if (this.value.length === 2) { this.value += '/' }" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength=5 required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="item">
                                <span class="title">CVV</span>
                                <input name="cvv" class="blank" placeholder="123" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength=3 required />
                            </div>
                        </div>
                        <img class="info-icon" src="images/info.png" alt="" />
                    </section>
                </div>
                <a href="your_orders.php">
                <button name="submit" class="payment-btn" type="button"><img src="images/lock.png" alt="" />Finish and pay</button></a>
            </div>
        </div>
    </body>
</html>
