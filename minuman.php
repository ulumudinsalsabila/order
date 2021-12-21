<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ORDER HERE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
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



	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Menu Minuman </h1>
					<p>Segar Kuy</p>
				
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->

	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>MENU RESTO KAMI</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					    <?php

					    		$ambildata = mysqli_query($conn,"SELECT * FROM barang where tipe = 2");
							
									$row = mysqli_num_rows($ambildata);

									if ($row > 1) {
										while($tampil = mysqli_fetch_array($ambildata)){
											echo "<li><div class=\"products\">
													<a href=\"#\">
														<img src=\"images/product-image-8.jpg\" alt=\"\">
													</a>
													<a href=\"#\">
														<h4>".$tampil['nama']."</h4>
													</a>
													<p class=\"price\">From: Rp.".$tampil['harga']."</p>
													<p >".$tampil['deskripsi']."</p>
													<div >
														<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#tambah\">PESAN MAKAN</button>
													</div>
												</div></li>";
											$no++;
										}
									}else {
										echo "<tr>
													<td colspan=\"9\" align=\"center\"> TIdak ada data</td>
													</tr>";
									}	

					    	?>
					
					
								<div class="example-modal">

								  <div id="tambah" class="modal fade" role="dialog" style="display:none;">
								    <div class="modal-dialog"> 
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								          <h3 class="modal-title">Input Pesanan</h3>
								        </div>
								        <div class="modal-body">
								          <form action="actiontambahH1.php" method="post" enctype="multipart/form-data" role="form">
								           
								            <div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">No pesanan <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="text" class="form-control" name="no_pesanan" required></div>
								              </div>
								            </div>
											<div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">Pesanan <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="text" class="form-control" name="pesanan" required></div>
								              </div>
								            </div>
											 <div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">Pelanggan <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="text" class="form-control" name="pelanggan" required></div>
											  <div class="modal-footer">
											  </div>
											  </div>
											  <div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">Harga <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="text" class="form-control" name="harga" required></div>
											  <div class="modal-footer">
											  </div>
											  </div>
											  <div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">Nomor Meja <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="text" class="form-control" name="no_meja" required></div>
								              </div>
								            </div>
											  <div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">waktu <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="date" class="form-control" name="waktu"value ="<?php echo date("y-m-d")?>" required></div>
											  </div>
											  </div>
											   <div class="form-group">
								              <div class="row">
								              <label class="col-sm-3 control-label text-right">Tipe <span class="text-red">*</span></label>
								              <div class="col-sm-8"><input type="text" class="form-control" name="tipe" required></div>
											  <div class="modal-footer">
												</div>
													</div>
											  <div class="modal-footer">
												</div>
													</div>
								              <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
								              <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
								            </div>
								              </div>
								            </div>
								              </div>
								            </div>
								            
								          </form>
								        </div>
								      </div>
								    </div>
								  </div>
								  
								  
								</div><!-- modal insert close -->
								
					        </li>
							
					        <!--  ... -->
					    </ul>
					</div>	<!-- End of /.products-grid -->

					<!-- Pagination -->

					<!-- <div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	
					</div> -->
				</div>	<!-- End of /.col-md-9 -->
				

				
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	


	





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
						<p ><i class="fa  fa-map-marker"></i> <span>Food Code d.o.o.,</span>1000 Ljubljana Celovska cesta 135, Slovenia</p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> (+386) 40 123 456 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> (+386) 40 654 123 651</p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>info@sitename.com</span></p>
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
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>