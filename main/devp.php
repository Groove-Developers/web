


<?php
require 'includes/header.php';
?>
				
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 	 <div class="price-details">
				 <?php
	require '../db.php';
$username =htmlspecialchars($_GET["username"]);
   $sql = "SELECT * FROM other_dev_details WHERE username='".$username."'";
$result = $con->query($sql);
//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
  
        ?>
				 <img src="http://groovedevelopers.com/Storage/profileimg/<?php echo $row['profile_img'];?>" class="img-circle" height="65" width="65" alt="Avatar">
				 
<?php
}}
$con->close();
?>







			<?php
	require '../db.php';
$username =htmlspecialchars($_GET["username"]);
   $sql = "SELECT * FROM other_dev_details WHERE username='".$username."'";
$result = $con->query($sql);
//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
  
        ?>
			
				 <h3><?php echo $row['username']; ?></h3>
				 

				 
			<div class="item_add"><span class="item_price"><?php echo '<a href="devp.php?username='.$username.'">';?>Select</a></span></div> 	 
				 
				 <div class="clearfix"></div>				 
			 </div>	
			 
			 
			 
			 
			</div>

		

	




				
				<div class="col-sm-8 well">
                   
					<h2><b>Developers Details</b></h2>
					<br>
					

						<p><b>Developer's Stage </b>: <?php echo $row['dev_stage']; ?></p>
						<p><b>Developer's Top Skills </b>: <?php echo $row['dev_top_skills']; ?></p>
						<p><b>Developer's Other Skills </b>: <?php echo $row['dev_other_skills']; ?></p>
						<p><b>Developer's Portfolios </b>: <?php echo $row['dev_portfolios']; ?></p>
						<p><b>About Developer </b>: <?php echo $row['about_dev']; ?></p>
						<p><b>Developer's Language </b>: <?php echo $row['dev_lang']; ?></p>
						<p><b>Developer's Documents </b>: <?php echo $row['dev_doc']; ?></p>
						<p><b>Developer's Ratings </b>: <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span></p>

				

				</div>
		<div class="clearfix"> </div>		
		</div>
				

		
<?php
}}
$con->close();
?>
		

		<div class="col-sm-8 well">
                   
					<h2><b>Developers Reviews</b></h2>
					<br>
					


				

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