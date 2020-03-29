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
					<div class='panel panel-success'>
						<div class='panel-heading'>Tambah Data Barang</div>
						<div class='panel-body'>
							<form method='post' action='aksi_barang.php?act=input'class='form-horizontal'>
								<div class='form-group'>
									<label class="col-sm-2 control-label">Jenis Barang</label>
										<div class="col-sm-4">
									<input type='text' class='form-control' name='jenis_barang' required/>
										</div>
								</div>
								<div class='form-group'>
									<label class="col-sm-2 control-label">Harga Jual</label>
										<div class="col-sm-4">
									<input type='text' class='form-control' name='harga_jual' required/>
										</div>
								</div>
								<div class='form-group'>
									<label class="col-sm-2 control-label">Potongan</label>
										<div class="col-sm-4">
									<input type='text' class='form-control' name='potongan' required/>
										</div>
								</div>
            					<div class="form-group">
            					    <div class="col-sm-offset-2 col-sm-10">
                					<button type="input" class="btn btn-success btn-submit" name="input" value="Simpan">Simpan</button>
                						<a href="Barang.php" class="btn btn-default btn-reset">Batal</a>
              						</div>
           						</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
	<?php include("include/js.php"); ?>
</html>
