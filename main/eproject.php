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
							<h4>Edit your Project</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">



									 <?php

require('includes/projectdb.php');


if(isset($_POST["submit"])){


    $target_dir = "http://groovedevelopers.com/Storage/projects";
    $project_file = basename( $_FILES['uploaded_file']['name']);
    $target_file = $target_dir . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  


        $project_name =htmlspecialchars( $_POST["project_name"]);
        $project_cat =htmlspecialchars( $_POST["project_cat"]);
        $project_desc =htmlspecialchars($_POST["project_desc"]);
        $project_type =htmlspecialchars($_POST["project_type"]);
        $minimum_pay =htmlspecialchars($_POST["minimum_pay"]);
        $maximum_pay =htmlspecialchars($_POST["maximum_pay"]);
        $id =htmlspecialchars($_GET["id"]);
        $username =htmlspecialchars($_SESSION['username']);
        
        


$sql = "UPDATE users_project SET username='$username',project_name='$project_name', project_type='$project_type', project_file='$project_file', project_cat='$project_cat', project_desc='$project_desc', minimum_pay='$minimum_pay', maximum_pay='$maximum_pay' WHERE id='".$id."'";


       
            if ($con->query($sql) === TRUE) {
    $_SESSION['submit'] = true; header('LOCATION:confirm.php'); die();
}} else {

	$id =htmlspecialchars($_GET["id"]);
    	$sql = "SELECT * FROM users_project WHERE id='".$id."'";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
	?>
									<form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Project Name</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="project_name" name="project_name" placeholder="project name" value=<?php echo $row['project_name']; ?> required="" >
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label"></label>
											<div class="col-sm-8">
												<select name="project_type" id="project_type"  />
												<option value=<?php echo $row['project_type']; ?> ><?php echo $row['project_type']; ?></option>
                                                <option value="Exsiting Website">Exsiting Website</option>
                                                <option value="New Website">New Website</option>

                                                </select>
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Project Type</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="project_cat" name="project_cat" placeholder="e.g website, app, software, graphics, video editing e.t.c." required="" value=<?php echo $row['project_cat']; ?>>
											</div>
										</div>
										<div class="form-group">
											<label for="description" class="col-sm-2 control-label">Description</label>
											<div class="col-sm-8"><textarea name="project_desc" id="project_desc" cols="50" rows="4" class="form-control1" required="" > <?php echo $row['project_desc']; ?> </textarea></div>
										</div>

										<div class="form-group">
										<label for="file" class="col-sm-2 control-label">Drop the project sketch in PDF or ZIP format</label>
										<div class="col-sm-8">
										<input type="file" id="uploaded_file" name="uploaded_file" required="">
										</div>
										</div> 
										 
				 
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Start Date</label>
											<div class="col-sm-8">
												<input type="date" class="form-control1" id="start_date" name="start_date" placeholder="Project Start date" required="" value=<?php echo $row['start_date']; ?>>
											</div>
										</div>

										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Due Date</label>
											<div class="col-sm-8">
												<input type="date" class="form-control1" id="due_date" name="due_date" placeholder="Project due date" value=<?php echo $row['due_date']; ?> required="">
											</div>
										</div>

										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label">Whats your budget?</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="minimum_pay" name="minimum_pay" placeholder="minimum is $150" value=<?php echo $row['minimum_pay']; ?> required="">
											</div>
										</div>
										<div class="form-group">
											<label for="tagline" class="col-sm-2 control-label"></label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="maximum_pay" placeholder="maximum" name="maximum_pay" value=<?php echo $row['maximum_pay']; ?> required="" >
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




 

