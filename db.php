<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'db_tokomerah';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
	$koneksi = mysqli_connect("localhost","root","","db_tokomerah");

 ?>