-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 01, 2023 at 07:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_jquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`nama`, `email`, `no_hp`, `pesan`) VALUES
('MUHAMMAD NOR FANDHILAH', 'faaand17@gmail.com', '2147483647', 'testung'),
('MUHAMMAD NOR FANDHILAH', 'faaand17@gmail.com', '2147483647', 'testung'),
('kalisal agus fajar', 'kalisalagus01@gg.com', '089666936222', 'test'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(20) NOT NULL,
  `idProduct` int(20) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idCart`, `idProduct`, `qty`) VALUES
(0, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `product` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `product`, `price`, `image`) VALUES
(1, 'Digital Watches | Peanuts', 199000, 'http://localhost/ecommerce-jquery/assets/img/w1.jpg'),
(2, 'Digital Watches | Bryant', 199000, 'http://localhost/ecommerce-jquery/assets/img/w2.jpg'),
(3, 'Digital Watches | Optimus', 199000, 'http://localhost/ecommerce-jquery/assets/img/w3.jpg'),
(4, 'Digital Watches | Juicy', 199000, 'http://localhost/ecommerce-jquery/assets/img/w4.jpg'),
(5, 'Digital Watches | Deska', 199000, 'http://localhost/ecommerce-jquery/assets/img/w5.jpg'),
(6, 'Digital Watches | Pavel', 249000, 'http://localhost/ecommerce-jquery/assets/img/w6.jpg'),
(7, 'Digital Watches | Fin', 199000, 'http://localhost/ecommerce-jquery/assets/img/w7.jpg'),
(8, 'Digital Watches | Line', 199000, 'http://localhost/ecommerce-jquery/assets/img/w8.jpg'),
(9, 'Digital Watches | Clive', 249000, 'http://localhost/ecommerce-jquery/assets/img/w9.jpg'),
(10, 'Digital Watches | Theo', 249000, 'http://localhost/ecommerce-jquery/assets/img/w10.jpg'),
(11, 'Digital Watches | Joe', 249000, 'http://localhost/ecommerce-jquery/assets/img/w11.jpg'),
(12, 'Digital Watches | BWhite', 199000, 'http://localhost/ecommerce-jquery/assets/img/w12.jpg'),
(13, 'Digital Watches | Lev', 199000, 'http://localhost/ecommerce-jquery/assets/img/w13.jpg'),
(14, 'Digital Watches | Phayre', 249000, 'http://localhost/ecommerce-jquery/assets/img/w14.jpg'),
(15, 'Digital Watches | Ken', 199000, 'http://localhost/ecommerce-jquery/assets/img/w15.jpg'),
(16, 'Digital Watches | Young', 249000, 'http://localhost/ecommerce-jquery/assets/img/w16.jpg'),
(17, 'Digital Watches | Alexi', 249000, 'http://localhost/ecommerce-jquery/assets/img/w17.jpg'),
(18, 'Digital Watches | Joy Stick', 199000, 'http://localhost/ecommerce-jquery/assets/img/w18.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
