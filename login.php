<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login E Voting Bem</title>
</head>
<body>
	
	<form method="POST">
		<label>NIM</label>
		<input type="text" name="nim" > <br>
		<label>Password</label>
		<input type="password" name="password" > <br>
		<button name="btn-login">Login</button>
	</form>
	<a href="registrasi.php">
		<button>Register</button>
	</a>

	<?php
	// Jika Tombol Login Di klik
		if (isset($_POST['btn-login'])) {

			// Ambil data dari form
			$nim      = $_POST['nim'];
			$password = $_POST['password'];

			// Ambil data password dari nim yang diinputkan
			$data     = $conn->query("SELECT * FROM mahasiswa WHERE nim = '$nim' ");

			// Jika ada data dengan nim yang sama
			if ($data->num_rows > 0) {

				/*
					ambil password yang ter-enkripsi kemudian cocokkan dengan password
					yang diinput 
				*/

				$hasil = $data->fetch_object();

				// Jika Password Cocok
				if (password_verify($password, $hasil->password)) {

					// Cek apakah sudah memilih atau belum
					if ($hasil->status == 1) {
						echo "<script>alert('Login Gagal, Anda Sudah Memilih')</script>";
					} else {
						// Set Session
						$_SESSION['logged_in'] = TRUE;
						$_SESSION['nim'] = $hasil->nim;

						echo "<script>alert('Login Sukses')</script>";
						echo "<script>window.location.href = 'dashboard.php' </script>";
					}

				} else {
					echo "<script>alert('Login Gagal, Password Salah')</script>";
				}

			} else {
				echo "<script>alert('NIM Tidak Terdaftar')</script>";
			}
			
		}
	?>
</body>
</html>