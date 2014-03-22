-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Mar-2014 às 13:11
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
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `nova` varchar(1) DEFAULT 'S',
  `removida` varchar(1) DEFAULT 'N',
  `dataenvio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `usuario`, `assunto`, `msg`, `nova`, `removida`, `dataenvio`) VALUES
(1, 1, 'test', 'te', 'S', 'N', '2014-03-21 11:54:34'),
(2, 1, 'Teste de Mensagem', 'Ola boa noite\r\nVenho através dessa merda mostrar a mensagem.', 'S', 'N', '2014-03-21 11:54:34'),
(3, 3, 'teste', 'teste', 'S', 'N', '2014-03-21 11:54:34'),
(4, 3, 'Ultimo Teste', 'Efetuando o ultimo teste, vamos para o login', 'S', 'N', '2014-03-21 11:54:34'),
(5, 3, 'Teste de assunto', 'Teste de Mensagem', 'S', 'N', '2014-03-21 17:04:10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomecompleto`, `email`, `username`, `apartamento`, `bloco`, `telefone`, `senha`) VALUES
(1, 'Julio Cesar Marques', 'juliomarquesjr@yahoo.com.br', 'juliomarquesjr', 405, 'B', '96200959', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Ingrid Albuquerque', 'ingridejulio@hotmail.com', 'ingrid', 506, 'B', '96962525', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'João do Pulo', 'juliodopulo@gol.com', 'joaopulo', 809, 'A', '123', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
