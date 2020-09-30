-- Web-App Framework Database Schema Creator
USE mysql;
--
-- Create and Use the Application System Database
--
DROP DATABASE IF EXISTS `gallery`;
CREATE DATABASE `gallery` CHARACTER SET UTF8mb4 COLLATE UTF8mb4_unicode_ci;
USE `gallery`;

--
-- Table structure for table `user_data`
--
DROP TABLE IF EXISTS `user_data`;

CREATE TABLE `user_data` (
  `user_id` int(11) AUTO_INCREMENT NOT NULL ,
  `name` varchar(50) COLLATE UTF8mb4_unicode_ci NOT NULL COMMENT 'user full name',
  `phone` varchar(15) COLLATE UTF8mb4_unicode_ci NOT NULL COMMENT 'user phone number',
  `email` varchar(100) COLLATE UTF8mb4_unicode_ci NOT NULL COMMENT 'user email address',
  `bio` TEXT COLLATE UTF8mb4_unicode_ci NOT NULL COMMENT 'user bio / description',
  `avatar` varchar(20) COLLATE UTF8mb4_unicode_ci NOT NULL COMMENT 'user avatar local relative filepath',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8mb4 COLLATE=UTF8mb4_unicode_ci COMMENT='user data table';

--
-- Table structure for table `photos`
--
DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `photo_id` int(11) AUTO_INCREMENT NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'the user id of the photo owner',
  `title` TEXT COLLATE UTF8mb4_unicode_ci DEFAULT NULL COMMENT 'the photo title',
  `description` TEXT COLLATE UTF8mb4_unicode_ci DEFAULT NULL COMMENT 'the photo description',
  `img_filepath` varchar(50) COLLATE UTF8mb4_unicode_ci DEFAULT NULL COMMENT 'the photo filepath',
  `date` date COLLATE UTF8mb4_unicode_ci DEFAULT NULL COMMENT 'date of the photo',
  `featured` tinyint(1) COLLATE UTF8mb4_unicode_ci DEFAULT NULL COMMENT 'boolean if the photo is featured',
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8mb4 COLLATE=UTF8mb4_unicode_ci COMMENT='the photos table';
