<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_transaksi=$_GET['id_transaksi'];
	$row = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");
	header('location:laporan.php');
}
?>
