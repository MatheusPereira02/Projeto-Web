-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2020 às 15:47
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
-- Banco de dados: `siteapostas`
--
--
-- Estrutura da tabela `recover_solicitation`
--

CREATE TABLE `recover_solicitation` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rash` varchar(200) NOT NULL,
  `status` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
-- Estrutura da tabela `usuarioscadastrojogos`
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
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `celular`, `nome`, `email`, `usuario`, `senha`, `cpf`, `created`, `modified`) VALUES
('0', '981246594', 'teste', 'teste@hotmail.com', 'teste@hotmail.com', '$2y$10$d8Hpwwj/DENEW4sBuUDvUuCw4/2QgEoWvs8YlAXASltHqw5w7vKDm', '15549122796', '2017-11-12 22:35:47', NULL);

--
-- Extraindo dados da tabela `usuarioscadastrojogos`
--

INSERT INTO `usercadastrojogos` (`id`, `timevisitante`, `datajogo`,  `horario`,  `nome`, `valor`, `localjogo`, `campeonato`, `timedacasa`, `created`, `modified`) VALUES
('0', 'flamengo', '0001-01-20', '15hrs', 'teste','35','maracana', 'brasileiro', 'fluminense', '2020-05-17 21:44:18', NULL);
--
-- Indexes for table `recover_solicitation`
--
ALTER TABLE `recover_solicitation`
  ADD PRIMARY KEY (`id`);


--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


--
-- Índices para tabela `usuarioscadastrojogos`
--
ALTER TABLE `usercadastrojogos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `recover_solicitation`
--
ALTER TABLE `recover_solicitation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
  COMMIT;


ALTER TABLE `usercadastrojogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
