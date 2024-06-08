-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 17.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabunganqu2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(10) NOT NULL,
  `isi_catatan` varchar(100) DEFAULT NULL,
  `tanggal_publish` date DEFAULT NULL,
  `id_pengguna` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `isi_catatan`, `tanggal_publish`, `id_pengguna`) VALUES
(1, 'Ini adalah sebuah catatan', '2023-11-28', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(2, 'Aku tolol', '2023-11-28', 'c7aee4b0-8df3-11ee-99ea-6eb235f11aad'),
(3, 'Tanggal segini bayar segini ke sini', '2023-11-28', 'c7aee4b0-8df3-11ee-99ea-6eb235f11aad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(60) DEFAULT NULL,
  `saldo` decimal(15,2) DEFAULT NULL,
  `id_pengguna` char(36) NOT NULL DEFAULT uuid(),
  `status` varchar(30) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `email`, `no_telp`, `alamat`, `nama_lengkap`, `saldo`, `id_pengguna`, `status`) VALUES
('jobano123', 'joker1234', 'narrac.003@gmail.com', '0190920092', 'bekasi', 'Jovano Dion Manuel', '0.00', '04285ac1-8933-11ee-adf4-cb1d2c861e02', 'Active'),
('admin', 'Myadmin', 'admin@gmail.com', '082327778440', 'Yogyakarta', 'Admin', '0.00', '1', ''),
('biyu123', 'manganati', 'rifqiabbiyu@gmail.com', '099180820824', 'Blitar', 'Muhammad Rifqi Abbiyu Musyaffa', '0.00', '345d9d11-8acd-11ee-9879-21c5790fe038', 'Active'),
('albarry', 'barrytolol', 'albarry@gmail.com', '0190920922', 'Kalimantan', 'Meidy Albarry', '9900000.00', '3b7db299-8ad6-11ee-9879-21c5790fe038', 'Active'),
('oscarfileas', 'inicumacoba', 'oscarfileasj@gmail.com', '082327778440', 'Klaten', 'Muhammad Oscar Fileas Jakaria', '106000.00', '5368005c-86ee-11ee-9b8b-973544b7cacd', 'Active'),
('faizzzzzzz', 'faiz1234', 'faizrani@gmail.com', '082299910012', 'Tangerang', 'Muhammad Faizrani', '0.00', '9a643e4f-8e77-11ee-9665-f53d51df6b7b', 'Active'),
('arvidion', 'koeganteng', 'yon@gmail.com', '098810011', 'Manukan', 'Arvidion Havas Oktavian', '65000.00', '9bb6b53d-8933-11ee-adf4-cb1d2c861e02', 'Active'),
('arjikus', 'miegoreng', 'arji@gmail.com', '08919819900', 'Bantul', 'Arjikusna Maharjanta', '75000.00', 'a1a726df-892d-11ee-adf4-cb1d2c861e02', 'Active'),
('aaaaa', 'akecil123', 'abesar@gmail.com', '09102902029', 'Concat', 'Abesar', '0.00', 'c7aee4b0-8df3-11ee-99ea-6eb235f11aad', 'Active'),
('nathaleon', 'jejerkusaja', 'leonhart@gmail.com', '082727879101', 'Sleman', 'Nathaleon Ranggainaya Dian Kuncoro', '14000.00', 'cd8ec47d-8a0a-11ee-baf2-a7e47fd19885', 'Active'),
('vridapuspa', 'ranicantik', 'vridapuspa@gmail.com', '08277209121', 'Prambanan', 'Vrida Pusparani', '10000.00', 'd6a997d0-8c71-11ee-8dad-4b199cc506ce', 'Active'),
('madii', 'baliisenang', 'naufalmadie@gmail.com', '0910910910', 'Madi', 'Naufal Laudza', '0.00', 'd9c7024a-893a-11ee-adf4-cb1d2c861e02', 'Active'),
('raihann', 'rehanbantul', 'littlebigpig@gmail.com', '08299019019', 'Bantul', 'Muhammad Raihan Abdullah Ridho', '0.00', 'd9d09af1-8e77-11ee-9665-f53d51df6b7b', 'Active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(10) NOT NULL,
  `nomor_rekening` varchar(7) DEFAULT NULL,
  `id_pengguna` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nomor_rekening`, `id_pengguna`) VALUES
(1, '0005399', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(2, '0000891', 'a1a726df-892d-11ee-adf4-cb1d2c861e02'),
(3, '0053460', '04285ac1-8933-11ee-adf4-cb1d2c861e02'),
(4, '0087350', '9bb6b53d-8933-11ee-adf4-cb1d2c861e02'),
(5, '0089810', 'd9c7024a-893a-11ee-adf4-cb1d2c861e02'),
(6, '0091769', 'cd8ec47d-8a0a-11ee-baf2-a7e47fd19885'),
(7, '0000628', '345d9d11-8acd-11ee-9879-21c5790fe038'),
(8, '0006090', '3b7db299-8ad6-11ee-9879-21c5790fe038'),
(9, '8080484', 'd6a997d0-8c71-11ee-8dad-4b199cc506ce'),
(10, '0046751', 'c7aee4b0-8df3-11ee-99ea-6eb235f11aad'),
(11, '0060663', '9a643e4f-8e77-11ee-9665-f53d51df6b7b'),
(12, '0002260', 'd9d09af1-8e77-11ee-9665-f53d51df6b7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `judul_transaksi` varchar(40) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `nominal` decimal(20,2) DEFAULT NULL,
  `jenis_transaksi` varchar(20) DEFAULT NULL,
  `in_out` varchar(3) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `id_pengguna` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `judul_transaksi`, `tanggal_transaksi`, `nominal`, `jenis_transaksi`, `in_out`, `keterangan`, `id_pengguna`) VALUES
(2, 'Isi Saldo', '0000-00-00', '10000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(3, 'Isi Saldo', '2023-11-22', '50000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(4, 'Isi Saldo', '2023-11-22', '50000.00', 'Tambah Saldo', 'in', '-', 'a1a726df-892d-11ee-adf4-cb1d2c861e02'),
(5, 'Kirim Uang Ke Jovano Dion Manuel', '2023-11-22', '-10000.00', 'Kirim Uang', 'out', '-', '9bb6b53d-8933-11ee-adf4-cb1d2c861e02'),
(6, 'Terima Uang Dari Arvidion Havas Oktavian', '2023-11-22', '10000.00', 'Terima Uang', 'in', '-', '04285ac1-8933-11ee-adf4-cb1d2c861e02'),
(7, 'Kirim Uang Ke Arjikusna Maharjanta', '2023-11-22', '-5000.00', 'Kirim Uang', 'out', '-', '04285ac1-8933-11ee-adf4-cb1d2c861e02'),
(8, 'Terima Uang Dari Jovano Dion Manuel', '2023-11-22', '5000.00', 'Terima Uang', 'in', '-', 'a1a726df-892d-11ee-adf4-cb1d2c861e02'),
(9, 'Kirim Uang Ke Arvidion Havas Oktavian', '2023-11-22', '-5000.00', 'Kirim Uang', 'out', '-', '04285ac1-8933-11ee-adf4-cb1d2c861e02'),
(10, 'Terima Uang Dari Jovano Dion Manuel', '2023-11-22', '5000.00', 'Terima Uang', 'in', '-', '9bb6b53d-8933-11ee-adf4-cb1d2c861e02'),
(11, 'Kirim Uang Ke Arvidion Havas Oktavian', '2023-11-22', '-10000.00', 'Kirim Uang', 'out', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(12, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-22', '10000.00', 'Terima Uang', 'in', '-', '9bb6b53d-8933-11ee-adf4-cb1d2c861e02'),
(13, 'Isi Saldo', '2023-11-23', '10000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(14, 'Kirim Uang Ke Arvidion Havas Oktavian', '2023-11-23', '-60000.00', 'Kirim Uang', 'out', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(15, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-23', '60000.00', 'Terima Uang', 'in', '-', '9bb6b53d-8933-11ee-adf4-cb1d2c861e02'),
(16, 'Isi Saldo', '2023-11-24', '20000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(17, 'Kirim Uang Ke Nathaleon Ranggainaya Dian', '2023-11-24', '-10000.00', 'Kirim Uang', 'out', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(18, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-24', '10000.00', 'Terima Uang', 'in', '-', 'cd8ec47d-8a0a-11ee-baf2-a7e47fd19885'),
(19, 'Kirim Uang Ke Nathaleon Ranggainaya Dian', '2023-11-24', '-5000.00', 'Kirim Uang', 'out', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(20, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-24', '5000.00', 'Terima Uang', 'in', '-', 'cd8ec47d-8a0a-11ee-baf2-a7e47fd19885'),
(21, 'Kirim Uang Ke Muhammad Oscar Fileas Jaka', '2023-11-24', '-1000.00', 'Kirim Uang', 'out', '-', 'cd8ec47d-8a0a-11ee-baf2-a7e47fd19885'),
(22, 'Terima Uang Dari Nathaleon Ranggainaya D', '2023-11-24', '1000.00', 'Terima Uang', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(23, 'Isi Saldo', '2023-11-24', '10000000.00', 'Tambah Saldo', 'in', '-', '3b7db299-8ad6-11ee-9879-21c5790fe038'),
(24, 'Kirim Uang Ke Muhammad Oscar Fileas Jaka', '2023-11-24', '-100000.00', 'Kirim Uang', 'out', '-', '3b7db299-8ad6-11ee-9879-21c5790fe038'),
(25, 'Terima Uang Dari Meidy Albarry', '2023-11-24', '100000.00', 'Terima Uang', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(26, 'Kirim Uang Ke Arjikusna Maharjanta', '2023-11-27', '-10000.00', 'Kirim Uang', 'out', 'Coba', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(27, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-27', '10000.00', 'Terima Uang', 'in', 'Coba', 'a1a726df-892d-11ee-adf4-cb1d2c861e02'),
(28, 'Kirim Uang Ke Arjikusna Maharjanta', '2023-11-28', '-10000.00', 'Kirim Uang', 'out', 'gatau', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(29, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-28', '10000.00', 'Terima Uang', 'in', 'gatau', 'a1a726df-892d-11ee-adf4-cb1d2c861e02'),
(30, 'Kirim Uang Ke Vrida Pusparani', '2023-11-28', '-10000.00', 'Kirim Uang', 'out', 'coba', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(31, 'Terima Uang Dari Muhammad Oscar Fileas J', '2023-11-28', '10000.00', 'Terima Uang', 'in', 'coba', 'd6a997d0-8c71-11ee-8dad-4b199cc506ce'),
(32, 'Isi Saldo', '2023-11-29', '10000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(33, 'Isi Saldo', '2023-11-29', '10000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd'),
(34, 'Isi Saldo', '2023-11-29', '10000.00', 'Tambah Saldo', 'in', '-', '5368005c-86ee-11ee-9b8b-973544b7cacd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `rekening_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
