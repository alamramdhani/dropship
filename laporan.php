<?php
include("config.php");
include("fungsi/fungsi_indotgl.php");
include("fungsi/fungsi_rupiah.php");
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
					<div class='panel panel-success'>
						<div class='panel-heading'>Laporan</div>
						<div class='panel-body'>
							<center>
								<h3></h3>
								<h3>Laporan Penjualan Barang Dropship</h3>
								<p>&nbsp;</p>
							</center>

							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th class="text-center">No</th>
								  <th class="text-center">Tanggal Transaksi</th>
								  <th class="text-center">Nama Dropshiper</th>
								  <th class="text-center">Alamat</th>
								  <th class="text-center">Jenis Barang </th>
								  <th class="text-center">Harga Jual</th>
								  <th class="text-center">Jumlah (pcs)</th>
								  <th class="text-center">Potongan</th>
								  <th class="text-center">Total</th>
								  <th class="text-center">Aksi</th>
								</tr>
							  </thead>
							  <tbody>
								<?php
									$no = 1;
									$total_semua = 0;
									$sqlquery = "SELECT dropshiper.*, barang.*, transaksi.* FROM transaksi transaksi INNER JOIN dropshiper dropshiper ON transaksi.id_dropshiper = dropshiper.id_dropshiper INNER JOIN barang barang ON transaksi.kode_barang = barang.kode_barang ORDER BY transaksi.id_dropshiper ASC";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
										$potongan = ($row["harga_jual"] * $row["jumlah"]) * ($row["potongan"] / 100);
										$total = ($row["harga_jual"] * $row["jumlah"]) - $potongan;
										$total_semua += $total;
										

								?>
								<tr>
								<td class="text-center"><?php echo $no ?></td>
								<td><?php echo tgl_indo($row["tanggal_transaksi"]);?></td>
								<td><?php echo $row["nama_dropshiper"];?></td>
								<td><?php echo $row["alamat_dropshiper"];?></td>
								<td><?php echo $row["jenis_barang"];?></td>
								<td><?php echo rupiah($row["harga_jual"]);?></td>
								<td class="text-center"><?php echo $row["jumlah"];?></td>
								<td><?php echo rupiah($potongan);?></td>
								<td><?php echo rupiah($total);?></td>
								<td class="text-center">
								<div class="btn-group">
								  <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="aksi_laporan.php?act=delete&id_transaksi=<?php echo $row["id_transaksi"];?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-trash" title='Hapus'></i> </a>
								</div></td>
								</tr>
								<?php
									$no++;}
								?>
								<tr>
								<td colspan='8'>Grand Total</td>
								<td colspan='2'><?php echo rupiah($total_semua); ?></td>
								</tr>
								<?php
										mysqli_free_result($result);
									}
									mysqli_close($koneksi);
									?>
							  </tbody>
							</table>
							<p>
							<div class='pull-right'>
							Bogor, <?php echo tgl_indo($hari_ini); ?><br>
							<b><center>Manager Perusahaan</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Alam Ramdhani</center></b>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include("include/js.php"); ?>
</html>
