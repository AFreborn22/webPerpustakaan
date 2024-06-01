-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: perpustakaan_amikom
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`NIK_Admin`),
  UNIQUE KEY `admins_nama_unique` (`Nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bukus`
--

DROP TABLE IF EXISTS `bukus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bukus` (
  `ISBN` bigint(20) unsigned NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Pengarang` varchar(255) NOT NULL,
  `Penerbit` varchar(255) NOT NULL,
  `Tahun_Terbit` int(11) NOT NULL,
  `Jumlah_Stok` int(11) NOT NULL,
  `NIK_Staff` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`ISBN`),
  KEY `bukus_nik_staff_foreign` (`NIK_Staff`),
  CONSTRAINT `bukus_nik_staff_foreign` FOREIGN KEY (`NIK_Staff`) REFERENCES `staffs` (`NIK_Staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bukus`
--

LOCK TABLES `bukus` WRITE;
/*!40000 ALTER TABLE `bukus` DISABLE KEYS */;
/*!40000 ALTER TABLE `bukus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_beritas`
--

DROP TABLE IF EXISTS `edit_beritas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_beritas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `URL_berita` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_beritas_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_beritas_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_beritas`
--

LOCK TABLES `edit_beritas` WRITE;
/*!40000 ALTER TABLE `edit_beritas` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_beritas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_carousels`
--

DROP TABLE IF EXISTS `edit_carousels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_carousels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_carousels_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_carousels_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_carousels`
--

LOCK TABLES `edit_carousels` WRITE;
/*!40000 ALTER TABLE `edit_carousels` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_carousels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_fitur_penggunaans`
--

DROP TABLE IF EXISTS `edit_fitur_penggunaans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_fitur_penggunaans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_fitur_penggunaans_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_fitur_penggunaans_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_fitur_penggunaans`
--

LOCK TABLES `edit_fitur_penggunaans` WRITE;
/*!40000 ALTER TABLE `edit_fitur_penggunaans` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_fitur_penggunaans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_panduan_eprofils`
--

DROP TABLE IF EXISTS `edit_panduan_eprofils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_panduan_eprofils` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_panduan_eprofils_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_panduan_eprofils_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_panduan_eprofils`
--

LOCK TABLES `edit_panduan_eprofils` WRITE;
/*!40000 ALTER TABLE `edit_panduan_eprofils` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_panduan_eprofils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_panduan_peminjamen`
--

DROP TABLE IF EXISTS `edit_panduan_peminjamen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_panduan_peminjamen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_panduan_peminjamen_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_panduan_peminjamen_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_panduan_peminjamen`
--

LOCK TABLES `edit_panduan_peminjamen` WRITE;
/*!40000 ALTER TABLE `edit_panduan_peminjamen` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_panduan_peminjamen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_panduan_registrasis`
--

DROP TABLE IF EXISTS `edit_panduan_registrasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_panduan_registrasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_panduan_registrasis_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_panduan_registrasis_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_panduan_registrasis`
--

LOCK TABLES `edit_panduan_registrasis` WRITE;
/*!40000 ALTER TABLE `edit_panduan_registrasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_panduan_registrasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_panduan_settings`
--

DROP TABLE IF EXISTS `edit_panduan_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_panduan_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_panduan_settings_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_panduan_settings_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_panduan_settings`
--

LOCK TABLES `edit_panduan_settings` WRITE;
/*!40000 ALTER TABLE `edit_panduan_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_panduan_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_tata_masuks`
--

DROP TABLE IF EXISTS `edit_tata_masuks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_tata_masuks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nama_Gambar` varchar(255) NOT NULL,
  `URL_Gambar` text NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `edit_tata_masuks_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `edit_tata_masuks_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_tata_masuks`
--

LOCK TABLES `edit_tata_masuks` WRITE;
/*!40000 ALTER TABLE `edit_tata_masuks` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_tata_masuks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorits`
--

DROP TABLE IF EXISTS `favorits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ISBN` bigint(20) unsigned NOT NULL,
  `NIM` bigint(20) unsigned NOT NULL,
  `NIK_dosen` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorits_isbn_foreign` (`ISBN`),
  KEY `favorits_nim_foreign` (`NIM`),
  KEY `favorits_nik_dosen_foreign` (`NIK_dosen`),
  CONSTRAINT `favorits_isbn_foreign` FOREIGN KEY (`ISBN`) REFERENCES `bukus` (`ISBN`),
  CONSTRAINT `favorits_nik_dosen_foreign` FOREIGN KEY (`NIK_dosen`) REFERENCES `pengguna_dosens` (`NIK_dosen`),
  CONSTRAINT `favorits_nim_foreign` FOREIGN KEY (`NIM`) REFERENCES `penggunas` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorits`
--

LOCK TABLES `favorits` WRITE;
/*!40000 ALTER TABLE `favorits` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnals`
--

DROP TABLE IF EXISTS `jurnals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnals` (
  `ISSN` bigint(20) unsigned NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `NIK_Staff` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`ISSN`),
  KEY `jurnals_nik_staff_foreign` (`NIK_Staff`),
  CONSTRAINT `jurnals_nik_staff_foreign` FOREIGN KEY (`NIK_Staff`) REFERENCES `staffs` (`NIK_Staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnals`
--

LOCK TABLES `jurnals` WRITE;
/*!40000 ALTER TABLE `jurnals` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurnals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `majalahs`
--

DROP TABLE IF EXISTS `majalahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `majalahs` (
  `ISSN` bigint(20) unsigned NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `NIK_Staff` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`ISSN`),
  KEY `majalahs_nik_staff_foreign` (`NIK_Staff`),
  CONSTRAINT `majalahs_nik_staff_foreign` FOREIGN KEY (`NIK_Staff`) REFERENCES `staffs` (`NIK_Staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `majalahs`
--

LOCK TABLES `majalahs` WRITE;
/*!40000 ALTER TABLE `majalahs` DISABLE KEYS */;
/*!40000 ALTER TABLE `majalahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2023_06_23_132408_create_admins_table',1),(3,'2023_06_23_132409_create_staffs_table',1),(4,'2023_06_23_132440_create_bukus_table',1),(5,'2023_06_23_132458_create_edit_beritas_table',1),(6,'2023_06_23_132525_create_edit_carousels_table',1),(7,'2023_06_23_132546_create_edit_fitur_penggunaans_table',1),(8,'2023_06_23_132639_create_edit_panduan_eprofils_table',1),(9,'2023_06_23_132718_create_edit_panduan_peminjamen_table',1),(10,'2023_06_23_132803_create_edit_panduan_registrasis_table',1),(11,'2023_06_23_132824_create_edit_panduan_settings_table',1),(12,'2023_06_23_132840_create_edit_tata_masuks_table',1),(13,'2023_06_23_132939_create_penggunas_table',1),(14,'2023_06_23_132957_create_pengguna_dosens_table',1),(15,'2023_06_23_133012_create_transaksis_table',1),(16,'2023_06_23_133020_create_riwayats_table',1),(17,'2023_06_25_064414_create_majalahs_table',1),(18,'2023_06_25_064547_create_jurnals_table',1),(19,'2023_06_25_064611_create_skripsis_table',1),(20,'2023_06_26_131129_create_favorits_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna_dosens`
--

DROP TABLE IF EXISTS `pengguna_dosens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengguna_dosens` (
  `NIK_dosen` bigint(20) unsigned NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`NIK_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna_dosens`
--

LOCK TABLES `pengguna_dosens` WRITE;
/*!40000 ALTER TABLE `pengguna_dosens` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengguna_dosens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penggunas`
--

DROP TABLE IF EXISTS `penggunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penggunas` (
  `NIM` bigint(20) unsigned NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penggunas`
--

LOCK TABLES `penggunas` WRITE;
/*!40000 ALTER TABLE `penggunas` DISABLE KEYS */;
/*!40000 ALTER TABLE `penggunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayats`
--

DROP TABLE IF EXISTS `riwayats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaksi_id` bigint(20) unsigned NOT NULL,
  `status` enum('pinjam','kembali') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riwayats_transaksi_id_foreign` (`transaksi_id`),
  CONSTRAINT `riwayats_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayats`
--

LOCK TABLES `riwayats` WRITE;
/*!40000 ALTER TABLE `riwayats` DISABLE KEYS */;
/*!40000 ALTER TABLE `riwayats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skripsis`
--

DROP TABLE IF EXISTS `skripsis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skripsis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_publikasi` varchar(255) NOT NULL,
  `NIK_Staff` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `skripsis_nik_staff_foreign` (`NIK_Staff`),
  CONSTRAINT `skripsis_nik_staff_foreign` FOREIGN KEY (`NIK_Staff`) REFERENCES `staffs` (`NIK_Staff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skripsis`
--

LOCK TABLES `skripsis` WRITE;
/*!40000 ALTER TABLE `skripsis` DISABLE KEYS */;
/*!40000 ALTER TABLE `skripsis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffs` (
  `NIK_Staff` bigint(20) unsigned NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `NIK_Admin` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`NIK_Staff`),
  KEY `staffs_nik_admin_foreign` (`NIK_Admin`),
  CONSTRAINT `staffs_nik_admin_foreign` FOREIGN KEY (`NIK_Admin`) REFERENCES `admins` (`NIK_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffs`
--

LOCK TABLES `staffs` WRITE;
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksis`
--

DROP TABLE IF EXISTS `transaksis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NIM` bigint(20) unsigned NOT NULL,
  `NIK_dosen` bigint(20) unsigned NOT NULL,
  `ISBN` bigint(20) unsigned NOT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_kembali` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksis_nim_foreign` (`NIM`),
  KEY `transaksis_nik_dosen_foreign` (`NIK_dosen`),
  KEY `transaksis_isbn_foreign` (`ISBN`),
  CONSTRAINT `transaksis_isbn_foreign` FOREIGN KEY (`ISBN`) REFERENCES `bukus` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transaksis_nik_dosen_foreign` FOREIGN KEY (`NIK_dosen`) REFERENCES `pengguna_dosens` (`NIK_dosen`) ON DELETE CASCADE,
  CONSTRAINT `transaksis_nim_foreign` FOREIGN KEY (`NIM`) REFERENCES `penggunas` (`NIM`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksis`
--

LOCK TABLES `transaksis` WRITE;
/*!40000 ALTER TABLE `transaksis` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-01 14:29:59
