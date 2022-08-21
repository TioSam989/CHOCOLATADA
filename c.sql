-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 06:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_user`, `id_items`) VALUES
(10, 16, 1),
(26, 16, 1),
(27, 16, 1),
(29, 16, 2),
(31, 16, 1),
(32, 16, 1),
(33, 16, 1),
(34, 16, 1),
(35, 16, 1),
(36, 16, 2),
(37, 16, 2),
(38, 16, 2),
(40, 16, 3),
(41, 16, 3),
(44, 16, 2),
(45, 16, 2),
(46, 16, 3),
(50, 16, 3),
(51, 16, 3),
(52, 16, 3),
(53, 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_items` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` int(2) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `cod_prod` int(11) NOT NULL,
  `localDirectory` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_items`, `nome`, `categoria`, `descricao`, `cod_prod`, `localDirectory`, `price`) VALUES
(1, 'Box Chocolate', 1, 'Esta box categoria 1, perfeita para oferecer a um amigo , traz consigo chocolate branco e chocolate com amêndoa.', 201, '201.jpg', 8),
(2, 'Box´s chocolates', 2, 'Esta box categoria 2, perfeita para oferecer ao seu companheiro, traz consigo chocolate negro com licor.', 202, '202.jpg', 10),
(3, 'Box´s chocolates', 3, 'Esta box categoria 3, perfeita em todos os momentos, traz consigo todos os tipos de chocolates que possa imaginar.', 203, '203.jpg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_user` int(11) NOT NULL,
  `Nome` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Telemovel` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id_user`, `Nome`, `Email`, `Telemovel`, `Username`, `Password`, `tipo`) VALUES
(4, 'Cezar', 'ceze@mail.com', '96969696', 'Ceze123', 'e7d80ffeefa212b7c5c55700e4f7193e', 1),
(6, 'ana', 'ana@mail.com', '989393', 'dwaindij2', 'b9ce3d51e224e150b82b8fdd2c914b16', 2),
(7, 'Wdasd', 'dwada', '232', 'dawd', '1cdbc566ab18141dbf2586d9707cdfdc', 1),
(8, 'Test', 'test@mail.com', '982982928', 'Username123', '8e1ceb663269dbdef31fd7d4c4be6c64', 3),
(10, 'ultimo', 'ultimo@ultimo.com', '45789', 'Ultimo123', '8e1ceb663269dbdef31fd7d4c4be6c64', 2),
(11, 'Dadadada', 'Davi@gmail.com', '98298298289', 'Davi123', '8e1ceb663269dbdef31fd7d4c4be6c64', 2),
(12, 'ana', 'anadioniio6@gmail.com', '932291258', 'hanna.D1', '1e78e64936e69245d393d1b252052f4d', 2),
(13, 'bia', 'anadionisio6@gmail.com', '932291258', 'Bia.12', '6910918a6270b4a12cb81a20bb6bdf6f', 2),
(14, 'hana', 'ana1@gmail.com', '923456789', 'Hanna.23', 'ed1e676f846d2265e07f159981567c69', 2),
(15, 'user123', 'user@user.com', '936350279', 'userBruh', '017004faf00bb5f3c7138f1d6fc771fd', 1),
(16, 'Davi Neves da Costa Santos', 'tio.sam989@hotmail.com', '936350279', 'TioSam190', '357a1eeeacaf55692826bf3de6fd08d4', 1),
(17, 'Xpto7723', 'Xpto7723@xpto.com', '473118872', '', 'b6f3f46bdc2f271b3d9199fa5b0cff8b', 2),
(18, 'Xpto3168', 'Xpto3168@xpto.com', '704685118', '', '7fcfccb626c80f0a321c53909975773b', 2),
(19, 'Xpto3965', 'Xpto3965@xpto.com', '739123569', '', '4c5f76df80c6546e270c7f70e82bd29a', 2),
(20, 'Xpto1203', 'Xpto1203@xpto.com', '526491840', '', 'f5ef6357849f3d4c4f24aa56b5352a1f', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_items`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_items` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
