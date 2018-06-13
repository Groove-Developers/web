<?php
ob_start();

?>


<?php include 'includes/header.php'; ?>

<?php
     require('includes/storedb.php');
if(isset($_POST["submit"])){


    $target_dir = "http://groovedevelopers.com/Storage/store";
    $site_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  

        $username =htmlspecialchars($_SESSION['username']);
        $site_url =htmlspecialchars( $_POST["site_url"]);
        $site_tagline =htmlspecialchars( $_POST["site_tagline"]);
        $site_desc =htmlspecialchars($_POST["site_desc"]);
        $minimum_pay =htmlspecialchars($_POST["minimum_pay"]);
        $maximum_pay =htmlspecialchars($_POST["maximum_pay"]);
        $site_p1 =htmlspecialchars($_POST["site_p1"]);
        $site_p2 =htmlspecialchars($_POST["site_p2"]);
        $site_p3 =htmlspecialchars($_POST["site_p3"]);
        $site_p4 =htmlspecialchars($_POST["site_p4"]);
        $site_p5 =htmlspecialchars($_POST["site_p5"]);
        $site_p6 =htmlspecialchars($_POST["site_p6"]);
        $site_p7 =htmlspecialchars($_POST["site_p7"]);
        $site_p8 =htmlspecialchars($_POST["site_p8"]);
        $status =htmlspecialchars($_POST["status"]);
        $date = date("Y-m-d H:i:s");

 $sql = 'INSERT INTO website (username,site_url, status, site_file, site_tagline, site_desc, minimum_pay, maximum_pay, site_p1, site_p2, site_p3, site_p4, site_p5, site_p6, site_p7, site_p8, date) VALUES ("'.$username.'","'.$site_url.'","pending","'.$site_file.'","'.$site_tagline.'","'.$site_desc.'","'.$minimum_pay.'","'.$maximum_pay.'","'.$site_p1.'","'.$site_p2.'","'.$site_p3.'","'.$site_p4.'","'.$site_p5.'","'.$site_p6.'","'.$site_p7.'","'.$site_p8.'","'.$date.'") ';
       
            if ($conn->query($sql) === TRUE) {
 $_SESSION['submit'] = true; header('LOCATION:package.php'); die();
} else {
	echo '<div class="alert alert-danger">';
    echo '<strong>Error!</strong> ' . $sql . "<br>" . $conn->error;;
    echo '</div>';
}



}



?>



				
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="faq">
	
	<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Stage 1</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="website.php" enctype="multipart/form-data" method="post" >
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Site url</label>
											<div class="col-sm-8">
												<input type="url" class="form-control1" id="site_url" placeholder="https://groovedevelopers.com" name="site_url" required="">
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Tagline</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="site_tagline" placeholder="e.g Media Site" name="site_tagline" required="">
											</div>
										</div>
										<div class="form-group">
											<label for="description" class="col-sm-2 control-label">Description</label>
											<div class="col-sm-8"><textarea name="site_desc" id="site_desc" cols="50" rows="4" class="form-control1" required=""></textarea></div>
										</div>
										<div class="form-group">
										<label for="exampleInputFile">Drop the Website credentials here</label>
										<div class="col-sm-8">
										<input type="file" id="uploaded_file" name="uploaded_file" required="">
										</div>
										</div> 
										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">What is included in the sales?</label>
											<div class="col-sm-8"><textarea name="site_p1" id="site_p1" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">What is required to keep the site operational?</label>
											<div class="col-sm-8"><textarea name="site_p2" id="site_p2" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

											<div class="form-group">
											<label for="text" class="col-sm-2 control-label">Why are you selling the website</label>
											<div class="col-sm-8"><textarea name="site_p3" id="site_p3" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">How does the Website generate revenue?</label>
											<div class="col-sm-8"><textarea name="site_p4" id="site_p4" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">Are there any expenses for the Website? if yes, what are they</label>
											<div class="col-sm-8"><textarea name="site_p5" id="site_p5" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">What marketing initiatives have been used for this website?</label>
											<div class="col-sm-8"><textarea name="site_p6" id="site_p6" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">How can the future owner improve the website</label>
											<div class="col-sm-8"><textarea name="site_p7" id="site_p7" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">What Platform is it built on</label>
											<div class="col-sm-8"><textarea name="site_p8" id="site_p8" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">How much would you like to sell it?</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="minimum_pay" placeholder="minimum" name="minimum_pay" required="">
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label"></label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="maximum_pay" placeholder="maximum" name="maximum_pay" required="">
											</div>
										</div>

										
										</div>
										</div>
										<button class="btn-danger" id="submit" name="submit">submit</button>
										
										
										
									</form>









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
