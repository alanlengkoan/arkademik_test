<?php
include_once 'koneksi.php';

$nmkasir  = $_POST['inpnmkasir'];
$kategori = $_POST['inpkategori'];
$nmproduk = $_POST['inpnmproduk'];
$hgproduk = $_POST['inphg'];

$sql = "INSERT INTO tb_product (name, price, id_category, id_cashier) VALUES ('$nmproduk', '$hgproduk', '$kategori', '$nmkasir')";
$qry = $koneksi->query($sql);

if ($qry == true) 
{
    exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data ditambahkan', 'icon' => 'success', 'button' => 'Ok!')));
} else
{
    exit(json_encode(array('title' => 'Gagal!', 'text' => 'Data tidak ditambahkan', 'icon' => 'error', 'button' => 'Ok!')));
}