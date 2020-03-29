<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("include/css.php"); ?>
	</head>
	<body>
		<header>
			<?php include("include/header.php"); ?>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-danger' id='tambah'>
						<div class='panel-heading'>Tambah Data Transaksi</div>
						<div class='panel-body'>


							<form method='post' action='aksi_transaksi.php?act=input'>
								<div class='form-group'>

									<label>Pilih Dropshiper</label>
									<select name='id_dropshiper' class='form-control'>
									<?php
									$sqlquery = "SELECT * FROM dropshiper";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
											$id_dropshiper = $row["id_dropshiper"];
											$dropshiper = $row["nama_dropshiper"];
											echo "<option value='$id_dropshiper'>$dropshiper</option>";
										}
										mysqli_free_result($result);
									}
									?>
									</select>

								</div>
								<div class='form-group'>
									<label>Pilih Jenis Barang</label>
									<select name='kode_barang' class='form-control'>
									<?php
									$sqlquery = "SELECT * FROM barang";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
											$kode_barang = $row["kode_barang"];
											$barang = $row["jenis_barang"];
											echo "<option value='$kode_barang'>$barang</option>";
										}
										mysqli_free_result($result);
									}
									?>
									</select>
									</select>
								</div>
								<div class='form-group'>
									<label>Jumlah(pcs)</label>
									<input type='number' name='jumlah' class='form-control' required/>
								</div>
								<button type='input' name='input' class='btn btn-danger'>Simpan</button>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include("include/js.php"); ?>
</html>
