-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 06:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ptmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `id_item` int(11) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_kustomer`
--

CREATE TABLE `m_kustomer` (
  `id_customer` int(4) NOT NULL,
  `nama_customer` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` int(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fax` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_kustomer`
--

INSERT INTO `m_kustomer` (`id_customer`, `nama_customer`, `alamat`, `telp`, `email`, `fax`) VALUES
(3, 'Sena', '@red', 192390284, '@mango', 1293),
(4, 'Yoru', 'wolfenhyse', 82984782, '@solos', 912837);

-- --------------------------------------------------------

--
-- Table structure for table `m_level`
--

CREATE TABLE `m_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_sales`
--

CREATE TABLE `m_sales` (
  `id_sales` int(4) NOT NULL,
  `id_customer` int(4) NOT NULL,
  `tgl_sales` date NOT NULL,
  `do_number` varchar(20) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_sales`
--

INSERT INTO `m_sales` (`id_sales`, `id_customer`, `tgl_sales`, `do_number`, `status`) VALUES
(3, 3, '2024-09-24', '70/DO/2025', 3),
(7, 8, '2024-09-17', '70/DO/2027', 7);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `nama_user`, `username`, `password`, `id_level`) VALUES
(4, '', 'abcd', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_belanja_barang_log`
--

CREATE TABLE `t_belanja_barang_log` (
  `id_transaction` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `remake` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_barang`
--
ALTER TABLE `m_barang`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `m_kustomer`
--
ALTER TABLE `m_kustomer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `m_level`
--
ALTER TABLE `m_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `m_sales`
--
ALTER TABLE `m_sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `t_belanja_barang_log`
--
ALTER TABLE `t_belanja_barang_log`
  ADD PRIMARY KEY (`id_transaction`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_barang`
--
ALTER TABLE `m_barang`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_kustomer`
--
ALTER TABLE `m_kustomer`
  MODIFY `id_customer` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_sales`
--
ALTER TABLE `m_sales`
  MODIFY `id_sales` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_belanja_barang_log`
--
ALTER TABLE `t_belanja_barang_log`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
