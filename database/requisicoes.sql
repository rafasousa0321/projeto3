-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2020 às 18:16
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `requisicoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisicoes`
--

CREATE TABLE `requisicoes` (
  `id_requisicao` int(10) UNSIGNED NOT NULL,
  `data_requisicao` date DEFAULT NULL,
  `data_prevista_entrega` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `data_renovacao` date DEFAULT NULL,
  `entregue` tinyint(1) NOT NULL DEFAULT '0',
  `renovou` tinyint(1) NOT NULL DEFAULT '0',
  `hora_requisicao` time DEFAULT NULL,
  `hora_entrega` time DEFAULT NULL,
  `id_material` int(10) UNSIGNED NOT NULL,
  `id_tipo_equipamento` int(10) UNSIGNED NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_requisitante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `requisicoes`
--

INSERT INTO `requisicoes` (`id_requisicao`, `data_requisicao`, `data_prevista_entrega`, `data_entrega`, `data_renovacao`, `entregue`, `renovou`, `hora_requisicao`, `hora_entrega`, `id_material`, `id_tipo_equipamento`, `observacoes`, `created_at`, `updated_at`, `id_requisitante`) VALUES
(1, '2020-10-07', '2020-11-21', '2020-11-19', '2020-11-30', 0, 0, '10:17:10', '06:06:02', 1, 1, '...', NULL, NULL, 1),
(2, '2020-09-07', '2020-11-01', '2020-10-21', '2020-11-03', 0, 0, '10:07:03', '16:29:00', 2, 1, '...', NULL, NULL, 2),
(3, '2020-07-12', '2020-08-06', '2020-08-03', '2020-10-05', 0, 0, '17:07:12', '16:23:00', 1, 2, '...', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD PRIMARY KEY (`id_requisicao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requisicoes`
--
ALTER TABLE `requisicoes`
  MODIFY `id_requisicao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
