

<!-- TOP HEADER Start
    ================================================== -->
	<?php 
		include 'koneksi.php';
 
		session_start();
		 
		if (!isset($_SESSION['username'])) {
		    header("Location: index.php");
		}
	 
		$no=1;

		$search = isset($_POST['search']) ? $_POST['search'] : "" ;
		$tipe = isset($_POST['tipe']) ? $_POST['tipe'] : "" ;
		$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : "" ;
		$url = $_SERVER['REQUEST_URI'];
	?>
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+6281210605162</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<div class="cart dropdown">
						  		<!-- <a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Cart(1)</a> -->
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
						<li>
							<a href="logout.php" class="btn">
							<i class="fa fa-user"></i>
								Logout
							</a>
						</li>
					</ul>
				</div>
				<!-- <div class="col-md-2">
					<div class="search-box">
						<div class="input-group">
					    	<input placeholder="Search Here" type="text" class="form-control">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
					    </div>
					</div>
				</div> -->
			</div> <!-- End Of /.row -->
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
		function date_time(id){
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
	<div class="container" style="text-align: right;">
		<span id="date_time"></span>
	</div>
	
	<script type="text/javascript">window.onload = date_time('date_time');</script>

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="<?php echo $url === '/order/dashboard.php' ? 'active' : ''?>"><a href="index.php">BERANDA</a></li>
					<li class="<?php echo $url === '/order/makanan.php' ? 'active' : ''?>"><a href="makanan.php">MENU MAKAN</a></li>
					<li class="<?php echo $url === '/order/minuman.php' ? 'active' : ''?>"><a href="minuman.php">MENU MINUM</a></li>
					<li class="<?php echo $url === '/order/hari.php' || $url === '/order/minggu.php' || $url === '/order/dbulan.php' ? 'active dropdown' : 'dropdown'?>">
						<a href="#">
							DATA TRANSAKSI
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						    <li><a  href="hari.php">Data Harian</a></li>
						    <li><a  href="minggu.php">Data Minggu</a></li>
						    <li><a  href="dbulan.php">Data Bulan</a></li>
						    <li><a  href="dhistory.php">Histori Transaksi</a></li>
						</ul>
					</li>
					<li class="<?php echo $url === '/order/user.php' || $url === '/order/user.php' || $url === '/order/user.php' ? 'active dropdown' : 'dropdown'?>">
						<a href="#">
							MASTER DATA
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						    <li><a href="user.php">User Akun</a></li>
						    <li><a href="barang.php">Barang</a></li>
						</ul>
					</li>  <!-- End of /.dropdown -->
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->
