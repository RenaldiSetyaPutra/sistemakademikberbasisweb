<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan nim dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT user.kode_user, user.nama_user, user.level, guru.* FROM `user` inner join `guru` on user.kode_user = guru.nip WHERE kode_user='$nip' and password='$password'");
// menghitung jumlah data yang ditemukan
while($row = mysqli_fetch_array($data)) 
{
 $kode_user = $row['kode_user'];
 $nama_user = $row['nama_user'];
 $jenis_kelamin = $row['jenis_kelamin'];
 $tempat_lahir = $row['tempat_lahir'];
 $tanggal_lahir = $row['tanggal_lahir'];
 $agama = $row['agama'];
 $alamat = $row['alamat'];
 $no_telp = $row['no_telp'];
 $email = $row['email'];
 $level = $row['level'];
 
}
$cek = mysqli_num_rows($data);

 
if($cek > 0){
	if ($level == "Admin") {
		$_SESSION['nip'] = $nip;
		$_SESSION['status'] = "user";
		$_SESSION['kode_user'] = $kode_user;
		$_SESSION['nama_user'] = $nama_user;
		header("location:guru/index.php");
	} else if ($level == "Guru") {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "user";
		$_SESSION['kode_user'] = $kode_user;
		$_SESSION['nama_user'] = $nama_user;
		header("location:guru/index.php");
	}
}else{
	header("location:login_guru.php?pesan=gagal");
}
?>