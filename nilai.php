<?php
include "header.php";
include "includes/config.php";
$querykr = mysqli_query($koneksi,"SELECT * FROM nilai_kriteria");
$queryalt = mysqli_query($koneksi,"SELECT * FROM nilai_alternatif");
?>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Nilai</h4>
		</div>
		<div class="col-md-6 text-right">
		</div>
	</div>
	<br>
	<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-dark" data-toggle="tab" href="#nk">Nilai Kriteria</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="tab" href="#na">Nilai Alternatif</a>
    </li>
  	</ul>

	<div class="tab-content">
    <div id="nk" class="container tab-pane active"><br>
    <div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Nilai Kriteria</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='tambah-nilai-kriteria.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br>
	<table id="tabeldata" width="100%" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Keterangan Nilai</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>	
		</thead>

<tbody>
<?php
$no=1;
while ($row = mysqli_fetch_array($querykr)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['ket_nilai_kriteria'] ?></td>
                <td><?php echo $row['jum_nilai_kriteria'] ?></td>
                <td class="text-center">
					<a href="edit-nilai-kriteria.php?id=<?php echo $row['id_nilai_kriteria'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
					<a href="hapus-nilai-kriteria.php?id=<?php echo $row['id_nilai_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
			    </td>
            </tr>
<?php
}
?>
</tbody>

		<tfoot>
			<tr>
				<th>No</th>
				<th>Keterangan Nilai</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>	
		</tfoot>
	</table>
	</div>

	<div id="na" class="container tab-pane fade"><br>
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Nilai Alternatif</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='tambah-nilai-alternatif.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br>
	<table id="tabelalternatif" width="100%" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Keterangan Nilai</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>	
		</thead>

<tbody>
<?php
$no=1;
while ($row = mysqli_fetch_array($queryalt)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['ket_nilai_alternatif'] ?></td>
                <td><?php echo $row['jum_nilai_alternatif'] ?></td>
                <td class="text-center">
					<a href="edit-nilai-alternatif.php?id=<?php echo $row['id_nilai_alternatif'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
					<a href="hapus-nilai-alternatif.php?id=<?php echo $row['id_nilai_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
			    </td>
            </tr>
<?php
}
?>
</tbody>

		<tfoot>
			<tr>
				<th>No</th>
				<th>Keterangan Nilai</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>	
		</tfoot>
	</table>
	</div>
	</div>
</div>

<?php  
include "footer.php";
?>