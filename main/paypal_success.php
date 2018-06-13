
<?php include 'includes/header.php'; ?>
				
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="faq">
	
		
		<?php
require 'includes/usersdb.php';

//save Trasaction information form PayPal
$item_number = $_GET['item_number']; 
$item_name = $_GET['item_name'];
$seller_name = $_GET['seller_name'];
$txn_id = $_GET['Trasaction_ID'];
$payment_gross = $_GET['AMOUNT'];
$currency_code = $_GET['CURRENCY_CODE'];
$payment_status = $_GET['PAYMENT_STATUS'];

//Get product price
$productResult = $db->query("SELECT product_price, product_name, seller_name FROM products WHERE id = ".$item_number);
$productRow = $productResult->fetch_assoc();
$productPrice = $productRow['price'];
$productName = $productRow['product_name'];
$sellerName = $productRow['seller_name'];

if(!empty($txn_id)  && $productName == $item_name){
	//Check if payment data exists with the same TXN ID.
    $prevPaymentResult = $db->query("SELECT payment_id FROM payments WHERE txn_id = '".$txn_id."'");

    if($prevPaymentResult->num_rows > 0){
        $paymentRow = $prevPaymentResult->fetch_assoc();
        $last_insert_id = $paymentRow['payment_id'];
    }else{
        //Insert tansaction data into the database
        $insert = $db->query("INSERT INTO payments(item_number,item_name,seller_name,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$item_name."','".$seller_name."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
        $last_insert_id = $db->insert_id;
    }
?>
	<h1>Your payment has been successful.</h1>
    <h1>Your Payment ID - <?php echo $last_insert_id; ?>.</h1>
<?php
}else{
?>
	<h1>Your payment has failed.</h1>
<?php
}
?>
	
</div>

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