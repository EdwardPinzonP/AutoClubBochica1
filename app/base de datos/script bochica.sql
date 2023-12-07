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

-- Volcando estructura para tabla autoclubbochica.aprendices
CREATE TABLE IF NOT EXISTS `aprendices` (
  `Id_aprendiz` int NOT NULL AUTO_INCREMENT,
  `Id_categoria` int NOT NULL,
  `iduser` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_aprendiz`),
  KEY `FK_CATEGORIA_APRENDIZ` (`Id_categoria`),
  KEY `iduser` (`iduser`) USING BTREE,
  CONSTRAINT `FK_CATEGORIA_APRENDIZ` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_USERS_APRENDIZ` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla autoclubbochica.aprendices: ~0 rows (aproximadamente)
INSERT INTO `aprendices` (`Id_aprendiz`, `Id_categoria`, `iduser`, `created_at`, `updated_at`) VALUES
	(1, 1, 35, '2023-12-07 11:12:40', '2023-12-07 11:12:40'),
	(2, 2, 35, '2023-12-07 11:13:29', '2023-12-07 11:13:29'),
	(3, 3, 35, '2023-12-07 11:13:44', '2023-12-07 11:13:44'),
	(4, 4, 35, '2023-12-07 11:13:56', '2023-12-07 11:13:56');

-- Volcando estructura para tabla autoclubbochica.asesores
CREATE TABLE IF NOT EXISTS `asesores` (
  `Id_asesor` int NOT NULL AUTO_INCREMENT,
  `Id_categoria` int NOT NULL,
  `iduser` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_asesor`),
  KEY `Id_categoria` (`Id_categoria`),
  KEY `FK_USERS_ASESORES` (`iduser`),
  CONSTRAINT `FK_CATEGORIAS_ASESORES` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_USERS_ASESORES` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla autoclubbochica.asesores: ~0 rows (aproximadamente)
INSERT INTO `asesores` (`Id_asesor`, `Id_categoria`, `iduser`, `created_at`, `updated_at`) VALUES
	(1, 1, 34, '2023-12-07 11:07:11', '2023-12-07 11:07:11'),
	(2, 2, 34, '2023-12-07 11:07:16', '2023-12-07 11:07:16'),
	(3, 3, 34, '2023-12-07 11:07:23', '2023-12-07 11:07:23'),
	(4, 4, 34, '2023-12-07 11:07:30', '2023-12-07 11:07:30');

-- Volcando estructura para tabla autoclubbochica.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id_categoria` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla autoclubbochica.categorias: ~0 rows (aproximadamente)
INSERT INTO `categorias` (`Id_categoria`, `Nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Categoría A2', '2023-12-07 06:04:32', NULL),
	(2, 'Categoría B1', '2023-12-07 06:04:33', NULL),
	(3, 'Categoría C1', '2023-12-07 06:04:34', NULL),
	(4, 'Categoría C2', '2023-12-07 06:04:35', NULL);

-- Volcando estructura para tabla autoclubbochica.evidencias
CREATE TABLE IF NOT EXISTS `evidencias` (
  `Id_evidencia` int NOT NULL AUTO_INCREMENT,
  `iduser` bigint unsigned NOT NULL,
  `Id_categoria` int NOT NULL,
  `fechahora` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `descripcion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_evidencia`),
  KEY `Id_categoria` (`Id_categoria`),
  KEY `iduser` (`iduser`) USING BTREE,
  CONSTRAINT `FK_EVIDENCIAS_CATEGORIAS` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_USERS_EVIDENCIAS` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla autoclubbochica.evidencias: ~0 rows (aproximadamente)
INSERT INTO `evidencias` (`Id_evidencia`, `iduser`, `Id_categoria`, `fechahora`, `descripcion`, `created_at`, `updated_at`) VALUES
	(21, 36, 1, '2023-12-07 11:17:48', 'Prueba señales de transito', '2023-12-07 11:17:48', '2023-12-07 11:17:48');

-- Volcando estructura para tabla autoclubbochica.evidencias_respondidas
CREATE TABLE IF NOT EXISTS `evidencias_respondidas` (
  `Id_evidenciaR` int NOT NULL AUTO_INCREMENT,
  `Id_categoria` int NOT NULL,
  `iduser` bigint unsigned NOT NULL,
  `Id_evidencia` int NOT NULL,
  `adjunto` varchar(500) NOT NULL,
  `nota` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'SN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_evidenciaR`),
  KEY `FK_EVIDENCIAS_EVIDENCIASR` (`Id_evidencia`),
  KEY `iduser` (`iduser`) USING BTREE,
  KEY `FK_CATEGORIAS_EVIDENCIASR` (`Id_categoria`),
  CONSTRAINT `FK_CATEGORIAS_EVIDENCIASR` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_EVIDENCIAS_EVIDENCIASR` FOREIGN KEY (`Id_evidencia`) REFERENCES `evidencias` (`Id_evidencia`),
  CONSTRAINT `FK_USERS_EVIDENCIASR` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla autoclubbochica.evidencias_respondidas: ~0 rows (aproximadamente)
INSERT INTO `evidencias_respondidas` (`Id_evidenciaR`, `Id_categoria`, `iduser`, `Id_evidencia`, `adjunto`, `nota`, `created_at`, `updated_at`) VALUES
	(1, 1, 35, 21, 'archivos/k9Dpb6IK1ZDpCZOLh77OfTN93b1YLJ4UTHKtK18o.pdf', 'A', '2023-12-07 11:19:00', '2023-12-07 11:20:54');

-- Volcando estructura para tabla autoclubbochica.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla autoclubbochica.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla autoclubbochica.instructores
CREATE TABLE IF NOT EXISTS `instructores` (
  `Id_instructor` int NOT NULL AUTO_INCREMENT,
  `Id_categoria` int NOT NULL,
  `iduser` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id_instructor`),
  KEY `iduser` (`iduser`) USING BTREE,
  KEY `fk_categorias_instructores` (`Id_categoria`),
  CONSTRAINT `fk_categorias_instructores` FOREIGN KEY (`Id_categoria`) REFERENCES `categorias` (`Id_categoria`),
  CONSTRAINT `FK_USERS_INSTRUCTORES` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla autoclubbochica.instructores: ~0 rows (aproximadamente)
INSERT INTO `instructores` (`Id_instructor`, `Id_categoria`, `iduser`, `created_at`, `updated_at`) VALUES
	(1, 1, 36, '2023-12-07 11:14:09', '2023-12-07 11:14:09'),
	(2, 2, 36, '2023-12-07 11:14:13', '2023-12-07 11:14:13'),
	(3, 3, 36, '2023-12-07 11:14:18', '2023-12-07 11:14:18'),
	(4, 4, 36, '2023-12-07 11:14:24', '2023-12-07 11:14:24');

-- Volcando estructura para tabla autoclubbochica.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla autoclubbochica.migrations: ~0 rows (aproximadamente)

-- Volcando estructura para tabla autoclubbochica.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla autoclubbochica.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla autoclubbochica.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla autoclubbochica.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla autoclubbochica.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla autoclubbochica.sessions: ~0 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('ES0WQw3cgKsFaTKhMQu5oYfLU4nQU8KnFGCU0ySx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 Edg/119.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUpncUdFS0M5OFY0bHNsQklBNmdIOERISzNkelZtR0Uxb2hXQk45MSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9hdXRvY2x1YmJvY2hpY2ExLnRlc3QiO319', 1701930103);

-- Volcando estructura para tabla autoclubbochica.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipodocumento` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numerodocumento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fechanacimiento` date DEFAULT NULL,
  `contacto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `rol` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aprendiz',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla autoclubbochica.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `tipodocumento`, `numerodocumento`, `fechanacimiento`, `contacto`, `rol`, `email_verified_at`, `password`, `created_at`, `updated_at`, `remember_token`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `current_team_id`, `profile_photo_path`) VALUES
	(34, 'Administrador', 'ACB', 'administrador@gmail.com', 'Cédula de ciudadanía', '1051065824', '2004-11-25', '3124646101', 'Administrador', NULL, '$2y$10$WGTxTRBsCEF3ZCax1QiXreSMscdtaGN02jA9M4kYDIcFZYQzkDwAC', '2023-12-07 11:06:12', '2023-12-07 11:06:12', NULL, NULL, NULL, NULL, NULL, NULL),
	(35, 'Aprendiz', 'ACB', 'aprendiz@gmail.com', 'Cédula de ciudadanía', '33379457', '1985-10-13', '3125757424', 'Aprendiz', NULL, '$2y$10$oe0eByqojt8skTbYBQk.SetOArZg2YtNtEHA3gKfv.p9riau16h6W', '2023-12-07 11:09:20', '2023-12-07 11:09:20', NULL, NULL, NULL, NULL, NULL, NULL),
	(36, 'Instructor', 'ACB', 'instructor@gmail.com', 'Cédula de ciudadanía', '1050095100', '1987-07-22', '3105656232', 'Instructor', NULL, '$2y$10$1mMRqkuKTXyvxKi6Xx9RY.lqM8.PGdm76N2gOnEkyIPruSmZS2pmW', '2023-12-07 11:10:23', '2023-12-07 11:10:23', NULL, NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
