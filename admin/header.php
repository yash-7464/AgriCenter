<?php
session_start();
?>
       <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">AdminPanel</a></h1>
							</div>
					<div class="w3layouts-left">
							
							<!--search-box-->
								<div class="w3-search-box">
									<form action="#" method="post">
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">
						
							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img">
												
												
												<?php
												if(isset($_SESSION["u_image"]))
												{
													$img=$_SESSION["u_image"];
													echo"<img src='upload/$img' alt=''>"; 
												}
												else
												{
														//header("location:index.php");
														echo "<script> window.location.href='index.php'; </script>";
												}
												?>
												
												</span> 
												<div class="user-name">
													<p>
													<?php
													@session_start();
													
														if(isset($_SESSION["u_name"]))
														{
															echo $_SESSION["u_name"];
														}
														else
														{
																header("location:index.php");
														}
													?>
													
													</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->

