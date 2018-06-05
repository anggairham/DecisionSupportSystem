<?php  
include "includes/config.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR : MISSING ID. ');
$delete = mysqli_query($koneksi,"DELETE FROM nilai_kriteria 
								WHERE id_nilai_kriteria='$id'");
if ($delete) {
	echo "<script>location.href='nilai.php';</script>";
}else {
	echo "<script>alert('Gagal Hapus Data');location.href='nilai.php';</script>";
}
?>