-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Abr-2023 às 11:21
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `geo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `auditoria`
--

CREATE TABLE `auditoria` (
  `id` int(11) NOT NULL,
  `operacao` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `Cor_padrao_turbo` varchar(20) DEFAULT NULL,
  `Data_hora` datetime DEFAULT NULL,
  `Dados` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cabo`
--

CREATE TABLE `cabo` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `quantidade_fibras` int(11) DEFAULT NULL,
  `quantidade_tubo_looses` int(11) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `alto_sustentavel_cabo` varchar(20) DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `status_implementacao` varchar(100) DEFAULT NULL,
  `observacao` varchar(400) DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cabo`
--

INSERT INTO `cabo` (`id`, `nome`, `quantidade_fibras`, `quantidade_tubo_looses`, `cor`, `alto_sustentavel_cabo`, `criado_em`, `modificado_em`, `status_implementacao`, `observacao`, `escala`) VALUES
(3, NULL, 48, 4, '#ff0000', 'Asu 120', '2022-10-09 22:42:12', '2022-10-09 23:07:36', 'Não implantado', 'ok', 6),
(5, NULL, 24, 4, '#000000', 'Asu 120', '2022-12-14 02:00:15', '2022-12-14 02:01:00', 'Implantado', 'cabo criado', 9),
(6, NULL, 48, 4, '#02d479', 'Asu 80', '2022-12-14 02:00:39', NULL, 'Não implantado', 'tudo certo', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cabo_drop`
--

CREATE TABLE `cabo_drop` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cor` varchar(30) DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `observacao` varchar(400) DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cabo_drop`
--

INSERT INTO `cabo_drop` (`id`, `nome`, `cor`, `criado_em`, `modificado_em`, `observacao`, `escala`) VALUES
(1, NULL, '#8cff00', '2022-10-23 17:08:22', '2022-10-23 17:10:02', 'cvasas', 2),
(2, NULL, '#00ffee', '2022-10-23 17:09:12', '2022-10-23 17:10:09', 'tudo', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cabo_nivel_2`
--

CREATE TABLE `cabo_nivel_2` (
  `id` int(11) NOT NULL DEFAULT 0,
  `nome` varchar(300) DEFAULT NULL,
  `quantidade_fibras` int(11) DEFAULT NULL,
  `quantidade_tubo_looses` int(11) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `alto_sustentavel_cabo` varchar(20) DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `status_implementacao` varchar(100) DEFAULT NULL,
  `observacao` varchar(400) DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cabo_nivel_2`
--

INSERT INTO `cabo_nivel_2` (`id`, `nome`, `quantidade_fibras`, `quantidade_tubo_looses`, `cor`, `alto_sustentavel_cabo`, `criado_em`, `modificado_em`, `status_implementacao`, `observacao`, `escala`) VALUES
(3, NULL, 48, 4, '#ff0000', 'Asu 120', '2022-10-09 22:42:12', '2022-10-24 14:28:35', 'Implantado', 'ok', 6),
(0, NULL, 24, 4, '#4c00ff', 'Asu 120', '2022-10-09 23:02:56', '2022-10-23 15:10:06', 'Não implantado', 'pronto', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `splitter` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude_longitude` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `tipo_splitter` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cor` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_implementacao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `nome`, `splitter`, `latitude_longitude`, `criado_em`, `modificado_em`, `tipo_splitter`, `cor`, `status_implementacao`, `observacao`, `escala`) VALUES
(1, 'edy', 'SPL1-16', '51.50617819737357 e 0.1077721797910103', '2022-08-20 02:19:53', '2023-04-04 12:40:46', 'Desbalanceado', '#1100ff', 'Implantada', 'rrrkkk', 10),
(2, 'vagne', 'SPL1-32', '51.49739720452357 e -0.04893418933888061', '2022-08-19 01:37:59', '2022-10-02 09:34:32', 'Balanceado', '#e25103', 'Não implantada', 'tudo feito', 3),
(3, 'CE01-CT001', 'SPL1-8', '51.50702107042624 e -0.02181964970364714', '2022-08-19 10:17:27', '2022-10-02 09:53:27', 'Desbalanceado', '#2e2200', 'Não implantada', 'OK', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_nivel_2`
--

CREATE TABLE `caixa_nivel_2` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `splitter` varchar(100) DEFAULT NULL,
  `latitude_longitude` varchar(250) DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `tipo_splitter` varchar(100) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `status_implementacao` varchar(50) DEFAULT NULL,
  `observacao` varchar(250) DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa_nivel_2`
--

INSERT INTO `caixa_nivel_2` (`id`, `nome`, `splitter`, `latitude_longitude`, `criado_em`, `modificado_em`, `tipo_splitter`, `cor`, `status_implementacao`, `observacao`, `escala`) VALUES
(1, 'CE01-CT001', 'SPL1-8', NULL, '2022-09-03 21:52:07', '2022-10-02 14:20:51', 'Desbalanceado', '#aeff00', 'Não implantada', 'OK', 4),
(2, 'gffg', 'SPL1-32', NULL, '2022-09-03 22:44:54', '2022-10-24 14:28:01', 'Balanceado', '#05ffb4', 'Implantada', 'bom', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `concentrador`
--

CREATE TABLE `concentrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `status_implementacao` varchar(100) DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `observacao` varchar(400) DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `concentrador`
--

INSERT INTO `concentrador` (`id`, `nome`, `status_implementacao`, `criado_em`, `modificado_em`, `observacao`, `escala`) VALUES
(2, 'vagner', 'Implantada', '2022-10-23 16:38:54', '2022-12-11 12:11:59', 'tudo bom', 7),
(3, 'CE01-CT001', 'Não implantada', '2022-10-26 23:43:57', '2022-11-08 19:18:02', 'ok', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conector`
--

CREATE TABLE `conector` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(100) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Permite_conexao` varchar(15) DEFAULT NULL,
  `Atenucao` varchar(10) DEFAULT NULL,
  `Descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conector`
--

INSERT INTO `conector` (`id`, `Codigo`, `Marca`, `Modelo`, `Permite_conexao`, `Atenucao`, `Descricao`) VALUES
(2, 'vvf', '', '', 'Sim', '4.4', ''),
(3, 'vagner', NULL, NULL, 'Sim', '44.5', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE `cores` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Cor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cores`
--

INSERT INTO `cores` (`id`, `Nome`, `Cor`) VALUES
(1, 'edivaldo', '#d10000'),
(2, '33', '#bb1616'),
(3, '33', '#bb1616'),
(4, 'vagner', ''),
(5, 'h', '#13671d');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dio`
--

CREATE TABLE `dio` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(100) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `total_portas` int(11) DEFAULT NULL,
  `Nr_bandejas` int(11) DEFAULT NULL,
  `Tag_lado_A` varchar(20) DEFAULT NULL,
  `Tag_lado_B` varchar(20) DEFAULT NULL,
  `Atenucao` varchar(10) DEFAULT NULL,
  `Descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dio`
--

INSERT INTO `dio` (`id`, `Codigo`, `Marca`, `Modelo`, `total_portas`, `Nr_bandejas`, `Tag_lado_A`, `Tag_lado_B`, `Atenucao`, `Descricao`) VALUES
(2, 'vagner', 'Mazda', '9000', 1, 1, 'Lado A', 'Lado B', '44.4', 'frt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `figuras`
--

CREATE TABLE `figuras` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `shape` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `uniqueid` varchar(1000) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `figuras`
--

INSERT INTO `figuras` (`id`, `admin_id`, `shape`, `uniqueid`, `data`, `type_id`) VALUES
(13, 1, '{\"_latlng\":{\"lat\":51.52155523866034,\"lng\":-0.12753203207898522},\"layerType\":\"circle\",\"_mRadius\":280.3580443972987,\"cor\":\"red\",\"id\":1667689403444}', '1667689403444', '2022-11-05 23:03:23', 1),
(14, 1, '{\"_latlng\":{\"lat\":51.51289905615273,\"lng\":-0.12135403570638471},\"layerType\":\"circle\",\"_mRadius\":180.9966509456752,\"cor\":\"red\",\"id\":1667689408483}', '1667689408483', '2022-11-05 23:03:28', 1),
(15, 1, '{\"_latlngs\":[[{\"lat\":51.49269174619737,\"lng\":-0.15996651303504808},{\"lat\":51.508197106491814,\"lng\":-0.15996651303504808},{\"lat\":51.508197106491814,\"lng\":-0.13937319179309962},{\"lat\":51.49269174619737,\"lng\":-0.13937319179309962}]],\"layerType\":\"rectangle\",\"cor\":\"red\",\"id\":1669558655122}', '1669558655122', '2022-11-27 14:17:35', 1),
(16, 1, '{\"_latlngs\":[[{\"lat\":51.498252895887866,\"lng\":-0.05236640954586537},{\"lat\":51.50327873590833,\"lng\":-0.05236640954586537},{\"lat\":51.50327873590833,\"lng\":-0.051165132473409716},{\"lat\":51.498252895887866,\"lng\":-0.051165132473409716}]],\"layerType\":\"rectangle\",\"cor\":\"red\",\"id\":1669558700858}', '1669558700858', '2022-11-27 14:18:20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fusao`
--

CREATE TABLE `fusao` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(100) DEFAULT NULL,
  `Permite_conexao` varchar(15) DEFAULT NULL,
  `Atenucao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fusao`
--

INSERT INTO `fusao` (`id`, `Codigo`, `Permite_conexao`, `Atenucao`) VALUES
(1, 'vagner', 'Não', '33.3'),
(3, 'edivaldo', 'Sim', '9.8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `Grupo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `olt`
--

CREATE TABLE `olt` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(50) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Maximo_clientes` int(11) DEFAULT NULL,
  `Potencia_padrao` int(11) DEFAULT NULL,
  `Descricao` text DEFAULT NULL,
  `Nr_slots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pendencia`
--

CREATE TABLE `pendencia` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Descricao` text DEFAULT NULL,
  `Cor` varchar(30) DEFAULT NULL,
  `pendencias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pendencia`
--

INSERT INTO `pendencia` (`id`, `Nome`, `Descricao`, `Cor`, `pendencias`) VALUES
(2, 'vagner', 'gytfrui78fg77', '#ff0000', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis_fibra`
--

CREATE TABLE `perfis_fibra` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Cor_padrao_fibra` varchar(500) DEFAULT NULL,
  `Cor_padrao_turbo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perfis_fibra`
--

INSERT INTO `perfis_fibra` (`id`, `Nome`, `Cor_padrao_fibra`, `Cor_padrao_turbo`) VALUES
(1, 'ff', '#000000, ', '#000000, #000000, #ff0000, #ff0000, #144fff, ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posicao_actual_mapa`
--

CREATE TABLE `posicao_actual_mapa` (
  `id` int(11) NOT NULL,
  `lat_lng` varchar(250) DEFAULT NULL,
  `zoom` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posicao_actual_mapa`
--

INSERT INTO `posicao_actual_mapa` (`id`, `lat_lng`, `zoom`) VALUES
(1, '[\"61.6807276551404\",\"-11423.631084441835\"]', '17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `poste`
--

CREATE TABLE `poste` (
  `id` int(11) NOT NULL,
  `Em_uso` varchar(10) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `Cor` varchar(10) DEFAULT NULL,
  `tipo_rede` varchar(10) DEFAULT NULL,
  `status_implementacao` varchar(50) DEFAULT NULL,
  `status_licenciamento` varchar(50) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `criado_em` datetime DEFAULT NULL,
  `modificado_em` datetime DEFAULT NULL,
  `escala` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `poste`
--

INSERT INTO `poste` (`id`, `Em_uso`, `nome`, `Cor`, `tipo_rede`, `status_implementacao`, `status_licenciamento`, `observacao`, `criado_em`, `modificado_em`, `escala`) VALUES
(5, NULL, NULL, '#ff0000', 'Alta', 'Implantado', 'Não licenciado', ' ', NULL, '2022-09-03 16:07:58', 2),
(7, NULL, 'CE01-CT001', '#00ff88', 'Alta', 'Implantado', 'Não licenciado', ' POSTEEEEEEE', NULL, '2022-10-23 21:51:18', 6),
(8, NULL, 'edivaldo', '#6600ff', 'Baixa', 'Não implantado', 'Licenciado', ' brabo', NULL, '2022-11-27 18:24:30', 9),
(17, NULL, NULL, '#b30000', 'Baixa', 'Não implantado', 'Não licenciado', 'ggrr', '2022-10-23 21:48:24', NULL, 5),
(18, NULL, 'vagne', '#0aff1b', 'Alta', 'Implantado', 'Não licenciado', 'jhj', '2022-10-23 21:55:00', NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Identificador` varchar(100) DEFAULT NULL,
  `Usuarios` varchar(100) DEFAULT NULL,
  `Projeto_pai` varchar(100) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `local` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id`, `Nome`, `Identificador`, `Usuarios`, `Projeto_pai`, `Image`, `local`) VALUES
(4, 'WWW', 'WWW', 'WW', 'WW', '', 'WWW'),
(5, 'ff', 'fff', 'fff', 'fff', 'fff', 'fff'),
(6, 'edy', 'ed', 'eee', 'ddd', 'ee', 'dd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `regiao`
--

CREATE TABLE `regiao` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Descricao` text DEFAULT NULL,
  `Cor` varchar(30) DEFAULT NULL,
  `regiao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `regiao`
--

INSERT INTO `regiao` (`id`, `Nome`, `Descricao`, `Cor`, `regiao`) VALUES
(2, 'vagner', 'huk', '#00ffcc', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `splitter`
--

CREATE TABLE `splitter` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(50) DEFAULT NULL,
  `Splitters` int(11) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Prefixo` varchar(100) DEFAULT NULL,
  `Tipo_de_entrada_saida` varchar(100) DEFAULT NULL,
  `Nr_entradas` int(11) DEFAULT NULL,
  `Nr_saidas` int(11) DEFAULT NULL,
  `Atenuacao_1` varchar(100) DEFAULT NULL,
  `Atenuacao_2` varchar(100) DEFAULT NULL,
  `Balanceando` varchar(10) DEFAULT NULL,
  `Permite_conexao` varchar(10) DEFAULT NULL,
  `Descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `splitter`
--

INSERT INTO `splitter` (`id`, `Codigo`, `Splitters`, `Marca`, `Modelo`, `Prefixo`, `Tipo_de_entrada_saida`, `Nr_entradas`, `Nr_saidas`, `Atenuacao_1`, `Atenuacao_2`, `Balanceando`, `Permite_conexao`, `Descricao`) VALUES
(1, 'vagner', NULL, 'Toyota', '2020', 'vag', 'CE', 3, 3, '33.3', '', 'Sim', 'Não', 'erffeeeGAER'),
(3, 'tgtrrt', NULL, 'beleza', '4040', 'P_11', 'CE', 1, 2, '3.3', '0.3', 'Não', 'Sim', 'SDBUHSDDDDDDDDDDDDDD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `switch`
--

CREATE TABLE `switch` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(100) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Permite_conexao` varchar(15) DEFAULT NULL,
  `Nr_portas` int(11) DEFAULT NULL,
  `Gerivel` varchar(15) DEFAULT NULL,
  `Descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `switch`
--

INSERT INTO `switch` (`id`, `Codigo`, `Marca`, `Modelo`, `Permite_conexao`, `Nr_portas`, `Gerivel`, `Descricao`) VALUES
(1, 'vagner', 'Mazda', '2003', 'Sim', 4, 'Não', 'erere'),
(3, 'codigo', 'tipo', '4040', 'Não', 6, 'Não', 'bom'),
(4, 'switch', 'mitsu', '2023', 'Sim', 5, 'Não', 'ok');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Grupo` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`id`, `Nome`, `Grupo`) VALUES
(1, 'vagner', 'CE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `sr_Id` int(10) NOT NULL,
  `adm_Id` varchar(55) NOT NULL,
  `adm_name` varchar(100) NOT NULL,
  `adm_username` varchar(55) NOT NULL,
  `adm_password` varchar(55) NOT NULL,
  `adm_status` varchar(10) NOT NULL DEFAULT 'Inactive',
  `adm_type` varchar(10) NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`sr_Id`, `adm_Id`, `adm_name`, `adm_username`, `adm_password`, `adm_status`, `adm_type`) VALUES
(1, 'adm_1', 'Admin', 'admin@google.com', 'c3fb37909d398f646387bef207be49b4', 'Active', 'Super');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Senha` varchar(250) DEFAULT NULL,
  `Gerar_senha` varchar(250) DEFAULT NULL,
  `Tipo_usuario` varchar(100) DEFAULT NULL,
  `Todos_projetos` varchar(10) DEFAULT NULL,
  `Projetos` varchar(100) DEFAULT NULL,
  `Modulos` varchar(600) DEFAULT NULL,
  `Chave_API` varchar(300) DEFAULT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Telefone` varchar(100) DEFAULT NULL,
  `Observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `Email`, `Senha`, `Gerar_senha`, `Tipo_usuario`, `Todos_projetos`, `Projetos`, `Modulos`, `Chave_API`, `Nome`, `Telefone`, `Observacoes`) VALUES
(1, 'admin', 'edivaldo@gmail.com', '123 ', '', 'Machine', 'Não', 'Edivaldo', 'Machine', 'd41d8cd98f00b204e9800998ecf8427e', 'edivaldo', '(44) 5545-45454', 'ftffffg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cabo`
--
ALTER TABLE `cabo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cabo_drop`
--
ALTER TABLE `cabo_drop`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `caixa_nivel_2`
--
ALTER TABLE `caixa_nivel_2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `concentrador`
--
ALTER TABLE `concentrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `conector`
--
ALTER TABLE `conector`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dio`
--
ALTER TABLE `dio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `figuras`
--
ALTER TABLE `figuras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fusao`
--
ALTER TABLE `fusao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `olt`
--
ALTER TABLE `olt`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pendencia`
--
ALTER TABLE `pendencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfis_fibra`
--
ALTER TABLE `perfis_fibra`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posicao_actual_mapa`
--
ALTER TABLE `posicao_actual_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `regiao`
--
ALTER TABLE `regiao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `splitter`
--
ALTER TABLE `splitter`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `switch`
--
ALTER TABLE `switch`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`sr_Id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cabo`
--
ALTER TABLE `cabo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cabo_drop`
--
ALTER TABLE `cabo_drop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `caixa_nivel_2`
--
ALTER TABLE `caixa_nivel_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `concentrador`
--
ALTER TABLE `concentrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `conector`
--
ALTER TABLE `conector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cores`
--
ALTER TABLE `cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `dio`
--
ALTER TABLE `dio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `figuras`
--
ALTER TABLE `figuras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `fusao`
--
ALTER TABLE `fusao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `olt`
--
ALTER TABLE `olt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pendencia`
--
ALTER TABLE `pendencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perfis_fibra`
--
ALTER TABLE `perfis_fibra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `posicao_actual_mapa`
--
ALTER TABLE `posicao_actual_mapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `poste`
--
ALTER TABLE `poste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `regiao`
--
ALTER TABLE `regiao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `splitter`
--
ALTER TABLE `splitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `switch`
--
ALTER TABLE `switch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `sr_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
