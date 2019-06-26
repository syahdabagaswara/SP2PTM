-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 20 Des 2018 pada 16.10
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
  `diagnosis` varchar(255) NOT NULL,
  `visitdate` date NOT NULL,
  `registeredplace` varchar(255) NOT NULL,
  `servicerecord` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `diagnosis` varchar(255) NOT NULL,
  `visitdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`id`, `user_id`, `nik`, `name`, `birthdate`, `diagnosis`, `visitdate`, `gender`, `status`, `age`) VALUES
(1, 3, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 'Diabetes Mellitus', '2018-12-03', 'Laki-Laki', 'Baru', '22'),
(2, 3, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 'Diabetes Mellitus', '2018-12-08', 'Laki-Laki', 'Lama', '22'),
(3, 4, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 'Diabetes Mellitus', '2018-12-05', 'Laki-Laki', 'Lama', '22'),
(4, 4, '3506252006960001', 'Syahda Bagaswara', '1996-06-20', 'Diabetes Mellitus', '2018-12-01', 'Laki-Laki', 'Baru', '22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
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
(1, 2, NULL, 'PTMDK20018', '2018-12-01', '2019-01-01', '0000-00-00', '2019-01-05', 'Proses'),
(2, 2, 1, 'PTMDK21218', '2018-12-01', '2019-01-01', '0000-00-00', '2019-01-05', 'Proses'),
(3, 3, 2, 'PTMPS21218', '2018-12-01', '2019-01-01', '0000-00-00', '2019-01-05', 'Proses'),
(4, 5, 2, 'PTMPS21218', '2018-12-01', '2019-01-01', '0000-00-00', '2019-01-05', 'Proses'),
(5, 2, 1, 'PTMDK21118', '2018-11-01', '2018-12-01', '0000-00-00', '2018-12-05', 'Proses'),
(6, 3, 5, 'PTMPS21118', '2018-11-01', '2018-12-01', '0000-00-00', '2018-12-05', 'Proses'),
(7, 5, 5, 'PTMPS21118', '2018-11-01', '2018-12-01', '0000-00-00', '2018-12-05', 'Proses');

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
(4, 'Posbindu');

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
  `person` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role_id`, `child_id`, `name`, `username`, `password`, `email`, `area`, `phonenumber`, `address`, `person`) VALUES
(1, 1, 1, 'Dinas Kesehatan Sleman', 'SuperAdmin', '1234', 'DinasKesehatanSleman@gmail.com', 'yogyakrata', '081313059000', 'Sleman', 'Syahda Bagaswara'),
(2, 2, 1, 'Dinas Kesehatan Sleman', 'Admin', '12345', 'kalasan@gmail.com', 'Sleman', '08123456789', 'Sleman', 'Fitra Arie Budiawan'),
(3, 3, 2, 'Puskesmas Kalasan', 'PuskesmasKalasan', '1234', 'BagusAfanHerlambang@gmail.com', 'Kalasan', '081249112244', 'jakal', 'Afan Bagus Herlambang'),
(4, 4, 3, 'Posbindu Kalasan', 'Poskal', '1234', 'Yogaagungkurnia@gmail.com', 'Kalasan', '081313059000', 'jakal', 'Yoga Agung Kurina'),
(5, 3, 2, 'Puskesmas Berbah', 'berbah', '1234', 'berbah@gmail.com', 'Berbah', '081249112244', 'berbah', 'Syahda Bagaswara'),
(6, 4, 5, 'a', 'A', '1234', 'kaustubh.agrawal2012@gmail.com', 'Berbah', '081', 'a', 'a'),
(7, 4, 5, 'b', 'b', 'bbbb', 'syahdabagaswara@gmail.com', 'Berbah', '0987', 'b', 'b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datareport`
--
ALTER TABLE `datareport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datareport_ibfk_1` (`report_id`);

--
-- Indeks untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_ibfk_1` (`user_id`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_ibfk_1` (`id_user`),
  ADD KEY `report_ibfk_2` (`child_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datareport`
--
ALTER TABLE `datareport`
  ADD CONSTRAINT `datareport_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `report` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
