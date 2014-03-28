-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 28-Mar-2014 às 03:14
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `rede_aruba`
--

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `usuario`, `nomedispositivo`, `ip`, `mac`, `data_criacao`) VALUES
(1, 1, '12', '12', '123', '2014-03-23 21:23:06'),
(2, 3, 'teste', '123', '123', '2014-03-23 21:26:03'),
(3, 1, 'julio', '122', '1233', '2014-03-23 21:30:06'),
(4, 1, 'Console Xbox', '1235', '12334', '2014-03-23 21:33:06'),
(5, 5, 'Xbox 360', '123456', '1332478', '2014-03-23 23:14:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `nova` varchar(1) DEFAULT 'S',
  `removida` varchar(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `usuario`, `assunto`, `msg`, `nova`, `removida`) VALUES
(1, 1, 'test', 'te', 'S', 'N'),
(2, 1, 'Teste de Mensagem', 'Ola boa noite\r\nVenho através dessa merda mostrar a mensagem.', 'S', 'N'),
(3, 3, 'teste', 'teste', 'S', 'N'),
(4, 3, 'Ultimo Teste', 'Efetuando o ultimo teste, vamos para o login', 'S', 'N');

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
  `senha` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomecompleto`, `email`, `username`, `apartamento`, `bloco`, `telefone`, `senha`) VALUES
(1, 'Julio Cesar Marques', 'juliomarquesjr@yahoo.com.br', 'juliomarquesjr', 405, 'B', '96200959', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Ingrid Albuquerque', 'ingridejulio@hotmail.com', 'ingrid', 506, 'B', '96962525', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'João do Pulo', 'juliodopulo@gol.com', 'joaopulo', 809, 'A', '123', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Roger', 'roger@bol.com.br', 'rogermarques', 307, 'B', '91915520', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
