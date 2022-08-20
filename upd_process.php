<?php
include_once 'koneksi.php';

$id       = $_POST['inpid'];
$nmkasir  = $_POST['inpnmkasir'];
$kategori = $_POST['inpkategori'];
$nmproduk = $_POST['inpnmproduk'];
$hgproduk = $_POST['inphg'];

$sql = "UPDATE tb_product SET name = '$nmproduk', price = '$hgproduk', id_category = '$kategori', id_cashier = '$nmkasir' WHERE id = '$id'";
$qry = $koneksi->query($sql);

if ($qry == true) 
{
    exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data diubah', 'icon' => 'success', 'button' => 'Ok!')));
} else
{
    exit(json_encode(array('title' => 'Gagal!', 'text' => 'Data tidak diubah', 'icon' => 'error', 'button' => 'Ok!')));
}