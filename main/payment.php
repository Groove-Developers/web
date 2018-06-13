
<?php
ob_start();

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

require 'includes/header.php';
?>
				<!--content-->
			<div class="content">
					<div class="monthly-grid">
						<div class="panel panel-widget">
														<div class="panel-body">





								


								<div class="contain">	

									<!--tracker-->

									<!--progress bar-->
<div class="container">
    <div class="row">
    	
        
    
</div>
</div><br>
<!--progress end-->
 <?php
require('includes/storedb.php');
			 $id = $_GET["id"];

			 $sql = "SELECT * FROM products WHERE id='".$id."' ";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$x = $row['product_price'];  
$y = 30;
			 ?>

									<!--tracker ends-->

									<!--Payments mode-->
							   <div class="middle-content">
									<h3>Payments Mode
									</h3>
<!--Paypal-->
     <div class="col-sm-3" style="float: left;">
   <?php

//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'contactgroovedevelopers@gmail.com'; //Business Email



?>


		
				
				<script src="https://js.braintreegateway.com/web/dropin/1.10.0/js/dropin.min.js"></script>
				<!--paypal button begins-->
			 
<form action="<?php echo $paypal_link; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['product_name']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="seller_name" value="<?php echo $row['seller_name']; ?>">
        <input type="hidden" name="amount" value="<?php echo $x + $y; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/small%20business/web/main/paypal_cancel.php'>
		<input type='hidden' name='return' value='http://localhost/small%20business/web/main/paypal_success.php'>

        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
    <!--paypal button-->
									
	</div>
			<!--Paypal Ends-->
<?php
}
}
$con->close();
?>
<!--Pay U-->
     <div class="col-sm-3" style="float: left;">
			<a href="payu.php"><button style="background: url('http://static.payu.com/en/standard/partners/buttons/payu_account_button_long_03.png');background-repeat: no-repeat;border: 0px;
    height: 100px;
    width: 100%;cursor: pointer;"></button></a>
								</div>
									<!--Pay U ends-->

			<!--Stripe-->
     <div class="col-sm-3" style="float: left;">
  <!--stripe-->
<script type="text/javascript">
//set your publishable key
Stripe.setPublishableKey('pk_test_SbIckkRLpmnZN5RzlGs0DV8W');

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $('#payBtn').removeAttr("disabled");
        //display the errors on the form
        $(".payment-errors").html(response.error.message);
    } else {
        var form$ = $("#paymentFrm");
        //get token id
        var token = response['id'];
        //insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        //submit form to the server
        form$.get(0).submit();
    }
}
$(document).ready(function() {
    //on form submit
    $("#paymentFrm").submit(function(event) {
        //disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
        
        //create single-use token to charge the user
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        
        //submit from callback
        return false;
    });
});
</script>
<!-- display errors returned by createToken -->
<span class="payment-errors"></span>

<h2>Stripe</h2>
<!-- stripe payment form -->
<form action="stripe.php" method="POST" id="paymentFrm">
    <p>
        <label>Name</label>
        <input type="text" name="name" size="50" />
    </p>
    <p>
        <label>Email</label>
        <input type="text" name="email" size="50" />
    </p>
    <p>
        <label>Card Number</label>
        <input type="text" name="card_num" size="20" autocomplete="off" class="card-number" />
    </p>
    <p>
        <label>CVC</label>
        <input type="text" name="cvc" size="4" autocomplete="off" class="card-cvc" />
    </p>
    <p>
        <label>Expiration (MM/YYYY)</label>
        <input type="text" name="exp_month" size="2" class="card-expiry-month"/>
        <span> / </span>
        <input type="text" name="exp_year" size="4" class="card-expiry-year"/>
    </p>
    <button type="submit" id="payBtn">Submit Payment</button>
</form>
    <!--stripe-->

									
	</div>
			<!--Stripe Ends-->


                               <!--Payments mode Ends-->



								</div>
								
							</div>
						</div>
					</div>

			
						
							

							
						<div class="clearfix"></div>

						


		
			

		</div>
		<div class="clearfix"> </div>
		 



		
		<?php include 'includes/footer.php'; 
		include 'includes/sidebar.php';?>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			
			<!--sidebar-menu-ends-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   
		   <script src="js/menu_jquery.js"></script>
</body>
</html>