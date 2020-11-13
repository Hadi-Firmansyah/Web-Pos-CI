-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 08:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujilevel_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_order`
--

CREATE TABLE `tb_detail_order` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_food`
--

CREATE TABLE `tb_food` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `category` enum('Food','Drink') NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_food`
--

INSERT INTO `tb_food` (`id`, `name`, `category`, `price`, `stock`) VALUES
(1, 'Pizza', 'Food', 45000, 30),
(2, 'Burger King', 'Food', 25000, 5),
(6, 'Jelly Potter', 'Drink', 15000, 10),
(7, 'Risol', 'Food', 1000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Waiter'),
(3, 'Cashier'),
(4, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `food` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `category` enum('Food','Drink') NOT NULL,
  `quantity` int(11) NOT NULL,
  `pay` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `date`, `id_user`, `id_food`, `food`, `price`, `category`, `quantity`, `pay`) VALUES
(2, '2020-09-17', 3, 1, 'Pizza', 45000, 'Food', 1, 'No');

--
-- Triggers `tb_order`
--
DELIMITER $$
CREATE TRIGGER `stock` AFTER INSERT ON `tb_order` FOR EACH ROW BEGIN
UPDATE tb_food SET
stock = stock - NEW.quantity
WHERE id = NEW.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `food` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `change` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaction`
--

INSERT INTO `tb_transaction` (`id`, `date`, `id_user`, `id_order`, `id_food`, `food`, `price`, `quantity`, `cost`, `money`, `change`) VALUES
(5, '2020-09-17', 3, 2, 1, 'Pizza', 45000, 5, 225000, 225000, 0),
(6, '2020-09-21', 3, 2, 1, 'Pizza', 45000, 1, 45000, 45000, 0),
(7, '2020-10-07', 3, 2, 1, 'Pizza', 45000, 1, 45000, 50000, 5000),
(8, '2020-10-12', 3, 2, 1, 'Pizza', 45000, 1, 45000, 50000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_level` int(11) NOT NULL,
  `status_log` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `name`, `id_level`, `status_log`) VALUES
(1, '23firman_', '$2y$10$FwBN5WbaYdwJ1W4orfUHWuRLGsSuJkUy63hyMod1AVwdjw0Q3nP8C', 'Hadi Firmansyah', 1, 'Offline'),
(2, 'Julius25', '$2y$10$ElDcPboOFVvRsckIy4lnoe.ELJw5.ClbwCzto.DsVw3GLZyPB5bLa', 'Julius Ryan Listianto', 2, 'Offline'),
(3, 'Burhan12', '$2y$10$3HpqEDxIskuAPvzrSTAxRuxb8al4OWAZwmozCkH37kgfwsDaVeoKC', 'Burhanudin Dwi Saputra', 3, 'Offline'),
(4, 'Farhan.Ok', '$2y$10$RGVKIT06uRlUdUVVYza9YuhxoH2SarxZF1IMt06Fi5EhEOvTvSzQq', 'Muhammad Farhan', 4, 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_food`
--
ALTER TABLE `tb_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_food_2` (`id_food`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_food`
--
ALTER TABLE `tb_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_food`) REFERENCES `tb_food` (`id`);

--
-- Constraints for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD CONSTRAINT `tb_transaction_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
