-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 01:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edocket`
--

-- --------------------------------------------------------

--
-- Table structure for table `dms_docs`
--

CREATE TABLE `dms_docs` (
  `doc_id` int(10) NOT NULL,
  `file_id` int(10) NOT NULL,
  `docno` varchar(100) NOT NULL,
  `doctype` varchar(20) NOT NULL,
  `docrefno` varchar(100) NOT NULL,
  `docsubject` varchar(150) NOT NULL,
  `doccreator` varchar(10) NOT NULL,
  `noofpages` int(11) NOT NULL,
  `rempage` int(150) NOT NULL,
  `docdepartment` varchar(20) NOT NULL,
  `docviewuser` varchar(100) NOT NULL,
  `createdon` date NOT NULL,
  `receviedon` date NOT NULL,
  `receviedfrom` varchar(10) NOT NULL,
  `docstatus` int(20) NOT NULL,
  `docremarks` varchar(150) NOT NULL,
  `linkeddocupward` int(10) NOT NULL,
  `linkeddocdownward` int(10) NOT NULL,
  `linkedpath` varchar(150) NOT NULL,
  `linkedfile` varchar(150) NOT NULL,
  `text_noting` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dms_docs`
--

INSERT INTO `dms_docs` (`doc_id`, `file_id`, `docno`, `doctype`, `docrefno`, `docsubject`, `doccreator`, `noofpages`, `rempage`, `docdepartment`, `docviewuser`, `createdon`, `receviedon`, `receviedfrom`, `docstatus`, `docremarks`, `linkeddocupward`, `linkeddocdownward`, `linkedpath`, `linkedfile`, `text_noting`) VALUES
(380, 68, '55', 'note', '', '', '0', 124, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', '0001014750002073254_09082020_09282020.PDF', ''),
(381, 68, '19', 'note', '', '', '0', 124, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, '../IT/', 'HQ_IT_1_19_20210312.PDF', ''),
(393, 3, '7', 'docs', '', '', '0', 0, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', 'BoardingPass.pdf', ''),
(394, 3, '6', 'note', '', '', '0', 0, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, '../IT/', 'HQ_IT_1_6_20210312.PDF', ''),
(395, 68, '5', 'note', '', '', '0', 124, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', '0001014750002073254_10082020_10282020.PDF', ''),
(396, 3, '4', 'docs', '', '', '0', 0, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, '../IT/', 'HQ_IT_1_4_20210312.PDF', ''),
(397, 3, '3', 'docs', '', '', '0', 0, 0, 'IT', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, '../IT/', 'HQ_IT_1_3_20210312.PDF', ''),
(770, 68, '25', 'docs', '', '', '0', 124, 0, '', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'HR/', 'BoardingPass.pdf', ''),
(782, 3, '8', 'note', '', '', '0', 0, 0, '', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', 'BaggageTag.pdf', 'This project will evolve a system replacing existing system of working manually in excel, will perform entire MIS reporting procedures and would be much user friendly and less time consuming as compared to the existing system. Working on data extraction would produce output statistically and graphically. This will provide flexibility, speed to the system of report generation.'),
(826, 3, 'NP-FP-58', 'note', '', '', '0', 0, 0, 'admin', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', '0001014750002073254_09082020_09282020.PDF', ''),
(954, 0, '12', 'folio', '', '', '0', 0, 0, 'admin', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', 'BoardingPass.pdf', ''),
(955, 0, '11', 'note', '', '', '0', 0, 0, 'admin', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', '0001018880001702250_08082020_08282020.PDF', ''),
(957, 0, '58', 'note', '', '', '0', 0, 0, 'admin', '', '0000-00-00', '0000-00-00', '0', 0, '', 0, 0, 'admin/', 'BaggageTag.pdf', ''),
(1021, 68, '65', 'note', '', 'ad', '3', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', '3', 1, '', 0, 0, 'HR/', 'BoardingPass.pdf', ''),
(1023, 68, '27', 'docs', '', 'ad', '0', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', '1', 1, '', 0, 0, 'HR/', 'BaggageTag.pdf', ''),
(1025, 68, '78', 'note', '', 'ad', '0', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', '0', 1, '', 0, 0, 'HR/', 'BaggageTag.pdf', ''),
(1027, 68, '80', 'note', '', 'ad', '0', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', '0', 1, '', 0, 0, 'HR/', '0001018880001702250_08082020_08282020.PDF', ''),
(1029, 68, '72', 'note', '', 'ad', '0', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', '0', 1, '', 0, 0, 'HR/', 'BaggageTag.pdf', ''),
(1031, 68, '73', 'docs', '', 'ad', 'VARSHA', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', '0', 1, '', 0, 0, 'HR/', 'BoardingPass.pdf', ''),
(1033, 68, '79', 'docs', '', 'ad', 'NOOR', 124, 0, 'HR', '', '2021-08-10', '0000-00-00', 'VARSHA', 1, '', 0, 0, 'HR/', 'BaggageTag.pdf', ''),
(1034, 68, '879', 'note', '', 'ad', 'VARSHA', 124, 0, 'pinki', '', '2021-08-14', '0000-00-00', 'VARSHA', 0, '', 0, 0, 'pinki/', 'GCI_GITS (1).pdf', ''),
(1035, 68, '170', 'note', '', 'admin', 'NOOR', 124, 0, 'IGI', '', '2021-08-16', '0000-00-00', 'NOOR', 0, '', 0, 0, 'IGI/', 'GCI_GITS (1).pdf', ''),
(1037, 68, '230', 'docs', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'VARSHA', '2021-08-25', '0000-00-00', 'VARSHA', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1039, 68, '231', 'docs', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'VARSHA', '2021-08-25', '0000-00-00', '', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1042, 68, '222', 'docs', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'VARSHA', '2021-08-25', '0000-00-00', '', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1045, 68, '253', 'docs', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'VARSHA', '2021-08-25', '0000-00-00', '', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1047, 68, '456', 'docs', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'VARSHA', '2021-08-25', '0000-00-00', 'V', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1049, 68, '258', 'docs', '', 'admin', 'Array', 124, 0, 'ADMIN', 'Array', '2021-08-25', '0000-00-00', 'NOOR', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1052, 68, '254', 'docs', '', 'admin', 'Array', 124, 0, 'ADMIN', 'Array', '2021-08-25', '0000-00-00', 'NOOR,VARSH', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1054, 68, '257', 'note', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'VARSHA', '2021-08-25', '0000-00-00', 'NOOR,VARSH', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1058, 68, '259', 'docs', '', 'admin', 'Array', 124, 0, 'ADMIN', '', '2021-08-25', '0000-00-00', 'Array', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1060, 68, '125', 'note', '', 'admin', 'NOOR', 124, 0, 'ADMIN', 'NOOR,VARSHA', '2021-08-25', '0000-00-00', 'NOOR', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1062, 68, '235', 'note', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'NOOR,VARSHA', '2021-08-25', '0000-00-00', 'VARSHA', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1067, 68, '247', 'note', '', 'admin', 'VARSHA', 124, 0, 'ADMIN', 'NOOR,VARSHA', '2021-08-25', '0000-00-00', 'VARSHA', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1068, 68, '213', 'note', '', 'admin', 'NOOR', 124, 0, 'ADMIN', 'NOOR,VARSHA', '2021-08-26', '0000-00-00', 'NOOR', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1069, 0, '', '', '', '', '', 0, 0, '', '', '0000-00-00', '0000-00-00', '', 0, '', 0, 0, '', '', ''),
(1073, 68, '250', 'note', '', 'admin', 'NOOR', 124, 0, 'ADMIN', 'VARSHA', '2021-08-28', '0000-00-00', 'NOOR', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1076, 68, '4425', 'docs', '', 'admin', 'NOOR', 124, 0, 'ADMIN', 'VARSHA', '2021-08-28', '0000-00-00', 'NOOR', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', ''),
(1077, 12, '4478', 'note', '', 'admin', 'NOOR', 140, 0, 'ADMIN', 'VARSHA', '2021-08-28', '0000-00-00', 'NOOR', 0, '', 0, 0, 'ADMIN/', 'GCI_GITS (1).pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `dms_files`
--

CREATE TABLE `dms_files` (
  `file_id` int(10) NOT NULL,
  `reffilenm` varchar(100) NOT NULL,
  `fileno` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `filesubject` varchar(150) NOT NULL,
  `filecreator` int(10) NOT NULL,
  `createdon` date NOT NULL,
  `currentlocuser` int(10) NOT NULL,
  `receviedon` date NOT NULL,
  `receviedfrom` int(10) NOT NULL,
  `filestatus` varchar(20) NOT NULL,
  `noofpages` int(3) NOT NULL,
  `rempage` int(150) NOT NULL,
  `linkedfileupward` int(10) NOT NULL,
  `linkedfiledownward` int(10) NOT NULL,
  `prevfileno` varchar(50) NOT NULL,
  `fileremarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dms_files`
--

INSERT INTO `dms_files` (`file_id`, `reffilenm`, `fileno`, `department`, `filesubject`, `filecreator`, `createdon`, `currentlocuser`, `receviedon`, `receviedfrom`, `filestatus`, `noofpages`, `rempage`, `linkedfileupward`, `linkedfiledownward`, `prevfileno`, `fileremarks`) VALUES
(3, 'HQ_IT_1', 'IRSDC/HQ/IT/PM&CM/SM/FEB2020/', 'Admin', '', 0, '0000-00-00', 3, '0000-00-00', 1, 'C', 124, 0, 0, 0, '', ''),
(12, 'HQ_IT_12', 'IRSDC/HQ/IT/PM&CM/SM/FEB2020/1', 'IT', 'FOR USER', 1, '2021-08-25', 1, '0000-00-00', 0, 'U', 140, 0, 0, 0, 'IRSDC/HQ/IT/PM&CM/SM/FEB20', 'SSS'),
(36, 'HQ_ADMIN_36', 'IRSDC/HQ/IT/PM&CM/SM/GU2019/	', 'ADMIN', 'df', 1, '2021-08-27', 1, '0000-00-00', 0, 'U', 26, 0, 0, 0, 'IRSDC/HQ/IT/PM&CM/SM/FEB2018/	', 'dsf'),
(68, 'HQ_ACCOUNTS_68', 'IRSDC/HQ/IT/PM&CM/SM/FEB2021', 'HR', '', 0, '0000-00-00', 3, '0000-00-00', 2, 'U', 124, 45, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dms_param`
--

CREATE TABLE `dms_param` (
  `p_type` int(25) NOT NULL,
  `department` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dms_param`
--

INSERT INTO `dms_param` (`p_type`, `department`) VALUES
(15, '---Select---'),
(7, 'ADMIN'),
(13, 'dfg'),
(2, 'HR'),
(11, 'IT'),
(16, 'pinki'),
(12, 'sd'),
(10, 'tech');

-- --------------------------------------------------------

--
-- Table structure for table `dms_remarks`
--

CREATE TABLE `dms_remarks` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `received_user` varchar(20) NOT NULL,
  `fileno` varchar(50) NOT NULL,
  `fid` int(20) NOT NULL,
  `doc_id` int(25) NOT NULL,
  `send_date` date NOT NULL,
  `add_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `status` int(20) NOT NULL,
  `f_userid` int(20) NOT NULL,
  `linkedfile` varchar(150) NOT NULL,
  `userremarks` varchar(100) NOT NULL,
  `doctype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dms_remarks`
--

INSERT INTO `dms_remarks` (`id`, `userid`, `username`, `received_user`, `fileno`, `fid`, `doc_id`, `send_date`, `add_date`, `remarks`, `status`, `f_userid`, `linkedfile`, `userremarks`, `doctype`) VALUES
(593, '2', 'admin', '', 'IRSDC/HQ/HR/E/309/CNT/07/CNT-0051/SITE ENGINEER', 1, 0, '2021-07-10', '0000-00-00', 'hmm', 1, 0, '', '', ''),
(616, '2', 'admin', '', 'IRSDC/HQ/HR/E/309/CNT/07/CNT-0051/SITE ENGINEER', 68, 0, '2021-07-10', '0000-00-00', 'noting 20', 1, 0, '', '', ''),
(617, '2', 'admin', '', '', 0, 0, '0000-00-00', '0000-00-00', '', 1, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dms_users`
--

CREATE TABLE `dms_users` (
  `userid` int(9) NOT NULL,
  `empcode` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `userlocation` varchar(20) NOT NULL,
  `userlevel` int(2) NOT NULL,
  `company` varchar(20) NOT NULL,
  `createdate` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` int(20) NOT NULL,
  `imeino` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dms_users`
--

INSERT INTO `dms_users` (`userid`, `empcode`, `username`, `department`, `userlocation`, `userlevel`, `company`, `createdate`, `password`, `phno`, `imeino`) VALUES
(1, 'U001', 'admin', 'admin', 'HQ', 5, '', '0000-00-00', '1234', 0, 0),
(2, 'U002', 'NOOR', 'HR', 'HQ', 0, '', '0000-00-00', '1234', 0, 0),
(3, 'U003', 'VARSHA', 'ACCOUNTS', 'HQ', 0, '', '0000-00-00', '1234', 0, 0),
(4, 'U004', 'Pinki', 'IT', 'Delhi', 0, 'Gits', '2021-08-31', '1234', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `login_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_files`
--

CREATE TABLE `receipt_files` (
  `dairyid` varchar(255) NOT NULL,
  `file_id` int(50) NOT NULL,
  `documentt` varchar(255) NOT NULL,
  `optt` varchar(255) NOT NULL,
  `classified` varchar(255) NOT NULL,
  `dlvmode` varchar(50) NOT NULL,
  `doctype` varchar(255) NOT NULL,
  `rdate` date NOT NULL,
  `edate` date NOT NULL,
  `Forwhom` varchar(50) NOT NULL,
  `customer` varchar(150) NOT NULL,
  `dairydepart` varchar(50) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `design` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `state` varchar(60) NOT NULL,
  `pincode` int(6) NOT NULL,
  `maincategory` varchar(60) NOT NULL,
  `subcategory` varchar(60) NOT NULL,
  `subject` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt_files`
--

INSERT INTO `receipt_files` (`dairyid`, `file_id`, `documentt`, `optt`, `classified`, `dlvmode`, `doctype`, `rdate`, `edate`, `Forwhom`, `customer`, `dairydepart`, `cus_name`, `design`, `email`, `mobile`, `state`, `pincode`, `maincategory`, `subcategory`, `subject`) VALUES
('', 0, 'E', 'Email', '', '', 'Letter', '2021-09-04', '0000-00-00', 'NOOR', '', '', '', '', '', 0, '', 0, '', '', ''),
('E-0000001', 0, 'Physical', 'Enveloper', 'Top Secret', '', '', '0000-00-00', '0000-00-00', '', '', '', 'VARSHA,U003', 'bgbg', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000002', 0, 'Physical', 'Enveloper', 'Secret', '', '', '0000-00-00', '0000-00-00', '', '', '', 'NOOR,U002', 'ghfdf', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000004', 0, 'Electronic', 'Email', 'Confidential', '', 'Letter', '0000-00-00', '0000-00-00', '', '', '', 'admin,U001', 'chfd', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000005', 0, 'Electronic', 'Email', 'Confidential', '', 'Letter', '0000-00-00', '0000-00-00', '', '', '', 'admin,U001', 'nb', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000006', 0, 'Electronic', '', 'Confidential', '', 'Letter', '0000-00-00', '0000-00-00', '', '', '', 'admin,U001', 'nb', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000007', 0, 'Electronic', 'Email', 'Secret', '', 'Letter', '0000-00-00', '0000-00-00', '', '', '', 'admin,U001', 'er', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000008', 0, 'Electronic', 'Email', 'Secret', '', 'Letter', '0000-00-00', '0000-00-00', '', '', '', 'VARSHA,U003', 'ghjgh', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000009', 0, 'Electronic', '', 'Secret', '', 'Letter', '0000-00-00', '0000-00-00', '', '', '', 'VARSHA,U003', 'ghjgh', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000010', 0, 'Electronic', 'Email', 'Secret', '', 'Letter', '0000-00-00', '2021-08-24', '', '', '', 'admin,U001', 'hgh', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000011', 0, 'Electronic', 'Email', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'f', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000012', 0, 'Electronic', 'Letter', 'Normal', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'wsd', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000013', 0, 'Physical', 'Enveloper', 'Secret', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'VARSHA,U003', 'aqwed', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000014', 0, 'Electronic', 'Letter', 'Normal', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'ds', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000015', 0, 'Physical', 'Enveloper', 'Normal', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'x', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000016', 0, 'Physical', 'Enveloper', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'VARSHA,U003', 'as', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000017', 0, 'Physical', 'Opendac', 'Confidential', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'sad', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000018', 0, 'Electronic', 'Email', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'sd', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000019', 0, 'Electronic', 'Letter', 'Confidential', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'df', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000020', 0, 'Physical', 'Enveloper', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'saadx', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000021', 0, 'Physical', 'Enveloper', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'wsd', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000022', 0, 'Physical', 'Enveloper', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'VARSHA,U003', 'ds', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000023', 0, 'Physical', 'Enveloper', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'asw', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000024', 0, 'Electronic', 'Letter', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'VARSHA,U003', 'as', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000025', 0, 'Electronic', 'Email', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'as', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000026', 0, 'Electronic', 'Letter', '', '', 'Letter', '0000-00-00', '2021-09-01', '', '', '', 'NOOR,U002', 'fgb', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000027', 0, '', 'Letter', 'Confidential', 'on', 'Letter', '0000-00-00', '2021-09-02', '', '', '', 'NOOR,U002', '', '', 0, '0000-00-00', 0, '', '', ''),
('E-0000028', 0, 'Electronic', 'Letter', '', 'on', 'Letter', '2021-09-02', '2021-09-02', '', 'CABINET SECRETARIAT', '', 'NOOR,U002', 'ws', 'Electronic', 0, '2021-09-02', 0, '', '', ''),
('E-0000029', 0, 'Physical', 'Enveloper', '', 'on', 'Letter', '2021-09-02', '2021-09-02', '', 'CABINET SECRETARIAT', '', 'NOOR,U002', '', 'Electronic', 0, '2021-09-02', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dms_docs`
--
ALTER TABLE `dms_docs`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `docno` (`docno`),
  ADD KEY `file_id` (`file_id`);

--
-- Indexes for table `dms_files`
--
ALTER TABLE `dms_files`
  ADD PRIMARY KEY (`file_id`),
  ADD UNIQUE KEY `fileno` (`fileno`);

--
-- Indexes for table `dms_param`
--
ALTER TABLE `dms_param`
  ADD PRIMARY KEY (`p_type`),
  ADD UNIQUE KEY `department` (`department`);

--
-- Indexes for table `dms_remarks`
--
ALTER TABLE `dms_remarks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `docno` (`fid`);

--
-- Indexes for table `dms_users`
--
ALTER TABLE `dms_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `receipt_files`
--
ALTER TABLE `receipt_files`
  ADD PRIMARY KEY (`dairyid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dms_docs`
--
ALTER TABLE `dms_docs`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1078;
--
-- AUTO_INCREMENT for table `dms_files`
--
ALTER TABLE `dms_files`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `dms_param`
--
ALTER TABLE `dms_param`
  MODIFY `p_type` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dms_remarks`
--
ALTER TABLE `dms_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=618;
--
-- AUTO_INCREMENT for table `dms_users`
--
ALTER TABLE `dms_users`
  MODIFY `userid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
