-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Dez-2018 às 19:34
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_ticket`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `perfil` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`ID`, `nome`, `email`, `senha`, `sexo`, `data_nascimento`, `perfil`) VALUES
(3, 'teste1', 'iwqjeio@ndkeawnd', '12345', 'other', '4133-03-12', ''),
(5, 'teste3', 'aiowdjhowa', 'abcd', 'other', '1111-11-11', 'cliente'),
(6, 'gustavo', 'email', 'senha', 'masculino', '11-11-1111', 'adm'),
(8, 'Gustavo', 'olive.guga@gmail.com', 'teste', 'male', '1999-12-18', 'cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evt_libertadores2018`
--

DROP TABLE IF EXISTS `evt_libertadores2018`;
CREATE TABLE IF NOT EXISTS `evt_libertadores2018` (
  `ID` int(3) NOT NULL,
  `ing_camarote` int(5) NOT NULL,
  `ing_cad_inferior` int(5) NOT NULL,
  `ing_cad_superior` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evt_libertadores2018`
--

INSERT INTO `evt_libertadores2018` (`ID`, `ing_camarote`, `ing_cad_inferior`, `ing_cad_superior`) VALUES
(0, 100, 2903, 1034);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evt_tomorrowland`
--

DROP TABLE IF EXISTS `evt_tomorrowland`;
CREATE TABLE IF NOT EXISTS `evt_tomorrowland` (
  `ID` int(3) NOT NULL,
  `ing_pista` int(6) NOT NULL,
  `ing_vip` int(6) NOT NULL,
  `ing_camarote` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evt_tomorrowland`
--

INSERT INTO `evt_tomorrowland` (`ID`, `ing_pista`, `ing_vip`, `ing_camarote`) VALUES
(0, 1034, 352, 253);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evt_ultra_music`
--

DROP TABLE IF EXISTS `evt_ultra_music`;
CREATE TABLE IF NOT EXISTS `evt_ultra_music` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `ing_pista` int(6) NOT NULL,
  `ing_vip` int(6) NOT NULL,
  `ing_camarote` int(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `perfil` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`login`, `senha`, `perfil`) VALUES
('joao', '123', 'cliente'),
('adm', 'adm', 'adm'),
('email', 'senha', 'cliente'),
('email', 'senha', 'cliente'),
('joao', '123', 'cliente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
