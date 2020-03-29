<?php
include("config.php");

$act=$_GET['act'];

if ($act=='input'){
	$id_dropshiper = $_POST['id_dropshiper'];
	$kode_barang = $_POST['kode_barang'];
	$jumlah = $_POST['jumlah'];

	$sql = "INSERT INTO transaksi(id_dropshiper, kode_barang, jumlah, tanggal_transaksi) VALUES ('$id_dropshiper','$kode_barang', '$jumlah', '$hari_ini')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:laporan.php');
	}
	else {echo "gagal";}

}




?>
