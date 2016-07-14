-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jul-2016 às 08:17
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thembait`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `stage_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stage_id` (`stage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `activities`
--

INSERT INTO `activities` (`id`, `designation`, `status`, `stage_id`) VALUES
(1, 'Construcao do dia gram de casos de uso', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `activities_projects`
--

CREATE TABLE IF NOT EXISTS `activities_projects` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `project_id` int(255) NOT NULL,
  `activity_id` int(255) NOT NULL,
  `stage_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`,`activity_id`,`stage_id`),
  KEY `activity_id` (`activity_id`),
  KEY `stage_id` (`stage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reclamation_id` (`complaint_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id`, `complaint_id`, `description`, `user_id`) VALUES
(1, 1, 'Antes de inserir a senha certifique-se de que a funcao CAPS LOCK nao esta activada', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `complaints`
--

INSERT INTO `complaints` (`id`, `title`, `description`, `project_id`) VALUES
(1, 'A senha nao Ã© reconhecida', 'Apos me registar no sistema ao tentar entrar nao reconheceu a senha', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `occupations`
--

CREATE TABLE IF NOT EXISTS `occupations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `occupations`
--

INSERT INTO `occupations` (`id`, `designation`) VALUES
(1, 'Gestor de Projecto'),
(2, 'Programador'),
(3, 'Analista de Sistema'),
(4, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `occupations_users`
--

CREATE TABLE IF NOT EXISTS `occupations_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `occupation_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activity_id` (`activity_id`),
  KEY `user_id` (`user_id`),
  KEY `occupation_id` (`occupation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `occupations_users`
--

INSERT INTO `occupations_users` (`id`, `user_id`, `occupation_id`, `activity_id`, `created`) VALUES
(1, 2, 2, 1, '2016-05-16 15:29:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `systemtype` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `progress` double DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `systemtype`, `deadline`, `progress`, `user_id`, `activo`) VALUES
(1, 'Sistema para suporte na consultoria e desenvolvimento de softwares', 'Ira auxiliar no processo de desenvolvimento de softwares de uma empresa, possibilitando que os tanto os clientes como a equipe de desenvolvimento acompanhe o progresso do projecto, e tambÃ©m servira para para suporte a consultoria por help desk. sendo por forum ou chat.', 'Plataforma web', '2016-05-16', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `stages`
--

INSERT INTO `stages` (`id`, `designation`) VALUES
(1, 'Modelacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `datebirth` date DEFAULT NULL,
  `nuit` int(30) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype_id` int(30) NOT NULL,
  `occupation_id` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fuction_id` (`occupation_id`),
  KEY `usertype_id` (`usertype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `datebirth`, `nuit`, `contact`, `username`, `password`, `usertype_id`, `occupation_id`) VALUES
(1, 'Celso Maxlhaieie', '2016-05-16', 549831926, '827460481', 'kaze@xava.com', '0000', 1, 4),
(2, 'Osvaldo Maria', '2016-05-16', 56486468, '827460481', 'om@xava.com', '0000', 2, 2),
(3, 'Oscar Sumbane', '2016-05-16', 846516894, '827460481', 'os@xava.com', '0000', 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usertypes`
--

CREATE TABLE IF NOT EXISTS `usertypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usertypes`
--

INSERT INTO `usertypes` (`id`, `designation`) VALUES
(1, 'Cliente'),
(2, 'Membro de Equipa de Desenvolvimento');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`);

--
-- Limitadores para a tabela `activities_projects`
--
ALTER TABLE `activities_projects`
  ADD CONSTRAINT `activities_projects_ibfk_3` FOREIGN KEY (`stage_id`) REFERENCES `stages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_projects_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_projects_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `occupations_users`
--
ALTER TABLE `occupations_users`
  ADD CONSTRAINT `occupations_users_ibfk_3` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `occupations_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `occupations_users_ibfk_2` FOREIGN KEY (`occupation_id`) REFERENCES `occupations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`occupation_id`) REFERENCES `occupations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`usertype_id`) REFERENCES `usertypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
