<?php
include 'koneksi.php';
$sql = "UPDATE nilai SET
		nis='".$_POST['nis']."',
		nama_siswa='".$_POST['nama_siswa']."',
		kelas='".$_POST['kelas']."',
		mapel='".$_POST['mapel']."',
		tugas='".$_POST['tugas']."',
		absen='".$_POST['absen']."',
		attitude='".$_POST['attitude']."',
		uts='".$_POST['uts']."',
		uas='".$_POST['uas']."',
		nilai_akhir='".$_POST['nilai_akhir']."',
		grade='".$_POST['grade']."'
		WHERE nis = '".$_POST['nis2']."' ";
		
$query = mysqli_query($koneksi, $sql);
if(mysqli_affected_rows($koneksi) >0) {
	header('location:select_nilai4.php');
	}
else {
	echo 'data gagal diubah';
	}
	
?>