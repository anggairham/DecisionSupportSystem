<?php  
include "header.php";
include "includes/config.php";
//code edit data
$ia = isset($_GET['ia']) ? $_GET['ia'] : die('ERROR: missing ID.');
$ik = isset($_GET['ik']) ? $_GET['ik'] : die('ERROR: missing ID.');

$readOne= mysqli_query($koneksi,"SELECT * FROM rangking WHERE id_alternatif='$ia' AND id_kriteria='$ik' LIMIT 0,1");
$getRow = mysqli_fetch_assoc($readOne);

$readkr = mysqli_query($koneksi,"SELECT * FROM kriteria WHERE id_kriteria='$ik'");
$getRowkr = mysqli_fetch_assoc($readkr);

$readalt = mysqli_query($koneksi,"SELECT * FROM alternatif WHERE id_alternatif='$ia'");
$getRowalt = mysqli_fetch_assoc($readalt);
$readna = mysqli_query($koneksi,"SELECT * FROM nilai_alternatif ORDER BY id_nilai_alternatif ASC");

//code update data
if ($_POST) {
	$nn = $_POST['nn'];

	$update = mysqli_query($koneksi,"UPDATE rangking 
				SET nilai_rangking = '$nn'
				WHERE id_alternatif = '$ia' 
				AND id_kriteria = '$ik'");
	if ($update) {
		echo "<script>location.href='rangking.php'</script>";
	}else {
		echo "Gagal";
	}
}
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Form Ubah Rangking</h4>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
	<br><br>
	<form method="POST" action="">
	  <div class="form-group">
	    <label for="alt">Alternatif</label>
	    <div>
	      <input type="text" class="form-control" id="alt" name="alt" value="<?php echo $getRowalt['nama_alternatif'] ?>" disabled>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="kr">Kriteria</label>
	    <div>
	      <input type="text" class="form-control" id="kr" name="kr" value="<?php echo $getRowkr['nama_kriteria'] ?>" disabled>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="nn">Nilai</label>
	    <div>
	    <select class="form-control" id="nn" name="nn">
		   	<option><?php echo $getRow['nilai_rangking']; ?></option>
		   	<?php
			while ($row = mysqli_fetch_assoc($readna)){
			extract($row);
			echo "<option value='{$jum_nilai_alternatif}'>{$ket_nilai_alternatif}</option>";
			}
			?>
		</select>
		</div>
	  </div>
	  <div class="form-group">
	    <div>
	      <button type="submit" class="btn btn-primary">Ubah</button>
	      <button type="button" onclick="location.href='rangking.php'" class="btn btn-success">Kembali</button>
	    </div>
	  </div>
	</form>
</div>