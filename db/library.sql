-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2014 at 06:04 PM
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
  `adress_id` smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of adress',
  `adress_country` varchar(65) NOT NULL COMMENT 'Country name',
  `adress_city` varchar(65) NOT NULL COMMENT 'City name',
  `adress_street` varchar(50) NOT NULL COMMENT 'The street name',
  `adress_house` smallint(5) NOT NULL COMMENT 'The street number',
  `adress_zip` mediumint(5) NOT NULL COMMENT 'Zone Improvement Plan code',
  PRIMARY KEY (`adress_id`),
  UNIQUE KEY `adress_country` (`adress_country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of author ',
  `author_surname` varchar(25) NOT NULL COMMENT 'Surname of author',
  `author_first_name` varchar(25) NOT NULL COMMENT 'First name of author',
  `author_birth_year` smallint(4) NOT NULL COMMENT 'Birthday year of author',
  `author_year_of_death` smallint(4) NOT NULL COMMENT 'Author`s year of death',
  `author_nationality` varchar(65) NOT NULL COMMENT 'Nationality of author',
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_isbn` bigint(13) NOT NULL COMMENT 'International Standard Book Number',
  `book_author` smallint(5) NOT NULL COMMENT 'Author of book from outer table, only 1 author :(',
  `book_title` varchar(35) NOT NULL COMMENT 'Title of book, may be repeated',
  `book_genre` tinyint(3) NOT NULL COMMENT 'Genre of book from outer table',
  `book_number_of_pages` int(5) NOT NULL COMMENT 'Number of pages in book',
  `book_publication_year` smallint(4) NOT NULL COMMENT 'Year of book publication',
  `book_publisher` smallint(4) NOT NULL COMMENT 'Publisher of book from outer table',
  `book_admission_date` date NOT NULL COMMENT 'Admission date of book',
  PRIMARY KEY (`book_isbn`),
  KEY `book_author` (`book_author`),
  KEY `book_genre` (`book_genre`,`book_publisher`),
  KEY `book_publisher` (`book_publisher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of genre',
  `genre_name` varchar(25) NOT NULL COMMENT 'Name of genre',
  PRIMARY KEY (`genre_id`),
  UNIQUE KEY `genre_name` (`genre_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `publisher_id` smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Identification number of publisher',
  `publisher_name` varchar(35) NOT NULL COMMENT 'Name of publisher',
  `publisher_adress` smallint(4) NOT NULL COMMENT 'Adress of publisher',
  `publisher_person` varchar(45) NOT NULL COMMENT 'Contact person of publisher',
  PRIMARY KEY (`publisher_id`),
  UNIQUE KEY `publisher_name` (`publisher_name`),
  KEY `publisher_adress` (`publisher_adress`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`book_publisher`) REFERENCES `publishers` (`publisher_id`),
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`book_author`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`book_genre`) REFERENCES `genres` (`genre_id`);

--
-- Constraints for table `publishers`
--
ALTER TABLE `publishers`
  ADD CONSTRAINT `publishers_ibfk_1` FOREIGN KEY (`publisher_adress`) REFERENCES `addresses` (`adress_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
