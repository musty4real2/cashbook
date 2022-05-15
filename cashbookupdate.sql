-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2014 at 07:11 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `bank`, `account_name`, `account_number`) VALUES
(1, 8, 'mustapha suleiman', '1234567890'),
(2, 8, 'josphine nnamani', '0987654321'),
(3, 9, 'mustapha suleiman', '78967568546456');

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
  `key` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bank_charges`
--

INSERT INTO `bank_charges` (`id`, `bank`, `date`, `amount`, `accout_number_to_add`, `account_name`, `entry_date`, `narration`, `key`) VALUES
(1, '8', '4/3/2014', 8000, '1234567890', 'mustapha suleiman', '2014-03-31', 'hvgffghghjg jhgjhgj', 'MARCH 2014');

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
  `key` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bank_interest`
--

INSERT INTO `bank_interest` (`id`, `bank`, `date`, `amount`, `accout_number_to_add`, `account_name`, `entry_date`, `key`) VALUES
(1, '8', '5/4/2014', 50000, '1234567890', 'mustapha suleiman', '2014-03-31', 'MARCH 2014'),
(2, '8', '3/4/2014', 3500, '1234567890', 'mustapha suleiman', '2014-03-31', 'MARCH 2014');

-- --------------------------------------------------------

--
-- Table structure for table `cashbook_summary`
--

CREATE TABLE `cashbook_summary` (
  `id` int(11) NOT NULL auto_increment,
  `balance_carried_fwd` varchar(200) NOT NULL,
  `total_bank_interest` varchar(200) NOT NULL,
  `total_bank_charge` varchar(200) NOT NULL,
  `key` varchar(200) NOT NULL,
  `total_less_effect` varchar(200) NOT NULL,
  `total_add_effect` varchar(200) NOT NULL,
  `closed_on` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cashbook_summary`
--

INSERT INTO `cashbook_summary` (`id`, `balance_carried_fwd`, `total_bank_interest`, `total_bank_charge`, `key`, `total_less_effect`, `total_add_effect`, `closed_on`) VALUES
(1, '42,000.00', '53500', '8000', 'MARCH 2014', '', '', '2014-03-31'),
(2, '42,000.00', '53500', '8000', 'MARCH 2014', '', '', '2014-03-31');

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
  `key` varchar(100) NOT NULL,
  `closed` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`id`, `date`, `debit_voucher`, `beneficiary_name`, `treasury_receipt_no`, `tpv_no`, `revenue_debit`, `head`, `sub_head`, `amount`, `recipient_bank`, `recipient_account_number`, `senders_bank`, `senders_account_number`, `narration`, `entry_date`, `status`, `status2`, `status3`, `key`, `closed`) VALUES
(1, '31-3-2014', '97667', 'mustapha suleiman', '756747', '97807', '56', '89708', '0009', '3500', 'gtbank', '7890970', '8', '1234567890', 'uwuh kj jgzoufj ozbnbnbuk', '2014-03-31', 1, 0, 0, 'MARCH 2014', 1);

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
  `key` varchar(100) NOT NULL,
  `closed` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dr`
--


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
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `id` int(11) NOT NULL auto_increment,
  `sender_bank` varchar(100) NOT NULL,
  `senders_account_number` varchar(100) NOT NULL,
  `amount_deducted` varchar(100) NOT NULL,
  `recipient_bank` varchar(100) NOT NULL,
  `recipient_account_number` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  `transactionid` varchar(100) NOT NULL,
  `opening_balance` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `transfer_history`
--

INSERT INTO `transfer_history` (`id`, `sender_bank`, `senders_account_number`, `amount_deducted`, `recipient_bank`, `recipient_account_number`, `entry_date`, `transactionid`, `opening_balance`) VALUES
(2, 'DIAMOND Bank', '78967568546456', '40000', 'ECO Bank', '78967568546456', '2014-03-28', 'ODSRJZXYG', '50000'),
(3, 'DIAMOND Bank', '78967568546456', '', 'ECO Bank', '78967568546456', '2014-03-28', 'FKGLVSQL', '50000'),
(4, 'DIAMOND Bank', '78967568546456', '', 'ECO Bank', '78967568546456', '2014-03-28', 'IPJFHKKW', '50000'),
(5, 'DIAMOND Bank', '78967568546456', '', 'ECO Bank', '78967568546456', '2014-03-28', 'LLGQTOZZN', '50000');

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
