<?php 
	session_start();
	include 'db.php';
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
			<li><a href="orderan.php">Orderan</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="index.php">Toko</a></li>
			<li><a href="keluar.php">Logout</a></li>
		</ul>
	</div>
	</header>

	<!-- content -->

	<div class="section">
			<div class="container">
				<h3> List Orderan</h3>
				<div class="box">
					<h2 style="text-align: center;">Daftar Orderan</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<br>		
		<br>		
		<table border="1" cellspacing="0" class= "table">
			<tr>
				<th width="20%">Nama</th>
				<th width="20%">Kontak</th>
				<th width="40%">Alamat</th>
				<th width="40%">Produk yang dibeli</th>
				<th width="20%">Action</th>
				
				<!-- <th width="20%">Foto produk</th> -->
	</tr>
			<?php 
			$data = mysqli_query($koneksi,"select * from orderan");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['kontak']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['produk']; ?></td>
					<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
				</tr>
				<?php
			}

			?>
		</table>
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