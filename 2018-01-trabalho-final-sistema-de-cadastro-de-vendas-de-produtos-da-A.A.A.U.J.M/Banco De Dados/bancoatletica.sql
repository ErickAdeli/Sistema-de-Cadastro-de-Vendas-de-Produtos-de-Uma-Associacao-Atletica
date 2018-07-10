-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jul-2018 às 02:31
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancoatletica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `associados`
--

CREATE TABLE `associados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `associados`
--

INSERT INTO `associados` (`id`, `nome`, `telefone`, `email`, `curso`, `created_at`, `updated_at`) VALUES
(1, 'Diego Martino', '986701127', 'diego@martino.com', 'Engenharia de Produção', '2018-07-06 05:24:57', '2018-07-06 05:24:57'),
(2, 'Marco Junior', '896513254', 'marco@junior.com', 'Sistemas de Informação', '2018-07-06 05:25:41', '2018-07-06 05:25:41'),
(3, 'Otavio Friggo', '987451232', 'otavio@friggo.com', 'Engenharia de Elétrica', '2018-07-06 05:26:29', '2018-07-06 05:26:29'),
(4, 'Camila Ruskel', '9755842156', 'camila@ruskel', 'Engenharia de Computação', '2018-07-06 05:27:37', '2018-07-06 05:27:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comerciantes`
--

INSERT INTO `comerciantes` (`id`, `nome`, `telefone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Eduardo', '98528236', 'carlos@eduardo.com', '2018-07-06 05:16:55', '2018-07-06 05:16:55'),
(2, 'Diego Henrique', '94423976', 'diego@henrique.com', '2018-07-06 05:17:31', '2018-07-06 05:17:31'),
(3, 'Rafael Junior', '98523271', 'rafael@junior.com', '2018-07-06 05:18:23', '2018-07-06 05:18:23'),
(4, 'Erick Adeli', '985446651', 'erick@hotmail', '2018-07-06 05:20:09', '2018-07-06 05:20:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(39, '2014_10_12_000000_create_users_table', 2),
(40, '2014_10_12_100000_create_password_resets_table', 2),
(9, '2018_06_29_001551_create_table_vendedores', 1),
(41, '2018_06_29_001737_create_table_produtos', 2),
(42, '2018_06_29_001752_create_table_vendas', 2),
(43, '2018_06_29_010150_create_table_associados', 2),
(44, '2018_06_30_043636_create_table_comerciantes', 2),
(45, '2018_07_05_232717_alter_table_users_type_field', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estoque` int(11) NOT NULL,
  `valor` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `estoque`, `valor`, `created_at`, `updated_at`) VALUES
(1, 'Camisa', 145, 25.50, '2018-07-06 05:22:22', '2018-07-06 05:28:17'),
(2, 'Boné', 200, 15.00, '2018-07-06 05:22:47', '2018-07-06 05:22:47'),
(3, 'Óculos de sol', 15, 10.25, '2018-07-06 05:23:18', '2018-07-06 05:23:18'),
(4, 'Samba Canção', 20, 20.00, '2018-07-06 05:23:52', '2018-07-06 05:28:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(2, 'Erick Adeli', 'erick@hotmail.com', '$2y$10$h0QQS9ASwFTyexaKAa9XnO8OBjKIV50O0mVFBG5BJaLBT.xl4Lyrq', 'VMdykUoYj6yUqjZjN1LwYMFLnFkYDmBlBkT34PJ5RE0uB4RbjH0rk4oLMdH4', '2018-07-06 05:11:49', '2018-07-06 05:11:49', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `qtd_vendida` int(11) NOT NULL,
  `produto_id` int(10) UNSIGNED NOT NULL,
  `comerciante_id` int(10) UNSIGNED NOT NULL,
  `associado_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `qtd_vendida`, `produto_id`, `comerciante_id`, `associado_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 2, 2, '2018-07-06 05:28:17', '2018-07-06 05:28:17'),
(2, 10, 4, 3, 1, '2018-07-06 05:28:55', '2018-07-06 05:28:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associados`
--
ALTER TABLE `associados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendas_produto_id_foreign` (`produto_id`),
  ADD KEY `vendas_comerciante_id_foreign` (`comerciante_id`),
  ADD KEY `vendas_associado_id_foreign` (`associado_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associados`
--
ALTER TABLE `associados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
