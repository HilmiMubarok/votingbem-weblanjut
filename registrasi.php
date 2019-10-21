<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi E Voting Bem</title>
</head>
<body>
	
	<form method="POST">
		<label>NIM</label>
		<input type="text" name="nim"> <br>
		<label>Nama</label>
		<input type="text" name="nama"> <br>
		<label>Password</label>
		<input type="password" name="password" > <br>
		<label>Konfirmasi Password</label>
		<input type="password" name="cpassword" > <br>
		<button name="btn-register">Registrasi</button>
	</form>
	<a href="login.php">
		<button>Login</button>
	</a>
	
	<?php
	// Jika Tombol Register Di klik
		if (isset($_POST['btn-register'])) {

			// Ambil data dari form
			$nim       = $_POST['nim'];
			$nama      = $_POST['nama'];
			$password  = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			// Mengecek Jika Password dan Konfirmasi Password Tidak Sama
			if ($password !== $cpassword) {
				// Muncul Notif Password Tidak Sama
				echo "<script>alert('Password Tidak Sama')</script>";

			} else {
				// Jika Password dan Konfirmasi Password Sama

				// Enkripsi Password
				$hpassword = password_hash($password, PASSWORD_DEFAULT);

				// Kode SQL Untuk Input ke Database
				$sql       = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$hpassword', '')";

				// Jika Data Berhasil di Input ke Database
				if ($conn->query($sql)) {
					echo "<script>alert('Registrasi Sukses. Silahkan Login')</script>";
				}
			}
		}
	?>



</body>
</html>