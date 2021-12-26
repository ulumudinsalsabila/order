<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TRANSAKSI LONG WEEK</title>
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

	<!-- TAMPIL DATA Start
		================================================== -->
		<div class="container">
			<div class="box-body">
				<div class="table-responsive22">
					<!-- <div class="box-toole pull-right">
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Laporan</button>
					</div> -->
					<form action="minggu.php" method="post">
						<div class="box-toole pull-right" style="margin-right: 2px;">
							<a href="laporan.php?jenis=Mingguan&tipe=<?php echo $tipe ?>" class="btn btn-info btn-flat " target="_blank" ><i class="fa fa-file-pdf-o"></i>Cetak Laporan</a>
						</div>
						<div class="box-toole pull-right" style="margin-right: 2px;">
							<button type="submit" class="btn btn-info">Cari Data</button>
						</div>
						<div class="box-toole pull-right" style="margin-right: 2px;">
							<input type="text" name="search" class="form-control" placeholder="Cari Data" value="<?php echo $search ?>">
						</div>
						<div class="box-toole pull-right" style="margin-right: 2px;">
							<select name="tipe" class="form-control">
								<option value=""> - Pilih Tipe - </option>
								<option value="makanan" <?php echo $tipe === 'makanan' ? 'selected' : "" ?>> Makanan</option>
								<option value="minuman" <?php echo $tipe === 'minuman' ? 'selected' : "" ?>> Minuman</option>
							</select>
						</div>
					</form>

					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<H2>DATA TRANSAKSI MINGGU INI</H2>
								<th><center>NO</center></th>
								<th><center>NO PESANAN</center></th>
								<th><center>NO MEJA</center></th>
								<th><center>PELANGGAN</center></th>
								<th><center>PESANAN</center></th>
								<th><center>TIPE</center></th>
								<th><center>WAKTU</center></th>
								<th><center>HARGA</center></th>
								<th><center>OPSI</center></th>
							</tr>
						</thead>
						<tbody>
							<?php

							$where = "";
							if ($search) {
								$where .= " AND no_pesanan like '%{$search}%'" ;
								$where .= " OR pelanggan like '%{$search}%'" ;
							}
							if ($tipe) {
								$where .= " AND tipe like '%{$tipe}%'" ;
							}

							$ambildata = mysqli_query($conn,"SELECT * FROM transaksi where waktu >= DATE_SUB(NOW(),INTERVAL 1 WEEK) ".$where);
							
							$row = mysqli_num_rows($ambildata);

							if ($row > 0) {
								$totalharga=0;
								while($tampil = mysqli_fetch_array($ambildata)){
									$totalharga += $tampil['harga'];
									echo "
									<tr>
										<td><center>".$no."</center></td>
										<td><center>".substr(str_repeat(0, 4).$tampil['no_pesanan'], - 4)."</center></td>
										<td><center>".substr(str_repeat(0, 3).$tampil['no_meja'], - 3)."</center></td>
										<td><center>".$tampil['pelanggan']."</center></td>
										<td><center>".$tampil['pesanan']."</center></td>
										<td><center>".$tampil['tipe']."</center></td>
										<td><center>".$tampil['waktu']."</center></td>
										<td><center>".$tampil['harga']."</center></td>
										<td>
											<center> 
												<a href=\"delete.php?id=". $tampil['id_pesanan']."\" class=\"btn btn-danger btn-flat btn-xs\" data-toggle=\"modal\" data-target=\"#delete<?php echo $no; ?>\"><i class=\"fa fa-trash\"></i> Delete</a>
												<a href=\"editH1.php?id=". $tampil['id_pesanan']."\" class=\"btn btn-primary btn-flat btn-xs\"  ><i class=\"fa fa-pencil\"></i>Edit</a>
											</center>
										</td>
									</tr>";
									$no++;
								}
									echo "
									<tr>
										<td colspan=\"7\" align=\"right\">TOTAL HARGA</td>
										<td><center>".$totalharga."</center></td>
										<td></td>
									</tr>";
							}else {
								echo "<tr>
											<td colspan=\"9\" align=\"center\"> TIdak ada data</td>
											</tr>";
							}	

							?>
						</tbody>
					</table>

				</div>
			</div>
		<p class="copyright-text pull-right">FoodApp Tugas Akhir Marcelino Djitmau @2021 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>

		</div>
		<!-- PRODUCTS Start
			================================================== -->

	<!-- FOOTER Start
		================================================== -->
		<div class="example-modal">
			<div id="tambah" class="modal fade" role="dialog" style="display:none;">
				<div class="modal-dialog"> 
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h3 class="modal-title">Input Pesanan</h3>
						</div>
						<div class="modal-body">
							<form action="actiontambahH2.php" method="post" enctype="multipart/form-data" role="form">

								<div class="modal-body">
									<form action="#" method="post" enctype="multipart/form-data" role="form">
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"> Awal Tanggal <span class="text-red">*</span></label>         
												<div class="col-sm-8"><input type="date" class="form-control" name="awal_tanggal" required></div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right">Akhir Tanggal <span class="text-red">*</span></label>
												<div class="col-sm-8"><input type="date" class="form-control" name="akhir_tanggal" required></div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right">Jumlah Transaksi <span class="text-red">*</span></label>
												<div class="col-sm-8"><input type="text" class="form-control" name="jumlah_transaksi" required></div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right">Jumlah Pesanan <span class="text-red">*</span></label>
												<div class="col-sm-8"><input type="text" class="form-control" name="jumlah_pesanan" required></div>
												<div class="modal-footer">
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<label class="col-sm-3 control-label text-right">Total Pendapatan <span class="text-red">*</span></label>
													<div class="col-sm-8"><input type="text" class="form-control" name="total_pendapatan" required></div>
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

	</div>	<!-- End Of /.col-md-12 -->	
</div>	<!-- End Of /.row -->	
</div>	<!-- End Of /.container -->	
</div>	<!-- End Of /.footer-bottom -->
</footer> <!-- End Of Footer -->

<a id="back-top" href="#"></a>
</div>
</body>
</html>
