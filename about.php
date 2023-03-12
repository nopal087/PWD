<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo "<script>window.location='login.php'</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tokomerah</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">Tokomerah</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="data-kategori.php">Data Kategori</a></li>
			<li><a href="data-produk.php">Data Produk</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="keluar.php">Logout</a></li>
		</ul>
	</div>
	</header>

	<!-- content -->
	<div class="section">
			<div class="container">
				<h3> About Us</h3>
				<div class="box">
					<div class="container main-container clearfix"> 
		        <div class="col-md-6">
		            <img src="foto/nopal.jpg" class="img-responsive" width="250px" alt="" />
		        </div>
		        <div class="col-md-6">
		           <h3 class="uppercase"></h3><br>
		           <h3>Muhammad Naufal Faruq || L200190075</h3>
		           <div class="h-30"></div>
		            <p>Perkanalkan Nama saya adalah Muhammad Naufal Faruq, Mahasiswa semester 5 prodi Informatika Universitas Muhammadiyah Surakarta, terimaksih sudah mengunjungi website Toko Online ini, website ini dibuat untuk memenuhi tugas Final Project matakuliah Pemrogaraman web dinamis , dengan ini saya mengucapkan terimakasih 
		            </p><br>
		            <b>Follow Me : <br></b>
		            <img src="foto/facebook.png" class="img-responsive" width="15px" alt="facebook" /> Muhammad Naufal Faruq<br>
		            <img src="foto/instagram.png" class="img-responsive" width="15px" alt="instagram" /> Muhammad Naufal Faruq<br>
		            <img src="foto/twiter.png" class="img-responsive" width="15px" alt="twiter" /> Muhammad Naufal Faruq<br>

		           
		    	</div>
		 	</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; 2021 - Tokomerah-Muhammad Naufal Faruq.</small>
		</div>
	</footer>


</body>
</html>