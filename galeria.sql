-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2017 at 10:40 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`id`, `nombre`, `comentario`, `fecha`) VALUES
(13, 'Not me', '', '1489441350'),
(14, 'Tulipanes', '', '1489419299'),
(15, 'Desierto', '', '1489419312'),
(16, 'Hortensias', '', '1489419317'),
(17, 'Koala2', '', '1489419333'),
(18, 'Desierto2', '', '1489419339'),
(20, 'Faro2', '', '1489419355'),
(21, 'Crisantemo', '', '1489419367'),
(22, 'Hortensias', '', '1489419373'),
(23, 'Desierto3', '', '1489419380'),
(25, 'Tulips', '', '1489419400'),
(28, 'Pinguinos', '', '1489441383'),
(29, 'Pinguinos', '', '1489441384'),
(30, 'Pinguinos', '', '1489441385'),
(31, 'Pinguinos', '', '1489441386'),
(32, 'Pinguinos', '', '1489441387'),
(33, 'Pinguinos', '', '1489441387'),
(34, 'Pinguinos', '', '1489441387'),
(35, 'Pinguinos', '', '1489441387'),
(36, 'Pinguinos', '', '1489441387'),
(37, 'Pinguinos', '', '1489441388'),
(38, 'Pinguinos', '', '1489441388'),
(39, 'Pinguinos', '', '1489441388'),
(40, 'Pinguinos', '', '1489441388'),
(41, 'Pinguinos', '', '1489441388'),
(42, 'Pinguinos', '', '1489441389'),
(43, 'Pinguinos', '', '1489441389'),
(44, 'Pinguinos', '', '1489441389'),
(45, 'Pinguinos', '', '1489441389'),
(46, 'Pinguinos', '', '1489441390'),
(47, 'Tulipanes', '', '1489441934'),
(48, 'Victor approved', '', '1489442137');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `clave`) VALUES
(1, 'Zoilo', 'zoiloismaelreyes1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
