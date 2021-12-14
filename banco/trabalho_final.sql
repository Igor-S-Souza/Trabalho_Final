-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2021 às 18:54
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `entidade` varchar(30) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `observacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id_solicitacao` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `recepcao` varchar(30) DEFAULT NULL,
  `problema` varchar(200) DEFAULT NULL,
  `horario` varchar(10) DEFAULT NULL,
  `protocolo` varchar(10) DEFAULT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `data1` varchar(30) DEFAULT NULL,
  `fk_id_solicitacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status1`
--

CREATE TABLE `status1` (
  `id` int(11) NOT NULL,
  `protocolo` varchar(30) DEFAULT NULL,
  `data4` varchar(30) DEFAULT NULL,
  `horario4` varchar(30) DEFAULT NULL,
  `nome4` varchar(30) DEFAULT NULL,
  `contato4` varchar(30) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `problema` varchar(200) DEFAULT NULL,
  `recepcao` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_por_setor`
--

CREATE TABLE `usuario_por_setor` (
  `id` int(11) NOT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario_por_setor`
--

INSERT INTO `usuario_por_setor` (`id`, `contato`, `senha`, `login`, `nome`, `setor`, `email`) VALUES
(1, '(51) 98650-3491', '202cb962ac59075b964b', 'igor-souza', 'Igor', 'Tecnico', 'igorajala550@gmail.com'),
(2, '(51) 98650-3491', '123', 'luccas-torres', 'Igor2', 'Telefonista', 'IGOR@A2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id_solicitacao`),
  ADD KEY `fk_id_solicitacao` (`fk_id_solicitacao`);

--
-- Índices para tabela `status1`
--
ALTER TABLE `status1`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario_por_setor`
--
ALTER TABLE `usuario_por_setor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `status1`
--
ALTER TABLE `status1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario_por_setor`
--
ALTER TABLE `usuario_por_setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD CONSTRAINT `solicitacao_ibfk_1` FOREIGN KEY (`fk_id_solicitacao`) REFERENCES `status1` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
