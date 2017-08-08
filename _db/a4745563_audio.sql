-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Ago-2017 às 20:02
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a4745563_audio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `501d`
--

CREATE TABLE `501d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `502d`
--

CREATE TABLE `502d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `503d`
--

CREATE TABLE `503d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `504d`
--

CREATE TABLE `504d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `505d`
--

CREATE TABLE `505d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `506d`
--

CREATE TABLE `506d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `507d`
--

CREATE TABLE `507d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `508d`
--

CREATE TABLE `508d` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_professores`
--

CREATE TABLE `cadastro_professores` (
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nivel` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posgraduacao`
--

CREATE TABLE `posgraduacao` (
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `501d`
--
ALTER TABLE `501d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `502d`
--
ALTER TABLE `502d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `503d`
--
ALTER TABLE `503d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `504d`
--
ALTER TABLE `504d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `505d`
--
ALTER TABLE `505d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `506d`
--
ALTER TABLE `506d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `507d`
--
ALTER TABLE `507d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `508d`
--
ALTER TABLE `508d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_professores`
--
ALTER TABLE `cadastro_professores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `501d`
--
ALTER TABLE `501d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `502d`
--
ALTER TABLE `502d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `503d`
--
ALTER TABLE `503d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `504d`
--
ALTER TABLE `504d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `505d`
--
ALTER TABLE `505d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `506d`
--
ALTER TABLE `506d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `507d`
--
ALTER TABLE `507d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `508d`
--
ALTER TABLE `508d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cadastro_professores`
--
ALTER TABLE `cadastro_professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
