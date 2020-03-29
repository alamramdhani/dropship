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
					<div class='panel panel-success' id='tambah'>
						<div class='panel-heading'>Tambah Data Dropshiper</div>
						<div class='panel-body'>
							<form class="form-horizontal" method='post' action='aksi_dropshiper.php?act=input'>
								<div class='form-group'>
									<label class="col-sm-2 control-label">Nama Dropshiper</label>
										<div class="col-sm-4">
									<input type='text' class='form-control' name='nama_dropshiper' required/>
										</div>
								</div>
								<div class='form-group'>
									<label class="col-sm-2 control-label">Alamat Dropshiper</label>
										<div class="col-sm-4">
									<input type='text' class='form-control' name='alamat_dropshiper' required/>
										</div>
								</div>
            					<div class="form-group">
            					    <div class="col-sm-offset-2 col-sm-10">
                					<button type="input" class="btn btn-success btn-submit" name="input" value="Simpan">Simpan</button>
                						<a href="dropshiper.php" class="btn btn-default btn-reset">Batal</a>
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
