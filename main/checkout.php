

<?php
require 'includes/header.php';


?>


		
				
				<script src="https://js.braintreegateway.com/web/dropin/1.10.0/js/dropin.min.js"></script>
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 	
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
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">$<?php echo $row['product_price']; ?></span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Service Charges</span>
				 <span class="total1">$30.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>$<?php echo $x + $y; ?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
<?php echo '<a href="payment.php?id='.$id.'">';?><button class="btn btn-danger">Buy</button></a>
			




			 
			 
			 <div class="clearfix"></div>
			 
			 
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag</h1>
				<div class="col-sm-8 well">

					<h2><?php echo $row['product_name']; ?></h2>

					<img src="http://groovedevelopers.com/Storage/store/<?php echo $row['product_img']; ?>" width="100%" height="400">

				</div>
				<div class="col-sm-8 well">

					<h2>Editors Comment:</h2>

				</div>
				<div class="col-sm-8 well">

					<h2>Product Full Description</h2>

					<p><?php echo $row['product_desc']; ?></p>

				</div>


			 
			 
			 					<?php
}
}
$con->close();
?>
			 
			  </div>		
		 </div>
		 
		
			<div class="clearfix"> </div>
	 </div>

	<!-- end content -->
	<?php include 'includes/footer.php'; ?>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include 'includes/sidebar.php'; ?>
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