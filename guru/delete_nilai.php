<?php
include 'koneksi.php';
$sql = "DELETE FROM nilai WHERE nis ='".$_GET['nis']."' ";
$exec = mysqli_query($koneksi, $sql);
if(mysqli_affected_rows($koneksi) >0) {
	header('location:select_nilai.php');
	}
else {
	echo 'data gagal diubah';
	}
	
?>