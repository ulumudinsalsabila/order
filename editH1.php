<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TRANSAKSI THIS DAY</title>
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


		
<!-- TOP HEADER Start
    ================================================== -->
	<div class="box-toole pull-right">
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Pesanan</button>
              </div>
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+6281210605162</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<a data-toggle="modal" data-target="#myModal" href="#">
							<i class="fa fa-user"></i>
								Login
							</a>
						</li>
						<li>
							<div class="cart dropdown">
						  		<a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Cart(1)</a>
					  			<div class="dropdown-menu dropup">
					  				<span class="caret"></span>
						  			<ul class="media-list">
								  		<li class="media">
										    <img class="pull-left" src="images/product-item.jpg" alt="">
										    <div class="media-body">
										      	<h6>Italian Sauce
								    				<span>$250</span>
								    			</h6>
								    		</div>
								  		</li>
									</ul>
									<button class="btn btn-primary btn-sm">Beli</button>
							    </div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="search-box">
						<div class="input-group">
					    	<input placeholder="Search Here" type="text" class="form-control">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
					    </div><!-- /.input-group -->
					</div><!-- /.search-box -->
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->

	
	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="images/logo.png" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	




	<!-- MENU Start
    ================================================== -->
	<?php
date_default_timezone_set("Asia/Bangkok");
?>
<script type="text/javascript">
function date_time(id)

{
date = new Date;
year = date.getFullYear();
month = date.getMonth();
months = new Array('JANUARY', 'FEBRUARY', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPETEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER');
d = date.getDate();
day = date.getDay();
days = new Array('Minggu', 'SENIN', 'SELASA', 'RABU', 'KAMIS', 'JUMAT', 'SABTU');
h = date.getHours();
if(h<10)
{
h = "0"+h;
}
m = date.getMinutes();
if(m<10)
{
m = "0"+m;
}
s = date.getSeconds();
if(s<10)
{
s = "0"+s;
}
result = ''+days[day]+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
document.getElementById(id).innerHTML = result;
setTimeout('date_time("'+id+'");','1000');
return true;
}

</script>

 <span id="date_time"></span>
<script type="text/javascript">window.onload = date_time('date_time');</script>

	 <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="index.php">BERANDA</a></li>
					<li><a href="products.php">MENU MAKAN</a></li>
					<li><a href="blog-single.php">MENU MINUM</a></li>
					<li class="dropdown">	
						<a href="pages.php">
							DATA TRANSAKSI
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li><a  href="minggu.php">Data Minggu</a></li>
						    <li><a  href="dbulan.php">Data Bulan</a></li>
						</ul>
					</li> <!-- End of /.dropdown -->

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<!-- TAMPIL DATA Start
    ================================================== -->
	
 <div class="box-body">
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from transaksi where id_pesanan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
           <form action="actioneditH1.php" method="post" enctype="multipart/form-data" role="form">
           
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">No pesanan <span class="text-red">*</span></label>
              <div class="col-sm-8">
			  <input type="text" value="<?php echo $d['no_pesanan']; ?>" class="form-control" name="no_pesanan" required>
			  <input type="hidden" value="<?php echo $d['id_pesanan']; ?>" class="form-control" name="id_pesanan" required>
			  </div>
              </div>
            </div>
			<div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Pesanan <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" value="<?php echo $d['pesanan']; ?>" class="form-control" name="pesanan" required></div>
              </div>
            </div>
			 <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Pelanggan <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" value="<?php echo $d['pelanggan']; ?>" class="form-control" name="pelanggan" required></div>
			 </div>
			 </div>
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Harga <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" value="<?php echo $d['harga']; ?>" class="form-control" name="harga" required></div>
			  </div>
			  </div>
			  <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nomor Meja <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" value="<?php echo $d['no_meja']; ?>" class="form-control" name="no_meja" required></div>
              </div>
            </div>
			  <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">waktu <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="date" value="<?php echo $d['waktu']; ?>" class="form-control" name="waktu"value ="<?php echo date("y-m-d")?>" required></div>
			   </div>
			   </div>
			   <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Tipe <span class="text-red">*</span></label>
              <div class="col-sm-8"><input type="text" value="<?php echo $d['tipe']; ?>" class="form-control" name="tipe" required></div>
			  
				</div>
					</div>
					<div class="form-group">
              <div class="row">
			  <div class="col-md-8 pull-right">
			  
            
              
			  
              <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button> 
              <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			  </div>
			  </div>
			  </div>
            </div>
              </div>
            </div>
              </div>
            </div>
            
          </form>
		  <?php 
	}
	?>
 </div>
		 
                  
				  
 
 
		


		<!-- PRODUCTS Start
    ================================================== -->

	
        <header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						
    
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->
		
	 

	

	<!-- FOOTER Start
    ================================================== -->
		
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

	
						<p class="copyright-text pull-right">FoodApp Tugas Akhir Marcelino Djitmau @2021 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
	</div>
</body>
</html>
