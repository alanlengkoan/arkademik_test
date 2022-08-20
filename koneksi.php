<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "db";

$koneksi = new mysqli ($host, $user, $pass, $dbnm);

if ($koneksi->connect_errno) {
    echo "Gagal Koneksi " . $koneksi->connect_error;
}