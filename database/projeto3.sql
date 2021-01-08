-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jan-2021 às 18:22
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
-- Database: `projeto3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id_material` int(10) UNSIGNED NOT NULL,
  `id_tipo_equipamento` int(10) UNSIGNED DEFAULT NULL,
  `designacao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_interno` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id_material`, `id_tipo_equipamento`, `designacao`, `codigo_interno`, `observacoes`, `created_at`, `updated_at`) VALUES
(1, 1, 'PC HP', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(2, 1, 'PC HP', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(3, 1, 'PC HP', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(4, 1, 'PC HP', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(5, 1, 'PC HP', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(6, 2, 'Sistemas de Informação de Apoio à Gestão', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(7, 2, 'Cidades e Regiões Digitais: impacte nas cidades e nas pessoas', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(8, 2, 'Informática e Competências Tecnológicas para a Sociedade da Informação', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32');

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
  `id_requisitantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `requisicoes`
--

INSERT INTO `requisicoes` (`id_requisicao`, `data_requisicao`, `data_prevista_entrega`, `data_entrega`, `data_renovacao`, `entregue`, `renovou`, `hora_requisicao`, `hora_entrega`, `id_material`, `id_tipo_equipamento`, `observacoes`, `created_at`, `updated_at`, `id_requisitantes`) VALUES
(1, '2020-09-16', '2020-12-15', '2020-11-09', '2020-12-30', 0, 0, '09:28:17', '19:26:13', 1, 1, '...', NULL, NULL, 1),
(2, '2020-11-05', '2020-11-27', '2020-11-25', '2020-11-30', 0, 0, '21:10:00', '06:11:06', 2, 1, '...', NULL, NULL, 1),
(3, '2020-09-07', '2020-10-15', '2020-11-02', '2020-11-28', 0, 0, '20:15:28', '12:21:07', 1, 2, '...', NULL, NULL, 2),
(4, '2020-12-31', '2020-12-30', '2021-01-21', NULL, 1, 1, '18:48:00', '16:48:00', 2, 2, 'qqqqqqqqqqqqqqqq', '2021-01-08 16:45:09', '2021-01-08 16:45:09', 3),
(5, '2020-12-31', '2020-12-30', '2021-01-21', NULL, 1, 1, '18:48:00', '16:48:00', 2, 2, 'qqqqqqqqqqqqqqqq', '2021-01-08 16:45:28', '2021-01-08 16:45:28', 3),
(6, '2021-01-28', '2021-01-19', '2021-01-27', NULL, 1, 0, '20:57:00', '16:00:00', 1, 2, 'rtg', '2021-01-08 16:57:56', '2021-01-08 16:57:56', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitantes`
--

CREATE TABLE `requisitantes` (
  `id_requisitante` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartao_cidadao` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tipo_requisitante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `requisitantes`
--

INSERT INTO `requisitantes` (`id_requisitante`, `nome`, `telefone`, `email`, `localidade`, `cartao_cidadao`, `id_tipo_requisitante`, `created_at`, `updated_at`) VALUES
(1, 'Aurélio Gomes', '912568745', 'aurelio1996@gmail.com', 'Porto', '34489625', '1', NULL, NULL),
(2, 'Josefa Guimarães', '935863001', 'josefagui@gmail.com', 'Lisboa', '26522103', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_equipamentos`
--

CREATE TABLE `tipos_equipamentos` (
  `id_tipo_equipamento` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_equipamentos`
--

INSERT INTO `tipos_equipamentos` (`id_tipo_equipamento`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Computadores', NULL, NULL),
(2, 'Livros', NULL, NULL),
(3, 'Calculadoras', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_requisitantes`
--

CREATE TABLE `tipos_requisitantes` (
  `id_tipo_requisitante` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_requisitantes`
--

INSERT INTO `tipos_requisitantes` (`id_tipo_requisitante`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Auxiliares', NULL, NULL),
(2, 'Professores', NULL, NULL),
(3, 'Alunos', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD PRIMARY KEY (`id_requisicao`);

--
-- Indexes for table `requisitantes`
--
ALTER TABLE `requisitantes`
  ADD PRIMARY KEY (`id_requisitante`);

--
-- Indexes for table `tipos_equipamentos`
--
ALTER TABLE `tipos_equipamentos`
  ADD PRIMARY KEY (`id_tipo_equipamento`);

--
-- Indexes for table `tipos_requisitantes`
--
ALTER TABLE `tipos_requisitantes`
  ADD PRIMARY KEY (`id_tipo_requisitante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id_material` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requisicoes`
--
ALTER TABLE `requisicoes`
  MODIFY `id_requisicao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requisitantes`
--
ALTER TABLE `requisitantes`
  MODIFY `id_requisitante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipos_requisitantes`
--
ALTER TABLE `tipos_requisitantes`
  MODIFY `id_tipo_requisitante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
