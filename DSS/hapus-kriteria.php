<?php  
include "includes/config.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR : MISSING ID. ');
$delete = mysqli_query($koneksi,"DELETE FROM kriteria 
								WHERE id_kriteria='$id'");
if ($delete) {
	echo "<script>location.href='kriteria.php';</script>";
}else {
	echo "<script>alert('Gagal Hapus Data');location.href='kriteria.php';</script>";
}
?>