-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 19/09/2020 às 12:32
-- Versão do servidor: 5.6.41-84.1
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `triob261_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `evento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `semana` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hora_inicio` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `hora_termino` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `local` text COLLATE utf8_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8_unicode_ci NOT NULL,
  `qtd` int(11) NOT NULL,
  `inscritos` int(11) NOT NULL,
  `valor` float NOT NULL,
  `status` int(11) NOT NULL,
  `obs` text COLLATE utf8_unicode_ci NOT NULL,
  `capa_evento` text COLLATE utf8_unicode_ci NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `alter_user` int(11) NOT NULL,
  `alter_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `evento`, `data_inicio`, `data_final`, `semana`, `hora_inicio`, `hora_termino`, `local`, `endereco`, `qtd`, `inscritos`, `valor`, `status`, `obs`, `capa_evento`, `create_user`, `create_date`, `alter_user`, `alter_date`) VALUES
(37, 'Inauguração Nho Sorverteria- Alameda Shopping', '2020-03-04', '0000-00-00', '', '09:00', '22:00', 'Externo', 'Alamenda Shopping', 0, 0, 0, 1, '', 'capa_evento20200310203540.jpeg', 3, '2020-03-10 20:35:40', 0, '0000-00-00 00:00:00'),
(34, 'Bailinho de Carnaval- Asbac', '2020-02-22', '2020-02-22', '', '15:00', '19:00', 'Externo', 'Clube Asbac', 0, 0, 0, 1, '', 'capa_evento20200310203041.jpeg', 3, '2020-03-10 20:30:41', 0, '0000-00-00 00:00:00'),
(35, 'Colônia de férias- SQB', '2020-01-13', '2020-01-17', '', '14:00', '18:00', 'Externo', 'SQB', 0, 0, 0, 1, '', 'capa_evento20200310203254.jpeg', 3, '2020-03-10 20:32:54', 0, '0000-00-00 00:00:00'),
(36, 'Ressaquinha de Carnaval do Metrópole Shopping', '2020-02-29', '2020-03-29', '', '16:00', '18:00', 'Externo', 'Metrópole Shopping', 0, 0, 0, 1, '', 'capa_evento20200310203415.jpeg', 3, '2020-03-10 20:34:15', 0, '0000-00-00 00:00:00'),
(29, 'Bailinho kids', '2020-02-22', '0000-00-00', '', '14:00', '16:00', 'Espaço Bagunça', '', 15, 0, 45, 1, 'Bailinho kids do Trio Bagunça:\r\n\r\nUma tarde de muita folia, música, dança, bailinho, confete, serpentina, espuminha e muuuuita diversão com a equipe de animação mais animada do Distrito Federal. \r\n\r\nNosso bailinho kids ocorrerá dia 22/02 de 14 às 16h no Espaço Bagunça, localizado no segundo piso do Metrópole Shopping (Águas Claras).\r\n\r\nValores:\r\n- R$ 45,00 por depósito ou transferência ou dinheiro.\r\n\r\nInscrições:\r\n- Whats app: (61) 991815767\r\n- Loja física: Trio Bagunça, Metrópole Shopping. \r\n\r\nObs: as inscrições só serão confirmadas após o pagamento. Vagas limitidas.\r\n\r\nObs 2: Caso seja necessário cancelar a inscrição, a devolução do valor só ocorrerá se o cancelamento for feito até 24 horas antes do evento.', 'capa_evento20200201044505.jpeg', 3, '2020-02-01 04:45:05', 0, '0000-00-00 00:00:00'),
(33, 'Oficina Pandeirinho de Carnaval do Metrópole Shopp', '2020-02-08', '2020-02-08', '', '16:00', '17:30', 'Externo', '', 0, 0, 0, 1, '', 'capa_evento20200310202853.jpeg', 3, '2020-03-10 20:28:53', 0, '0000-00-00 00:00:00'),
(38, 'BatEncontro', '2020-02-29', '2020-03-29', '', '14:00', '15:00', 'Espaço Bagunça', '', 0, 0, 0, 1, 'Para fecharmos a semana do Carnaval com chave de ouro, chegou a vez de um super herói marcar presença no nosso Espaço Bagunça.\r\n\r\nNo sábado (29/02), de 14 às 15h, as crianças poderão se divertir com o Batman e aproveitar esse momento para curtir para valer por apenas R$ 20,00.\r\nSe eu fosse você, já garantiria logo a inscrição, pois as vagas são limitadas! \r\nAs crianças que quiserem permanecer no nosso espaço após as 15h (muitas atividades infantis estarão rolando até as 18h), pagarão R$ 15,00 por hora extra. \r\nOs papais e mamães poderão acompanhar tudo que está rolando por meio de transmissão de imagens no piso inferior da nossa loja. \r\nAproveita que essa oportunidade só o Trio oferece ', 'capa_evento20200310210058.jpeg', 3, '2020-03-10 21:00:58', 0, '0000-00-00 00:00:00'),
(39, 'Tarde com a Anna e Elsa', '2020-02-15', '2020-02-15', '', '14:00', '15:00', 'Espaço Bagunça', '', 0, 0, 0, 1, 'A Anna e a Elsa saíram diretamente de Frozen 2 e estão a caminho do nosso Espaço Bagunça. No sábado (15/02) elas estarão conosco de 14 às 15h. \r\nUma tarde de muita diversão com fotos, danças, brincadeiras e oficina por apenas R$ 20,00 por criança. \r\nSe eu fosse você, já garantiria logo a inscrição, pois as vagas são limitadas! \r\nAs crianças que quiserem permanecer no nosso espaço após as 15h (muitas atividades infantis estarão rolando até as 18h), pagarão R$ 15,00 por hora extra. \r\nOs papais e mamães poderão acompanhar tudo que está rolando por meio de transmissão de imagens no piso inferior da nossa loja. \r\n\r\nAproveita que essa oportunidade só o Trio oferece ', 'capa_evento20200310210510.jpeg', 3, '2020-03-10 21:05:10', 0, '0000-00-00 00:00:00'),
(40, 'Carnaval com a Anna e a Elsa', '2020-02-25', '2020-03-25', '', '14:00', '15:00', 'Espaço Bagunça', '', 0, 0, 0, 1, 'Devido ao sucesso do nosso primeiro encontro com Anna e Elsa (Frozen 2), acatamos aos pedidos e vamos realizar mais um dia com as duas princesas do momento!\r\n\r\nTeremos brincadeiras, fotos,dança, música e oficina! Um momento marcante, de muita magia, diversão e alegria para os fãs mirins de Frozen 2!\r\n\r\nSerá no dia 25/02 de 14 às 15h no Espaço Bagunça (Metrópole Shopping/ Àguas Claras). E isso tudo por apenas R$ 30,00.\r\n\r\nUm encontro especial de carnaval para os pequenos! \r\nCorra e garanta a sua vaga, pois são limitadas e estão acabando!', 'capa_evento20200310210635.jpeg', 3, '2020-03-10 21:06:35', 0, '0000-00-00 00:00:00'),
(41, 'Cronograma- Março', '2020-03-01', '2020-03-31', '', '14:00', '18:00', 'Espaço Bagunça', '', 0, 0, 0, 1, '', 'capa_evento20200310211016.jpeg', 3, '2020-03-10 21:10:16', 0, '0000-00-00 00:00:00'),
(42, 'Chá das Princesas', '2020-03-07', '2020-03-07', '', '14:00', '16:00', 'Espaço Bagunça', '', 0, 0, 0, 1, 'Nesse final de semana tem Chá das princesas no Espaço Bagunça ', 'capa_evento20200310211159.jpeg', 3, '2020-03-10 21:11:59', 0, '0000-00-00 00:00:00'),
(43, 'Chá das Princesas', '2020-03-07', '2020-03-07', '', '16:30', '18:30', 'Espaço Bagunça', '', 0, 0, 0, 1, 'Nesse final de semana tem Chá das princesas no Espaço Bagunça ', 'capa_evento20200310211321.jpeg', 3, '2020-03-10 21:13:21', 0, '0000-00-00 00:00:00'),
(44, 'Chá das Princesas', '2020-03-08', '2020-03-08', '', '15:00', '17:00', 'Espaço Bagunça', '', 0, 0, 0, 1, 'Nesse final de semana tem Chá das princesas no Espaço Bagunça ', 'capa_evento20200310211453.jpeg', 3, '2020-03-10 21:14:53', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(9) NOT NULL,
  `titulo_banner` text COLLATE utf8_unicode_ci NOT NULL,
  `img_banner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url_banner` text COLLATE utf8_unicode_ci NOT NULL,
  `ordem_banner` int(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `banners`
--

INSERT INTO `banners` (`id_banner`, `titulo_banner`, `img_banner`, `url_banner`, `ordem_banner`) VALUES
(179, '', 'banner02072020060706.jpeg', '', 0),
(178, '', 'banner09062020055556.jpeg', '', 0),
(177, '', 'banner16032020111457.jpg', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(11) NOT NULL,
  `cpf_cli` varchar(14) NOT NULL,
  `nome_cli` varchar(50) NOT NULL,
  `parentesco_cli` varchar(1) NOT NULL,
  `nasc_cli` date NOT NULL,
  `fixo_cli` varchar(15) NOT NULL,
  `cel_cli` varchar(16) NOT NULL,
  `email_cli` varchar(50) NOT NULL,
  `cep_cli` varchar(15) NOT NULL,
  `rua_cli` varchar(50) NOT NULL,
  `num_cli` varchar(5) NOT NULL,
  `cidade_cli` varchar(50) NOT NULL,
  `bairro_cli` varchar(50) NOT NULL,
  `estado_cli` varchar(2) NOT NULL,
  `comp_cli` varchar(50) NOT NULL,
  `login_cli` varchar(16) NOT NULL,
  `pass_cli` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `alter_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cli`, `cpf_cli`, `nome_cli`, `parentesco_cli`, `nasc_cli`, `fixo_cli`, `cel_cli`, `email_cli`, `cep_cli`, `rua_cli`, `num_cli`, `cidade_cli`, `bairro_cli`, `estado_cli`, `comp_cli`, `login_cli`, `pass_cli`, `create_datetime`, `alter_datetime`) VALUES
(1, '023.486.491-52', 'Raphael Augusto Almeida Pereira', 'P', '1989-06-08', '', '(61) 98221-6572', 'raphael.a.a.p@gmail.com', '71.919-180', 'Rua 36 Norte', '36', 'Brasília', 'Norte (águas claras)', 'DF', 'Lote 3350 Bloco F', 'raphael', 'af79a8227f6f020dac98afce2a06d061', '2019-09-28 11:23:10', '2019-10-23 20:48:18'),
(14, '960.182.831-15', 'Robson De Oliveira Lima', 'P', '1969-12-31', '', '(61) 99265-0896', 'rolcatecumeno@gmail.com', '72.725-402', 'Quadra 4 Conjunto B', '5', 'Brasília', 'Veredas (Brazlândia)', 'DF', '', 'rolcatecumeno', 'd41d8cd98f00b204e9800998ecf8427e', '2019-10-23 17:36:34', '2019-11-10 18:21:31'),
(15, '705.862.681-20', 'ALINE CHRISTIANNE SILVA VARGAS', 'M', '1982-07-07', '(61) 3541-1025', '(61) 99294-2122', 'enilac.vargas@gmail.com', '71.010-016', 'QE 8 Conjunto A, 04', '', 'Brasilia', 'Guará I', 'Df', '4', 'Aline.vargas', 'dc1d11303ccca3c587d5077823e7c103', '2019-10-23 17:54:46', '0000-00-00 00:00:00'),
(16, '008.114.051-76', 'Mariana rodrigues coelho netto', 'M', '1986-09-11', '', '(61) 99831-1328', 'nana.rdg@gmail.com', '71930-750', 'Quadra 209Q lote 08 bloco A apt', '1301', 'Brasília', 'Sul (Águas Claras)', 'DF', '', 'Malu', '922d2be07c7d7b984d8a1dedabe03969', '2019-10-23 18:02:18', '0000-00-00 00:00:00'),
(17, '892.201.531-49', 'Juliana Matos Peres', 'M', '1981-06-04', '(61) 3034-8580', '(61) 99983-8843', 'ju.matos@globo.com', '71937-000', 'Rua 4', '', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Lote 07 bloco a apt 203', 'Ju.matos', 'bbcbad280e1bd8a20dd0e6c834a1abc4', '2019-10-23 18:10:39', '0000-00-00 00:00:00'),
(18, '249.931.018-99', 'Karina m b oliveira', 'M', '1977-12-02', '', '(61) 99971-0494', 'Karinamomesso@hotmail.com', '73.752-021', 'Q 01 mr 08', '23', 'Planaltina de goias', 'S leste', 'Go', '', 'Karina', 'aed0c5f78dc4c2b1e42e36730fd52bf1', '2019-10-23 18:19:01', '0000-00-00 00:00:00'),
(19, '037.437.617-42', 'Cristiano Ricardo vaz de melo', 'P', '1975-01-10', '', '(62) 99989-4298', 'crisrvmelo@gmail.com', '70686-715', 'SQNW 111 Bloco C', '510', 'Brasília', 'Setor Noroeste', 'DF', 'Apartamento', 'crisrvmelo@gmail', '60ff0d50df5f2d33f5de924e5ba7765b', '2019-10-23 18:19:03', '0000-00-00 00:00:00'),
(20, '873.496.471-15', 'Clarissa de Castro Mendonca', 'M', '1969-12-31', '(61) 9882-1608', '(61) 99882-1608', 'clarissadecastro@gmail.com', '71907-270', 'Rua Manacá', '03', 'Brasília', 'Norte (Águas Claras)', 'DF', 'Ed Real Paris torre A apt 1001', 'clarissadecastro', '19c037a2fec81dc7171506da0ac94cea', '2019-10-23 18:45:35', '0000-00-00 00:00:00'),
(21, '720.922.891-87', 'Daniele dos Santos de Oliveira', 'M', '1969-12-31', '(61) 3385-3752', '(61) 98403-6421', 'danids82@yahoo.com.br', '71917-720', 'Rua 28 norte lote 4 AP 1302 A Ed Via Paradiso, 130', '4', 'Brasilia', 'Norte (Águas Claras)', 'DF', 'Via Paradiso', 'danids82@yahoo.c', '27db49de3aac5b8f36bcac3e73df1b14', '2019-10-23 19:02:54', '0000-00-00 00:00:00'),
(22, '920.503.011-20', 'Karina Cestari', 'M', '1980-11-01', '(61) 3386-6584', '(61) 99655-2808', 'karinamcestari@outlook.com', '71745-501', 'SMPW Quadra 25 Conjunto 1', '', 'Brasília', 'Setor de Mansões Park Way', 'DF', '', 'Karinamcestari', '8f5c853566391602f1a56b305e1d9cd5', '2019-10-23 19:04:35', '0000-00-00 00:00:00'),
(23, '028.968.541-93', 'Jackeline Frotas', 'M', '1990-08-01', '', '(61) 98260-5440', 'jackfrotas@hotmail.com', '71967-000', 'QS 7 Rua 200', '', 'Brasília', 'Areal (Águas Claras)', 'DF', '', 'jackfrotas', '16e258d736598a0700eb4a6e9f01ef62', '2019-10-23 19:28:20', '0000-00-00 00:00:00'),
(24, '109.195.567-01', 'Karine Dias', 'M', '1984-12-05', '(61) 3547-2846', '(61) 98313-3638', 'ninemarone@gmail.com', '71919-180', 'Rua 36 Norte', '3350', 'Brasília', 'Norte (Águas Claras)', 'DF', 'Cond top life bl i 1102', 'kadias84', 'e1544e1f011a20ff9dbe767ef27ecfb3', '2019-10-23 19:37:38', '0000-00-00 00:00:00'),
(25, '342.607.098-79', 'Ana Paula Batista de Oliveira', 'M', '1986-07-06', '(61) 3547-2199', '(61) 99635-2199', 'apb.deoliveira@gmail.com', '71925-000', 'Quadra 205, Lote 3', '', 'BRASÍLIA', 'Sul (Águas Claras)', 'DF', 'Apartamento 403 B', 'apb.deoliveira@g', '1709480dbb9ceafdd018259b5fed4d74', '2019-10-23 19:38:15', '0000-00-00 00:00:00'),
(26, '314.777.918-17', 'Adriano de Oliveira', 'P', '1982-08-06', '(61) 3547-2199', '(61) 99255-8552', 'adriano.sesdf@gmail.com', '71925-000', 'Quadra 205', '', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Apartamento 403 B', '31477791817', '1709480dbb9ceafdd018259b5fed4d74', '2019-10-23 19:42:49', '0000-00-00 00:00:00'),
(27, '711.725.721-00', 'Fernanda Baptista Alves', 'M', '1983-02-04', '(61) 3597-4528', '(61) 98428-8118', 'fernandaalves.agilita@gmail.com', '72006-795', 'Rua 8 Chácara 192 casa', '44', 'Brasília', 'Setor Habitacional Vicente Pires', 'DF', '', 'fernanda.alves', '2fcd67a0fa96859d81bef057ef325371', '2019-10-24 14:21:27', '0000-00-00 00:00:00'),
(28, '726.698.101-87', 'Cintia Lago de Souza Mattos', 'M', '1982-11-06', '', '(61) 98636-9522', 'e.celebrarvalparaiso@gmail.com', '72870-108', 'Quadra 8', '27', 'Valparaíso de Goiás', 'Valparaiso II', 'GO', '', '111', '698d51a19d8a121ce581499d7b701668', '2019-10-25 15:13:20', '0000-00-00 00:00:00'),
(29, '052.281.188-64', 'Vanessa Datrino', 'M', '1969-12-31', '', '(61) 99296-5933', 'vanessadatrino@gmail.com', '71.936-540', 'Quadra 204, lote 7, apto 1404', '', 'Aguas Claras', '', 'DF', '', 'vdatrino', '899f41c9880a8040d4b35d6bae59591a', '2019-10-25 20:57:18', '0000-00-00 00:00:00'),
(30, '008.334.411-08', 'Michelle Nunes do Amaral Lopes', 'M', '1969-12-31', '(61) 3544-3850', '(61) 98102-6956', 'Nunesdoamaral@gmail.com', '70673-311', 'SQSW 303 Bloco K', '', 'Brasília', 'Setor Sudoeste', 'DF', '', 'Stellaenzo', 'ecc0d3f35b669854cd98a84283209b54', '2019-10-25 22:42:48', '0000-00-00 00:00:00'),
(31, '695.683.321-20', 'Sorella contente jacomo', 'M', '1981-04-12', '', '(61) 98114-6529', 'sorellacontente@gmail.com', '71630-045', 'SHIS QL 10 Conjunto 4', '16', 'Brasília', 'Setor de Habitações Individuais Sul', 'DF', '', 'sorellacontente', '4e9a8a80593aa4d9902705a9cad3fc8d', '2019-10-25 22:48:04', '0000-00-00 00:00:00'),
(32, '658.322.051-20', 'Elizete Nogueira Rebouças Carvalho', 'M', '1976-03-12', '', '(61) 98437-3767', 'reboucascontabilidade@hormail.com', '71919-360', 'Rua 37 Norte Lote', '01', 'Brasília', 'Norte (Águas Claras)', 'DF', 'RESIDENCIAL CÉZANNE', 'Geovanna', '9d3af8f71ea0005ed9c009b1a857982b', '2019-10-26 01:22:53', '0000-00-00 00:00:00'),
(33, '700.166.741-20', 'Erika Alves Rodrigues', 'M', '1969-12-31', '', '(61) 98223-2461', 'erykkah23@hotmail.com', '72155-613', 'QNL 6 Bloco C', '', 'Brasília', 'Taguatinga Norte (Taguatinga)', 'DF', '208 apartamento', 'maedahemily', '6bccf1eee30fafee1c0a1ce888d4da68', '2019-10-26 08:26:08', '0000-00-00 00:00:00'),
(34, '380.980.241-72', 'Geovani da Silva Carvalho', 'P', '1969-12-31', '', '(61) 98437-8134', 'combatente.geo@hotmail.com', '71.919-360', 'Rua 37 Norte lote', '1', 'Brasília', 'Norte (Águas Claras)', 'DF', 'RESIDENCIAL CEZANNE', 'Filha', '9d3af8f71ea0005ed9c009b1a857982b', '2019-10-26 14:22:34', '0000-00-00 00:00:00'),
(35, '006.838.931-06', 'Bruna Lima Araujo', 'M', '1983-06-05', '', '(61) 99552-9942', 'brunalaraujo@gmail.com', '71.050-093', 'QE 19 Conjunto I', '', 'Brasília', 'Guará II', 'DF', '', 'brunalaraujo', 'd41d8cd98f00b204e9800998ecf8427e', '2019-10-28 19:05:04', '2019-10-28 19:08:59'),
(36, '056.781.351-71', 'Priscila Muniz Ribeiro', 'M', '1969-12-31', '(61) 9916-8638', '(61) 99168-6384', 'Pm346863@gmail.com', '70.655-692', 'SHCES Quadra 609 Bloco B', '304', 'Brasília', 'Cruzeiro Novo', 'DF', '', 'Priscila', 'd41d8cd98f00b204e9800998ecf8427e', '2019-10-28 19:07:42', '2019-10-28 19:13:21'),
(37, '724.450.841-72', 'Aline neiva', '', '1969-12-31', '', '(61) 99237-0802', 'ninemelca@gmail.com', '71937-720', 'Quadra 202', '803', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Sinfonia', 'ninemelca@gmail.', '2662080fb289bcaafd930f1112df9529', '2019-10-28 19:10:24', '0000-00-00 00:00:00'),
(38, '258.664.418-29', 'Érica Soares Pinto Vaccarini', 'M', '1976-07-10', '', '(61) 98326-0235', 'jlvaccarini@hotmail.com', '71936-250', 'Avenida das Araucárias', '', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Apt1304 B', 'rafagabi', '0c9ebb2ded806d7ffda75cd0b95eb70c', '2019-10-28 19:15:40', '0000-00-00 00:00:00'),
(39, '314.453.208-86', 'Thais teixeira', 'M', '1969-12-31', '', '(61) 98174-7119', 'Thaisagav@gmail.com', '71930-000', 'Avenida Parque Águas Claras', '3825', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Ap508', 'Thaisagav', '06e0cc57ec7ffdc7f8b928516fa9aa40', '2019-10-28 22:00:52', '0000-00-00 00:00:00'),
(40, '034.648.331-00', 'Diego Vieira dos Santos', 'P', '1991-01-09', '', '(61) 99436-9647', 'diegoviiieira@gmail.com', '71070-505', 'Rua 5 (Pólo de Modas)', '5', 'Brasília', 'Guará II', 'DF', 'Apartamento', 'diegoviiieira@gm', 'f49086d7ad95d478a37df7b43a05bc0a', '2019-10-29 01:15:14', '0000-00-00 00:00:00'),
(41, '049.248.906-85', 'Juliana Teixeira Werneck', '', '1969-12-31', '(61) 3797-8849', '(61) 98422-8456', 'julianametalmed@yahoo.com.br', '71925-000', 'Quadra 205', '1501', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Bloco c, lote 3', 'juliana', '08a19c001d6a8eaa61a3484ec3b9a9f6', '2019-10-29 11:00:49', '0000-00-00 00:00:00'),
(42, '829.066.531-87', 'VALÉRIA MARIA COSTA NUNES', 'M', '1969-12-31', '(61) 8111-0464', '(61) 98111-0464', 'valeryapsi@gmail.com', '71070-662', 'Área Especial 2 Módulo F', '', 'Brasília', 'Guará II', 'DF', '', 'valeryapsi@gmail', '71d21b6e001323b1df5dbfc597e0ec7a', '2019-10-29 11:38:20', '0000-00-00 00:00:00'),
(43, '315.764.508-05', 'Giovana Garofalo', 'M', '1985-09-01', '', '(61) 98131-9436', 'garofalo.giovana@gmail.com', '71916-750', 'Rua 24 Norte', '9', 'Brasília', 'Norte (Águas Claras)', 'DF', 'Apt 1903b', 'garofalo.giovana', '032a01d83345f23883c98c540ff32fe7', '2019-10-29 11:58:54', '0000-00-00 00:00:00'),
(44, '050.476.046-75', 'Isabel Cristina Garcia', 'M', '1982-04-05', '', '(61) 99265-9510', 'isabelcsgarcia@hotmail.com', '71939-000', 'Rua 12 sul - lote5/7, Bloco A - ap 1203', '1203', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Residencial Sonho Verde', 'isabelcsgarcia@h', 'b9688be72205a9c53468052a042949bb', '2019-10-29 12:01:11', '0000-00-00 00:00:00'),
(45, '931.804.201-97', 'Fabiana Cavalcante Alcantara', 'M', '1969-12-31', '(61) 3315-3519', '(61) 98107-0870', 'fcalcantara@hotmail.com', '71680-601', 'Condomínio Residencial Mônaco Quadra 15 casa 18', '', 'Brasília', 'Setor Habitacional Jardim Botânico (Lago Sul)', 'DF', '', 'Fcalcantara', '89348f2ccb8dc9f8395cd0cc6b9bb4a6', '2019-10-29 20:32:29', '0000-00-00 00:00:00'),
(46, '778.192.331-68', 'Ana Paula dos Santos Souza', 'M', '1975-06-08', '(61) 9607-5776', '(61) 99607-5776', 'ana.paula@pcdf.df.gov.br', '72.001-880', 'Cas chac. 153 a lote 21', '', 'Brasília', 'SETOR HABITACIONAL SAMAMBAIA (VICENTE PIRES)', 'DF', 'Vicente Pires', 'anapaula1@oi.com', 'fad2821e30449b8c6086c71b351f575a', '2019-10-29 20:32:48', '0000-00-00 00:00:00'),
(47, '988.752.481-68', 'Aline Vicente De Carvalho', 'M', '1969-12-31', '', '(61) 98526-0876', 'linevicente@gmail.com', '71735-501', 'SMPW Quadra 5 Conjunto 1', '', 'Brasília', 'Setor de Mansões Park Way', 'DF', '', 'linevicente@gmai', '5123e393370ac97bd174b210856dca8a', '2019-10-29 20:36:20', '0000-00-00 00:00:00'),
(48, '952.263.031-49', 'Janaína Simões antonio', 'M', '1969-12-31', '', '(61) 98300-8827', 'Ninasimoes@hotmail.com', '71938-540', 'Rua das Pitangueiras', '10', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Apto 1207', 'Ninafono', '9e57981dc928eaeb67dbd88152ffb6a3', '2019-10-29 20:54:27', '0000-00-00 00:00:00'),
(49, '723.460.941-53', 'Emanuela Dantas de Araujo', 'M', '1969-12-31', '', '(61) 98133-5845', 'alinebdaraujo', '71995-265', 'SHA Conjunto 5 Chácara 41', '4', 'Brasília', 'Setor Habitacional Arniqueira (Águas Claras)', 'DF', '', 'AlineManu', 'c4d6c86eb967c24c197d54dae1595bd3', '2019-10-29 20:54:28', '0000-00-00 00:00:00'),
(50, '821.157.451-91', 'Fernanda Ribeiro Gonçalves Ferreira', 'M', '1969-12-31', '(99) 3198-011', '(61) 99319-8011', 'nandargf@hotmail.com', '71925-180', 'Quadra 206', '', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Lote 5 apto 803', 'nandargf', 'a7cd496d55c97e115def766f92262bc9', '2019-10-29 21:02:39', '0000-00-00 00:00:00'),
(51, '811.894.276-72', 'Jacqueline Torres', 'M', '1974-10-07', '(61) 9862-6528', '(61) 98626-5282', 'jacquelinedftorres@gmail.com', '71939-540', 'Quadra 204', '', 'Brasília', 'Sul (Águas Claras)', 'DF', '103B', 'Jacquelinedft', 'ca94ddc42940d4d3bb7016a00bfa69f1', '2019-10-29 21:59:44', '0000-00-00 00:00:00'),
(52, '954.732.030-00', 'Anie Rampon Barretto', 'M', '1969-12-31', '(61) 9699-1920', '(61) 98185-0185', 'anierampon@hotmail.com', '70673-207', 'SQSW 302 Bloco G', '406', 'Brasília', 'Setor Sudoeste', 'DF', '', 'anierampon', 'f6a8dee1a93f993dd52fb00c4d38f28b', '2019-10-29 22:04:44', '0000-00-00 00:00:00'),
(53, '033.837.561-90', 'Amanda Hernandes Galdino Chrisostomo', 'M', '1969-12-31', '(61) 3552-1013', '(61) 98556-9413', 'amandacartoriobrasilia@gmail.com', '71710-019', 'Avenida Central Bloco 1025', '11', 'Brasília', 'Núcleo Bandeirante', 'DF', '', 'Alice Hernandes', '2e033e82794e11fea8b2a046f79631eb', '2019-10-29 22:28:02', '0000-00-00 00:00:00'),
(54, '029.979.231-58', 'Ila Thaina Cruvinel Goncalves', 'M', '1969-12-31', '', '(61) 99423-7846', 'ilatcruvinel@gmail.com', '71065-330', 'QI 33', '', 'Brasília', 'Guará II', 'DF', 'Lote 05', 'ilatcruvinel', 'fcea920f7412b5da7be0cf42b8c93759', '2019-10-29 22:31:49', '0000-00-00 00:00:00'),
(55, '708.436.031-68', 'Valéria Cristina Brito dos Santos', 'M', '1969-12-31', '(30) 5399-56', '(99) 14603-91', 'valery.brito2@gmail.com', '71936-250', 'Avenida das Araucárias', '4790', 'Brasília', 'Sul (Águas Claras)', 'DF', 'Bl. B Apt. 2803', 'valery.brito2@gm', '43e3d2d8549397284916972bf225348d', '2019-10-29 22:34:20', '0000-00-00 00:00:00'),
(56, '002.115.761-82', 'Marcia Melo', 'M', '1985-04-09', '', '(61) 98102-2396', 'marcia.martins.mello@gmail.com', '71909-720', 'Rua 13 Norte', '1504', 'Brasília', 'Norte (Águas Claras)', 'DF', 'Citta', 'Duda', '58ade605aea97d8470b9c3ff84879017', '2019-10-29 22:41:22', '0000-00-00 00:00:00'),
(57, '017.642.641-85', 'Katiane godois', 'M', '1969-12-31', '', '(61) 99613-4284', 'Katianegodois@hotmail.com', '71920-010', 'Alameda dos Eucaliptos Quadra 107', '', 'Brasília', 'Norte (Águas Claras)', 'DF', '', 'Katianegodois', 'bbc6e6dc38fbc1b0bcbecd548e091dc9', '2019-10-30 07:14:13', '0000-00-00 00:00:00'),
(58, '017.348.161-20', 'Sumaya Thamires Soares Mickievicz', 'M', '1969-12-31', '', '(61) 99635-7784', 'sumaya.thamires@gmail.com', '71908-180', 'Rua 7 Norte', '01', 'Brasília', 'Norte (Águas Claras)', 'DF', '', 'sumaya.thamires', '06689939138843f0440a8b28132f6f54', '2019-10-30 08:54:55', '0000-00-00 00:00:00'),
(59, '042.843.651-00', 'Luana Sthefane Soares rosa', 'M', '1969-12-31', '', '(61) 98252-2293', 'Luanasthefane@gmail.com', '72.300-635', 'Quadra 302 conjunto 03 lote 4/11 Apt 1209', '1209', 'Brasília', 'Samambaia Sul', '', '', 'Luanasoares', '2e03e2fe96219f63a47ac8537a519927', '2019-10-30 08:57:20', '0000-00-00 00:00:00'),
(60, '864.124.501-49', 'Viviane Alves Carmo Aguiar', 'M', '1969-12-31', '', '(61) 98221-4302', 'didicarmo@hotmail.com', '70650-356', 'SHCES Quadra 305 Bloco F', '305', 'Brasília', 'Cruzeiro Novo', 'DF', 'Entrada C', 'didicarmo', '0ce5c0a4d3b2b72cc19cfdca678fd3c4', '2019-10-30 18:42:31', '0000-00-00 00:00:00'),
(61, '866.072.001-68', 'KAYTA CRISTHINE OLIVEIRA ROCHA LIMA', 'M', '1969-12-31', '(61) 9146-4707', '(61) 91464-707', 'kayta.lima@gmail.com', '71906-500', 'Avenida Parque Águas Claras', '1015', 'Brasília', 'Norte (Águas Claras)', 'DF', 'Apto 801A', 'kayta', 'f75a57fc12770e7e6d3bc3f2c5e6fd41', '2019-10-31 19:21:05', '0000-00-00 00:00:00'),
(62, '225.567.371-15', 'Maria do Carmo Nascimento', 'O', '2019-10-05', '(61) 9911-5368', '(61) 99115-3680', 'carminhanmendes@gmail.com', '71925-180', 'Quadra 206', '', 'Brasília', 'Sul (Águas Claras)', 'DF', '', 'carminhanmendes@', '46084800904db92d3c4a9d3fca2e5ff4', '2019-12-02 17:50:20', '0000-00-00 00:00:00'),
(63, '094.546.347-20', 'Flavia de Carvalho Antunes Vieira Ribeiro', 'M', '1982-05-05', '(61) 3568-3727', '(61) 98516-1514', 'flaviafisiobr@gmail.com', '71925-720', 'Rua 22', '504', 'Brasília', 'Sul (Águas Claras)', 'DF', '', 'flavia', 'a43b0afcaa52c5961b5b3962e83a87b6', '2019-12-02 21:12:06', '0000-00-00 00:00:00'),
(64, '730.224.031-00', 'Thiago de andrade vieira', 'P', '1969-12-31', '', '(61) 99116-9535', 'Pribebecristian@gmail.com', '72.135-030', 'QI 3', '315', 'Brasília', 'Setor Industrial (Taguatinga)', 'DF', 'Residencial altos de taguatinga II', 'pribebecristian', 'c6b573b737d59db113cd9dbe3a7952ba', '2019-12-03 09:34:07', '2019-12-03 09:35:40'),
(65, '832.678.241-68', 'SIMONE RAQUEL MOREIRA GOMES SOARES', 'M', '1977-01-05', '(61) 2192-9900', '(61) 99925-4012', 'sgomes.br@infraero.gov.br ou sgomes.2012@gmail.com', '72.005-261', 'Rua 1 Chácara 25', '9', 'Vicente Pires', 'Setor Habitacional Vicente Pires', 'DF', 'Quadra b Lote 9a - Residencial Lima dos Campos', 'SIMONE RAQUEL', 'c89a0dc9b6ed9b158c45370da7600c62', '2019-12-03 10:05:30', '2019-12-03 10:06:01'),
(66, '012.483.146-03', 'Graciela Maria de Noronha Oliveira', 'M', '1969-12-31', '(61) 3403-2105', '(61) 98193-6496', 'gracielaoliveira80@gmail.com', '72007-350', 'Rua 10 Chácara 170', '170', 'Brasília', 'Setor Habitacional Vicente Pires', 'DF', 'Casa 09', '01248314603', '835e2ae101a8a207b70746a0a0f4518c', '2019-12-03 10:17:06', '0000-00-00 00:00:00'),
(67, '898.442.201-06', 'MARIANA MOURA DE ALMEIDA VILAR', 'M', '1969-12-31', '(61) 3562-1694', '(61) 99800-4300', 'eaglepublicitydf@gmail.com', '72001-600', 'Chácara 05', '', 'Brasília', 'Setor Habitacional Samambaia (Vicente Pires)', 'DF', 'RUA 4C CHACARA 05 LOTE 09', 'mariana', '985dee47a18357c4b55189cd3324b2a2', '2019-12-03 10:31:26', '0000-00-00 00:00:00'),
(68, '805.118.301-06', 'Núbia Pereira de Araújo', 'M', '1978-09-05', '', '(61) 99273-8384', 'nubia.nutri@gmail.com', '72215-017', 'QNM 1 Conjunto G', '43', 'Brasília', 'Ceilândia Sul (Ceilândia)', 'DF', '', 'Nubianpa', '855d84766c603a17fd44c1560e8a7c90', '2019-12-05 14:59:51', '0000-00-00 00:00:00'),
(69, '727.851.601-34', 'Adelaide Maria Madureira Feliciano Malafatti', 'M', '1969-12-31', '(61) 3264-1226', '(61) 98127-2088', 'adelaidemalafatti@gmail.com', '72.001-535', 'Avenida da Misericórdia chácara 56 lote 04', '56', 'Vicente Pires', 'Vicente Pires', 'DF', 'Condomínio Vila Real', 'adelaidemalafatt', 'b96e9317bacce455f3be124409e3d5b1', '2019-12-08 15:58:44', '0000-00-00 00:00:00'),
(70, '981.023.201-25', 'Maria Sales', 'M', '1969-12-31', '(61) 8195-5879', '(61) 98195-5879', 'sales.ma@gmail.com', '71.906-500', 'Avenida Parque Águas 3885', '504', 'Brasília', 'Águas Claras', 'DF', '', 'Mariasales', 'f0867ca64c9dae5a8d169429f4acd808', '2019-12-14 11:59:24', '0000-00-00 00:00:00'),
(71, '002.345.021-50', 'Virginia Mayra Ribeiro Seabra', 'M', '1969-12-31', '', '(61) 99202-1653', 'vickmayra07@gmail.com', '72.015-035', 'CSA 3 lt 17 apt 404', '404', 'Brasília', 'Taguatinga sul', 'Df', '', 'Vitor', 'b513b18399e3ce665e85b1c74a93ee89', '2019-12-17 14:04:15', '0000-00-00 00:00:00'),
(72, '047.621.387-89', 'Ligia souza brandao', 'M', '1969-12-31', '(21) 9820-0088', '(21) 98200-0886', 'Ligiabrandao@yahoo.com.br', '70.757-040', '', '', '', '', '', '', 'Ligiabrandao', 'd41d8cd98f00b204e9800998ecf8427e', '2020-02-09 12:45:15', '2020-02-09 12:45:49'),
(73, '025.051.021-98', 'Alessandra Soares Marques Pacheco', 'M', '1991-09-10', '(61) 3468-4762', '(61) 98566-6614', 'psicologaalessandrasoares@gmail.com', '71.015-650', 'QSB 15 lote 09', '9', 'Brasilia', 'Taguatinga', 'DF', '', 'psicologaalessan', '386749967c5ac42b22fe2a5a7e8cc559', '2020-03-05 21:00:28', '0000-00-00 00:00:00'),
(74, '006.015.641-46', 'Polyana de Souza Alcantara', 'M', '1985-07-04', '(61) 9978-4143', '(61) 99784-143', 'polyalc@ig.com.br', '71.218-010', 'Smas trecho 1 lote C Bloco C', '702', 'Brasília', 'Zona industrial guara', 'DF', 'Bloco C', 'Polyalc', '37a607b738db8c1ffac11c57c7ff7f3d', '2020-03-14 18:32:49', '0000-00-00 00:00:00'),
(75, '710.722.921-49', 'Lysbeth Lopes Moura', 'M', '1969-12-31', '', '(61) 98112-6777', 'Lysbethmoura@yahoo.com.br', '71.065-310', '', '2', 'BRASILIA', 'Guará II', 'DF', 'Ed Jardins Life BL 4 AP 502', 'lysbethmoura@yah', 'c91246d903e3143ce9c7707bb65e862a', '2020-08-27 17:15:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes_vips`
--

CREATE TABLE `clientes_vips` (
  `id_cliente_vip` int(11) NOT NULL,
  `titulo_cliente_vip` varchar(300) DEFAULT NULL,
  `img_cliente_vip` varchar(300) DEFAULT NULL,
  `url_cliente_vip` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaborador`
--

CREATE TABLE `colaborador` (
  `id_colab` int(9) NOT NULL,
  `nome_colab` varchar(50) NOT NULL,
  `funcao_colab` varchar(30) NOT NULL,
  `nasc_colab` date NOT NULL,
  `end_colab` text NOT NULL,
  `fixo_colab` varchar(15) NOT NULL,
  `cel_colab` varchar(16) NOT NULL,
  `email_colab` varchar(50) NOT NULL,
  `obs_colab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `crianca_evento`
--

CREATE TABLE `crianca_evento` (
  `id_crianca` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `nome_crianca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `tea` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `restricao_alimentar` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_restricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `send_email` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `crianca_evento`
--

INSERT INTO `crianca_evento` (`id_crianca`, `id_cliente`, `id_evento`, `nome_crianca`, `nascimento`, `tea`, `restricao_alimentar`, `tipo_restricao`, `send_email`) VALUES
(23, 22, 20, 'Valentina', '2016-03-17', '', '', '', 1),
(22, 22, 20, 'Katarina', '2012-01-17', 'N', 'N', '', 1),
(21, 18, 19, 'Pedro Momesso Bueno de Oliveira', '2014-07-05', 'N', 'N', '', 1),
(20, 17, 19, 'Valentina Peres Gomes', '2015-11-10', 'N', 'N', '', 1),
(19, 16, 21, 'Maria Luiza Rodrigues Coelho netto', '2014-09-09', 'N', 'N', '', 1),
(18, 15, 20, 'Heloísa Silva Vargas', '2015-01-21', 'N', 'N', '', 1),
(17, 14, 20, 'Vicente da Cruz Lima', '2019-03-06', '', 'S', 'Leite', 1),
(16, 14, 20, 'Mariana da Cruz Lima', '2013-11-09', '', '', '', 1),
(24, 23, 19, 'Arthur Frotas', '2012-06-15', 'N', 'N', '', 1),
(42, 29, 19, 'Benjamim Lucca', '2014-08-27', '', '', '', 1),
(43, 29, 19, 'Samuel Honório', '2011-12-01', '', '', '', 1),
(28, 24, 20, 'Gabrielle de Figueiredo Silva Dias', '2014-09-27', '', '', '', 1),
(29, 24, 20, 'Isabelle de Figueiredo Silva dias', '2011-11-22', 'N', 'N', '', 1),
(30, 24, 20, 'Jared de Figueiredo Silva Dias ', '2013-07-16', '', '', '', 1),
(32, 26, 20, 'Samuel Mandela Batista de Oliveira', '2013-10-23', 'N', 'S', '', 1),
(33, 26, 20, 'Ana Luiza Batista de Oliveira', '2015-03-10', '', '', '', 1),
(34, 26, 20, 'Miguel Martin Batista de Oliveira', '2016-10-16', '', '', 'APLV', 1),
(41, 29, 19, 'Theo Lucca', '2013-02-05', 'N', 'N', '', 1),
(40, 28, 20, 'Letícia Lago Fontes', '2014-05-17', '', '', '', 1),
(39, 28, 20, 'Luiza Lago Mattos', '2007-05-11', 'N', 'N', '', 1),
(35, 1, 21, 'Pedro Almeida Pereira Sá', '2015-07-18', 'N', 'N', '', 1),
(36, 27, 21, 'Maria Luiza Baptista Alves Ferreira', '2012-05-22', 'N', 'N', '', 1),
(37, 27, 21, 'Laura Baptista Alves Ferreira', '2014-03-17', '', '', '', 1),
(38, 27, 21, 'Isadora Baptista Alves Ferreira', '2016-09-15', '', '', '', 1),
(44, 30, 21, 'Stella Lopes', '2013-03-22', '', 'N', '', 1),
(45, 30, 21, 'Enzo Lopes', '2015-10-19', '', '', '', 1),
(46, 30, 21, 'Bianca Marinho', '2008-05-30', '', '', '', 1),
(47, 31, 20, 'Valentina Jacomo jacobi', '2013-10-07', 'N', 'N', '', 1),
(48, 33, 20, 'Hemily Alves Soares Rodrigues', '2015-06-18', 'N', 'N', '', 1),
(49, 29, 20, 'Rafael Lucca', '2008-01-26', 'N', 'N', '', 1),
(50, 29, 20, 'Theo Lucca ', '2013-02-05', '', '', '', 1),
(51, 29, 20, 'Benjamim Lucca', '2013-08-27', '', '', '', 1),
(52, 29, 20, 'Samuel Honório', '2011-12-01', '', '', '', 1),
(53, 32, 20, 'Geovanna Carvalho Reboucas', '0000-00-00', 'N', 'N', '', 1),
(54, 32, 20, '', '0000-00-00', '', '', '', 1),
(55, 32, 20, 'Rebeca Rebouças Resende', '0000-00-00', 'N', 'N', '', 1),
(56, 34, 24, 'Geovanna Carvalho Reboucas', '0000-00-00', 'N', 'N', '', 1),
(57, 34, 24, 'Rebeca Rebouças Carvalho', '0000-00-00', '', '', '', 1),
(58, 23, 19, 'Arthur Frotas', '2012-06-15', 'N', 'N', '', 1),
(59, 35, 20, 'Elisa Goulart Lima de Araujo', '2016-06-22', 'N', 'N', '', 1),
(60, 36, 19, 'Vitória Muniz de faria ', '2017-06-07', 'N', 'N', '', 1),
(61, 36, 19, 'Davi Morais camilo ', '2013-08-26', '', '', '', 1),
(62, 36, 19, 'Laura Carvalho ', '2015-04-22', '', '', '', 1),
(63, 38, 19, 'Gabriela Vaccarini', '0000-00-00', 'N', 'N', '', 1),
(64, 38, 19, 'Rafael Luís Vaccarini', '0000-00-00', '', '', '', 1),
(65, 39, 20, 'Rodrigo Marçal teixeira', '2013-03-28', 'N', 'N', '', 1),
(66, 39, 20, 'Beatriz Marçal teixeira', '2016-09-02', '', '', '', 1),
(67, 41, 21, 'Luíza Teixeira Werneck', '2012-07-06', 'N', 'N', '', 1),
(68, 41, 21, 'Alice Teixeira Werneck', '2015-02-23', '', '', '', 1),
(69, 43, 22, 'Joana Garofalo Martins ', '2013-01-30', 'N', 'S', 'amendoim, amêndoas, nozes, castanhas', 1),
(70, 44, 22, 'Julia Monserrat Garcia', '2013-04-13', 'N', 'N', '', 1),
(71, 42, 23, 'Sofia Maria Costa Nunes ', '2013-04-21', 'N', 'N', '', 1),
(72, 45, 22, 'Manuela Cavalcante Aquino', '3015-08-28', 'N', 'S', '', 1),
(73, 45, 22, 'Arthur Cavalcante Aquino', '2017-04-07', '', '', '', 1),
(74, 45, 22, 'Camila Vinagre Alcantara', '2015-09-11', '', '', '', 1),
(75, 47, 22, 'Ester Vicente Machado ', '2013-07-16', 'N', 'S', 'Ovo, mas pode bolo sem chantily', 1),
(76, 47, 22, 'Rafaela Vicente De Carvalho Araquan', '2015-06-18', '', '', '', 1),
(77, 47, 22, 'Arthur Vicente De Carvalho Araquan', '2012-08-10', '', '', '', 1),
(78, 48, 23, 'Eduarda Simões Tavares', '2014-06-27', 'N', 'N', '', 1),
(79, 49, 24, 'Emanuela Dantas de Araújo ', '2013-12-19', '', '', '', 1),
(80, 50, 24, 'Amanda Ribeiro Gonçalves Ferreira ', '2010-05-10', 'N', 'N', '', 1),
(81, 51, 24, 'MariaTeresa Pires ', '2012-05-15', 'N', 'N', '', 1),
(82, 51, 24, '', '0000-00-00', '', '', '', 1),
(83, 52, 23, 'Isabela Rampon Barretto ', '2015-08-21', 'N', 'N', '', 1),
(84, 52, 23, 'Carolina Rampon Barretto', '2017-10-08', 'N', 'N', '', 1),
(85, 53, 24, 'Alice Hernandes Galdino Chrisostomo', '2013-12-17', 'N', 'N', '', 1),
(86, 53, 24, '', '0000-00-00', '', '', '', 1),
(87, 54, 23, 'Denize Cruvinel', '2014-01-14', 'N', 'N', '', 1),
(88, 54, 23, 'João Pedro Soares', '2014-07-20', '', '', '', 1),
(89, 56, 23, 'Maria Eduarda Machado de Melo', '2012-01-09', 'N', 'S', 'Não toma refrigerantes ', 1),
(90, 53, 23, 'Alice Hernandes Galdino Chrisostomo ', '2013-12-17', 'N', 'N', '', 1),
(91, 57, 22, 'Sofia Godois seabra', '2011-12-12', 'N', 'N', '', 1),
(92, 57, 22, '', '0000-00-00', '', '', '', 1),
(93, 58, 23, 'Ana Valentina Soares Mickievicz Cardoso', '2013-12-05', 'N', 'N', '', 1),
(94, 58, 23, 'Sofia Brasil Miranda', '2014-03-01', '', '', '', 1),
(95, 59, 23, 'Maria Julia Sales soares', '2016-09-19', 'N', 'N', '', 1),
(96, 61, 24, 'Júlia Oliveira Lima ', '2011-09-16', 'N', 'N', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_curso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fim_curso` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nome_cli` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `niver_cli` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idade_niver` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `hora_evento` time NOT NULL,
  `end_evento` text COLLATE utf8_unicode_ci NOT NULL,
  `nome_emergencia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero_emergencia` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `qtd_crianca_evento` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `idade_media_evento` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pct` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especificacao_pct` text COLLATE utf8_unicode_ci NOT NULL,
  `psg_evento` text COLLATE utf8_unicode_ci NOT NULL,
  `hora_chegada` time NOT NULL,
  `tempo_evento` time NOT NULL,
  `valor_pct` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `valor_total` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sinal_valor` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `falta_pagar_valor` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `status_evento` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `nome_cli`, `niver_cli`, `idade_niver`, `data_inicio`, `data_final`, `hora_evento`, `end_evento`, `nome_emergencia`, `numero_emergencia`, `qtd_crianca_evento`, `idade_media_evento`, `pct`, `especificacao_pct`, `psg_evento`, `hora_chegada`, `tempo_evento`, `valor_pct`, `valor_total`, `sinal_valor`, `falta_pagar_valor`, `status_evento`) VALUES
(10, 'Carla da Silva Sá', 'Pedro Alme', '4', '2019-07-18', '0000-00-00', '16:00:00', 'rua 36', 'Luciene', '(61) 99999-999', '20', '2 a 10 anos', 'Pacote Premium', '', 'Homem Aranha', '18:00:00', '01:00:00', '250,00', '250,00', '150,00', '100,00', ''),
(11, 'Raphael Augusto Almeida Pereira', 'Izy Almeid', '2', '2019-03-25', '0000-00-00', '16:00:00', 'Rua 36 Norte Lote 3350', 'Luciene', '(61) 30241-097', '25', '2 a 12 anos', '4', '', 'Pacote inclui 2 animadores e 1 personagem vivo.', '17:00:00', '05:00:00', '500,00', '500,00', '250,00', '250,00', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(9) NOT NULL,
  `imagem_galeria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `imagem_galeria`) VALUES
(192, '14648951225750869287e2b.jpg'),
(205, '1464895443575087d3e78b8.jpg'),
(211, '14649049175750acd583742.jpg'),
(238, '1467994957577fd34d737aa.jpg'),
(249, '1482383890585b6212ba03c.jpg'),
(260, '1482384064585b62c0786d9.jpg'),
(266, '1483112707586681036b2f6.jpg'),
(274, '1485535093588b77750a5c1.jpg'),
(275, '1485535112588b7788c55e3.jpg'),
(276, '1485535131588b779b925be.jpg'),
(277, '1485535146588b77aaf0966.jpg'),
(287, '15265291395afcfc73c38f1.jpg'),
(288, '15265291605afcfc88db0d3.jpg'),
(289, '15265291795afcfc9baa0c5.jpg'),
(290, '15265292135afcfcbdceb45.jpg'),
(291, '15265292285afcfccc8a31e.jpg'),
(292, '15265293625afcfd52c7009.jpg'),
(293, '15265293835afcfd67183d5.jpg'),
(302, '15265296115afcfe4b98c69.jpg'),
(311, '15268496695b01e085aab3c.jpg'),
(313, '15268496965b01e0a05f388.jpg'),
(327, '15268499365b01e1903b718.jpg'),
(328, '15268499575b01e1a5389e9.jpg'),
(334, '15268503065b01e3025d8a1.jpg'),
(337, '15268503775b01e34951cf9.jpg'),
(338, '15268504105b01e36b01a89.jpg'),
(340, '15271287855b0622d128e98.jpg'),
(348, '15271288945b06233e6f8b2.jpg'),
(356, '15353711805b83e7acb8880.jpeg'),
(359, '15353713665b83e86614825.jpeg'),
(360, '15353713665b83e86617d50.jpeg'),
(361, '15353713665b83e8661a718.jpeg'),
(362, '15353713665b83e8661c32a.jpeg'),
(370, '15353713665b83e86631894.jpeg'),
(379, '15353716225b83e966d7147.jpeg'),
(387, '15353717365b83e9d8876e2.jpeg'),
(393, '15353717365b83e9d8a2d0c.jpeg'),
(403, '15353725995b83ed37305e1.jpeg'),
(405, '15353725995b83ed3731bab.jpeg'),
(406, '15353725995b83ed3736cd1.jpeg'),
(413, '15355477325b869954b7c95.jpeg'),
(416, '15355477325b869954c550c.jpeg'),
(431, '15381899445baeea787ad57.jpeg'),
(437, '15381899445baeea7888476.jpeg'),
(438, '15381899445baeea788946c.jpeg'),
(439, '15381899445baeea788b1c0.jpeg'),
(444, '15381915415baef0b5a0bac.jpeg'),
(445, '15381915415baef0b5a235f.jpeg'),
(448, '15381915415baef0b5aa8dd.jpeg'),
(468, '15391103285bbcf5b82af31.jpeg'),
(482, '15409203595bd8942760517.jpeg'),
(483, '15409203595bd894276121c.jpeg'),
(486, '15409205355bd894d733afb.jpeg'),
(488, '15409205355bd894d73974c.jpeg'),
(491, '15452726385c1afd3e47d56.jpeg'),
(492, '15452726385c1afd3e4f65b.jpeg'),
(507, '15452726385c1afd3e7d2df.jpeg'),
(510, '15452727665c1afdbe44b15.jpeg'),
(514, '15452727665c1afdbe52abb.jpeg'),
(519, '15452727665c1afdbe5b10e.jpeg'),
(520, '15452727665c1afdbe5be4d.jpeg'),
(523, '15452729775c1afe91a8a41.jpeg'),
(527, '15452729775c1afe91c476e.jpeg'),
(528, '15452729775c1afe91c7b27.jpeg'),
(529, '15525008445c89486c4278b.jpeg'),
(534, '15525008445c89486c6b2b5.jpeg'),
(536, '15525008445c89486c75450.jpeg'),
(537, '15525008445c89486c770b3.jpeg'),
(538, '15525008445c89486c77fbb.jpeg'),
(541, '15525099215c896be15d8da.jpeg'),
(542, '15525099215c896be15e9d8.jpeg'),
(547, '15525099215c896be16512b.jpeg'),
(548, '15525099215c896be165fca.jpeg'),
(549, '15525099215c896be167210.jpeg'),
(551, '15525099215c896be16ae28.jpeg'),
(553, '15525099215c896be16e0ab.jpeg'),
(554, '15525099215c896be16f0b2.jpeg'),
(555, '15525099215c896be1720f7.jpeg'),
(556, '15525099215c896be179815.jpeg'),
(557, '15525099215c896be17b570.jpeg'),
(568, '15525102065c896cfe60df1.jpeg'),
(569, '15525102065c896cfe621d3.jpeg'),
(570, '15525102065c896cfe64859.jpeg'),
(571, '15525102065c896cfe67dc0.jpeg'),
(579, '15531103475c92954bc8f5a.jpeg'),
(580, '15531103475c92954bca15a.jpeg'),
(581, '15531103475c92954bcb6d7.jpeg'),
(588, '15531103475c92954bd1eec.jpeg'),
(592, '15531107275c9296c78360f.jpeg'),
(593, '15531107275c9296c7879b9.jpeg'),
(594, '15531107275c9296c78b9d5.jpeg'),
(595, '15531107275c9296c78c933.jpeg'),
(597, '15531206465c92bd86d0c12.jpeg'),
(598, '15531206465c92bd86d6d7f.jpeg'),
(599, '15531206465c92bd86d7994.jpeg'),
(600, '15531206465c92bd86dcd08.jpeg'),
(601, '15531206465c92bd86e2fb2.jpeg'),
(602, '15531206465c92bd86e3db2.jpeg'),
(603, '15531206465c92bd86e48b3.jpeg'),
(604, '15531206465c92bd86e535e.jpeg'),
(605, '15531206465c92bd86e5df1.jpeg'),
(606, '15537005335c9b96b58f29f.jpeg'),
(607, '15537005335c9b96b596318.jpeg'),
(608, '15537005335c9b96b5976e6.jpeg'),
(609, '15537005335c9b96b598e67.jpeg'),
(610, '15537005335c9b96b59a188.jpeg'),
(611, '15537005335c9b96b59e68f.jpeg'),
(612, '15537005335c9b96b5a0e66.jpeg'),
(613, '15537005335c9b96b5a3e0f.jpeg'),
(614, '15537005335c9b96b5a811f.jpeg'),
(615, '15537005335c9b96b5a9496.jpeg'),
(616, '15537005335c9b96b5aa450.jpeg'),
(617, '15537005335c9b96b5ab701.jpeg'),
(618, '15537005335c9b96b5acbb2.jpeg'),
(619, '15537005335c9b96b5ada1a.jpeg'),
(620, '15537005335c9b96b5ae84f.jpeg'),
(621, '15537005335c9b96b5af87a.jpeg'),
(622, '15537005335c9b96b5b34ba.jpeg'),
(623, '15537068265c9baf4a72561.jpeg'),
(624, '15537068265c9baf4a7fb57.jpeg'),
(625, '15537068265c9baf4a8092f.jpeg'),
(626, '15537068265c9baf4a82c18.jpeg'),
(627, '15537068265c9baf4a856fd.jpeg'),
(632, '15537068265c9baf4a8ecd0.jpeg'),
(633, '15537068265c9baf4a903bf.jpeg'),
(635, '15537068265c9baf4a96f60.jpeg'),
(636, '15537068265c9baf4a97cea.jpeg'),
(637, '15537068265c9baf4a9c37a.jpeg'),
(638, '15537068265c9baf4a9e0bd.jpeg'),
(639, '15537438135c9c3fc57ff19.jpeg'),
(640, '15537438135c9c3fc583274.jpeg'),
(641, '15537438135c9c3fc583e66.jpeg'),
(642, '15541746375ca2d2ad9df26.jpeg'),
(643, '15541746375ca2d2ada1b47.jpeg'),
(646, '15547377135cab6a31a8208.jpeg'),
(647, '15547377135cab6a31ade3b.jpeg'),
(648, '15547377135cab6a31b0c24.jpeg'),
(649, '15547377135cab6a31b2807.jpeg'),
(650, '15547377135cab6a31b36bf.jpeg'),
(653, '15552950825cb3eb6a1a257.jpeg'),
(654, '15552950825cb3eb6a31970.jpeg'),
(655, '15552950825cb3eb6a326a0.jpeg'),
(656, '15552950825cb3eb6a332f1.jpeg'),
(657, '15552950825cb3eb6a34916.jpeg'),
(661, '15553863365cb54fe0794f5.jpeg'),
(663, '15601405295cfddaf1cc61a.jpeg'),
(664, '15601405295cfddaf1d2104.jpeg'),
(665, '15601405295cfddaf1d7a58.jpeg'),
(666, '15601405295cfddaf1d9004.jpeg'),
(667, '15601405295cfddaf1da947.jpeg'),
(670, '15601405295cfddaf1df434.jpeg'),
(671, '15601405295cfddaf1e0137.jpeg'),
(672, '15601405295cfddaf1e0dc8.jpeg'),
(673, '15601405295cfddaf1e3c2e.jpeg'),
(674, '15601405295cfddaf1e650e.jpeg'),
(675, '15601405295cfddaf1e84aa.jpeg'),
(676, '15601405295cfddaf1eb47f.jpeg'),
(677, '15601405295cfddaf1ec370.jpeg'),
(678, '15601405295cfddaf1ecf59.jpeg'),
(679, '15601405295cfddaf1edcc2.jpeg'),
(680, '15601405295cfddaf1f161e.jpeg'),
(681, '15601405295cfddaf1f404d.jpeg'),
(682, '15601405305cfddaf200e2b.jpeg'),
(683, '15601407405cfddbc40fc27.jpeg'),
(684, '15601407405cfddbc410f1c.jpeg'),
(686, '15601407405cfddbc41568d.jpeg'),
(687, '15601407405cfddbc4187cc.jpeg'),
(688, '15601407405cfddbc41ba28.jpeg'),
(689, '15601407405cfddbc420b49.jpeg'),
(693, '15601407405cfddbc44a4d5.jpeg'),
(694, '15601407405cfddbc44b06d.jpeg'),
(695, '15601407405cfddbc44c212.jpeg'),
(697, '15601407405cfddbc450aab.jpeg'),
(698, '15601407405cfddbc451d3a.jpeg'),
(699, '15601407405cfddbc454e19.jpeg'),
(700, '15601407405cfddbc4584ad.jpeg'),
(701, '15601407405cfddbc45946d.jpeg'),
(702, '15627378305d257ca61d6a9.jpeg'),
(703, '15627378305d257ca6261cf.jpeg'),
(704, '15627378305d257ca62b65f.jpeg'),
(705, '15627378305d257ca630736.jpeg'),
(706, '15627378305d257ca6319ba.jpeg'),
(707, '15627378305d257ca633ec9.jpeg'),
(708, '15627378305d257ca636635.jpeg'),
(709, '15627378305d257ca639a68.jpeg'),
(710, '15627378305d257ca63a834.jpeg'),
(711, '15627378305d257ca63b600.jpeg'),
(713, '15627378305d257ca63ced7.jpeg'),
(714, '15627378305d257ca63de3b.jpeg'),
(715, '15632529465d2d58d2bae07.jpeg'),
(716, '15632529465d2d58d2bf928.jpeg'),
(724, '15632530425d2d5932f3c1d.jpeg'),
(726, '15651304385d49fec6448e2.jpeg'),
(727, '15651304385d49fec65a407.jpeg'),
(728, '15651304385d49fec660649.jpeg'),
(729, '15651304385d49fec666252.jpeg'),
(730, '15651304385d49fec66e930.jpeg'),
(731, '15651304385d49fec672122.jpeg'),
(732, '15651304385d49fec67769c.jpeg'),
(734, '15651304385d49fec67f503.jpeg'),
(735, '15662693415d5b5f9dc9cbc.jpeg'),
(736, '15662693415d5b5f9dd375c.jpeg'),
(737, '15662693415d5b5f9de3783.jpeg'),
(739, '15662693415d5b5f9de7bd4.jpeg'),
(740, '15662693415d5b5f9deaa0b.jpeg'),
(741, '15662693415d5b5f9deeec4.jpeg'),
(745, '15662701565d5b62cce7b9a.jpeg'),
(746, '15662701565d5b62ccecb59.jpeg'),
(747, '15662701565d5b62ccee3bf.jpeg'),
(748, '15680853095d77153de6e9f.jpeg'),
(749, '15680853095d77153dee63b.jpeg'),
(750, '15680853095d77153def446.jpeg'),
(751, '15680853095d77153df0051.jpeg'),
(752, '15680853095d77153df0c75.jpeg'),
(753, '15680853095d77153df2efe.jpeg'),
(754, '15680853095d77153df3bdf.jpeg'),
(756, '15680853105d77153e01783.jpeg'),
(758, '15680854265d7715b219500.jpeg'),
(759, '15680854265d7715b22017f.jpeg'),
(760, '15688326665d827c9a70151.jpeg'),
(761, '15688326665d827c9a78bae.jpeg'),
(762, '15688326665d827c9a7bd87.jpeg'),
(763, '15705049515d9c00f731e86.jpeg'),
(764, '15705049515d9c00f738d37.jpeg'),
(765, '15705049515d9c00f739954.jpeg'),
(766, '15705049515d9c00f73c83f.jpeg'),
(767, '15705049515d9c00f73d8d0.jpeg'),
(768, '15705049515d9c00f73e6d7.jpeg'),
(769, '15705049515d9c00f741438.jpeg'),
(770, '15705049515d9c00f7432d0.jpeg'),
(774, '15705049515d9c00f7475f8.jpeg'),
(775, '15705049515d9c00f7498f7.jpeg'),
(780, '15809492085e3b5ed8ce2a7.jpeg'),
(781, '15809492085e3b5ed8dfee5.jpeg'),
(782, '15809492085e3b5ed8e1598.jpeg'),
(783, '15809492085e3b5ed8e52c7.jpeg'),
(784, '15809492085e3b5ed8e5ee4.jpeg'),
(785, '15809492085e3b5ed8e6aa3.jpeg'),
(786, '15809492085e3b5ed8e7417.jpeg'),
(787, '15809492085e3b5ed8eafb5.jpeg'),
(788, '15809593215e3b86597073a.jpeg'),
(791, '15809593215e3b8659792dd.jpeg'),
(805, '15809593215e3b86598bf97.jpeg'),
(807, '15809600025e3b8902e8894.jpeg'),
(808, '15809600025e3b8902ea02d.jpeg'),
(809, '15809600025e3b8902eac29.jpeg'),
(810, '15809600025e3b8902eba25.jpeg'),
(811, '15809600025e3b8902ecc53.jpeg'),
(812, '15809600025e3b8902ed72c.jpeg'),
(813, '15809600025e3b8902ee268.jpeg'),
(815, '15809600025e3b8902ef675.jpeg'),
(816, '15809600025e3b8902f0288.jpeg'),
(818, '15809600025e3b8902f171a.jpeg'),
(827, '15821637045e4de6f8e7590.jpeg'),
(828, '15821637045e4de6f8ebfcf.jpeg'),
(829, '15821637045e4de6f8ee1bc.jpeg'),
(830, '15821637045e4de6f8f0938.jpeg'),
(831, '15821637045e4de6f8f1cdb.jpeg'),
(832, '15821638575e4de79191345.jpeg'),
(833, '15821638575e4de79192c11.jpeg'),
(834, '15821638575e4de79193b36.jpeg'),
(835, '15821638575e4de79194736.jpeg'),
(836, '15821638575e4de791953d9.jpeg'),
(837, '15821638575e4de79195f43.jpeg'),
(838, '15821638575e4de79196d19.jpeg'),
(839, '15821638575e4de79197c68.jpeg'),
(840, '15821638575e4de791989fb.jpeg'),
(841, '15821638575e4de7919b427.jpeg'),
(842, '15821638575e4de7919c1f8.jpeg'),
(843, '15821638575e4de7919e9a5.jpeg'),
(845, '15821638575e4de791a4411.jpeg'),
(846, '15838817725e681e2cf0c16.jpeg'),
(847, '15838817735e681e2d02ef8.jpeg'),
(848, '15838817735e681e2d05dc6.jpeg'),
(849, '15838817735e681e2d0707c.jpeg'),
(850, '15838817735e681e2d12647.jpeg'),
(851, '15838817735e681e2d1edba.jpeg'),
(852, '15838817735e681e2d1fe07.jpeg'),
(853, '15838817735e681e2d20d60.jpeg'),
(854, '15838817735e681e2d2c328.jpeg'),
(855, '15838817735e681e2d2d32b.jpeg'),
(856, '15838817735e681e2d30445.jpeg'),
(857, '15838817735e681e2d317d8.jpeg'),
(858, '15838817735e681e2d3426c.jpeg'),
(861, '15839855635e69b39b30147.jpeg'),
(862, '15839855635e69b39b4f41b.jpeg'),
(863, '15839855635e69b39b50354.jpeg'),
(864, '15839855635e69b39b70e5d.jpeg'),
(865, '15839855635e69b39b78c31.jpeg'),
(866, '15839855635e69b39b797d2.jpeg'),
(868, '15839855635e69b39b7af0b.jpeg'),
(870, '15839855635e69b39b7c504.jpeg'),
(871, '15839855635e69b39b7d5cb.jpeg'),
(876, '15997103695f59a4a17fb67.jpeg'),
(878, '15997103695f59a4a186f2e.jpeg'),
(879, '15997103695f59a4a187d57.jpeg'),
(880, '15997103695f59a4a188b09.jpeg'),
(881, '15997107815f59a63da5d59.jpeg'),
(882, '15997107895f59a645f272f.jpeg'),
(883, '15997109085f59a6bc3d93e.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingressos`
--

CREATE TABLE `ingressos` (
  `id_ingresso` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_transacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `id_pct` int(9) NOT NULL,
  `nome_pct` varchar(50) DEFAULT '0',
  `tempo_pct` varchar(6) DEFAULT '0',
  `valor_pct` varchar(50) DEFAULT '0',
  `especificacao_pct` text NOT NULL,
  `obs_pct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id_parceiro` int(11) NOT NULL,
  `titulo_parceiro` varchar(300) DEFAULT NULL,
  `img_parceiro` varchar(300) DEFAULT NULL,
  `url_parceiro` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `permissao_user`
--

CREATE TABLE `permissao_user` (
  `id_permission` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `permission1` int(11) DEFAULT NULL,
  `permission2` int(11) DEFAULT NULL,
  `permission3` int(11) DEFAULT NULL,
  `permission4` int(11) DEFAULT NULL,
  `permission5` int(11) DEFAULT NULL,
  `permission6` int(11) DEFAULT NULL,
  `permission7` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `permissao_user`
--

INSERT INTO `permissao_user` (`id_permission`, `id_user`, `permission1`, `permission2`, `permission3`, `permission4`, `permission5`, `permission6`, `permission7`) VALUES
(0, NULL, 1, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `recados`
--

CREATE TABLE `recados` (
  `id_recado` int(9) NOT NULL,
  `nome_recado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `recado` text COLLATE utf8_unicode_ci NOT NULL,
  `data_hora` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `aprovacao` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `fotos` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `recados`
--

INSERT INTO `recados` (`id_recado`, `nome_recado`, `recado`, `data_hora`, `aprovacao`, `fotos`) VALUES
(1, 'Raphael Augusto', 'O site ficou show, parabéns pra quem desenvolveu e parabéns para a equipe Trio Bagunça!', '13/06/2016 22:06:03', 'Sim', 'clientes_13_06_2016_104403.jpg'),
(2, 'Mariana', 'Assim como o trabalho de vocês esse site ficou show', '14/06/2016 05:06:33', 'Sim', ''),
(3, 'Alan Costa', 'Melhor empresa de festa infantil de Brasília!', '14/06/2016 10:06:44', 'Sim', ''),
(8, 'Luana', 'O site ficou ótimo!!\r\nParabéns ', '20/06/2016 12:28:51', 'Sim', ''),
(7, 'Lucas', 'Eu quero!', '14/06/2016 22:54:46', 'Sim', 'clientes_14_06_2016_105446.jpg'),
(9, 'Nome:', 'Ficou ótimo!', '20/06/2016 12:34:07', 'Sim', ''),
(10, 'Ana Claudia', 'Este trio é perfeito! Foi a sensação da festa da minha filha...', '20/06/2016 12:37:46', 'Sim', ''),
(11, 'Erika Alves', 'Perfeição é pouco pra descrever o que vcs representaram na nossa festa', '20/06/2016 22:16:50', 'Sim', 'clientes_20_06_2016_101650.jpeg'),
(12, 'Neila Portela', 'Parabéns, ótimo trabalho!', '20/06/2016 23:52:21', 'Sim', ''),
(13, 'SUCESSO', 'A EXATOS 365 DIAS VOCÊS fizeram a alegria da minha pequena, hoje ela completa 06 anos e não quer festa convencional só se for com o frozem, por esta razão adiamos o bis e vamos comemorar na churrascaria fogo de galpão no pistão. queremos sim vocês animando nossas vidas, espero que seja em breve.\r\n\r\nVOCÊS SÃO TOPS', '21/06/2016 14:50:51', 'Sim', ''),
(14, 'ju', 'Conheci o trabalho dessa equipe e super indico p todos', '21/06/2016 20:17:27', 'Sim', ''),
(15, 'Tatiane', 'Adorei o site!!!', '22/06/2016 13:06:18', 'Sim', ''),
(28, 'Patricia Maruno', 'Nayara e Nathália: vocês são demais! Muito carinhosas, cuidadosas, atenciosas...\r\nParabéns pelo trabalho de vocês! \r\nRecomendo demais! \r\nE até a próxima!', '28/06/2016 21:50:55', 'Sim', ''),
(18, 'Fran', 'Oi boa noite, eu e minha filha Lorena, seguimos vocês é tudo tão lindo !!!! Adoro todas as princesas, a Melida é perfeita, a Ana e a Frozen.Meu sonho era ver uma na festa da minha filhota.', '27/06/2016 19:07:17', 'Sim', ''),
(40, 'Glaysa Fernanda Infanger de Castro', 'Momento Mágico com a presença das princesas Elsa e Anna e o Olaf. Adultos e crianças se encantam com a beleza, postura e carisma da equipe. Muito profissionais e pontuais!! Obrigada e parabéns pelo excelente trabalho!', '03/12/2016 14:03:42', 'Sim', 'clientes_03_12_2016_020342.JPG'),
(20, 'Antônia', 'Amei a iniciativa do trio, de ter feito uma boa ação em creche carente!', '27/06/2016 20:09:47', 'Sim', ''),
(21, 'MARIA DE LOURDES CARDOSO', 'AMEI O SITE E VOU INDICAR O TRABALHO DE VOCÊS.\r\nTENHO TRÊS NETOS E UMA A CAMINHO.', '27/06/2016 20:31:54', 'Sim', ''),
(22, 'Rebeca Marinho', 'Mais uma vez gostaria de agradecer a essa equipe maravilhosa! Mais um ano pude contar com a presença de vcs na festinha da minha filha! Ano passado frozen...perfeito! Esse ano branca de neve...maravilhoso! Super indico o trabalho! Profissionais simpáticas,  atenciosas e lindas! Agradeço pela presença e por tornar a festinha da minha filha um verdadeiro conto de princesas!Foi mágico! Vcs são as melhores!!! Vamos escolher o próximo tema!!!! Bjos', '27/06/2016 22:30:25', 'Sim', ''),
(23, 'Cintia Siqueira', 'Gostaria de agradecer a alegria para as crianças e emoção para os adultos na festa da minha filha. Tudo que um festa precisa . Profissionais como vocês . O trabalho de vocês é PERFEITO. Jamais deixarei de contrata-los. A festa fica muito mais festa com o trio bagunça. Eu mesma chorei quando chegaram aqui.... Que lindo o trabalho de vocês! E agora com pintura de rosto e balão mania ! Pacote mais que completo ! Momento com vocês mais que especial ! O tema foi o maravilhoso FROZEN. E espero ARIEL  em novembro com pintura de rosto ... SEMPRE  o TRIO BAGUNÇA, Nayara e Natalia! A simpatia de vocês contagia ! Beijooooo', '28/06/2016 06:19:33', 'Sim', ''),
(27, 'LINDO', 'O site está ótimo, só animação!!!', '28/06/2016 18:02:35', 'Sim', ''),
(25, 'Michelle Lopes', 'Super hiper recomendo! Já fiz uma festa da Froozen com essas princesas lindas e já contratei 4x os animadores! Todos muito atenciosos e carinhosos! Diversão e tranquilidade para os pais! Já estou esperando o px niver para convidá-los!!!', '28/06/2016 10:58:02', 'Sim', 'clientes_28_06_2016_105802.jpg'),
(29, 'caroline pires', 'O site está lindo!! Parabéns trio bagunça!', '29/06/2016 01:07:33', 'Sim', ''),
(34, 'Ana Claudia', 'Foi o dinheiro mais bem investido em toda a festa! Encantou crianças e adultos...❤️❤️', '12/07/2016 10:35:40', 'Sim', 'clientes_12_07_2016_103540.jpeg'),
(35, 'Carla Moura', 'Gostaria de agradecer o trabalho e o profissionalismo da equipe de vcs!!!! A festa foi um sucesso, e os convidados adoraram a animação, foram muito elogiados...... Desde ontem To passando o contato de vcs!!!!! \r\nSucesso e obrigada', '06/09/2016 07:41:13', 'Sim', 'clientes_06_09_2016_074113.png'),
(36, 'livia', 'parabéns.... simplesmente perfeito ...foi mágico', '13/09/2016 13:23:14', 'Sim', 'clientes_13_09_2016_012314.jpg'),
(37, 'Gilsa', 'Amei fez toda a diferença na minha festa \r\nAmei \r\nMinha filha ficou hiper feliz', '19/09/2016 21:39:30', 'Sim', 'clientes_19_09_2016_093930.jpg'),
(38, 'Thayane', 'Obrigada por vcs ter tornado a festa da minha filha mágica, com a presença da princesa Sofia! Foi lindo! Fez toda a diferença!', '26/09/2016 01:19:27', 'Sim', 'clientes_26_09_2016_011927.jpeg'),
(39, 'Claudia', 'So tenho a agradecer essa equipe maravilhosa. A Bela realmente e uma princesa, fez a alegria da minha filhotinha juntamente com seus amiguinhos; aqui ate os adultos entraram no clima de princesas... Linda festa, e com certeza os outros anos estaremos juntos.', '07/11/2016 10:55:13', 'Sim', 'clientes_07_11_2016_105513.jpg'),
(41, 'Edna', 'Lindoooo amei a festinha da minha filha, ver a carinha das criancas qdo vcs chegam não tem preço!!!!\r\nA minha princesinha disse q no proximo ano quer a festinha do mesmo jeito.\r\nFrozen novamente.\r\nParabéns Trio Bagunça vcs são D+++', '05/12/2016 21:52:17', 'Sim', 'clientes_05_12_2016_095217.jpg'),
(42, 'Amanda Hernandes', 'Lindooooooo eu simplesmente ameeei ! Minha filha ficou louca quando viu a Elsa a Ana e o Olaf, ela é fissurada na Elsa. Todos que estavam presentes na festa amaram! Vocês são ótimos obrigada por realizem o sonho da minha rainha Alice ! Obs: a minha filha sonhou a noite toda falando ( cadê a Elsa mamãe) a apresentação foi emocionante me fizeram chorar ao ver os olhos da minha filha encantada ! Obrigada  obrigada obrigada ! Trio da bagunça equipe que realiza sonhos ! Dos filhos e das mães tamb ! Kkkkk ❤️', '18/12/2016 22:20:22', 'Sim', 'clientes_18_12_2016_102022.JPG'),
(43, 'Luciana', 'Só tenho a agradecer pela presença do Trio Bagunça e Tio Luan na festa da minha filha, sem dúvida foi essencial para a diversão das crianças! Parabéns pelo trabalho irretocável de vocês! Foi demais!!! Muito obrigada, recomendo fortemente e desejo muito sucesso para toda a equipe! Abraços, Luciana e Família', '19/12/2016 11:02:28', 'Sim', 'clientes_19_12_2016_110228.JPG'),
(46, 'Rubia', 'Simplesmente amei!!! As crianças ficaram maravilhadas com o Homem Aranha!!! O Arthur foi super educado, atencioso e carinhoso com as crianças! Todas elas de diferentes idades! Bernardo curtiu tanto que dormiu no colo do Homem Aranha! A Nayara foi sempre um amor no atendimento!! Super recomendo o Trio Bagunça para as festinhas dos pimpolhos!!', '09/01/2017 16:16:58', 'Sim', 'clientes_09_01_2017_041658.PNG'),
(45, 'Priscila', 'Muito obrigada pelo excelente trabalho de vcs! Super pontuais, lindos, atenciosos, amorosos com as crianças. Deixam a festa muito mais bonita é encantadora! As crianças ficaram extasiadas e os adultos encantados. Parabéns!!! ', '04/01/2017 12:13:34', 'Sim', 'clientes_04_01_2017_121334.JPG'),
(47, 'Glazielle', 'Aniversário de 06 anos da minha filha foi um verdadeiro encanto com a chegada da princesa Ariel, linda, pontual, educada e carismática, super indico. Parabéns ao Trio Bagunça! Bjs e obrigada.', '15/01/2017 19:29:09', 'Sim', 'clientes_15_01_2017_072909.jpeg'),
(48, 'Evelyn', 'Quero agradecer todo o carinho desde o nosso primeiro contato.Foi tudo perfeito,  pontualidade, profissionalismo, lindos, impecaveis!!!!\r\nAs crianças amaram e os adultos ficaram encantados.o sorriso da Clarinha nas fotos diz tudo.....Foi uma emoção contagiante.\r\nParabéns foi a festa dos sonhos!!! Obrigada por tudo.', '23/01/2017 20:49:04', 'Sim', 'clientes_23_01_2017_084904.jpg'),
(49, 'Fabiane Lopes', 'Muito obrigada à equipe do Trio Bagunça!!! Vocês fizeram da festinha do meu filho um momento mais que especial! Foram pontuais, educados, solícitos e muito animados!!!', '02/02/2017 10:29:52', 'Sim', 'clientes_02_02_2017_102952.jpg'),
(50, 'Aline', 'Fiz uma festa da Ariel pra minha filha que ficou encantada com a Ariel do Trio Bagunça! Super satisfeita com a profissional e muito feliz em ver a alegria da minha princesa!!!!', '05/02/2017 12:01:02', 'Sim', 'clientes_05_02_2017_120102.JPG'),
(51, 'Danielli', 'Foi simplesmente mágico os momentos compartilhamos com a princesa Bela', '13/02/2017 11:09:38', 'Sim', 'clientes_13_02_2017_110938.JPG'),
(52, 'Thais Amorim', 'A festa da minha filha foi de Ladybug e a própria apareceu. Minha filha amouuuu. Obrigada a todos da equipe Trio Bagunça. Super recomendo.', '13/02/2017 12:16:24', 'Sim', 'clientes_13_02_2017_121624.jpg'),
(53, 'Simone', 'Fiz uma festa de Ladybug para minha filha, foi simplesmente maravilhosa. A Ladybug (Luciana) é uma simpatia! Obrigada!!!', '21/02/2017 17:54:28', 'Sim', 'clientes_21_02_2017_055428.jpg'),
(54, 'Tacia Justino', 'Muito feliz com o trio Bagunça que fez uma surpe alegria das crianças, foi muito e o personagem batman fez alegria das crianças e os adultos ficaram surpe felizes.', '26/03/2017 10:26:54', 'Sim', 'clientes_26_03_2017_102654.jpg'),
(55, 'Mariana', 'Simplesmente amei o homem aranha! Super simpático e meu filho ficou em êxtase com a chegada dele! Quero ter a oportunidade de contrata-los novamente!', '23/04/2017 12:36:16', 'Sim', 'clientes_23_04_2017_123616.JPG'),
(56, 'Ana Rodrigues', 'Foi incrível, minha filha amou. Os personagens lindos e profissionais. Foi muito mágico ,  super recomendo .', '24/04/2017 10:00:10', 'Sim', 'clientes_24_04_2017_100010.PNG'),
(57, 'Elaine', 'O Batman foi sucesso na festa do meu sobrinho ele ficou encantado. Vcs estão de parabéns pelo profissionalismo e tb da sensibilidade com as crianças super recomendo', '26/04/2017 14:11:04', 'Sim', 'clientes_26_04_2017_021104.jpg'),
(58, 'Fernada', 'Ladybug e Catnoir arrasaram na festa da Manu! Sucesso absoluto e alegria da garotada!\r\nParabéns e muito obrigada por animarem ainda mais a nossa comemoração!', '05/05/2017 21:16:41', 'Sim', 'clientes_05_05_2017_091641.JPG'),
(59, 'Marcela', 'Amei as princesas! Minha filha de 3 anos e os amiguinhos se divertiram muito com as brincadeiras e dançaram com as princesas. Além disso, são lindas e simpáticas! Valeu a pena!', '21/05/2017 21:13:24', 'Sim', 'clientes_21_05_2017_091324.JPG'),
(60, 'Karina', 'Foi simplesmente maravilhoso receber na nossa festa o batman e o homem aranha. Eles são ótimos. Vale a pena. As crianças adoraram!', '04/06/2017 17:57:03', 'Sim', 'clientes_04_06_2017_055703.JPG'),
(61, 'Fabiana Calviño', 'A Moana arrasou na festinha dos meus pequenos. Minha filha ficou apaixonada pela &quot;môuana&quot; e não queria mais sair do lado dela.\r\nParabéns pelo trabalho de vocês, que é maravilhoso!', '12/06/2017 15:13:17', 'Sim', 'clientes_12_06_2017_031317.JPG'),
(62, 'Fabíola Cristina', 'Só tenho a agradecer ao trio Bagunça! Vocês fizeram a diferença nesses meus dois dias de festa! Com profissionalismo, carinho, respeito e amor ao que faz eu só posso ser grata pelos momentos que vocês fizeram parte! Primeiro o super homem que encantou a festa do meu filho na escola. As crianças ficaram apaixonada pela magia do personagem e por brincarem com ele. E ontem salvaram minha festa! Como consegui aproveitar minha festa graças a vocês. Taís meu muito obrigada! Você entreteve as crianças por três horas seguidas sem intervalo, sempre com alegria, com sorriso no rosto, várias atividades. Todos ficaram encantados! Gratidão!!!', '16/06/2017 17:42:10', 'Sim', 'clientes_16_06_2017_054210.jpg'),
(63, 'Juliana Amorim', 'Quero agradecer de todo meu coração a presença do Capitão América na festinha dos meus filhos. Ele foi atencioso, carinhoso, pontual, tem ótima interação com as crianças. Meus filhos estão apaixonados. E todos os convidados também ficaram!\r\nObrigada Trio bagunça!!! Vcs são show! Não foi a primeira vez que eu vi o trabalho de vcs em uma festa e todas as vezes foi maravilhoso! Parabéns! Continuem abrilhantando as festinhas dos nossos pequenos!', '25/06/2017 12:51:35', 'Sim', 'clientes_25_06_2017_125135.jpg'),
(64, 'JANAÍNA SIMÕES', 'Bom dia\r\nEu adorei a presença das personagens Ana e Elsa e da pintura de rosto e balão. Fizeram   uma diferença enorme no sucesso da festa. A minha menina só fala que abraçou a Ana e Elsa. Todos os convidados elogiaram muito a simpatia e a beleza de vocês. Fez um sucesso enorme não só com as crianças e tbm com os adultos. O rapaz da pintura de rosto foi muito paciente com as crianças e bem animado. Gostei de tudo. Parabéns pelo trabalho que vocês realizam ', '27/06/2017 09:36:30', 'Sim', 'clientes_27_06_2017_093630.jpg'),
(67, 'Suelen Tamara', 'Não tenho palavras para agradecer à equipe Trio Bagunça é em especial ao Valmir personagem do Homem Aranha. Impossível descrever a emoção que tivemos ao ver nosso pequeno correndo para abraçar seu seu herói favorito. Não tem preço! Apesar da pouca idade, tenho certeza que não irá esquecer esse momento. Ele só fala nisso. Meus sinceros agradecimentos.', '01/08/2017 20:22:25', 'Sim', 'clientes_01_08_2017_082225.JPG'),
(66, 'Shirlene Souza', 'Quero agradecer a presença do Trio Bagunça na festa das minhas princesas. Ladybug e Catnoir abrilhantaram a festa, brincaram com as crianças, eles são profissionais talentosos que super recomendo. Parabéns pelo trabalho de vocês, foi maravilhoso!!', '20/07/2017 10:05:42', 'Sim', 'clientes_20_07_2017_100542.JPG'),
(68, 'Maitê', 'Parabéns a toda equipe trio bagunça. Em especial a moça que se veste de Minnie. Muito delicada e atenciosa.\r\nMinha filha amou ter a Minnie na festa dela!! Foi um dos meus melhores investimentos. As meninas amaram.', '13/08/2017 18:56:31', 'Sim', 'clientes_13_08_2017_065631.jpg'),
(69, 'Thais L', 'Satisfeita com o trio da bagunça ,em especial com a ladybug e o cat noar ,que fizeram toda a diferença na minha festa ,super atenciosos e cuidadosos com as crianças ,minha filha ficou maravilhada ...amamos ...parabéns ', '20/08/2017 20:36:30', 'Sim', 'clientes_20_08_2017_083630.JPG'),
(70, 'Marcela Amorim', 'Quero agradecer ao trio da Bagunça pelo profissionalismo, carinho com as crianças, excelência no trabalho realizado! Todos da festinha ficaram encantados com os personagens da frozen. ', '04/09/2017 13:34:21', 'Sim', 'clientes_04_09_2017_013421.JPG'),
(71, 'Carla Monteiro', 'pela primeira vez fui ao dia da bagunça, pessoal vale muito apena, minha filha ficou muito feliz em está brincando com o papai e a mamãe, em ver seus personagens favoritos e se encher de besteiras. Valeu cada centavo.\r\nConte com minha família em todos os eventos de vcs.\r\nPq para minha família a felicidade da nossa pequena vale ouro.\r\nObrigada trio Bagunça pelo trabalho e carinho com que vcs conduzem tudo. Muito bom mesmo.', '04/09/2017 15:13:10', 'Sim', 'clientes_04_09_2017_031310.jpg'),
(72, 'Karla Fontana Sampaio', 'As personagens, além de lindas, promovem brincadeiras super animadas com as crianças. Super recomendo! Eleva o nível de qualquer festa!', '21/09/2017 15:45:31', 'Sim', 'clientes_21_09_2017_034531.jpeg'),
(73, 'Fernanda', 'Equipe sensacional \r\nO Mickey e a Minnie são maravilhosos e a Tia Gabriella fez toda diferença.\r\nA  Mayara sempre muito atenciosa e carinhosa.\r\nRecomendo para qualquer família o Trio Bagunça para fazer a diferença na festa do seu filho.', '23/09/2017 13:47:46', 'Sim', 'clientes_23_09_2017_014746.JPG'),
(74, 'Ana', 'Estão de parabéns pela animação e as brincadeiras as crianças amaram esta tarde vcs fizeram toda a diferença....Obrigada tia Jessica', '12/10/2017 22:14:32', 'Sim', 'clientes_12_10_2017_101432.jpg'),
(75, 'TATIANA ROBERTA GALANTE', 'Foi um grande prazer contrata-los para a festa de aniversario de minha filha de 5 anos. A Larybug foi super atenciosa, carinhosa, criativa! O sonho da minha filha foi realizado graças ao profissionalismo e competência de vocês!! Ver os olhinhos dela brilhando por conta da magia de conhecer a heroína que ama não tem preço! Recomendo de olhos fechados!!', '15/10/2017 19:44:01', 'Sim', 'clientes_15_10_2017_074401.jpg'),
(80, 'Etienne', ' Foi uma excelente escolha contratar vocês para animar a festinha da nossa filha. Ela ficou super feliz com a presença da Ladybug e Cat Noir e nós, pais, realizados. Parabéns pelo profissionalismo, pontualidade, carisma, atenção e empenho em fazer a alegria das crianças! Obrigada! Super recomendo!', '25/03/2018 22:57:03', 'Sim', 'clientes_25_03_2018_105703.jpg'),
(78, 'Davi', ' Foi um sucesso!!! Meu filho e sobrinho amaram o Homem-Aranha! A fantasia era linda! E o rapaz muito gentil, educado e animado!!! Foi a cereja do bolo!!! Obrigada Trio Bagunça!!!', '13/03/2018 14:20:23', 'Sim', 'clientes_13_03_2018_022023.jpeg'),
(79, 'Nayara', 'Melhor equipe de animação infantil do DF ', '14/03/2018 15:13:46', 'Sim', 'clientes_14_03_2018_031346.jpeg'),
(81, 'Juliana Candida Gondim da Silva', ' Contratei o trio bagunça pela segunda vez esse ano e novamente me surpreendi com o trabalho das meninas que me atenderam! A princesa Ariel (Marcela) foi um doce com as crianças!! Super meiga, linda e delicada como uma princesa!!! A animadora Taina foi o ponto alto da festa! Em uma festa na piscina, com crianças pequenas que insistiram em ficar na piscina grande, ela entrou na piscina para agitar as brincadeiras! Super cuidadosa e atenciosa! Um doce de menina! Recomendo sempre! A festa não é a mesma sem o Trio Bagunça para animar!!!', '02/04/2018 16:45:56', 'Sim', 'clientes_02_04_2018_044556.JPG'),
(82, 'Daniela', ' Adoramos a personagem da Anna que chegou para alegrar a festinha da nossa pequena, além de muito carinhosa com as crianças a fantasia era encantadora!!! Foi um dia de sonho para a nossa princesa!!!', '06/04/2018 12:23:07', 'Sim', 'clientes_06_04_2018_122307.jpg'),
(83, 'Pavleska', 'ja são 3 anos contratando essa equipe maravilhosa... Todo ano um personagem novo e sempre muito bons !!! Esse ano contratei a animação também,  melhor investimento p a festa. Como valeu a pena, meu filho dormiu e acordou falando dos heróis...\r\nObrigada', '08/04/2018 14:18:19', 'Sim', 'clientes_08_04_2018_021819.jpg'),
(84, 'Tais Viana !', 'Não há palavras para expressar minha satisfação e alegria em ter comemorado o aniversário da minha filha com vocês. Agradeço a Natália e sua irmã pelo profissionalismo e cordialidade que teve comigo desde o primeiro contato. Tudo perfeito, mais do que imaginava. Vocês estão de parabéns a toda a equipe do TRIO BAGUNÇA foi maravilhosa. A Tia Deza (Pintura) nem se fala, ela e MARAVILHOSA a Ladyburg e o Cat Noir um sonho a parte eu amei tudo. Com certeza no próximo ano estaremos juntos celebrando mais um aniversário do Maria Eduarda. Festa Ladyburg  em 20/04/2018. Indico... Super Indico e Indico novamente.', '23/04/2018 09:01:01', 'Sim', 'clientes_23_04_2018_090101.jpg'),
(85, 'Aurea', ' Minha filha ficou simplesmente encantada! Trio bagunça é 100%! Sem palavras p agradecer.', '29/04/2018 17:29:01', 'Sim', 'clientes_29_04_2018_052901.jpeg'),
(86, 'Suele', ' Festinha da minha filha foi no dia 05/05/2018. A Elza é simplesmente linda, paciente , atenciosa, animada. Conquistou a todos! O meu muito obrigada! Foi, sem dúvida, o meu melhor investimento! Super recomendo! Sem contar que antes do evento estavam sempre disposto a esclarecer as minhas dúvidas!', '07/05/2018 15:49:43', 'Sim', 'clientes_07_05_2018_034943.jpg'),
(87, 'Suele', ' Festinha da minha filha foi no dia 05/05/2018. A Elza é simplesmente linda, paciente , atenciosa, animada. Conquistou a todos! O meu muito obrigada! Foi, sem dúvida, o meu melhor investimento! Super recomendo! Sem contar que antes do evento estavam sempre disposto a esclarecer as minhas dúvidas!', '07/05/2018 15:50:17', 'Sim', 'clientes_07_05_2018_035017.jpg'),
(88, 'Mariana Peixoto', 'Recentemente contratei o Trio Bagunça para o aniversário do meu filho de 4 anos (tema super heróis) e da minha filha de 2 anos (tema jardim) e, antes disso, já tinha contratado eles pra uma outra festinha...☺️. Sabe aquele item que não pode faltar? Esse item passou a ser eles! Todos os profissionais que trabalharam nas festinhas dos meus filhos foram ótimos! Pessoas educadas, de ótima energia e super solicitas, que simplesmente tomam de conta das crianças e até mesmo dos outros convidados em algumas brincadeiras, tornando tudo muito divertido! São simplesmente excelentes e fazem toda a diferença! Indico de olhos fechados, sempre só recebo elogios! E que  venham as próximas festinhas! Abraço aos colaboradores e fica aí a dica é a recomendação! Só tenho a agradecer!☺️', '07/05/2018 17:21:16', 'Sim', 'clientes_07_05_2018_052116.jpeg'),
(90, 'Misler Campos', 'Simplismente muito encantada com o trabalho dessa turma animada. Todos muito atensiosos e pacientes com todas as crianças!  Também não posso deixar de citar a pontualidade,  excelente.  Agradeço a vocês por nos proporcionar momentos de alegria e encantamento aos  nossos pequenos. Super indico vcs sempre! Mil beijos...', '21/05/2018 22:09:37', 'Sim', 'clientes_21_05_2018_100937.jpg'),
(91, 'Claudia cristiani de santi conde teixeira', ' contratei o pessoal da animação e o personagem Marshall só tenho elogios e agradecimento com todos serviço simplesmente MARAVILHOSO as prendas q deram para as crianças foi muito boa fantasia do personagem muito perfeita. Pessoal do trio bagunça só tenho q agradecer por tudo por ajudar a realizar um sonho da minha filha. Serviço nota 1000 super recomendo ', '28/05/2018 16:09:55', 'Sim', 'clientes_28_05_2018_040955.mp4'),
(92, 'Rose Pestana', ' Obrigada trio bagunça ,os bonecos vivos foram sensação da festa minha Valentina .\r\nMinha filha ficou muito feliz ❤️', '04/06/2018 10:32:35', 'Sim', 'clientes_04_06_2018_103235.jpg'),
(93, 'Maria Valentina', ' tudo lindo ', '04/06/2018 18:35:39', 'Sim', 'clientes_04_06_2018_063539.MOV'),
(94, 'Glaucilene', ' Foi um Sucesso entre crianças e adultos! Vai ter repeteco.', '04/06/2018 22:47:18', 'Sim', 'clientes_04_06_2018_104718.jpg'),
(97, 'Maria Valentina', ' contratei o trio bagunça e eles proporcionaram muita alegria, a felicidade da Valentina ficou estampada no rostinho dela e continua até hoje, ela esta encantada e até pediu bis', '06/06/2018 10:32:57', 'Sim', 'clientes_06_06_2018_103257.jpeg'),
(98, 'Renata', 'Amamos ter vcs em nossa festa! Obrigada por toda atenção desde o primeiro contato até o dia da festa! Minha filha e meus convidados adoraram! ', '11/06/2018 22:06:29', 'Sim', 'clientes_11_06_2018_100629.jpeg'),
(99, 'Nathalia', ' tia Soso foi maravilhosa! Parabéns pela equipe! Super atenciosos, pontuais e divertidos! Foi a sensação da festa e com certeza estarão presentes nas próximas comemorações ', '12/06/2018 10:17:16', 'Sim', 'clientes_12_06_2018_101716.jpeg'),
(100, 'Ilva Pequeno', 'já contratei várias vezes o trio bagunça e super recomendo! Sou Síndica do meu condomínio e todos os eventos que faço o Trio Bagunça está presente pra fazer a alegria da garotada! Super recomendo! Valeu equipe do Trio Bagunça! :)', '18/06/2018 16:58:39', 'Sim', 'clientes_18_06_2018_045839.jpg'),
(102, 'Lysbeth', 'Nos divertimos muito com o Homem Aranha. Meu filho ficou encantado , os olhinhos dele brilhavam!! Super agradecida pelo belo trabalho !', '26/06/2018 00:25:52', 'Sim', 'clientes_26_06_2018_122552.jpg'),
(103, 'Marília Leão', ' Anna e a Elsa chegaram para alegrar e encantar a festa da Helena. Foi uma tarde inesquecível para a aniversariante e todas as amiguinhas!!! Ano que vem tem mais... \r\nFoi sem dúvida a maior e melhor atração da festa. Indescritível ver as 3 princesas dançando juntas!', '01/07/2018 04:23:41', 'Sim', 'clientes_01_07_2018_042341.jpeg'),
(104, 'Maria de Fátima Machado Goncalves', ' gostei muito da Equipe tanto dos animadores como da pintora. As crianças se divertiram a Bessa. Eles brincam muitoooo e fazem todas as crianças interagirem independentemente da idade. Não há aquela competição de que sou melhor o que faz com que as crianças se sintam muito à vontade.', '02/07/2018 19:53:24', 'Sim', 'clientes_02_07_2018_075324.jpeg'),
(105, 'Késia Vânia', ' Amamos ter personagem vivo da Minnie na festa da minha filha, com tema Confeitaria da Esther, tivemos a ideia de colocar a Minnie na festa, para abrilhantar, todos ficaram encantados adultos e crianças um festa só. Parabéns a equipe Trio da Bagunça Amamos! sucesso Deus abençoe todos vocês. Késia Vânia', '05/07/2018 09:39:06', 'Sim', 'clientes_05_07_2018_093906.jpg'),
(106, 'Adriana', ' Contratei o OLAF para a festa da minha filha. Posso dizer que foi fantástico, a sensação da festa. Minha filha ficou encantada. Não largava ele. O mais engraçado é que até a voz era parecida com o OLAF do filme. Nota 100000000.... Não tenho nada a reclamar. Parabéns a equipe pelo serviço prestado. Vcs são demais. Obrigada! Adriana', '05/07/2018 16:11:37', 'Sim', 'clientes_05_07_2018_041137.jpeg'),
(107, 'Amanda', ' equipe incrível e muito carinhosa com as crianças!!! Recomendo demais!!!', '11/07/2018 21:03:47', 'Sim', 'clientes_11_07_2018_090347.jpeg'),
(108, 'Gleiciane', ' Equipe maravilhosa! As princesas Elsa e Ana arrasaram e estou encantada com o trabalho! Parabéns Trio Bagunça!', '15/07/2018 10:20:57', 'Sim', 'clientes_15_07_2018_102057.jpg'),
(109, 'ALANA CABRAL', '\r\nObrigado ao Trio Bagunça em especial a personagem SKYE- Patrulha Canina por animar e fazer a diferença no aniversário das minhas filhas!! A DIVERSÃO FOI GARANTIDA! Todas as crianças ficaram encantadas e certamente apaixonadas❤ papais e mamães também ❤❤❤. Foi a atração da festa... arrasou!\r\nGrata por proporcionar tanta felicidade aos pequenos,  Skye - Jéssica- vc é  Top!!!!!', '26/07/2018 00:54:48', 'Sim', 'clientes_26_07_2018_125448.jpg'),
(110, 'Manuela', ' Amamos as meninas que vocês mandaram pra animar a festinha da Mariana. Ela está falando até hoje sobre o nome dos times que escolheram.  Chamaremos vocês novamente no aniversário do Enzo. Obrigada tia Carol e tia Jessika. A Mari mandou um beijo pro unicórnio kkk', '30/07/2018 15:06:57', 'Sim', 'clientes_30_07_2018_030657.jpeg'),
(111, 'Juliama Godoi Fialho', ' Gostaria de agradecer ao maravilhoso serviço prestado na festa da minha filha ontem! Tanto os animadores quanto os personagens foram excelentes! Adoramos tudo! Catharina disse que o que mais gostou na festa dela foi que a LadyBug veio! Muito obrigada e parabéns pelo excelente trabalho!', '06/08/2018 13:36:46', 'Sim', 'clientes_06_08_2018_013646.jpg'),
(112, 'Juliana Bravin', ' Nossa festa ficou muito mais divertida com a presença do Tio Raul que foi atencioso carinhoso e profissional!Só temos a agradecer.Parabéns pelo trabalho sensacional de vocês!', '07/08/2018 09:20:52', 'Sim', 'clientes_07_08_2018_092052.jpeg'),
(113, 'Fabíola', ' Quero agradecer ao Trio Bagunça, recreadores Diego e Andreza, que garantiram a diversão da criançada. Obrigada por fazerem da festa de 5 anos da minha filha Aline um sucesso!', '13/08/2018 14:22:00', 'Sim', 'clientes_13_08_2018_022200.jpeg'),
(116, 'Damiana', 'A festa da Ester foi linda e muito divertida, voces não só fizeram as crianças felizes aos adultos tbm, vcs encantam e faz o ambiente muito feliz, sem vcs ficaria faltando algo, ficamos felizes de ver tanta alegria no rosto da criançada. vcs são lindos trio bagunça. foi sensacional parabens por tudo.', '23/08/2018 13:22:57', 'Sim', 'clientes_23_08_2018_012257.jpg'),
(115, 'Maiza Lucia', 'Não tenho palavras para agradecer tamanha alegria que minha filha ficou ao conhecer vcs, são de mais, a melhor equipe de animação que já conheci vcs arrasam amei minha festa ficou linda ', '14/08/2018 09:26:08', 'Sim', 'clientes_14_08_2018_092608.jpg'),
(117, 'Tainara Oliveira', 'Muitíssimo obrigada a vocês pela organização.\r\nLady Bug e Catnoir arrasaram e as crianças ficaram hipnotizadas com a presença deles que por nenhum segundo deixou a desejar!!! São lindos! Atenciosos. Mil beijooos!', '28/08/2018 11:31:53', 'Sim', 'clientes_28_08_2018_113153.JPG'),
(118, 'Marianna', 'Atendimento excelente. Serviço de muita qualidade. Adoramos! Indico muito e contaremos sempre com o Trio Bagunça.', '28/09/2018 23:32:00', 'Sim', 'clientes_28_09_2018_113200.jpeg'),
(119, 'Fábia Martins Alcanfor Franco', 'Adoramos brincar com vocês neste sábado.\r\nDavi fez 9!!!\r\nRock N Gol - Sobradinho.', '01/10/2018 19:19:52', 'Sim', 'clientes_01_10_2018_071952.jpg'),
(120, 'Priscilla Araujo', ' A visita do Homem de Ferro no aniversário de 3 anos do nosso filho foi incrível. Todos ficaram encantados com a perfeição da fantasia, com luzes e barulhos, e, também, com a simpatia dos funcionários que vieram. Parabéns para a equipe =)', '04/10/2018 15:42:55', 'Sim', 'clientes_04_10_2018_034255.jpg'),
(121, 'Eder Freire', 'Foi incrível, minha filha até hoje fala com muita alegria do dia que a Anna foi em seu aniversário! \r\nOs animadores são super criativos, profissionais e os personagens também são desenvolvidos com muito carinho!!!\r\nRecomendo para todos com certeza!!! Obrigado demais Trio Bagunça!!!', '10/10/2018 14:07:57', 'Sim', 'clientes_10_10_2018_020757.jpeg'),
(122, 'Taynã', 'as meninas são lindas e muito gentis , são verdadeiras princesas !! E o Olaf divertido e muito atencioso com as crianças também ! Foi o diferencial da festa ! Minha filha e os coleguinhas adoraram!!!', '24/10/2018 18:58:21', 'Sim', 'clientes_24_10_2018_065821.jpeg'),
(123, 'Mirele', ' Adorei!!! As crianças interagiram muito!!! A Elza foi muito atenciosa, pontual e carinhosa!!! Valeu a pena demais!!', '26/10/2018 22:33:23', 'Sim', 'clientes_26_10_2018_103323.jpeg'),
(124, 'Maidê Machado', ' parabéns pela animação na nossa festa de Hallowen!!! É o segundo ano consecutivo que os contratamos e ficamos satisfeitos!!! O animador Vinícius é um fofo!!!! Adoramos!!! Obrigada!!!', '29/10/2018 13:55:46', 'Sim', 'clientes_29_10_2018_015546.jpg'),
(125, 'Infantil 5C - Maristinha Pio XII', ' Os colaboradores do Trio Bagunça foram excepcionais! Só temos elogios para o trabalho de vocês.\r\n\r\nComo era uma festa surpresa, minutos antes da chegada da família homenageada, os animadores conseguiram manter todas as crianças em silêncio em um ambiente escuro. Foi surpreendente! \r\n\r\nAs brincadeiras propostas foram muito animadas e envolveram todas as crianças. \r\n\r\nNossos sinceros parabéns para toda equipe Trio Bagunça!!', '01/11/2018 18:22:43', 'Sim', 'clientes_01_11_2018_062243.jpeg'),
(126, 'Isabela', 'A Ariel deu luz a festa da minha filha Malu de 4 anos. Ela ficou encantada!!! A personagem é muito educada, prestativa e alegrou todos da festa. Super indico o trabalho dessa equipe. Estão de parabéns!', '05/11/2018 14:38:12', 'Sim', 'clientes_05_11_2018_023812.png'),
(129, 'Lavinia veiga', '\r\nAdorei o urso na festinha da minha filha Maria Clara de 5 anos! Sensacional! Parabéns!', '09/11/2018 15:24:04', 'Sim', 'clientes_09_11_2018_032404.jpeg'),
(130, 'ROBSON  LIMA', 'A Mérida foi  maravilhosa e juntamente com o tio Melancia  fizeram uma festa inesquecível!!!!! Um sonho realizado. A Mariana tá morrendo de saudades da Mérida ❤️', '12/11/2018 12:06:08', 'Sim', 'clientes_12_11_2018_120608.jpg'),
(128, 'Maria Lúcia Barros', ' Adoramos o camarim fashion! Sucesso garantido com as crianças! Parabéns!!!', '06/11/2018 07:58:23', 'Sim', 'clientes_06_11_2018_075823.jpeg'),
(131, 'Janaína Amorim', 'Hoje foi o aniversário de 3 anos da minha Lavínia!!! O Tio Batata fez a alegria da criançada. As brincadeiras conseguiram envolver todas os presentes, de diversas faixas etárias. E foi animação do início ao fim. O ponto alto foi a chegada da Skye e do Chase, que conseguiram mimar bastante a aniversariante sem deixar de atender os demais convidados. A M E I!!! Parabéns à equipe!!!', '17/11/2018 19:41:33', 'Sim', 'clientes_17_11_2018_074133.jpeg'),
(134, 'Adriana', ' O homem aranha do trio Bagunça fez os olhinhos das crianças brilharem!! Adoramos a\r\nPresença dele na festinha!! Foi incrível. Atendimento e pós venda maravilhosos!', '03/12/2018 12:56:49', 'Sim', 'clientes_03_12_2018_125649.jpeg'),
(135, 'Patyara', 'Quero agradecer o Trio bagunça por\r\nProporcionar aos nossos pequenos uma alegria de poder estar ao lado dos personagens que eles admiram. Meu filho fico feliz demais com a presença do Super Man em sua festa, excelente profissional, carinho e atencioso c o meu filho e com todas as crianças. Obrigada a toda equipe pelo excelente trabalho.', '12/12/2018 09:19:02', 'Sim', 'clientes_12_12_2018_091902.jpeg'),
(133, 'Viviane M S Ribeiro', ' O Mickey foi sensacional com as crianças! Todos amaram a interação e as brincadeiras! Meu filho acreditou que ele veio da Disney só para festa dele! \r\nParabéns à equipe! Muito feliz com o resultado! ', '19/11/2018 19:50:42', 'Sim', 'clientes_19_11_2018_075042.jpeg'),
(136, 'Stylos Engenharia', 'Os animadores de festa e a pintura de rosto fizeram a alegria dos filhos dos colaboradores da Stylos Engenharia em nossa confraternização de final de ano! Todos se divertiram muito com as brincadeiras! Já é nosso segundo ano com o Trio Bagunça e pretendemos repetir sempre!', '12/12/2018 17:14:42', 'Sim', 'clientes_12_12_2018_051442.JPG'),
(137, 'ANA PAULA ALVIM', ' Parabéns aos heróis da equipe do Trio Bagunça!!! Excelentes profissionais!!! Fizeram a alegria das crianças na festa de aniversário dos meus filhos. Super recomendo!!!', '21/12/2018 17:44:59', 'Sim', 'clientes_21_12_2018_054459.JPG'),
(138, 'Aline', ' Amei o tio Didi e o tio Romero! Alegraram a festa do meu filho! As crianças amaram as brincadeiras e os adultos amaram o picnic! É a primeira vez que meu filho sentou para comer em uma festa! Muito obrigada! Bjos', '07/01/2019 21:45:21', 'Sim', 'clientes_07_01_2019_094521.jpg'),
(139, 'Teresa Cristina', ' Adoramos o trabalho do trio da bagunça, sensacionais os personagens vivos Leo e Raul (Flash e super man) animaram muito a criançada, sem contar o oficina de Slime que foi um sucesso! Super recomendo, perfeito.', '16/01/2019 11:48:12', 'Sim', 'clientes_16_01_2019_114812.jpeg'),
(140, 'Fernanda', 'obrigada pelo carinho na presença do Homem Aranha na festa do meu filho. Ele ficou emocionado com a presença. Parabéns pelo lindo trabalho', '28/01/2019 10:33:42', 'Sim', 'clientes_28_01_2019_103342.jpeg'),
(141, 'Francieli Silveira de Camargo', ' Adoramos a presença do Trio Bagunça em nossa festa!!! Todos, adultos e crianças, ficaram encantados com o Camarim e a Oficina de Slime. As tias foram muito atenciosas e carismáticas. A atuação foi muito elogiada pelas mamães. As crianças querem repetir a dose. Parabéns equipe. Bom trabalho. Até a próxima.', '28/01/2019 12:38:36', 'Sim', 'clientes_28_01_2019_123836.jpg'),
(142, 'Tiago Ribeiro', ' Foi simplesmente mágico a festa do nosso principe de 1 ano. E boa parte disso se deve a presença do Trio Bagunça com a presença do Rei Mickey e Rainha Minie. Vcs foram show e nos surpreenderam, só temos a agradecer por tudo. O Rafael amou!!! \r\n\r\nNíver Rafael 19/01/19', '29/01/2019 13:29:23', 'Sim', 'clientes_29_01_2019_012923.jpg'),
(143, 'Laís', ' Equipe maravilhosa !!!! Valeu cada centavo que gastei com o trio bagunça.  As meninas são muito carinhosas com as crianças e super meigas, além de serem lindas !!!! Muito obrigada pelo carinho', '03/02/2019 17:15:33', 'Sim', 'clientes_03_02_2019_051533.jpg'),
(144, 'Roberta', 'Bom dia! Passando para agradecer a participação do Trio Bagunça no aniversário da minha filha Izabella, no sábado passado. Foi muito legal, as crianças (e os adultos!) adoraram!! Obrigada pela atenção e carinho com as nossas crianças! Parabéns Trio Bagunça! Valeu!!', '11/02/2019 15:08:07', 'Sim', 'clientes_11_02_2019_030807.jpg'),
(145, 'Alessandra Pinho', ' Agradeço a Equipe do Trio Bagunça por ter brilhado na festa da minha filha Carol no último sábado! Elogios especiais ao Tio Viny e Tia Ana Luísa que com muito carinho e profissionalismo fizeram a alegria dos convidados. Obrigada por ajudarem a tornar o sonho da minha Pequena realidade!', '12/02/2019 15:38:05', 'Sim', 'clientes_12_02_2019_033805.jpg'),
(148, 'CYNTHIA OLIVEIRA', ' Gostaria de agradecer ao profissionalismo de toda equipe que fez a alegria da festa da minha filha de 4 anos, não tenho palavras para expressar o brilho dos olhos dela quando viu a Elsa e a Anna chegando em sua festinha. Muito obrigada pelo carinho, alegria e diversão das princesas, foi nota 10!', '18/03/2019 14:53:32', 'Sim', 'clientes_18_03_2019_025332.jpg'),
(147, 'LUIS FERNANDO', ' Gostaria de registrar a nossa grata satisfação de ter recebido o &quot; Trio Bagunça&quot;, no dia 16 de fevereiro, no aniversário da nossa filha. As apresentações, ficaram enriquecidas com a simpatia, calma e competência de todos os personagens, Elsa, Ana e Olaf. Nosso muito obrigado e parabéns pelo ótimo trabalho !!', '20/02/2019 21:40:40', 'Sim', 'clientes_20_02_2019_094040.jpg'),
(149, 'Paula', 'Gostaria de agradecer a turma do Trio Bagunça por fazer a festa do meu lindo Arthur ser tão alegre e linda. Muito obrigada...o Arthur falou que nunca vai esquecer esse dia. Um grande beijo.', '31/03/2019 12:09:43', 'Sim', 'clientes_31_03_2019_120943.jpg'),
(150, 'Paula Falcomer', 'Gostaria de agradecer a turma do Trio Bagunça por fazer a festa do meu lindo Arthur ser tão alegre e linda. Muito obrigada...o Arthur falou que nunca vai esquecer esse dia. Um grande beijo.', '31/03/2019 12:11:42', 'Sim', 'clientes_31_03_2019_121142.jpg'),
(151, 'Renata', 'Queria agradecer a presença da Moana e da Merida no aniversário das minhas filhas! Foi fantástico! As crianças adoraram e elas foram muito proativas e animadas, além de extremamente profissionais.', '02/04/2019 16:03:47', 'Sim', 'clientes_02_04_2019_040347.jpeg'),
(152, 'Lia Veras', ' Obrigada Equipe do Trio Bagunça. A criançada adorou o tio Didi e a Priscila! Muito talentosos!', '08/04/2019 10:32:33', 'Sim', 'clientes_08_04_2019_103233.jpg'),
(153, 'Valéria Costa', ' A presença da LOL foi maravilhosa.  Equipe atenciosa.  Foi perfeito. Quero muito agradecer!  Parabéns', '15/04/2019 11:01:40', 'Sim', 'clientes_15_04_2019_110140.jpg'),
(154, 'Andressa Moreira da Costa Padovani', ' Quero aqui agradecer pelo excelente trabalho realizado pelo Trio Bagunça... foi um sucesso a Bela e a Fera', '15/04/2019 11:14:15', 'Sim', 'clientes_15_04_2019_111415.jpg'),
(155, 'Elizabete Machado', '\r\nGostei muito do trabalho da Bela e a Fera!\r\nMuito educados, a fantasias lindas e a Bela é linnnndaaaaa!!!!\r\nMuito obrigada!\r\nFiquei muito feliz e satisfeita!\r\nParabéns!', '21/05/2019 11:55:57', 'Sim', 'clientes_21_05_2019_115557.jpg'),
(156, 'Mariana Palis', 'Boa tarde! Gostaria de agradecer pelo tio Alemão, animador da festinha da minha filha, ao Trio Bagunça,  vcs foram muito cortês com todos e fizeram toda a diferença! Virei cliente e recomendo! ', '22/05/2019 11:56:12', 'Sim', 'clientes_22_05_2019_115612.jpg'),
(157, 'Briane Mello', ' Foi ÓTIMO!!!\r\n\r\nAmei as meninas, Bia, Flavia e Bibi! Todas lindas, animadas e SUUPER educadas!\r\nCom certeza já ganharam mais uma cliente!!\r\nMuitíssimo grata por toda dedicação!\r\n\r\nJá vou me organizar para as próximas ', '27/05/2019 17:09:19', 'Sim', 'clientes_27_05_2019_050919.png'),
(158, 'Briane Mello', ' Foi ÓTIMO!!!\r\n\r\nAmei as meninas, Bia, Flavia e Bibi! Todas lindas, animadas e SUUPER educadas!\r\nCom certeza já ganharam mais uma cliente!!\r\nMuitíssimo grata por toda dedicação!\r\n\r\nJá vou me organizar para as próximas ', '27/05/2019 17:11:35', 'Sim', 'clientes_27_05_2019_051135.png'),
(159, 'Maiara Donadeli', 'Queria agradecer pelo trabalho excepcional de vocês, a moça que estava monitorando,super educada, atenciosa, perfeita.A princesa Ariel foi perfeitaaa demais, super animada,educada,deu atenção a todos, uma verdadeira princesa um amor de pessoa! O príncipe super educado,paciente,atencioso,animou as crianças com as brincadeiras junto à princesa,super autêntico! A minha pequena ficou encantada e está até agora acreditando que eram os personagens reais do filme, obrigada mesmo de coração pelo excelente trabalho!', '17/06/2019 12:07:55', 'Sim', 'clientes_17_06_2019_120755.jpeg'),
(160, 'Marília', ' Helena e Rapunzel se divertiram MUITO na festa!! A Rapunzel super atenciosa, carinhosa e divertida... a presença dela na festa fez toda diferença! Foi incrível ', '21/06/2019 17:22:31', 'Sim', 'clientes_21_06_2019_052231.jpeg'),
(161, 'Andrea Moscardini', 'Gostaria de, maia uma vez, agradecer o carinho e a atenção da equipe Trio Bagunça. O Batman e o Capitão América arrasaram e meu filho ficou encantado! Vcs são espetaculares.  Até a próxima e obrigada ❤', '24/06/2019 15:44:26', 'Sim', 'clientes_24_06_2019_034426.jpg'),
(162, 'Aline Moraes Pedreira', 'Contratei o personagem vivo e superou as minhas expectativas. Agradeço, em especial, ao Anderson, por toda animação e simpatia com a criançada! Meu filho ficou encantado!!! Super recomendo!!!', '25/06/2019 16:21:45', 'Sim', 'clientes_25_06_2019_042145.jpg'),
(163, 'MARILEY CRUZ OLIVEIRA', ' Meus agradecimentos ao Trio bagunça!! Vcs encantaram nao somente a princesa Valentina, mas todos os convidados!! Elsa, Ana e Olaf, fizeram mto sucesso!! Os abraços quentinhos foram maravilhosos!! ❄☃️', '22/07/2019 11:28:50', 'Sim', 'clientes_22_07_2019_112850.jpg'),
(164, 'Marcilea', 'Boa tarde! \r\nMuito obrigada pelo excelente trabalho de vocês! \r\nVocês são excelentes profissionais! ', '07/08/2019 11:27:25', 'Sim', 'clientes_07_08_2019_112725.jpg'),
(165, 'Daniele', ' Amamos o serviço! São educados, atenciosos, criativos e cativantes! Se não tiver brinquedos, eles dão conta do recado! Obrigada e Parabéns!!!', '12/08/2019 13:22:31', 'Sim', 'clientes_12_08_2019_012231.jpeg'),
(166, 'Aline', ' Adoramos o trabalho do tio Feijão e da Iasmim. Foram educados, criativos, atenciosos, atentos às necessidades das crianças. Não precisou ter nenhum outro brinquedo na festa para garantir a diversão das crianças. Parabéns pelo excelente trabalho!', '19/08/2019 11:40:39', 'Sim', 'clientes_19_08_2019_114039.jpg'),
(167, 'Fabianna Diniz', ' Parabéns pelo trabalho de toda equipe !!!! As crianças adoraram as personagens e a Priscila!!!! Ano que vem teremos vocês de novo, com certeza!!!! ', '25/08/2019 21:54:34', 'Sim', 'clientes_25_08_2019_095434.jpeg'),
(168, 'Vanderlea', ' Meus parabéns ao tio Homem Aranha ! Fez um excelente trabalho com as crianças , super criativo e atencioso ! Meus agradecimentos ao Trio Bagunça ! Top demais ', '26/08/2019 12:49:41', 'Sim', 'clientes_26_08_2019_124941.png'),
(169, 'Fabio Costa', 'A Anna, a Elza e o Olaf foram dez!! nossa filha Beatriz ficou encantada. Parabéns para a equipe do Trio Bagunça.', '09/09/2019 11:41:47', 'Sim', 'clientes_09_09_2019_114147.jpeg'),
(170, 'Francislaine Monteiro', 'Gostaria de parabenizar os animadores que foram excelentes, prestativos ,pontuais e carismáticos. \r\nMickey e Minnie super legal. \r\nMuito Obrigada', '16/09/2019 18:32:56', 'Sim', 'clientes_16_09_2019_063256.jpg'),
(171, 'Silvia', 'Foi uma experiência maravilhosa! Meus agradecimentos em especial para o Tio Feijão e a Tia Unicórnio, eles foram simesmente DEMAIS! Fizeram a alegria da festa das minhas filhas! Elas também amaram, aliás todos convidados amaram. Foram muito divertidos, simpáticos e atenciosos!', '30/09/2019 19:23:04', 'Sim', 'clientes_30_09_2019_072304.jpeg'),
(172, 'Thatyanne', 'Gostaria de agradecer toda a equipe que nos atendeu, vocês estão de parabéns pelo profissionalismo e cuidado com todos. Amamos o atendimento, a apresentação. Vocês foram nota 10, ganharam uma cliente!', '04/10/2019 15:35:37', 'Sim', 'clientes_04_10_2019_033537.jpeg'),
(173, 'Sarah', 'No dia das crianças, o Trio Bagunça animou a festa de 6 anos do meu filho Rodrigo. Foi um momento muito especial, de muita alegria e diversão para todas as crianças. Tio Feijão e tia Lili são sensacionais! As crianças se divertiram do início ao fim da festa com eles. Ficamos muito satisfeitos! Deixo aqui o meu agradecimento para todo o grupo Trio Bagunça, especialmente para os queridos tio Feijão e tia Lili.', '14/10/2019 15:18:40', 'Sim', 'clientes_14_10_2019_031840.jpg'),
(174, 'Adriana Campello', 'Foi maravilhoso!!! As crianças ficaram enlouquecidas com a presença da Elsa e da Anna. Elas foram muito simpáticas, divertiram as crianças e fizeram uma performance linda!!! Amei o trabalho de vcs. Parabéns!!!', '14/10/2019 15:31:43', 'Sim', 'clientes_14_10_2019_033143.jpg'),
(175, 'Tatiana', 'Quero agradecer a todos do trio bagunça, pelo belo trabalho, todos muito educados, atenciosos e carinhosos com os nossos pequenos! Minha filha amou, ficou apaixonada pela Moana! Obrigada equipe trio bagunça, excelente trabalho!', '21/10/2019 13:44:15', 'Sim', 'clientes_21_10_2019_014415.jpeg'),
(176, 'Mônica Constantino', 'Parabéns pros animadores Feijão e Didi! Sensacionais!!! Conseguiram segurar a atenção da galerinha do início ao fim. Show! ', '04/11/2019 15:06:45', 'Sim', 'clientes_04_11_2019_030645.jpg'),
(177, 'Christiane Gigante', 'Gostaria de agradecer o trabalho  cuidadoso da equipe que recebemos no aniversário de nossa filha Ana Carolina!! Parabéns!! Vocês foram maravilhosos!!', '06/11/2019 13:09:29', 'Sim', 'clientes_06_11_2019_010929.jpeg'),
(178, 'Leandra', 'Sem dúvidas, esse dia vai pra sempre na vida do meu pequeno e dos amiguinhos da escola. Parabéns, trio bagunça. O homem aranha  arrasou. Muito carinhoso e atencioso com todos. Mais uma vez, muito obrigada! ♥️', '07/11/2019 08:58:03', 'Sim', 'clientes_07_11_2019_085803.jpg'),
(179, 'Ana Paula', 'Minha pequena amou a Elza, a Ana e o Olaf. Vcs foram muito atenciosos com todos os pequenos. Agradeço de coração pelo ótimo trabalho. Todos amaram. Obrigada', '11/11/2019 16:46:35', 'Sim', 'clientes_11_11_2019_044635.jpeg'),
(180, 'Amanda', 'Muito obrigada pela presença de vocês em nossa cidade e em nossa festa ! \r\nVocês foram maravilhosos e muito amimados!\r\nAs crianças amaram e a minha pequena também!', '13/11/2019 17:13:14', 'Sim', 'clientes_13_11_2019_051314.jpeg'),
(181, 'Juliana de Almeida Calil Cof', 'Impecável a participação do trio bagunça na festa dos meus filhos! O Alemão é um querido, sabe brincar, conquista todas as crianças da festa, se preocupa com alimentação e banheiro das crianças. Simplesmente fantástico! Os personagens vivos chegaram e também fizeram bonito! Carismáticos, brincaram com as crianças, tiraram fotos e foram muito simpáticos e animados! O serviço surpreendeu e superou minhas expectativas! Recomendadissimo!', '14/11/2019 20:16:28', 'Sim', 'clientes_14_11_2019_081628.jpg'),
(182, 'Nome:Andréa', 'Muito obrigada mais uma vez! Uma equipe incrível, que deixou meu filho.super feliz! Vcs deixaram a festa bem mais especial❤', '18/11/2019 10:59:12', 'Sim', 'clientes_18_11_2019_105912.jpg'),
(183, 'Michelle da Mata', 'Gostei demais!!!!! Meu filho ficou encantado com os personagens!!! Foram maravilhosos, atenciosos e educados!!!', '21/11/2019 17:04:17', 'Sim', 'clientes_21_11_2019_050417.JPG'),
(184, 'Mônyca', 'Mais uma vez o Trio Bagunça superou minhas expectativas... as crianças adoraram!\r\nQuero elogiar o Tio Marcelo que esteve na minha festa no último sábado. Parabéns pelo profissionalismo.', '25/11/2019 11:08:07', 'Sim', 'clientes_25_11_2019_110807.jpeg'),
(185, 'Vinicius (Mits Miriam- avó) 03/12/2019', 'Estamos juntos desde 2017, e vcs sempre se superando. Obrigado pelo imenso carinho.', '04/12/2019 15:14:14', 'Sim', 'clientes_04_12_2019_031414.jpeg'),
(186, 'Marília', 'Mais uma vez só tenho a agradecer! Peraonagem linda, educada, simpática, animada... fez toda diferença na festa! Amamos ', '09/12/2019 10:52:52', 'Sim', 'clientes_09_12_2019_105252.jpeg'),
(187, 'Heloisa', 'Trabalho perfeito ', '09/12/2019 12:48:12', 'Sim', 'clientes_09_12_2019_124812.jpeg'),
(188, 'Marina Oliveira', 'Fiz o aniversário do meu filho com a participação ilustre do homem de ferro com armadura, simplesmente espetacular, sensacional, sem palavras pra agradecer tudo que essa equipe fez. Obrigada de coração, vcs são nota 1000. Super recomendo.\r\n\r\nTenham minha eterna gratidão.', '13/01/2020 08:50:58', 'Sim', 'clientes_13_01_2020_085058.jpg'),
(189, 'Ayla Caixeta', 'Nossa festa foi abrilhantanda pela presença de 3 lindas princesas! As princesas encantaram nossas festa, estavam impecável , maquiagem bem temática , fora a simpatia, a educação , a paciência, a criatividade, o carisma com as crianças! Foram super pontuais , animadas , carinhosas ! Um trabalho impecável! Obrigada trio bagunça ! Arrasaram !!', '20/01/2020 10:36:44', 'Sim', 'clientes_20_01_2020_103644.jpeg'),
(190, 'Gracielle campos', 'Tivemos uma festa linda, com a animação realizada pelo TIO GRAVATA, amamos tudo, animado, educado , foi uma execelente experiência! Muito obrigada ao Trio bagunca , e especialmente ao tio gravata! Viramos clientes! Abraço!', '03/02/2020 10:24:18', 'Sim', 'clientes_03_02_2020_102418.jpeg'),
(191, 'Ivana Soares dos Santos cascalho', 'Fiz o aniversário da minha filha Ana e as simpáticas Tia Carol e Tia Yasmin alegram ainda mais a festa! A criançada se amarrou nas brincadeiras e no carinho das tias. Obrigada por tudo! Foi só sucesso!', '03/02/2020 10:51:32', 'Sim', 'clientes_03_02_2020_105132.jpg'),
(192, 'Millena', 'Excelente a recriação das Tias ontem na festa da Melissa e José Carlos! Obrigada! Parabéns pela dedicação de vocês! As mães ficaram encantadas!', '18/02/2020 18:44:24', 'Sim', 'clientes_18_02_2020_064424.jpeg'),
(194, 'Flávia Aparecida Squinca', 'Fantástico o aniversário virtual da Sansara. A quarentena não é problema... o Trio Bagunça leva alegria para todos os lugares ', '27/04/2020 00:53:28', 'Sim', 'clientes_27_04_2020_125328.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servico` int(9) NOT NULL,
  `tipo_servico` varchar(50) NOT NULL,
  `nome_servico` varchar(50) NOT NULL,
  `imagem_servico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id_servico`, `tipo_servico`, `nome_servico`, `imagem_servico`) VALUES
(108, 'Caricatura', '', 'servico_02_06_2016_031619.jpg'),
(109, 'Caricatura', '', 'servico_02_06_2016_031851.jpg'),
(113, 'Caricatura', '', 'servico_02_06_2016_045238.jpg'),
(118, 'Pintura de Rosto', '', 'servico_02_06_2016_054938.jpg'),
(119, 'Pintura de Rosto', '', 'servico_02_06_2016_054957.jpg'),
(121, 'Pintura de Rosto', '', 'servico_02_06_2016_055033.jpg'),
(124, 'Pintura de Rosto', '', 'servico_02_06_2016_055125.jpg'),
(125, 'Pintura de Rosto', '', 'servico_02_06_2016_055147.jpg'),
(127, 'Pintura de Rosto', '', 'servico_02_06_2016_055226.jpg'),
(139, 'Caricatura', '', 'servico_02_06_2016_064946.jpg'),
(140, 'Caricatura', '', 'servico_02_06_2016_065337.jpg'),
(141, 'Caricatura', '', 'servico_02_06_2016_085706.jpg'),
(161, 'Sob Encomenda', '', 'servico_05_06_2016_051814.jpg'),
(162, 'Sob Encomenda', '', 'servico_05_06_2016_052041.jpg'),
(163, 'Sob Encomenda', '', 'servico_05_06_2016_052123.jpg'),
(164, 'Sob Encomenda', '', 'servico_05_06_2016_052202.jpg'),
(165, 'Sob Encomenda', '', 'servico_05_06_2016_052238.jpg'),
(179, 'Balão Mania', '', 'servico_10_06_2016_094639.jpg'),
(182, 'Balão Mania', '', 'servico_10_06_2016_094716.jpg'),
(186, 'Balão Mania', '', 'servico_10_06_2016_094800.jpg'),
(187, 'Balão Mania', '', 'servico_10_06_2016_094810.jpg'),
(188, 'Balão Mania', '', 'servico_10_06_2016_095049.jpg'),
(198, 'Pintura de Rosto', '', 'servico_13_06_2016_092949.jpg'),
(199, 'Balão Mania', '', 'servico_13_06_2016_093456.jpg'),
(205, 'Personagem Vivo', '', 'servico_20_06_2016_075318.jpg'),
(207, 'Bagunça Top', '', 'servico_20_06_2016_075404.jpg'),
(209, 'Bagunça Top', '', 'servico_20_06_2016_075433.jpg'),
(212, 'Bagunça Top', '', 'servico_20_06_2016_075522.jpg'),
(215, 'Bagunça Top', '', 'servico_20_06_2016_075610.jpg'),
(216, 'Bagunça Top', '', 'servico_20_06_2016_075626.jpg'),
(222, 'Personagem Vivo', '', 'servico_08_07_2016_112252.jpg'),
(223, 'Pintura de Rosto', '', 'servico_08_07_2016_112725.jpeg'),
(228, 'Pintura de Rosto', '', 'servico_20_07_2016_071111.jpg'),
(229, 'Pintura de Rosto', '', 'servico_20_07_2016_071121.jpg'),
(248, 'Animação Infantil', '', 'servico_03_10_2016_093332.jpg'),
(251, 'Pintura de Rosto', '', 'servico_03_10_2016_093409.jpg'),
(252, 'Pintura de Rosto', '', 'servico_03_10_2016_093425.jpg'),
(257, 'Pintura de Rosto', '', 'servico_21_11_2016_044742.jpg'),
(258, 'Pintura de Rosto', '', 'servico_21_11_2016_044759.jpg'),
(259, 'Pintura de Rosto', '', 'servico_21_11_2016_044817.jpg'),
(262, 'Personagem Vivo', '', 'servico_21_11_2016_044915.jpg'),
(263, 'Personagem Vivo', '', 'servico_21_11_2016_044924.jpg'),
(279, 'Personagem Vivo', 'Anna e Elsa', 'servico_29_11_2016_101126.png'),
(281, 'Personagem Vivo', 'Elsa', 'servico_29_11_2016_101409.png'),
(282, 'Personagem Vivo', 'Anna e Elsa', 'servico_29_11_2016_101450.png'),
(294, 'Personagem Vivo', 'Olaf e Elsa', 'servico_29_11_2016_102941.jpg'),
(309, 'Personagem Vivo', 'Valente', 'servico_29_11_2016_104528.jpg'),
(315, 'Pintura de Rosto', 'Pintura- Borboleta', 'servico_05_12_2016_075655.jpg'),
(319, 'Caricatura', '', 'servico_29_12_2016_125527.jpeg'),
(321, 'Caricatura', '', 'servico_30_12_2016_083851.jpeg'),
(322, 'Caricatura', '', 'servico_30_12_2016_083914.jpeg'),
(323, 'Caricatura', '', 'servico_30_12_2016_083941.jpeg'),
(324, 'Caricatura', '', 'servico_30_12_2016_084006.jpeg'),
(325, 'Caricatura', '', 'servico_30_12_2016_084029.jpeg'),
(327, 'Caricatura', '', 'servico_30_12_2016_084132.jpeg'),
(328, 'Caricatura', '', 'servico_30_12_2016_084154.jpeg'),
(329, 'Caricatura', '', 'servico_30_12_2016_084216.jpeg'),
(330, 'Caricatura', '', 'servico_30_12_2016_084247.jpeg'),
(331, 'Caricatura', '', 'servico_30_12_2016_084317.jpeg'),
(332, 'Caricatura', '', 'servico_30_12_2016_084350.jpeg'),
(333, 'Caricatura', '', 'servico_30_12_2016_084416.jpeg'),
(334, 'Caricatura', '', 'servico_30_12_2016_084445.jpeg'),
(335, 'Caricatura', '', 'servico_30_12_2016_084507.jpeg'),
(336, 'Caricatura', '', 'servico_30_12_2016_084534.jpeg'),
(337, 'Caricatura', '', 'servico_30_12_2016_084604.jpeg'),
(338, 'Caricatura', '', 'servico_30_12_2016_084629.jpeg'),
(339, 'Caricatura', '', 'servico_30_12_2016_084941.jpeg'),
(340, 'Caricatura', '', 'servico_30_12_2016_085006.jpeg'),
(341, 'Caricatura', '', 'servico_30_12_2016_085034.jpeg'),
(344, 'Animação Infantil', '', 'servico_30_12_2016_093939.jpg'),
(345, 'Animação Infantil', '', 'servico_30_12_2016_093953.jpg'),
(347, 'Personagem Vivo', '', 'servico_30_12_2016_094027.jpg'),
(353, 'Personagem Vivo', '', 'servico_30_12_2016_094154.jpg'),
(357, 'Pintura de Rosto', '', 'servico_30_12_2016_094303.jpg'),
(358, 'Pintura de Rosto', '', 'servico_30_12_2016_094315.jpg'),
(359, 'Pintura de Rosto', '', 'servico_30_12_2016_094328.jpg'),
(360, 'Pintura de Rosto', '', 'servico_30_12_2016_094341.jpg'),
(366, 'Animação Infantil', '', 'servico_30_12_2016_095607.jpg'),
(378, 'Balão Mania', '', 'servico_18_01_2017_065105.jpeg'),
(379, 'Balão Mania', '', 'servico_18_01_2017_065120.jpeg'),
(381, 'Bagunça Top', '', 'servico_28_01_2017_063121.jpg'),
(383, 'Bagunça Top', '', 'servico_28_01_2017_063251.jpg'),
(384, 'Balão Mania', '', 'servico_29_01_2017_064217.jpeg'),
(386, 'Sob Encomenda', '', 'servico_04_02_2017_013631.jpg'),
(388, 'Bagunça Top', '', 'servico_04_02_2017_084419.jpg'),
(389, 'Bagunça Top', '', 'servico_04_02_2017_084510.jpg'),
(390, 'Bagunça Top', '', 'servico_04_02_2017_084553.jpg'),
(396, 'Pintura de Rosto', '', 'servico_04_02_2017_085107.jpg'),
(397, 'Bagunça Top', '', 'servico_04_02_2017_085415.jpg'),
(398, 'Sob Encomenda', '', 'servico_06_02_2017_062653.jpg'),
(399, 'Bagunça Top', '', 'servico_27_02_2017_084136.jpeg'),
(403, 'Pintura de Rosto', '', 'servico_27_02_2017_084336.jpg'),
(404, 'Pintura de Rosto', '', 'servico_27_02_2017_084400.jpg'),
(406, 'Pintura de Rosto', '', 'servico_27_02_2017_084447.jpg'),
(408, 'Pintura de Rosto', '', 'servico_27_02_2017_084658.jpg'),
(410, 'Pintura de Rosto', '', 'servico_27_02_2017_084731.jpg'),
(411, 'Pintura de Rosto', '', 'servico_05_03_2017_080115.jpg'),
(413, 'Pintura de Rosto', '', 'servico_05_03_2017_080216.jpg'),
(415, 'Pintura de Rosto', '', 'servico_05_03_2017_080245.jpg'),
(416, 'Balão Mania', '', 'servico_12_03_2017_090636.jpg'),
(417, 'Balão Mania', '', 'servico_12_03_2017_090659.jpg'),
(418, 'Pintura de Rosto', '', 'servico_05_04_2017_090430.jpg'),
(425, 'Animação Infantil', '', 'servico_07_06_2017_080237.jpg'),
(426, 'Animação Infantil', '', 'servico_07_06_2017_080256.jpg'),
(430, 'Personagem Vivo', '', 'servico_07_06_2017_080430.jpg'),
(436, 'Personagem Vivo', '', 'servico_07_06_2017_080544.jpg'),
(445, 'Personagem Vivo', 'Super Homem', 'servico_18_06_2017_030240.jpg'),
(446, 'Personagem Vivo', 'Fada', 'servico_18_06_2017_030340.jpg'),
(457, 'Personagem Vivo', 'Principe', 'servico_01_11_2017_060745.jpg'),
(467, 'Personagem Vivo', 'Mickey', 'servico_01_11_2017_061756.jpg'),
(471, 'Animação Infantil', '', 'servico_01_11_2017_062127.jpg'),
(474, 'Personagem Vivo', 'Capitão América', 'servico_01_11_2017_062844.jpg'),
(475, 'Personagem Vivo', 'Moana', 'servico_01_11_2017_062944.jpg'),
(482, 'Personagem Vivo', 'Ariel', 'servico_01_11_2017_064433.jpg'),
(483, 'Personagem Vivo', 'Mulher Maravilha', 'servico_01_11_2017_064513.jpg'),
(488, 'Personagem Vivo', 'Moana', 'servico_01_11_2017_064907.jpg'),
(489, 'Personagem Vivo', 'Ariel', 'servico_01_11_2017_065031.jpg'),
(495, 'Personagem Vivo', 'Minnie', 'servico_01_11_2017_084925.jpg'),
(497, 'Animação Infantil', '', 'servico_01_11_2017_085039.jpg'),
(499, 'Personagem Vivo', 'Minnie', 'servico_01_11_2017_085322.jpg'),
(503, 'Personagem Vivo', 'Thor', 'servico_01_11_2017_085602.jpg'),
(511, 'Animação Infantil', '', 'servico_01_11_2017_090348.jpg'),
(514, 'Personagem Vivo', 'Olaf', 'servico_01_11_2017_090658.jpg'),
(516, 'Personagem Vivo', 'Batman', 'servico_01_11_2017_090845.jpg'),
(517, 'Personagem Vivo', 'Pocahontas', 'servico_01_11_2017_090957.jpg'),
(518, 'Personagem Vivo', '', 'servico_25_01_2018_081116.jpg'),
(521, 'Animação Infantil', '', 'servico_20_05_2018_041445.jpg'),
(523, 'Animação Infantil', '', 'servico_20_05_2018_041523.jpg'),
(524, 'Animação Infantil', '', 'servico_20_05_2018_041634.jpg'),
(525, 'Animação Infantil', '', 'servico_20_05_2018_041658.jpg'),
(526, 'Animação Infantil', '', 'servico_20_05_2018_041807.jpg'),
(527, 'Pintura de Rosto', '', 'servico_20_05_2018_041935.jpg'),
(528, 'Pintura de Rosto', '', 'servico_20_05_2018_042002.jpg'),
(530, 'Pintura de Rosto', '', 'servico_20_05_2018_042023.jpg'),
(532, 'Pintura de Rosto', '', 'servico_20_05_2018_042317.jpg'),
(533, 'Pintura de Rosto', '', 'servico_20_05_2018_042341.jpg'),
(534, 'Pintura de Rosto', '', 'servico_20_05_2018_042402.jpg'),
(535, 'Pintura de Rosto', '', 'servico_20_05_2018_042432.jpg'),
(536, 'Pintura de Rosto', '', 'servico_20_05_2018_042537.jpg'),
(539, 'Pintura de Rosto', '', 'servico_20_05_2018_042625.jpg'),
(541, 'Personagem Vivo', 'Ariel', 'servico_20_05_2018_043454.jpg'),
(542, 'Personagem Vivo', 'Mickey e Minnie- Tema Reinado', 'servico_20_05_2018_043547.jpg'),
(543, 'Personagem Vivo', 'Moana', 'servico_20_05_2018_043634.jpg'),
(544, 'Personagem Vivo', 'Capitão América', 'servico_20_05_2018_043706.jpg'),
(546, 'Personagem Vivo', 'Fera', 'servico_20_05_2018_043739.jpg'),
(547, 'Personagem Vivo', 'Rapunzel e Principe', 'servico_20_05_2018_043825.jpg'),
(549, 'Personagem Vivo', 'Ryder E Marshall', 'servico_20_05_2018_043901.jpg'),
(554, 'Personagem Vivo', 'Capitão América', 'servico_20_05_2018_044353.jpg'),
(555, 'Pintura de Rosto', '', 'servico_20_05_2018_044426.jpg'),
(557, 'Pintura de Rosto', '', 'servico_20_05_2018_044508.jpg'),
(558, 'Personagem Vivo', 'Mulher Maravilha', 'servico_20_05_2018_044534.jpeg'),
(559, 'Personagem Vivo', 'Moana', 'servico_20_05_2018_044639.jpg'),
(560, 'Personagem Vivo', 'Masha e o Urso', 'servico_21_05_2018_075156.jpeg'),
(561, 'Personagem Vivo', 'Masha e o Urso', 'servico_21_05_2018_075440.jpeg'),
(565, 'Personagem Vivo', 'Moana', 'servico_21_05_2018_075756.png'),
(567, 'Pintura de Rosto', '', 'servico_21_05_2018_075922.jpeg'),
(568, 'Contação de História', '', 'servico_21_05_2018_075956.jpeg'),
(577, 'Animação Infantil', '', 'servico_23_05_2018_094503.JPG'),
(578, 'Pintura de Rosto', '', 'servico_23_05_2018_094618.JPG'),
(581, 'Contação de História', '', 'servico_23_05_2018_094836.JPG'),
(582, 'Contação de História', '', 'servico_23_05_2018_094854.JPG'),
(584, 'Contação de História', '', 'servico_23_05_2018_094915.JPG'),
(586, 'Contação de História', '', 'servico_23_05_2018_094956.JPG'),
(587, 'Contação de História', '', 'servico_23_05_2018_095032.JPG'),
(588, 'Animação Infantil', '', 'servico_29_05_2018_062701.jpeg'),
(589, 'Animação Infantil', '', 'servico_29_05_2018_063026.jpeg'),
(590, 'Animação Infantil', '', 'servico_29_05_2018_063309.jpeg'),
(591, 'Personagem Vivo', 'Cinderela', 'servico_29_05_2018_063527.jpeg'),
(594, 'Animação Infantil', '', 'servico_29_05_2018_063947.jpeg'),
(596, 'Personagem Vivo', 'Cinderela', 'servico_29_05_2018_064605.jpeg'),
(609, 'Personagem Vivo', 'Bruxinha', 'servico_06_06_2018_110538.jpeg'),
(616, 'Personagem Vivo', 'Fada', 'servico_14_06_2018_095252.JPG'),
(620, 'Animação Infantil', '', 'servico_14_06_2018_095522.JPG'),
(621, 'Animação Infantil', '', 'servico_14_06_2018_095546.JPG'),
(625, 'Personagem Vivo', 'Marshall', 'servico_14_06_2018_100405.JPG'),
(626, 'Personagem Vivo', 'Mickey e Minnie- Tema Reinado', 'servico_21_06_2018_032208.jpeg'),
(627, 'Camarim Fashion', '', 'servico_21_06_2018_032236.jpeg'),
(629, 'Pintura de Rosto', '', 'servico_21_06_2018_034238.jpeg'),
(631, 'Camarim Fashion', '', 'servico_28_06_2018_015053.jpeg'),
(633, 'Camarim Fashion', '', 'servico_28_06_2018_015135.jpeg'),
(635, 'Camarim Fashion', '', 'servico_02_07_2018_050929.jpeg'),
(636, 'Camarim Fashion', '', 'servico_02_07_2018_051000.jpeg'),
(637, 'Camarim Fashion', '', 'servico_02_07_2018_051019.jpeg'),
(639, 'Personagem Vivo', 'Minnie Rosa', 'servico_04_07_2018_100149.jpeg'),
(640, 'Animação Infantil', '', 'servico_04_07_2018_100209.jpeg'),
(641, 'Camarim Fashion', '', 'servico_04_07_2018_100247.jpeg'),
(642, 'Camarim Fashion', '', 'servico_04_07_2018_100444.jpeg'),
(643, 'Animação Infantil', '', 'servico_04_07_2018_100534.jpeg'),
(644, 'Animação Infantil', '', 'servico_04_07_2018_100559.jpeg'),
(647, 'Animação Infantil', '', 'servico_07_07_2018_055007.jpeg'),
(648, 'Animação Infantil', '', 'servico_07_07_2018_055023.jpeg'),
(649, 'Animação Infantil', '', 'servico_07_07_2018_055036.jpeg'),
(650, 'Animação Infantil', '', 'servico_07_07_2018_055050.jpeg'),
(651, 'Animação Infantil', '', 'servico_07_07_2018_055111.jpeg'),
(655, 'Pintura de Rosto', '', 'servico_07_07_2018_055301.jpeg'),
(656, 'Pintura de Rosto', '', 'servico_07_07_2018_055316.jpeg'),
(657, 'Pintura de Rosto', '', 'servico_07_07_2018_055330.jpeg'),
(658, 'Pintura de Rosto', '', 'servico_07_07_2018_055402.jpeg'),
(661, 'Personagem Vivo', 'Sininho', 'servico_11_07_2018_085244.jpeg'),
(663, 'Camarim Fashion', '', 'servico_17_07_2018_083117.jpeg'),
(666, 'Animação Infantil', '', 'servico_31_07_2018_032107.jpeg'),
(668, 'Animação Infantil', '', 'servico_31_07_2018_032857.jpeg'),
(674, 'Personagem Vivo', 'Skye- Patrulha Canina', 'servico_31_07_2018_105247.JPG'),
(675, 'Personagem Vivo', 'Olaf', 'servico_31_07_2018_105525.JPG'),
(677, 'Animação Infantil', '', 'servico_31_07_2018_105651.JPG'),
(678, 'Pintura de Rosto', '', 'servico_31_07_2018_105826.JPG'),
(679, 'Pintura de Rosto', '', 'servico_31_07_2018_105844.JPG'),
(680, 'Pintura de Rosto', '', 'servico_31_07_2018_105858.JPG'),
(681, 'Pintura de Rosto', '', 'servico_31_07_2018_105910.JPG'),
(683, 'Pintura de Rosto', '', 'servico_31_07_2018_110821.JPG'),
(684, 'Pintura de Rosto', '', 'servico_31_07_2018_110946.JPG'),
(685, 'Pintura de Rosto', '', 'servico_31_07_2018_111000.JPG'),
(688, 'Pintura de Rosto', '', 'servico_06_08_2018_010019.JPG'),
(694, 'Camarim Fashion', '', 'servico_15_08_2018_112046.jpeg'),
(695, 'Camarim Fashion', '', 'servico_15_08_2018_112113.jpeg'),
(697, 'Camarim Fashion', '', 'servico_15_08_2018_112152.jpeg'),
(698, 'Camarim Fashion', '', 'servico_15_08_2018_112216.jpeg'),
(701, 'Camarim Fashion', '', 'servico_15_08_2018_112821.jpeg'),
(706, 'Animação Infantil', '', 'servico_27_08_2018_071243.jpeg'),
(707, 'Animação Infantil', '', 'servico_27_08_2018_071318.jpeg'),
(709, 'Personagem Vivo', 'Mulher Elástico- Os Incríveis', 'servico_27_08_2018_071423.jpeg'),
(710, 'Personagem Vivo', 'Jack Sparrow- Piratas do Caribe', 'servico_27_08_2018_071459.jpeg'),
(711, 'Personagem Vivo', 'Jack Sparrow- Piratas do Caribe', 'servico_27_08_2018_071555.jpeg'),
(712, 'Personagem Vivo', 'Fadas', 'servico_27_08_2018_071653.jpeg'),
(713, 'Personagem Vivo', 'Fadas', 'servico_27_08_2018_073635.jpeg'),
(717, 'Pintura de Rosto', '', 'servico_29_08_2018_080443.jpeg'),
(718, 'Pintura de Rosto', '', 'servico_29_08_2018_080706.jpeg'),
(719, 'Pintura de Rosto', '', 'servico_29_08_2018_080801.jpeg'),
(720, 'Pintura de Rosto', '', 'servico_29_08_2018_080829.jpeg'),
(721, 'Camarim Fashion', '', 'servico_29_08_2018_081110.jpeg'),
(723, 'Camarim Fashion', '', 'servico_29_08_2018_081421.jpeg'),
(725, 'Pintura de Rosto', '', 'servico_09_09_2018_054829.jpeg'),
(726, 'Personagem Vivo', 'Batman', 'servico_09_09_2018_055121.jpeg'),
(731, 'Personagem Vivo', 'Mulher Gato', 'servico_28_09_2018_093837.jpeg'),
(732, 'Personagem Vivo', 'Mulher Gato', 'servico_28_09_2018_093927.jpeg'),
(733, 'Contação de História', '', 'servico_28_09_2018_094001.jpeg'),
(742, 'Pintura de Rosto', '', 'servico_28_09_2018_095030.jpeg'),
(743, 'Animação Infantil', '', 'servico_28_09_2018_100039.jpeg'),
(744, 'Animação Infantil', '', 'servico_28_09_2018_100211.jpeg'),
(745, 'Animação Infantil', '', 'servico_28_09_2018_100233.jpeg'),
(746, 'Animação Infantil', '', 'servico_28_09_2018_100252.jpeg'),
(747, 'Animação Infantil', '', 'servico_28_09_2018_100310.jpeg'),
(750, 'Personagem Vivo', 'Batman e Homem Aranha', 'servico_28_09_2018_100622.jpeg'),
(752, 'Personagem Vivo', 'Homem Aranha', 'servico_28_09_2018_100909.jpeg'),
(753, 'Personagem Vivo', 'Olaf', 'servico_28_09_2018_100956.jpeg'),
(754, 'Personagem Vivo', 'Batman', 'servico_28_09_2018_101116.jpeg'),
(756, 'Personagem Vivo', 'Homem Aranha e Capitão América', 'servico_28_09_2018_101246.jpeg'),
(761, 'Camarim Fashion', '', 'servico_28_09_2018_103314.jpeg'),
(763, 'Camarim Fashion', '', 'servico_28_09_2018_103400.jpeg'),
(764, 'Camarim Fashion', '', 'servico_28_09_2018_103420.jpeg'),
(766, 'Camarim Fashion', '', 'servico_28_09_2018_103454.jpeg'),
(768, 'Camarim Fashion', '', 'servico_28_09_2018_103912.jpeg'),
(772, 'Personagem Vivo', 'Branca de Neve', 'servico_09_10_2018_095808.jpeg'),
(773, 'Personagem Vivo', 'Anna', 'servico_09_10_2018_095840.jpeg'),
(778, 'Camarim Fashion', '', 'servico_09_10_2018_100108.jpeg'),
(779, 'Camarim Fashion', '', 'servico_09_10_2018_100124.jpeg'),
(780, 'Camarim Fashion', '', 'servico_09_10_2018_100149.jpeg'),
(789, 'Camarim Fashion', '', 'servico_09_10_2018_100442.jpeg'),
(794, 'Personagem Vivo', 'Vingadores', 'servico_14_10_2018_103318.jpeg'),
(795, 'Personagem Vivo', 'Rapunzel', 'servico_14_10_2018_103353.jpeg'),
(797, 'Camarim Fashion', '', 'servico_14_10_2018_103601.jpeg'),
(804, 'Camarim Fashion', '', 'servico_14_10_2018_103915.jpeg'),
(805, 'Camarim Fashion', '', 'servico_14_10_2018_103929.jpeg'),
(806, 'Camarim Fashion', '', 'servico_14_10_2018_103942.jpeg'),
(810, 'Pintura de Rosto', '', 'servico_14_10_2018_104036.jpeg'),
(811, 'Pintura de Rosto', '', 'servico_14_10_2018_104047.jpeg'),
(812, 'Pintura de Rosto', '', 'servico_14_10_2018_104333.jpeg'),
(814, 'Pintura de Rosto', '', 'servico_14_10_2018_104523.jpeg'),
(817, 'Camarim Fashion', '', 'servico_14_10_2018_104717.jpeg'),
(821, 'Personagem Vivo', 'Elsa', 'servico_21_10_2018_045657.jpeg'),
(822, 'Personagem Vivo', 'Olaf', 'servico_21_10_2018_045821.jpeg'),
(824, 'Personagem Vivo', 'Vingadores', 'servico_21_10_2018_045932.jpeg'),
(825, 'Pintura de Rosto', '', 'servico_21_10_2018_050327.jpeg'),
(826, 'Pintura de Rosto', '', 'servico_21_10_2018_050345.jpeg'),
(827, 'Pintura de Rosto', '', 'servico_21_10_2018_050407.jpeg'),
(829, 'Animação Infantil', '', 'servico_21_10_2018_050613.jpeg'),
(830, 'Animação Infantil', '', 'servico_21_10_2018_050656.jpeg'),
(831, 'Animação Infantil', '', 'servico_21_10_2018_050726.jpeg'),
(832, 'Animação Infantil', '', 'servico_21_10_2018_050744.jpeg'),
(836, 'Oficina de Slime', '', 'servico_29_10_2018_112311.jpeg'),
(838, 'Oficina de Slime', '', 'servico_29_10_2018_112832.jpeg'),
(839, 'Pintura de Rosto', '', 'servico_29_10_2018_112922.jpeg'),
(840, 'Pintura de Rosto', '', 'servico_29_10_2018_112941.jpeg'),
(841, 'Pintura de Rosto', '', 'servico_29_10_2018_113003.jpeg'),
(842, 'Pintura de Rosto', '', 'servico_29_10_2018_113019.jpeg'),
(843, 'Pintura de Rosto', '', 'servico_29_10_2018_113035.jpeg'),
(844, 'Pintura de Rosto', '', 'servico_29_10_2018_113050.jpeg'),
(845, 'Pintura de Rosto', '', 'servico_29_10_2018_113109.jpeg'),
(846, 'Pintura de Rosto', '', 'servico_29_10_2018_113129.jpeg'),
(848, 'Pintura de Rosto', '', 'servico_29_10_2018_113201.jpeg'),
(850, 'Pintura de Rosto', '', 'servico_29_10_2018_113236.jpeg'),
(851, 'Camarim Fashion', '', 'servico_30_10_2018_121555.jpeg'),
(857, 'Camarim Fashion', '', 'servico_30_10_2018_121720.jpeg'),
(859, 'Personagem Vivo', 'LOL- Queen Bee', 'servico_30_10_2018_122220.jpeg'),
(860, 'Personagem Vivo', 'LOL- Queen Bee', 'servico_30_10_2018_123049.jpeg'),
(862, 'Personagem Vivo', 'Elsa', 'servico_30_10_2018_123232.jpeg'),
(863, 'Personagem Vivo', 'Elsa e Capitão', 'servico_30_10_2018_123519.jpeg'),
(864, 'Oficina de Slime', '', 'servico_07_11_2018_044939.jpeg'),
(866, 'Oficina de Slime', '', 'servico_07_11_2018_045335.jpeg'),
(867, 'Oficina de Slime', '', 'servico_07_11_2018_050018.jpeg'),
(869, 'Personagem Vivo', 'Elsa', 'servico_19_12_2018_010115.jpeg'),
(870, 'Personagem Vivo', 'Mulher Elástico', 'servico_19_12_2018_010141.jpeg'),
(872, 'Personagem Vivo', 'Lady Bug', 'servico_19_12_2018_010234.jpeg'),
(873, 'Personagem Vivo', 'Ariel', 'servico_19_12_2018_010257.jpeg'),
(879, 'Personagem Vivo', 'Branca de Neve', 'servico_19_12_2018_011511.jpeg'),
(881, 'Personagem Vivo', 'Mickey', 'servico_19_12_2018_011726.jpeg'),
(886, 'Camarim Fashion', '', 'servico_19_12_2018_083124.jpeg'),
(887, 'Camarim Fashion', '', 'servico_19_12_2018_083211.jpeg'),
(888, 'Camarim Fashion', '', 'servico_19_12_2018_083231.jpeg'),
(894, 'Camarim Fashion', '', 'servico_19_12_2018_083740.jpeg'),
(895, 'Camarim Fashion', '', 'servico_19_12_2018_083912.jpeg'),
(896, 'Camarim Fashion', '', 'servico_19_12_2018_083943.jpeg'),
(903, 'Camarim Fashion', '', 'servico_19_12_2018_084351.jpeg'),
(907, 'Camarim Fashion', '', 'servico_19_12_2018_084646.jpeg'),
(909, 'Camarim Fashion', '', 'servico_19_12_2018_084741.jpeg'),
(910, 'Camarim Fashion', '', 'servico_19_12_2018_084829.jpeg'),
(912, 'Camarim Fashion', '', 'servico_19_12_2018_085040.jpeg'),
(914, 'Oficina de Slime', '', 'servico_27_01_2019_080124.jpeg'),
(915, 'Oficina de Slime', '', 'servico_27_01_2019_080152.jpeg'),
(917, 'Oficina de Slime', '', 'servico_27_01_2019_080316.jpeg'),
(918, 'Oficina de Slime', '', 'servico_27_01_2019_080350.jpeg'),
(919, 'Oficina de Slime', '', 'servico_27_01_2019_080413.jpeg'),
(920, 'Oficina de Slime', '', 'servico_27_01_2019_080517.jpeg'),
(923, 'Contação de História', '', 'servico_27_01_2019_080640.jpeg'),
(924, 'Contação de História', '', 'servico_27_01_2019_080704.jpeg'),
(925, 'Contação de História', '', 'servico_27_01_2019_080740.jpeg'),
(926, 'Contação de História', '', 'servico_27_01_2019_080801.jpeg'),
(928, 'Contação de História', '', 'servico_27_01_2019_081055.jpeg'),
(929, 'Animação Infantil', '', 'servico_13_03_2019_035209.jpeg'),
(930, 'Animação Infantil', '', 'servico_13_03_2019_035229.jpeg'),
(931, 'Animação Infantil', '', 'servico_13_03_2019_035328.jpeg'),
(932, 'Animação Infantil', '', 'servico_13_03_2019_035354.jpeg'),
(933, 'Animação Infantil', '', 'servico_13_03_2019_035431.jpeg'),
(934, 'Animação Infantil', '', 'servico_13_03_2019_035537.jpeg'),
(935, 'Animação Infantil', '', 'servico_13_03_2019_035604.jpeg'),
(936, 'Animação Infantil', '', 'servico_13_03_2019_035626.jpeg'),
(939, 'Animação Infantil', '', 'servico_13_03_2019_040330.jpeg'),
(940, 'Animação Infantil', '', 'servico_13_03_2019_040432.jpeg'),
(941, 'Animação Infantil', '', 'servico_13_03_2019_040457.jpeg'),
(945, 'Camarim Fashion', '', 'servico_20_03_2019_045607.jpeg'),
(951, 'Camarim Fashion', '', 'servico_20_03_2019_051441.jpeg'),
(952, 'Camarim Fashion', '', 'servico_20_03_2019_051458.jpeg'),
(953, 'Camarim Fashion', '', 'servico_20_03_2019_051517.jpeg'),
(954, 'Camarim Fashion', '', 'servico_20_03_2019_051532.jpeg'),
(955, 'Camarim Fashion', '', 'servico_20_03_2019_051624.jpeg'),
(956, 'Camarim Fashion', '', 'servico_20_03_2019_051701.jpeg'),
(958, 'Camarim Fashion', '', 'servico_20_03_2019_051744.jpeg'),
(961, 'Camarim Fashion', '', 'servico_20_03_2019_051949.jpeg'),
(962, 'Camarim Fashion', '', 'servico_20_03_2019_052010.jpeg'),
(965, 'Pintura de Rosto', '', 'servico_20_03_2019_052839.jpeg'),
(966, 'Pintura de Rosto', '', 'servico_20_03_2019_052854.jpeg'),
(968, 'Pintura de Rosto', '', 'servico_20_03_2019_053005.jpeg'),
(969, 'Pintura de Rosto', '', 'servico_20_03_2019_053021.jpeg'),
(970, 'Pintura de Rosto', '', 'servico_21_03_2019_031430.jpeg'),
(971, 'Oficina de Slime', '', 'servico_27_03_2019_063456.jpeg'),
(972, 'Animação Infantil', '', 'servico_27_03_2019_063517.jpeg'),
(973, 'Animação Infantil', '', 'servico_27_03_2019_063532.jpeg'),
(974, 'Animação Infantil', '', 'servico_27_03_2019_063544.jpeg'),
(975, 'Animação Infantil', '', 'servico_27_03_2019_063602.jpeg'),
(976, 'Animação Infantil', '', 'servico_27_03_2019_063613.jpeg'),
(977, 'Animação Infantil', '', 'servico_27_03_2019_063640.jpeg'),
(978, 'Pintura de Rosto', '', 'servico_27_03_2019_094055.jpeg'),
(987, 'Camarim Fashion', '', 'servico_27_03_2019_101839.jpeg'),
(989, 'Camarim Fashion', '', 'servico_27_03_2019_102253.jpeg'),
(991, 'Camarim Fashion', '', 'servico_27_03_2019_102529.jpeg'),
(992, 'Camarim Fashion', '', 'servico_27_03_2019_102605.jpeg'),
(994, 'Camarim Fashion', '', 'servico_27_03_2019_102658.jpeg'),
(995, 'Camarim Fashion', '', 'servico_27_03_2019_102716.jpeg'),
(996, 'Camarim Fashion', '', 'servico_27_03_2019_102736.jpeg'),
(997, 'Camarim Fashion', '', 'servico_27_03_2019_102831.jpeg'),
(998, 'Camarim Fashion', '', 'servico_27_03_2019_102913.jpeg'),
(999, 'Pintura de Rosto', '', 'servico_27_03_2019_103138.jpeg'),
(1000, 'Pintura de Rosto', '', 'servico_27_03_2019_103247.jpeg'),
(1002, 'Pintura de Rosto', '', 'servico_27_03_2019_103519.jpeg'),
(1003, 'Pintura de Rosto', '', 'servico_27_03_2019_103641.jpeg'),
(1005, 'Pintura de Rosto', '', 'servico_01_04_2019_102045.jpeg'),
(1006, 'Pintura de Rosto', '', 'servico_01_04_2019_102115.jpeg'),
(1007, 'Pintura de Rosto', '', 'servico_01_04_2019_102143.jpeg'),
(1008, 'Pintura de Rosto', '', 'servico_01_04_2019_102157.jpeg'),
(1009, 'Pintura de Rosto', '', 'servico_01_04_2019_102210.jpeg'),
(1010, 'Pintura de Rosto', '', 'servico_01_04_2019_102220.jpeg'),
(1011, 'Pintura de Rosto', '', 'servico_01_04_2019_102313.jpeg'),
(1012, 'Animação Infantil', '', 'servico_01_04_2019_102626.jpeg'),
(1013, 'Animação Infantil', '', 'servico_01_04_2019_102635.jpeg'),
(1014, 'Animação Infantil', '', 'servico_01_04_2019_102643.jpeg'),
(1015, 'Animação Infantil', '', 'servico_01_04_2019_102653.jpeg'),
(1016, 'Animação Infantil', '', 'servico_01_04_2019_102924.jpeg'),
(1018, 'Animação Infantil', '', 'servico_01_04_2019_103245.jpeg'),
(1019, 'Animação Infantil', '', 'servico_01_04_2019_103306.jpeg'),
(1020, 'Animação Infantil', '', 'servico_01_04_2019_103331.jpeg'),
(1021, 'Animação Infantil', '', 'servico_01_04_2019_103350.jpeg'),
(1022, 'Animação Infantil', '', 'servico_01_04_2019_103618.jpeg'),
(1023, 'Animação Infantil', '', 'servico_01_04_2019_103650.jpeg'),
(1025, 'Personagem Vivo', 'Homem Aranha', 'servico_01_04_2019_105643.jpeg'),
(1026, 'Personagem Vivo', 'Princesas', 'servico_01_04_2019_105927.jpeg'),
(1028, 'Personagem Vivo', 'Sereia', 'servico_08_04_2019_103558.jpeg'),
(1031, 'Personagem Vivo', 'Anna- Fever', 'servico_08_04_2019_103802.jpeg'),
(1032, 'Personagem Vivo', 'Olaf', 'servico_08_04_2019_103847.jpeg'),
(1033, 'Personagem Vivo', 'Anna e Elsa - Fever', 'servico_08_04_2019_103916.jpeg'),
(1034, 'Personagem Vivo', 'Chase', 'servico_08_04_2019_103938.jpeg'),
(1037, 'Personagem Vivo', 'Chapeuzinho Vermelho e Lobo Mau', 'servico_08_04_2019_104126.jpeg'),
(1038, 'Personagem Vivo', 'Chapeuzinho Vermelho e Lobo Mau', 'servico_08_04_2019_104238.jpeg'),
(1039, 'Personagem Vivo', 'Chapeuzinho Vermelho e Lobo Mau', 'servico_08_04_2019_104546.jpeg'),
(1040, 'Personagem Vivo', 'Chapeuzinho Vermelho e Lobo Mau', 'servico_08_04_2019_104716.jpeg'),
(1045, 'Personagem Vivo', 'Minnie Safari', 'servico_08_04_2019_105003.jpeg'),
(1046, 'Personagem Vivo', 'Mickey Safari', 'servico_08_04_2019_105027.jpeg'),
(1047, 'Personagem Vivo', 'Mickey e Minnie Safari', 'servico_08_04_2019_105103.jpeg'),
(1048, 'Personagem Vivo', 'Mickey e Minnie Safari', 'servico_08_04_2019_105132.jpeg'),
(1049, 'Personagem Vivo', 'Mickey e Minnie Safari', 'servico_08_04_2019_105210.jpeg'),
(1050, 'Personagem Vivo', 'Pato Donald', 'servico_08_04_2019_105351.jpeg'),
(1051, 'Personagem Vivo', 'Pato Donald', 'servico_08_04_2019_105626.jpeg'),
(1054, 'Personagem Vivo', 'Star Wars', 'servico_11_04_2019_113449.jpeg'),
(1055, 'Personagem Vivo', 'Star Wars', 'servico_11_04_2019_113523.jpeg'),
(1056, 'Personagem Vivo', 'Darth Vader', 'servico_11_04_2019_113634.jpeg'),
(1057, 'Personagem Vivo', 'Star Wars', 'servico_14_04_2019_090706.jpeg'),
(1060, 'Pintura de Rosto', '', 'servico_14_04_2019_092642.jpeg'),
(1061, 'Pintura de Rosto', '', 'servico_14_04_2019_092702.jpeg'),
(1064, 'Pintura de Rosto', '', 'servico_14_04_2019_092839.jpeg'),
(1065, 'Pintura de Rosto', '', 'servico_14_04_2019_092855.jpeg'),
(1066, 'Animação Infantil', '', 'servico_15_04_2019_104445.jpeg'),
(1067, 'Animação Infantil', '', 'servico_15_04_2019_104646.jpeg'),
(1068, 'Animação Infantil', '', 'servico_15_04_2019_104709.jpeg'),
(1069, 'Animação Infantil', '', 'servico_15_04_2019_104721.jpeg'),
(1070, 'Pintura de Rosto', '', 'servico_24_04_2019_051804.jpeg'),
(1071, 'Pintura de Rosto', '', 'servico_24_04_2019_051850.jpeg'),
(1074, 'Pintura de Rosto', '', 'servico_25_04_2019_010540.jpeg'),
(1079, 'Personagem Vivo', 'Mulher Maravilha e Capitão', 'servico_16_05_2019_115928.jpeg'),
(1080, 'Personagem Vivo', 'Capitão América', 'servico_17_05_2019_120139.jpeg'),
(1081, 'Personagem Vivo', 'Malévola', 'servico_17_05_2019_120209.jpeg'),
(1082, 'Personagem Vivo', 'Minnie', 'servico_17_05_2019_120241.jpeg'),
(1083, 'Personagem Vivo', 'Princesinha Sofia', 'servico_17_05_2019_120403.jpeg'),
(1085, 'Animação Infantil', '', 'servico_20_05_2019_100327.jpeg'),
(1086, 'Animação Infantil', '', 'servico_20_05_2019_100349.jpeg'),
(1087, 'Animação Infantil', '', 'servico_08_07_2019_101323.jpeg'),
(1088, 'Animação Infantil', '', 'servico_08_07_2019_101419.jpeg'),
(1090, 'Animação Infantil', '', 'servico_08_07_2019_102137.jpeg'),
(1091, 'Animação Infantil', '', 'servico_21_07_2019_011302.jpeg'),
(1092, 'Animação Infantil', '', 'servico_21_07_2019_011744.jpeg'),
(1093, 'Animação Infantil', '', 'servico_21_07_2019_012602.jpeg'),
(1094, 'Animação Infantil', '', 'servico_21_07_2019_012739.jpeg'),
(1097, 'Personagem Vivo', 'Anna', 'servico_21_07_2019_043206.jpeg'),
(1098, 'Personagem Vivo', 'Frozen', 'servico_21_07_2019_043238.jpeg'),
(1105, 'Personagem Vivo', 'Elsa e Anna', 'servico_21_07_2019_044212.jpeg'),
(1106, 'Personagem Vivo', 'Elsa', 'servico_21_07_2019_044316.jpeg'),
(1107, 'Personagem Vivo', 'Elsa', 'servico_21_07_2019_044648.jpeg'),
(1108, 'Personagem Vivo', 'Patrulha Canina', 'servico_21_07_2019_044754.jpeg'),
(1109, 'Personagem Vivo', 'Homem de Ferro', 'servico_21_07_2019_044901.jpeg'),
(1110, 'Personagem Vivo', 'Heróis', 'servico_21_07_2019_044938.jpeg'),
(1111, 'Personagem Vivo', 'Heróis', 'servico_21_07_2019_045005.jpeg'),
(1112, 'Personagem Vivo', 'Capitão América- Vingadores', 'servico_21_07_2019_045125.jpeg'),
(1113, 'Personagem Vivo', 'Lady Bug e Cat Noir- Miráculos', 'servico_21_07_2019_045218.jpeg'),
(1114, 'Camarim Fashion', '', 'servico_31_07_2019_123440.jpeg'),
(1115, 'Personagem Vivo', 'Ariel Sereia', 'servico_13_08_2019_072417.jpeg'),
(1116, 'Personagem Vivo', 'Ariel Sereia', 'servico_13_08_2019_072512.jpeg'),
(1117, 'Personagem Vivo', 'Ariel Sereia e Pirata', 'servico_13_08_2019_072642.jpeg'),
(1118, 'Personagem Vivo', 'Pirata', 'servico_13_08_2019_072809.jpeg'),
(1120, 'Camarim Fashion', '', 'servico_14_08_2019_015643.jpeg'),
(1121, 'Animação Infantil', '', 'servico_19_08_2019_115056.jpeg'),
(1122, 'Animação Infantil', '', 'servico_19_08_2019_115431.jpeg'),
(1123, 'Animação Infantil', '', 'servico_19_08_2019_115712.jpeg'),
(1124, 'Animação Infantil', '', 'servico_19_08_2019_115728.jpeg'),
(1125, 'Pintura de Rosto', '', 'servico_19_08_2019_115810.jpeg'),
(1126, 'Pintura de Rosto', '', 'servico_19_08_2019_115835.jpeg'),
(1127, 'Pintura de Rosto', '', 'servico_19_08_2019_115855.jpeg'),
(1128, 'Personagem Vivo', 'Woody e Jessie', 'servico_20_08_2019_120014.jpeg'),
(1129, 'Personagem Vivo', 'Woody e Jessie', 'servico_20_08_2019_120034.jpeg'),
(1130, 'Personagem Vivo', 'Anna e Elsa', 'servico_20_08_2019_120109.jpeg'),
(1131, 'Personagem Vivo', 'Home de Ferro', 'servico_16_10_2019_122444.jpeg'),
(1132, 'Personagem Vivo', 'Capitão América', 'servico_16_10_2019_122514.jpeg'),
(1133, 'Personagem Vivo', 'Vingadores', 'servico_16_10_2019_122543.jpeg'),
(1135, 'Personagem Vivo', 'Flash e Mulher Maravilha', 'servico_16_10_2019_092217.jpeg'),
(1137, 'Camarim Fashion', '', 'servico_30_10_2019_113834.jpeg'),
(1138, 'Camarim Fashion', '', 'servico_30_10_2019_113900.jpeg'),
(1139, 'Camarim Fashion', '', 'servico_30_10_2019_113924.jpeg'),
(1140, 'Camarim Fashion', '', 'servico_30_10_2019_113941.jpeg'),
(1141, 'Pintura de Rosto', '', 'servico_30_10_2019_114443.jpeg'),
(1143, 'Pintura de Rosto', '', 'servico_30_10_2019_114616.jpeg'),
(1146, 'Personagem Vivo', 'Anna e Elsa', 'servico_19_11_2019_121201.jpeg'),
(1147, 'Personagem Vivo', 'Anna e Elsa', 'servico_19_11_2019_121221.jpeg'),
(1149, 'Personagem Vivo', 'Branca de Neve', 'servico_19_11_2019_121339.jpeg'),
(1150, 'Personagem Vivo', 'Masha e o Urso', 'servico_19_11_2019_121402.jpeg'),
(1151, 'Personagem Vivo', 'Anna e Elsa fever', 'servico_19_11_2019_121446.jpeg'),
(1152, 'Personagem Vivo', 'Anna e Elsa fever', 'servico_19_11_2019_121713.jpeg'),
(1153, 'Personagem Vivo', 'Anna e Elsa', 'servico_19_11_2019_121802.jpeg'),
(1155, 'Animação Infantil', '', 'servico_15_01_2020_071820.jpeg'),
(1156, 'Animação Infantil', '', 'servico_15_01_2020_072035.jpeg'),
(1158, 'Animação Infantil', '', 'servico_27_01_2020_063555.jpeg'),
(1159, 'Animação Infantil', '', 'servico_27_01_2020_063809.jpeg'),
(1160, 'Animação Infantil', '', 'servico_27_01_2020_065110.jpeg'),
(1162, 'Animação Infantil', '', 'servico_27_01_2020_065325.jpeg'),
(1163, 'Animação Infantil', '', 'servico_27_01_2020_065540.jpeg'),
(1164, 'Animação Infantil', '', 'servico_27_01_2020_071624.jpeg'),
(1165, 'Animação Infantil', '', 'servico_27_01_2020_071741.jpeg'),
(1166, 'Contação de História', '', 'servico_27_01_2020_071838.jpeg'),
(1167, 'Animação Infantil', '', 'servico_27_01_2020_072108.jpeg'),
(1170, 'Pintura de Rosto', '', 'servico_27_01_2020_082835.jpeg'),
(1171, 'Pintura de Rosto', '', 'servico_27_01_2020_082918.jpeg'),
(1172, 'Pintura de Rosto', '', 'servico_27_01_2020_082934.jpeg'),
(1173, 'Pintura de Rosto', '', 'servico_27_01_2020_083325.jpeg'),
(1174, 'Personagem Vivo', 'Lobo Mau', 'servico_28_01_2020_073344.jpeg'),
(1175, 'Personagem Vivo', 'Chapeuzinho vermelho', 'servico_28_01_2020_073419.jpeg'),
(1176, 'Personagem Vivo', 'LOLs e Moana', 'servico_28_01_2020_073543.jpeg'),
(1178, 'Animação Infantil', '', 'servico_29_01_2020_071328.jpeg'),
(1180, 'Animação Infantil', '', 'servico_29_01_2020_074530.jpeg'),
(1181, 'Animação Infantil', '', 'servico_29_01_2020_074738.jpeg'),
(1183, 'Oficina de Slime', '', 'servico_01_02_2020_024113.jpeg'),
(1184, 'Oficina de Slime', '', 'servico_01_02_2020_024346.jpeg'),
(1185, 'Animação Infantil', '', 'servico_01_02_2020_045307.jpeg'),
(1186, 'Animação Infantil', '', 'servico_01_02_2020_045403.jpeg'),
(1190, 'Oficina de Slime', '', 'servico_01_02_2020_045712.jpeg'),
(1191, 'Oficina de Slime', '', 'servico_01_02_2020_045745.jpeg'),
(1192, 'Oficina de Slime', '', 'servico_01_02_2020_045807.jpeg'),
(1193, 'Oficina de Slime', '', 'servico_01_02_2020_045904.jpeg'),
(1197, 'Pintura de Rosto', '', 'servico_01_02_2020_041748.jpeg'),
(1198, 'Pintura de Rosto', '', 'servico_01_02_2020_041805.jpeg'),
(1200, 'Contação de História', '', 'servico_19_02_2020_110049.jpeg'),
(1201, 'Contação de História', '', 'servico_19_02_2020_110147.jpeg'),
(1202, 'Contação de História', '', 'servico_19_02_2020_110309.jpeg'),
(1203, 'Contação de História', '', 'servico_19_02_2020_110427.jpeg'),
(1204, 'Personagem Vivo', 'Mickey e Minnie- Marinheiros', 'servico_19_02_2020_110530.jpeg'),
(1206, 'Animação Infantil', '', 'servico_19_02_2020_111036.jpeg'),
(1208, 'Animação Infantil', '', 'servico_20_02_2020_120303.jpeg'),
(1209, 'Animação Infantil', '', 'servico_20_02_2020_120328.jpeg'),
(1213, 'Personagem Vivo', 'Mickey e Minnie- Marinheiros', 'servico_12_03_2020_010309.jpeg'),
(1214, 'Animação Infantil', '', 'servico_12_03_2020_084616.jpeg'),
(1215, 'Animação Infantil', '', 'servico_12_03_2020_084715.jpeg'),
(1216, 'Personagem Vivo', 'Fada luxo rosa', 'servico_12_03_2020_084808.jpeg'),
(1217, 'Personagem Vivo', 'Fada luxo rosa', 'servico_12_03_2020_084945.jpeg'),
(1222, 'Personagem Vivo', '', 'servico_12_03_2020_115530.jpeg'),
(1224, 'Personagem Vivo', 'Fada luxo branco', 'servico_13_03_2020_120518.jpeg'),
(1225, 'Personagem Vivo', 'Fada luxo branco', 'servico_13_03_2020_120604.jpeg'),
(1227, 'Personagem Vivo', 'Buzz', 'servico_29_06_2020_020233.jpeg'),
(1228, 'Personagem Vivo', 'Buzz', 'servico_29_06_2020_020253.jpeg'),
(1230, 'Personagem Vivo', 'Elsa- Frozen 2', 'servico_29_06_2020_020429.jpeg'),
(1231, 'Personagem Vivo', 'Elsa- Frozen 2', 'servico_29_06_2020_020628.jpeg'),
(1232, 'Personagem Vivo', 'Anna- Frozen 2', 'servico_29_06_2020_020840.jpeg'),
(1233, 'Personagem Vivo', 'Anna- Frozen 2', 'servico_29_06_2020_021712.jpeg'),
(1234, 'Pintura de Rosto', '', 'servico_13_07_2020_114838.jpeg'),
(1235, 'Camarim Fashion', '', 'servico_13_07_2020_115448.jpeg'),
(1238, 'Pintura de Rosto', '', 'servico_13_07_2020_115811.jpeg'),
(1239, 'Pintura de Rosto', '', 'servico_13_07_2020_115858.jpeg'),
(1240, 'Pintura de Rosto', '', 'servico_13_07_2020_115946.png'),
(1241, 'Pintura de Rosto', '', 'servico_14_07_2020_120121.jpeg'),
(1242, 'Personagem Vivo', 'Masha (Masha e Urso)', 'servico_21_08_2020_060545.jpeg'),
(1243, 'Personagem Vivo', 'Sininho (Tinker Bell)', 'servico_21_08_2020_060616.jpeg'),
(1244, 'Personagem Vivo', 'Sininho (Tinker Bell)', 'servico_21_08_2020_060645.jpeg'),
(1247, 'Personagem Vivo', 'Emília (Sitio do Pica Pau Amarelo)', 'servico_21_08_2020_060813.jpeg'),
(1248, 'Personagem Vivo', 'Emília (Sítio do Pica Pau Amarelo)', 'servico_21_08_2020_060919.jpeg'),
(1249, 'Personagem Vivo', 'Emília (Sítio do Pica Pau Amarelo)', 'servico_21_08_2020_061019.jpeg'),
(1250, 'Personagem Vivo', 'Bela (Bela e a Fera)', 'servico_21_08_2020_061152.png'),
(1251, 'Personagem Vivo', 'Bela e a Fera', 'servico_21_08_2020_061325.png'),
(1253, 'Personagem Vivo', 'Bela (Bela e a Fera)', 'servico_21_08_2020_061441.jpeg'),
(1254, 'Personagem Vivo', 'Pocahontas', 'servico_21_08_2020_061608.jpeg'),
(1256, 'Personagem Vivo', 'Moana', 'servico_21_08_2020_062257.jpeg'),
(1257, 'Personagem Vivo', 'Moana', 'servico_21_08_2020_062327.jpeg'),
(1258, 'Personagem Vivo', 'Moana', 'servico_21_08_2020_062525.jpeg'),
(1259, 'Personagem Vivo', 'Aurora (A Bela Adormecida)', 'servico_21_08_2020_062611.jpeg'),
(1260, 'Personagem Vivo', 'Lady Bug (Miráculos)', 'servico_21_08_2020_062711.jpeg'),
(1261, 'Pintura de Rosto', '', 'servico_21_08_2020_070629.png'),
(1262, 'Pintura de Rosto', '', 'servico_21_08_2020_070713.png'),
(1263, 'Personagem Vivo', 'Skye e Marshall- Patrulha Canina', 'servico_27_08_2020_120835.jpeg'),
(1265, 'Personagem Vivo', 'Branca de Neve', 'servico_27_08_2020_121043.jpeg'),
(1266, 'Personagem Vivo', 'Branca de Neve', 'servico_27_08_2020_121331.jpeg'),
(1267, 'Personagem Vivo', 'Branca de Neve', 'servico_27_08_2020_121529.jpeg'),
(1268, 'Personagem Vivo', 'Mulher Maravilha', 'servico_27_08_2020_121815.jpeg'),
(1269, 'Personagem Vivo', 'Frozen', 'servico_27_08_2020_121932.jpeg'),
(1270, 'Personagem Vivo', 'Buzz (Toy Story)', 'servico_01_09_2020_010826.jpeg'),
(1271, 'Personagem Vivo', 'Buzz (Toy Story)', 'servico_01_09_2020_011649.jpeg'),
(1272, 'Personagem Vivo', 'Buzz (Toy Story)', 'servico_01_09_2020_011832.jpeg'),
(1273, 'Personagem Vivo', 'PJ MASKS', 'servico_10_09_2020_010237.jpeg'),
(1274, 'Personagem Vivo', 'Batman', 'servico_10_09_2020_010342.jpeg'),
(1275, 'Personagem Vivo', 'LOL- Queen Bee', 'servico_10_09_2020_010412.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `trio`
--

CREATE TABLE `trio` (
  `id_trio` int(9) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` date NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `alem` varchar(100) NOT NULL,
  `rede_social` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `trio`
--

INSERT INTO `trio` (`id_trio`, `nome`, `idade`, `funcao`, `alem`, `rede_social`, `foto`) VALUES
(34, 'Natália Bittencourt', '1993-01-23', 'Sócia e Personagem.', 'Fisioterapeuta, Atriz e Modelo', '', 'parceiro_01_06_2016_103603.jpg'),
(35, 'Nayara Bittencourt', '1994-03-02', 'Sócia e Personagem.', 'Fisioterapeuta', '', 'parceiro_02_06_2016_123421.jpg'),
(36, 'Valmir Teotonio', '1991-06-21', 'Sócio, Personagem, Animação, Pintura.', 'Estudante de Saúde Coletiva UnB e Técnico em Recreação e Lazer', '', 'parceiro_01_06_2016_103604.jpg'),
(59, 'Brendon Lelis', '1995-02-20', 'Animação.', 'Estudante de Sistemas de Informação', '', 'parceiro_02_06_2016_045055.jpg'),
(61, 'Alan Costa', '1991-09-15', 'Gestor/Gerente Administrativo.', 'Técnico de Informática e Gestor em Tecnologia da Informação', '', 'parceiro_02_06_2016_061330.jpg'),
(62, 'Luciana Rezende', '1996-04-01', 'Animação e Pintura.', 'Estudante de Fonoaudiólogia UnB', '', 'parceiro_02_06_2016_063306.jpg'),
(70, 'Mariana Martinez', '1995-08-14', 'Animação, Pintura, Personagem, Camarim Fashion e Oficina.', 'Estudante de Engenharia UnB', '', 'parceiro_29_06_2016_085310.jpg'),
(74, 'Caroliny Victória', '1998-05-14', 'Animação.', 'Estudante de Enfermagem UnB', '', 'parceiro_26_06_2017_094424.jpg'),
(76, 'Isabella Mariana', '1997-07-06', 'Pintura.', 'Estudante de Saúde Coletiva UnB', '', 'parceiro_26_06_2017_095706.jpg'),
(77, 'Jéssica Campos', '1998-09-25', 'Animação.', 'Estudante de Fisioterapia', '', 'parceiro_01_07_2017_081428.jpg'),
(81, 'Jeremias Bruno', '1996-01-25', 'Pintura.', 'Estudante de Fisioterapia UnB', '', 'parceiro_14_07_2017_040041.jpg'),
(82, 'Anderson Francisco', '1996-02-21', 'Personagem e Animação.', 'Estudante de Fonoaudiologia UnB', '', 'parceiro_22_07_2017_031013.jpg'),
(89, 'Elaine de Oliveira', '1995-07-21', 'Animação, Personagem e Oficina.', 'Estudante de Fisioterapia UnB', '', 'parceiro_05_09_2017_062532.jpeg'),
(90, 'Bruno Carvalho', '1997-07-25', 'Personagem e Animação.', 'Assistente Escolar', '', 'parceiro_05_09_2017_063307.jpeg'),
(97, 'Ana Beatriz', '1994-11-15', 'Animação e Oficina.', 'Estudante de Psicologia UnB', '', 'parceiro_01_11_2017_054739.jpeg'),
(102, 'Priscila Tavares', '1993-08-16', 'Pintura e Camarim Fashion.', 'Estudante de Artes Cênicas- UnB', '', 'parceiro_29_11_2017_044041.jpeg'),
(105, 'Marcelo Petrillo', '1988-10-17', 'Animação.', 'Gestor em Tecnologia da Informação', '', 'parceiro_17_05_2018_111100.jpeg'),
(106, 'Yasmim Almeida', '1997-08-20', 'Animação e Camarim Fashion.', 'Estudante de Educação Física- UnB', '', 'parceiro_17_05_2018_071611.JPG'),
(109, 'Gabriel Homero', '1998-05-02', 'Animação.', 'Estudante de Análise e Desenvolvimento de Sistemas', '', 'parceiro_19_05_2018_010633.JPG'),
(110, 'Lilian Alencar', '0000-00-00', 'Contação de Histórias.', 'Atriz, Performer, Diretora, Pordutora, Bailarina, Contadora de Histórias. Formada em Letras/Portuguê', '', 'parceiro_19_05_2018_023348.jpg'),
(111, 'Thalia Ariadne', '1998-01-18', 'Personagem e Camarim Fashion.', 'Estudante de Odontologia', '', 'parceiro_20_05_2018_033028.jpeg'),
(113, 'Raul Victor', '1997-09-30', 'Animação e Personagem.', 'Estudante de Educação Fisica', '', 'parceiro_21_05_2018_080938.jpeg'),
(116, 'Leonardo Camilo', '1991-09-08', 'Animação e Personagem.', 'Administrador', '', 'parceiro_21_05_2018_094548.JPG'),
(119, 'Arthur Szerman', '1992-01-03', 'Personagem.', 'Comissário de Bordo', '', 'parceiro_21_05_2018_102739.JPG'),
(120, 'Marcela Martins', '1997-09-11', 'Personagem.', 'Estudante de Farmácia - UnB', '', 'parceiro_22_05_2018_015641.jpeg'),
(121, 'Karolinne Santos', '1992-04-12', 'Personagem e Oficina.', 'Estudante de Educação Fisica- UnB', '', 'parceiro_23_05_2018_091416.jpeg'),
(122, 'Maycow Marques', '1995-03-23', 'Animação.', 'Empresário, Consultor de carreiras e desenvolvedor de softwares.', '', 'parceiro_28_05_2018_113418.jpeg'),
(124, 'Diego Vieira dos Santos', '1991-09-01', 'Animação.', '', '', 'parceiro_06_08_2018_083806.JPG'),
(126, 'Bruna Oliveira', '1996-08-12', 'Animação.', 'Estudante de Terapia Ocupacional- UnB e voluntária no projeto social Laços da Alegria.', '', 'parceiro_06_08_2018_084628.JPG'),
(127, 'Cristiane Machado', '1996-10-27', 'Animação.', 'Estudante de Enfermagem', '', 'parceiro_06_08_2018_084836.JPG'),
(131, 'Walter Pamplona', '1994-01-29', 'Animação.', 'Estudante de Saúde Coletiva- UnB', '', 'parceiro_06_08_2018_120947.JPG'),
(135, 'John Willatan', '1997-04-06', 'Animação e Oficina.', 'Farmácia-UnB', '', 'parceiro_17_08_2018_121152.JPG'),
(137, 'Maryana Garcia', '1996-07-27', 'Animação e Camarim Fashion.', 'Empresária', '', 'parceiro_27_08_2018_074008.jpeg'),
(138, 'Daniel Oliveira da Mata', '1993-11-06', 'Animação.', 'Estudante de Doutorado-UnB.', '', 'parceiro_23_01_2019_025854.jpg'),
(139, 'Maria Beatriz Caires', '1997-04-11', 'Personagem', 'Estudante de Farmácia- UnB', '', 'parceiro_25_01_2019_031833.jpeg'),
(140, 'Maria Olivia de Souza', '1997-09-07', 'Personagem', 'Estudante de Nutição- UniCeub', '', 'parceiro_08_10_2019_121906.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(9) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `sobrenome_usuario` varchar(50) DEFAULT NULL,
  `foto_usuario` varchar(50) DEFAULT NULL,
  `sexo_usuario` varchar(9) DEFAULT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `cpf_usuario` varchar(14) NOT NULL,
  `nascimento_usuario` date NOT NULL,
  `login_usuario` varchar(100) NOT NULL,
  `senha_usuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `foto_usuario`, `sexo_usuario`, `email_usuario`, `cpf_usuario`, `nascimento_usuario`, `login_usuario`, `senha_usuario`) VALUES
(1, 'Administrador', 'do Sistema', 'user1_18122018085835.jpg', 'MASCULINO', 'raphael.a.a.p@gmail.com', '999.999.999-99', '2018-11-25', 'admin', 'd243ee28aa5930dea901298cdeb2cb9f'),
(2, 'Valmir ', 'Lopes', NULL, NULL, 'valmir_teotonio@hotmail.com', '000.000.000-00', '0000-00-00', 'valmir', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Nayara', 'Bittencourt', NULL, 'Masculino', 'nayara2394@gmail.com', '000.000.000-00', '1969-12-31', 'Nayara', '5fff31dbd287a3cd70b11ecd8be3f9a3'),
(11, 'Trio Bagunça', 'Sistema', NULL, NULL, 'triobaguncafesta@gmail.com', '000.000.000-00', '2018-12-20', 'triobagunca', '7dfa834155e465b25ccc2f6deedb9fa9');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Índices de tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices de tabela `clientes_vips`
--
ALTER TABLE `clientes_vips`
  ADD PRIMARY KEY (`id_cliente_vip`);

--
-- Índices de tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id_colab`);

--
-- Índices de tabela `crianca_evento`
--
ALTER TABLE `crianca_evento`
  ADD PRIMARY KEY (`id_crianca`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices de tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices de tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Índices de tabela `ingressos`
--
ALTER TABLE `ingressos`
  ADD PRIMARY KEY (`id_ingresso`);

--
-- Índices de tabela `pacotes`
--
ALTER TABLE `pacotes`
  ADD PRIMARY KEY (`id_pct`);

--
-- Índices de tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`id_parceiro`);

--
-- Índices de tabela `permissao_user`
--
ALTER TABLE `permissao_user`
  ADD PRIMARY KEY (`id_permission`);

--
-- Índices de tabela `recados`
--
ALTER TABLE `recados`
  ADD PRIMARY KEY (`id_recado`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices de tabela `trio`
--
ALTER TABLE `trio`
  ADD PRIMARY KEY (`id_trio`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `clientes_vips`
--
ALTER TABLE `clientes_vips`
  MODIFY `id_cliente_vip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id_colab` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `crianca_evento`
--
ALTER TABLE `crianca_evento`
  MODIFY `id_crianca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=884;

--
-- AUTO_INCREMENT de tabela `ingressos`
--
ALTER TABLE `ingressos`
  MODIFY `id_ingresso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pacotes`
--
ALTER TABLE `pacotes`
  MODIFY `id_pct` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `id_parceiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recados`
--
ALTER TABLE `recados`
  MODIFY `id_recado` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1276;

--
-- AUTO_INCREMENT de tabela `trio`
--
ALTER TABLE `trio`
  MODIFY `id_trio` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
