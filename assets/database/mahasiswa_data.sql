-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 06:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nip`, `nama`, `tgl_lahir`, `alamat`, `email`, `foto`) VALUES
(1, '198743473849343', 'Imam Asrowadi', '2016-03-13', 'Bataranila', 'imam@gmail.com', 'LOGO5.png'),
(2, '2147483647', 'Septafiansyah', '2019-12-08', 'Bandar Lampung', 'sefta@gmail.com', 'LOGO3.png'),
(5, '432434343', 'ade setiawan', '2020-03-01', 'Bandar Lampung', 'afdsaf@gmail.com', 'LOGO6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `kodematkul` varchar(10) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `sks` varchar(5) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `nmdosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `kodematkul`, `matkul`, `sks`, `durasi`, `nmdosen`) VALUES
(1, 'PMI1441', 'Pemrograman Basis Data', '4', '240 Menit', 'Ade Setiawan, S.Kom'),
(2, 'PMI1442', 'Pemrograman Web Framework', '4', '320 Menit', 'Anggi Lestari, S.E'),
(3, 'PMI1443', 'Kecakapan Antar Personal', '2', '120 Menit', 'Ahmad Nur, S.Kom.,M.Kom'),
(4, 'PMI1444', 'Teknik Penulisan Karya Ilmiah', '2', '120 Menit', 'Andi Sarana, S.Pd'),
(5, 'PMI1445', 'Rancang Bangun Jaringan', '4', '420 Menit', 'Sefta, S.Kom.,M.Kom'),
(6, 'PMI1446', 'Pemrograman SQL Lanjutan', '4', '320 Menit', 'Imam, S.Kom.,M.Cs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `thn_berdiri` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `nama`, `thn_berdiri`, `alamat`) VALUES
(1, 'Ekonomi dan Bisnis', '2004', 'Jl. Soekarno-Hatta, No.10, Politeknik Negeri Lampung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `telp`, `foto`) VALUES
(1, 'Ade Setiawan', 18753002, '2000-04-21', 'Manajemen Informatika', 'Sukarandeg', 'ad0675@gmail.com', '012xxxx', 'LOGO9.png'),
(12, 'Anggi Lestari', 18753050, '2020-03-01', 'Manajemen Informatika', 'Bandar Lampung', 'attt00@gmail.com', '0893xxxx', 'LOGO8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
