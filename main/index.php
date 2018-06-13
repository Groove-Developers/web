
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


									<!--tracker ends-->
							   <div class="middle-content">
									<h3>Projects
									</h3>

     
   
									
	

		 <table class="table table-striped">
    <thead>
      <tr>
        <th>Project Name</th>
			<th>Project Type</th>
			<th>Category</th>
			<th>Status</th>
			<th>Start Date</th>
			<th>Due Date</th>
			<th>View Project</th>
      </tr>
    </thead>
	

									

	<tbody>



<?php
require('includes/projectdb.php');
$sql = "SELECT * FROM users_project WHERE username = '" . $_SESSION['username'] . "' ORDER BY id ASC LIMIT 10 ";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>

        <tr>
                <td><?php echo $row['project_name']; ?></td>
                <td><?php echo $row['project_type']; ?></td>
                <td><?php echo $row['project_cat']; ?></td>
                <td><?php echo $row['status']; ?></td>
                 <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['due_date']; ?></td>
                <td><?php echo '<a href="vp.php?id='.$id.'">';?><button type="button" class="btn btn-danger">view</button></a>
                </td>
            </tr>
            <?php  }

$con->close();
?>

	</tbody>
	</table>



      
    
    
    


										
								</div>
									
                               



								</div>
								
							</div>
						</div>
					</div>

			
						
							

							
						<div class="clearfix"></div>

						<!-- New Project-->
						
					<div class="content-top">
						<div class="col-md-6 content-top-lft">
							<div class="panel panel-widget">
								<div class="panel-title">
								  Products Sold
								 
								</div>
								<div class="panel-body">
									<table >
<thead>
  <tr>
    <th>Product Name</th>
    <th>Category</th>
    <th>Status</th>
    <th>Price</th>
    <th>Date</th>
  </tr>
  </thead>
  

<tbody>
	
  <?php
  require('includes/storedb.php');
$sql = "SELECT * FROM products WHERE seller_name = '" . $_SESSION['username'] . "' ORDER BY id ASC LIMIT 15  ";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
  
<tr>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_cat']; ?></td>
    <td><?php echo $row['product_status']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo $row['reg_date']; ?></td>
  </tr>
<?php  }

$con->close();
?>
</tbody>


</table>




						


								</div>
							</div>
						</div>
						<!--new project ends-->


		
			<div class="col-md-6 content-top-2 ">


				

				<div class="panel panel-widget">
								<div class="panel-title">
								  <h4>Products Purchased</h4>
								 
								</div>
								<div class="panel-body"><!--panel body-->

								<table>
	<thead>
  <tr>
    <th>Product Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Date</th>
  </tr>
  </thead>



  <tbody>

    <?php
    require '../db.php';
$sql = "SELECT * FROM users_order WHERE username = '" . $_SESSION['username'] . "' ORDER BY id DESC LIMIT 7 ";
$result = $con->query($sql);

//check query worked and report error it it the not
if ($result === FALSE ){echo $conn->error;
exit;}

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id = $row['id'];
        ?>
        <tr>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_cat']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo $row['purchased_date']; ?></td>
  </tr>
  
  <?php  }

$con->close();
?>
  </tbody>
</table>

								</div><!--panel body ends-->
							</div>
							

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