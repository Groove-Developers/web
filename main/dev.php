
<?php
require 'includes/header.php';


?>


				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
   <div class="w_content">
		<div class="women">
		<?php
			require '../db.php';
		$sql="SELECT * FROM other_dev_details ORDER BY username";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
 ?>


			<a href="#"><h4>Developers - <span><?php  printf($rowcount);  ?> active</span> </h4></a>
			<?php
  // Free result set
  mysqli_free_result($result);
  }


?>
			<ul class="w_nav">
						
		     			
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>





		
		<!-- grids_of_4 -->
		<div class="grids_of_4">
		
        <div class="container-fluid bg-3 text-center">

		 <div class="row">
		
		<?php
	$con = mysqli_connect("localhost","root","Developers2018","developers");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

   $sql = "SELECT * FROM other_dev_details";
$result = $con->query($sql);
//check query worked and report error it it the not
if ($result === FALSE ){echo $con->error;
exit;}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$username = $row['username'];
  
  
        ?>
				<div class="col-sm-3 well" style="float: left;">
				    <h4><b>Name</b>:<?php echo $row['username']; ?></h4>
				    <p><b>Stage</b>:<?php echo $row['dev_stage']; ?></p>
				    <p><b>Top Skills </b>: <?php echo $row['dev_top_skills']; ?></p>
					<p><b>Other Skills </b>: <?php echo $row['dev_other_skills']; ?></p>
					<p><b>Portfolios </b>: <?php echo $row['dev_portfolios']; ?></p>
					<p><b>Ratings </b>: <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span></p>
				     <div class="item_add"><span class="item_price"><?php echo '<a href="devp.php?username='.$username.'">';?>View</a></span></div>
			   	</div>
			
						<?php
}}
$con->close();
?>
	
			</div>
			</div>

	

			<div class="clearfix"></div>
		</div>

	
		

			<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 16;
        $offset = ($pageno-1) * $no_of_records_per_page;

        require '../db.php';
        $total_pages_sql = "SELECT COUNT(*) FROM other_dev_details";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM other_dev_details LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
        }
        mysqli_close($con);
    ?>
    <ul class="pager">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>


		</div>
		
		
		
		
		<!-- end grids_of_4 -->
		
		
	</div>
   <div class="clearfix"></div>
	<!-- end content -->


	<!--footer-->
	<?php include 'includes/footer.php'; ?>
				<!--footer ends-->




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