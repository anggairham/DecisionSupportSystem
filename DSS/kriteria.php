<?php
include "header.php";
include "includes/config.php";
$query = mysqli_query($koneksi,"SELECT * FROM kriteria");
?>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Kriteria</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br>
	<table id="tabeldata" width="100%" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kriteria</th>
				<th>Tipe Kriteria</th>
				<th>Bobot Kriteria</th>
				<th>Aksi</th>
			</tr>	
		</thead>

<tbody>
<?php
$no=1;
while ($row = mysqli_fetch_array($query)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama_kriteria'] ?></td>
                <td><?php echo $row['tipe_kriteria'] ?></td>
                 <td><?php echo $row['bobot_kriteria'] ?></td>
                <td class="text-center">
					<a href="edit-kriteria.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
					<a href="hapus-kriteria.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
			    </td>
            </tr>
<?php
}
?>
</tbody>

		<tfoot>
			<tr>
				<th>No</th>
				<th>Nama Kriteria</th>
				<th>Tipe Kriteria</th>
				<th>Bobot Kriteria</th>
				<th>Aksi</th>
			</tr>	
		</tfoot>
	</table>
</div>

<?php  
include "footer.php";
?>