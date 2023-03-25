     <?php
		include "db.php";
		error_reporting(0);
		$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
		$a = mysqli_fetch_object($kontak);
		// ketika diklik pada produk akan muncul detail
		$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
		$p = mysqli_fetch_object($produk);
		?>
     <!DOCTYPE html>
     <html>

     <head>
     	<meta charset="utf-8">
     	<meta name="viewport" content="width=device-width, initial-scale=1">
     	<title>Tokomerah</title>
     	<link rel="stylesheet" type="text/css" href="css/style.css">
     	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
     	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

     	<link rel="stylesheet" href="css/style.css">
     </head>
     <style>
     	.btn-wa {
     		padding: 8px 15px;
     		background-color: #09c271;
     		color: #fff;
     		border: none;
     		cursor: pointer;
     	}
     </style>

     <body>
     	<!-- header -->
     	<header>
     		<div class="container">
     			<h1><a href="index.php">Tokomerah</a></h1>
     			<ul>
     				<li><a href="produk.php">Produk</a></li>
     				<li><a href="cart.php">Keranjang</a></li>
     			</ul>
     		</div>
     	</header>

     	<!-- Serach -->
     	<div class="search">
     		<div class="container">
     			<form action="produk.php">
     				<input type="text" name="search" placeholder="cari Produk" value="<?php echo $_GET['search'] ?>">
     				<input type="hidden" name="kat" value="<?php echo $_GET['kategori'] ?>">
     				<input type="submit" name="submit" value="Cari Produk">
     			</form>
     		</div>
     	</div>

     	<!-- produk detail -->
     	<div class="section">
     		<div class="container">
     			<h3>Detail Produk</h3>
     			<div class="box">
     				<div class="col-2">
     					<img src="produk/<?php echo $p->product_image ?>" width="100%">
     				</div>
     				<div class="col-2">
     					<h3><?php echo $p->product_name ?></h3>
     					<h4>Rp. <?php echo number_format($p->product_price)  ?></h4>
     					<p>Deskripsi : <br></p>
     					<?php echo $p->product_description  ?>
     					<br>
     					<br>
     					<!-- tombol beli -->
     					<form action="" method="POST">
     						<a href="https://api.whatsapp.com/send?phone=6285712666154
									" class="btn-wa" target="_blank"><i class="fab fa-whatsapp"></i> Pesan Sekarang</a>
     						<!-- <input type="submit" name="submit" value="Beli Sekarang" class="btn"> -->
     						<!-- <input type="submit" name="submit" value="Masukkan keranjang" class="btn"> -->
     					</form><br>
     					<?php
							if (isset($_POST['submit'])) {
								echo '<script>alert("Berhasil Memasukkan Ke keranjang")</script>';
								echo '<script>window.location ="cart.php"</script>';
							}
							?>
     				</div>
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