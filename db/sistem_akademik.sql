-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 03:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nis` varchar(30) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` int(1) NOT NULL,
  `ket` enum('Hadir','Sakit','Alpa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(30) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_aktif` enum('Yes','No') NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_telp`, `email`, `status_aktif`) VALUES
('11221122', 'Khotimah S.Pd', 'P', 'Serang', '1980-06-01', 'Islam', 'Cilegon', '0877748232', 'khotimah121@gmail.com', 'Yes'),
('112211223', 'Eka Prasetia Bakti S.Pd', 'P', 'Serang', '1980-06-01', 'Islam', 'Cilegon', '0812232131', 'eka@gmail.com', 'Yes'),
('112211224', 'Rina Oktaviani S.Pd', 'P', 'Serang', '1980-06-01', 'Islam', 'Cilegon', '0812897322', 'rina@gmail.com', 'Yes'),
('112211225', 'Eva Safaah S.Pd', 'P', 'Serang', '1980-06-01', 'Islam', 'Cilegon', '0812632223', 'evaa@gmail.com', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(5) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `kelas` char(2) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `guru`, `kelas`, `hari`, `jam`, `mapel`) VALUES
(1, 'Eka Prasetia Bakti S.Pd', '4', 'Senin', '08.00-10.00', 'Bahasa Inggris'),
(2, 'Rina Oktaviani S.Pd', '4', 'Senin', '11.00-12.00', 'Matematika'),
(3, 'Khotimah S.Pd', '4', 'Senin', '13.00-14.00', 'IPA'),
(4, 'Eva Safaah S.Pd', '4', 'Senin', '14.00-15.00', 'Bahasa Indonesia'),
(5, 'Eva Safaah S.Pd', '5', 'Selasa', '08.00-10.00', 'Bahasa Indonesia'),
(6, 'Eka Prasetia Bakti S.Pd', '5', 'Selasa', '11.00-12.00', 'Bahasa Inggris'),
(7, 'Rina Oktaviani S.Pd', '5', 'Selasa', '13.00-14.00', 'Matematika'),
(8, 'Khotimah S.Pd', '5', 'Selasa', '14.00-15.00', 'IPA'),
(9, 'Khotimah S.Pd', '6', 'Rabu', '08.00-10.00', 'IPA'),
(10, 'Eva Safaah S.Pd', '6', 'Rabu', '11.00-12.00', 'Bahasa Indonesia'),
(11, 'Eka Prasetia Bakti S.Pd', '6', 'Rabu', '13.00-14.00', 'Bahasa Inggris'),
(12, 'Rina Oktaviani S.Pd', '6', 'Rabu', '14.00-15.00', 'Matematika'),
(13, 'Rina Oktaviani S.Pd', '4', 'Kamis', '08.00-10.00', 'Matematika'),
(14, 'Khotimah S.Pd', '4', 'Kamis', '11.00-12.00', 'IPA'),
(15, 'Eva Safaah S.Pd', '4', 'Kamis', '13.00-14.00', 'Bahasa Indonesia'),
(16, 'Eka Prasetia Bakti S.Pd', '4', 'Kamis', '14.00-15.00', 'Bahasa Inggris'),
(17, 'Eka Prasetia Bakti S.Pd', '5', 'Jum\'at', '08.00-10.00', 'Bahasa Inggris'),
(18, 'Rina Oktaviani S.Pd', '5', 'Jum\'at', '11.00-12.00', 'Matematika'),
(19, 'Khotimah S.Pd', '5', 'Jum\'at', '13.00-14.00', 'IPA'),
(20, 'Eva Safaah S.Pd', '5', 'Jum\'at', '14.00-15.00', 'Bahasa Indonesia'),
(21, 'Eva Safaah S.Pd', '6', 'Sabtu', '08.00-10.00', 'Bahasa Indonesia'),
(22, 'Eka Prasetia Bakti S.Pd', '6', 'Sabtu', '11.00-12.00', 'Bahasa Inggris'),
(23, 'Rina Oktaviani S.Pd', '6', 'Sabtu', '13.00-14.00', 'Matematika'),
(24, 'Khotimah S.Pd', '6', 'Sabtu', '14.00-15.00', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas` int(1) NOT NULL,
  `tahun_ajaran` int(4) NOT NULL,
  `walikelas` varchar(30) NOT NULL,
  `status_aktif` enum('Yes','No') NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas`, `tahun_ajaran`, `walikelas`, `status_aktif`) VALUES
(4, 2019, 'Eka Prasetia Bakti S.Pd', 'Yes'),
(5, 2019, 'Eva Safaah S.Pd', 'Yes'),
(6, 2019, 'Rina Oktaviani S.Pd', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nama_siswa` varchar(30) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `tugas` int(2) NOT NULL,
  `absen` int(2) NOT NULL,
  `attitude` int(2) NOT NULL,
  `uts` int(2) NOT NULL,
  `uas` int(2) NOT NULL,
  `nilai_akhir` int(2) NOT NULL,
  `grade` varchar(1) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `kelas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nama_siswa`, `mapel`, `tugas`, `absen`, `attitude`, `uts`, `uas`, `nilai_akhir`, `grade`, `nis`, `kelas`) VALUES
('Ahmad Bagas sapotro', 'IPA', 80, 80, 70, 75, 80, 79, 'A', '11218112', 4),
('Muhammad Adriansyah', 'Bahasa Indonesia', 85, 75, 90, 50, 60, 65, 'B', '11221122', 6),
('Nazmi Fahmi', 'Bahasa Inggris', 80, 80, 70, 80, 60, 89, 'A', '11212163', 5),
('Renaldi Setya Putra', 'Matematika', 85, 90, 70, 80, 85, 84, 'A', '11218133', 6),
('Reza Kherunnisa', 'Bahasa Inggris', 85, 90, 90, 80, 80, 83, 'A', '11259822', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `guru` varchar(30) NOT NULL,
  `mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`guru`, `mapel`) VALUES
('Eva Safaah S.Pd', 'Bahasa Indonesia'),
('Eka Prasetia Bakti S.Pd', 'Bahasa Inggris'),
('Khotimah S.Pd', 'IPA'),
('Rina Oktaviani S.Pd', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_aktif` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `kelas` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_telp`, `email`, `status_aktif`, `kelas`) VALUES
('11212163', 'Nazmi Fahmi', 'L', 'Serang', '2000-02-06', 'Islam', 'Banten', '08128722355', 'nazmi@gmail.com', 'Yes', '4'),
('11218101', 'M Wildan Rofiadz D', 'L', 'Serang', '2000-02-06', 'Islam', 'Banten', '08128222379', 'wildan@gmail.com', 'Yes', '4'),
('11218111', 'Rita Puranawati', 'P', 'Serang', '2000-02-06', 'Islam', 'Banten', '08777232321', 'ritaa@gmail.com', 'Yes', '4'),
('11218112', 'Ahmad Bagsa Saputro', 'L', 'Serang', '1996-03-09', 'Islam', 'Banten', '08128762379', 'bagass@gmail.com', 'Yes', '5'),
('11218122', 'Taufik Hidayat', 'L', 'Pandeglang', '2000-02-06', 'Islam', 'Cipeucang', '08128722876', 'taufik@gmail.com', 'Yes', '5'),
('11218123', 'Latif Faturrohman', 'L', 'Cilegon', '2000-02-06', 'Islam', 'Warnasari', '08128822379', 'latif@gmail.com', 'Yes', '6'),
('11218133', 'Renaldi Setya Putra', 'L', 'Serang', '2000-07-19', 'Islam', 'Baros', '081282414633', '19aldie@gmail.com', 'Yes', '6'),
('11218230', 'Aprilia Desi Deria', 'P', 'Serang', '2000-02-08', 'Islam', 'Banten', '08128722379', 'liaa@gmail.com', 'Yes', '6'),
('11221122', 'Muhammad Adrian Syah', 'L', 'Pandeglang', '2000-02-06', 'Islam', 'Pandeglang', '08128722374', 'adriann@gmail.com', 'Yes', '4'),
('1122892', 'Ingga Rizki Aulia', 'P', 'Serang', '1999-02-06', 'Islam', 'Banten', '08128722322', 'ingga@gmail.com', 'Yes', '5'),
('11234213', 'Cello', 'P', 'Serang', '2000-04-06', 'Islam', 'Banten', '08128721232', 'cello@gmail.com', 'Yes', '5'),
('112342132', 'Mikroboy', 'L', 'Serang', '2000-02-20', 'Islam', 'Banten', '081283231321', 'boyy@gmail.com', 'Yes', '5'),
('11240921', 'Astria Tristiana Nurhaliza', 'P', 'Serang', '2000-11-01', 'Islam', 'Banten', '08128232219', 'icaa@gmail.com', 'Yes', '6'),
('11249821', 'Ida Muzakirotul Umah', 'P', 'Serang', '1999-04-26', 'Islam', 'Banten', '08777522379', 'idaa@gmail.com', 'Yes', '6'),
('11259822', 'Reza Khaerunnisa', 'P', 'Serang', '1999-09-06', 'Islam', 'Banten', '08128724449', 'nissa@gmail.com', 'Yes', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `kode_user` varchar(30) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Admin','Guru','Siswa','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `kode_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, '11218133', 'Renaldi Setya Putra', 'aldie', 'admin', 'Admin'),
(2, '11218123', 'Latif Faturohman', 'latif', 'siswa', 'Siswa'),
(3, '11218111', 'Rita Puranawati', 'rita', 'siswa', 'Siswa'),
(4, '11221122', 'Khotimah S.Pd', 'khotimah', 'guru', 'Guru'),
(5, '112211223', 'Eka Prasetia Bakti S.Pd', 'ekaa', 'guru', 'Guru'),
(6, '112211224', 'Rina Oktaviani S.Pd', 'rinaa', 'guru', 'Guru'),
(7, '112211225', 'Eva Safaah S.Pd', 'eva', 'guru', 'Guru'),
(8, '11212163', 'Nazmi Fahmi', 'nazmi', 'siswa', 'Siswa'),
(9, '11218101', 'M Wildan Rofiadz D', 'wildan', 'siswa', 'Siswa'),
(10, '11218112', 'Ahmad Bagas Saputro', 'bagas', 'siswa', 'Siswa'),
(11, '11218122', 'Taufik Hidayat', 'taufik', 'siswa', 'Siswa'),
(12, '11218230', 'Aprilia Desi Deria', 'aprill', 'siswa', 'Siswa'),
(13, '11221122', 'Muhammad Adrian Syah', 'adrian', 'siswa', 'Siswa'),
(14, '1122892', 'Ingga Rizki Aulia', 'ingga', 'siswa', 'Siswa'),
(15, '11234213', 'Cello', 'cello', 'siswa', 'Siswa'),
(16, '112342132', 'Mikroboy', 'boyy', 'siswa', 'Siswa'),
(17, '11240921', 'Astia Tristiana Nurhaliza', 'lissa', 'siswa', 'Siswa'),
(18, '11249821', 'Ida Muzakirotul Umah', 'idaaa', 'siswa', 'Siswa'),
(19, '11259822', 'Reza Khaerunnisa', 'echaa', 'siswa', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`walikelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nama_siswa`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
