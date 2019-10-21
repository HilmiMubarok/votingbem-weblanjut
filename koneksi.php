<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "evoting_bem";

$conn = new mysqli($host, $username, $password, $database);