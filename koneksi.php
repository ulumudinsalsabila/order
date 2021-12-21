<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "food_db";
// Create connection
	$conn = mysqli_connect($host, $username, $password,$db);
// Check connection
if ($conn -> connect_error) {
    die("koneksi ke database gagal");
}	

?>