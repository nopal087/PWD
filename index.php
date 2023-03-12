<!-- <?php
		session_start();
		if ($_SESSION['status_login'] != true) {
			echo "<script>window.location='login_user.php'</script>";
		}
		?> -->

<?php
include "db.php";
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
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
			<h1><a href="index.php">Tokomerah</a></h1>
			<ul>

				<li>
					<h4>Selamat datang</h4>
				</li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="login.php">Admin </a></li>
				<li><a href="login_user.php">User </a></li>
				<li><a href="logout.php">Logout </a></li>

			</ul>
		</div>
	</header>

	<!-- Serach -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="cari Produk">
				<input type="submit" name="submit" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h3>Kategori</h3>
			<div class="box">
				<!-- mengambil Kategori yang ada di database -->
				<?php
				$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
				if (mysqli_num_rows($kategori) > 0) {
					while ($k = mysqli_fetch_array($kategori)) {
				?>
						<a href="produk.php?kategori=<?php echo $k['category_id'] ?>">
							<div class="col-5">
								<img src="img/kategori.png" width="50px" style="margin-bottom: 5px;">
								<p><?php echo $k['category_name'] ?></p>
							</div>
						</a>
						<!-- jika tidak ada maka akan tampil tidak ada -->
					<?php }
				} else { ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- produk baru -->
	<div class="section">
		<div class="container">
			<h3>New Produk</h3>
			<div class="box">
				<!-- memanggil data yang ada di database -->
				<?php
				$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
				if (mysqli_num_rows($produk) > 0) {
					while ($p = mysqli_fetch_array($produk)) {
				?>
						<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
							<div class="col-4">
								<img src="produk/<?php echo $p['product_image'] ?>">
								<p class="nama"> <?php echo substr($p['product_name'], 0, 30)  ?></p>
								<p class="harga">Rp. <?php echo number_format($p['product_price'])  ?></p>
							</div>
						</a>
					<?php }
				} else { ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No.hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2021 - Muhammad Naufal Faruq - Tokomerah</small>
		</div>
	</div>

</body>

</html>