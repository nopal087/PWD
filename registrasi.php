
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi | Tokomerah</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
	<div class = "box-login">
		<h2>Registrasi</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="password" placeholder="Password" class="input-control">
			 <input type="password" name="konfirmasi" placeholder="konfirmasi password" class="input-control"></h3>
			<center><input type="submit" name="submit" value="register" class="btn"><br>
				sudah punya akun?
				<a href="login.php" name ="submit" value ="Login">Login</center>
		</form>
		<?php
		require 'functions.php';

		if (isset($_POST["register"])){
		    if (registrasi($_POST) > 0){
		        echo "<script>
		            alert ('user berhasil ditambahkan');
		            </script>";
		    }else{
		        echo mysqli_error($conn);
		    }
		}
		?>
	</div>

</body>
</html>