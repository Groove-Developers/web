<?php
ob_start();

?>


<?php include 'includes/header.php'; ?>





<?php
   require('includes/storedb.php');
if(isset($_POST["submit"])){


    $target_dir = "http://groovedevelopers.com/Storage/store";
    $app_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  

        $username =htmlspecialchars($_SESSION['username']);
        $app_url =htmlspecialchars( $_POST["app_url"]);
        $app_tagline =htmlspecialchars( $_POST["app_tagline"]);
        $app_desc =htmlspecialchars($_POST["app_desc"]);
        $minimum_pay =htmlspecialchars($_POST["minimum_pay"]);
        $maximum_pay =htmlspecialchars($_POST["maximum_pay"]);
        $app_p1 =htmlspecialchars($_POST["app_p1"]);
        $app_p2 =htmlspecialchars($_POST["app_p2"]);
        $app_p3 =htmlspecialchars($_POST["app_p3"]);
        $app_p4 =htmlspecialchars($_POST["app_p4"]);
        $app_p5 =htmlspecialchars($_POST["app_p5"]);
        $app_p6 =htmlspecialchars($_POST["app_p6"]);
        $status =htmlspecialchars($_POST["status"]);
        $date = date("Y-m-d H:i:s");

 $sql = 'INSERT INTO app (username,app_url, app_file, app_tagline, app_desc, minimum_pay, maximum_pay, app_p1, app_p2, app_p3, app_p4, app_p5, app_p6, status, date) VALUES ("'.$username.'","'.$app_url.'","'.$app_file.'","'.$app_tagline.'","'.$app_desc.'","'.$minimum_pay.'","'.$maximum_pay.'","'.$app_p1.'","'.$app_p2.'","'.$app_p3.'","'.$app_p4.'","'.$app_p5.'","'.$app_p6.'","pending","'.$date.'") ';
       
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
									<form class="form-horizontal" action="app.php" enctype="multipart/form-data" method="post" >
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">App url</label>
											<div class="col-sm-8">
												<input type="url" class="form-control1" id="app_url" placeholder="https://groovedevelopers.com" name="app_url" required="">
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">What industry does your app serves?</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="app_tagline" placeholder="e.g Media Site" name="app_tagline" required="">
											</div>
										</div>
										<div class="form-group">
											<label for="description" class="col-sm-2 control-label">Description</label>
											<div class="col-sm-8"><textarea name="app_desc" id="app_desc" cols="50" rows="4" class="form-control1" required=""></textarea></div>
										</div>
										<div class="form-group">
										<label for="exampleInputFile">Drop the app credentials here</label>
										<div class="col-sm-8">
										<input type="file" id="uploaded_file" name="uploaded_file" required="">
										</div>
										</div> 
										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">What is included in the sales?</label>
											<div class="col-sm-8"><textarea name="app_p1" id="app_p1" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">Average monthly downloads</label>
											<div class="col-sm-8"><textarea name="app_p2" id="app_p2" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

											<div class="form-group">
											<label for="text" class="col-sm-2 control-label">Does it generate revenue?</label>
											<div class="col-sm-8"><textarea name="app_p3" id="app_p3" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>

										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">Is your app a reskin?</label>
											<div class="col-sm-8"><textarea name="app_p4" id="app_p4" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										

										<div class="form-group">
											<label for="text" class="col-sm-2 control-label">What Platform is it built on</label>
											<div class="col-sm-8"><textarea name="app_p5" id="app_p5" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">When did your app go live?</label>
											<div class="col-sm-8">
												<input type="date" class="form-control1" id="app_p6" placeholder="date" name="app_p6">
											</div>
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
