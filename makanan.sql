-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 01:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_nasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(5) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` enum('Pcs','Box') NOT NULL,
  `kategori` enum('Makanan','Minuman') NOT NULL,
  `url_gambar` varchar(500) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga`, `satuan`, `kategori`, `url_gambar`, `stok`) VALUES
(1, 'Es Teh', 4000, 'Pcs', 'Minuman', 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/9/17/4075019/4075019_bfda03c1-8939-430f-b882-e1746675cbc5_691_691.jpg', 4),
(2, 'Bakso', 8000, 'Pcs', 'Makanan', 'https://i1.wp.com/resepkoki.id/wp-content/uploads/2017/05/Resep-Bakso-malang.jpg?fit=2662%2C1942&ssl=1', 20),
(3, 'Nasi Goreng', 12000, 'Pcs', 'Makanan', 'https://cdns.klimg.com/merdeka.com/i/w/news/2017/09/06/883756/content_images/670x335/20191201201534-1-ilustrasi-nasi-goreng-004-tantri-setyorini.jpg', 20),
(4, 'Mie', 5000, 'Pcs', 'Makanan', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSyo1SoZfkBF6cjz95yzMpEwFLMgodalyvFjqoMjIeK1JAeQMEB&usqp=CAU', 3),
(5, 'Es cendol', 5000, 'Pcs', 'Minuman', 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/7/23/3725161/3725161_2a2dd77c-e517-4eff-9ca2-6426665a4d53_1080_1071.jpg', 11),
(6, 'kaido', 12000, 'Pcs', 'Minuman', 'https://d1nabgopwop1kh.cloudfront.net/v2/culinary-asset/guys1L+Yyer9kzI3sp/pb0CG1j2bhflZGFUZOoIf1YMmzMd/HaD8U/YhZI+EvjMM+6RmcSU0aUVNGx3wRqN5pBLGBOk639fAet4tgiIy9L/noVlWAXxN9yLxZAaY74lUZjhXtF9ekmiReKTsIZnlAD7fR+aYdjiNgpWq5fncRcvBnhWEf+vdcN4jqPAU2RaQszQezUrWk33Udxrbs9L7qg==', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
