<?php
					include 'koneksi.php';
					$query = "SELECT nis, nama_siswa, kelas, mapel, tugas, absen, attitude, uts, uas, nilai_akhir, grade FROM nilai";
					$exec = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
					
					echo'
					<table bgcolor="#454545" width="1000" border="1">
							<tr>
								<th widht="100">NIS</th>
								<th widht="150">Nama Siswa</th>
								<th widht="100">Kelas</th>
								<th widht="100">Pelajaran</th>
								<th widht="100">Tugas</th>
								<th widht="100">Absen</th>
								<th widht="100">Attitude</th>
								<th widht="100">UTS</th>
								<th widht="100">UAS</th>
								<th widht="100">Nilai Akhir</th>
								<th widht="100">Grade</th>
							  </tr>
							 
					</table>';
					while($data = mysqli_fetch_array($exec)){
						echo '
						<table bgcolor="#454545" width="1000" border="1">
							  <tr>
								<td widht="100">'.$data['nis'].'</td>
								<td widht="100">'.$data['nama_siswa'].'</td>
								<td widht="100">'.$data['kelas'].'</td>
								<td widht="100">'.$data['mapel'].'</td>
								<td widht="100">'.$data['tugas'].'</td>
								<td widht="100">'.$data['absen'].'</td>
								<td widht="100">'.$data['attitude'].'</td>
								<td widht="100">'.$data['uts'].'</td>
								<td widht="100">'.$data['uas'].'</td>
								<td widht="100">'.$data['nilai_akhir'].'</td>
								<td widht="100">'.$data['grade'].'</td>
								<td><a href="form_update_nilai.php"?nis='.$data['nis'].'"><button>Edit</button></a></td>
								<td><a href="#"><button>Del</button></a></td>
							  </tr>
					</table>';
					}
					echo '<a href="form_nilai.php"><button>Tambah</button></a></td>'
				?>