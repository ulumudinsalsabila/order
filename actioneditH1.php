<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$no_pesanan = $_POST['no_pesanan'];
$id_pesanan = $_POST['id_pesanan'];
$pesanan = $_POST['pesanan'];
$pelanggan = $_POST['pelanggan'];
$harga = $_POST['harga'];
$no_meja = $_POST['no_meja'];
$waktu = $_POST['waktu'];
$tipe = $_POST['tipe'];
 
// update data ke database
$query = "update transaksi set no_pesanan='$no_pesanan', pesanan='$pesanan',pelanggan='$pelanggan', harga='$harga', no_meja='$no_meja', waktu='$waktu', tipe='$tipe' where id_pesanan='$id_pesanan'";

mysqli_query($conn,$query);
 

// menginput data ke database
 if (mysqli_query($conn,$query)){
 header("location:hari.php");
 }else{
 echo mysqli_error($conn);
 }
// mengalihkan halaman kembali ke index.php

 
?>