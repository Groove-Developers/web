


<?php
require 'includes/header.php';
?>
				
				<!--content-->
				<div class="pro">
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="check">	 
			
		 <?php


 
                        $id = $_GET["id"];

                        require('includes/projectdb.php');

   $sql = "SELECT * FROM users_project WHERE id='".$id."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
                       
?>
			
			 
			 
			 
			 
			

		

			

		 <div class="col-md-9 cart-items" style="float: right;">
			 

	
				<div class="col-sm-8 well">
                  
					<h2><b>Project Details</b></h2>
					<br>
					
						<p><b>Project Name</b>: <?php echo $row['project_name']; ?></p>
						
						<p><b>Project Category</b>: <?php echo $row['project_cat']; ?></p>
						
						<p><b>Project Type</b>: <?php echo $row['project_type']; ?></p>
						
						<p><b>Project Status</b>: <?php echo $row['status']; ?></p>
						
						<p><b>Project Minimum Pay</b>: <?php echo $row['minimum_pay']; ?></p>
						
						<p><b>Project Maximum Pay</b>: <?php echo $row['maximum_pay']; ?></p>
						
						<p><b>Start Date</b>: <?php echo $row['start_date']; ?></p>
						
						<p><b>Due Date</b>: <?php echo $row['due_date']; ?></p>
						
						<p><b>Project File</b>: <a href="<?php echo 'http://groovedevelopers.com/Storage/projects/' .$row['project_file']; ?>">Open</a></p>
						
						<p><b>Click to View Project</b>: <a href="#">View</a></p>

						<label><b>Project Description</b>:</label>
						<p class="col-sm-6"><?php echo $row['project_desc']; ?></p>
						

                



<?php  
}}
$con->close();
?>



				</div>

									 

<div class="col-sm-8 well">


			
						<h2><b>Developers Details</b></h2>
						<b>Developer Name</b>
						<p></p>
						<b>Developer Rating</b>
						<p></p>
						<b>Developer Stage</b>
						<p></p>
						<b>Project Price</b>
						<p></p>
				
				
</div>
		
			 
			 
			 
			 
			  </div>		
		 </div>
		 
		
			<div class="clearfix"> </div>
	 </div>
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