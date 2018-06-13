<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										<li><a href="profile.php"><i class="fa fa-tachometer"></i> <span>Profile</span></a></li>
										<li id="menu-academico" ><a href="store.php"><i class="fa fa-file-text-o"></i> <span>Store</span></a></li>
										<li id="menu-academico" ><a href="sell.php"><i class="fa fa-file-text-o"></i> <span>Sell Your Products</span></a></li>
										<li id="menu-academico" ><a href="project.php"><i class="fa fa-file-text-o"></i> <span>Start Your Project</span></a></li>
										<li id="menu-academico" ><a href="about.php"><i class="fa fa-file-text-o"></i> <span>About</span></a></li>
										<li id="menu-academico" ><a href="service.php"><i class="fa fa-file-text-o"></i> <span>Service</span></a></li>
										<li id="menu-academico" ><a href="contact.php"><i class="fa fa-file-text-o"></i> <span>Contact Us</span></a></li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>