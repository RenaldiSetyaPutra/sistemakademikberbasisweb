<?php
include 'koneksi.php';
$sql = "UPDATE kelas_siswa SET
		nis='".$_POST['nis']."',
		nama_kelas='".$_POST['nama_kelas']."',
		WHERE nis = '".$_POST['nis2']."' ";
$query = mysqli_query($koneksi, $sql);
if(mysqli_affected_rows($koneksi) >0) {
	echo 'data berhasil diubah';
	}
else {
	echo 'data gagal diubah';
	}