-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2017 pada 23.32
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atk_sgb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atk`
--

CREATE TABLE `atk` (
  `atk_id` varchar(11) NOT NULL,
  `produk_id` varchar(11) NOT NULL,
  `nomor_po` varchar(11) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `atk`
--

INSERT INTO `atk` (`atk_id`, `produk_id`, `nomor_po`, `unit`, `stock`) VALUES
('002', '313123', '001', 'pcs', 29),
('ATK003', '456', '', 'pcs', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `no_barang_keluar` varchar(11) NOT NULL,
  `kd_divisi` varchar(11) NOT NULL,
  `produk_id` varchar(11) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `unit` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`no_barang_keluar`, `kd_divisi`, `produk_id`, `tgl_keluar`, `unit`, `jumlah`) VALUES
('0092', 'DVS-01', '3123', '2017-06-05', 'dus', 1),
('0093', 'DVS-01', '3123', '2017-06-01', 'rim', 9),
('12313', 'DVS-01', '3123', '2017-06-01', 'pcs', 2),
('12314', 'DVS-002', '09', '2017-06-02', 'pcs', 9),
('12315', 'DVS-01', '313123', '2017-06-01', 'pcs', 20),
('12317', 'DVS-01', '313123', '2017-06-03', 'rim', 1),
('12318', 'DVS-01', '313123', '2017-06-02', 'rim', 1),
('12319', 'DVS-01', '456', '2017-06-01', 'pcs', 1),
('NO-001', 'DVS-002', '3123', '2017-06-05', 'pcs', 1),
('NO001', 'DVS-01', '456', '1970-01-01', 'pcs', 1),
('NO002', 'DVS-01', '09', '2017-06-04', 'rim', 1),
('NO003', 'DVS-01', '09', '2017-06-22', 'pcs', 2),
('NO004', 'DVS-001', '313123', '2017-06-04', 'pcs', 1);

--
-- Trigger `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `ubah_stok` AFTER INSERT ON `barang_keluar` FOR EACH ROW UPDATE atk set stock=stock - new.jumlah
where produk_id=new.produk_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar_detail`
--

CREATE TABLE `barang_keluar_detail` (
  `no_barang_keluar_detail` varchar(11) NOT NULL,
  `no_barang_keluar` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kode_masuk` varchar(11) NOT NULL,
  `produk_id` varchar(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `unit` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`kode_masuk`, `produk_id`, `tgl_masuk`, `unit`, `jumlah`) VALUES
('02912', '001', '2017-06-05', 'pcs', 10),
('02913', '002', '2017-06-04', 'dus', 1),
('02914', '001', '1970-01-01', 'pcs', 20),
('02915', '002', '1970-01-01', 'pcs', 10),
('02916', '002', '1970-01-01', '12', 2),
('02917', '001', '1970-01-01', 'box', 1),
('02918', '002', '1970-01-01', 'pcs', 30),
('02919', '003', '2017-06-03', 'pcs', 1),
('02920', '313123', '2017-06-15', 'pcs', 10),
('02921', '42342', '2017-06-01', 'gerg', 10),
('02922', '313123', '1970-01-01', 'rim', 1),
('02923', '313123', '2017-06-01', 'rim', 3),
('02924', '313123', '2017-06-07', 'rim', 10),
('02925', '313123', '2017-06-05', 'rim', 9),
('BM026', '313123', '2017-06-14', 'pcs', 10),
('BM027', '313123', '2017-06-04', 'pcs', 10),
('BM028', '456', '2017-06-01', 'pcs', 12),
('BM029', '456', '2017-06-12', 'pcs', 10);

--
-- Trigger `barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `tambah_stok` AFTER INSERT ON `barang_masuk` FOR EACH ROW UPDATE atk set stock=stock + new.jumlah
where produk_id=new.produk_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk_detail`
--

CREATE TABLE `barang_masuk_detail` (
  `kode_masuk_detail` varchar(11) NOT NULL,
  `kode_masuk` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `kd_divisi` varchar(11) NOT NULL,
  `nama_divisi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`kd_divisi`, `nama_divisi`) VALUES
('DVS-001', 'Gudang Tekhnik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `karyawan_id` varchar(11) NOT NULL,
  `nama_karyawan` varchar(40) NOT NULL,
  `kd_divisi` varchar(11) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`karyawan_id`, `nama_karyawan`, `kd_divisi`, `telepon`, `alamat`, `email`) VALUES
('SGB-KRY001', 'Jono', 'DVS-001', '8454646', 'dadsadsada', 'anthony@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'irfanbs', 'irfanbs@gmail.com', 'bayuhu', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'gogo', 'gogo@yahoo.com', 'irfanbs', 'bayuhu'),
(3, 'tuti', 'tuti@yahoo.com', 'tutiya', 'f863f73dac5dea7f992ea467db65fb2d'),
(4, 'joko', 'joko@yahoo.com', 'joko90', '7b7f2c5e1b2aec801307fa509cdae6cf'),
(5, 'gani', 'gani80@yahoo.com', 'gani80', '116c2ff9b055f3dc3ce57f784d6ea7ce'),
(6, 'fafaf', 'bayu_rockhild@rocketmail.com', 'yuyuyu', '594f803b380a41396ed63dca39503542'),
(8, 'fdsfs', 'yuyuy@yahoo.com', 'gagaga', '594f803b380a41396ed63dca39503542');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` varchar(11) NOT NULL,
  `produk_nama` varchar(30) DEFAULT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `nama_supplier`, `unit`, `jumlah`) VALUES
('09', 'Jarum', 'Unileve Indonesia', 'pcs', 100),
('1231', 'dadaeqeq', 'Nato and Delicious', 'pcs', 30),
('313123', 'asdadas', 'SPL-INO-003', '312', 131),
('3133', 'dadada', 'Nato and Delicious', '1', 23),
('42342', '', 'sdfsdf', 'gerg', 0),
('456', 'Pensil', 'Kharisma Ananda', 'pcs', 1),
('534', 'Gunting', 'Nato and Delicious', 'pcs', 10),
('5353', 'ertete', 'ettertete', '4324', 423424),
('5435', '53534', 'Unileve Indonesia', 'aaaa', 12),
('fada', 'Clipper', 'Unileve Indonesia', '12', 20),
('PRO-OID', 'gfhfh', 'hfghf', 'hgfhf', 56);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE `purchase_order` (
  `nomor_po` varchar(11) NOT NULL,
  `supplier_id` varchar(11) NOT NULL,
  `produk_id` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_order` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `purchase_order`
--

INSERT INTO `purchase_order` (`nomor_po`, `supplier_id`, `produk_id`, `harga`, `jumlah_order`, `total`) VALUES
('001', 'SPL-INO-003', '3123', 9000, 2, 18000),
('002', 'SPL-INO-004', '313123', 300, 1, 300),
('003', 'SPL-UIN-002', '42342', 8000, 3, 24000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(11) NOT NULL,
  `nama_supplier` varchar(30) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `fax` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `nama_supplier`, `alamat`, `kota`, `telepon`, `fax`, `email`) VALUES
('SPL-IND-01', 'Indihome', 'Jakarta', 'Cengkareng', '08291293112', '08291293112', 'indihome@root.com'),
('SPL-INO-003', 'Immortal of Nato', 'Inggris', 'London', '02130231', '01293102', 'INO@factory.com'),
('SPL-INO-004', 'Kharisma Ananda', 'Jl. Diponegoro IV', NULL, '08212319012', '08212319011', 'kharisma@yahoo.com'),
('SPL-NAD-001', 'Nato and Delicious', 'Kelapa Gading', 'Jakarta', '021-88200220', '021-88200221', 'nadfactory@gmail.com'),
('SUP001', 'JayaAbadi', 'Rengasdengklok', 'Banten', '423424234', '424234242', 'jayaba#@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama_lengkap`, `email`, `username`, `password`, `status`) VALUES
('', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('ananda', 'anada@yahoo.com', 'anada', '109923be8c62150eac9dd658c50b129e', 'user'),
('Irfan Bayu Setiawan', 'bayu_rockhild@rocketmail.com', 'bayuhu', 'aaaaa', 'user'),
('Ibas Base', 'ibasabilowo@gmail.com', 'ibasbase', '4f0c6beb94590174d66943a5fdc4840c', 'user'),
('', '', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atk`
--
ALTER TABLE `atk`
  ADD PRIMARY KEY (`atk_id`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `no_po` (`nomor_po`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`no_barang_keluar`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `barang_keluar_detail`
--
ALTER TABLE `barang_keluar_detail`
  ADD PRIMARY KEY (`no_barang_keluar_detail`),
  ADD KEY `ID_ATK` (`no_barang_keluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kode_masuk`),
  ADD KEY `nomor_po` (`produk_id`);

--
-- Indexes for table `barang_masuk_detail`
--
ALTER TABLE `barang_masuk_detail`
  ADD PRIMARY KEY (`kode_masuk_detail`),
  ADD KEY `kode_masuk` (`kode_masuk`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kd_divisi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`karyawan_id`),
  ADD KEY `kd_divisi` (`kd_divisi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`nomor_po`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
