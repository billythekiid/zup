-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Set-2015 às 00:35
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE IF NOT EXISTS `tb_endereco` (
`id` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `bairro` varchar(120) NOT NULL,
  `cidade` varchar(120) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`id`, `cep`, `endereco`, `bairro`, `cidade`, `estado`) VALUES
(6, '16048435', 'Av. Joaquim Pompeu de Toledo, 995', 'Jardim Maria Lucia', 'Araçatuba', 'Sã');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
