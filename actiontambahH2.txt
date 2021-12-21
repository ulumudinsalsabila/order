<?php
// koneksi database
include_once 'koneksi.php';
 
// menangkap data yang di kirim dari form
$no_pesanan = $_POST['no_pesanan'];
$pesanan = $_POST['pesanan'];
$pelanggan = $_POST['pelanggan'];
$harga = $_POST['harga'];
$no_meja = $_POST['no_meja'];
$waktu = $_POST['waktu'];
$tipe = $_POST['tipe'];
$query="insert into transaksi (no_pesanan,pesanan,pelanggan,harga,no_meja,waktu,tipe) values('$no_pesanan','$pesanan','$pelanggan','$harga','$no_meja','$waktu','$tipe')";

// menginput data ke database
 if (mysqli_query($conn,$query)){
 header("location:hari.php");
 }else{
 echo mysqli_error($koneksi);
 }
// mengalihkan halaman kembali ke index.php

 
?>