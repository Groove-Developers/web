

<?php
require 'includes/header.php';
?>
				
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="contact">				
					
				  <div class="contact-form">
			 	  	 	<h2>Partner with Groove Developers Inc.</h2>

			 	  	 		<?php
   require('includes/admindb.php');
if(isset($_POST["submit"])){

        $name =htmlspecialchars($_POST['name']);
        $email =htmlspecialchars( $_POST["email"]);
        $company_name =htmlspecialchars($_POST["company_name"]);
        $body =htmlspecialchars($_POST["body"]);

 $sql = 'INSERT INTO partnership (name, email, company_name, body) VALUES ("'.$name.'","'.$email.'","'.$company_name.'","'.$body.'") ';
       
            if ($con->query($sql) === TRUE) {
    
 $_SESSION['submit'] = true; echo "Message sent successfully"; die();
} else {

	echo "Error Sending Message";
}



}



?>
			 	 	  
					    	<form action="partnership.php" method="post">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Company Name</label></span>
						    	<span><input name="company_name" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>How We Can Partner</label></span>
						    	<span><textarea name="body"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" name="submit" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clearfix"></div>		
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