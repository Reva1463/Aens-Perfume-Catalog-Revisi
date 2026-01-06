-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2026 at 02:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aens_perfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `nama_lengkap`, `email`, `no_hp`, `alamat`, `kota`, `provinsi`, `kode_pos`, `jumlah`, `metode_pembayaran`, `total_harga`, `tanggal`) VALUES
(13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 300000, '2026-01-05 12:59:54'),
(37, 3, 'wildan', 'aftawz123@gmail.com', '082332538040', 'ketintang', 'probolinggo', 'jawa timur', '67828', 3, 'Transfer Bank', 495000, '2026-01-05 13:24:14'),
(38, 1, 'wildan', 'aftawz123@gmail.com', '082332538040', 'siwalankerto', 'probolinggo', 'jawa timur', '67828', 3, 'COD', 450000, '2026-01-05 13:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `fragrance_notes` text DEFAULT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `deskripsi`, `harga`, `gambar`, `kategori`, `stok`, `fragrance_notes`, `featured`, `created_at`) VALUES
(1, 'Blue Night', 'Kombinasi aroma fresh, aromatic, cool yang sempurna untuk menemani malam Anda. Memberikan kesan elegan dan misterius.', 150000, 'BLUE NIGHT.jpg', 'masculine', 57, 'Top: Bergamot, Lemon, Mint | Middle: Lavender, Geranium, Marine | Base: Cedar, Amber, Musk', 1, '2026-01-05 05:31:09'),
(2, 'Cool Man', 'Kombinasi Elegant & Maskulin yang mencerminkan kepribadian pria modern. Tahan lama sepanjang hari.', 175000, 'COOLMAN.jpg', 'masculine', 28, 'Top: Grapefruit, Black Pepper, Cardamom | Middle: Vetiver, Patchouli, Iris | Base: Cedarwood, Tonka Bean, Amber', 1, '2026-01-05 05:31:09'),
(3, 'Lucky', 'Kombinasi Segar, Elegant, Kalem, Cool. Aroma yang membawa keberuntungan dan kepercayaan diri dalam setiap langkah.', 165000, 'LUCKY.jpg', 'unisex', 53, 'Top: Mandarin, Hazelnut, Clover | Middle: Orange Blossom, Jasmine, Peach | Base: Sandalwood, Vanilla, Vetiver', 1, '2026-01-05 05:31:09'),
(4, 'Pinkfon', 'Kombinasi Aroma feminim dan manis yang memikat. Sempurna untuk wanita yang percaya diri dan anggun.', 155000, 'PINKFON.jpg', 'feminine', 55, 'Top: Raspberry, Pear, Pink Pepper | Middle: Rose, Peony, Magnolia | Base: Vanilla, Patchouli, Musk', 1, '2026-01-05 05:31:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
