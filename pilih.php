<?php 
include 'koneksi.php';

$update = $conn->query("UPDATE mahasiswa SET status = '1' WHERE nim = '$_SESSION[nim]'");

if ($update) {
	echo "<script>alert('Terimakasih')</script>";
	echo "<script>window.location.href = 'logout.php'</script> ";
}

?>