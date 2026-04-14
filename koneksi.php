<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_kampus";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error){
    die("koneksi gagal: " . $conn->connect_error);
} 
echo "koneksi berhasil!";
?>