-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2023 às 17:32
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

CREATE DATABASE db_hospital;
USE db_hospital;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_agendamento`
--

CREATE TABLE `tbl_agendamento` (
  `numeroAgendamento` int(11) NOT NULL,
  `dataAgendamento` varchar(10) NOT NULL,
  `horaAgendamento` varchar(5) NOT NULL,
  `queixa` varchar(150) NOT NULL,
  `gravidade` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_agendamento`
--

INSERT INTO `tbl_agendamento` (`numeroAgendamento`, `dataAgendamento`, `horaAgendamento`, `queixa`, `gravidade`) VALUES
(14, '23/10/2023', '12:30', 'Dor de cabeça', 'Não urgente'),
(95, '02/11/2023', '15:45', 'Perna quebrada', 'Pouco urgente'),
(105, '05/01/2024', '09:30', 'Câncer de pulmão', 'Urgente'),
(240, '23/01/2024', '08:20', 'Doença de Mão, Pé e Boca', 'Urgente'),
(145, '15/01/2024', '16:50', 'Chikungunya', 'Urgente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_consulta`
--

CREATE TABLE `tbl_consulta` (
  `numeroConsulta` int(11) NOT NULL,
  `dataConsulta` varchar(10) NOT NULL,
  `horaConsulta` varchar(5) NOT NULL,
  `agendamentoConsulta` varchar(150) NOT NULL,
  `pacienteConsulta` int(11) NOT NULL,
  `medicoConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_consulta`
--

INSERT INTO `tbl_consulta` (`numeroConsulta`, `dataConsulta`, `horaConsulta`, `agendamentoConsulta`, `pacienteConsulta`, `medicoConsulta`) VALUES
(1230, '23/10/2023', '12:30', 'Dor de cabeça', 21, 54),
(1587, '02/11/2023', '15:45', 'Perna quebrada', 34, 55),
(1649, '05/01/2024', '09:30', 'Câncer de pulmão', 47, 65),
(1258, '23/01/2024', '08:20', 'Hanseníase', 35, 37),
(1465, '15/01/2024', '16:50', 'Chikungunya', 32, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_especialidade`
--

CREATE TABLE `tbl_especialidade` (
  `nomeEspecialidade` varchar(150) NOT NULL,
  `numeroRegistro` int(11) NOT NULL,
  `publicoAlvo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_especialidade`
--

INSERT INTO `tbl_especialidade` (`nomeEspecialidade`, `numeroRegistro`, `publicoAlvo`) VALUES
('Cirurgião Geral', 145, 'Pessoas que necessitam de cirurgia'),
('Pneumologista', 165, 'Pessoas com doenças pulmonares'),
('Pediatra', 325, 'Crianças'),
('Clínico geral', 875, 'Pessoas com algo anormal'),
('Ortopedista', 645, 'Pessoas com dores nos ossos e dores musculares');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_medico`
--

CREATE TABLE `tbl_medico` (
  `nomeMedico` varchar(150) NOT NULL,
  `telefoneMedico` int(11) NOT NULL,
  `enderecoMedico` varchar(150) NOT NULL,
  `crm` int(11) NOT NULL,
  `consultasMedico` varchar(150) NOT NULL,
  `especialidadesMedico` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_medico`
--

INSERT INTO `tbl_medico` (`nomeMedico`, `telefoneMedico`, `enderecoMedico`, `crm`, `consultasMedico`, `especialidadesMedico`) VALUES
('Sebastian Carvalho', 2147483647, 'Rua das Famílias', 658, 'Perna quebrada', 'Cirurgião Geral'),
('Reginaldo Rossi', 2147483647, 'Rua do Amor', 567, 'Câncer de pulmão', 'Pneumologista'),
('Daniel Lima', 2147483647, 'Rua do Chico Cunha', 789, 'Chikungunya', 'Pediatra'),
('Breno Farias', 1124578652, 'Rua Cinquenta Centavos', 532, 'Dor de cabeça', 'Clinico Geral'),
('Camila Furtado', 1147859623, 'Rua do Asfalto', 342, 'Doença de Mão, Pé e Boca', 'Ortopedista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_paciente`
--

CREATE TABLE `tbl_paciente` (
  `id` int(11) NOT NULL,
  `nomePaciente` varchar(150) NOT NULL,
  `senhaPaciente` varchar(255) NOT NULL,
  `enderecoPaciente` varchar(150) NOT NULL,
  `telefonePaciente` int(11) NOT NULL,
  `numeroBeneficiario` int(11) NOT NULL,
  `doencasPrevias` varchar(150) NOT NULL,
  `remedioDeUsoContinuo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_paciente`
--

INSERT INTO `tbl_paciente` (`id`, `nomePaciente`, `senhaPaciente`, `enderecoPaciente`, `telefonePaciente`, `numeroBeneficiario`, `doencasPrevias`, `remedioDeUsoContinuo`) VALUES
(1, 'Richelle Souza', 'richellesouza12', 'Rua Das Graças', 2147483647, 124, 'Dores de cabeça contínua', 'Dipirona'),
(2, 'Paulo Rafael', 'paulorafael12', 'Rua São Francisco', 2147483647, 365, 'Dores no perna', 'Dorflex'),
(3, 'Fernando Silva', 'fernandosilva12', 'Rua da Felicidade', 2147483647, 147, 'Câncer no pulmão', 'Carboplatina'),
(4, 'Enzo Carvalho', 'anzocarvalho12', 'Rua do Prazer', 2147483647, 247, 'Doença de Mão, Pé e Boca', 'Paracetamol'),
(23, 'Danilo Lima', 'danilolima', 'danilolima', 1212121212, 1212, 'danilolima', 'danilolima');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
