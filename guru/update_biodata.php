<?php
include 'koneksi.php';
$sql = "UPDATE guru SET
		nama_guru='".$_POST['nama_guru']."',
		jenis_kelamin='".$_POST['jenis_kelamin']."',
		tempat_lahir='".$_POST['tempat_lahir']."',
		tanggal_lahir='".$_POST['tanggal_lahir']."',
		agama='".$_POST['agama']."',
		alamat='".$_POST['alamat']."',
		no_telp='".$_POST['no_telp']."',
		email='".$_POST['email']."',
		status_aktif='".$_POST['status_aktif']."' WHERE nip = '".$_POST['nip']."' ";
		
		
$query = mysqli_query($koneksi, $sql);
if(mysqli_affected_rows($koneksi) >0) {
	header("location:select_biodata.php");
	}
else {
	echo 'data gagal diubah';
	}