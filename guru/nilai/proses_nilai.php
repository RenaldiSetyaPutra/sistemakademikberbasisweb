<?php
	include 'koneksi.php';
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$mapel = $_POST['mapel'];
		$tugas = $_POST['tugas'];
		$absen = $_POST['absen'];
		$quiz = $_POST['attitude'];
		$uts = $_POST['uts'];
		$uas = $_POST['uas'];
	
//menghitung nilai dari yang tadi kita input
$nilai_uts   = $uts * 0.3;
$nilai_uas   = $uas * 0.35;
$nilai_quiz  = $quiz * 0.1; 
$nilai_tugas = $tugas * 0.15;
$nilai_absen = $absen * 0.1;
 

//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_uts + $nilai_uas + $nilai_quiz + $nilai_tugas + $nilai_absen;


//menampilkan grade berdasarkan hasil nilai akhir
if ($nilai_akhir>=80){
$grade = 'A';
}
elseif ($nilai_akhir>=65){
$grade = 'B';
}
elseif ($nilai_akhir>=50){
$grade = 'C';
}
elseif ($nilai_akhir>=35){
$grade = 'D';
}
else{
$grade = 'E';
}

$sql = "INSERT INTO nilai (nama_siswa, mapel, tugas, absen, attitude, uts, uas, nilai akhir, grade, nis) VALUES 
		('".$nama."','".$mapel."','".$tugas."','".$absen."','".$quiz."','".$uts."','".$uas."','".$nilai_akhir."','".$grade."','".$nis."')";
	$exec = mysqli_query($koneksi, $sql);

if($exec) {
	echo 'Data Berhasil Di Simpan';
	}
	else {
	echo 'Data Gagal Di Simpan';
	}
?>