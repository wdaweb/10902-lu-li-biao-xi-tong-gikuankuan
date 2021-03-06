-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-08 10:35:49
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `introduction`
--

CREATE TABLE `introduction` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `introduction`
--

INSERT INTO `introduction` (`id`, `title`, `text`, `img`) VALUES
(1, '霍格華茲', '擔任過建設公司資訊部資訊人員，主要為軟硬體維護，專案管理。\r\n現在正在積極學習全端網頁開發，並積極希望投身此領域', '');

-- --------------------------------------------------------

--
-- 資料表結構 `person`
--

CREATE TABLE `person` (
  `id` int(10) UNSIGNED NOT NULL,
  `sh` int(1) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photonum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `car` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `army` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `person`
--

INSERT INTO `person` (`id`, `sh`, `about`, `stage`, `photonum`, `mail`, `adress`, `car`, `contant`, `army`, `age`) VALUES
(1, 1, '男生', '待業', '09889172922', 'a831202a', '台北市文山區', 'car', '123', '役畢(2018/10)', '25');

-- --------------------------------------------------------

--
-- 資料表結構 `school`
--

CREATE TABLE `school` (
  `id` int(100) UNSIGNED NOT NULL,
  `sh` int(1) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gold` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `school`
--

INSERT INTO `school` (`id`, `sh`, `name`, `date`, `location`, `job`, `gold`) VALUES
(1, 1, '世新大學', '103 年上學期', '社會服務團', '公關、器材', '0'),
(2, 1, '', '103 年上學期', '北區服務性社團聯誼活動', '世新總召', '0'),
(3, 1, '', '103 年下學期', '社會服務團', '聯絡、執行秘書', '0'),
(4, 1, '', '104 年全年', '社會服務團', '團長', '0'),
(5, 1, '', '104 年全年', '5 th 學生議會', '資管系議員', '0'),
(12, 1, '', '101年', '11', '11', ''),
(13, 1, '', '', '', '', ''),
(14, 1, '', '', '', '', ''),
(15, 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `sh` int(1) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `sh`, `name`, `value`, `other`) VALUES
(1, 1, 'HTML', '60', '123'),
(2, 1, 'CSS', '90', '879');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `school`
--
ALTER TABLE `school`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
