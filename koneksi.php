<?php
$host = "ENDPOINT-RDS";
$user = "admin";
$pass = "password";
$db   = "sekolah";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
