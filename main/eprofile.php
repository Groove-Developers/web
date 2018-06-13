<?php
ob_start();

?>



 





<?php include 'includes/header.php'; ?>
				
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="faq">
	
	
	<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Edit Profile</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">



									<?php
	require '../db.php';

if(isset($_POST["submit"])){
 
  
        $first_name =htmlspecialchars($_POST["first_name"]);
        $middle_name =htmlspecialchars($_POST["middle_name"]);
        $last_name =htmlspecialchars($_POST["last_name"]);
        $email =htmlspecialchars($_POST["email"]);
        $account_type =htmlspecialchars($_POST["account_type"]);
        $phone_num =htmlspecialchars($_POST["phone_num"]);
        $address =htmlspecialchars($_POST["address"]);
        $city =htmlspecialchars($_POST["city"]);
        $country =htmlspecialchars($_POST["country"]);
        $payment_mail =htmlspecialchars($_POST["payment_mail"]);
        $payment_mode =htmlspecialchars($_POST["payment_mode"]);
        $username =htmlspecialchars($_SESSION['username']);

  

$sql = "UPDATE users_details SET username='$username', email='$email', account_type='CUSTOMER', phone_num='$phone_num', address='$address', city='$city', country='$country', payment_mode='$payment_mode', payment_mail='$payment_mail'  WHERE  username = '" . $_SESSION['username'] . "' ";
   
if ($con->query($sql) === TRUE) {
   header('LOCATION:profile.php'); die();
} }else {



	//view php code


    	$username =htmlspecialchars($_SESSION['username']);
    	$sql = "SELECT * FROM users_details WHERE username='".$username."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	// view php code ends
  
  
        ?>

									<form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
										
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Email</label>
											<div class="col-sm-8">
												<input type="email" class="form-control1" id="email" name="email" placeholder="email@example.com" value=<?php echo $row['email']; ?> >
											</div>
										</div>
										
										
									   <div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Phone Number</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="phone_num" name="phone_num" placeholder="" value=<?php echo $row['phone_num']; ?> >
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Address</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="address" placeholder="" name="address" value=<?php echo $row['address']; ?>>
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">City</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="city" placeholder="e.g Lagos" name="city" value=<?php echo $row['city']; ?>>
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Country</label>
											<div class="col-sm-8">
										
												<input type="text" class="form-control1" id="country" placeholder="e.g Nigeria" name="country" value=<?php echo $row['country']; ?>>
											</div>
											
										</div>

										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Payment Mode</label>
											<div class="col-sm-8">
												<select  name="payment_mode" id="payment_mode"  />
                                                  <option  value=<?php echo $row['payment_mode']; ?> >
                                                   <?php echo $row['payment_mode']; ?></option>
                                                  <option value="Paypal">Paypal</option>
                                                  <option value="payeer">Payeer</option>

                                                  </select>
											</div>
										</div>

										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Payment Mail</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="payment_mail" placeholder="e.g money@payment.com" name="payment_mail" required="" value=<?php echo $row['payment_mail']; ?>>
											</div>
										</div>

										
										</div>
										</div>
										<button class="btn-danger" id="submit" name="submit">submit</button>
										
										
										
									</form>




<?php
}

}
$con->close();
?>
	








								</div>
						</div>
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




 

