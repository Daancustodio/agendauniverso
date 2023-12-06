-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Dez-2023 às 15:42
-- Versão do servidor: 5.7.40
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a4745563_audio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `501d`
--

DROP TABLE IF EXISTS `501d`;
CREATE TABLE IF NOT EXISTS `501d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `501d`
--

INSERT INTO `501d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('2daniel', ' ', '', '', '', '', '', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `502d`
--

DROP TABLE IF EXISTS `502d`;
CREATE TABLE IF NOT EXISTS `502d` (
  `horario1` varchar(50) NOT NULL DEFAULT ' ',
  `horario2` varchar(50) NOT NULL DEFAULT ' ',
  `horario3` varchar(50) NOT NULL DEFAULT ' ',
  `horario4` varchar(50) NOT NULL DEFAULT ' ',
  `horario5` varchar(50) NOT NULL DEFAULT ' ',
  `horario6` varchar(50) NOT NULL DEFAULT ' ',
  `horario7` varchar(50) NOT NULL DEFAULT ' ',
  `horario8` varchar(50) NOT NULL DEFAULT ' ',
  `horario9` varchar(50) NOT NULL DEFAULT ' ',
  `horario10` varchar(50) NOT NULL DEFAULT ' ',
  `horario11` varchar(50) NOT NULL DEFAULT ' ',
  `data` varchar(30) NOT NULL DEFAULT ' ',
  `status` varchar(20) NOT NULL DEFAULT ' ',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `502d`
--

INSERT INTO `502d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '06/12/2023', ' ', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `503d`
--

DROP TABLE IF EXISTS `503d`;
CREATE TABLE IF NOT EXISTS `503d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `503d`
--

INSERT INTO `503d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('', '', ' ', '', '', '', '', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `504d`
--

DROP TABLE IF EXISTS `504d`;
CREATE TABLE IF NOT EXISTS `504d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `504d`
--

INSERT INTO `504d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('', '', '', '', '2daniel', '', '', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `505d`
--

DROP TABLE IF EXISTS `505d`;
CREATE TABLE IF NOT EXISTS `505d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `505d`
--

INSERT INTO `505d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('2daniel', '', '', '', '', '', '', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `506d`
--

DROP TABLE IF EXISTS `506d`;
CREATE TABLE IF NOT EXISTS `506d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `506d`
--

INSERT INTO `506d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `507d`
--

DROP TABLE IF EXISTS `507d`;
CREATE TABLE IF NOT EXISTS `507d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `507d`
--

INSERT INTO `507d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `508d`
--

DROP TABLE IF EXISTS `508d`;
CREATE TABLE IF NOT EXISTS `508d` (
  `horario1` varchar(50) NOT NULL,
  `horario2` varchar(50) NOT NULL,
  `horario3` varchar(50) NOT NULL,
  `horario4` varchar(50) NOT NULL,
  `horario5` varchar(50) NOT NULL,
  `horario6` varchar(50) NOT NULL,
  `horario7` varchar(50) NOT NULL,
  `horario8` varchar(50) NOT NULL,
  `horario9` varchar(50) NOT NULL,
  `horario10` varchar(50) NOT NULL,
  `horario11` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `508d`
--

INSERT INTO `508d` (`horario1`, `horario2`, `horario3`, `horario4`, `horario5`, `horario6`, `horario7`, `horario8`, `horario9`, `horario10`, `horario11`, `data`, `status`, `id`) VALUES
('', '', '', '', '', '', '2daniel', '', '', '', '', '06/12/2023', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_professores`
--

DROP TABLE IF EXISTS `cadastro_professores`;
CREATE TABLE IF NOT EXISTS `cadastro_professores` (
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nivel` int(1) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_professores`
--

INSERT INTO `cadastro_professores` (`nome`, `sobrenome`, `matricula`, `email`, `senha`, `telefone`, `status`, `nivel`, `id`) VALUES
('daniel', 'custodio', '102030', 'srdaniiel@gmail.com', '162b7d2193327cda15487a3a8fdf989ad08349e0', '62985581643', 'aprovado', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `data` varchar(30) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `inicio` varchar(30) NOT NULL,
  `termino` varchar(30) NOT NULL,
  `local` varchar(50) NOT NULL,
  `professor` varchar(30) NOT NULL,
  `equipamentos` varchar(150) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `dia` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posgraduacao`
--

DROP TABLE IF EXISTS `posgraduacao`;
CREATE TABLE IF NOT EXISTS `posgraduacao` (
  `data` varchar(30) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `inicio` varchar(30) NOT NULL,
  `termino` varchar(30) NOT NULL,
  `local` varchar(50) NOT NULL,
  `professor` varchar(30) NOT NULL,
  `equipamentos` varchar(150) NOT NULL,
  `disciplina` varchar(500) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `dia` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
