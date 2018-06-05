<?php
include "includes/config.php";

$ia = isset($_GET['ia']) ? $_GET['ia'] : die('ERROR: missing ID.');
$ik = isset($_GET['ik']) ? $_GET['ik'] : die('ERROR: missing ID.');
$delete = mysqli_query($koneksi,"DELETE FROM rangking 
								WHERE id_alternatif='$ia' and id_kriteria='$ik'");
	
if ($delete) {
	echo "<script>location.href='rangking.php';</script>";
}else {
	echo "<script>alert('Gagal Hapus Data');location.href='rangking.php';</script>";
}
?>
