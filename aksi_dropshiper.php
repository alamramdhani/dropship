<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_dropshiper=$_GET['id_dropshiper'];
	$row = mysqli_query($koneksi, "DELETE FROM dropshiper WHERE id_dropshiper = '$id_dropshiper'");
	header('location:dropshiper.php');
}

elseif ($act=='input'){
	$nama_dropshiper = $_POST["nama_dropshiper"];
	$alamat_dropshiper = $_POST["alamat_dropshiper"];

	$sql = "INSERT INTO dropshiper(nama_dropshiper, alamat_dropshiper) VALUES ('$nama_dropshiper','$alamat_dropshiper')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:dropshiper.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_dropshiper = $_POST["id_dropshiper"];
	$nama_dropshiper = $_POST["nama_dropshiper"];
	$alamat_dropshiper = $_POST["alamat_dropshiper"];

	$sql = "UPDATE dropshiper SET nama_dropshiper='$nama_dropshiper', alamat_dropshiper='$alamat_dropshiper' WHERE id_dropshiper='$id_dropshiper'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:dropshiper.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
