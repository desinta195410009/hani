<?php
$koneksi = mysqli_connect("db","root","example","hani") or die(mysqli_error());

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>
