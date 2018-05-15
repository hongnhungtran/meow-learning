-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2018 at 11:09 AM
-- Server version: 5.6.30
-- PHP Version: 7.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meow-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_num`
--

CREATE TABLE `answer_num` (
  `answer_num_id` int(11) NOT NULL,
  `answer_num_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_num`
--

INSERT INTO `answer_num` (`answer_num_id`, `answer_num_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `author`, `editor`, `created_at`, `updated_at`) VALUES
(1, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:18', '2017-09-04 23:29:18'),
(2, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(3, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(4, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(5, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(6, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(7, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(8, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(9, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(10, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(11, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(12, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(13, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(14, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(15, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(16, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(17, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(18, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(19, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19'),
(20, 'book_title', '19.99', 'author_name', 'editor_name', '2017-09-04 23:29:19', '2017-09-04 23:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `common_test_question`
--

CREATE TABLE `common_test_question` (
  `common_test_question_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `common_test_question` text COLLATE utf8_unicode_ci,
  `question_type` int(11) DEFAULT NULL,
  `option_1` text COLLATE utf8_unicode_ci,
  `option_1_flag` tinyint(4) DEFAULT NULL,
  `option_2` text COLLATE utf8_unicode_ci,
  `option_2_flag` tinyint(4) DEFAULT NULL,
  `option_3` text COLLATE utf8_unicode_ci,
  `option_3_flag` tinyint(4) DEFAULT NULL,
  `option_4` text COLLATE utf8_unicode_ci,
  `option_4_flag` tinyint(4) DEFAULT NULL,
  `common_test_question_flag` tinyint(4) DEFAULT NULL,
  `answer` int(11) NOT NULL,
  `explain` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `common_test_question`
--

INSERT INTO `common_test_question` (`common_test_question_id`, `lesson_id`, `common_test_question`, `question_type`, `option_1`, `option_1_flag`, `option_2`, `option_2_flag`, `option_3`, `option_3_flag`, `option_4`, `option_4_flag`, `common_test_question_flag`, `answer`, `explain`, `created_at`, `updated_at`) VALUES
(1, 8, 'Salary increases will not be higher than the cost of ______', 1, 'life', 1, 'live', 0, 'living', 0, 'lived', 0, NULL, 1, '説明あああああああああああああああああああああああああああああああああああああああ', NULL, '2017-11-09 14:47:56'),
(2, 8, 'Feel free to ______ the engineer for more assistance. ', 1, 'call on', 0, 'called on', 0, 'call forward', 1, 'call at', 0, NULL, 3, '説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明', NULL, NULL),
(3, 8, 'Mr. Goa ______ the proposal before he looked at the guidelines.', 1, 'writes', 0, 'had written', 1, 'has written', 0, 'will write', 0, NULL, 2, NULL, NULL, NULL),
(4, 8, 'If the project is a success, the office ______ more help.', 1, ' would hire', 0, 'hired', 0, 'can hire', 1, 'could have hired', 0, NULL, 3, NULL, '2017-11-09 11:38:34', '2017-11-09 14:22:02'),
(5, 8, 'The office manager wants the computers ______ by tomorrow.', 1, 'will be installed', 1, 'installing', 0, 'install', 0, 'installed', 0, NULL, 1, '説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明', '2017-11-09 11:39:08', '2017-11-09 14:32:20'),
(6, 8, '\r\nSuggestions were requested; ______ , none were offered.', 1, 'in spite of', 0, 'therefore', 1, 'however', 0, 'for this purpose', 0, NULL, 1, NULL, '2017-11-09 14:46:49', '2017-11-09 14:47:06'),
(7, 8, '______ the workers put in a lot of effort, profits were not high.', 1, 'Whatever', NULL, 'Why', NULL, 'Even though', NULL, 'However', NULL, NULL, 1, NULL, NULL, NULL),
(9, 8, 'What is the problem?', 1, 'Someone keeps turning off the thermostat.', NULL, 'There is no thermostat on the second floor.', NULL, 'The other tenants want a', NULL, 'The second floor has enough heat.', NULL, NULL, 3, NULL, NULL, NULL),
(10, 8, 'When should the thermostat be thermostat turned off?', 1, 'In the evenings', NULL, 'When it gets cold out', NULL, 'When it gets cold out', NULL, 'When it gets hot', NULL, NULL, 2, NULL, NULL, NULL),
(12, 8, 'What is this advertisement promoting?', 1, 'White shoes', NULL, 'Shoe cleaner', NULL, 'Shoe repair', NULL, 'Company supplies', NULL, NULL, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` text COLLATE utf8mb4_unicode_ci,
  `course_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_description`, `course_image`, `href`, `created_at`, `updated_at`) VALUES
(1, '単語コース', 'esghetsrhgrthbtre', NULL, NULL, NULL, NULL),
(2, 'リスニングコース', 'whthteyhnynt', NULL, NULL, NULL, NULL),
(3, '会話コース', 'whtetrhnw4etny', NULL, NULL, NULL, NULL),
(4, 'レディングコース', 'en5ne5yneyr ', NULL, NULL, NULL, NULL),
(5, 'ライティングコース', 'emn thyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', NULL, NULL, NULL, NULL),
(6, 'TOEFLコース', 'fffffffffffffffffffffff', NULL, NULL, NULL, NULL),
(7, 'TOEICコース', 'errrrrrrrrrrrrrrr', NULL, NULL, NULL, NULL),
(8, 'EILTSコース', 'rwehrth', NULL, NULL, NULL, NULL),
(9, '文法コース', 'rwehrth', NULL, NULL, NULL, NULL),
(10, '総合テストコース', 'gfntenrye', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `title`, `post`, `created_at`, `updated_at`) VALUES
(3, 'vvvvvvv', 'vvvvvvvv', '2017-09-12 01:26:37', '2017-09-12 01:26:37'),
(4, 'vvvvvvvv', 'vvvvvvv', '2017-09-12 01:37:08', '2017-09-12 01:37:08'),
(5, 'fffffffffffffffffffffffff', 'fffffffffffffffffffff', '2017-09-12 01:43:03', '2017-09-12 01:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL,
  `document_category_id` int(11) DEFAULT NULL,
  `document_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_content` text COLLATE utf8mb4_unicode_ci,
  `document_description` text COLLATE utf8mb4_unicode_ci,
  `document_download_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_flag` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `document_category_id`, `document_title`, `document_content`, `document_description`, `document_download_link`, `document_image_link`, `document_flag`, `created_at`, `updated_at`) VALUES
(1, 7, 'Oxford Dictionary', 'とても人気Oxford辞書のファイルです。パソコンにセッティングすることが必要です。', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://www.mediafire.com/folder/935cbkbh90jas/Tai_lieu_tieng_Anh_UCAN#zzeha5ibj50z9', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(2, 1, 'English Grammar for student', '学生に向ける英語文法の本です。', 'lalallalalalaa description。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://www.mediafire.com/folder/935cbkbh90jas/Tai_lieu_tieng_Anh_UCAN#z60k70624dbcc', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(3, 2, 'Listening CD for travel', '旅行の時このような文を使います。', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(4, 3, 'Test', 'Test', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(5, 5, 'Dummy text 3', 'Dummy text', 'hahahahahahahaha description。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(6, 4, 'Dummy text 1', 'Dummy text', 'hehehehehehehehehehehe description。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(7, 6, 'Dummy text 2', 'Dummy text', 'hihihihihihihihihihihhi description。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(8, 2, 'Dummy text', 'Dummy text', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(9, 5, 'Dummy text 4', 'Dummy text', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(10, 3, 'Dummy text', 'Dummy text', '入力もう疲れた！！！！description。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(11, 7, 'Dummy text', 'Dummy text', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(12, 4, 'Dummy text', 'Dummy text', '本当に長いですねdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(13, 1, 'Dummy text', 'Dummy text', 'Ôi mệt quá, nhập liệu quá mệt điiiiidescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(14, 5, 'Dummy text', 'Dummy text', 'チョー長いdescription。Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text Dummy text ', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_category`
--

CREATE TABLE `document_category` (
  `document_category_id` int(10) UNSIGNED NOT NULL,
  `document_category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_category_flag` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_category`
--

INSERT INTO `document_category` (`document_category_id`, `document_category_title`, `document_category_flag`, `created_at`, `updated_at`) VALUES
(1, 'Ebooks', 1, NULL, NULL),
(2, '雑誌', 1, NULL, NULL),
(3, 'CD, DVD', 1, NULL, NULL),
(4, 'MP3, 動画', 1, NULL, NULL),
(5, '画像', 1, NULL, NULL),
(6, 'クイズ・ゲーム', 1, NULL, NULL),
(7, 'Toolkit', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_image`
--

CREATE TABLE `document_image` (
  `image_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_image`
--

INSERT INTO `document_image` (`image_id`, `document_id`, `image_name`, `image_description`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'test image 1', 'Dummy text', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSVUNCcWdLcWJycDQ', NULL, NULL),
(2, 1, 'test image 2', 'Dummy text', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', NULL, NULL),
(3, 1, 'image 3', 'Dummy text', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSVUNCcWdLcWJycDQ', NULL, NULL),
(4, 1, 'image 4', 'Dummy text', 'https://drive.google.com/open?id=0B4V3Z8EZP6bSQVlvRnNISXQzVUk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exercise_type`
--

CREATE TABLE `exercise_type` (
  `exercise_type_id` int(11) NOT NULL,
  `exercise_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercise_type`
--

INSERT INTO `exercise_type` (`exercise_type_id`, `exercise_type`, `lesson_id`, `created_at`, `updated_at`) VALUES
(1, 'flashcard', 1, '2018-05-14 12:07:51', '2018-05-14 12:07:58'),
(2, 'multiple choice', 1, '2018-05-14 12:08:26', '2018-05-14 12:08:29'),
(3, 'drop single word', 1, '2018-05-14 12:10:02', '2018-05-14 12:10:06'),
(4, 'insert word to true position', 1, '2018-05-14 12:11:11', '2018-05-14 12:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `lesson_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesson_content` text COLLATE utf8_unicode_ci,
  `lesson_image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lesson_flag` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `course_id`, `topic_id`, `level_id`, `lesson_title`, `lesson_content`, `lesson_image_link`, `lesson_flag`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Vocabulary: In the market', 'Vocabulary: In the market', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, '2017-09-28 23:32:01'),
(2, 5, 1, 1, 'スポーツ（2）', 'スポーツの言葉と遊ぼう', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 0, NULL, NULL),
(3, 2, NULL, 1, 'Listening: College life', 'Listening: College life', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSQUJKcXp1MTlSQTA', 0, NULL, '2017-09-29 01:05:46'),
(4, 1, 4, 4, 'Vocabulary: On a farm', 'Vocabulary: On a farm', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, NULL, NULL),
(5, 3, NULL, 1, 'ppppppppppp', 'pppppppppppppp', 'ppppppppppppppppp', 1, '2017-09-28 23:14:08', '2017-09-28 23:14:08'),
(6, 4, 7, 1, 'nnnnnnnnn', 'nnnnnnnnnn', 'nnnnnnnnnnn', 1, '2017-09-28 23:42:10', '2017-09-28 23:42:10'),
(7, 1, 11, 1, 'Vocabulary: Weather', 'Vocabulary: Weather', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWEFRQlNqdDFDMU0', 1, '2017-10-01 18:25:45', '2017-10-01 18:25:45'),
(8, 10, NULL, 1, '総合知識チェック（１）', '総合テスト', 'rehbtrntgn', 1, NULL, '2017-11-09 03:13:18'),
(9, 10, NULL, 2, '総合知識チェック（２）', '総合テスト', NULL, 1, NULL, NULL),
(10, 1, 4, 1, 'Vocabulary: Adjectives to describe human characters', 'Vocabulary: Adjectives to describe human characters', 'tukuykuyb', 0, '2017-10-19 03:15:26', '2017-10-19 03:15:26'),
(11, 1, 1, 1, 'Vocabulary: Family', 'Vocabulary: Family', 'rnrmn', 1, '2017-10-19 06:33:18', '2017-10-19 06:33:18'),
(12, 10, NULL, 1, '33333333333333', '333333333333333333', '3333333333333', 1, '2017-10-31 08:07:02', '2017-10-31 08:07:02'),
(13, 10, NULL, 2, '33333333333333yhnytn', '333333333333333333tynytn', '3333333333333tnmt', 1, '2017-10-31 08:07:50', '2017-10-31 08:07:50'),
(14, 10, NULL, 3, 'test', 'test', 'test', 1, '2017-11-02 03:41:48', '2017-11-02 03:41:48'),
(15, 6, NULL, 1, 'etgrf', 'hehrt', 'ehtrhr', 1, '2017-12-12 05:53:39', '2017-12-12 05:53:39'),
(16, 6, NULL, 1, 'sacasd', 'vcasdvda', 'avdad', 1, '2017-12-12 05:53:50', '2017-12-12 05:53:50'),
(17, 6, NULL, 1, 'rebr', 'fbrefnbf', 'sdgrfb', 1, '2017-12-12 05:54:49', '2017-12-12 05:54:49'),
(18, 6, NULL, 1, 'regerhbet', 'ebetgfbn', 'êntnnbet', 1, '2017-12-12 05:59:26', '2017-12-12 05:59:26'),
(19, 6, NULL, 1, 'rhgbfdhbt', 'tenrtnrt', 'ỷmnrtn', 1, '2017-12-12 06:00:10', '2017-12-12 06:00:10'),
(20, 1, NULL, 1, 'Vocabulary: Household devices', 'Vocabulary: Household devices', 'betberb', 1, '2017-12-12 06:47:44', '2017-12-12 06:47:44'),
(21, 2, NULL, NULL, 'Listening: Baking cookies', 'Listening: Baking cookies', NULL, NULL, NULL, NULL),
(22, 2, NULL, NULL, 'Listening News: Social Media Is Keeping Young Adults Awake', 'Listening News: Social Media Is Keeping Young Adults Awake', NULL, NULL, NULL, NULL),
(23, 1, NULL, NULL, 'Vocabulary: Pirates', 'Vocabulary: Pirates', NULL, NULL, NULL, NULL),
(24, 1, NULL, NULL, 'Vocabulary: Containers, Quantities, and Money', 'Vocabulary: Containers, Quantities, and Money', NULL, NULL, NULL, NULL),
(25, 1, NULL, NULL, 'Vocabulary: Insects', 'Vocabulary: Insects', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(10) UNSIGNED NOT NULL,
  `level_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_content` text COLLATE utf8mb4_unicode_ci,
  `level_image_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`, `level_content`, `level_image_link`, `created_at`, `updated_at`) VALUES
(1, '初心者', '初心者に向ける', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg', NULL, NULL),
(2, '初級', '初級に向ける', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg', NULL, NULL),
(3, '中級', '中級にむける', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg', NULL, NULL),
(4, '上級', '上級に向ける', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/thumbnails/tu-vung-co-ban1/180x90_cover.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_08_31_094448_create_vocabulary_table', 1),
(2, '2017_09_04_051721_create_articles_table', 1),
(3, '2017_09_04_095911_create_items_table', 2),
(4, '2016_11_24_160803_create_books_table', 3),
(7, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(8, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(9, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(10, '2016_06_01_000004_create_oauth_clients_table', 4),
(11, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4),
(12, '2017_09_11_012304_create_vocabulary_topic_table', 5),
(13, '2017_09_11_073440_create_vocabulary_lesson_table', 6),
(14, '2017_09_11_090030_create_tickets_table', 7),
(15, '2017_05_02_022957_create_cruds_table', 8),
(16, '2017_09_13_065551_create_document_category_table', 9),
(17, '2017_09_13_071753_create_level_table', 10),
(18, '2017_09_14_053143_create_topic_table', 11),
(19, '2017_09_14_053921_create_lesson_table', 11),
(20, '2017_09_14_055110_create_course_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `mst_lesson_type`
--

CREATE TABLE `mst_lesson_type` (
  `lesson_type_id` int(11) NOT NULL,
  `lesson_type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_lesson_type`
--

INSERT INTO `mst_lesson_type` (`lesson_type_id`, `lesson_type_name`) VALUES
(1, 'flashcard');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `course_id` text COLLATE utf8mb4_unicode_ci,
  `level_id` text COLLATE utf8mb4_unicode_ci,
  `topic_title` text COLLATE utf8mb4_unicode_ci,
  `topic_content` text COLLATE utf8mb4_unicode_ci,
  `topic_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_flag` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `course_id`, `level_id`, `topic_title`, `topic_content`, `topic_image_link`, `topic_flag`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'スポーツythuh', 'スポーツについて', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, '2017-10-25 07:24:00'),
(2, '1', '4', '教育', '教育について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 0, NULL, '2017-09-28 22:08:33'),
(3, '1', '1', 'スーパーマーケットdddddddddddddfffffffffffffffffffffffffff', 'スーパーマーケットについてdddddddddddddddllllllllllllllllll', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, '2017-09-29 00:01:39'),
(4, '1', '4', '天気', '天気について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(5, '1', '1', '動物', '動物について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(6, '1', '3', '体', '私たちの体について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(7, '1', '2', '家族と友達', '家族と友達について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(8, '1', '1', '数字', '数字の数え方について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(9, '1', '1', '家', '家について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(10, '1', '4', '健康', '健康について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(11, '1', '2', '食べ物', '食べ物について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(12, '1', '2', '飲み物', '飲み物について', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSRW5FTEh3aW5YLTA', 1, NULL, NULL),
(13, '1', '1', 'ẻyberbu', 'b5ub75b', 'eb5ub', 0, '2017-10-19 02:37:34', '2017-10-19 02:37:34'),
(14, '1', '1', 'test', 'test', 'test', NULL, '2017-10-26 03:08:16', '2017-10-26 03:08:16'),
(15, '1', '3', 'testrhth', 'testhrtnh', 'testrjnryry', NULL, '2017-10-26 03:09:48', '2017-10-26 03:09:48'),
(16, '1', '1', 'thrt', 'xxxxxxxx', NULL, NULL, '2017-10-26 05:55:11', '2017-10-26 05:55:11'),
(17, '1', '1', 'h', 'testsfbgf', NULL, NULL, '2017-10-26 06:11:01', '2017-10-26 06:11:01'),
(18, '1', '1', 'test 20171006', 'test 20171006', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSMjV6a05PMmFKVFU', NULL, '2017-10-26 08:27:28', '2017-10-26 08:27:28'),
(19, '1', '1', 'yyyyyyyyyyyyyyyyyyyyy', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSNWg4Z1NsZ1Z1Slk', NULL, '2017-10-26 08:50:53', '2017-10-26 08:50:53'),
(20, '1', '1', 'gẻgthr', 'nhmhmhtm', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSajhEUFdNbE55bXM', NULL, '2017-10-26 08:56:25', '2017-10-26 08:56:25'),
(21, '1', '1', '21', '21', '21', NULL, '2017-10-26 09:06:51', '2017-10-26 09:06:51'),
(22, '1', '1', 'upload both link and select', 'upload both link and select', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSZUE5NEpHbmJRX3c', NULL, '2017-10-26 09:07:36', '2017-10-26 09:07:36'),
(23, '1', '1', 'dhbhtnb', 'tntngtn', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bST3ozbVhHVzNiQjA', NULL, '2017-10-26 09:11:43', '2017-10-26 09:11:43'),
(24, '1', '1', '5ehtrhyr', 'ntntymnty', 'tymntmtmtym', NULL, '2017-10-26 09:12:18', '2017-10-26 09:12:18'),
(25, '1', '1', 'ttttt', 'tttttttttttttttttt', 'https://drive.google.com/uc?export=view&id=1Bsdhr07DEqsm9LzQp8-CmZ0qgBMufFm8', NULL, '2017-12-12 06:18:36', '2017-12-12 06:18:36'),
(26, '1', '4', 'egbre', 'hbetfbetfbe', 'https://drive.google.com/uc?export=view&id=1KN6CgjyAtmQnsZdNNIRcIvLodPt-b8UX', NULL, '2017-12-18 06:07:09', '2017-12-18 06:07:09'),
(27, '1', '1', 'hgrhfrgvjrvre', 'dfbvfhebefbtef', 'https://drive.google.com/uc?export=view&id=1Bsdhr07DEqsm9LzQp8-CmZ0qgBMufFm8', NULL, '2017-12-19 07:20:18', '2017-12-19 07:20:18'),
(28, '1', '1', 'ebb e', 'e gd', 'e gg', NULL, '2018-04-25 07:51:08', '2018-04-25 07:51:08'),
(29, '1', '1', 'xfdndgrngetdnfg', 'dzxgngfn', 'dszbfdbgdnb', NULL, '2018-04-25 07:55:23', '2018-04-25 07:55:23'),
(30, '1', '1', 'fbfd', 'bdf bsfdzxgngfnb', 'dszbfdbgdnbfes b df', NULL, '2018-04-25 07:57:36', '2018-04-25 07:57:36'),
(31, '1', '1', 'fbfdrebetfb', 'bdf bsfdzxgngfnbednb efb', 'dszbfdbgdnbfesef ndtgfn', NULL, '2018-04-25 07:59:36', '2018-04-25 07:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vocabulary`
--

CREATE TABLE `vocabulary` (
  `vocabulary_id` int(10) UNSIGNED NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `vocabulary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pronunciation` text COLLATE utf8mb4_unicode_ci,
  `vocabulary_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocabulary_audio_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vocabulary_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vocabulary`
--

INSERT INTO `vocabulary` (`vocabulary_id`, `lesson_id`, `vocabulary`, `pronunciation`, `vocabulary_image_link`, `vocabulary_audio_link`, `vocabulary_status`, `created_at`, `updated_at`) VALUES
(9, 1, 'celery', '/ˈsel.ər.i/', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s5.jpg', 'https://dictionary.cambridge.org/media/english/uk_pron/u/ukc/ukcel/ukceleb008.mp3', 1, NULL, NULL),
(10, 1, 'lettuce', '/ˈlet.ɪs/', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s12.jpg', 'https://dictionary.cambridge.org/media/english/uk_pron/u/ukl/ukles/ukles__023.mp3', 1, NULL, NULL),
(11, 1, 'receipt', '/rɪˈsiːt/', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s6.jpg', NULL, 1, NULL, NULL),
(12, 1, 'cabbage', '/ˈkæb.ɪdʒ/', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s3(1).jpg', 'https://dictionary.cambridge.org/media/english/uk_pron/u/ukb/ukbys/ukbysta012.mp3', 1, NULL, NULL),
(13, 1, 'cucumber', '/ˈkjuː.kʌm.bər/', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s11.jpg', 'https://dictionary.cambridge.org/media/english/uk_pron/u/ukc/ukcsa/ukcsa__018.mp3', 1, NULL, NULL),
(14, 1, 'runner bean', '/ˌrʌn.ə ˈbiːn/', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s9.jpg', 'https://dictionary.cambridge.org/media/english/uk_pron/u/ukc/ukcld/ukcld01250.mp3', 1, NULL, NULL),
(15, 1, 'cauliflower', '/ˈkɒl.ɪˌflaʊ.ər/ ', 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s7.jpg', 'https://dictionary.cambridge.org/media/english/uk_pron/u/ukc/ukcat/ukcatsu013.mp3', 1, NULL, NULL),
(16, 1, 'aubergine', NULL, 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s4.jpg', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M', 1, '2017-10-02 17:38:09', '2017-10-02 17:38:09'),
(17, 1, 'garlic', NULL, 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s1(1).jpg', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M', 1, '2017-10-03 02:40:51', '2017-10-03 02:40:51'),
(18, 1, 'onion', NULL, 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s2(1).jpg', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M', 1, '2017-10-03 02:40:52', '2017-10-03 02:40:52'),
(19, 1, 'radish', NULL, 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s10.jpg', 'https://drive.google.com/uc?export=view&id=0B4V3Z8EZP6bSWk9GMFptQXVQb2M', 1, '2017-10-03 02:40:52', '2017-10-03 02:40:52'),
(20, 1, 'mushroom', NULL, 'https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s8.jpg', NULL, 1, '2018-05-14 03:30:31', '2018-05-14 03:30:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_num`
--
ALTER TABLE `answer_num`
  ADD PRIMARY KEY (`answer_num_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_test_question`
--
ALTER TABLE `common_test_question`
  ADD PRIMARY KEY (`common_test_question_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `document_category`
--
ALTER TABLE `document_category`
  ADD PRIMARY KEY (`document_category_id`);

--
-- Indexes for table `document_image`
--
ALTER TABLE `document_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `exercise_type`
--
ALTER TABLE `exercise_type`
  ADD PRIMARY KEY (`exercise_type_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_lesson_type`
--
ALTER TABLE `mst_lesson_type`
  ADD PRIMARY KEY (`lesson_type_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD PRIMARY KEY (`vocabulary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `common_test_question`
--
ALTER TABLE `common_test_question`
  MODIFY `common_test_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `document_category`
--
ALTER TABLE `document_category`
  MODIFY `document_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vocabulary`
--
ALTER TABLE `vocabulary`
  MODIFY `vocabulary_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
