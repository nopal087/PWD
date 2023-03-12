
<!DOCTYPE html>
<html>
<head>
	<title>Toko Merah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Isi Alamat penerima</h2>
		<form action="inputan_bukti.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>Kontak :</label>
				<input type="number" class="form-control" placeholder="Masukkan Kontak" name="kontak" required="required">
			</div>
			<div class="form-group">
				<label>Alamat :</label>
				<textarea class="form-control" name="alamat" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Produk yang dibeli / Masukkan link Produk:</label>
				<textarea class="form-control" name="produk" required="required"></textarea>
			</div>

			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>
 
</body>
</html>