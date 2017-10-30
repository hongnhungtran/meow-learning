-- MySQL dump 10.13  Distrib 5.6.30, for Win32 (AMD64)
--
-- Host: localhost    Database: meow-learning
-- ------------------------------------------------------
-- Server version	5.6.30

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
-- Table structure for table `answer_num`
--

DROP TABLE IF EXISTS `answer_num`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer_num` (
  `answer_num_id` int(11) NOT NULL,
  `answer_num_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`answer_num_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer_num`
--

LOCK TABLES `answer_num` WRITE;
/*!40000 ALTER TABLE `answer_num` DISABLE KEYS */;
INSERT INTO `answer_num` VALUES (1,'A'),(2,'B'),(3,'C'),(4,'D');
/*!40000 ALTER TABLE `answer_num` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:18','2017-09-04 23:29:18'),(2,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(3,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(4,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(5,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(6,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(7,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(8,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(9,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(10,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(11,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(12,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(13,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(14,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(15,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(16,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(17,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(18,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(19,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19'),(20,'book_title','19.99','author_name','editor_name','2017-09-04 23:29:19','2017-09-04 23:29:19');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `common_test_answer`
--

DROP TABLE IF EXISTS `common_test_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `common_test_answer` (
  `common_test_answer_id` int(11) NOT NULL,
  `common_test_question_id` int(11) DEFAULT NULL,
  `common_test_answer_num` int(11) DEFAULT NULL,
  `common_test_answer` text COLLATE utf8mb4_unicode_ci,
  `common_test_answer_flag` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`common_test_answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_test_answer`
--

LOCK TABLES `common_test_answer` WRITE;
/*!40000 ALTER TABLE `common_test_answer` DISABLE KEYS */;
INSERT INTO `common_test_answer` VALUES (1,1,1,'AAAAAAAAA','1',NULL,NULL),(2,1,2,'BBBBBBBBBBBBBBBBBB','0','2017-10-18 00:00:00',NULL),(3,1,3,'CCC','0',NULL,NULL),(4,1,4,'DD','0',NULL,NULL),(5,2,1,'AAAA','1',NULL,NULL),(6,2,2,'bb','0',NULL,NULL),(7,2,3,'ttrybjy','0',NULL,NULL),(8,2,4,'ytnyj','0',NULL,NULL);
/*!40000 ALTER TABLE `common_test_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `common_test_question`
--

DROP TABLE IF EXISTS `common_test_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `common_test_question` (
  `common_test_question_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `common_test_question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`common_test_question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_test_question`
--

LOCK TABLES `common_test_question` WRITE;
/*!40000 ALTER TABLE `common_test_question` DISABLE KEYS */;
INSERT INTO `common_test_question` VALUES (1,1,'abfdbfd',NULL,NULL),(2,1,'dbdgvb ',NULL,NULL),(3,1,'desnbernebeedn ',NULL,NULL);
/*!40000 ALTER TABLE `common_test_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `course_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'単語コース',NULL,NULL),(2,'リスニングコース',NULL,NULL),(3,'スピーキングコース',NULL,NULL),(4,'レディングコース',NULL,NULL),(5,'ライティングコース',NULL,NULL),(6,'TOEFLコース',NULL,NULL),(7,'TOEICコース',NULL,NULL),(8,'EILTSコース',NULL,NULL),(9,'文法コース',NULL,NULL),(10,'総合テストコース',NULL,NULL);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cruds`
--

DROP TABLE IF EXISTS `cruds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cruds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cruds`
--

LOCK TABLES `cruds` WRITE;
/*!40000 ALTER TABLE `cruds` DISABLE KEYS */;
INSERT INTO `cruds` VALUES (3,'vvvvvvv','vvvvvvvv','2017-09-12 01:26:37','2017-09-12 01:26:37'),(4,'vvvvvvvv','vvvvvvv','2017-09-12 01:37:08','2017-09-12 01:37:08'),(5,'fffffffffffffffffffffffff','fffffffffffffffffffff','2017-09-12 01:43:03','2017-09-12 01:43:03');
/*!40000 ALTER TABLE `cruds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document` (
  `document_id` int(11) NOT NULL,
  `document_category_id` int(11) DEFAULT NULL,
  `document_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_content` text COLLATE utf8mb4_unicode_ci,
  `document_download_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_flag` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document`
--

LOCK TABLES `document` WRITE;
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
INSERT INTO `document` VALUES (1,1,'test','test','test',NULL,NULL,NULL);
/*!40000 ALTER TABLE `document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_category`
--

DROP TABLE IF EXISTS `document_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_category` (
  `document_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `document_category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_category_flag` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`document_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_category`
--

LOCK TABLES `document_category` WRITE;
/*!40000 ALTER TABLE `document_category` DISABLE KEYS */;
INSERT INTO `document_category` VALUES (1,'Ebooks',1,NULL,NULL),(2,'雑誌',1,NULL,NULL),(3,'CD, DVD',1,NULL,NULL),(4,'MP3, 動画',1,NULL,NULL),(5,'画像',1,NULL,NULL),(6,'クイズ・ゲーム',1,NULL,NULL),(7,'Toolkit',1,NULL,NULL);
/*!40000 ALTER TABLE `document_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_image`
--

DROP TABLE IF EXISTS `document_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_image` (
  `document_image_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `document_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`document_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_image`
--

LOCK TABLES `document_image` WRITE;
/*!40000 ALTER TABLE `document_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercise_type`
--

DROP TABLE IF EXISTS `exercise_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise_type` (
  `exercise_type_id` int(11) NOT NULL,
  `exercise_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`exercise_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise_type`
--

LOCK TABLES `exercise_type` WRITE;
/*!40000 ALTER TABLE `exercise_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `exercise_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson`
--

DROP TABLE IF EXISTS `lesson`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lesson` (
  `lesson_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `lesson_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_content` text COLLATE utf8mb4_unicode_ci,
  `lesson_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_flag` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson`
--

LOCK TABLES `lesson` WRITE;
/*!40000 ALTER TABLE `lesson` DISABLE KEYS */;
INSERT INTO `lesson` VALUES (1,1,1,1,'FOCUS ON GRAMMATICAL POINTS','スポーツの言葉と遊ぼう','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0',1,NULL,'2017-09-28 23:32:01'),(2,5,1,1,'スポーツ（2）','スポーツの言葉と遊ぼう','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0',0,NULL,NULL),(3,2,4,1,'天気（5）','天気について学びましょう','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSQUJKcXp1MTlSQTA',0,NULL,'2017-09-29 01:05:46'),(4,1,4,4,'天気（2）','天気について学びましょう','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0',1,NULL,NULL),(5,3,NULL,1,'ppppppppppp','pppppppppppppp','ppppppppppppppppp',1,'2017-09-28 23:14:08','2017-09-28 23:14:08'),(6,4,7,1,'nnnnnnnnn','nnnnnnnnnn','nnnnnnnnnnn',1,'2017-09-28 23:42:10','2017-09-28 23:42:10'),(7,1,11,1,'フルーツ（１）','フルーツ（１）','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0\"',1,'2017-10-01 18:25:45','2017-10-01 18:25:45'),(8,10,NULL,1,'総合知識チェック（１）','総合テスト',NULL,1,NULL,NULL),(9,10,NULL,2,'総合知識チェック（２）','総合テスト',NULL,1,NULL,NULL),(10,1,4,1,'trbytb','tybjtb','tukuykuyb',0,'2017-10-19 03:15:26','2017-10-19 03:15:26'),(11,1,1,1,'dnh','rmn','rnrmn',NULL,'2017-10-19 06:33:18','2017-10-19 06:33:18');
/*!40000 ALTER TABLE `lesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `level_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_content` text COLLATE utf8mb4_unicode_ci,
  `level_image_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'初心者','初心者に向ける','https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg',NULL,NULL),(2,'初級','初級に向ける','https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg',NULL,NULL),(3,'中級','中級にむける','https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg',NULL,NULL),(4,'上級','上級に向ける','https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg',NULL,NULL);
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2017_08_31_094448_create_vocabulary_table',1),(2,'2017_09_04_051721_create_articles_table',1),(3,'2017_09_04_095911_create_items_table',2),(4,'2016_11_24_160803_create_books_table',3),(7,'2016_06_01_000001_create_oauth_auth_codes_table',4),(8,'2016_06_01_000002_create_oauth_access_tokens_table',4),(9,'2016_06_01_000003_create_oauth_refresh_tokens_table',4),(10,'2016_06_01_000004_create_oauth_clients_table',4),(11,'2016_06_01_000005_create_oauth_personal_access_clients_table',4),(12,'2017_09_11_012304_create_vocabulary_topic_table',5),(13,'2017_09_11_073440_create_vocabulary_lesson_table',6),(14,'2017_09_11_090030_create_tickets_table',7),(15,'2017_05_02_022957_create_cruds_table',8),(16,'2017_09_13_065551_create_document_category_table',9),(17,'2017_09_13_071753_create_level_table',10),(18,'2017_09_14_053143_create_topic_table',11),(19,'2017_09_14_053921_create_lesson_table',11),(20,'2017_09_14_055110_create_course_table',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` text COLLATE utf8mb4_unicode_ci,
  `level_id` text COLLATE utf8mb4_unicode_ci,
  `topic_title` text COLLATE utf8mb4_unicode_ci,
  `topic_content` text COLLATE utf8mb4_unicode_ci,
  `topic_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_flag` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (1,'1','1','スポーツythuh','スポーツについて','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,'2017-10-25 07:24:00'),(2,'1','4','教育','教育について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',0,NULL,'2017-09-28 22:08:33'),(3,'1','1','スーパーマーケットdddddddddddddfffffffffffffffffffffffffff','スーパーマーケットについてdddddddddddddddllllllllllllllllll','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,'2017-09-29 00:01:39'),(4,'1','4','天気','天気について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(5,'1','1','動物','動物について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(6,'1','3','体','私たちの体について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(7,'1','2','家族と友達','家族と友達について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(8,'1','1','数字','数字の数え方について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(9,'1','1','家','家について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(10,'1','4','健康','健康について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(11,'1','2','食べ物','食べ物について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(12,'1','2','飲み物','飲み物について','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA',1,NULL,NULL),(13,'1','1','ẻyberbu','b5ub75b','eb5ub',0,'2017-10-19 02:37:34','2017-10-19 02:37:34'),(14,'1','1','test','test','test',NULL,'2017-10-26 03:08:16','2017-10-26 03:08:16'),(15,'1','3','testrhth','testhrtnh','testrjnryry',NULL,'2017-10-26 03:09:48','2017-10-26 03:09:48'),(16,'1','1','thrt','xxxxxxxx',NULL,NULL,'2017-10-26 05:55:11','2017-10-26 05:55:11'),(17,'1','1','h','testsfbgf',NULL,NULL,'2017-10-26 06:11:01','2017-10-26 06:11:01'),(18,'1','1','test 20171006','test 20171006','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSMjV6a05PMmFKVFU',NULL,'2017-10-26 08:27:28','2017-10-26 08:27:28'),(19,'1','1','yyyyyyyyyyyyyyyyyyyyy','jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSNWg4Z1NsZ1Z1Slk',NULL,'2017-10-26 08:50:53','2017-10-26 08:50:53'),(20,'1','1','gẻgthr','nhmhmhtm','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSajhEUFdNbE55bXM',NULL,'2017-10-26 08:56:25','2017-10-26 08:56:25'),(21,'1','1','21','21','21',NULL,'2017-10-26 09:06:51','2017-10-26 09:06:51'),(22,'1','1','upload both link and select','upload both link and select','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSZUE5NEpHbmJRX3c',NULL,'2017-10-26 09:07:36','2017-10-26 09:07:36'),(23,'1','1','dhbhtnb','tntngtn','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bST3ozbVhHVzNiQjA',NULL,'2017-10-26 09:11:43','2017-10-26 09:11:43'),(24,'1','1','5ehtrhyr','ntntymnty','tymntmtmtym',NULL,'2017-10-26 09:12:18','2017-10-26 09:12:18');
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vocabulary`
--

DROP TABLE IF EXISTS `vocabulary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vocabulary` (
  `vocabulary_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) DEFAULT NULL,
  `vocabulary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocabulary_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocabulary_audio_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocabulary_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`vocabulary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vocabulary`
--

LOCK TABLES `vocabulary` WRITE;
/*!40000 ALTER TABLE `vocabulary` DISABLE KEYS */;
INSERT INTO `vocabulary` VALUES (16,1,'wteg','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSVThtSGttVkZuQms','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M',1,'2017-10-02 17:38:09','2017-10-02 17:38:09'),(17,1,'sdhg','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSVThtSGttVkZuQms','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M',1,'2017-10-03 02:40:51','2017-10-03 02:40:51'),(18,1,'sfbgbf','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSbGNrSWNCZGlKR0U','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M',1,'2017-10-03 02:40:52','2017-10-03 02:40:52'),(19,1,'eagtrs','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSVThtSGttVkZuQms','https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M',1,'2017-10-03 02:40:52','2017-10-03 02:40:52'),(30,1,'ehbgb',NULL,NULL,1,'2017-10-16 09:41:12','2017-10-16 09:41:12'),(40,1,'vvvvvvvvvvvvvv',NULL,NULL,1,'2017-10-16 09:45:15','2017-10-16 09:45:15'),(42,1,'ooo',NULL,NULL,1,'2017-10-16 09:45:56','2017-10-16 09:45:56'),(43,1,'rrrr',NULL,NULL,1,'2017-10-16 09:45:57','2017-10-16 09:45:57'),(52,1,'ooo',NULL,NULL,1,'2017-10-16 09:46:08','2017-10-16 09:46:08'),(53,1,'rrrr',NULL,NULL,1,'2017-10-16 09:46:10','2017-10-16 09:46:10'),(62,1,'egtr',NULL,NULL,1,'2017-10-16 09:47:17','2017-10-16 09:47:17'),(63,1,'sgbe',NULL,NULL,1,'2017-10-16 09:47:18','2017-10-16 09:47:18'),(64,1,'aerbet',NULL,NULL,1,'2017-10-18 06:22:28','2017-10-18 06:22:28'),(65,1,'nednbdtrgn',NULL,NULL,1,'2017-10-18 06:22:29','2017-10-18 06:22:29'),(66,1,NULL,NULL,NULL,1,'2017-10-18 06:22:29','2017-10-18 06:22:29'),(67,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(68,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(69,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(70,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(71,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(72,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(73,1,NULL,NULL,NULL,1,'2017-10-18 06:22:30','2017-10-18 06:22:30'),(74,1,'drtjyd',NULL,NULL,1,'2017-10-18 06:22:42','2017-10-18 06:22:42'),(75,1,'dtrjty',NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(76,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(77,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(78,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(79,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(80,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(81,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(82,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(83,1,NULL,NULL,NULL,1,'2017-10-18 06:22:43','2017-10-18 06:22:43'),(84,1,NULL,NULL,NULL,1,'2017-10-18 06:27:12','2017-10-18 06:27:12'),(85,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(86,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(87,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(88,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(89,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(90,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(91,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(92,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13'),(93,1,NULL,NULL,NULL,1,'2017-10-18 06:27:13','2017-10-18 06:27:13');
/*!40000 ALTER TABLE `vocabulary` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-30 15:59:47
