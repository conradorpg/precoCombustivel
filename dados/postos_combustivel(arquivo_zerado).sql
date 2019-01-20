-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Jan-2019 às 20:26
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `precocombustivel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postos_combustivel`
--

DROP TABLE IF EXISTS `postos_combustivel`;
CREATE TABLE IF NOT EXISTS `postos_combustivel` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `fornecedor` varchar(100) NOT NULL,
  `bandeira` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `diesel` decimal(15,0) DEFAULT NULL,
  `diesels10` decimal(15,0) DEFAULT NULL,
  `diesels10adt` decimal(15,0) DEFAULT NULL,
  `etanol` decimal(15,0) DEFAULT NULL,
  `etanoladt` decimal(15,0) DEFAULT NULL,
  `gasolina` decimal(15,0) DEFAULT NULL,
  `gasolinaadt` decimal(15,0) DEFAULT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
