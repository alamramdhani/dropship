<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$kode_barang=$_GET['kode_barang'];
	$row = mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang = '$kode_barang'");
	header('location:barang.php');
}

elseif ($act=='input'){
	$jenis_barang = $_POST["jenis_barang"];
	$harga_jual = $_POST["harga_jual"];
	$potongan = $_POST["potongan"];

	$sql = "INSERT INTO barang(jenis_barang, harga_jual, potongan) VALUES ('$jenis_barang','$harga_jual', '$potongan')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:barang.php');
	}
	else {echo "gagal";}

}

elseif ($act=='update'){
	$jenis_barang = $_POST["jenis_barang"];
	$kode_barang = $_POST["kode_barang"];
	$harga_jual = $_POST["harga_jual"];
	$potongan = $_POST["potongan"];

	$sql = "UPDATE barang SET jenis_barang='$jenis_barang', harga_jual='$harga_jual', potongan='$potongan' WHERE kode_barang='$kode_barang'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:barang.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
