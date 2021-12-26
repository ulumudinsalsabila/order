<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
// update data ke database
$query = "update transaksi set status='2' where id_pesanan='$id'";

// menginput data ke database
 if (mysqli_query($conn,$query)){
 header("location:hari.php");
 }else{
 echo mysqli_error($conn);
 }
// mengalihkan halaman kembali ke index.php

?>