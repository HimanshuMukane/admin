-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2022 at 01:40 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

DROP TABLE IF EXISTS `admintb`;
CREATE TABLE IF NOT EXISTS `admintb` (
  `F_NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`F_NAME`, `PASSWORD`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `teacherreg`
--

DROP TABLE IF EXISTS `teacherreg`;
CREATE TABLE IF NOT EXISTS `teacherreg` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
`M_F` varchar(1) NOT NULL,
`F_NAME` varchar(35) NOT NULL,
`M_NAME` varchar(35) NOT NULL,
`L_NAME` varchar(35) NOT NULL,
`MOTHER_NAME` varchar(35) NOT NULL,
`EMP_NM` varchar(100) NOT NULL,
`EDN_QUALIFICATIONS` varchar(35) NOT NULL,
`ADDRESS` varchar(120) NOT NULL,
`PHONE` varchar(21) NOT NULL,
`MOBILE_NO` varchar(10) NOT NULL,
`EMAIL_ID` varchar(100) NOT NULL,
`PASSWORD` varchar(50) NOT NULL,
`DOB` int(8) NOT NULL,
`CONF_DATE` int(8) NOT NULL,
`MAR_ST` varchar(1) NOT NULL,
`BIRTH_PLAC` varchar(15) NOT NULL,
`GURD` varchar(25) NOT NULL,
`HEIGHT` int(5) NOT NULL,
`WEIGHT` int(5) NOT NULL,
`BLOOD_GROUP` varchar(4) NOT NULL,
`POWER_GLASS` varchar(10) NOT NULL,
`PASS_NO` varchar(15) NOT NULL,
`PASS_DT` int(8) NOT NULL,
`RELIGION` varchar(20) NOT NULL,
`DEPEND` int(5) NOT NULL,
`REF` varchar(25) NOT NULL,
`REF_PHONE` varchar(21) NOT NULL,
`ESIC_NO` varchar(10) NOT NULL,
`PAN_NO` varchar(15) NOT NULL,
`AADHAR_CARD_NO` varchar(20) NOT NULL,
`EPF_MEMBER_ID` varchar(50) NOT NULL,
`EPF_UID_NO` varchar(50) NOT NULL,
`TAN_NO` varchar(15) NOT NULL,
`cy_id` int(4) NOT NULL,
`trn_mode` varchar(1) NOT NULL,
`route_ft` varchar(20) NOT NULL,
`dept_id` int(4) NOT NULL,
`PAYTP_ID` int(4) NOT NULL,
`GRADE_ID` int(4) NOT NULL,
`mode_trn` varchar(15) NOT NULL,
`route_fr_to` varchar(30) NOT NULL,
`pf_no` varchar(20) NOT NULL,
`curr_basic` int(9) NOT NULL,
`Basic50Per` int(9) NOT NULL,
`BASIC_6PAY` int(9) NOT NULL,
`PAY_BOND` varchar(50) NOT NULL,
`GRADE_PAY` int(9) NOT NULL,
`BASIC_7PAY` int(9) NOT NULL,
`LEVEL_NO` int(5) NOT NULL,
`cancel_flg` varchar(1) NOT NULL,
`Occu_Cd` int(4) NOT NULL,
`emp_type` varchar(1) NOT NULL,
`PAY_TYPE` varchar(1) NOT NULL,
`PhotoPath` varchar(100) NOT NULL,
`HOLD_FLG` varchar(1) NOT NULL,
`PF_FLAG` varchar(1) NOT NULL,
`COMP_ID` int(4) NOT NULL,
`AICTE_EMP_ID` varchar(25) NOT NULL,
`NO_OF_LIB_BOOKS` int(5) NOT NULL,
`EMP_SR_NO` int(4) NOT NULL,
`PAY_LEVEL_ID` int(4) NOT NULL,
`ADNL_DES_ID` int(4) NOT NULL,
`LEAVE_AUTH_DEPT_ID` int(4) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherreg`
--

INSERT INTO `teacherreg` (`pid`, `F_NAME`, `L_NAME`, `MAR_ST`, `EMAIL_ID`, `MOBILE_NO`, `PASSWORD`, `DOB`, `CONF_DATE`, `PF_FLAG`) VALUES
(1, 'Himanshu', 'Mukane', 'Male', 'himanshu@gmail.com', '9876543210', 'him123', '10/01/2000', '10/01/2020', 'Information Technology'),
(2, 'Eashwari', 'Nagarkar', 'Female', 'eashwari@gmail.com', '8976897689', 'eash123', '10/01/2000', '10/01/2020', 'Information Technology');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
