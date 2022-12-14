-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 01, 2012 as 05:08 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projeto_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorios`
--

CREATE TABLE IF NOT EXISTS `acessorios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `detalhes` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `acessorios`
--

INSERT INTO `acessorios` (`codigo`, `nome`, `detalhes`, `preco`, `imagem`) VALUES
(1, 'Jaquetas e luvas', 'Couro legítimo de gnu  ', 432.56, '3b693.jpg'),
(2, 'Jaquetas', 'Legítimo couro de antílope  ', 1231.87, '139fe.jpg'),
(3, 'Alarme', '  Puro som ', 1765.54, 'dc5b8.jpg'),
(4, 'Alarme Josh', 'Longo alcance', 2345.67, 'afd49.jpg'),
(5, 'Alarme Cica', 'Ajuste automático', 3457.56, 'db0b4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `cod_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(300) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  PRIMARY KEY (`cod_contato`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`cod_contato`, `nome`, `email`, `assunto`, `comentario`) VALUES
(1, 'Edson da silva arantes', 'ed@hotmail.com', 'Site', 'Problemas no site não consigo acessar'),
(2, 'THALLES', 's_ny_dl@hotmail.com', 'Problema no site', 'eu também estou com um problema muito serio no  site'),
(3, 'thalles the best', 's_ny_dl@hotmail.com', 'problema', 'Bem, eu estou com interesse no produto da categoria acessório!'),
(4, 'Daniel Santana', 's_ny_dl@hotmail.com', 'Compra de Peças', 'Estou interessado na compra de peças'),
(5, 'AMBIENTE ENGENHARIA LTDA', 'cris.batistasilva@hotmail.com', 'Compra de acessórios', 'Tenho interesse de comprar vários acessórios'),
(6, 'AMBIENTE ENGENHARIA LTDA', 'cris.batistasilva@hotmail.com', 'Uso de peças', 'Qual o tempo de garantia das peças?'),
(7, 'Justina Salvador', 'justina@yahoo.com.br', 'Parabéns', 'Agradeço o excelente atendimento que tive no seu site'),
(8, 'Mariana dos Anjos', 'mari@yahoo.com.br', 'Venda de peÃ§as', 'Quanto tempo de garantia poderei ter?'),
(9, 'Marieta de Jesus', 'Mari@uol.com.br', 'Compra de AcessÃ³rios', 'Comprei uma jaqueta de couro e, adorei muito.'),
(10, 'Sandro Morais', 'SandoJMorais@hotmail', 'Convite', 'Convidamos para a festa de inauguração de nossa loja'),
(11, 'Joatan Silva JÃºnior', 'jsj@yahoo.com.br', 'RevisÃ£o de motocicleta', 'Gostaria de fazer a revisÃ£o de minha moto Ã s 8 horas da manhÃ£ de domingo. \r\nAt.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE IF NOT EXISTS `pecas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `detalhes` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`codigo`, `nome`, `detalhes`, `preco`, `imagem`) VALUES
(1, 'Descarga sluu', 'Puro alumínio', 453.54, '2039e.jpg'),
(2, 'Paralamas', 'Fibra de vidro', 132.99, 'a2657.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `codigo` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `detalhes` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`codigo`, `nome`, `detalhes`, `preco`, `imagem`) VALUES
(1, 'Troca de óleo', 'óleo vegetal 900 ml', 20.65, ''),
(2, 'Troca de óleo', 'CS4 viscoso', 45.39, ''),
(3, 'Troca de óleo Mobil', 'óleo de mamona', 30.34, '614ea.jpg'),
(4, 'Troca de óleo Amarelinho', 'óleo vegetal de mamona  ', 45.89, '12194.jpg'),
(5, 'Troca de óleo Motul', 'óleo multiviscoso', 34.21, 'f943c.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `username` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`username`, `senha`, `email`) VALUES
('edson', '123', 'edsondl2003@yahoo.com.br.com');
