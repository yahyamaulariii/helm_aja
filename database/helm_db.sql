-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 06:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `image`, `deskripsi`, `ukuran`, `harga_produk`, `stok`) VALUES
(1, 'KBC_Laguna', '1.jpeg', 'Tahan lama, lapis baja', 'L, M, S', 750000, 4),
(2, 'KBC Euro', '2.jpeg', 'Tahan lama, lapis aluminium', 'S, M, L. XL', 650000, 5),
(3, 'KYT Vendetta', '3.jpeg', 'Tahan lama, lapis emas', 'XL', 800000, 5),
(4, 'KBC Laguna', '1.jpeg', 'Tahan lama, lapis legit', 'XXL', 750000, 5),
(5, 'KBC Euro', '2.jpeg', 'Tahan lama, lapis perak', 'XL, L', 650000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelfon` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `notelfon`, `alamat`) VALUES
(1, 'yahya maulana', 'yahya', 'yahya', 'yahyamaulanajuliansyah@gmail.com', '081807372025', 'citayem'),
(2, 'Hafiz', 'hafiz', '1234', 'hafizdiyyaa@gmail.com', '081111111', 'Gg. bulak barat'),
(3, 'Nadia Rachma', 'nadia', '1234', 'nadia@gmail.com', '081929239239', 'Gg. Jakarti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
