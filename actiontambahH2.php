<?php
// koneksi database
include_once 'koneksi.php';
 
// menangkap data yang di kirim dari form
$awal_tanggal = $_POST['awal_tanggal'];
$akhir_tanggal = $_POST['akhir_tanggal'];
$jumlah_transaksi_transaksi = $_POST['jumlah_transaksi'];
$jumlahpesanan = $_POST['jumlah_pesanan'];
$total_pendapatan = $_POST['total_pendapatan'];
$query="insert into dminggu (awal_tanggal,akhir_tanggal,jumlah_transaksi,jumlah_pesanan,total_pendapatan,) values('$awal_tanggal','$akhir_tanggal','$jumlah_transaksi','$jumlah_pesanan','$total_pendapatan')";

// menginput data ke database
 if (mysqli_query($conn,$query)){
 header("location:hari.php");
 }else{
 echo mysqli_error($conn);
 }
// mengalihkan halaman kembali ke index.php

 
?>