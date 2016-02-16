-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-Fev-2016 às 00:21
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contratos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `CODIGO` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `FONE` varchar(11) DEFAULT NULL,
  `CPF` varchar(100) DEFAULT NULL,
  `CIDADE` varchar(100) NOT NULL,
  `ESTADO` varchar(100) NOT NULL,
  `NASCIMENTO` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=441 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`CODIGO`, `NOME`, `FONE`, `CPF`, `CIDADE`, `ESTADO`, `NASCIMENTO`) VALUES
(440, 'NOME 3', '(234) 234-2', '42534534', 'asdasd', 'as', '2016-02-01'),
(439, 'NOME 2', '314', '234234', 'sdf', 'sdf', '2016-02-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `CODCONTRATO` int(11) NOT NULL,
  `CODCLIENTE` int(10) DEFAULT NULL,
  `VALORCONTRATO` decimal(10,2) NOT NULL,
  `DATACONTRATO` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contratos`
--

INSERT INTO `contratos` (`CODCONTRATO`, `CODCLIENTE`, `VALORCONTRATO`, `DATACONTRATO`) VALUES
(10, 438, '55.00', '0000-00-00'),
(9, 438, '3333.00', '0000-00-00'),
(8, 439, '444.00', '0000-00-00'),
(12, 438, '45555.00', '2016 - 02 - 17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CODIGO`);

--
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`CODCONTRATO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `CODIGO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=441;
--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `CODCONTRATO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
