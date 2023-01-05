<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-top-in">
				<div class="logo">
					<a href="index.php"><img src="images/f_logo.png" alt=" " height=100 width=300></a>
				</div>
				<div class="header-in">
					<ul class="icon1 sub-icon1">
						<li><a href="about.php">ABOUT</a> </li>
						<li><a href="feedback.php">FEEDBACK</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<!--<li > <a href="checkout.html" >CHECKOUT</a> </li>-->
						<?php
						@session_start();
						if (isset($_SESSION["r_id"])) {
						?>
							<li> <a href="view_history.php">History</a> </li>
							<li> <a href="logout.php">LOGOUT</a> </li>
							<li> <a href="#">hi..<?php echo $_SESSION["u_name"]; ?></a> </li>
						<?php
						} else {
						?>

							<li> <a href="registration.php">REGISTRATION</a> </li>
							<li> <a href="login.php">LOGIN</a> </li>
							<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
							
						<?php
						}
						?>

						<?php
						if (isset($_SESSION["r_id"])) {
							include("connect.php");
							$cq = mysqli_query($con, "select count(cart_id) from tbl_cart");
							$count_res = mysqli_fetch_array($cq);
						?>
							<li>
								<div class="cart">
									<a href="#" class="cart-in"> </a>
									<span> <?php echo $count_res[0]; ?></span>
								</div>
								<ul class="sub-icon1 list">
									<h3>Recently added items (<?php echo $count_res[0]; ?>)</h3>
									<div class="shopping_cart">

										<div class="login_buttons">
											<div class="check_button"><a href="view_cart.php">Check out</a></div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
								</ul>
							</li>
					</ul>




				<?php
						} else {
				?>

					<li>
						<div class="cart">
							<a href="#" class="cart-in"> </a>
							<span> 0</span>
						</div>
						<ul class="sub-icon1 list">
							<h3>Recently added items(0)</h3>
							<div class="shopping_cart">

								<div class="login_buttons">
									<div class="check_button"><a href="#">Check out</a></div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
						</ul>
					</li>
					</ul>

				<?php
						}
				?>


				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="h_menu4">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="index.php"><i> </i></a></li>


					<?php
					include("connect.php");
					$q = mysqli_query($con, "select * from tbl_category");
					while ($mres = mysqli_fetch_array($q)) {

					?>


						<li><a href="#"><?php echo $mres[1]; ?></a>
							<ul class="drop">

								<?php

								$q1 = mysqli_query($con, "select * from tbl_sub_category where cat_id=$mres[0]");
								while ($msres = mysqli_fetch_array($q1)) {
									echo "<li><a href='view_product.php?sub_cat_id=$msres[0]'>$msres[2]</a></li>";
								}
								?>
							</ul>
						</li>
					<?php
					}
					?>
					<li><a href="contact.php">Contact </a></li>

				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div>
		</div>
	</div>
	<div class="header-bottom-in">
		<div class="container">
			<div class="header-bottom-on">
				<p class="wel"><a href="registration.php">Welcome visitor you can login or create an account.</a></p>
				<div class="header-can">
					<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="facebook"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="skype"> </i></a></li>
					</ul>

					<div class="search">
						<form method='get' action="search.php">
							<input type="text" value="Search" name='search' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							<input type="submit" value="">
						</form>
					</div>
					
					<div id="google_translate_element"></div>
					&nbsp;&nbsp;&nbsp;
							<script type="text/javascript">
								function googleTranslateElementInit() {
									new google.translate.TranslateElement({
										pageLanguage: 'hindi',
										layout: google.translate.TranslateElement.InlineLayout.SIMPLE
									}, 'google_translate_element');
								}
							</script>
							<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
							<script>
								$(document).ready(function() {
									$('#google_translate_element').bind('DOMNodeInserted', function(event) {
										$('.goog-te-menu-value span:first').html('Translate');
										$('.goog-te-menu-frame.skiptranslate').load(function() {
											setTimeout(function() {
												$('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('Translate');
											}, 100);
										});
									});
								});
							</script>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>



</div>