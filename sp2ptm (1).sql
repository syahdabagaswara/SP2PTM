-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 07 Feb 2019 pada 19.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp2ptm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datareport`
--

CREATE TABLE `datareport` (
  `id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `birthdate` date NOT NULL,
  `disease_id` int(11) NOT NULL,
  `visitdate` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datareport`
--

INSERT INTO `datareport` (`id`, `report_id`, `nik`, `name`, `gender`, `age`, `birthdate`, `disease_id`, `visitdate`, `status`) VALUES
(37, 4, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 10, '2018-11-15', 'Baru'),
(38, 4, '3506252006960002', 'Fitra Arie Budiawan', 'Laki-Laki', '24', '1994-04-04', 11, '2018-11-17', 'Baru'),
(39, 4, '3506252006960003', 'Sofi Mustika', 'Perempuan', '21', '1997-07-19', 12, '2018-11-18', 'Baru'),
(40, 4, '3506252006960004', 'Bagus afan Herlambang', 'Laki-Laki', '23', '1995-11-15', 13, '2018-11-18', 'Lama'),
(41, 4, '3506252006960005', 'Tamara Primaliya', 'Perempuan', '24', '1994-08-26', 14, '2018-11-24', 'Baru'),
(42, 5, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 4, '2018-11-07', 'Lama'),
(43, 5, '3506252006960002', 'Fitra Arie Budiawan', 'Laki-Laki', '22', '1996-04-04', 5, '2018-11-20', 'Baru'),
(44, 5, '3506252006960003', 'Sofi Mustika', 'Perempuan', '21', '1997-07-19', 12, '2018-11-23', 'Lama'),
(45, 5, '3506252006960004', 'Bagus afan Herlambang', 'Laki-Laki', '23', '1995-11-15', 13, '2018-11-05', 'Baru'),
(46, 5, '3506252006960005', 'Tamara Primaliya', 'Perempuan', '24', '1994-08-26', 15, '2018-11-23', 'Lama'),
(68, 3, '3506252006960005', 'Tamara Primaliya', 'Perempuan', '24', '1994-08-26', 15, '2018-11-17', 'Baru'),
(69, 3, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 4, '2018-11-02', 'Baru'),
(70, 8, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 2, '2018-12-20', 'Baru'),
(71, 8, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 5, '2018-12-26', 'Baru'),
(72, 8, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 1, '2018-12-18', 'Lama'),
(73, 8, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 1, '2018-12-06', 'Baru'),
(74, 8, '3506252006960002', 'Fitra Arie Budiawan', 'Laki-Laki', '24', '1994-04-04', 11, '2018-12-14', 'Lama'),
(75, 8, '3506252006960003', 'Sofi Mustika', 'Perempuan', '21', '1997-07-19', 13, '2018-12-16', 'Baru'),
(76, 8, '3506252006960004', 'Bagus afan Herlambang', 'Laki-Laki', '23', '1995-11-15', 14, '2018-12-16', 'Baru'),
(77, 8, '3506252006960005', 'Tamara Primaliya', 'Perempuan', '24', '1994-08-26', 15, '2018-12-15', 'Lama'),
(78, 8, '3506252006960006', 'Rizal Firmanda', 'Laki-Laki', '34', '1984-01-01', 6, '2018-12-26', 'Baru'),
(79, 8, '3506252006960007', 'Kurniawan Eko', 'Laki-Laki', '60', '1958-01-05', 7, '2018-12-15', 'Baru'),
(80, 9, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 3, '2018-12-01', 'Baru'),
(81, 9, '3506252006960001', 'Syahda Bagaswara', 'Laki-Laki', '22', '1996-06-20', 1, '2018-12-15', 'Lama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `icd_x` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disease`
--

INSERT INTO `disease` (`id`, `icd_x`, `name`) VALUES
(1, 'C 11', 'Ca Nasopharik'),
(2, 'C 34', 'Ca Paru'),
(3, 'C 50', 'Ca Payudara'),
(4, 'C 53', 'Ca Cerviks Uteri'),
(5, 'I 21 ', 'Infark Miokard akut'),
(6, 'I 50', 'Gagal Jantung'),
(7, 'I 64', 'Stroke'),
(8, 'J 44', 'Chronic Obstructive Pulmonary Disease(COPD)'),
(9, 'N 18', 'Gagal Ginjal Kronis'),
(10, 'I 20', 'Angina Pektoris'),
(11, 'M 81', 'Osteoporosi'),
(12, 'S 09', 'Trauma Kepala'),
(13, 'E66', 'Obesitas'),
(14, 'I10', 'Hipertensi'),
(15, 'E11', 'Diabetes Mellitus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patient`
--

CREATE TABLE `patient` (
  `id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `disease_id` int(11) NOT NULL,
  `visitdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`id`, `user_id`, `nik`, `name`, `birthdate`, `disease_id`, `visitdate`, `gender`, `status`, `age`) VALUES
(2, 6, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 2, '2018-12-20', 'Laki-Laki', 'Baru', '22'),
(4, 7, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 3, '2018-12-01', 'Laki-Laki', 'Lama', '22'),
(5, 7, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 4, '2018-11-07', 'Laki-Laki', 'Baru', '22'),
(6, 7, '3506252006960002', 'Fitra Arie Budiawan', '1996-04-04', 5, '2018-11-20', 'Laki-Laki', 'Baru', '22'),
(7, 7, '3506252006960003', 'Sofi Mustika', '1997-07-19', 12, '2018-11-23', 'Perempuan', 'Baru', '21'),
(8, 7, '3506252006960004', 'Bagus afan Herlambang', '1995-11-15', 13, '2018-11-05', 'Laki-Laki', 'Baru', '22'),
(9, 7, '3506252006960005', 'Tamara Primaliya', '1994-08-26', 15, '2018-11-23', 'Perempuan', 'Baru', '24'),
(10, 6, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 10, '2018-11-15', 'Laki-Laki', 'Baru', '22'),
(11, 6, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 5, '2018-12-26', 'Laki-Laki', 'Baru', '22'),
(12, 6, '3506252006960002', 'Fitra Arie Budiawan', '1994-04-04', 11, '2018-11-17', 'Laki-Laki', 'Baru', '24'),
(13, 6, '3506252006960003', 'Sofi Mustika', '1997-07-19', 12, '2018-11-18', 'Perempuan', 'Baru', '21'),
(14, 6, '3506252006960004', 'Bagus afan Herlambang', '1995-11-15', 13, '2018-11-18', 'Laki-Laki', 'Baru', '23'),
(15, 6, '3506252006960005', 'Tamara Primaliya', '1994-08-26', 14, '2018-11-24', 'Perempuan', 'Baru', '24'),
(20, 3, '3506252006960005', 'Tamara Primaliya', '1994-08-26', 15, '2018-11-17', 'Perempuan', 'Baru', '24'),
(24, 6, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 1, '2018-12-18', 'Laki-Laki', 'Lama', '22'),
(25, 6, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 1, '2018-12-06', 'Laki-Laki', 'Baru', '22'),
(27, 3, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 4, '2018-11-02', 'Laki-Laki', 'Baru', '22'),
(28, 6, '3506252006960002', 'Fitra Arie Budiawan', '1994-04-04', 11, '2018-12-14', 'Laki-Laki', 'Lama', '24'),
(29, 6, '3506252006960003', 'Sofi Mustika', '1997-07-19', 13, '2018-12-16', 'Perempuan', 'Baru', '21'),
(30, 6, '3506252006960004', 'Bagus afan Herlambang', '1995-11-15', 14, '2018-12-16', 'Laki-Laki', 'Baru', '23'),
(31, 6, '3506252006960005', 'Tamara Primaliya', '1994-08-26', 15, '2018-12-15', 'Perempuan', 'Baru', '24'),
(32, 6, '3506252006960006', 'Rizal Firmanda', '1984-01-01', 6, '2018-12-26', 'Laki-Laki', 'Baru', '34'),
(33, 6, '3506252006960007', 'Kurniawan Eko', '1958-01-05', 7, '2018-12-15', 'Laki-Laki', 'Baru', '60'),
(34, 7, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 1, '2018-12-15', 'Laki-Laki', 'Baru', '22'),
(35, 6, '3404041410600001', 'Ponem', '1960-10-14', 14, '2019-01-08', 'Perempuan', 'Baru', '58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL,
  `kode` varchar(255) NOT NULL,
  `daterelease` date NOT NULL,
  `daterequest` date NOT NULL,
  `datecomplete` date NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id`, `id_user`, `child_id`, `kode`, `daterelease`, `daterequest`, `datecomplete`, `duedate`, `status`) VALUES
(1, 2, NULL, 'PTMDK20018', '2018-11-01', '2018-12-01', '2019-01-02', '2018-12-12', 'Selesai'),
(2, 2, 1, 'PTMDK21118', '2018-11-01', '2018-12-01', '2019-01-02', '2018-12-12', 'Selesai'),
(3, 3, 2, 'PTMPS31118', '2018-11-01', '2018-12-01', '2018-12-02', '2018-12-10', 'Selesai'),
(4, 6, 3, 'PTMFK61118', '2018-11-01', '2018-12-01', '2018-12-02', '2018-12-05', 'Selesai'),
(5, 7, 3, 'PTMFK71118', '2018-11-01', '2018-12-01', '2018-12-02', '2018-12-05', 'Selesai'),
(6, 2, 1, 'PTMDK21218', '2018-12-01', '2019-01-01', '2019-01-03', '2019-01-12', 'Selesai'),
(7, 3, 6, 'PTMPS31218', '2018-12-01', '2019-01-01', '2019-01-03', '2019-01-10', 'Selesai'),
(8, 6, 7, 'PTMFK61218', '2018-12-01', '2019-01-01', '2019-01-03', '2019-01-05', 'Selesai'),
(9, 7, 7, 'PTMFK71218', '2018-12-01', '2019-01-01', '2019-01-03', '2019-01-05', 'Selesai'),
(10, 2, NULL, 'PTMDK20019', '2019-01-01', '2019-02-01', '0000-00-00', '2019-02-20', 'Proses'),
(11, 2, 10, 'PTMDK20119', '2019-01-01', '2019-02-05', '0000-00-00', '2019-02-20', 'Proses'),
(12, 3, 11, 'PTMPS30119', '2019-01-01', '2019-02-05', '0000-00-00', '2019-02-15', 'Proses'),
(13, 6, 12, 'PTMFK60119', '2019-01-01', '2019-02-05', '0000-00-00', '2019-02-10', 'Proses'),
(14, 7, 12, 'PTMFK70119', '2019-01-01', '2019-02-05', '0000-00-00', '2019-02-10', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin'),
(3, 'Puskesmas'),
(4, 'Dokter Praktik'),
(6, 'Dokter Gigi'),
(7, 'Rumah Sakit'),
(8, 'Klinik Utama '),
(9, 'Klinik Pratama'),
(10, 'Posbindu'),
(11, 'Posyandu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role_id`, `child_id`, `name`, `username`, `password`, `email`, `area`, `phonenumber`, `address`, `person`, `last_login`) VALUES
(1, 1, 1, 'Dinas Kesehatan Sleman', 'SuperAdmin', '1234', 'DinasKesehatanSleman@gmail.com', 'yogyakrata', '081313059000', 'Sleman', 'Syahda Bagaswara', '0000-00-00'),
(2, 2, 1, 'Dinas Kesehatan Sleman', 'Admin', '12345', 'kalasan@gmail.com', 'Sleman', '08123456789', 'Sleman', 'Fitra Arie Budiawan', '2019-01-10'),
(3, 3, 2, 'Puskesmas Kalasan', 'PuskesmasKalasan', '1234', '39bvisual@gmail.com', 'Kalasan', '081249112244', 'Sidokerto, Purwomartani, Kalasan, Sidokerto, Purwomartani, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', 'Sofi Mustika', '2019-01-10'),
(6, 6, 3, 'Praktek drg.Atikah Nurhesti', 'Nurhesti', '1234', 'kaustubh.agrawal2012@gmail.com', 'Kalasan', '081249112244', 'Sidokerto, Purwomartani, Kalasan, Sidokerto, Purwomartani, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', 'Atikah Nurhesti', '2019-01-09'),
(7, 6, 3, 'Praktek drg.Herwin', 'Herwin', '1234', '39bvisual@gmail.com', 'Kalasan', '081249112244', 'Sidokerto, Purwomartani, Kalasan, Sidokerto, Purwomartani, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', 'Herwin', '2019-02-04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datareport`
--
ALTER TABLE `datareport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datareport_ibfk_1` (`report_id`),
  ADD KEY `disease_id` (`disease_id`);

--
-- Indeks untuk tabel `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_ibfk_1` (`user_id`),
  ADD KEY `disease_id` (`disease_id`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_ibfk_2` (`child_id`),
  ADD KEY `report_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`role_id`),
  ADD KEY `user_ibfk_2` (`child_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datareport`
--
ALTER TABLE `datareport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datareport`
--
ALTER TABLE `datareport`
  ADD CONSTRAINT `datareport_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `report` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datareport_ibfk_2` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`id`);

--
-- Ketidakleluasaan untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`id`);

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `report` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`child_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
