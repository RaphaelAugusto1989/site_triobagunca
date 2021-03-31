-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for triob261_bd
CREATE DATABASE IF NOT EXISTS `triob261_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `triob261_bd`;

-- Dumping structure for table triob261_bd.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `semana` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `local` text COLLATE utf8_unicode_ci NOT NULL,
  `qtd` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `valor` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `obs` text COLLATE utf8_unicode_ci NOT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `alter_user` int(11) DEFAULT NULL,
  `alter_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id_banner` int(9) NOT NULL AUTO_INCREMENT,
  `titulo_banner` text COLLATE utf8_unicode_ci NOT NULL,
  `img_banner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url_banner` text COLLATE utf8_unicode_ci NOT NULL,
  `ordem_banner` int(9) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_cli` varchar(14) NOT NULL,
  `nome_cli` varchar(50) NOT NULL,
  `nasc_cli` date NOT NULL,
  `fixo_cli` varchar(15) NOT NULL,
  `cel_cli` varchar(16) NOT NULL,
  `email_cli` varchar(50) NOT NULL,
  `cep_cli` varchar(15) NOT NULL DEFAULT '',
  `rua_cli` text NOT NULL,
  `cidade_cli` varchar(50) NOT NULL DEFAULT '',
  `bairro_cli` varchar(50) NOT NULL DEFAULT '0',
  `estado_cli` varchar(2) NOT NULL DEFAULT '',
  `comp_cli` text NOT NULL,
  `login_cli` varchar(16) NOT NULL,
  `pass_cli` varchar(50) NOT NULL,
  `create_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.colaborador
CREATE TABLE IF NOT EXISTS `colaborador` (
  `id_colab` int(9) NOT NULL AUTO_INCREMENT,
  `nome_colab` varchar(50) NOT NULL,
  `funcao_colab` varchar(30) NOT NULL,
  `nasc_colab` date NOT NULL,
  `end_colab` text NOT NULL,
  `fixo_colab` varchar(15) NOT NULL,
  `cel_colab` varchar(16) NOT NULL,
  `email_colab` varchar(50) NOT NULL,
  `obs_colab` text NOT NULL,
  PRIMARY KEY (`id_colab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_curso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fim_curso` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `niver_cli` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idade_niver` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `data_evento` date NOT NULL,
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
  `status_evento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(9) NOT NULL AUTO_INCREMENT,
  `imagem_galeria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB AUTO_INCREMENT=760 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.pacotes
CREATE TABLE IF NOT EXISTS `pacotes` (
  `id_pct` int(9) NOT NULL AUTO_INCREMENT,
  `nome_pct` varchar(50) DEFAULT '0',
  `tempo_pct` varchar(6) DEFAULT '0',
  `valor_pct` varchar(50) DEFAULT '0',
  `especificacao_pct` text NOT NULL,
  `obs_pct` text NOT NULL,
  PRIMARY KEY (`id_pct`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.permissao_user
CREATE TABLE IF NOT EXISTS `permissao_user` (
  `id_permission` int(10) unsigned NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `permission1` int(11) DEFAULT NULL,
  `permission2` int(11) DEFAULT NULL,
  `permission3` int(11) DEFAULT NULL,
  `permission4` int(11) DEFAULT NULL,
  `permission5` int(11) DEFAULT NULL,
  `permission6` int(11) DEFAULT NULL,
  `permission7` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_permission`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.recados
CREATE TABLE IF NOT EXISTS `recados` (
  `id_recado` int(9) NOT NULL AUTO_INCREMENT,
  `nome_recado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `recado` text COLLATE utf8_unicode_ci NOT NULL,
  `data_hora` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `aprovacao` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `fotos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_recado`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id_servico` int(9) NOT NULL AUTO_INCREMENT,
  `tipo_servico` varchar(50) NOT NULL,
  `nome_servico` varchar(50) NOT NULL,
  `imagem_servico` text NOT NULL,
  PRIMARY KEY (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=1131 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.trio
CREATE TABLE IF NOT EXISTS `trio` (
  `id_trio` int(9) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `idade` date NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `alem` varchar(100) NOT NULL,
  `rede_social` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_trio`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table triob261_bd.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(9) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) NOT NULL,
  `sobrenome_usuario` varchar(50) DEFAULT NULL,
  `foto_usuario` varchar(50) DEFAULT NULL,
  `sexo_usuario` varchar(9) DEFAULT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `cpf_usuario` varchar(14) NOT NULL,
  `nascimento_usuario` date NOT NULL,
  `login_usuario` varchar(20) NOT NULL,
  `senha_usuario` text NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
