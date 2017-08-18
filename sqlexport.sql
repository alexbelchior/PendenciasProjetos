/*
SQLyog Community v12.4.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - pendencias
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pendencias` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pendencias`;

/*Table structure for table `complexidade` */

DROP TABLE IF EXISTS `complexidade`;

CREATE TABLE `complexidade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `complexidade` */

insert  into `complexidade`(`id`,`tipo`) values 
(1,'Baixa'),
(2,'Media'),
(3,'Alta');

/*Table structure for table `diario` */

DROP TABLE IF EXISTS `diario`;

CREATE TABLE `diario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text,
  `data_diario` date DEFAULT NULL,
  `projeto_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projeto_id` (`projeto_id`),
  CONSTRAINT `diario_ibfk_1` FOREIGN KEY (`projeto_id`) REFERENCES `projetos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `diario` */

/*Table structure for table `pendencias` */

DROP TABLE IF EXISTS `pendencias`;

CREATE TABLE `pendencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Statuss_id` int(10) unsigned NOT NULL,
  `Complexidade_id` int(10) unsigned NOT NULL,
  `Projetos_id` int(10) unsigned NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_entrada` date DEFAULT NULL,
  `data_previsao` date DEFAULT NULL,
  `data_real` date DEFAULT NULL,
  `responsavel` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `Pendencias_FKIndex1` (`Projetos_id`),
  KEY `Pendencias_FKIndex2` (`Complexidade_id`),
  KEY `Pendencias_FKIndex3` (`Statuss_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `pendencias` */

insert  into `pendencias`(`id`,`Statuss_id`,`Complexidade_id`,`Projetos_id`,`descricao`,`data_entrada`,`data_previsao`,`data_real`,`responsavel`,`observacao`) values 
(1,2,1,5,'Teste de inserÃ§Ã£o de pendencia','2017-04-13','2017-04-17','0000-00-00','Alexandre / Rafael',''),
(2,3,3,16,'Alterar o css da home','2017-04-24','2017-04-26','0000-00-00','Alexandre',''),
(3,1,1,10,'Enviar a RAP atualizada para o cliente','2017-04-25','2017-04-26','0000-00-00','Alexandre',''),
(4,3,3,13,'Realizar o CRO','2017-04-25','2017-04-26','0000-00-00','Alexandre',''),
(5,1,3,13,'Realizar o THP e TEAF','2017-04-25','2017-04-25','0000-00-00','Alexandre',''),
(6,1,1,5,'InstalaÃ§Ã£o Visual Studio na mÃ¡quina de desenvolvimento','2017-04-25','2017-05-03','0000-00-00','Alexandre',''),
(7,2,1,17,'Documento de Riscos','2017-07-27','2017-08-01','0000-00-00','Alexandre','Montar documento listando os riscos do projeto'),
(8,3,1,2,'','0000-00-00','0000-00-00','0000-00-00','','');

/*Table structure for table `projetos` */

DROP TABLE IF EXISTS `projetos`;

CREATE TABLE `projetos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nr_proposta` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nr_gcti` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pjc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nr_dias` int(10) unsigned DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `hrs_custo` int(10) unsigned DEFAULT NULL,
  `hrs_venda` int(10) unsigned DEFAULT NULL,
  `observacoes` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ativo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vertical_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `projetos` */

insert  into `projetos`(`id`,`nome`,`nr_proposta`,`nr_gcti`,`pjc`,`nr_dias`,`data_inicio`,`data_fim`,`hrs_custo`,`hrs_venda`,`observacoes`,`ativo`,`vertical_id`) values 
(1,'Teste','SCO-17-0013','SCD-17-0002','PJC11323',20,'2017-04-11','2017-04-30',300,400,'Projeto Teste','N',1),
(2,'Auto RE Sinistro','SCO-17-0017','SCS-17-0002','PJC11340',32,'2017-04-05','2017-05-08',268,388,'Projeto de integração do sinistro do auto na nova plataforma','S',3),
(5,'Novo BVPMail','SCO-17-0020','SCD-17-0017','PJC0023',20,'0000-00-00','0000-00-00',150,180,'','S',2),
(10,'Simulador de Acessos','SCO-17-0021','SCD-17-0018','PJC0024',23,'2017-04-18','2017-05-23',300,410,'','S',1),
(13,'IntegraÃ§Ã£o APP Mobile SaÃºde','SCO-17-0034','SCD-17-0029','PJC0029',18,'2017-04-18','2017-05-12',190,230,'','S',1),
(16,'Nova Home Dental','SCO-17-0037','SCD-17-0032','PJC0032',21,'2017-04-19','2017-05-22',158,212,'','N',1),
(17,'AdequaÃ§Ã£o CAEX','SCO-16-1282','SCD000000','10946',130,'2017-06-19','2017-12-21',961,2784,'Projeto com terceirizaÃ§Ã£o','S',1);

/*Table structure for table `statuss` */

DROP TABLE IF EXISTS `statuss`;

CREATE TABLE `statuss` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `statuss` */

insert  into `statuss`(`id`,`tipo`) values 
(1,'Aberto'),
(2,'Em analise'),
(3,'Fechado');

/*Table structure for table `vertical` */

DROP TABLE IF EXISTS `vertical`;

CREATE TABLE `vertical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vertical` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `vertical` */

insert  into `vertical`(`id`,`vertical`) values 
(1,'SaÃºde'),
(2,'Vida e PrevidÃªncia'),
(3,'Auto'),
(5,'Auto RE');

/*Table structure for table `view_pendencias` */

DROP TABLE IF EXISTS `view_pendencias`;

/*!50001 DROP VIEW IF EXISTS `view_pendencias` */;
/*!50001 DROP TABLE IF EXISTS `view_pendencias` */;

/*!50001 CREATE TABLE  `view_pendencias`(
 `status` varchar(255) ,
 `complexidade` varchar(255) ,
 `projeto` varchar(255) 
)*/;

/*Table structure for table `view_pendencias_total_complexidade` */

DROP TABLE IF EXISTS `view_pendencias_total_complexidade`;

/*!50001 DROP VIEW IF EXISTS `view_pendencias_total_complexidade` */;
/*!50001 DROP TABLE IF EXISTS `view_pendencias_total_complexidade` */;

/*!50001 CREATE TABLE  `view_pendencias_total_complexidade`(
 `projeto` varchar(255) ,
 `tipo` varchar(255) ,
 `total` bigint(21) 
)*/;

/*Table structure for table `view_pendencias_total_por_projeto` */

DROP TABLE IF EXISTS `view_pendencias_total_por_projeto`;

/*!50001 DROP VIEW IF EXISTS `view_pendencias_total_por_projeto` */;
/*!50001 DROP TABLE IF EXISTS `view_pendencias_total_por_projeto` */;

/*!50001 CREATE TABLE  `view_pendencias_total_por_projeto`(
 `projeto` varchar(255) ,
 `total` bigint(21) ,
 `Projetos_id` int(10) unsigned 
)*/;

/*Table structure for table `view_projetos_vertical` */

DROP TABLE IF EXISTS `view_projetos_vertical`;

/*!50001 DROP VIEW IF EXISTS `view_projetos_vertical` */;
/*!50001 DROP TABLE IF EXISTS `view_projetos_vertical` */;

/*!50001 CREATE TABLE  `view_projetos_vertical`(
 `Vertical` varchar(255) ,
 `Total` bigint(21) 
)*/;

/*Table structure for table `view_situacao_projetos` */

DROP TABLE IF EXISTS `view_situacao_projetos`;

/*!50001 DROP VIEW IF EXISTS `view_situacao_projetos` */;
/*!50001 DROP TABLE IF EXISTS `view_situacao_projetos` */;

/*!50001 CREATE TABLE  `view_situacao_projetos`(
 `Situacao` varchar(20) ,
 `Total` bigint(21) 
)*/;

/*View structure for view view_pendencias */

/*!50001 DROP TABLE IF EXISTS `view_pendencias` */;
/*!50001 DROP VIEW IF EXISTS `view_pendencias` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pendencias` AS select `s`.`tipo` AS `status`,`c`.`tipo` AS `complexidade`,`p`.`nome` AS `projeto` from (((`pendencias` `pd` join `statuss` `s` on((`s`.`id` = `pd`.`Statuss_id`))) join `complexidade` `c` on((`c`.`id` = `pd`.`Complexidade_id`))) join `projetos` `p` on((`p`.`id` = `pd`.`Projetos_id`))) */;

/*View structure for view view_pendencias_total_complexidade */

/*!50001 DROP TABLE IF EXISTS `view_pendencias_total_complexidade` */;
/*!50001 DROP VIEW IF EXISTS `view_pendencias_total_complexidade` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pendencias_total_complexidade` AS select `p`.`nome` AS `projeto`,`c`.`tipo` AS `tipo`,count(0) AS `total` from (((`pendencias` `pd` join `statuss` `s` on((`s`.`id` = `pd`.`Statuss_id`))) join `complexidade` `c` on((`c`.`id` = `pd`.`Complexidade_id`))) join `projetos` `p` on((`p`.`id` = `pd`.`Projetos_id`))) group by `p`.`nome`,`c`.`tipo` */;

/*View structure for view view_pendencias_total_por_projeto */

/*!50001 DROP TABLE IF EXISTS `view_pendencias_total_por_projeto` */;
/*!50001 DROP VIEW IF EXISTS `view_pendencias_total_por_projeto` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pendencias_total_por_projeto` AS select `projetos`.`nome` AS `projeto`,count(0) AS `total`,`pendencias`.`Projetos_id` AS `Projetos_id` from (`projetos` join `pendencias`) where ((`pendencias`.`Projetos_id` = `projetos`.`id`) and (`projetos`.`ativo` = 'S') and (`pendencias`.`Statuss_id` <> 3)) group by `projetos`.`nome` */;

/*View structure for view view_projetos_vertical */

/*!50001 DROP TABLE IF EXISTS `view_projetos_vertical` */;
/*!50001 DROP VIEW IF EXISTS `view_projetos_vertical` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_projetos_vertical` AS select `vertical`.`vertical` AS `Vertical`,count(0) AS `Total` from (`projetos` join `vertical`) where (`vertical`.`id` = `projetos`.`vertical_id`) group by `vertical`.`vertical` */;

/*View structure for view view_situacao_projetos */

/*!50001 DROP TABLE IF EXISTS `view_situacao_projetos` */;
/*!50001 DROP VIEW IF EXISTS `view_situacao_projetos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_situacao_projetos` AS select `projetos`.`ativo` AS `Situacao`,count(0) AS `Total` from `projetos` group by `projetos`.`ativo` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
