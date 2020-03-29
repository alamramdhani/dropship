<?php
include("config.php");
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

					<div class='panel panel-primary'>
						<div class='panel-heading'>Semua Data Barang</div>
							<div class='panel-body'>
								<div class="pull-right btn-tambah">
									<a class='btn btn-primary' href='add_barang.php'><i class='glyphicon glyphicon-plus'></i> Data Barang</a>
										<p>
											</div>
							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th class="text-center">No</th>
								  <th class="text-center">Jenis Barang</th>
								  <th class="text-center">Harga Jual</th>
								  <th class="text-center">Potongan</th>
								  <th class="text-center">Aksi</th>
								</tr>
							  </thead>
							  <tbody>
								<?php
								$no = 1;
									$sqlquery = "SELECT * FROM barang";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {

								?>
								<tr>
								<td class="text-center"	><?php echo $no++ ?></td>
								<td><?php echo $row["jenis_barang"];?></td>
								<td><?php echo rupiah($row["harga_jual"]);?></td>
								<td class="text-center"><?php echo $row["potongan"];?> %</td>
								<td class="text-center">
								<div class="btn-group">
								 <a href="edit_barang.php?kode_barang=<?php echo $row["kode_barang"];?>" class="btn btn-success btn-sm" title='Edit'> <i class="glyphicon glyphicon-edit"></i> </a>
								</div>
								<div class="btn-group">
								  <a onclick="return confirm('Anda yakin ingin menghapus data tersebut?');" href="aksi_barang.php?act=delete&kode_barang=<?php echo $row["kode_barang"];?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-trash" title='Hapus' value="delete"></i> </a>
								</div>
								</td>
								</tr>
								<?php
										}
										mysqli_free_result($result);
									}
									mysqli_close($koneksi);
									?>
							  </tbody>
							</table>
						</div>
					</div>
					

				</div>
			</div>
		</div>
	</body>
	<?php include("include/js.php"); ?>
</html>
