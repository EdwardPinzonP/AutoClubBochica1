-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para autoclubbochica
CREATE DATABASE IF NOT EXISTS `autoclubbochica` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `autoclubbochica`;

-- Volcando estructura para tabla autoclubbochica.acudientes
CREATE TABLE IF NOT EXISTS `acudientes` (
  `Id_acudiente` int NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Contacto` varchar(20) NOT NULL,
  `TipoDocumento` varchar(20) NOT NULL,
  `NumeroDocumento` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_acudiente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.aprendices
CREATE TABLE IF NOT EXISTS `aprendices` (
  `Id_aprendiz` int NOT NULL AUTO_INCREMENT,
  `Id_acudiente` int DEFAULT NULL,
  `Id_categoria` int NOT NULL,
  `Id_curso` int NOT NULL,
  `Nombres` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Contacto` varchar(20) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `TipoDocumento` varchar(20) NOT NULL,
  `NumeroDocumento` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iduser` bigint unsigned NOT NULL,
  PRIMARY KEY (`Id_aprendiz`),
  UNIQUE KEY `iduser` (`iduser`),
  KEY `FK_ACUDIENTE_APRENDIZ` (`Id_acudiente`),
  KEY `FK_CATEGORIA_APRENDIZ` (`Id_categoria`),
  KEY `FK_CURSO_APRENDIZ` (`Id_curso`),
  CONSTRAINT `FK_ACUDIENTE_APRENDIZ` FOREIGN KEY (`Id_acudiente`) REFERENCES `acudientes` (`Id_acudiente`),
  CONSTRAINT `FK_CATEGORIA_APRENDIZ` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_CURSO_APRENDIZ` FOREIGN KEY (`Id_curso`) REFERENCES `cursos` (`Id_curso`),
  CONSTRAINT `fk_users_aprendices` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.asesores
CREATE TABLE IF NOT EXISTS `asesores` (
  `Id_asesor` int NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Contacto` varchar(20) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_asesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.asistencias
CREATE TABLE IF NOT EXISTS `asistencias` (
  `Id_asistencia` int NOT NULL AUTO_INCREMENT,
  `Id_aprendiz` int NOT NULL,
  `Id_instructor` int NOT NULL,
  `Id_clase` int NOT NULL,
  `FechaAsistencia` date DEFAULT NULL,
  `FechaInasistencia` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_asistencia`),
  KEY `FK_ASISTENCIA_APRENDIZ` (`Id_aprendiz`),
  KEY `FK_ASISTENCIA_INSTRUCTOR` (`Id_instructor`),
  KEY `FK_ASISTENCIA_CLASE` (`Id_clase`),
  CONSTRAINT `FK_ASISTENCIA_APRENDIZ` FOREIGN KEY (`Id_aprendiz`) REFERENCES `aprendices` (`Id_aprendiz`),
  CONSTRAINT `FK_ASISTENCIA_CLASE` FOREIGN KEY (`Id_clase`) REFERENCES `clases` (`Id_clase`),
  CONSTRAINT `FK_ASISTENCIA_INSTRUCTOR` FOREIGN KEY (`Id_instructor`) REFERENCES `instructores` (`Id_instructor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id_categoria` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `Costo` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.clases
CREATE TABLE IF NOT EXISTS `clases` (
  `Id_clase` int NOT NULL AUTO_INCREMENT,
  `Id_curso` int NOT NULL,
  `Id_instructor` int NOT NULL,
  `Hora` time NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_clase`),
  KEY `FK_CLASE_CURSO` (`Id_curso`),
  KEY `FK_CLASE_INSTRUCTOR` (`Id_instructor`),
  CONSTRAINT `FK_CLASE_CURSO` FOREIGN KEY (`Id_curso`) REFERENCES `cursos` (`Id_curso`),
  CONSTRAINT `FK_CLASE_INSTRUCTOR` FOREIGN KEY (`Id_instructor`) REFERENCES `instructores` (`Id_instructor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.cuotas
CREATE TABLE IF NOT EXISTS `cuotas` (
  `Id_cuotas` int NOT NULL AUTO_INCREMENT,
  `Id_pago` int NOT NULL,
  `Abono` decimal(12,5) NOT NULL,
  `Saldo` decimal(12,5) NOT NULL,
  `FechaCuota` date NOT NULL,
  `ValorCuota` decimal(12,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_cuotas`),
  KEY `FK_CUOTAS_PAGO` (`Id_pago`),
  CONSTRAINT `FK_CUOTAS_PAGO` FOREIGN KEY (`Id_pago`) REFERENCES `pagos` (`Id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `Id_curso` int NOT NULL AUTO_INCREMENT,
  `Id_categoria` int NOT NULL,
  `Duracion` varchar(100) NOT NULL,
  `NombreCurso` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_curso`),
  CONSTRAINT `FK_CURSO_CATEGORIA` FOREIGN KEY (`Id_curso`) REFERENCES `categorias` (`Id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.detallefacturas
CREATE TABLE IF NOT EXISTS `detallefacturas` (
  `Id_detalleFactura` int NOT NULL AUTO_INCREMENT,
  `Id_factura` int NOT NULL,
  `Id_categoria` int NOT NULL,
  `Id_clase` int NOT NULL,
  `Id_aprendiz` int NOT NULL,
  `Id_pago` int NOT NULL,
  `Fechahora` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_detalleFactura`),
  KEY `FK_DETALLEFACTURA_FACTURA` (`Id_factura`),
  KEY `FK_DETALLEFACTURA_CATEGORIA` (`Id_categoria`),
  KEY `FK_DETALLEFACTURA_CLASE` (`Id_clase`),
  KEY `FK_DETALLEFACTURA_APRENDIZ` (`Id_aprendiz`),
  KEY `FK_DETALLEFACTURA_PAGO` (`Id_pago`),
  CONSTRAINT `FK_DETALLEFACTURA_APRENDIZ` FOREIGN KEY (`Id_aprendiz`) REFERENCES `aprendices` (`Id_aprendiz`),
  CONSTRAINT `FK_DETALLEFACTURA_CATEGORIA` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_DETALLEFACTURA_CLASE` FOREIGN KEY (`Id_clase`) REFERENCES `clases` (`Id_clase`),
  CONSTRAINT `FK_DETALLEFACTURA_FACTURA` FOREIGN KEY (`Id_factura`) REFERENCES `facturas` (`Id_factura`),
  CONSTRAINT `FK_DETALLEFACTURA_PAGO` FOREIGN KEY (`Id_pago`) REFERENCES `pagos` (`Id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.evidencias
CREATE TABLE IF NOT EXISTS `evidencias` (
  `Id_evidencia` int NOT NULL AUTO_INCREMENT,
  `Id_instructor` int NOT NULL,
  `Id_aprendiz` int NOT NULL,
  `Id_curso` int NOT NULL,
  `FechaHora` datetime NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Adjunto` varchar(40) NOT NULL,
  `Nota` varchar(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_evidencia`),
  KEY `FK_EVIDENCIAS_INSTRUCTOR` (`Id_instructor`),
  KEY `FK_EVIDENCIAS_APRENDIZ` (`Id_aprendiz`),
  KEY `FK_EVIDENCIAS_CURSO` (`Id_curso`),
  CONSTRAINT `FK_EVIDENCIAS_APRENDIZ` FOREIGN KEY (`Id_aprendiz`) REFERENCES `aprendices` (`Id_aprendiz`),
  CONSTRAINT `FK_EVIDENCIAS_CURSO` FOREIGN KEY (`Id_curso`) REFERENCES `cursos` (`Id_curso`),
  CONSTRAINT `FK_EVIDENCIAS_INSTRUCTOR` FOREIGN KEY (`Id_instructor`) REFERENCES `instructores` (`Id_instructor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.facturas
CREATE TABLE IF NOT EXISTS `facturas` (
  `Id_factura` int NOT NULL AUTO_INCREMENT,
  `Id_aprendiz` int NOT NULL,
  `Id_asesor` int NOT NULL,
  `Id_curso` int NOT NULL,
  `Id_categoria` int NOT NULL,
  `Fecha` date NOT NULL,
  `TipoDocumento` varchar(20) NOT NULL,
  `NumeroDocumento` int NOT NULL,
  `Abono` decimal(12,5) NOT NULL,
  `Saldo` decimal(12,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_factura`),
  KEY `FK_FACTURA_APRENDIZ` (`Id_aprendiz`),
  KEY `FK_FACTURA_ASESOR` (`Id_asesor`),
  KEY `FK_FACTURA_CURSO` (`Id_curso`),
  KEY `FK_FACTURA_CATEGORIA` (`Id_categoria`),
  CONSTRAINT `FK_FACTURA_APRENDIZ` FOREIGN KEY (`Id_aprendiz`) REFERENCES `aprendices` (`Id_aprendiz`),
  CONSTRAINT `FK_FACTURA_ASESOR` FOREIGN KEY (`Id_asesor`) REFERENCES `asesores` (`Id_asesor`),
  CONSTRAINT `FK_FACTURA_CATEGORIA` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_FACTURA_CURSO` FOREIGN KEY (`Id_curso`) REFERENCES `cursos` (`Id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.inscripciones
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `Id_inscripcion` int NOT NULL AUTO_INCREMENT,
  `Id_categoria` int NOT NULL,
  `Id_curso` int NOT NULL,
  `Id_aprendiz` int NOT NULL,
  `Id_asesor` int NOT NULL,
  `FechaHoraInscripcion` timestamp NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_inscripcion`),
  KEY `FK_INSCRIPCION_CATEGORIA` (`Id_categoria`),
  KEY `FK_INSCRIPCION_CURSO` (`Id_curso`),
  KEY `FK_INSCRIPCION_APRENDIZ` (`Id_aprendiz`),
  KEY `FK_INSCRIPCION_ASESOR` (`Id_asesor`),
  CONSTRAINT `FK_INSCRIPCION_APRENDIZ` FOREIGN KEY (`Id_aprendiz`) REFERENCES `aprendices` (`Id_aprendiz`),
  CONSTRAINT `FK_INSCRIPCION_ASESOR` FOREIGN KEY (`Id_asesor`) REFERENCES `asesores` (`Id_asesor`),
  CONSTRAINT `FK_INSCRIPCION_CATEGORIA` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_INSCRIPCION_CURSO` FOREIGN KEY (`Id_curso`) REFERENCES `cursos` (`Id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.instructores
CREATE TABLE IF NOT EXISTS `instructores` (
  `Id_instructor` int NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(40) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Contacto` varchar(10) NOT NULL,
  `TipoDocumento` varchar(20) NOT NULL,
  `NumeroDocumento` int NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iduser` bigint unsigned NOT NULL,
  PRIMARY KEY (`Id_instructor`),
  UNIQUE KEY `iduser` (`iduser`),
  CONSTRAINT `fk_users_instructores` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.pagos
CREATE TABLE IF NOT EXISTS `pagos` (
  `Id_pago` int NOT NULL AUTO_INCREMENT,
  `Id_inscripcion` int NOT NULL,
  `ValorTotal` decimal(12,5) NOT NULL,
  `FechaPago` date DEFAULT NULL,
  `Abono` decimal(12,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_pago`),
  KEY `FK_PAGO_INSCRIPCION` (`Id_inscripcion`),
  CONSTRAINT `FK_PAGO_INSCRIPCION` FOREIGN KEY (`Id_inscripcion`) REFERENCES `inscripciones` (`Id_inscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.refuerzos
CREATE TABLE IF NOT EXISTS `refuerzos` (
  `Id_refuerzos` int NOT NULL AUTO_INCREMENT,
  `Id_instructor` int NOT NULL,
  `Id_aprendiz` int NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_refuerzos`),
  KEY `FK_REFUERZOS_INSTRUCTOR` (`Id_instructor`),
  KEY `FK_REFUERZOS_APRENDIZ` (`Id_aprendiz`),
  CONSTRAINT `FK_REFUERZOS_APRENDIZ` FOREIGN KEY (`Id_aprendiz`) REFERENCES `aprendices` (`Id_aprendiz`),
  CONSTRAINT `FK_REFUERZOS_INSTRUCTOR` FOREIGN KEY (`Id_instructor`) REFERENCES `instructores` (`Id_instructor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.requisitos
CREATE TABLE IF NOT EXISTS `requisitos` (
  `Id_requisitos` int NOT NULL AUTO_INCREMENT,
  `Id_inscripcion` int NOT NULL,
  `RegistroRunt` varchar(50) NOT NULL,
  `ExamenesMedicos` varchar(50) NOT NULL,
  `CopiaDocumento` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_requisitos`),
  KEY `FK_REQUISITOS_INSCRIPCION` (`Id_inscripcion`),
  CONSTRAINT `FK_REQUISITOS_INSCRIPCION` FOREIGN KEY (`Id_inscripcion`) REFERENCES `inscripciones` (`Id_inscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla autoclubbochica.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
