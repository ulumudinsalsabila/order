
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BERANDA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>
<body>

	<?php 
		require_once('header.php');
	?>

	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="images/slider.jpg" alt="" />
				    	<img src="images/slider1.jpg" alt=""/>
				    	<img src="images/slider2.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->



		<!-- PRODUCTS Start
    ================================================== -->

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>MENU MAKAN KAMI</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php

		    		$ambildata = mysqli_query($conn,"SELECT * FROM barang where tipe = 1");
				
					$row = mysqli_num_rows($ambildata);

					if ($row > 0) {
						while($tampil = mysqli_fetch_array($ambildata)){
							echo "<div class=\"col-md-3\">
										<div class=\"products\">
											<a href=\"makanan.php\">
												<img src=".$tampil['filepath']." alt=\"\">
											</a>
											<a href=\"makanan.php\">
												<h4>".$tampil['nama']."</h4>
											</a>
											<p class=\"price\">From: Rp.".$tampil['harga']."</p>
											<p >".$tampil['deskripsi']."</p>
											<a class=\"view-link shutter\" href=\"makanan.php\">
												<i class=\"fa fa-plus-circle\"></i>LIHAT</a>
										</div>	
									</div>";
							$no++;
						}
					}else {
						echo "<tr>
									<td colspan=\"9\" align=\"center\"> TIdak ada data</td>
									</tr>";
					}	
				?>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

		<!-- Drink Start
    ================================================== -->

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>MENU drink ice</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php

		    		$ambildata = mysqli_query($conn,"SELECT * FROM barang where tipe = 2");
				
					$row = mysqli_num_rows($ambildata);

					if ($row > 0) {
						while($tampil = mysqli_fetch_array($ambildata)){
							echo "<div class=\"col-md-3\">
										<div class=\"products\">
											<a href=\"minuman.php\">
												<img src=".$tampil['filepath']." alt=\"\">
											</a>
											<a href=\"minuman.php\">
												<h4>".$tampil['nama']."</h4>
											</a>
											<p class=\"price\">From: Rp.".$tampil['harga']."</p>
											<p >".$tampil['deskripsi']."</p>
											<a class=\"view-link shutter\" href=\"minuman.php\">
												<i class=\"fa fa-plus-circle\"></i>LIHAT</a>
										</div>	
									</div>";
							$no++;
						}
					}else {
						echo "<tr>
								<td colspan=\"9\" align=\"center\"> TIdak ada data</td>
							</tr>";
					}	
				?>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

		<!---JAM DIGITAL
		=====================================================-->
	
	
	

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img src="images/footer-logo.png" alt="">
						</a>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p>
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>FoodApp d.o.o.,</span>1000 Ljubljana Celovska cesta 135, Slovenia</p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> (+62) 81210605162 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span>(+62) 81210605162 </p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>MarcelinoDj@gmail.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						<h4>UPCOMING ITEMS</h4>
						<div class="media">
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						</div>	<!-- End Of /.media -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="cash-out pull-left">
							<li>
								<a href="#">
									<img src="images/American-Express.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/PayPal.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Maestro.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa-Electron.png" alt="">	
								</a>
							</li>
						</ul>
						<p class="copyright-text pull-right">Food Code @2013 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
						<a id="back-top" href="#"></a>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
</body>
</html>