<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$query = "delete from barang where id='$id'";
 
// menginput data ke database
 if (mysqli_query($conn,$query)){
 header("location:barang.php");
 }else{
 echo mysqli_error($conn);
 }
// mengalihkan halaman kembali ke index.php

?>