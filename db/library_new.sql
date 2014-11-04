-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2014 at 07:51 PM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of adress',
  `country_id` smallint(3) NOT NULL COMMENT 'Identification number of country',
  `city_id` mediumint(4) NOT NULL COMMENT 'Identification number of city',
  `street` varchar(50) NOT NULL COMMENT 'The street name and the house number',
  `zip` varchar(5) NOT NULL COMMENT 'Zone Improvement Plan code',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `country_id`, `city_id`, `street`, `zip`) VALUES
(1, 1, 1, 'Gaydara', '58029'),
(2, 2, 2, 'Otto Fon Bismark', '12345'),
(12, 2, 2, 'Gitler', '12344');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of author ',
  `surname` varchar(25) NOT NULL COMMENT 'Surname of author',
  `first_name` varchar(25) NOT NULL COMMENT 'First name of author',
  `birth_year` year(4) NOT NULL COMMENT 'Birthday year of author',
  `year_of_death` year(4) NOT NULL COMMENT 'Author`s year of death',
  `country_id` smallint(3) NOT NULL COMMENT 'Nationality of author',
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `surname`, `first_name`, `birth_year`, `year_of_death`, `country_id`) VALUES
(1, 'Perebykivskiy', 'Vova', 1995, 0000, 1),
(2, 'Ruptash', 'Bogdan', 1994, 0000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `isbn` bigint(13) NOT NULL COMMENT 'International Standard Book Number',
  `author_id` smallint(5) NOT NULL COMMENT 'Author of book from outer table, only 1 author :(',
  `title` varchar(35) NOT NULL COMMENT 'Title of book, may be repeated',
  `genre_id` tinyint(3) NOT NULL COMMENT 'Genre of book from outer table',
  `number_of_pages` int(5) NOT NULL COMMENT 'Number of pages in book',
  `publication_year` smallint(4) NOT NULL COMMENT 'Year of book publication',
  `publisher_id` smallint(4) NOT NULL COMMENT 'Publisher of book from outer table',
  `admission_date` date NOT NULL COMMENT 'Admission date of book',
  PRIMARY KEY (`isbn`),
  KEY `book_author` (`author_id`),
  KEY `book_genre` (`genre_id`,`publisher_id`),
  KEY `book_publisher` (`publisher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `author_id`, `title`, `genre_id`, `number_of_pages`, `publication_year`, `publisher_id`, `admission_date`) VALUES
(1111111111111, 1, 'Robert', 2, 234, 1234, 1, '2014-10-08'),
(1928475609475, 1, 'Robinson Crusoe', 2, 400, 1980, 1, '2014-10-30'),
(9876556789123, 1, 'Temp', 1, 123, 2013, 1, '2014-10-30'),
(90000000008645, 2, 'Game dev for dummies', 3, 123, 2014, 7, '2014-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of city',
  `name` varchar(50) NOT NULL COMMENT 'Name of city',
  `country_id` smallint(3) NOT NULL COMMENT 'Identification number of country',
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`) VALUES
(1, 'Chernivtsi', 1),
(2, 'Berlin', 2),
(3, 'Paris', 3);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of country',
  `name` varchar(50) NOT NULL COMMENT 'Name of country',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Ukraine'),
(2, 'Germany'),
(3, 'France');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of genre',
  `name` varchar(25) NOT NULL COMMENT 'Name of genre',
  PRIMARY KEY (`id`),
  UNIQUE KEY `genre_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of publisher',
  `name` varchar(35) NOT NULL COMMENT 'Name of publisher',
  `address_id` smallint(4) NOT NULL COMMENT 'Address of publisher',
  `contact_person` varchar(45) NOT NULL COMMENT 'Contact person of publisher',
  PRIMARY KEY (`id`),
  UNIQUE KEY `publisher_name` (`name`),
  KEY `publisher_adress` (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `address_id`, `contact_person`) VALUES
(1, 'A-Ba-Ba-Ga-La-Ma-Ga', 1, 'Perebykivskiy Viktor'),
(7, 'BenQ', 1, 'Vladislav Konyahin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `addresses_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `publishers`
--
ALTER TABLE `publishers`
  ADD CONSTRAINT `publishers_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
