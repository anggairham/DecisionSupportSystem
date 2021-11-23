<?php  
include "header.php";
include "includes/config.php";

$readlAllnilai = mysqli_query($koneksi,"SELECT * FROM nilai_alternatif ORDER BY id_nilai_alternatif ASC");
$readlAllkr = mysqli_query($koneksi,"SELECT * FROM kriteria ORDER BY id_kriteria ASC");
$readlAllalt = mysqli_query($koneksi,"SELECT * FROM alternatif ORDER BY id_alternatif ASC");
//code insert data
if ($_POST) {
	$ia = $_POST['ia']; 
	$ik = $_POST['ik'];
	$nn = $_POST['nn'];
	$insert = mysqli_query($koneksi,"INSERT INTO rangking values('$ia','$ik','$nn','','')");
	if ($insert) {
?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="rangking.php">lihat semua data</a>.
	</div>
	<?php
	}else {  
	?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
	</div>		
	<?php  
		}
	}
	?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Form Tambah Rangking</h4>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
	<br><br>
	<form method="POST" action="">
	  <div class="form-group row">
	    <label for="ia" class="col-sm-2 col-form-label">Alternatif</label>
	    <div class="col-sm-10">
	      <select class="form-control" id="ia" name="ia">
				<?php
				while ($row = mysqli_fetch_assoc($readlAllalt)){
				extract($row);
				echo "<option value='{$id_alternatif}'>{$nama_alternatif}</option>";
				}
				?>
		  </select>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="ik" class="col-sm-2 col-form-label">Kriteria</label>
	    <div class="col-sm-10">
	      <select class="form-control" id="ik" name="ik">
				<?php
				while ($row2 = mysqli_fetch_assoc($readlAllkr)){
				extract($row2);
				echo "<option value='{$id_kriteria}'>{$nama_kriteria}</option>";
				}
				?>
		  </select>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="nn" class="col-sm-2 col-form-label">Nilai</label>
	    <div class="col-sm-10">
	      <select class="form-control" id="nn" name="nn">
				<?php
				while ($row3 = mysqli_fetch_assoc($readlAllnilai)){
				extract($row3);
				echo "<option value='{$jum_nilai_alternatif}'>{$ket_nilai_alternatif}</option>";
				}
				?>
		  </select>
	    </div>
	  </div>
	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Tambah</button>
	      <button type="button" onclick="location.href='rangking.php'" class="btn btn-success">Kembali</button>
	    </div>
	  </div>
	</form>
</div>