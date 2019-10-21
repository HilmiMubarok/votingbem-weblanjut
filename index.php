<?php 

if (!isset($_SESSION['logged_in'])) {
	header("location:login.php");
} else {
	header("location:dashboard.php");
}