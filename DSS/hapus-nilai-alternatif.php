<?php  
include "includes/config.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR : MISSING ID. ');
$delete = mysqli_query($koneksi,"DELETE FROM nilai_alternatif 
								WHERE id_nilai_alternatif='$id'");
if ($delete) {
	echo "<script>location.href='nilai.php#na';</script>";
}else {
	echo "<script>alert('Gagal Hapus Data');location.href='nilai.php#na';</script>";
}
?>