<?php
include 'db.php';
function registrasi($data)
{
	global $conn;

	$username = strtolower($data["user"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["konfirmasi"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM tb_admin WHERE username ='$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert ('username sudah terdaftar')
			</script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert ('konfirmasi password tidak sesuai')
			</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO tb_admin VALUES ('', '$username','$password')");

	return mysqli_affected_rows($conn);
}

function registrasiUser($data)
{
	global $conn;

	$username = strtolower($data["user"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["konfirmasi"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username ='$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
            alert ('Username sudah terdaftar')
            </script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
            alert ('Konfirmasi password tidak sesuai')
            </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO tb_user VALUES ('', '$username','$password')");

	return mysqli_affected_rows($conn);
}
