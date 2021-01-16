-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Nov-2020 às 15:24
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoday`;
   use demoday;
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcadastrodiretor`
--

CREATE TABLE `tblcadastrodiretor` (
  `nome_diretor` varchar(100) DEFAULT NULL,
  `CPF` varchar(14) NOT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `dataa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcadastroescola`
--

CREATE TABLE `tblcadastroescola` (
  `id_escola` int(11) NOT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `rede_de_ensino` varchar(100) DEFAULT NULL,
  `escola` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcadastro_aluno`
--

CREATE TABLE `tblcadastro_aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) DEFAULT NULL,
  `email_aluno` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `chave_de_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcadastro_professor`
--

CREATE TABLE `tblcadastro_professor` (
  `professor` varchar(100) NOT NULL,
  `data_nasc` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `chave_de_acesso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcadastrodiretor`
--
ALTER TABLE `tblcadastrodiretor`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `tblcadastroescola`
--
ALTER TABLE `tblcadastroescola`
  ADD PRIMARY KEY (`id_escola`);

--
-- Indexes for table `tblcadastro_aluno`
--
ALTER TABLE `tblcadastro_aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `tblcadastro_professor`
--
ALTER TABLE `tblcadastro_professor`
  ADD PRIMARY KEY (`CPF`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcadastroescola`
--
ALTER TABLE `tblcadastroescola`
  MODIFY `id_escola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblcadastro_aluno`
--
ALTER TABLE `tblcadastro_aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
