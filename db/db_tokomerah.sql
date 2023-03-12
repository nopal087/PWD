-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 01:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokomerah`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderan`
--

INSERT INTO `orderan` (`id`, `nama`, `kontak`, `alamat`) VALUES
(1, 'Muhammad Naufal Faruq', '08651111', 'pekalongan'),
(2, 'nopal faruq', '085712666154', 'Pekalongan raya'),
(3, 'Muhammad Naufal Faruq', '085712666154', 'Tunjungsari Kec siwalan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Muhammad Naufal Faruq', 'admin', '21232f297a57a5a743894a0e4a801fc3', '085712666154', 'naufalfaruq285@gmail.com', 'Ds.Tunjungsari kec siwalan, Kab.Pekalongan, Jawa tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(8, 'Laptop Asus'),
(9, 'Laptop Acer'),
(10, 'PC Gaming'),
(11, 'Mouse'),
(12, 'Keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(7, 8, 'Asus 101', 5000000, '<p>Spesifikasi: Processor: Intel&reg; Core&trade; i3-1005G1 Processor 1.2 GHz (4M Cache, up to 3.4 GHz, 2 cores) Memory: 4GB DDR4 on board Storage: 512GB M.2 NVMe</p>\r\n', 'produk1640318215.jpg', 1, '2021-12-24 03:56:55'),
(14, 11, 'Mouse gaming 101', 500000, '<p>SPESIFIKASI FISIK Tinggi: 116,6 mm Lebar: 62,15 mm Tebal: 38,2 mm Berat: 85 g (hanya mouse) Panjang Kabel: 2,1 m</p>\r\n', 'produk1640318942.jpeg', 1, '2021-12-24 04:09:02'),
(15, 11, 'Mouse gaming 102', 700000, '<p>&nbsp;</p>\r\n\r\n<p>PERSYARATAN Windows&reg; 7 atau versi terbaru macOS 10.10 atau versi terbaru Chrome OSTM Port USB</p>\r\n', 'produk1640318981.jpeg', 1, '2021-12-24 04:09:41'),
(17, 11, 'Mouse gaming 104', 250000, '<p>Optimalkan waktu bermainmu dengan 102 gaming mouse yang dilengkapi dengan teknologi LIGHTSYNC, sensor kelas gaming, dan desain klasik 6 tombol. Ceriakan game-mu &hellip; dan mejamu.</p>\r\n', 'produk1640319066.jpeg', 1, '2021-12-24 04:11:06'),
(18, 8, 'Asus Bagus', 12000000, '<p>Spesifikasi :</p>\r\n\r\n<p>Intel core i5 10100f<br />\r\nssd 512 gb</p>\r\n', 'produk1640327796.jpg', 1, '2021-12-24 06:36:36'),
(19, 8, 'Asus keren', 11000000, '<p>Spesifikasi :</p>\r\n\r\n<p>Intel core i5 10100f<br />\r\nssd 512 gb<br />\r\nram 8 gb</p>\r\n', 'produk1640327839.jpg', 1, '2021-12-24 06:37:19'),
(20, 8, 'Asus Mantap', 10000000, '<p>Spesifikasi:<br />\r\nintel Core i770000k<br />\r\nRam 4 gb<br />\r\nssd 120 gb</p>\r\n', 'produk1640327968.jpg', 1, '2021-12-24 06:39:28'),
(21, 8, 'Asus Baru', 9000000, '<p>Spesifikasi:<br />\r\nintel Core i3 81000k<br />\r\nRam 4 gb<br />\r\nssd 120 gb</p>\r\n', 'produk1640328046.jpg', 1, '2021-12-24 06:40:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
