<?php
$servername = "localhost";
$database = "project_uts";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
