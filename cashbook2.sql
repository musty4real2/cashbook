-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2014 at 06:14 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cashbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_effect`
--

CREATE TABLE `add_effect` (
  `id` int(255) NOT NULL auto_increment,
  `bank` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `towhompaid` varchar(25) NOT NULL,
  `amount` int(15) NOT NULL,
  `accout_number_to_add` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `add_effect`
--


-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `name`) VALUES
(1, 'Skye Bank'),
(3, 'Unity Bank'),
(4, 'FCMB Bank'),
(5, 'Union Bank'),
(6, 'UBA Bank'),
(7, 'GTBank'),
(8, 'DIAMOND Bank'),
(9, 'ECO Bank'),
(10, 'FIRST Bank'),
(11, 'ZENITH Bank'),
(12, 'KEYSTONE Bank'),
(13, 'MAINSTREET Bank'),
(14, 'ENTERPRISE Bank'),
(19, 'jossy');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL auto_increment,
  `bank` int(11) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_number` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `bank`, `account_name`, `account_number`) VALUES
(1, 8, 'mustapha suleiman', '1234567890'),
(2, 8, 'josphine nnamani', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `bank_charges`
--

CREATE TABLE `bank_charges` (
  `id` int(255) NOT NULL auto_increment,
  `bank` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `amount` int(15) NOT NULL,
  `accout_number_to_add` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  `narration` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bank_charges`
--


-- --------------------------------------------------------

--
-- Table structure for table `bank_interest`
--

CREATE TABLE `bank_interest` (
  `id` int(255) NOT NULL auto_increment,
  `bank` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `amount` int(15) NOT NULL,
  `accout_number_to_add` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bank_interest`
--


-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `id` int(11) NOT NULL auto_increment,
  `date` varchar(200) NOT NULL,
  `debit_voucher` varchar(200) NOT NULL,
  `beneficiary_name` varchar(200) NOT NULL,
  `treasury_receipt_no` varchar(200) NOT NULL,
  `tpv_no` varchar(200) NOT NULL,
  `revenue_debit` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `sub_head` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `recipient_bank` varchar(200) NOT NULL,
  `recipient_account_number` varchar(200) NOT NULL,
  `senders_bank` varchar(200) NOT NULL,
  `senders_account_number` varchar(200) NOT NULL,
  `narration` text NOT NULL,
  `entry_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `status2` int(11) NOT NULL,
  `status3` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`id`, `date`, `debit_voucher`, `beneficiary_name`, `treasury_receipt_no`, `tpv_no`, `revenue_debit`, `head`, `sub_head`, `amount`, `recipient_bank`, `recipient_account_number`, `senders_bank`, `senders_account_number`, `narration`, `entry_date`, `status`, `status2`, `status3`) VALUES
(1, '4-3-1974', '1234', 'josephine nnamani', '9080', '899787', '090454', '57568', '0009', '8000', 'gtbank', '134534536453', '8', '1234567890', 'payment for wiring', '2014-04-08', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dr`
--

CREATE TABLE `dr` (
  `id` int(11) NOT NULL auto_increment,
  `date` varchar(200) NOT NULL,
  `treasury_reciept_no` varchar(200) NOT NULL,
  `recieved_from` varchar(200) NOT NULL,
  `bank_credit_slip` varchar(200) NOT NULL,
  `revenue_debit` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `sub_head` varchar(200) NOT NULL,
  `senders_account_number` varchar(200) NOT NULL,
  `senders_bank` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dr`
--

INSERT INTO `dr` (`id`, `date`, `treasury_reciept_no`, `recieved_from`, `bank_credit_slip`, `revenue_debit`, `head`, `sub_head`, `senders_account_number`, `senders_bank`, `amount`, `entry_date`) VALUES
(1, '3-2-1971', '43433', 'mustapha suleiman', '5756756', '090', '57568', '0009', '1234567890', 'DIAMOND Bank', '8000000', '2014-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `less_effect`
--

CREATE TABLE `less_effect` (
  `id` int(255) NOT NULL auto_increment,
  `bank` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `towhompaid` varchar(25) NOT NULL,
  `amount` int(15) NOT NULL,
  `accout_number_to_add` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `less_effect`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '12345', 'farm administrator');
