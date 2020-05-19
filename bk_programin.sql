-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: programin
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (0,'-',NULL,NULL),(1,'Contabilidad','2020-05-17 15:37:01','2020-05-17 15:37:01'),(3,'Amortización',NULL,NULL),(10,'Alquiler','2020-05-17 15:37:01','2020-05-17 15:37:01'),(12,'Profesionales','2020-05-17 15:37:01','2020-05-17 15:37:01'),(14,'Nominas','2020-05-17 15:37:01','2020-05-17 15:37:01'),(16,'Autónomos','2020-05-17 15:37:01','2020-05-17 15:37:01'),(20,'Suministros','2020-05-17 15:37:01','2020-05-17 15:37:01'),(22,'Leasin',NULL,NULL),(24,'Intereses',NULL,NULL),(30,'Gastos Negocio','2020-05-17 15:37:01','2020-05-17 15:37:01'),(35,'Otros Gastos','2020-05-17 15:37:01','2020-05-17 15:37:01'),(40,'Desplazamiento','2020-05-17 15:37:01','2020-05-17 15:37:01'),(45,'Dietas','2020-05-17 15:37:01','2020-05-17 15:37:01'),(100,'Ventas','2020-05-17 15:37:01','2020-05-17 15:37:01');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condicion_pagos`
--

DROP TABLE IF EXISTS `condicion_pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condicion_pagos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `condicionpago` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicion_pagos`
--

LOCK TABLES `condicion_pagos` WRITE;
/*!40000 ALTER TABLE `condicion_pagos` DISABLE KEYS */;
INSERT INTO `condicion_pagos` VALUES (1,'Transferencia IBAN: ES50 0081 0033 0000 0166 6572','2020-03-30 18:31:16','2020-03-30 18:31:16'),(2,'Recibo Domiciliado','2020-03-30 18:31:16','2020-03-30 18:31:16'),(3,'No Definida','2020-03-30 18:31:16','2020-03-30 18:31:16'),(4,'No Aplica','2020-03-30 18:31:16','2020-03-30 18:31:16');
/*!40000 ALTER TABLE `condicion_pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conta_recurrentes`
--

DROP TABLE IF EXISTS `conta_recurrentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conta_recurrentes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` bigint(20) unsigned NOT NULL,
  `provcli_id` bigint(20) unsigned DEFAULT NULL,
  `concepto` varchar(145) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conta_recurrentes_empresa_id_foreign` (`empresa_id`),
  CONSTRAINT `conta_recurrentes_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conta_recurrentes`
--

LOCK TABLES `conta_recurrentes` WRITE;
/*!40000 ALTER TABLE `conta_recurrentes` DISABLE KEYS */;
INSERT INTO `conta_recurrentes` VALUES (3,181,372,'Endesa *15% * 30%','R'),(6,181,373,'Gas *15% * 30%','R'),(7,181,374,'Gasolina 1','R'),(8,181,374,'Gasolina 2','R'),(9,181,374,'Gasolina 3','R'),(10,181,375,'Agua *15% *30%','R'),(11,181,376,'Autonomos 1','R'),(12,181,376,'Autonomos 2','R'),(13,181,376,'Autonomos 3','R'),(14,181,380,'Zona Azul Terrassa','R'),(15,181,381,'Hosting','R'),(16,181,381,'Hosting 2','R'),(17,181,381,'Hosting 3','R'),(18,181,388,'Emitida 1','E'),(19,181,388,'Emitida 2','E'),(20,181,388,'Emitida 3','E');
/*!40000 ALTER TABLE `conta_recurrentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contas`
--

DROP TABLE IF EXISTS `contas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` bigint(20) unsigned NOT NULL,
  `fechaasiento` date NOT NULL,
  `fechafactura` date DEFAULT NULL,
  `factura` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provcli_id` bigint(20) NOT NULL,
  `concepto` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` bigint(20) DEFAULT NULL,
  `base21` decimal(15,2) DEFAULT '0.00',
  `iva21` decimal(15,2) DEFAULT '0.00',
  `base10` decimal(15,2) DEFAULT '0.00',
  `iva10` decimal(15,2) DEFAULT '0.00',
  `base4` decimal(15,2) DEFAULT '0.00',
  `iva4` decimal(15,2) DEFAULT '0.00',
  `exento` decimal(15,2) DEFAULT '0.00',
  `baseretencion` decimal(15,2) DEFAULT '0.00',
  `porcentajeretencion` decimal(15,2) DEFAULT '0.00',
  `retencion` decimal(15,2) DEFAULT '0.00',
  `baserecargo` decimal(15,2) DEFAULT '0.00',
  `porcentajerecargo` decimal(15,2) DEFAULT '0.00',
  `recargo` decimal(15,2) DEFAULT '0.00',
  `observaciones` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contas_empresa_id_foreign` (`empresa_id`),
  CONSTRAINT `contas_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contas`
--

LOCK TABLES `contas` WRITE;
/*!40000 ALTER TABLE `contas` DISABLE KEYS */;
INSERT INTO `contas` VALUES (1,181,'2020-01-31','2020-01-31','2','E',388,'Fra 2 Rur Sistema SL',NULL,1250.00,262.50,0.00,0.00,0.00,0.00,0.00,1250.00,0.15,187.50,0.00,0.00,0.00,NULL,0,'2020-05-08 06:09:56','2020-05-08 06:30:45'),(2,181,'2020-02-28','2020-02-28','3','E',388,'Rur Sistema SL 3',NULL,2400.00,504.00,0.00,0.00,0.00,0.00,0.00,2400.00,0.15,360.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:09:56','2020-05-08 06:33:37'),(3,181,'2020-03-31','2020-03-31','4','E',388,'Rur Sistema SL Fra 4',NULL,2400.00,504.00,0.00,0.00,0.00,0.00,0.00,2400.00,0.15,360.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:09:56','2020-05-08 06:36:39'),(4,181,'2020-03-01','2020-03-01','1','E',389,'Fra.1 Suma Apoyo Empr',10,1250.00,262.50,0.00,0.00,0.00,0.00,0.00,1250.00,0.15,187.50,0.00,0.00,0.00,NULL,0,'2020-05-08 06:19:23','2020-05-08 06:19:23'),(5,181,'2020-01-17','2020-01-17','N0064768','R',372,'Endesa Energía, S.A.U. Enero',20,11.47,2.41,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 17:57:58'),(6,181,'2020-02-20','2020-02-20','19959','R',373,'Naturgy Iberia SA Fra 19959',20,15.76,3.31,0.00,0.00,0.00,0.00,2.96,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 17:59:45'),(7,181,'2020-01-31','2020-01-31','30074','R',374,'PETROVALLES - J.Sanchez Turro, S.L. Fra 30074',40,41.33,8.68,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:04:06'),(8,181,'2020-02-29','2020-02-29','31515','R',374,'PETROVALLES - J.Sanchez Turro, S.L.',40,33.06,6.94,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:04:17'),(9,181,'2020-03-31','2020-03-31','32918','R',374,'PETROVALLES - J.Sanchez Turro, S.L.',40,12.40,2.60,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:04:34'),(10,181,'2020-02-26','2020-02-26','57991','R',375,'Terrasa Cicle de l\'Aigeu, EPEL',20,0.43,0.09,8.00,0.80,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:00:59'),(11,181,'2020-01-31','2020-01-31','Enero','R',376,'TGSS Seguridad Social Enero',16,0.00,0.00,0.00,0.00,0.00,0.00,195.58,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 17:56:09'),(12,181,'2020-02-29','2020-02-29','Febrero','R',376,'TGSS Seguridad Social Febrero',16,0.00,0.00,0.00,0.00,0.00,0.00,195.58,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 17:58:38'),(13,181,'2020-03-31','2020-03-31','Marzo','R',376,'TGSS Seguridad Social Marzo',16,0.00,0.00,0.00,0.00,0.00,0.00,195.58,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 17:56:35'),(14,181,'2020-01-01','2020-01-01','Fra 2131 Blinkay','R',380,'Blinkay',40,0.45,0.09,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:03:29'),(15,181,'2020-03-01','2020-03-01','4345326','R',381,'Fra.4345326 Digital Ocean',30,10.84,2.28,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:01:36'),(16,181,'2020-02-01','2020-02-01','3398080','R',381,'Fra.3398080 Digital Ocean',30,13.52,2.84,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:36:54','2020-05-17 18:01:20'),(18,181,'2020-02-25','2020-02-25','N0216916','R',372,'Fra.N0216916 Endesa Energía',20,7.60,1.60,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:38:42','2020-05-17 17:58:51'),(19,181,'2020-03-16','2020-03-16','N0338990','R',372,'Fra.N0338990 Endesa Energía',20,12.51,2.63,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-08 06:39:26','2020-05-17 17:59:11'),(24,181,'2020-03-31','2020-03-31','7683','R',380,'Fra.7683 Blinkay',40,1.58,0.33,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,0,'2020-05-15 16:22:38','2020-05-17 18:03:41');
/*!40000 ALTER TABLE `contas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `departamento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES ('-'),('Marketing'),('Comercial'),('Administración'),('Contabilidad'),('Dirección'),('Retail Team'),('Fiscal Reports'),('Laboral');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa_contacto`
--

DROP TABLE IF EXISTS `empresa_contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa_contacto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` bigint(20) unsigned NOT NULL,
  `contacto_id` bigint(20) NOT NULL,
  `departamento` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_contacto_empresa_id_foreign` (`empresa_id`),
  KEY `empresa_contacto_contacto_id_index` (`contacto_id`),
  CONSTRAINT `empresa_contacto_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa_contacto`
--

LOCK TABLES `empresa_contacto` WRITE;
/*!40000 ALTER TABLE `empresa_contacto` DISABLE KEYS */;
INSERT INTO `empresa_contacto` VALUES (2,7,151,'Contabilidad',NULL,NULL,'2020-04-03 18:17:23'),(4,7,9,NULL,NULL,'2020-04-03 19:17:13','2020-04-03 19:17:13'),(25,2233,181,NULL,NULL,'2020-04-03 22:23:42','2020-04-03 22:23:42'),(26,103,181,NULL,NULL,'2020-04-03 22:23:43','2020-04-03 22:23:43'),(27,2219,2243,NULL,NULL,'2020-04-08 08:57:09','2020-04-08 08:57:09'),(29,2229,2245,'-',NULL,'2020-04-16 07:15:04','2020-04-19 17:38:32'),(30,2229,2246,'-',NULL,'2020-04-16 07:15:47','2020-04-16 07:15:47'),(31,2229,2247,'-',NULL,'2020-04-16 07:16:22','2020-04-16 07:16:22'),(32,2229,2248,'-',NULL,'2020-04-16 07:17:00','2020-04-16 07:17:00'),(33,2229,2249,'-',NULL,'2020-04-16 07:17:20','2020-04-16 07:17:20'),(34,2229,2244,NULL,NULL,'2020-04-16 07:18:50','2020-04-16 07:18:50'),(35,2229,2250,'-',NULL,'2020-04-16 07:21:05','2020-04-16 07:21:05'),(37,2229,2252,'-',NULL,'2020-04-16 08:28:35','2020-04-16 08:28:35'),(38,2229,2253,'Administración',NULL,'2020-04-16 08:29:44','2020-04-16 08:29:44'),(39,2229,2254,'-',NULL,'2020-04-16 08:30:27','2020-04-16 08:30:27'),(40,2229,2255,'-','Alice','2020-04-16 08:31:09','2020-04-16 08:31:09'),(43,2229,2258,'-',NULL,'2020-04-16 08:33:10','2020-04-16 08:33:10'),(44,2229,2251,NULL,NULL,'2020-04-17 07:09:51','2020-04-17 07:09:51'),(45,150,154,NULL,NULL,'2020-04-20 05:41:39','2020-04-20 05:41:39'),(46,110,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(47,111,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(48,177,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(49,125,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(50,126,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(51,2222,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(52,123,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(53,162,2263,NULL,NULL,'2020-04-27 06:09:53','2020-04-27 06:09:53'),(54,2266,2265,NULL,NULL,'2020-05-04 07:12:09','2020-05-04 07:12:09'),(55,2229,2268,'-',NULL,'2020-05-07 07:32:19','2020-05-07 07:32:19'),(56,2229,2269,'Laboral',NULL,'2020-05-07 07:34:35','2020-05-07 07:34:35'),(57,2229,2270,'-',NULL,'2020-05-07 07:36:58','2020-05-07 07:36:58'),(58,2229,2271,'-',NULL,'2020-05-07 07:37:54','2020-05-07 07:37:54'),(59,2229,2272,'-',NULL,'2020-05-07 07:38:47','2020-05-07 07:38:47'),(60,2229,2273,'-',NULL,'2020-05-07 07:39:21','2020-05-07 07:39:21'),(61,2229,2274,'-',NULL,'2020-05-07 07:39:53','2020-05-07 07:39:53'),(62,2229,2275,'-',NULL,'2020-05-07 07:40:41','2020-05-07 07:40:41'),(63,2229,2276,'-',NULL,'2020-05-07 07:40:57','2020-05-07 07:40:57'),(64,2229,2277,'-',NULL,'2020-05-07 07:41:28','2020-05-07 07:41:28'),(65,2229,2278,'-',NULL,'2020-05-07 07:42:25','2020-05-07 07:42:25'),(66,2229,2279,'-',NULL,'2020-05-07 07:42:43','2020-05-07 07:42:43'),(67,2229,2280,'-',NULL,'2020-05-07 07:43:56','2020-05-07 07:43:56'),(68,2229,2281,'Retail Team',NULL,'2020-05-13 06:17:07','2020-05-13 06:17:07'),(69,2229,2282,'-',NULL,'2020-05-13 07:37:05','2020-05-13 07:37:05'),(70,2229,2283,'-',NULL,'2020-05-14 13:56:23','2020-05-14 13:56:23');
/*!40000 ALTER TABLE `empresa_contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favorito` tinyint(4) NOT NULL DEFAULT '0',
  `tipoempresa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '08',
  `localidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_id` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ES',
  `nif` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tfno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailgral` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailadm` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idioma` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ES',
  `condicionpago_id` int(11) NOT NULL DEFAULT '1',
  `periodofacturacion_id` int(11) NOT NULL DEFAULT '2',
  `diafactura` int(11) NOT NULL DEFAULT '1',
  `diavencimiento` int(11) NOT NULL DEFAULT '10',
  `referenciacliente` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conceptofacturacionprincipal` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `importefacturacionprincipal` double(8,2) NOT NULL DEFAULT '0.00',
  `conceptofacturacionsecundario` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `importefacturacionsecundario` double(8,2) NOT NULL DEFAULT '0.00',
  `tipoiva` double(8,2) NOT NULL DEFAULT '0.21',
  `porcentajemarta` double(8,2) NOT NULL DEFAULT '1.00',
  `porcentajesusana` double(8,2) NOT NULL DEFAULT '0.00',
  `cuentacontable` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `contactosuma` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'marta.ruiz@sumaempresa.com',
  `suma_id` bigint(20) unsigned NOT NULL DEFAULT '1',
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empresas_alias_index` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=2284 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (7,'NAE Comunicacions, S.L.','NAE',0,'Pyme','C/Urgell 204, 1r.B','08036','Barcelona','08','ES','B63442701',NULL,'facturacion.proveedores@nae.es',NULL,NULL,'EN',1,1,1,10,'NESLEOF','Servicios profesionales mensuales',390.00,'Servicios profesionales trimestrales',525.00,0.21,100.00,0.00,'430008','Bankinter','ES1901280511100500000606',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-03 20:15:53',NULL),(8,'COSTA BELVEDERE, S.L.','Costa_Bel',0,'Pyme','Rambla Cataluña, 86, 5º','08008','Barcelona','08','ES','B64391626','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','CAM','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:24',NULL),(9,'AQUABOXING, S.L.','Aquaboxing',0,'Pyme','Rambla Cataluña, 86, 5ª','08008','Barcelona','08','ES','B63096754','1',NULL,NULL,NULL,'ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','Bankinter','',NULL,'0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-03 20:16:19',NULL),(10,'Lewis & Carroll, S.L.','Lewis_Carroll',0,'Pyme','C/ Sardenya, 253, 5º 2ª','08015','Barcelona','08','ES','B64022056','','alicia@lewisandcarroll.com;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',475.00,'',0.00,0.21,100.00,0.00,'430005','','ES7900810066630001337042','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(12,'WINE COLOURS, TALLER DE VIATGES, S.L.','Wine_colour',0,'Pyme','Ronda San Marti 2, 3-3','08020','Barcelona','08','ES','B64628423','','','','','ES',1,1,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430009','La Caixa de Pensions','ES8321001125990200054317','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:09:26',NULL),(13,'MANFATTA, S.L.','Manfatta',0,'Pyme','C/ Montmany 52','08012','Barcelona','08','ES','B62256904','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:21',NULL),(14,'JUAN ALBERTO BARROS VILLA','Juan_A_Barros',0,'Pyme','Ps.Sant Joan 5 Pr.2','08010','Barcelona','08','ES','32651999A','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430007','Banco Pastor','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:05:22',NULL),(15,'JACQWARE INFORMATICA, S.L.','Jacqware',0,'Pyme','Avd. Jacquard 74','08222','Terrassa','08','ES','B64391162','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','La Caixa','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:59',NULL),(16,'LUISA MORALES ESCUDERO','Luisa_Morales',0,'Pyme','Piazza del Duomo, 6 A','20900','Monza','','IT','10079300X','','luisa.morales310@gmail.com;;','','','ES',2,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430082','','ES1500810193840001281830','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(17,'CINTORA REPRESENTACIONES, S.L.','Cintora',0,'Pyme','C/ Aljibe 8','46530','Puçol','46','ES','B97925127','','isaac@cintora.es; fperez@cintora.es;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',258.00,'',0.00,0.21,100.00,0.00,'430010','Rural Caja','ES4730821039114680117928','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(18,'SUNBELT DEVELOPMENT, S.L.','Sunbelt',0,'Pyme','Rambla Catalunya 86','08008','Barcelona','08','ES','B62098371','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','CAM','','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(19,'Estudiven, S.L.','Estudiven',0,'Pyme','Cl. Muntaner, 121, 3º 1ª','08036','Barcelona','08','ES','B60780582','','jvsestudiven@hotmail.com;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',280.00,'',0.00,0.21,100.00,0.00,'430012','Caixa Catalunya','ES7121000811710201313593','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(20,'Isaac Rodríguez Ruiz','Isaac_Rdguez',0,'Pyme','Calle Canyars 5, 11','46530','Puçol','46','ES','29201306T','','isaac@cintora.es','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',90.00,'',0.00,0.21,100.00,0.00,'430013','Ruralcaja','ES4030821039114818011217','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(21,'Sylvia Ottmann','Sylvia_Ottmann',0,'Pyme','PABORDE JAUME 20','07320','SANTA MARIA DEL CAMI','07','ES','X1455803H','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','BBVA','','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(22,'LANGAGE ADVANCE TRAINING, S.L.','Langage_Advance_Training',0,'Pyme','C/Enrique Granados, 149','08008','Barcelona','08','ES','B62997200','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','BBVA','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:04',NULL),(23,'EUROPA REAL ESTATE FINANCE, S.L.','Europa_Real',0,'Pyme','Avda. Diagonal, 534, Entlo. Izda.','08006','Barcelona','08','ES','B64274178','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:53',NULL),(24,'ANTOMIC EVENT, S.L.','Antomic',0,'Pyme','Plaza Francesc Macià 8, 6ºC','08021','Barcelona','08','ES','B63803068','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430017','La Caixa','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:02:30',NULL),(26,'CLUSTER CATALUNYA TIC3 UT','Cluster',0,'Pyme','C/ Comte d Urgell, 204','08036','Barcelona','08','ES','U65055428','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','Caixa Manresa','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:21',NULL),(27,'Eric Jacob  Hiensch','EricHiensch',0,'Pyme','C/ MAJOR DE SARRIA 204, PPAL','08017','Barcelona','08','ES','X7736099A','','eric@sputch.es;eric@apint.es','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',112.50,'',0.00,0.21,100.00,0.00,'430021','','ES5321003466792200095956','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(31,'Amido 2009 S.L.','Amido',0,'Pyme','Calle La Huerta,  Nº: 22  1º E','28411','MORALZARZAL','28','ES','B65105413','','amido2009sl@gmail.com','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',309.00,'Servicios trimestrales',90.00,0.21,100.00,0.00,'430019','BBVA','ES74  0182  5930  2402  0156  7002','old: ES3401825979270201594128','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(32,'Globaliments SCP','Globaliments',0,'Pyme','C/ Ramon y Cajal 33 B L 3','08222','Terrassa','08','ES','J65110405','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:29',NULL),(33,'Ferd de Bruijn','Ferd_DeBruijn',0,'Pyme','C/ d Enric Morera 27 1º 1ª','08870','Sitges','08','ES','X9962120S','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','La Caixa','','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(34,'CASI Construcciones y Asesoramiento S.L.','CASI',0,'Pyme','C/ Enrique Granados 149 principal','08034','Barcelona','08','ES','B26438861','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:16',NULL),(37,'INGOPRINT, S.A.','Ingoprint',0,'Pyme','C/ Maracaibo 15','08030','Barcelona','08','ES','A08339608','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:52',NULL),(38,'SAMIRATRI, S.L.','Samiratri',0,'Pyme','C/ Sagrado Corazón 9','08034','Barcelona','08','ES','B64084064','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:42',NULL),(39,'Wurtzita, S.L.','Wurtzita',0,'Pyme','C/ Pare Miquel de Sarrià 7','08034','Barcelona','08','ES','B63786958','','','','','ES',3,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:09:29',NULL),(40,'Artesans del Sol, S.L.','Artesans_del_Sol',0,'Pyme','C/ Pare Miquel de Sarrià 7','08034','Barcelona','08','ES','B64244395','','','','','EN',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:02:48',NULL),(41,'Virpemi Inversiones, S.L.','Virpemi',0,'Pyme','Rbla. Catalunya 103','08007','Barcelona','08','ES','B62736020','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:09:18',NULL),(42,'Apoyo Integral, S.L.','ApoyoIntegral',0,'Pyme','C/ MAJOR DE SARRIA 204, PPAL','08017','Barcelona','08','ES','B60321619','','','','','ES',1,1,1,10,'','Servicios profesionales mensuales',221.00,'Servicios trimestrales',201.00,0.21,100.00,0.00,'430035','B March','ES15 0061 0373 1100 0059 0111','ES8621000887500200244522 La Caixa','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(43,'Redman TH, S.L.','Redman',0,'Pyme','CL JOAN LLAVERIAS 1','08800','Vilanova i la Geltru','08','ES','B62156393','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','Caixa Catalunya','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:24',NULL),(44,'Fully Automated Facility Management, S.L.','Fully_Automated',0,'Pyme','C/ Enric Granados 149, principal','08008','Barcelona','08','ES','B65081838','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:07',NULL),(45,'Patricia Zeegers','Patricia_Zeegers',0,'Pyme','C/ AGUSTI SANTACRUZ, Nº 101, 6º 2ª','08182','SANT FELIU DE CODINES','','ES','X7693687A','',';admin@businessbasecamp.eu','','','ES',2,1,1,10,'','Servicios trimestrales',190.00,'',0.00,0.21,100.00,0.00,'430053','ING','ES15 1465 0120 33 1735018777','old Caixa ES7920130713870200577611','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(46,'Trabajos Graficos ALFADIR, S.A.','Alfadir',0,'Pyme','C/ Rosselló 52, P.I. Femades','08940','Cornellà de Llobregat','08','ES','A08943193','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:01:50',NULL),(47,'SCAMP, S.L.','SCAMP',0,'Pyme','Avda de la Fama 80','08940','Cornella de Llobregat','08','ES','B61178026','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:49',NULL),(48,'Geert De Berg Ferran Agullo','Geert_Ferran',0,'Pyme','C/ Ferran Agulló, 10 1º 1ª','08021','Barcelona','08','ES','X8882370T','','','','','ES',2,3,1,10,'','Servicios profesionales trimestrales: Ferran Agulló',110.00,'Servicios Administrativos trimestral',150.00,0.21,100.00,0.00,'430032','','ES80 2100 3003 5421 0970 7503','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(49,'Actualis,S.L.','Actualis',0,'Pyme','C/ Escoles Pies, 90','08017','Barcelona','08','ES','B65193187',NULL,NULL,NULL,NULL,'ES',1,1,1,10,'','Servicios profesionales mensuales',260.00,'',0.00,0.21,100.00,0.00,'430039','Santander','ES9600494701832016048869',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 16:13:31',NULL),(50,'J.Francisco de Leonardis','Jfrancisco_de_Leo',0,'Pyme','C/ Hort de la Bomba 2','08001','Barcelona','08','ES','X3105042L','606088733','me@frankiedeleonardis.com',NULL,NULL,'ES',1,12,1,10,'','Renta 2017',100.00,'',0.00,0.21,100.00,0.00,'430024','La Caixa','ES3021000639040200341373',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-14 15:22:52',NULL),(51,'Starling 502, S.L.','Starling',0,'Pyme','C/ Diputació, 34','08015','Barcelona','08','ES','B65214934','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430048','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:51',NULL),(52,'Nico James, S.L.','Nico_James',0,'Pyme','C/ Medes 4-6','08023','Barcelona','08','ES','B63939490','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430036','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:43',NULL),(53,'Ibiza Polo Club, S.L.','Ibiza_Polo',0,'Pyme','C/Muntaner, 146 4º 2ª','08006','Barcelona','08','ES','B65196495','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:42',NULL),(54,'Noeltan, S.L.','Noeltan',0,'Pyme','C/ Muntaner 406','08006','Barcelona','08','ES','B65130676','','','','','ES',3,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:49',NULL),(55,'Overlord Consulting, S.L.','Overlord',0,'Pyme','C/Traviesia Minerva, Urb.Mirador del mar, 21','08392','Sant Andreu de Llavaneres','08','ES','B65148975','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430040','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:04',NULL),(56,'Raindrop Corporation, S.L.','Raindrop',0,'Pyme','Ronda General Mitre 121','08022','Barcelona','08','ES','B64892813','','','Javier Munoa <jms@deltapartnersgroup.com>','','ES',1,1,1,10,'','Servicios profesionales mensuales',190.00,'Gestion de remesas Club NV FALTA OTRO CONCEPTO',40.00,0.21,0.00,100.00,'430041','Deutsche Bank','ES6300190020904010202480','mala ES8101823971290200235868','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(57,'Fundació Institut Català de la Cuina','Fundacio_Institut_Catala',0,'Pyme','C/ Les Dalies, 27','08038','Premià de Dalt','08','ES','G61095873','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430042','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:10',NULL),(58,'GENERALITAT DE CATALUNYA-Departament de Treball','Generalitat',0,'Pyme','C/ Sepúlveda 148150','08011','Barcelona','08','ES','S0811001G','','','','','ES',3,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:17',NULL),(59,'Matteo Monti','Matteo_Monti',0,'Pyme','C/ Calaf 17','08021','Barcelona','08','ES','X3773038A','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:21',NULL),(60,'La Chesnelie, S.L.','LaChesnelie',0,'Pyme','C/ Enrique Granados, 149','08008','Barcelona','08','ES','B62038971','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','BBVA','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:05:34',NULL),(61,'Langage, S.L.','Lanagage_SL',0,'Pyme','C/ Enrique Granados 149','08008','Barcelona','08','ES','B58120213',NULL,NULL,NULL,NULL,'ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','BBVA','',NULL,'0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:01',NULL),(62,'LTC Project Estrategia & Consultoria Global S.L.','LTC',0,'Pyme','Pau Claris 153 principal 1','08009','Barcelona','08','ES','B62809371','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:15',NULL),(63,'Elena Marie Ivanushkina','Elena_Ivanus',0,'Pyme','Calle Osi, 22-24  5, 2','08034','Barcelona','08','ES','Y0923147X',NULL,'elenamarie55@gmail.com',NULL,NULL,'ES',2,3,1,10,NULL,'Servicios 1T 2020',200.00,NULL,0.00,0.21,100.00,0.00,'430049',NULL,NULL,NULL,'1','dolors.celdran@sumaempresa.com',1,1,NULL,'2020-04-03 07:09:01',NULL),(64,'Martina Blazkova','Martina_Blazk',0,'Pyme','República Argentina, 250 5º 5ª','08023','Barcelona','08','ES','Y1129896N','','','','','ES',3,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:29',NULL),(65,'MUMA Partners, S.L.','Muma',0,'Pyme','c/ Rutlla 3, Baixos','17600','Figueres','17','ES','B65167868','','','','','ES',1,1,1,10,'','Servicios profesionales mensuales',300.00,'',0.00,0.21,10.00,90.00,'430006','La Caixa','ES76 2100 5734 0702 0006 4405','BSAbadell: ES69 0081 0105 1200 0154 8358','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(66,'Brique Cintrée, S.L.','Brique',0,'Pyme','C/Ramón Miquel i Planas, 23','08034','Barcelona','08','ES','B64009459','','','','','ES',3,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:10',NULL),(67,'Biolead Capital S.A.','Biolead',0,'Pyme','C/ Baleares nº 21','08023','Barcelona','08','ES','A64711542','','','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',350.00,'',0.00,0.21,100.00,0.00,'430054','Sabadell','ES5900810356130001619165','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(68,'Nexe S.L.','Nexe',0,'Pyme','\"Rambla de Catalunya, 111 3º1ª\"','08008','Barcelona','08','ES','B61069183','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430055','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:41',NULL),(69,'Rius Consultors Associats, S.L.','Rius',0,'Pyme','Avda.Jacquard, 87','08222','Terrassa','08','ES','B63367593','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430056','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:31',NULL),(70,'Impact Five Events, S.L.','Impact_Five',0,'Pyme','Calle Numancia 187, 31','08034','Barcelona','08','ES','B65841686','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430043','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:46',NULL),(71,'Little Creative Factory, S.L.','Little_creative',0,'Pyme','C/Ribera 8, 1º 2ª','08003','Barcelona','08','ES','B65922874','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430058','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:12',NULL),(74,'Football & Retail Experiences, S.L.','FRE',0,'Pyme','Passeig Juame I, 35. Local C','43840','Salou','43','ES','B65893729','','','','','ES',1,1,1,10,'','Servicios profesionales mensuales',600.00,'',0.00,0.21,10.00,90.00,'430059','Banco Sabadell','ES6121005734000200058907','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(75,'Lezulat, S.L.','Lezulat',0,'Pyme','C/ Muntaner 179','08036','Barcelona','08','ES','B64817687','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430060','','','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(76,'Jasmin Krauss','JasminKraus',0,'Pyme','VILA Y VILA, 17 7º 2ª','08004','Barcelona','08','ES','Y2770213S','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430061','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:05:04',NULL),(77,'LEAD TO CHANGE S.L.','Lead_to_change',0,'Pyme','C/ Aribau 200 6ª Planta','08036','Barcelona','08','ES','B65966665','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430062','Banc Sabadell','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:06',NULL),(78,'Daniel Rodríguez Ruiz','Daniel_Rdguez',0,'Pyme','C/ Aljibe 8, Urbanización Alfinach','46530','Puçol','46','ES','29205794A','','daniel@cintora.es','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',90.00,'',0.00,0.21,100.00,0.00,'430063','','ES4430821039125658117717','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(80,'Atmira, espacio de consultoria, S.L.','Atmira',0,'Pyme','C/Beethoven, 15 6ªpl','08021','Barcelona','08','ES','B63866099','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:02:50',NULL),(81,'PROMOBUILDING COSTA BRAVA, S.L','Promobuilding',0,'Pyme','C/ Pisuerga 9, 2º 2ª','08028','Barcelona','08','ES','B62994504','','esantosmarcos@gmail.com;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',210.00,'',0.00,0.21,100.00,0.00,'430064','Kutxa Bank','ES8520950264609104490129','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(82,'Ilumia lighting company, S.L.','Ilumia',0,'Pyme','Avda.Drassanes 6 planta 22','08001','Barcelona','08','ES','B55162200','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430065','Santander','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:44',NULL),(83,'Esselina Jeannette Van Suntenmaartensdijk','Esselina',0,'Pyme','C/ Milans, 9','08002','BARCELONA','08','ES','X5559754X','','esther.vansunten@hotmail.com;','','','ES',2,12,1,10,'','Servicios Anuales: Modelo 210',70.00,'',0.00,0.21,100.00,0.00,'430066','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(84,'Samuel Porcel Montane','Samuel_Porcel',0,'Pyme','C/Volta 54 2º 1ª','08224','Terrassa','08','ES','46624975L','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:45',NULL),(85,'BLUESIEDEM CONSULTING, S.L.','BluesiedemConsulting',0,'Pyme','Passeig de Gràcia 78 31B','08008','Barcelona','08','ES','B66115866','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430068','Sabadell','ES4200810086070002045612','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:01',NULL),(86,'VICENTE LUIS ARAGO ROCA','Vicente_Luis',0,'Pyme','C/Nou 53 1B','17455','Caldes de Malavella','17','ES','18992581D','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430069','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:09:16',NULL),(87,'dB Metric. Ingeniería Acústica','DB_metric',0,'Pyme','','08811','Canyelles del Garraf','08','ES','J63587125','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:40',NULL),(88,'Zohar Consultoria & Marketing Social','Zohar',0,'Pyme','Aribau 200, planta 6','08036','Barcelona','08','ES','B64443252','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430000','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:09:31',NULL),(89,'Leve Productora, S.L.','Leve',0,'Pyme','C/ Dipòsit, 21','08198','Sant Cugat del Valles','08','ES','B64714876','','adminleve@levenet.com;;eva.serrats@levenet.com','','','EN',2,3,1,10,'','Servicios profesionales trimestrales',465.00,'Nóminas: 3 (1+1+1) x 16= 48',48.00,0.21,100.00,0.00,'430072','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(91,'ANTONIO MARTINEZ, SL','Antoni Martinez',0,'Pyme','C/Bruc 25 3º 2ª','08010','Barcelona','08','ES','B65083032','','','','','ES',1,12,1,10,'','Confección renta',290.00,'',0.00,0.21,100.00,0.00,'430073','','ES33 0182 0171 8702 0160 6417','Anterior: ConsultarES4314910001212161916222','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(92,'ALPIFY SOFTWARE, S.L.U.','Alpify',0,'Pyme','C/ Aribau 171, 5-2','08036','BARCELONA','08','ES','B66162694','','egil@gilsimoni.com','','','EN',2,1,1,10,'','Servicios profesionales mensuales',250.00,'',0.00,0.21,100.00,0.00,'430074','','ES9721001154660200090898','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(94,'MALAMAR TRADE, S.L.','Malamar',0,'Pyme','C/Forn del Vidre, 14','08800','Vilanova i la Geltrú','08','ES','B66080086','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430075','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:19',NULL),(95,'ALBERT GARCIA GIL','AlbertGarcia',0,'Pyme','c/ de Ribes 53 Baixos 2','08013','Barcelona','08','ES','47151696V','','garmen@gmail.com;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',190.00,'',0.00,0.21,100.00,0.00,'430076','','ES1201824532550200020479','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:01:45',NULL),(96,'BLUESIEDEM SOLUTIONS, S.L.','BluesiedemSolutions',0,'Pyme','Avinguda Carrilet, nº 95, 7º - 1ª','08902','Hospitalet de Llobregat','08','ES','B55197420','','vicente.arago@bluesiedem.com;;','','','ES',1,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430077','','ES4200810086070002045612','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:02',NULL),(97,'Gemma Pla Ruiz','GemmaPla',0,'Pyme','Avda.Jacquard, 23','08222','Terrassa','08','ES','45469177V','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430078','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:15',NULL),(98,'Montserrat Espolet Orts','MontseEspolet',0,'Pyme','Avda.Jacquard, 23','08222','Terrassa','08','ES','40989416N','','montse@lullaby.cat;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',140.00,'',0.00,0.21,100.00,0.00,'430079','Banco Sabadell','ES4901828190210208500582','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:32',NULL),(99,'FUNDACIÓ JOAN MIRÓ','FundacioMiro',0,'Pyme','Parc de Montjuic s/n','08038','Barcelona','08','ES','G08428138','','','','','ES',2,1,1,10,'','Honorarios por servicios profesionales correspondientes al mes',0.00,'',0.00,0.21,0.00,100.00,'430001','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(100,'FLOCH, S.L.','Floch',0,'Pyme','C/GUILLEM ROVIROSA, NUM 18','08800','Vilanova i la Geltrú','08','ES','B58232604','','','Luis Pérez - Floch <lperez@flochvilanova.com>','','ES',1,1,1,10,'','Honorarios por servicios profesionales correspondientes al mes de Noviembre de  2017:',550.00,'',0.00,0.21,0.00,100.00,'430002','','ES1800810050100001151223','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(101,'COWORK CENTER, S.C.P.','Cowork',0,'Pyme','Edificio Eurocentre. Ronda Europa,60, 1º, 5ª','08800','Vilanova i la Geltrú','08','ES','J66209602','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430003','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:27',NULL),(102,'GIE MAISON DE LA FRANCE, SUCURSAL EN ESPAÑA','Gie Maison',0,'Pyme','C/ Moyà, 8','08006','Barcelona','08','ES','W0011917B','','','Exposito, Monica <Monica.Exposito@atout-france.fr>','','ES',1,1,15,25,'','Honorarios por servicios profesionales correspondientes a: Cierre contable de',550.00,'',0.00,0.21,0.00,100.00,'430004','','ES1221002895710200131330','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(103,'AJAX ESSENCIAL, S.L.U.','Ajax (Ver Kuby Software)',0,'Pyme','AV.JACQUARD, 74','08222','TERRASSA','08','ES','B66036161','','teresa@doom.es;','','','ES',2,12,1,10,'','Servicios Anuales: Revision estados financieros, Impuestos de sociedades y cuentas anuales',500.00,'',0.00,0.21,100.00,0.00,'430050','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:01:42',NULL),(104,'Monica Nastase','MonicaNastase',0,'Pyme','C/Calabria 69, 2º 3ª','08015','Barcelona','08','ES','Y1775353C','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430051','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:29',NULL),(105,'INMOBAR 2010 SL','Inmobar',0,'Pyme','Rda Europa 60, 71','08800','Vilanova i la Geltrú','08','ES','B65422651','','','','','ES',2,3,1,10,'','Honorarios por servicios profesionales correspondientes al',300.00,'',0.00,0.21,0.00,100.00,'430011','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:04:54',NULL),(106,'NALMAT INVERSIONES, S.L.','Nalmat',0,'Pyme','Edificio Eurocentre-Ronda Europa, 60, 71ª','08800','Vilanova i la Geltrú','08','ES','B64802754','','susana.martinez@sumaempresa.com;','','','ES',2,3,1,10,'','',0.00,'',0.00,0.21,0.00,100.00,'430014','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:36',NULL),(107,'DAVID QUINTELA GONZALEZ','DavidQuintela',0,'Pyme','Passatge Carles Mercader nº3','08960','Sant Just Desvern','08','ES','44471347L','','','','','ES',2,3,1,10,'','Honorarios por servicios profesionales correspondientes a:',100.00,'',0.00,0.21,0.00,100.00,'430015','','ES7620389904443000568036','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(108,'Wouter Collignon','WouterCollignon',0,'Pyme','Gran Vía de les Corts Catalanes, 212, SA 3','08004','Barcelona','08','ES','Y0078905Y','','marta.ruiz@sumaempresa.com','wcollignon@hotmail.com','','ES',1,12,1,10,'','Servicios profesionales trimestrales',75.00,'Renta 2017',75.00,0.21,100.00,0.00,'430016','','ES2114650120331706518517','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:09:27',NULL),(109,'Bonavista Developments, S.L.','Bonavista',1,'Pyme','Gran Vía de les Corts Catalanes, 643 2º 1ª','08010','Barcelona','08','ES','B66315441',NULL,NULL,NULL,'','ES',1,1,1,25,NULL,'Servicios profesionales mensuales',330.00,NULL,0.00,0.21,100.00,0.00,'430018',NULL,'ES6921008637620200102732',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-21 09:28:55',NULL),(110,'BUXDEL INVERSIONES, S.L.','Buxdel',0,'Pyme','Gran Vía de les Corts Catalanes, 643 2º 1ª','08010','Barcelona','08','ES','B66274317','','','','','ES',1,1,1,25,'','Servicios profesionales mensuales',280.00,'',0.00,0.21,100.00,0.00,'430025','','ES3121008637640200102154','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(111,'CASA BURES RESIDENCIAL, S.L.U.','CasaBures-Trinder',0,'Pyme','Gran Vía de les Corts Catalanes, 643 2º 1ª','08010','Barcelona','08','ES','B66132267','','','','','ES',1,1,1,25,'','Servicios profesionales mensuales',600.00,'',0.00,0.21,10.00,90.00,'430027','','ES7521008637650200102380','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(112,'CASP 33 AB RESIDENCIAL, S.L.U.','Casp33-Gatgrill',1,'Pyme','Gran Vía de les Corts Catalanes, 643 2º 1ª','08010','Barcelona','08','ES','B66258179',NULL,NULL,NULL,'','ES',1,1,1,25,NULL,'Servicios profesionales mensuales',400.00,NULL,0.00,0.21,100.00,0.00,'430026',NULL,'ES6521008637690200102267',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-29 13:19:45',NULL),(113,'GRUP BASERA, S.L.','GrupBasera',0,'Pyme','Ed.l Om, baixos local 2','AD100','Sant Pere del Tarter- Canillo','57','AD','A707186B','','egil@gilsimoni.com','','','ES',2,3,1,10,'','Servicios profesionales trimestrales',400.00,'',0.00,0.00,100.00,0.00,'430020','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:04:40',NULL),(114,'OUTSOURCING JURIDICO SRL','OutsorcingJuridico',0,'Pyme','COL·LEGI, 6, 1º 4ª','08221','Terrassa','08','ES','B65066623','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430022','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:03',NULL),(115,'URILARIA, S.L.','Urilaria',0,'Pyme','AVENIDA CAMI REIAL , 51','08184','PALAU-SOLITA I PLEGAMANS','08','ES','B63049993','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430023','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:09:07',NULL),(116,'Lola Martínez Communications, S.L.U.','LolaMartinez',0,'Pyme','C/ Mallorca, 213 , 8º','08008','Barcelona','08','ES','B66462292','','lolamartinez777@gmail.com;','','','ES',2,3,1,10,'','Servicios trimestrales',350.00,'Servicios anuales',100.00,0.21,100.00,0.00,'430028','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(117,'Apple Tree Communications, S.L.','Appletree',0,'Pyme','C/ Marqués de l Argentera, 17','08003','Barcelona','08','ES','B64497902','','be@homeatc.com;','','','ES',2,1,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430029','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:02:37',NULL),(118,'Apple Tree Communications Americas, S.L.','AppleTreeAmerica',0,'Pyme','C/ Marqués de l Argentera, 17','08003','Barcelona','08','ES','B66437385','','be@homeatc.com;','','','ES',2,1,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430030','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:02:41',NULL),(119,'Norman 2000, S.L.','Norman2000',0,'Pyme','C/ Mallorca 213 8º','08008','Barcelona','08','ES','B61955779','','be@homeatc.com;','','','EN',2,1,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430031','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:53',NULL),(121,'CASE ON IT, S.L.','CaseOnIt',0,'Pyme','C/ Fuencarral, 123 4º B','28010','Madrid','28','ES','B87126249','','luis.trujillo@nae.es','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',350.00,'',0.00,0.21,100.00,0.00,'430033','','ES8400491819152711059800','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(122,'Vitamina, S.L.','Vitamina',0,'Pyme','PG Bonanova 42, 4-3','08017','Barcelona','08','ES','B63494769','','','','','ES',1,1,1,10,'','Servicios profesionales mensuales',160.00,'',0.00,0.21,0.00,100.00,'430034','','ES7500810105180001364238','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(123,'Saüc Residencial, S.L.U.','SaucResidencial',1,'Pyme','Gran Vía de les Corts Catalanes, 643 2º 1ª','08010','Barcelona','08','ES','B66455064',NULL,NULL,NULL,'','ES',1,1,1,25,NULL,'Servicios profesionales mensuales',600.00,NULL,0.00,0.21,100.00,0.00,'430037','La Caixa','ES9721008637620200109018',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-07 14:18:13',NULL),(124,'JAUME TORRES LACRUZ','JaumeTorres',0,'Pyme','Rbla Mossen Jacint Verdaguer, 3, 1º 1ª','08190','Sant Cugat del Vallès','08','ES','46125888D','','','','','ES',2,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430080','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:05:06',NULL),(125,'Gava Mar Residencial, S.L.U.','GavaMar',1,'Pyme','Gran Via de les Corts Catalanes, 643, 2º 1ª','08010','Barcelona','08','ES','B66542291',NULL,NULL,NULL,'','ES',1,1,1,25,NULL,'Servicios profesionales mensuales',600.00,NULL,0.00,0.21,100.00,0.00,'430044','Banco Sabadell','ES98 0081 7010 5700 0180 1684','La Caixa: ES2821003255852200026249','1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-20 16:02:05',NULL),(126,'Girona 2 BCN Residencial, S.L.U.','Girona2',1,'Pyme','Gran Via de les Corts Catalanes, 643, 2º 1ª','08010','Barcelona','08','ES','B66455114',NULL,NULL,NULL,'','ES',1,1,1,25,NULL,'Servicios profesionales mensuales',600.00,NULL,0.00,0.21,100.00,0.00,'430045',NULL,'ES9421003255842200027147',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-07 07:00:58',NULL),(127,'Dariel Camejo Orozco','DarielCamejo',0,'Pyme','C/ Devesa de Girona, 124','43882','Segur de Calafell','43','ES','71709871B','','darielcamejo@hotmail.com;','','','ES',1,3,1,10,'','Servicios profesionales trimestrales',180.00,'',0.00,0.21,100.00,0.00,'430038','','ES9121000097372100612248','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(128,'Keyrock Capital Ataulf, S.L.U.','Keyrock Capital Ataulf',0,'Pyme','C/Provença 278, 1bis 1º','08008','Barcelona','08','ES','B66617465','','marta.ruiz@sumaempresa.com','','','2',1,1,1,10,'','Monthly services',350.00,'',0.00,0.21,100.00,0.00,'430046','Bsabadell','ES10 0081 0114 4600 0162 9463','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(129,'Bee & Butterfly Consulting, S.L.','BeeButterfly',0,'Pyme','Ronda Sant Pere 52','08010','Barcelona','08','ES','B66662446','','joan.cortes@beeandbutterfly.com','','','EN',1,1,1,10,'','Servicios profesionales mensuales',450.00,'',0.00,0.21,100.00,0.00,'430047','','ES9621000709210200484456','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(131,'Joana Roncero Rico','JoanaRoncero',0,'Pyme','C/ Francesc Macià, nº 9, 2º 2ª','08140','CALDES DE MONTBUI','08','ES','46573579M','','','','','ES',1,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'430057','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:05:11',NULL),(132,'SAHITA FOOD SL','SahitaFood',0,'Pyme','C/GUILLEM ROVIROSA, NUM 18','08800','Vilanova i la Geltru','08','ES','B66380411','','','','','ES',1,1,1,10,'','',0.00,'',0.00,0.21,0.00,100.00,'430067','','ES29 0081 0050 1700 0145 5553 / BSAB ESBB','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:38',NULL),(133,'Retail Adventures, S.L.','RetailAdventures',0,'Pyme','Plaça Esglesia 1','17310','Lloret de Mar','17','ES','B66703299','','','','','ES',1,1,1,10,'','Servicios profesionales mensuales',350.00,'',0.00,0.21,10.00,90.00,'430070','','ES6821005734020200070129','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(135,'Rais & Elnayef Dentists, S.L.P','RaisElnayef',0,'Pyme','C/ Anselm Clave 164','08640','Olesa de Montserrat','08','ES','B66638008','','aliciarais@gmail.com;baselnsk@gmail.com','denrais@infomed.es (administracion)','','ES',1,1,1,10,'','Servicios contabilidad',135.00,'Servicios laboral (3 nóminas)',60.00,0.21,100.00,0.00,'430081','','ES1100810105100002160018','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(136,'Andrea Gonzalez Rosell','Andrea Gonzalez Rosell',0,'Pyme',NULL,NULL,NULL,NULL,'ES','47997636V',NULL,'a.gonzalez.rosell@gmail.com',NULL,NULL,'ES',3,0,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,NULL,'','',NULL,'0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:02:24',NULL),(138,'Alektum Recobro, S.L.','Alektum',0,'Pyme','c/Sant Marián 57, 1º 2ª','08202','Terrassa','1','ES','B65292401',NULL,'johan.furufors@alektumgroup.com','ron.muller@alektumgroup.com',NULL,'ES',1,1,1,10,'','Monthly fee corresponding November',350.00,'Fiscal address fee corresponding November',75.00,0.21,94.11,5.89,'430083','','ES5721000194350200285085',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 16:12:27',NULL),(140,'NIKKEN SEKKEI LTD Sucursal en España','Nikken',0,'Pyme','Av.Diagonal 682 Planta 11-B','08034','Barcelona','08','ES','W7321506C','','','','','ES',2,1,1,10,'','Servicios mensuales',650.00,'',0.00,0.21,0.00,100.00,'430084','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(142,'Promotion Digital Talk S.L.','Prodigitalk',0,'Pyme','Gran Via de la Seat S/N','08760','Martorell','08','ES','B64510373','','','','','ES',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430085','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:20',NULL),(143,'Javier Macia Coll','Javier_Macia',0,'Pyme','Via Augusta 236, 61ª','08021','Barcelona','08','ES','46349106N','','','','','ES',1,3,1,25,'','Honorarios servicios 1T 2018',100.00,'',0.00,0.21,0.00,100.00,'430089','','ES1600810105140001322040','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(145,'Pasifae Ecotech SL','Pasifae',0,'Pyme','c/Eduard Toldrà, 92','08800','Vilanova i la Geltrú','08','ES','B66861329','','','','','ES',2,3,1,10,'','Servicios contables y fiscales prestados en el 1T 2018',200.00,'',0.00,0.21,0.00,100.00,'430090','','','','1','marta.ruiz@sumaempresa.com',1,0,NULL,NULL,NULL),(147,'Smoke & Data S.L.','SmokeData',0,'Pyme','C/ Piera 27 2º-2º','08905','L Hospitalet de Llobregat','08','ES','B66850991','','jar@smokeanddata.com; alicia@lewisandcarroll.com','','','ES',1,3,1,10,'','Servicios Trimestrales',350.00,'',0.00,0.21,100.00,0.00,'430087','','ES1821003262182200262841','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(148,'Geert van den Berg Ibiza','Geert_Ibiza',0,'Pyme','','','','','ES','X8882370T','','','','','ES',2,3,1,10,'','Servicios profesionales trimestrales: Ibiza',110.00,'Servicios Administrativos trimestral',150.00,0.21,100.00,0.00,'430032','','ES80 2100 3003 5421 0970 7503','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(150,'RUR SISTEMA S.L.','RUR SISTEMA',0,'Pyme','','','','','ES','B64529845','','','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','Bsabadell','ES28 0081 0033 0500 0157 4864','Es proveedor. NO hay','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(151,'Marta Ruiz','Marta Ruiz',0,'Pyme','C/Sant Marian 57, 21','08221','Terrassa','08','ES','45465035S','','','','','ES',3,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430117','Caixa','ES98 2100 3377 5122 0010 6788','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(152,'Doom Informatica S.L.','Doom',0,'Pyme','','','','','ES','B62593520','','marc@doomsoftware.com;','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'410003','','ES5721000639030200281960','Es Ajax. Se facura por Ajax','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:03:44',NULL),(153,'Jordi Musumeci Girado','Jordi Musumeci',0,'Pyme','CL MOIXERO, 6, LOCAL 10','08227','Terrassa','08','ES','5470078K',NULL,NULL,NULL,NULL,'ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','ES90 0182 1786 11 0200044653','ES90   0182  1786  1102  00044653','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-05-04 14:11:35',NULL),(154,'DOLORS GONZALEZ CELDRAN','Dolors Celdran',0,'Pyme','C/ Sant Marià, nº 57, 1º 2ª','08221','Terrassa','08','ES','45469169D','653939629',NULL,'dceldran@dceldran.com',NULL,'EN',1,1,1,10,'','Cuota asesoramiento fiscal Rius:',20.00,'Sage 200c: Cuota mensual',48.76,0.21,100.00,0.00,'430110','Bankinter','ES39   0128  0532  0601  00053842','Es proveedor. No hay cond pago.\r\n ES39 0128 0532 0601 0005 3842','1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-20 05:42:03',NULL),(155,'Basel Elnayef Elsakan','Basel_Elnayef',0,'Pyme','Pasatge de la mirada num 29','08207','Sabadell','08','ES','44999681C','670451477',NULL,'baselnsk@gmail.com','','ES',1,1,1,10,NULL,'Servicios mensuales',135.00,'Nominas (2 mensuales)',40.00,0.21,100.00,0.00,'430088','B santander','ES26 0049 3444 80 2114210584','\"ANA y la podemos localizar en el 682.375.760 o 933.878.301.            ES6100493444812494190139 personal\"','1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-23 07:08:19',NULL),(156,'Grup Lacat S.L.','Grup Lacat',0,'Pyme','PASSEIG LLUIS COMPANYS, 10, 2.1','08003','Barcelona','08','ES','B61691713','','jvsestudiven@hotmail.com;;marta.ruiz@sumaempresa.com','','','ES',2,12,1,10,'','Preparación y presentación  modelo 347 2017',50.00,'',0.00,0.21,100.00,0.00,'430109','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:04:38',NULL),(157,'ARQUITECTURA DE LA COMUNICACION CONSULTORIA, S.L.','Arquitectura de la comuni',0,'Pyme','Passeig Sant Joan, 2. Entl 2a.','08010','Barcelona','08','ES','B66938754','','miquel.serra@beeandbutterfly.com','','','ES',2,1,1,10,'','Servicios profesionales mensuales',225.00,'',0.00,0.21,100.00,0.00,'430086','La caixa','ES8221000709230200509248','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:02:45',NULL),(158,'Suma Apoyo Empresarial S.L.','Suma',0,'Pyme','C/ Sant Marian 57 1º, 2ª','08221','Terrassa','08','ES','B66260076',NULL,NULL,NULL,NULL,'ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','Banco Sabadell','\"ES50 0081 0033 0000 0166 6572\"','ES50 0081 0033 0000 0166 6572','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-05-15 14:34:15',NULL),(159,'Vista Calvet Residencial PC 130 SLU','Vista Calvet Res PC 130',0,'Pyme','C/Provenza 278 1º bis 1ª','08008','Barcelona','08','ES','B66960493','','marta.ruiz@sumaempresa.com','','','2',1,1,1,25,'','Monthly services',350.00,'',0.00,0.21,100.00,0.00,'430091','Banco Sabadell','ES7200810114450001709779','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(160,'Cristina Barros Villa','Cristina Barros',0,'Pyme','Calle Vicente Aleixandre, 20','28411','MORALZARZAL, (CERCEDA)','28','ES','46872969G','','','c.barros85@gmail.com','','ES',3,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','Su factura va incluida en la de Amido. No se hace fra directamente','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(161,'Nicton Ocean,S.L.','Nicton Ocean',0,'Pyme','C/Sant Marián, 57 1º 2ª','08221','Terrassa','08','ES','B66947235','','jar@smokeanddata.com','jar@smokeanddata.com','','ES',1,3,1,10,'','Honorarios trimestrales',300.00,'Servicio de domiciliación',75.00,0.21,100.00,0.00,'430094','','ES1900810066640001561561','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(162,'YINMAL INVEST SL','Yinmal Invest',1,'Pyme','Gran Via de les Corts Catalanes, 643 2º1ª','08010','Barcelona','08','ES','B66932831',NULL,NULL,NULL,'','ES',1,1,1,10,NULL,'Honorarios de',600.00,NULL,0.00,0.21,100.00,0.00,'430093','La Caixa','ES1721003255812200053124',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-07 08:54:31',NULL),(163,'Kprofiti, S.L.','Kprofiti',0,'Pyme','C/ Major de Sant Pere 52','08222','Terrassa','08','ES','B66063355','','marta.ruiz@sumaempresa.com','kprofiti@gmail.com','','ES',2,1,1,10,'','Servicios Mensuales',250.00,'Servicios Laborales',36.00,0.21,100.00,0.00,'430092','','ES8100810033010001623673','kprofiti@gmail.com','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(164,'Susana Martinez Pitarch','Susana Mtnez',0,'Pyme','C/ESCOLAPIS 27, 1-D','08800','Vilanova i la Geltru','08','ES','43446404W','','','','','ES',2,12,1,10,'','',0.00,'',0.00,0.21,0.00,100.00,'430071','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:09:02',NULL),(165,'Marta Ciurana Nebreda','Marta Ciurana',0,'Pyme','C/ LLORENS I BARBA, Nº 61 D Bxos. 2ª','08025','Barcelona','08','ES','47731048E','','marta.ruiz@sumaempresa.com','','','ES',2,12,1,10,'','Renta',100.00,'',0.00,0.21,100.00,0.00,'430095','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:06:27',NULL),(167,'Jonathan Lilienfeld Moreno','Jonathan Lilienfeld',0,'Pyme','C/ VILADOMAT, Nº 306 ENT. 1ª','08029','Barcelona','08','ES','47813911Q','','marta.ruiz@sumaempresa.com','','','ES',2,12,1,10,'','Renta 2017',100.00,'',0.00,0.21,100.00,0.00,'430096','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:05:15',NULL),(168,'Joan Cortes Mayans','Joan Cortes',0,'Pyme','C/ Mallorca 352, 1º1ª','08013','Barcelona','08','ES','37291234T',NULL,'joan.cortes@beeandbutterfly.com',NULL,'','ES',1,3,1,10,NULL,'Servicios trimestrales 4T',190.00,NULL,0.00,0.21,100.00,0.00,'430097',NULL,'ES6121000709250200405059',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-15 05:26:53',NULL),(170,'Almudena Pérez Hernandez','Almudena Perez Hernandez',0,'Pyme','C/ Miquel Servet, 206 A','08812','Sant Pere de Ribes','08','ES','52218037X','','','','','ES',2,3,1,10,'','Servicios profesionales 4T',100.00,'',0.00,0.21,0.00,100.00,'430098','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(171,'MANIPULADOS DEL RETRACTIL 91 S.L.','Retractil 91',0,'Pyme','CL. MOGENT, 2 P.I. LA ROCA','08107','MARTORELLES','08','ES','B60174273','','','','','ES',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430099','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:08:28',NULL),(173,'Alfons Vidal','Alfons Vidal',0,'Pyme','C/ Prat de la Riba, 148 5e 2a','08222','Terrassa','08','ES','45483334Y','','','alfons@alfonsvidal.info','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,50.00,50.00,'410013','','NoUsarES08 1465 0120 31 1800461118','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:01:53',NULL),(175,'KUBY SOFTWARE S. L.','Kuby Software',0,'Pyme','c/. Sant Antoni 60','08221','Terrassa','08','ES','B67143065','','','','','',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','ES3000810263140001312336','Antiguo Ajax y Doom','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:05:29',NULL),(176,'Grafitex Servicios Digitales, S.A.','Grafitex',0,'Pyme','c/. Ferrocarrils Catalans, 103','08038','Barcelona','08','ES','A08875387','','','jacarmona@grafitex.net','','ES',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430100','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(177,'Degdar Trade, S.L.U.','Degdar',0,'Pyme','Gran Via de les Corts Catalanes, 643, 2º 1ª','08010','Barcelona','08','ES','B67183046','','marta.ruiz@sumaempresa.com','','','ES',1,1,1,25,'','Honorarios de',150.00,'',0.00,0.21,100.00,0.00,'430101','La Caixa','ES09 2100 3255 8522 0007 5964','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(179,'Goddady','Goddady',0,'Pyme','','','','','ES','','','','','','ES',4,0,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:04:31',NULL),(180,'MILLENNIUM INVEST YAIZA, S.L.U.','Millenium Invest Yaiza',0,'Pyme','CL PROVENÇA, 278, 1º BIS 1ª','08008','Barceloa','08','ES','B67075952','','','','','ES',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430102','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(181,'Alexander Arregui','Alex Arregui',1,'Pyme','Arq. Puig i Cadafalch 8, 2-3','08222','Terrassa','08','ES','30635861E','638122614','alex.arregui@sumaempresa.com','alex.arregui@hotmail.es','en marcha','ES',4,3,1,10,NULL,NULL,0.00,NULL,0.00,0.21,100.00,0.00,'410018','Openbank','ES3200730100550427646062',NULL,'1','marta.ruiz@sumaempresa.com',3,1,NULL,'2020-04-20 16:02:51',NULL),(182,'Open Knowledge Consulting, S.L.','Open Knowledge',0,'Pyme','C/Narcis Monturiol 57, 1','08340','Vilassar de Mar','08','ES','B65465726','','miquel.serra@beeandbutterfly.com','miquel.serra@beeandbutterfly.com','','ES',2,3,1,10,'','Servicios profesionales trimestrales',350.00,'',0.00,0.21,100.00,0.00,'430106','La Caixa (2ctas)','ES81 2100 0384 3302 0044 1800','ES73 2100 0384 3602 0053 3947','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:59',NULL),(183,'U Invest Alternative Investments Platform SLU','Uinvest',0,'Pyme','C/Provenza 278, 1º Bis- 1ª','08008','Barcelona','08','ES','B67280792','','','','','2',4,6,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430103','','','sin confirmar que sea el de uso: ES14 0081 0114 4800 0178 4687 Bsabadell','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(184,'Nazra Intelligence SL','Nazra',0,'Pyme','Paseo Sant Joan 2','08010','Barcelona','08','ES','B67313304','','joan.cortes@beeandbutterfly.com','ES06 0081 0093 4900 0191 2902','','ES',1,3,1,10,'','Servicios profesionales trimestrales',370.00,'Nómina (2x3)',60.00,0.21,100.00,0.00,'430104','','ES0600810093490001912902','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(185,'Alicia RAIS SZERMAN','Alicia Rais',1,'Pyme','CL/ VIA AUGUSTA 12 , PR  1','08006','Barcelona','08','ES','46337714M','605803527','aliciarais@gmail.com',NULL,'','ES',1,3,1,10,NULL,'Servicios Trimestrales',390.00,NULL,0.00,0.21,100.00,0.00,'430111','Banco Sabadelll','ES74 0081 0105 1100 0193 0303',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-21 05:52:02',NULL),(187,'Eva Font del Tarre','EvaFont',0,'Pyme','C/ MAJOR DE SARRIA 204 ppal','08017','Barcelona','08','ES','38127139Q','','eva@apint.es','','','ES',3,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(189,'INGENIOUS INVESTMENTS KFT','IngenousInvest',0,'Pyme','','','','','ES','N0641391H','','','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,0.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:04:50',NULL),(190,'Miriam Marin','Miriam Marin',0,'Pyme',NULL,NULL,NULL,NULL,'ES','45470871D',NULL,'info@mgestio.com',NULL,NULL,'ES',3,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','BBVA','ES50018281 04530201536174','ES50018281 04530201536174','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-05-04 13:30:03',NULL),(191,'Cristobal Escoda Cano','Cristobal Escoda',0,'Pyme','C/Joan Guell 108, 1-2','08028','Barcelona','08','ES','38105009N','','','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:03:31',NULL),(192,'Antoni Ibañez Martin','Toni Ibañez',0,'Pyme','C/Carrasco i Formiguera 6, P31','08173','Sant Cugat del Valles','08','ES','46057108E','','','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:09:04',NULL),(193,'BENIRAPLUS, S.L.','Beniraplus',0,'Pyme','Passeig de Gràcia 90, 4º2ª','08007','Barcelona','08','ES','B67340703','','orkungulec@gmail.com','','','2',1,1,1,10,'','Monthly services',100.00,'',0.00,0.21,100.00,0.00,'430105','La Caixa','ES64 2100 3674 2122 0002 8545','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(194,'Enric Rius','Enric Rius',0,'Pyme','','','','','ES','','','enricrius@riusconsultors.com','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:03:47',NULL),(196,'Orkun Gulec','Orkun Gulex',0,'Pyme','','','','','ES','Y6948737Z','','orkungulec@gmail.com','','','2',3,0,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:08:00',NULL),(197,'John Lorimer','John Lorimer',0,'Pyme','','','','','ES','Y4229314L','','','','','2',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:05:14',NULL),(1198,'Sage','Sage',0,'Pyme','','','','','ES','','','','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:08:36',NULL),(1200,'Marcus Donaldson','Marcus Donaldson',0,'Pyme','C/Pins de Can Caralleu 7-51','08017','Barcelona','08','ES','X0318050Y','','marta.ruiz@sumaempresa.com','','','ES',1,3,1,10,'','Servicios trimestrales',250.00,'',0.00,0.21,100.00,0.00,'430107','Santander','ES9600494701832016048869','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2199,'Rida Sadek Sadek','Rida Sadek',0,'Pyme','C/Loreto 17 Bloque G, 4º1ª,','08029','Barcelona','08','ES','X9251485B','','marta.ruiz@sumaempresa.com;ridasadek@gmail.com','ridasadek@gmail.com','','',2,3,1,10,'','Servicios Trimestrales',195.00,'',0.00,0.21,100.00,0.00,'430108','Para IVA','ES42 0081 0055 4700 0211 9116','ES42 0081 0055 4700 0211 9116 para impuestos tambien','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2201,'Jordi Vilaro (estudiven)','Jordi Vilaro',0,'Pyme','','','','','ES','','','','jvsestudiven@hotmail.com','','',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:05:19',NULL),(2203,'INNODELICE EUROPE, S.L.','Innodelice',0,'Pyme','Gran Vía Carles III, 58-60,1º-2ª','08028','Barcelona','08','ES','B67446468','','nicolas.marie@innodelice.com',' nicolas.marie@innodelice.com','','ES',2,3,1,10,'','Servicios Trimestrales',525.00,'',0.00,0.21,100.00,0.00,'430112','BBVA','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2205,'Nicolas Bruno Marie','Nicolas Marie',0,'Pyme','','','','','ES','Y0786469K','','nicolas.marie@innodelice.com','nicolas.marie@innodelice.com','','',3,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2206,'Oliver Wiethaus','Oliver Wiethaus',0,'Pyme','C/Provença 278, 1º bis1ª','08008','Barcelona','08','ES','X3130815D','','','oliver.wiethaus@goehmann.es','','2',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:07:55',NULL),(2207,'Miquel Serra Bertran','Miquel Serra Bertran',0,'Pyme','','','','','ES','46226397P','','','','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:07:24',NULL),(2208,'Patrick Westerlund','Patrick Westerlund',0,'Pyme','C/Comte de Urgell 97, 51','08011','Barcelona','08','ES','Y5187749K','','patrick.westerlund@smh.se','patrick@westerlund.cat; patrick@nordicestate.es; isabelafiliu@hotmail.com','','2',4,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','\"Pasaporte: 93534556 Sueco 14/03/1984\n            Móvil: +34 658 112 740\n            Mobil: +46 735 10 60 30\"','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:08:15',NULL),(2209,'AC AgenciaCasa SL','AC AgenciaCasa SL',0,'Pyme','C/Comte de Urgell 97, 51','08011','Barcelona','08','ES','B67236786',NULL,'patrick@nordicestate.es',NULL,NULL,'ES',2,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430113','BS','\" ES18 0081 0312 2200 0146 0157\"','ES73 0081 0093 4300 0192 1399','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-19 15:22:35',NULL),(2211,'Westerlund Capital SL','Westerlund Capital',0,'Pyme','C/Comte de Urgell 97, 51','08011','Barcelona','08','ES','B67016550','','marta.ruiz@sumaempresa.com','','','2',2,1,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430115','BS hay dos ctas','ES83 0081 0312 2900 0143 9147','\" ES45 0081 0093 4100 0196 0801\n            \n            ES83 0081 0312 2900 0143 9147 impuestos\"','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:09:24',NULL),(2213,'Property Agency Nordic State Spain SL','Nordic State',0,'Pyme','Gran Via de Les Corts Catalanes','08011','Barcelona','08','ES','B67513002','','patrick@nordicestate.es','patrick@nordicestate.es','','',2,1,1,10,'','Monthly Services Fee',275.00,'',0.00,0.21,100.00,0.00,'430116','Bsabadell','ES85 0081 0093 4500 0196 2698','\"ES85\n            0081 0093 4500 0196 2698 para impuestos\"','0','marta.ruiz@sumaempresa.com',1,0,NULL,'2020-04-01 15:07:52',NULL),(2214,'Philip Eduard Carr yeo','Philip Carr',0,'Pyme','C/BOSQUE DE LOS FRAILES','07170','Valldemosa','07','ES','X2337440L','683410751','philipcarr@hotmail.com',NULL,NULL,'ES',2,3,1,10,NULL,'Servicios trimestrales',210.00,NULL,0.00,0.21,100.00,0.00,'430120','N26 BANK GMBH (SWIFT= NTSBDEB1XXX)','ES5215632626313265188903','C/ Valencia, 137, 2a 1a, 08011, Barcelona.            Cta banco Ssocial: ES30 2100 0047 7101 0251 6612','1','marta.ruiz@sumaempresa.com',3,1,NULL,'2020-04-23 06:51:54',NULL),(2216,'Ana Lopez Baena','Ana Lopez Baena',0,'Pyme','','','','','ES','39361039N','','','','','ES',4,1,1,10,'','',0.00,'',0.00,0.21,0.00,100.00,'','','\"\n            ES8101823971290200235868\"','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:02:00',NULL),(2217,'Sandra Ambjörnsson','Sandra Ambjörnsson',0,'Pyme','Carrer de la Casa Pletada 12','08870','Sitges','08','ES','Y6614453N','','marta.ruiz@sumaempresa.com','sandra@nordicestate.es','','2',2,3,1,10,'','Quarter Services',210.00,'',0.00,0.21,100.00,0.00,'430126','','ES27 0081 0093 4900 0196 8202','ID Number 19900824-3868','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2218,'ISAK LA FLEUR ENGDAHL','ISAK LA FLEUR ENGDAHL',0,'Pyme','C/ Castor TV, Nº 11','08758','CERVELLÓ','08','ES','Y5740164E',NULL,'isak.engdahl@gmail.com','paola.urquiza@gmail.com','','ES',1,3,1,10,NULL,'Servicios Trimestrales',85.00,NULL,0.00,0.21,100.00,0.00,'430125',NULL,'ES8700810230410001627566',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-05 14:39:34',NULL),(2219,'Leonardo Jose Guttman','Leonardo Jose Guttman',1,'Pyme','C/Rocafort 109, 4-2','08015','Barcelona','08','ES','Y7492785C',NULL,'marta.ruiz@sumaempresa.com','leonardogutt@gmail.com','','ES',2,3,1,10,NULL,'Servicios trimestrales',160.00,NULL,0.00,0.21,100.00,0.00,'430122',NULL,NULL,NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-08 08:57:00',NULL),(2220,'Firas Elnayef Elsakan','Firas Elnayef',0,'Pyme','Pstg. De la Mirada 29','08207','Sabadell','08','ES','47157754A','','marta.ruiz@sumaempresa.com','firas@uic.es,','','ES',2,3,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430114','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2222,'Poniente Items SL','Poniente',1,'Pyme','GRAN VIA DE LES CORTS CATALANES, 643, 2º 1','08010','Barcelona','08','ES','B87932133',NULL,'marta.ruiz@sumaempresa.com',NULL,'','ES',1,1,1,25,NULL,'Servicios profesionales mensuales',600.00,NULL,0.00,0.21,100.00,0.00,'430119','BS','ES73 0081 0129 4900 0176 1680',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-08 07:46:26',NULL),(2225,'Family Run Restaurants SL','Family Run Restaurants SL',0,'Pyme','','','','','ES','','','marta.ruiz@sumaempresa.com','','','',2,1,1,10,'','Servicios mensuales',160.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-05-12 06:09:40',NULL),(2226,'GIE ATOUT FRANCE Oficina de representacion','GIE ATOUT FRANCE',0,'Pyme','C/ Serrano, 19, 2ª planta izquierda','28001','Madrid','28','ES','N0012083B','','','','','',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','0','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-01 15:04:23',NULL),(2227,'ESSIG PLM BARCELONA S.L.','Essig',0,'Pyme','CUNIT 72, EDIFICIO A 11','08850','Gava','08','ES','B67520817','','marta.ruiz@sumaempresa.com','kdaly@essig.com; simone.baroni@essigplm.com','','ES',2,1,1,10,'','Servicios mensuales',220.00,'',0.00,0.21,100.00,0.00,'','','','\"kdaly@essig.com\n            simone.baroni@essigplm.com\"','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2228,'Jose Antonio Rodriguex','Jose Antonio Rodriguez',0,'Pyme','C/Piera 27 esc A, 2-2','08905','Hospitalet de Llobregat','08','ES','38554349R','','','jar@smokeanddata.com','','ES',3,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2229,'FASHION IQ BCN, S.L','FashionIQ',1,'Pyme','Pg.de Gracia 44, bjos izq.','08007','Barcelona','08','ES','B65952384',NULL,'marta.ruiz@sumaempresa.com',NULL,'','ES',2,1,30,10,NULL,'Monthly fee corresponding February',1400.00,'Labour services x 4',0.00,0.21,100.00,0.00,'430121','BBVA','ES1901821797310201603288-ES0301821797320201613227',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-05-13 14:21:20',NULL),(2230,'Vision Arcanum SL','Vision Arcanum',0,'Pyme','C/Concepcion Arenal 55, Planta 4, Puerta 2','08027','Barcelona','08','ES','B67554378',NULL,'coderiks@gmail.com','marta.ruiz@sumaempresa.com',NULL,'ES',2,1,1,10,NULL,'Servicion Mensuales correspondientes a',140.00,NULL,0.00,0.21,100.00,0.00,'430123',NULL,'ES4701821018490204344339',NULL,'1','marta.ruiz@sumaempresa.com',1,1,NULL,'2020-04-05 13:49:28',NULL),(2231,'Leticia de Mattos','Leticia de Mattos',0,'Pyme','C/ Rosselló, nº 51, At. - 2ª','08029','Barcelona','08','ES','Y0643109C','','','','','ES',2,12,1,10,'','',0.00,'',0.00,0.21,100.00,0.00,'430124','','','','1','marta.ruiz@sumaempresa.com',1,1,NULL,NULL,NULL),(2232,'Vadim Fedorov','Vadim Fedorov',0,'Autónomo','Carrer de Concepción Arenal 55, 4-2','08027','Barcelona','01','ES','Y2564576K',NULL,'coderiks@gmail.com','coderiks@gmail.com',NULL,'ES',1,3,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,'ES6800496125202990056715',NULL,'1','marta.ruiz@sumaempresa.com',1,1,'2020-04-01 06:08:44','2020-04-05 13:49:08',NULL),(2233,'Agustin Batiz','Agustin Batiz',0,'Autónomo',NULL,NULL,NULL,'08','ES',NULL,NULL,NULL,NULL,NULL,'ES',1,3,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'1','marta.ruiz@sumaempresa.com',1,1,'2020-04-01 09:04:45','2020-04-03 20:25:16',NULL),(2237,'alex','alex',0,'Contacto','13','13','321','4','ES','134','12','1@1.com','1@1.com',NULL,'ES',1,3,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'sda','1','marta.ruiz@sumaempresa.com',1,0,'2020-04-03 16:05:31','2020-04-03 16:05:37','2020-04-03 16:05:37'),(2238,'Paola Urquiza',NULL,0,'Contacto',NULL,NULL,NULL,'0','AE',NULL,NULL,'paola.urquiza@gmail.com',NULL,NULL,'ES',1,3,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'1','marta.ruiz@sumaempresa.com',1,1,'2020-04-05 08:28:47','2020-04-05 08:28:47',NULL),(2243,'Pere Olego - Mutua Activa 2008',NULL,0,'Contacto',NULL,NULL,NULL,'0','ES',NULL,'610246072-934525050','pere.olego@activamutua.es',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Es el Director Delegación de delegacion de Mutua Activa 2008. Es la mutua de Leo Guttman','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-08 08:56:43','2020-04-08 08:56:43',NULL),(2244,'Arsel Business',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'608478510','info@arsel.es',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'SERVICIO LIMPIEZA BCN/ROCA','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:14:34','2020-04-16 07:14:34',NULL),(2245,'GLOBAL BLUE',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'917 294 380','taxfree.es@globalblue.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Tax Free','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:15:04','2020-04-16 07:15:04',NULL),(2246,'PROSEGUR SERVICIOS DE EFECTIVO',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'pilar.cansado@prosegur.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Pilar Cansado','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:15:47','2020-04-16 07:15:47',NULL),(2247,'An ARTEMI NOLLA',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'93 467 70 44','cmorales@angimmobles.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Carmen Clara Morales. Alquiler BCN','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:16:22','2020-04-16 07:16:22',NULL),(2248,'ASSOCIACIÓ AMICS PS. GRÀCIA.',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'93 302 76 16','admin@barcelonapasseigdegracia.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Mª Àngels Ciurana. Factura trimestral','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:17:00','2020-04-16 07:17:00',NULL),(2249,'EDEN SPRINGS',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'info@es.edensprings.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Agua tiendas','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:17:20','2020-04-16 07:17:20',NULL),(2250,'CLIDOM ENERGY (HOLALUZ)',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'900 64 92 92','tufactura@holaluz.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:21:05','2020-04-16 07:21:05',NULL),(2251,'VALUE RETAIL',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'ar@valueretail.com','MMesa@ValueRetail.com','amanas@ValueRetail.com','ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Alquiler Outlets LRV y ROZ. Me respondió Miguel Mesa  MMesa@ValueRetail.com) que las manda a  ap@philipp-plein.com.\r\nHe pedido directamente a  Aitor Manas amanas@ValueRetail.com. A ver.','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 07:21:41','2020-04-17 07:20:16',NULL),(2252,'Luigi di Matteo',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'l.dimatteo@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Facturas intercompany','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 08:28:34','2020-04-16 08:28:34',NULL),(2253,'Fabio Bronzi',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'f.bronzi@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Facturas antiguas.a él o a Barbara b.conforti@philipp-plein.com','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 08:29:44','2020-04-16 08:29:44',NULL),(2254,'Barbara Conforti',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'b.conforti@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Facturas antiguas o a Fabio f.bronzi@philipp-plein.com','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 08:30:27','2020-04-16 08:30:27',NULL),(2255,'Alice Tandetti',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'a.tandetti@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Cambio proveedores. Alice a.tandetti@philipp-plein.com or Andrea lanza@philipp-plein.com','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 08:31:09','2020-04-16 14:07:45',NULL),(2257,'Andrea Lanza',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'+39 344 205 2003','lanza@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Cambio proveedores o Alice Tandetti. Responsable Laboral tiendas BCN y Madrid','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 08:31:59','2020-05-07 07:32:48',NULL),(2258,'Fabrizzio Maccazzola',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'f.maccazzola@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Pago fras pendientes: Fabrizio (Head of Treasury, in charge of approving payments)','0','marta.ruiz@sumaempresa.com',1,1,'2020-04-16 08:33:09','2020-04-16 08:33:09',NULL),(2261,'aaa',NULL,0,'Autónomo',NULL,NULL,NULL,'08','ES',NULL,NULL,NULL,NULL,NULL,'ES',1,2,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'1','marta.ruiz@sumaempresa.com',1,0,'2020-04-20 16:04:49','2020-04-20 16:04:58','2020-04-20 16:04:58'),(2262,'a',NULL,0,'Autónomo',NULL,NULL,NULL,'08','ES',NULL,NULL,NULL,NULL,NULL,'ES',1,2,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'1','marta.ruiz@sumaempresa.com',1,0,'2020-04-21 14:26:00','2020-04-21 14:26:51','2020-04-21 14:26:51'),(2263,'Marta Carmona',NULL,0,'Contacto',NULL,NULL,NULL,'0','ES',NULL,'650298188','mcarmona@bonavistadev.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'0','marta.ruiz@sumaempresa.com',1,1,'2020-04-27 06:08:59','2020-04-27 06:08:59',NULL),(2265,'Anton Axel Gustav Wass',NULL,0,'Contacto','AVENIDA GARROFERS , 3','08870','Sitges','01','SE','Y6614491G','635668071','anton.wass@gmail.com',NULL,NULL,'EN',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'S.S. Nº (NSS/NAF): 08/1388822727 Estado Civil: SOLTERO Fecha de nacimiento: 07/12/1989','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-04 07:09:54','2020-05-04 07:34:16',NULL),(2266,'KING\'S ISLAND VENTURES, SL',NULL,0,'Pyme','AVENIDA GARROFERS , 3,','08870','Sitges','08','ES',NULL,'635668071','anton.wass@gmail.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,NULL,'1','marta.ruiz@sumaempresa.com',1,1,'2020-05-04 07:11:25','2020-05-04 07:11:55',NULL),(2268,'Davide del Gaudio',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'d.delgaudio@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Responsable de las tiendas Outlets. También para temas laborales de los Outlets','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:32:19','2020-05-07 07:32:19',NULL),(2269,'Rudy Hilkens',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'r.hilkens@philipp-plein.com',NULL,NULL,'EN',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'District Manager Central Europe.Manda detalle Payroll La Roca y Las rozas.','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:34:35','2020-05-07 07:34:35',NULL),(2270,'Rebecca Lavelle',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'r.lavelle@philipp-plein.com','barcelona@philipp-plein.com',NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Responsable tienda BCN','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:36:58','2020-05-07 07:36:58',NULL),(2271,'Tomaso Bianchi',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'t.bianchi@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Financiero','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:37:54','2020-05-07 07:37:54',NULL),(2272,'Gilles Gaucher-Cazalis',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'gilles.gc@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'CFO','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:38:47','2020-05-07 07:38:47',NULL),(2273,'Elena Guzzardi',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'Phone:   +41 71 414-5703 Mobile:  +39 389 5966544','e.guzzardi@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'PA to Philipp Plein | Administration & Showroom director','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:39:21','2020-05-13 06:15:04',NULL),(2274,'Davide Luzzani',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'d.luzzani@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Fiscal Reports','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:39:53','2020-05-07 07:39:53',NULL),(2275,'Beatriz Rodríguez',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,'917469549','b.rodriguez@philipp-plein.com','madrid@philipp-plein.com',NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Store Manager Ortega','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:40:41','2020-05-14 07:45:16',NULL),(2276,'María López',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'m.lopez@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Tienda Ortega','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:40:57','2020-05-07 07:40:57',NULL),(2277,'Tina Javan',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'t.javan@philipp-plein.com','laroca@philipp-plein.com',NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Store Manager LRV','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:41:28','2020-05-07 07:41:28',NULL),(2278,'Patricia González Roald',NULL,0,'Contacto',NULL,NULL,NULL,'28','ES',NULL,'609782955','p.gonzalez@philipp-plein.com','lasrozas@philipp-plein.com',NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Store Manager Las Rozas','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:42:25','2020-05-11 07:28:47',NULL),(2279,'Diana Andrealli',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'d.andrealli@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Intrastat','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:42:43','2020-05-07 07:42:43',NULL),(2280,'Paul Bertoldo',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'ES',NULL,NULL,'p.bertoldo@philipp-plein.com',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Extratos Bancarios','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-07 07:43:56','2020-05-07 07:43:56',NULL),(2281,'Andreea Fracea',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'CH',NULL,NULL,'a.fracea@philipp-plein.com',NULL,NULL,'EN',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Responsable de tiendas BCN y ORT (no OULETS )','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-13 06:17:06','2020-05-13 06:17:06',NULL),(2282,'Gemma Thornley',NULL,0,'Contacto',NULL,NULL,NULL,NULL,'CH',NULL,'T: +44 (0)1869 366 338  M: +44 (0)7827 841 809','GThornley@ValueRetail.com',NULL,NULL,'EN',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Receivables and Cash Manager. Creo que es de la tienda Bicester Village','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-13 07:37:05','2020-05-13 07:38:56',NULL),(2283,'BETA NAOS SL',NULL,0,'Contacto','C/LA PAZ 34 7','46003',NULL,'46','ES','B98328354','963524694','aperez@finmaser.net',NULL,NULL,'ES',1,0,1,10,NULL,NULL,0.00,NULL,0.00,0.21,1.00,0.00,NULL,NULL,NULL,'Ana Perez Dura. Alquiler de tienda de Ortega','0','marta.ruiz@sumaempresa.com',1,1,'2020-05-14 13:56:23','2020-05-14 13:56:23',NULL);
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_03_25_180252_create_permission_tables',1),(5,'2020_03_25_182659_create_provincias_table',1),(6,'2020_03_25_182712_create_paises_table',1),(8,'2020_03_29_093650_create_condicion_pagos_table',1),(10,'2020_03_29_182516_create_empresas_table',1),(12,'2020_03_31_162445_create_tipo_empresas_table',2),(14,'2020_03_29_093831_create_periodo_facturaciones_table',3),(17,'2020_03_29_193536_create_empresa_contacto_table',4),(18,'2020_03_28_210641_create_departamentos_table',5),(19,'2020_04_04_105846_create_pus_table',6),(20,'2020_04_04_164518_create_jobs_table',7),(21,'2020_04_04_192336_create_provclis_table',8),(22,'2020_04_05_082929_create_sumas_table',9),(24,'2020_04_10_183153_create_contas_table',10),(29,'2020_04_25_102655_periodos',11),(30,'2020_05_02_180226_create_conta_recurrentes_table',12),(31,'2020_05_05_163354_create_categorias_table',13);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\User',1),(2,'App\\User',2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `id` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paises_c3_index` (`c3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES ('AD','Andorra','AND'),('AE','Emiratos Árabes Unidos','ARE'),('AF','Afganistán','AFG'),('AG','Antigua y Barbuda','ATG'),('AI','Anguila','AIA'),('AL','Albania','ALB'),('AM','Armenia','ARM'),('AO','Angola','AGO'),('AQ','Antártida','ATA'),('AR','Argentina','ARG'),('AS','Samoa Americana','ASM'),('AT','Austria','AUT'),('AU','Australia','AUS'),('AW','Aruba','ABW'),('AX','Aland','ALA'),('AZ','Azerbaiyán','AZE'),('BA','Bosnia y Herzegovina','BIH'),('BB','Barbados','BRB'),('BD','Bangladés','BGD'),('BE','Bélgica','BEL'),('BF','Burkina Faso','BFA'),('BG','Bulgaria','BGR'),('BH','Baréin','BHR'),('BI','Burundi','BDI'),('BJ','Benín','BEN'),('BL','San Bartolomé','BLM'),('BM','Bermudas','BMU'),('BN','Brunéi','BRN'),('BO','Bolivia','BOL'),('BQ','Bonaire, San Eustaquio y Saba','BES'),('BR','Brasil','BRA'),('BS','Bahamas','BHS'),('BT','Bután','BTN'),('BV','Isla Bouvet','BVT'),('BW','Botsuana','BWA'),('BY','Bielorrusia','BLR'),('BZ','Belice','BLZ'),('CA','Canadá','CAN'),('CC','Islas Cocos','CCK'),('CD','República Democrática del Congo','COD'),('CF','República Centroafricana','CAF'),('CG','República del Congo','COG'),('CH','Suiza','CHE'),('CI','Costa de Marfil','CIV'),('CK','Islas Cook','COK'),('CL','Chile','CHL'),('CM','Camerún','CMR'),('CN','China','CHN'),('CO','Colombia','COL'),('CR','Costa Rica','CRI'),('CU','Cuba','CUB'),('CV','Cabo Verde','CPV'),('CW','Curazao','CUW'),('CX','Isla de Navidad','CXR'),('CY','Chipre','CYP'),('CZ','República Checa','CZE'),('DE','Alemania','DEU'),('DJ','Yibuti','DJI'),('DK','Dinamarca','DNK'),('DM','Dominica','DMA'),('DO','República Dominicana','DOM'),('DZ','Argelia','DZA'),('EC','Ecuador','ECU'),('EE','Estonia','EST'),('EG','Egipto','EGY'),('EH','República Árabe Saharaui Democrática','ESH'),('ER','Eritrea','ERI'),('ES','España','ESP'),('ET','Etiopía','ETH'),('FI','Finlandia','FIN'),('FJ','Fiyi','FJI'),('FK','Islas Malvinas','FLK'),('FM','Micronesia','FSM'),('FO','Islas Feroe','FRO'),('FR','Francia','FRA'),('GA','Gabón','GAB'),('GB','Reino Unido','GBR'),('GD','Granada','GRD'),('GE','Georgia','GEO'),('GF','Guayana Francesa','GUF'),('GG','Guernsey','GGY'),('GH','Ghana','GHA'),('GI','Gibraltar','GIB'),('GL','Groenlandia','GRL'),('GM','Gambia','GMB'),('GN','Guinea','GIN'),('GP','Guadalupe','GLP'),('GQ','Guinea Ecuatorial','GNQ'),('GR','Grecia','GRC'),('GS','Islas Georgias del Sur y Sandwich del Sur','SGS'),('GT','Guatemala','GTM'),('GU','Guam','GUM'),('GW','Guinea-Bisáu','GNB'),('GY','Guyana','GUY'),('HK','Hong Kong','HKG'),('HM','Islas Heard y McDonald','HMD'),('HN','Honduras','HND'),('HR','Croacia','HRV'),('HT','Haití','HTI'),('HU','Hungría','HUN'),('id','Indonesia','idN'),('IE','Irlanda','IRL'),('IL','Israel','ISR'),('IM','Isla de Man','IMN'),('IN','India','IND'),('IO','Territorio Británico del Océano Índico','IOT'),('IQ','Irak','IRQ'),('IR','Irán','IRN'),('IS','Islandia','ISL'),('IT','Italia','ITA'),('JE','Jersey','JEY'),('JM','Jamaica','JAM'),('JO','Jordania','JOR'),('JP','Japón','JPN'),('KE','Kenia','KEN'),('KG','Kirguistán','KGZ'),('KH','Camboya','KHM'),('KI','Kiribati','KIR'),('KM','Comoras','COM'),('KN','San Cristóbal y Nieves','KNA'),('KP','Corea del Norte','PRK'),('KR','Corea del Sur','KOR'),('KW','Kuwait','KWT'),('KY','Islas Caimán','CYM'),('KZ','Kazajistán','KAZ'),('LA','Laos','LAO'),('LB','Líbano','LBN'),('LC','Santa Lucía','LCA'),('LI','Liechtenstein','LIE'),('LK','Sri Lanka','LKA'),('LR','Liberia','LBR'),('LS','Lesoto','LSO'),('LT','Lituania','LTU'),('LU','Luxemburgo','LUX'),('LV','Letonia','LVA'),('LY','Libia','LBY'),('MA','Marruecos','MAR'),('MC','Mónaco','MCO'),('MD','Moldavia','MDA'),('ME','Montenegro','MNE'),('MF','San Martín','MAF'),('MG','Madagascar','MDG'),('MH','Islas Marshall','MHL'),('MK','Macedonia','MKD'),('ML','Malí','MLI'),('MM','Myanmar','MMR'),('MN','Mongolia','MNG'),('MO','Macao','MAC'),('MP','Islas Marianas del Norte','MNP'),('MQ','Martinica','MTQ'),('MR','Mauritania','MRT'),('MS','Montserrat','MSR'),('MT','Malta','MLT'),('MU','Mauricio','MUS'),('MV','Maldivas','MDV'),('MW','Malaui','MWI'),('MX','México','MEX'),('MY','Malasia','MYS'),('MZ','Mozambique','MOZ'),('NA','Namibia','NAM'),('NC','Nueva Caledonia','NCL'),('NE','Níger','NER'),('NF','Norfolk','NFK'),('NG','Nigeria','NGA'),('NI','Nicaragua','NIC'),('NL','Países Bajos','NLD'),('NO','Noruega','NOR'),('NP','Nepal','NPL'),('NR','Nauru','NRU'),('NU','Niue','NIU'),('NZ','Nueva Zelanda','NZL'),('OM','Omán','OMN'),('PA','Panamá','PAN'),('PE','Perú','PER'),('PF','Polinesia Francesa','PYF'),('PG','Papúa Nueva Guinea','PNG'),('PH','Filipinas','PHL'),('PK','Pakistán','PAK'),('PL','Polonia','POL'),('PM','San Pedro y Miquelón','SPM'),('PN','Islas Pitcairn','PCN'),('PR','Puerto Rico','PRI'),('PS','Palestina','PSE'),('PT','Portugal','PRT'),('PW','Palaos','PLW'),('PY','Paraguay','PRY'),('QA','Catar','QAT'),('RE','Reunión','REU'),('RO','Rumania','ROU'),('RS','Serbia','SRB'),('RU','Rusia','RUS'),('RW','Ruanda','RWA'),('SA','Arabia Saudita','SAU'),('SB','Islas Salomón','SLB'),('SC','Seychelles','SYC'),('SD','Sudán','SDN'),('SE','Suecia','SWE'),('SG','Singapur','SGP'),('SH','Santa Elena, Ascensión y Tristán de Acuña','SHN'),('SI','Eslovenia','SVN'),('SJ','Svalbard y Jan Mayen','SJM'),('SK','Eslovaquia','SVK'),('SL','Sierra Leona','SLE'),('SM','San Marino','SMR'),('SN','Senegal','SEN'),('SO','Somalia','SOM'),('SR','Surinam','SUR'),('SS','Sudán del Sur','SSD'),('ST','Santo Tomé y Príncipe','STP'),('SV','El Salvador','SLV'),('SX','Sint Maarten','SXM'),('SY','Siria','SYR'),('SZ','Suazilandia','SWZ'),('TC','Islas Turcas y Caicos','TCA'),('TD','Chad','TCD'),('TF','Tierras Australes y Antárticas Francesas','ATF'),('TG','Togo','TGO'),('TH','Tailandia','THA'),('TJ','Tayikistán','TJK'),('TK','Tokelau','TKL'),('TL','Timor Oriental','TLS'),('TM','Turkmenistán','TKM'),('TN','Túnez','TUN'),('TO','Tonga','TON'),('TR','Turquía','TUR'),('TT','Trinidad y Tobago','TTO'),('TV','Tuvalu','TUV'),('TW','Taiwán (República de China)','TWN'),('TZ','Tanzania','TZA'),('UA','Ucrania','UKR'),('UG','Uganda','UGA'),('UM','Islas ultramarinas de Estados Unidos','UMI'),('US','Estados Unidos','USA'),('UY','Uruguay','URY'),('UZ','Uzbekistán','UZB'),('VA','Vaticano, Ciudad del','VAT'),('VC','San Vicente y las Granadinas','VCT'),('VE','Venezuela','VEN'),('VG','Islas Vírgenes Británicas','VGB'),('VI','Islas Vírgenes de los Estados Unidos','VIR'),('VN','Vietnam','VNM'),('VU','Vanuatu','VUT'),('WF','Wallis y Futuna','WLF'),('WS','Samoa','WSM'),('YE','Yemen','YEM'),('YT','Mayotte','MYT'),('ZA','Sudáfrica','ZAF'),('ZM','Zambia','ZMB'),('ZW','Zimbabue','ZWE');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodo_facturaciones`
--

DROP TABLE IF EXISTS `periodo_facturaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodo_facturaciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `periodofacturacion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodo_facturaciones`
--

LOCK TABLES `periodo_facturaciones` WRITE;
/*!40000 ALTER TABLE `periodo_facturaciones` DISABLE KEYS */;
INSERT INTO `periodo_facturaciones` VALUES (0,'No def',0,'2020-04-03 16:15:07','2020-04-03 16:15:07'),(1,'Mensual',1,'2020-04-03 16:16:01','2020-04-03 16:16:01'),(3,'Trimestral',3,'2020-04-03 16:16:01','2020-04-03 16:16:01'),(12,'Anual',12,'2020-04-03 16:16:01','2020-04-03 16:16:01');
/*!40000 ALTER TABLE `periodo_facturaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `perI` int(11) NOT NULL,
  `perF` int(11) NOT NULL,
  `periodo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
INSERT INTO `periodos` VALUES (1,0,1,1,'Enero'),(2,0,2,2,'Febrero'),(3,0,3,3,'Marzo'),(4,0,4,4,'Abril'),(5,0,5,5,'Mayo'),(6,0,6,6,'Junio'),(7,0,7,7,'Julio'),(8,0,8,8,'Agosto'),(9,0,9,9,'Septiembre'),(10,0,10,10,'Octubre'),(11,0,11,11,'Noviembre'),(12,0,12,12,'Diciembre'),(13,1,1,3,'T1'),(14,1,4,6,'T2'),(15,1,7,9,'T3'),(16,1,10,12,'T4'),(17,1,1,12,'Selecciona');
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'users.index','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(2,'users.edit','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(3,'users.show','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(4,'users.create','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(5,'users.destroy','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(6,'roles.index','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(7,'roles.edit','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(8,'roles.show','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(9,'roles.create','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(10,'roles.destroy','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(11,'permissions.index','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(12,'permissions.edit','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(13,'permissions.show','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(14,'permissions.create','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(15,'permissions.destroy','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(16,'empresas.index','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(17,'empresas.edit','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(18,'empresas.show','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(19,'empresas.create','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(20,'empresas.destroy','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(21,'empresacontactos.index','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(22,'empresacontactos.edit','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(23,'empresacontactos.show','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(24,'empresacontactos.create','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(25,'empresacontactos.destroy','web','2020-03-30 18:31:15','2020-03-30 18:31:15'),(26,'contactos.index','web','2020-04-02 16:28:55','2020-04-02 16:28:55'),(27,'contactos.edit','web','2020-04-02 16:28:55','2020-04-02 16:28:55'),(28,'contactos.show','web','2020-04-02 16:28:55','2020-04-02 16:28:55'),(29,'contactos.create','web','2020-04-02 16:28:55','2020-04-02 16:28:55'),(30,'contactos.destroy','web','2020-04-02 16:28:55','2020-04-02 16:28:55'),(31,'pus.index','web','2020-04-04 09:09:57','2020-04-04 09:09:57'),(32,'pus.edit','web','2020-04-04 09:09:57','2020-04-04 09:09:57'),(33,'pus.show','web','2020-04-04 09:09:57','2020-04-04 09:09:57'),(34,'pus.create','web','2020-04-04 09:09:57','2020-04-04 09:09:57'),(35,'pus.destroy','web','2020-04-04 09:09:57','2020-04-04 09:09:57'),(41,'contas.index','web','2020-04-10 16:37:08','2020-04-10 16:37:08'),(42,'contas.edit','web','2020-04-10 16:37:08','2020-04-10 16:37:08'),(43,'contas.show','web','2020-04-10 16:37:08','2020-04-10 16:37:08'),(44,'contas.create','web','2020-04-10 16:37:08','2020-04-10 16:37:08'),(45,'contas.destroy','web','2020-04-10 16:37:08','2020-04-10 16:37:08'),(46,'provclis.index','web','2020-04-11 08:46:24','2020-04-11 08:46:24'),(47,'provclis.edit','web','2020-04-11 08:46:24','2020-04-11 08:46:24'),(48,'provclis.show','web','2020-04-11 08:46:24','2020-04-11 08:46:24'),(49,'provclis.create','web','2020-04-11 08:46:25','2020-04-11 08:46:25'),(50,'provclis.destroy','web','2020-04-11 08:46:25','2020-04-11 08:46:25'),(51,'contarecurrentes.index','web','2020-05-02 16:24:28','2020-05-02 16:24:28'),(52,'contarecurrentes.edit','web','2020-05-02 16:24:28','2020-05-02 16:24:28'),(53,'contarecurrentes.show','web','2020-05-02 16:24:28','2020-05-02 16:24:28'),(54,'contarecurrentes.create','web','2020-05-02 16:24:28','2020-05-02 16:24:28'),(55,'contarecurrentes.destroy','web','2020-05-02 16:24:28','2020-05-02 16:24:28'),(56,'categorias.index','web','2020-05-05 14:45:10','2020-05-05 14:45:10'),(57,'categorias.edit','web','2020-05-05 14:45:10','2020-05-05 14:45:10'),(58,'categorias.show','web','2020-05-05 14:45:11','2020-05-05 14:45:11'),(59,'categorias.create','web','2020-05-05 14:45:11','2020-05-05 14:45:11'),(60,'categorias.destroy','web','2020-05-05 14:45:11','2020-05-05 14:45:11');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provclis`
--

DROP TABLE IF EXISTS `provclis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provclis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` bigint(20) DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ES',
  `nif` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tfno` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banco2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `irpf` decimal(15,2) DEFAULT '0.00',
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=391 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provclis`
--

LOCK TABLES `provclis` WRITE;
/*!40000 ALTER TABLE `provclis` DISABLE KEYS */;
INSERT INTO `provclis` VALUES (319,'Alicia Rais',12,'','','','ES','46337714M','','','','','','',0.00,'',NULL,'2020-05-17 16:08:40'),(320,'Basel Elnayef Elkasan',12,NULL,NULL,NULL,'ES','44999681C',NULL,NULL,NULL,NULL,NULL,NULL,0.15,NULL,NULL,'2020-05-17 16:09:17'),(321,'Ruben Torres Gallardo',12,'','','','ES','46451552Q','','','','','','',0.15,'',NULL,'2020-05-17 17:36:04'),(322,'Maria Armas Serret',12,'','','','ES','45498483K','','','','','','',0.15,'',NULL,'2020-05-17 17:38:35'),(323,'Juan Andres Cano Corbero',12,'','','','ES','47783359P','','','','','','',0.15,'',NULL,'2020-05-17 17:38:31'),(324,'Edgar Gramunt Martinez',12,'','','','ES','39389711A','','','','','','',0.15,'',NULL,'2020-05-17 17:38:13'),(325,'Andreina Marrero Mussa',12,'','','','ES','Y4268828L','','','','','','',0.15,'',NULL,'2020-05-17 17:38:01'),(326,'Rodrigo Gonzalez Terrats',12,'','','','ES','45792045B','','','','','','',0.15,'',NULL,'2020-05-17 17:35:29'),(327,'Jose Joao Guimaraes Aparicio',12,'','','','ES','Y3698816Q','','','','','','',0.15,'',NULL,'2020-05-17 17:38:28'),(328,'Firas Elnayef',12,'','','','ES','47157754A','','','','','','',0.15,'',NULL,'2020-05-17 17:38:17'),(329,'Jaume Pubill Font',10,'','','','ES','39143996C','','','','','','',0.19,'',NULL,'2020-05-17 17:38:26'),(330,'Terin Enginyers',30,'','','','ES','B61670469','','','','','','',0.00,'',NULL,'2020-05-17 17:37:22'),(331,'Ilumia',35,'','','','ES','B55162200','','','','','','',0.00,'',NULL,'2020-05-17 17:31:18'),(332,'Comunidad Minera Olesana',20,'','','','ES','B66638008','','','','','','',0.00,'',NULL,'2020-05-17 17:29:29'),(333,'Bufete Alfonso Lopez Asociados',1,'','','','ES','B63054019','','','','','','',0.00,'',NULL,'2020-05-17 17:28:56'),(334,'Ignitor',30,'','','','ES','B64404809','','','','','','',0.00,'',NULL,'2020-05-17 17:30:58'),(335,'Olbia Empresa Instaladora S.L.',35,'','','','ES','B66307729','','','','','','',0.00,'',NULL,'2020-05-17 17:31:52'),(336,'Bricomart',35,'','','','ES','B84406289','','','','','','',0.00,'',NULL,'2020-05-17 17:27:28'),(337,'Alvaro Romeu Serrallonga',30,'','','','ES','47643515G','','','','','','',0.00,'',NULL,'2020-05-17 16:09:07'),(339,'ZARA',35,'','','','ES','A15022510','','','','','','',0.00,'',NULL,'2020-05-17 17:36:54'),(340,'Cristalleries Monty',35,'','','','ES','B08559148','','','','','','',0.00,'',NULL,'2020-05-17 17:29:37'),(341,'Alfred Pons',30,'','','','ES','J65519985','','','','','','',0.00,'',NULL,'2020-05-17 16:08:37'),(342,'Media Markt',35,'','','','ES','A64421662','','','','','','',0.00,'',NULL,'2020-05-17 17:31:44'),(343,'Viesmat Suministradora S.L.',30,'','','','ES','B66302910','','','','','','',0.00,'',NULL,'2020-05-17 17:37:09'),(345,'AD MEDICAL SCCL',30,'','','','ES','F61853800','','','','','','',0.00,'',NULL,'2020-05-17 16:08:32'),(346,'Plataforma de la construccion',35,'','','','ES','B82706136','','','','','','',0.00,'',NULL,'2020-05-17 17:32:08'),(347,'Muy Mucho',35,'','','','ES','B65641284','','','','','','',0.00,'',NULL,'2020-05-17 17:31:47'),(348,'Grupo Tabitesa',30,'','','','ES','B54133954','','','','','','',0.00,'',NULL,'2020-05-17 17:30:49'),(349,'Pilma Diseny SAU',30,'','','','ES','A59396861','','','','','','',0.00,'',NULL,'2020-05-17 17:32:06'),(350,'Leroy Merlin',35,'','','','ES','B84818442','','','','','','',0.00,'',NULL,'2020-05-17 17:31:34'),(351,'Copytop',35,'','','','ES','B63685366','','','','','','',0.00,'',NULL,'2020-05-17 17:29:34'),(352,'LIFRA S.L.',30,'','','','ES','B59964049','','','','','','',0.00,'',NULL,'2020-05-17 17:31:38'),(353,'Jesus Valderrama',30,'','','','ES','44995665Y','','','','','','',0.00,'',NULL,'2020-05-17 17:31:27'),(354,'CALMA HOUSE',35,'','','','ES','B66283607','','','','','','',0.00,'',NULL,'2020-05-17 17:29:06'),(355,'Abacus',35,'08','Terrassa','08','ES','F08226714','1',NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,'2020-05-17 16:08:28'),(356,'BNP PARIBAS LEASING SOLUTION',22,'','','','ES','W0013547E','','','','','','',0.00,'',NULL,'2020-05-17 16:10:00'),(357,'Infomed Servicios Informaticos SL',30,'','','','ES','B61349932','','','','','','',0.00,'',NULL,'2020-05-17 17:31:22'),(358,'Social Web',30,'','','','ES','B66235003','','','','','','',0.00,'',NULL,'2020-05-17 17:36:21'),(359,'Retols Terrassa',35,'','','','ES','B61288262','','','','','','',0.00,'',NULL,'2020-05-17 17:32:18'),(360,'Carlos Catala Maturana',30,'','','','ES','38100080M','','','','','','',0.00,'',NULL,'2020-05-17 17:29:16'),(361,'Ignasi Jaumejoan Mallol',30,'','','','ES','46621152Z','','','','','','',0.00,'',NULL,'2020-05-17 17:30:52'),(362,'WESTWING Home and Living',35,'','','','ES','B65732984','','','','','','',0.00,'',NULL,'2020-05-17 17:37:01'),(363,'Antonio Angel Longo Martinez Notario',30,'','','','ES','35020414Q','','','','','','',0.00,'',NULL,'2020-05-17 16:09:15'),(364,'Registro Mercantil de Barcelona',1,'','','','ES','E58902883','','','','','','',0.00,'',NULL,'2020-05-17 17:32:13'),(365,'Fabregat Perulles Sales',30,'','','','ES','46337714M','','','','','','',0.00,'',NULL,'2020-05-17 17:30:42'),(366,'Sunstar Iberia SLU',40,NULL,NULL,NULL,'ES','B65542565',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,'2020-05-17 17:36:41'),(367,'DVD - Compania Dental de Venta Directa SA',30,'','','','ES','A58227422','','','','','','',0.00,'',NULL,'2020-05-17 17:29:41'),(368,'Els Bruchs Olesa',40,'','','','ES','B60364395','','','','','','',0.00,'',NULL,'2020-05-17 17:29:56'),(369,'Tecnifrio',30,'','','','ES','A59358663','','','','','','',0.00,'',NULL,'2020-05-17 17:37:26'),(370,'Tot Net',35,'','','','ES','A08754335','','','','','','',0.00,'',NULL,'2020-05-17 17:37:13'),(371,'Amazon EU S.à r.l., Sucursal en España',35,'28045','Madrid','28','ES','W0184081H',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:32:01','2020-05-17 16:09:11'),(372,'Endesa Energía, S.A.U.',20,'28042',NULL,'08','ES','A81948077',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:33:20','2020-05-17 17:30:32'),(373,'Naturgy Iberia SA',20,'28033',NULL,'08','ES','A08431090',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:33:40','2020-05-17 17:31:49'),(374,'PETROVALLES - J.Sanchez Turro, S.L.',40,'08225',NULL,'08','ES','B60680170',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:34:07','2020-05-17 17:32:02'),(375,'Terrasa Cicle de l\'Aigeu, EPEL',20,'08221',NULL,'08','ES','Q0802203J ',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:34:31','2020-05-17 17:37:20'),(376,'TGSS Seguridad Social',16,NULL,NULL,'08','ES',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:35:21','2020-05-17 17:37:16'),(377,'Online travel Solutions SL',40,'08181',NULL,'08','ES','B66144098',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:35:40','2020-05-17 17:32:00'),(378,'Repuesto domestic.com',35,'06009','Badajoz','08','ES','8791841E',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:37:36','2020-05-17 17:32:16'),(379,'Ikea Iberica SAU',35,'28703',NULL,'08','ES','A28812618',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:38:17','2020-05-17 17:31:11'),(380,'Blinkay',40,'28007',NULL,'08','ES','A28760692',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:38:41','2020-05-17 16:09:20'),(381,'Digital Ocean',30,NULL,NULL,'08','US','EU528002224',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:39:20','2020-05-17 17:29:39'),(382,'Web Coder Pro LTD',30,NULL,NULL,'08','US','348877741',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:39:45','2020-05-17 17:37:04'),(383,'Comercial d\'Electricitat Industrial SA',35,'08222',NULL,'08','ES','A08671711',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:40:35','2020-05-17 17:29:25'),(384,'El Gran Petit',45,'08',NULL,'08','ES','38081245F',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:40:56','2020-05-17 17:29:47'),(385,'Varios Dietas',3,NULL,NULL,'08','ES',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:41:37','2020-05-07 15:41:37'),(386,'Plaza Vella Societat de Aparkamientos',40,NULL,NULL,'08','ES','A61597183',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 15:41:48','2020-05-17 17:32:11'),(387,'Ferreteria Terrassa- Elias Ibrahim Aldaraquie',35,'08222','Terrasa','08','ES','Y4915480A',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-07 16:10:25','2020-05-17 17:30:44'),(388,'Rur Sistema SL',30,'08222','Terrassa','08','ES','B64529845',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-08 06:08:26','2020-05-17 17:36:18'),(389,'Suma Apoyo Empresarial S.L.',10,'08221','Terrassa','08','ES','B66260076',NULL,NULL,NULL,NULL,NULL,NULL,0.00,NULL,'2020-05-08 06:11:38','2020-05-08 06:13:41');
/*!40000 ALTER TABLE `provclis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincias` (
  `id` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES ('01','ALABA'),('02','ALBACETE'),('03','ALICANTE'),('04','ALMERÍA'),('05','ÁVILA'),('06','BADAJOZ'),('07','BALEARES'),('08','BARCELONA'),('09','BURGOS'),('10','CÁCERES'),('11','CÁDIZ'),('12','CASTELLÓN'),('13','C.REAL'),('14','CÓRDOBA'),('15','A CORUÑA'),('16','CUENCA'),('17','GIRONA'),('18','GRANADA'),('19','GUADALAJARA'),('20','GUIPÚZCOA'),('21','HUELVA'),('22','HUESCA'),('23','JAÉN'),('24','LEÓN'),('25','LLEIDA'),('26','LA RIOJA'),('27','LUGO'),('28','MADRID'),('29','MÁLAGA'),('30','MURCIA'),('31','NAVARRA'),('32','ORENSE'),('33','ASTURIAS'),('34','PALENCIA'),('35','CANARIAS'),('36','PONTEVEDRA'),('37','SALAMANCA'),('38','TENERIFE'),('39','SANTANDER'),('40','SEGOVIA'),('41','SEVILLA'),('42','SORIA'),('43','TARRAGONA'),('44','TERUEL'),('45','TOLEDO'),('46','VALENCIA'),('47','VALLADOLID'),('48','VIZCAYA'),('49','ZAMORA'),('50','ZARAGOZA'),('51','CEUTA'),('52','MELILLA'),('57','ANDORRA');
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pus`
--

DROP TABLE IF EXISTS `pus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` bigint(20) unsigned NOT NULL,
  `destino` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `us` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `us2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pus_empresa_id_foreign` (`empresa_id`),
  CONSTRAINT `pus_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pus`
--

LOCK TABLES `pus` WRITE;
/*!40000 ALTER TABLE `pus` DISABLE KEYS */;
INSERT INTO `pus` VALUES (1,65,'CA','51445465035',NULL,'fre123',NULL,NULL,NULL),(2,74,'CA','51445465035',NULL,'fre123',NULL,NULL,NULL),(3,133,'CA','51445465035',NULL,'fre123',NULL,NULL,NULL),(4,65,'BS','B65167868',NULL,'AB1234',NULL,NULL,NULL),(5,74,'BS','B65893729',NULL,'AB1234',NULL,NULL,NULL),(6,133,'BS','B66703299',NULL,'AB1234',NULL,NULL,NULL),(7,110,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(8,111,'BS','B66132267',NULL,'CB0000',NULL,NULL,NULL),(9,125,'BS','B66542291',NULL,'GA6654',NULL,NULL,NULL),(10,112,'BP','Bonavistadev',NULL,'031289',NULL,NULL,NULL),(11,123,'BB CE 20342751','6645B506',NULL,'B66455064',NULL,NULL,NULL),(12,150,'CA','45465035',NULL,'452888',NULL,NULL,NULL),(13,150,'BS','45465035S',NULL,'4528',NULL,NULL,NULL),(14,128,'BS','B66617465',NULL,'KR1234',NULL,NULL,NULL),(15,159,'BS','B66960493',NULL,'KR1234',NULL,NULL,NULL),(16,128,'BS secundaria','203682778',NULL,'3377',NULL,NULL,NULL),(17,151,'https://www.endesaclientes.com/hogares.html','alex.arregui@sumaempresa.com',NULL,'B@Endesa27',NULL,NULL,'2020-04-13 15:35:07'),(18,48,'CA','73308882370',NULL,'769507',NULL,NULL,NULL),(19,48,'Endesa','Geert@deberg.nl',NULL,'a123456789',NULL,NULL,NULL),(20,48,'Aiguesbarcelona.cat','X8882370T',NULL,'bpsupsihs',NULL,NULL,NULL),(21,48,'https://www.naturgy.es/','info@sputch.es',NULL,'Berg#FA1011#',NULL,NULL,'2020-04-05 15:34:06'),(22,42,'MA','6373759',NULL,'3112',NULL,NULL,NULL),(23,42,'CA_old','4560321619',NULL,'731700',NULL,NULL,NULL),(24,161,'BS','45465035S',NULL,'4528',NULL,NULL,NULL),(25,147,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(26,147,'https://blackslot.com/clientes/facturas','marta.ruiz@sumaempresa.com',NULL,'Sum@Empres@',NULL,NULL,NULL),(27,135,'Straumann','1_725226',NULL,'AliciaBasel7',NULL,NULL,NULL),(28,179,'web','alex.arregui@hotmail.es',NULL,'B278',NULL,NULL,NULL),(29,179,'pleskdesk','alex.arregui@hotmail.es',NULL,'B@2798',NULL,NULL,NULL),(30,123,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(31,112,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(32,109,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(33,111,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(34,125,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(35,151,'CA','45465035',NULL,'Gipoh888',NULL,NULL,NULL),(36,181,'OB: ES96 0073 0100 5101 1955 7392','30635861E',NULL,'8671',NULL,NULL,NULL),(37,181,'Gas','marta.ruiz@rursistema.com',NULL,'B27',NULL,NULL,NULL),(38,177,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(39,126,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(40,181,'https://www.pentasoft.es/efactura','efactura.80165613.30635861E',NULL,'30635861E',NULL,NULL,NULL),(41,150,'https://www.pentasoft.es/efactura','efactura.80165613.B64529845',NULL,'B64529845',NULL,NULL,NULL),(42,162,'CA','44845465035',NULL,'424758',NULL,NULL,NULL),(43,95,'BS Tsec','180311338',NULL,'2789',NULL,NULL,NULL),(44,42,'CA','38127139',NULL,'311200',NULL,NULL,NULL),(45,109,'CMD','marrui',NULL,'Gipoh888',NULL,NULL,NULL),(46,181,'BS Tsecund','180311338',NULL,'2789',NULL,NULL,NULL),(47,135,'Cetelem Comercios','2401735',NULL,'451735',NULL,NULL,NULL),(48,129,'CA','19645465035',NULL,'BB1964',NULL,NULL,NULL),(49,159,'Aigues BCN. Empresas: cif keyrock: B66960493','dni alex',NULL,'Bsin_num',NULL,NULL,NULL),(50,182,'Ca','84445465035',NULL,'Gipoh8',NULL,NULL,NULL),(51,49,'BST','X0318050Y',NULL,'SUNSET',NULL,NULL,'2020-04-04 17:19:45'),(52,193,'CA','62845465035',NULL,'beni19',NULL,NULL,NULL),(53,150,'BipDrive','alex.arregui@sumaempresa.com',NULL,'B27',NULL,NULL,NULL),(54,128,'Aigues BCN: B66617465','30635861E',NULL,'Bsninum',NULL,NULL,NULL),(55,181,'Rius: https://rius.kabiku.es/','marta.ruiz@sumaempresa.com',NULL,'Susana',NULL,NULL,NULL),(56,181,'CA:Comunidad Viejo','10039099623',NULL,'030582',NULL,NULL,NULL),(57,1200,'Bsant','X0318050Y',NULL,'SUNSET',NULL,NULL,NULL),(58,181,'Bnkter (1971)','marrui',NULL,'G888',NULL,NULL,NULL),(59,155,'Bsant','45465035',NULL,'GIPOH8',NULL,NULL,NULL),(60,135,'DVD tfno: 900 300475-937785060','num cli: 10000454',NULL,'decir que soy el contable',NULL,NULL,NULL),(61,2209,'BS','B67236786',NULL,'AG0001',NULL,NULL,NULL),(62,2211,'BS','B67016550',NULL,'WC0001',NULL,NULL,NULL),(63,2203,'BBVA Netcash. Cod empresa: 20569984','MARUIZ',NULL,'Gipoh8Ni',NULL,NULL,NULL),(64,56,'BBVA Empresa: 20490779','ana84',NULL,'anna2009',NULL,NULL,NULL),(65,2214,'WWW.ATIB.ES','X2337440L',NULL,'philipSuma2019',NULL,NULL,NULL),(66,158,'https://rius.kabiku.es/','marta.ruiz@sumaempresa.com',NULL,'Susana',NULL,NULL,NULL),(67,2213,'BS','B67513002',NULL,'NE0099',NULL,NULL,NULL),(68,2222,'Banco Sabadell','B87932133',NULL,'MR8793',NULL,NULL,NULL),(70,181,'CA:Comunidad nuevo NIF: H63803464','30635861','ES43 2100 3378 1121 0050 2231','278989','Nº Contrato para las remesas 9777 02 14763592',NULL,'2020-04-16 06:21:32'),(77,2229,'IBERDROLA: https://www.iberdrola.es/webclifr/#/login','30635861',NULL,'Suma@2020','Dado de alta con alex.arregui@sumaempresa.com. email contacto: contacto@i-de.es tfno: 900 17 11 71',NULL,'2020-05-04 12:35:59'),(80,2229,'BBVA 20224973','ACCCH',NULL,'elenina3',NULL,NULL,NULL),(81,2230,'BBVA 20598134','MARRUI20',NULL,'Gipoh888',NULL,NULL,NULL),(82,48,'www.energiaxxi.com es de IBIZA','Geert@deberg.nl',NULL,'a123456789',NULL,'2020-04-05 15:21:41','2020-04-05 15:22:11'),(83,148,'www.energiaxxi.com','Geert@deberg.nl','','a123456789',NULL,NULL,NULL),(84,2229,'https://www.movistar.es/empresas/mi-movistar/','B65952384',NULL,'KPMG2015',NULL,'2020-04-06 13:25:49','2020-04-06 13:25:49'),(85,2229,'https://smart.prosegur.com/smart-web-min/smart-login/#/','FASHIONIQ',NULL,'3feb4ecff2900f70',NULL,'2020-04-06 13:51:13','2020-04-06 13:51:13'),(86,2229,'http://clientes.fenieenergia.es/inicio','B65952384',NULL,'kpmgsl',NULL,'2020-04-06 13:51:38','2020-04-06 13:51:38'),(87,2229,'https://www.aiguesdebarcelona.cat/oficinaenxarxa/web/ofex/login','B65952384','43204120T','kpmgsl',NULL,'2020-04-06 13:53:34','2020-04-06 13:53:34'),(88,2229,'http://www.sgae.es/es-ES/SitePages/index.aspx','http://www.sgae.es/es-ES/SitePages/index.aspx','B65952384','KPMGSL',NULL,'2020-04-06 13:55:22','2020-05-04 12:47:07'),(89,151,'movistar.es','nid Marta',NULL,'G888',NULL,'2020-04-13 15:37:32','2020-04-13 15:37:32'),(90,2229,'https://us1a.app.anaplan.com/launchpad/nonpublic/tiles/ModelSelect.action','alex.arregui@sumaempresa.com',NULL,'B2',NULL,'2020-04-18 15:07:20','2020-04-18 15:07:20'),(91,181,'https://sage-escuela-despachos.lefebvre.es/','alex.arregui@sumaempresa.com',NULL,'S7twDbGU',NULL,'2020-04-20 05:26:59','2020-04-20 05:26:59');
/*!40000 ALTER TABLE `pus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2020-03-30 18:31:14','2020-03-30 18:31:14'),(2,'Guest','web','2020-03-30 18:31:14','2020-03-30 18:31:14');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sumas`
--

DROP TABLE IF EXISTS `sumas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sumas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tfno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sumas`
--

LOCK TABLES `sumas` WRITE;
/*!40000 ALTER TABLE `sumas` DISABLE KEYS */;
INSERT INTO `sumas` VALUES (1,'Marta','659501389','marta.ruiz@sumaempresa.com','2020-04-10 17:35:40','2020-04-10 17:35:40'),(2,'Susana','','susana.martinez@sumaempresa.com','2020-04-10 17:35:40','2020-04-10 17:35:40'),(3,'Alex','638122614','alex.arregui@sumaempresa.com','2020-04-10 17:35:40','2020-04-10 17:35:40'),(4,'Dolors','','dolors.celdran@sumaempresa.com','2020-04-10 17:35:40','2020-04-10 17:35:40'),(5,'Miriam','','miriam.marin@sumaempresa.com','2020-04-10 17:35:40','2020-04-10 17:35:40');
/*!40000 ALTER TABLE `sumas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_empresas`
--

DROP TABLE IF EXISTS `tipo_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_empresas` (
  `tipoempresa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tipoempresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_empresas`
--

LOCK TABLES `tipo_empresas` WRITE;
/*!40000 ALTER TABLE `tipo_empresas` DISABLE KEYS */;
INSERT INTO `tipo_empresas` VALUES ('Autónomo','2020-03-31 14:28:19','2020-03-31 14:28:19'),('Contacto',NULL,NULL),('Gran Empresa','2020-03-31 14:28:19','2020-03-31 14:28:19'),('Pyme','2020-03-31 14:28:19','2020-03-31 14:28:19');
/*!40000 ALTER TABLE `tipo_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com','2020-03-30 18:31:14','$2y$10$zOWrTxrcRFGL.anyq2eTr.lmk26hih9nJF0TyuRiVIOPdDPhMu1Oq','f53N98NqUuw5u1E2Dv6yhP6iO9GYlR2H7OVamkTsWRaZg8uBtB6mS5yGGNmU','2020-03-30 18:31:14','2020-03-30 18:31:14'),(2,'alex','mosketxu@gmail.com','2020-03-30 18:31:14','$2y$10$UZo3ZLFw11DZ1ZylTIJ6jOJiw6NUb42F5ZiBnjyyK8Zx3CTCWpISS','hETJvDs5pw','2020-03-30 18:31:14','2020-03-30 18:31:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-18 11:16:08
