<div class="footer">
			<div class="footer-top">
				<div class="container">
					
					<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p> Agricenter, our mission is to help develop the next generation of farmers and agripreneurs, and we are delighted that you are interested in learning more about our journey</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="feedback.php">FEEDBACK</a></li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="registration.php">Registration</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Category</h6>
						<ul>
											
							<?php
							include("connect.php");
							$q=mysqli_query($con,"select * from tbl_category");
							while($mres=mysqli_fetch_array($q))
							{
							
							?>
							
							
								<li ><?php  echo"<a href='view_sub_category.php?cat_id=$mres[0]' >";?><?php echo $mres[1]; ?></a>
									
								</li> 		
							<?php
							}
							?>
					
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Brands</h6>
						<ul>
						
						
						<?php
						include("connect.php");
						$q=mysqli_query($con,"select * from tbl_company");
						while($cres=mysqli_fetch_array($q))
						{
					?>
							<li>
							<?php echo"<a href='c_search.php?id=$cres[0]'>";
						?>
							<?php
							echo "$cres[1]";
							?>
							
							</a></li>
						

							<?php
						}
						?>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<p class="footer-class"> Devloped by  <a href="" target="_blank">Patel Yash | Dhruv Patel</a> </p>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>

