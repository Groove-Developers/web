

<?php include 'includes/header.php'; ?>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
				
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="faq">
	
		<div class="row">
  <div class="col-sm-8 well">
    <div class="card">
      <img src="images/web.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Web Design</h2>
        
      </div>
    </div>
  </div>

  <div class="col-sm-8 well">
    <div class="card">
      <img src="images/mobile.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mobile Development</h2>
        
      </div>
    </div>
  </div>
  <div class="col-sm-8 well">
    <div class="card">
      <img src="images/software.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Software Development</h2>
        
      </div>
    </div>
  </div>
</div>

<div class="col-sm-8 well">
    <div class="card">
      <img src="images/sell.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Market Place</h2>
        
      </div>
    </div>
  </div>
</div>

<div class="col-sm-8 well">
    <div class="card">
      <img src="images/freelance.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Freelance Jobs</h2>
        
      </div>
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