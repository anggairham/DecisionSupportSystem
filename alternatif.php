<?php
include "header.php";
include "includes/config.php";
$query = mysqli_query($koneksi,"SELECT * FROM alternatif");
?>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Alternatif</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='tambah-alternatif.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br>
	<table id="tabeldata" width="100%" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Alternatif</th>
				<th>Hasil Perangkingan</th>
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
                <td><?php echo $row['nama_alternatif'] ?></td>
                <td><?php echo $row['hasil_alternatif'] ?></td>
                <td class="text-center">
					<a href="edit-alternatif.php?id=<?php echo $row['id_alternatif'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
					<a href="hapus-alternatif.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
			    </td>
            </tr>
<?php
}
?>
</tbody>

		<tfoot>
			<tr>
				<th>No</th>
				<th>Nama Alternatif</th>
				<th>Hasil Normalisasi Alternatif</th>
				<th>Aksi</th>
			</tr>	
		</tfoot>
	</table>
</div>

<?php  
include "footer.php";
?>