<!-- Masukkan file koneksi -->
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	

	<h1 align="center">Daftar Calon Ketua BEM</h1>
		<?php
			// ambil data calon dari database
			$data = $conn->query("SELECT * FROM calon");

			while($row = $data->fetch_object()):
		?>
			<h1>Nama : <?= $row->nama_calon ?></h1>
			<h1>Foto : <img src="foto/<?= $row->foto ?>" alt=""></h1>
			<h1>Fakultas : <?= $row->fakultas ?></h1>
			<h1>Visi : <?= $row->visi ?></h1>
			<h1>Misi : <?= $row->misi ?></h1>
			<a href="pilih.php?nim=<?= $_SESSION['nim'] ?>">
				<button>Pilih</button>
			</a>
			<hr>
		<?php endwhile; ?>

</body>
</html>