-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2014 às 17:09
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rede_aruba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cobranca`
--

CREATE TABLE IF NOT EXISTS `cobranca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `data_pagamento` date NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descricao` text NOT NULL,
  `status` varchar(1) DEFAULT 'N' COMMENT 'N - Nao Paga, P - Paga',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `cobranca`
--

INSERT INTO `cobranca` (`id`, `cliente`, `data_pagamento`, `valor`, `data_envio`, `descricao`, `status`) VALUES
(12, 4, '2014-04-09', '22.00', '2014-04-13 20:31:28', 'teste', 'N'),
(13, 5, '2014-04-16', '25.00', '2014-04-13 20:31:57', 'Valor referente ao pagamento da internet.', 'N'),
(14, 7, '2014-04-15', '12.00', '2014-04-13 21:13:51', 'teste', 'P'),
(15, 7, '2014-04-30', '200.00', '2014-04-13 21:04:22', 'Pagamento da internet', 'N'),
(16, 7, '2014-04-29', '100.00', '2014-04-13 21:05:06', 'teste', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dispositivos`
--

CREATE TABLE IF NOT EXISTS `dispositivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `nomedispositivo` varchar(40) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  KEY `usuario_2` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `usuario`, `nomedispositivo`, `ip`, `mac`, `data_criacao`) VALUES
(5, 5, 'Xbox 360', '123456', '1332478', '2014-03-23 23:14:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `remetente` int(11) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `data_envio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` text NOT NULL,
  `nova` varchar(1) DEFAULT 'S',
  `removida` varchar(1) DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `remetente` (`remetente`),
  KEY `remetente_2` (`remetente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `usuario`, `remetente`, `assunto`, `data_envio`, `msg`, `nova`, `removida`) VALUES
(1, 7, 5, 'Teste', '2014-04-13 11:52:05', 'Mensagem de teste', 'N', 'S'),
(2, 7, 5, 'gsss', '2014-04-13 21:24:43', 'gdszgvvv', 'N', 'S'),
(3, 7, 5, 'ggg', '2014-04-13 21:25:09', 'cccc', 'N', 'S'),
(4, 5, 5, 'ccccc', '2014-04-13 21:25:29', 'cxczcxxczxczcxzxxcz', 'N', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `apartamento` int(3) NOT NULL,
  `bloco` varchar(2) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `perfil` int(2) NOT NULL COMMENT '1-admin, 2-usuario',
  `senha` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomecompleto`, `email`, `username`, `apartamento`, `bloco`, `telefone`, `perfil`, `senha`) VALUES
(4, 'João do Pulo', 'juliodopulo@gol.com', 'joaopulo', 809, 'A', '123', 2, '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Roger', 'roger@bol.com.br', 'rogermarques', 307, 'B', '91915520', 2, '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Teste', 'teste@teste.com', 'teste222', 234, 'A', '12345', 2, '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Julio Cesar Marques', 'juliomarquesjr@yahoo.com.br', 'juliomarquesjr', 405, 'B', '5596200959', 1, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD CONSTRAINT `dispositivos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_ibfk_1` FOREIGN KEY (`remetente`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
