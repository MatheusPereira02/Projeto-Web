-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2020 às 14:05
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recover_solicitation`
--

CREATE TABLE `recover_solicitation` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rash` varchar(200) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `useradm`
--

CREATE TABLE `useradm` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `cargo` varchar(220) NOT NULL,
  `situacoe_id` int(11) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `useradm`
--

INSERT INTO `useradm` (`id`, `nome`, `email`, `senha`, `cargo`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Matheus', 'mpg-sg@hotmail.com', '202cb962ac59075b964b07152d234b70', 'administrador', 1, 1, '2016-03-25 01:01:01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usercadastrojogos`
--

CREATE TABLE `usercadastrojogos` (
  `id` int(11) NOT NULL,
  `timevisitante` varchar(220) NOT NULL,
  `datajogo` date NOT NULL,
  `horario` int(220) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `valor` int(220) NOT NULL,
  `localjogo` varchar(220) NOT NULL,
  `campeonato` varchar(220) NOT NULL,
  `timedacasa` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usercadastrojogos`
--

INSERT INTO `usercadastrojogos` (`id`, `timevisitante`, `datajogo`, `horario`, `nome`, `valor`, `localjogo`, `campeonato`, `timedacasa`, `created`, `modified`) VALUES
(1, 'Vasco', '2021-05-20', 15, '', 15, 'Maracanã', 'Brasileiro', 'Flamengo', '2020-06-07 16:36:47', NULL),
(2, 'Botafogo', '2021-02-07', 17, '', 15, 'Morumbi', 'Brasileiro', 'Fluminense', '2020-06-07 17:00:35', NULL),
(3, 'Fortaleza', '2021-04-18', 11, '', 15, 'Beira-Rio', 'Brasileiro', 'Avaí', '2020-06-07 17:39:56', NULL),
(4, 'Corinthias', '2021-04-25', 20, '', 15, 'Arena do Grêmio', 'Brasileiro', 'Gremio', '2020-06-07 17:47:40', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `userregistroaposta`
--

CREATE TABLE `userregistroaposta` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `timedacasa` int(220) NOT NULL,
  `timedefora` int(220) NOT NULL,
  `total` int(220) NOT NULL,
  `numero` int(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `cpf` bigint(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `recover_solicitation`
--
ALTER TABLE `recover_solicitation`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `useradm`
--
ALTER TABLE `useradm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usercadastrojogos`
--
ALTER TABLE `usercadastrojogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `userregistroaposta`
--
ALTER TABLE `userregistroaposta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `recover_solicitation`
--
ALTER TABLE `recover_solicitation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `useradm`
--
ALTER TABLE `useradm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT de tabela `usercadastrojogos`
--
ALTER TABLE `usercadastrojogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT de tabela `userregistroaposta`
--
ALTER TABLE `userregistroaposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
