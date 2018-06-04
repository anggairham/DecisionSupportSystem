<?php  
include "includes/config.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR : MISSING ID. ');
$delete = mysqli_query($koneksi,"DELETE FROM alternatif 
								WHERE id_alternatif='$id'");
if ($delete) {
	echo "<script>location.href='alternatif.php';</script>";
}else {
	echo "<script>alert('Gagal Hapus Data');location.href='alternatif.php';</script>";
}
?>