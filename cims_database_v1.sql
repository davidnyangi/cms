-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: mysql1004.mochahost.com
-- Generation Time: Jul 12, 2019 at 08:00 AM
-- Server version: 5.6.33
-- PHP Version: 7.2.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d4vy1ser_cims`
--

-- --------------------------------------------------------

--
-- Table structure for table `build_churches`
--

CREATE TABLE IF NOT EXISTS `build_churches` (
  `church_id` int(4) NOT NULL AUTO_INCREMENT,
  `church_name` varchar(200) DEFAULT NULL,
  `church_abbreviation` varchar(5000) DEFAULT NULL,
  `church_region` varchar(5000) DEFAULT NULL,
  `church_country` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`church_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=465 ;

-- --------------------------------------------------------

--
-- Table structure for table `build_churchroles`
--

CREATE TABLE IF NOT EXISTS `build_churchroles` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_rolename` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `build_countries`
--

CREATE TABLE IF NOT EXISTS `build_countries` (
  `countryid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`countryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `build_members`
--

CREATE TABLE IF NOT EXISTS `build_members` (
  `mem_id` int(10) NOT NULL AUTO_INCREMENT,
  `mem_firstname` varchar(30) DEFAULT NULL,
  `mem_middlename` varchar(100) DEFAULT NULL,
  `mem_lastname` varchar(30) DEFAULT NULL,
  `mem_gender` varchar(10) DEFAULT NULL,
  `mem_mobile` varchar(200) DEFAULT NULL,
  `mem_whatsapp` varchar(20) DEFAULT NULL,
  `mem_age` varchar(10) DEFAULT NULL,
  `mem_email` varchar(255) DEFAULT NULL,
  `mem_conference` varchar(100) DEFAULT NULL,
  `mem_church` varchar(255) DEFAULT NULL,
  `mem_region` varchar(100) DEFAULT NULL,
  `mem_country` varchar(100) DEFAULT NULL,
  `mem_positioninchurch` varchar(200) DEFAULT NULL,
  `mem_allergy` varchar(100) DEFAULT NULL,
  `mem_bod` varchar(50) DEFAULT NULL,
  `mem_accomodation` varchar(100) DEFAULT NULL,
  `mem_roomno` varchar(5000) DEFAULT NULL,
  `mem_agegroup` varchar(100) DEFAULT NULL,
  `mem_user` varchar(50) DEFAULT NULL,
  `mem_registrationfee` varchar(50) DEFAULT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7786 ;

-- --------------------------------------------------------

--
-- Table structure for table `build_regions`
--

CREATE TABLE IF NOT EXISTS `build_regions` (
  `reg_id` int(4) NOT NULL AUTO_INCREMENT,
  `reg_name` varchar(50) DEFAULT NULL,
  `reg_city` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `cims_events`
--

CREATE TABLE IF NOT EXISTS `cims_events` (
  `eventid` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `mem_domitories`
--

CREATE TABLE IF NOT EXISTS `mem_domitories` (
  `mem_domid` int(10) NOT NULL AUTO_INCREMENT,
  `mem_roomno` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `mem_bedno` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `mem_status` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `mem_domgender` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `mem_category` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`mem_domid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1069 ;

-- --------------------------------------------------------

--
-- Table structure for table `nad_tifusers`
--

CREATE TABLE IF NOT EXISTS `nad_tifusers` (
  `UserId` int(5) NOT NULL AUTO_INCREMENT,
  `CompanyId` varchar(100) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `Organization` varchar(255) DEFAULT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `UserType` varchar(100) DEFAULT NULL,
  `Userlevel` varchar(100) DEFAULT NULL,
  `dateregistered` varchar(50) DEFAULT NULL,
  `JobDescriptions` varchar(255) DEFAULT NULL,
  `UserAccountSuspended` varchar(10) DEFAULT 'NO',
  `ForcedLogOff` varchar(50) DEFAULT 'NO',
  `SpecialAdminRoles` varchar(4) DEFAULT 'NO',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`UserId`),
  KEY `idx` (`Username`),
  KEY `idx1` (`FName`),
  KEY `idx2` (`LName`),
  KEY `idx3` (`MobileNo`),
  KEY `idx4` (`Userlevel`),
  KEY `idx5` (`UserType`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
