-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 01:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `archonsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`id`, `title`, `start`, `end`) VALUES
(11, 'holiday 1', '2016-05-18', '2016-05-18'),
(12, 'holiday 2', '2016-06-15', '2016-06-15'),
(13, 'holiday 2', '2016-06-16', '2016-06-16'),
(14, 'independance day', '2016-08-15', '2016-08-15'),
(15, 'Aravind Jayanthi', '2016-05-10', '2016-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE IF NOT EXISTS `holidays` (
`no` bigint(20) unsigned NOT NULL,
  `id` bigint(20) unsigned DEFAULT NULL,
  `holiday` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`no`, `id`, `holiday`) VALUES
(82, NULL, '2016-05-07'),
(83, NULL, '2016-05-21'),
(84, NULL, '2016-06-04'),
(85, NULL, '2016-06-18'),
(86, 11, '2016-05-18'),
(87, 12, '2016-06-15'),
(88, 13, '2016-06-16'),
(89, 14, '2016-08-15'),
(90, 15, '2016-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `leave_assign`
--

CREATE TABLE IF NOT EXISTS `leave_assign` (
`assign_id` bigint(20) unsigned NOT NULL,
  `p_l` int(11) NOT NULL,
  `c_l` int(11) NOT NULL,
  `e_l` int(15) NOT NULL,
  `m_l` int(15) NOT NULL,
  `pat_l` int(15) NOT NULL,
  `sab_l` int(15) NOT NULL,
  `l_o_p` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_assign`
--

INSERT INTO `leave_assign` (`assign_id`, `p_l`, `c_l`, `e_l`, `m_l`, `pat_l`, `sab_l`, `l_o_p`) VALUES
(1, 5, 5, 15, 84, 3, 365, 365);

-- --------------------------------------------------------

--
-- Table structure for table `leave_employee_new`
--

CREATE TABLE IF NOT EXISTS `leave_employee_new` (
`leave_id` bigint(20) unsigned NOT NULL,
  `emp_id` bigint(20) unsigned DEFAULT NULL,
  `assign_to` int(11) NOT NULL,
  `leave_type` varchar(256) DEFAULT NULL,
  `from_date` varchar(256) NOT NULL,
  `till` varchar(256) NOT NULL,
  `number_of_day` float NOT NULL,
  `purpose` varchar(256) DEFAULT NULL,
  `status` varchar(256) NOT NULL,
  `comment` varchar(256) DEFAULT NULL,
  `p_l` float NOT NULL,
  `c_l` float NOT NULL,
  `e_l` float NOT NULL,
  `m_l` float NOT NULL,
  `pat_l` float NOT NULL,
  `sab_l` float NOT NULL,
  `l_o_p` float NOT NULL,
  `pl_for_previous` float NOT NULL,
  `cl_for_previous` float NOT NULL,
  `el_for_previous` float NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_employee_new`
--

INSERT INTO `leave_employee_new` (`leave_id`, `emp_id`, `assign_to`, `leave_type`, `from_date`, `till`, `number_of_day`, `purpose`, `status`, `comment`, `p_l`, `c_l`, `e_l`, `m_l`, `pat_l`, `sab_l`, `l_o_p`, `pl_for_previous`, `cl_for_previous`, `el_for_previous`, `timestamp`) VALUES
(1, 2, 1, 'S. L.', '08-06-2016', '09-06-2016', 2, '', 'Approved', '', 3, 0, 31.25, 84, 3, 365, 365, 3, 0, 15, '2016-06-04 05:11:01'),
(2, 2, 1, 'C. L.', '05-06-2016', '09-06-2016', 5, '', 'Approved', '', 3, 0, 31.25, 84, 3, 365, 365, 3, 0, 15, '2016-06-04 05:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE IF NOT EXISTS `leave_type` (
`leave_type_id` bigint(20) unsigned NOT NULL,
  `type_name` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`leave_type_id`, `type_name`) VALUES
(1, 'S. L.'),
(2, 'C. L.'),
(3, 'E.L.'),
(4, 'M.L.'),
(5, 'P.L.'),
(6, 'Sab.L.'),
(7, 'L.O.P.');

-- --------------------------------------------------------

--
-- Table structure for table `total_carry_forward_with_assigned`
--

CREATE TABLE IF NOT EXISTS `total_carry_forward_with_assigned` (
`no` bigint(20) unsigned NOT NULL,
  `id` bigint(20) unsigned DEFAULT NULL,
  `total_days` float DEFAULT NULL,
  `forward` float DEFAULT NULL,
  `pl_remaining` float NOT NULL,
  `cl_remaining` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_activity`
--

CREATE TABLE IF NOT EXISTS `t_activity` (
`act_id` bigint(20) unsigned NOT NULL,
  `act_name` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_activity`
--

INSERT INTO `t_activity` (`act_id`, `act_name`) VALUES
(9, 'activity_1'),
(10, 'activity_2'),
(11, 'activity_3'),
(12, 'activity_5');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `admin_id` bigint(20) unsigned NOT NULL,
  `admin_username` varchar(256) NOT NULL,
  `admin_pword` varchar(256) NOT NULL,
  `priority_id` bigint(20) unsigned DEFAULT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_carry_forward`
--

CREATE TABLE IF NOT EXISTS `t_carry_forward` (
`no` bigint(20) unsigned NOT NULL,
  `id` bigint(20) unsigned DEFAULT NULL,
  `carry_forward_days` float DEFAULT NULL,
  `pl_remaining` float NOT NULL,
  `cl_remaining` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_dept`
--

CREATE TABLE IF NOT EXISTS `t_dept` (
  `no` bigint(20) unsigned NOT NULL,
  `dept_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dept`
--

INSERT INTO `t_dept` (`no`, `dept_name`) VALUES
(1, 'sales'),
(2, 'support'),
(3, 'marketing'),
(4, 'finance');

-- --------------------------------------------------------

--
-- Table structure for table `t_employee`
--

CREATE TABLE IF NOT EXISTS `t_employee` (
`emp_id` bigint(20) unsigned NOT NULL,
  `emp_code` varchar(255) NOT NULL,
  `title` varchar(10) NOT NULL,
  `emp_first_name` varchar(256) NOT NULL,
  `emp_middle_name` varchar(256) DEFAULT NULL,
  `emp_last_name` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `JoiningDate` varchar(256) NOT NULL,
  `dept_id` bigint(20) unsigned NOT NULL,
  `priority_id` bigint(20) unsigned DEFAULT NULL,
  `assign_to` bigint(20) unsigned DEFAULT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_employee`
--

INSERT INTO `t_employee` (`emp_id`, `emp_code`, `title`, `emp_first_name`, `emp_middle_name`, `emp_last_name`, `mobile`, `address`, `email`, `JoiningDate`, `dept_id`, `priority_id`, `assign_to`, `username`, `password`) VALUES
(1, 'AIT0001', 'mr', 'Sachin s', 'S', 'Rao', '8861223320', 'bangalore', 'sachin@archonit.in', '02-08-2010', 0, 4, 1, 'Arc_Sachin', 'c0e48adc07e3485370f8892ba538f3d6'),
(2, 'AIT0002', 'mr', 'Ramanujamm', 't', 'S', '0000000000', 'bangalore', 'ramanujan@archonit.in', '03-08-2010', 1, 5, 1, 'Arc_Ramanujam', 'c0e48adc07e3485370f8892ba538f3d6'),
(3, 'AIT0003', 'mr', 'Prakash', '', 'R', '0000000000', 'bangalore', 'prakash@archonit.in', '11-06-2012', 1, 5, 1, 'Arc_Prakash', 'c0e48adc07e3485370f8892ba538f3d6'),
(4, 'AIT0004', 'mr', 'Ravichandran', '', 'D', '0000000000', 'bangalore', 'ravi@archonit.in', '15-10-2014', 2, 5, 1, 'Arc_Ravichandran', 'c0e48adc07e3485370f8892ba538f3d6'),
(25, 'AIT0101', 'mr', 'Ashok', 'n', 'koli', '8877667879', 'ba', 'vijaynkhot@gmail.com', '12-01-2016', 1, 6, 2, 'Arc_Ashok', 'c0e48adc07e3485370f8892ba538f3d6'),
(26, 'AIT0102', 'Mr.', 'Vijay', 'N', 'khto', '7766554434', 'bangalore', 'vijaynkhot@gmail.com', '04-05-2016', 1, 6, 3, 'Arc_Vijay', 'c0e48adc07e3485370f8892ba538f3d6'),
(27, 'AIT103', 'mr', 'Raju', '', 'R', '8888888888', 'Bangalore', 'vijaynkhot@gmail.com', '25-04-2016', 1, 6, 1, 'Arc_Raju', 'c0e48adc07e3485370f8892ba538f3d6'),
(28, '56yt56', 'Mr.', 'vija', 'jh', 'jk', '8861223320', 'SD', 'vijaynkhot@gmail.com', '24-08-2016', 2, 4, 2, 'Arc_vija', 'cc338a99208e2f20bf601d32a6391a76');

-- --------------------------------------------------------

--
-- Table structure for table `t_evenement`
--

CREATE TABLE IF NOT EXISTS `t_evenement` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ex_employee`
--

CREATE TABLE IF NOT EXISTS `t_ex_employee` (
  `emp_id` bigint(20) unsigned NOT NULL,
  `emp_code` varchar(255) NOT NULL,
  `title` varchar(10) NOT NULL,
  `emp_first_name` varchar(256) NOT NULL,
  `emp_middle_name` varchar(256) DEFAULT NULL,
  `emp_last_name` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `JoiningDate` varchar(256) NOT NULL,
  `dept_id` bigint(20) unsigned NOT NULL,
  `priority_id` bigint(20) unsigned DEFAULT NULL,
  `assign_to` bigint(20) unsigned DEFAULT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ex_employee`
--

INSERT INTO `t_ex_employee` (`emp_id`, `emp_code`, `title`, `emp_first_name`, `emp_middle_name`, `emp_last_name`, `mobile`, `address`, `email`, `JoiningDate`, `dept_id`, `priority_id`, `assign_to`, `username`, `password`) VALUES
(5, 'AIT0007', 'mr', 'Rajesh', '', 'Ajjavara', '0000000000', 'bangalore', 'rajesh@archonit.in', '12-04-2016', 2, 6, 4, 'Arc_Rajesh', 'c0e48adc07e3485370f8892ba538f3d6'),
(6, 'AIT0008', 'mr', 'Loganathan', '', 'Kandasamy', '0000000000', 'bnaglore', 'vijaynkhot@gmail.com', '04-04-2016', 2, 6, 4, 'Arc_Loganathan', 'c0e48adc07e3485370f8892ba538f3d6'),
(7, 'AIT0012', 'Mr.', 'raju', 'b', 'na', '7766556677', 'na', 'vijaynkhot@gmail.com', '01-04-2016', 2, 5, 2, 'Arc_raju', 'c0e48adc07e3485370f8892ba538f3d6'),
(8, 'AIT0011', 'Mr.', 'rohit', '', 'patil', '7788665544', 'bangalore', 'vijaynkhot@gmail.com', '02-05-2016', 2, 5, 4, 'Arc_rohit', '1117fac002c381a2b9fa14ff8ef5a6ba'),
(9, 'AIT0013', 'Mr.', 'tanaji', '', 'khot', '7766556600', 'bangalre', 'vijaynkhot@gmail.com', '04-05-2016', 2, 6, 4, 'Arc_tanaji', '505cad42203765dffda652687aebcc47'),
(10, 'AIT0014', 'Mr.', 'navin', '', 'u', '8877667789', 'bangalore', 'vijaynkhot@gmail.com', '10-05-2016', 1, 6, 1, 'Arc_navin', 'e003bbd5308c4b39b025d443a3e463c4'),
(11, 'AIT0015', 'Mr.', 'sunilk', '', 'k', '8877665544', 'ba', 'vijaynkhot@gmail.com', '04-05-2016', 1, 6, 1, 'Arc_sunilk', '576722d826080fa5d30493aa535f3eb2'),
(12, 'jh', 'Mr.', 'g', 'g', 'g', '7766778878', 'b', 'vijaynkhot@gmail.com', '03-05-2016', 1, 7, 1, 'Arc_g', '405f92209d3d48f442c7861e3150c338'),
(13, 'asa', 'Mr.', 'sea', 's', 's', '3344554467', 'b', 'vijaynkhot@gmail.com', '03-05-2016', 1, 7, 1, 'Arc_sea', '792b7fc50d6f889a13ef02a122af0f7d'),
(14, 'hgfhfhgf', 'Mr.', 'sea', 's', 's', '3344554467', 'b', 'vijaynkhot@gmail.com', '03-05-2016', 1, 7, 1, 'Arc_sea', 'e6280bdf192865446af46cd4c70b85e6'),
(15, 'sds', 'Mr.', 'uu', 'huu', 'uh', '6677665567', 'v', 'vijaynkhot@gmail.com', '03-05-2016', 1, 7, 1, 'Arc_uu', '80e66c8eef9103b7808fc6ffdb69c1b4'),
(16, 'AIT021', 'Mr.', 'sa', 'd', 'der', '5566556677', 'b', 'vijaynkhot@gmail.com', '04-05-2016', 1, 6, 4, 'Arc_sa', '34dc64ef238b84fa0905ae163c60c3c8'),
(17, 'AIT0016', 'Mr.', 'q', 'w', 'e', '5544667766', 'b', 'vijaynkhot@gmail.com', '04-05-2016', 1, 7, 4, 'Arc_q', '955bb25dfae550ba70448aa8bdbdea3e'),
(18, 'AIT0023', 'mr', 'v', 'c', 'e', '4455665578', 'c', 'v@gmail.com', '05-05-2016', 1, 7, 1, 'Arc_v', '8df613ff3474040ab38130c7691de5ca'),
(19, 'ew', 'Mr.', 's', 'b', 'b', '7766886677', 'b', 'v@gmail.com', '04-05-2016', 2, 7, 4, 'Arc_s', 'f14ef011c658c45474e4d04563b58a43'),
(20, 'as', 'Mr.', 's', 'y', 'u', '7766556678', 'b', 'vijaynkhot@gmail.com', '05-05-2016', 1, 7, 3, 'Arc_s', '1c7ec87ea0fb42b4a8b1fcf3b5da7339'),
(21, 'aed', 'Mr.', 'n', 'h', 'j', '7766887780', 'b', 'khotvijayn@gmail.com', '05-05-2016', 1, 7, 2, 'Arc_n', '65bb245b65df72f7212ecd6928922080'),
(22, 'aaa', 'Mr.', 's', 'd', 'f', '4455665578', 'b', 'vijaynkhot@gmail.com', '05-05-2016', 1, 7, 4, 'Arc_s', 'c39f72d8cc88741dbbfd5293b0acdfea'),
(23, 'df', 'Mr.', 'h', 'h', 'h', '7766778879', 'b', 'vijaynkhot@gmail.com', '05-05-2016', 2, 7, 1, 'Arc_h', 'de3bec2f0afa13db2ebd87fe6dead0b9'),
(24, 'dre', 'Mr.', 'h', 'h', 'j', '8877665567', 'b', 'vijaynkhot@gmail.com', '04-05-2016', 1, 6, 1, 'Arc_h', '43d03dd1580598b13c113da51a5e3ebb');

-- --------------------------------------------------------

--
-- Table structure for table `t_manage_activity`
--

CREATE TABLE IF NOT EXISTS `t_manage_activity` (
`manage_act_id` bigint(20) unsigned NOT NULL,
  `act_id` bigint(20) unsigned DEFAULT NULL,
  `priority_id` bigint(20) unsigned DEFAULT NULL,
  `pri_id` bigint(20) unsigned DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_manage_activity`
--

INSERT INTO `t_manage_activity` (`manage_act_id`, `act_id`, `priority_id`, `pri_id`, `status`) VALUES
(22, 9, 7, 1, 1),
(23, 9, 7, 2, 1),
(131, 9, 4, 1, 1),
(132, 10, 4, 1, 1),
(133, 10, 4, 3, 1),
(134, 11, 4, 1, 1),
(135, 12, 4, 1, 1),
(136, 9, 6, 1, 1),
(137, 9, 6, 2, 1),
(138, 9, 6, 3, 1),
(139, 10, 6, 1, 1),
(140, 10, 6, 2, 1),
(141, 10, 6, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_priority_role`
--

CREATE TABLE IF NOT EXISTS `t_priority_role` (
`priority_id` bigint(20) unsigned NOT NULL,
  `role_name` varchar(256) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_priority_role`
--

INSERT INTO `t_priority_role` (`priority_id`, `role_name`, `created_on`) VALUES
(1, 'New Role', '0000-00-00 00:00:00'),
(4, 'CEO', '0000-00-00 00:00:00'),
(5, 'Manager', '0000-00-00 00:00:00'),
(6, 'L1_employee', '0000-00-00 00:00:00'),
(7, 'L2_employee', '0000-00-00 00:00:00'),
(8, 'lead', '0000-00-00 00:00:00'),
(10, 'demo_2', '0000-00-00 00:00:00'),
(11, 'demo_3', '0000-00-00 00:00:00'),
(12, 'sa', '0000-00-00 00:00:00'),
(13, 'role_ex', '0000-00-00 00:00:00'),
(14, 'ds', '0000-00-00 00:00:00'),
(15, 'sdad', '0000-00-00 00:00:00'),
(16, 'ds', '0000-00-00 00:00:00'),
(17, 'dfdgfdyty', '0000-00-00 00:00:00'),
(18, 'ar', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_privilage`
--

CREATE TABLE IF NOT EXISTS `t_privilage` (
  `pri_id` bigint(20) unsigned NOT NULL,
  `pri_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_privilage`
--

INSERT INTO `t_privilage` (`pri_id`, `pri_name`) VALUES
(1, 'View'),
(2, 'Edit'),
(3, 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email_admin` varchar(256) NOT NULL,
  `user_pword` varchar(256) NOT NULL,
  `user_priority` int(4) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email_admin`, `user_pword`, `user_priority`, `modified_on`, `created_on`) VALUES
(1, 'admin', 'khotvijayn@gmail.com', 'c0e48adc07e3485370f8892ba538f3d6', 1, '2015-05-17 00:00:00', '2015-05-17 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
 ADD UNIQUE KEY `no` (`no`), ADD KEY `id` (`id`);

--
-- Indexes for table `leave_assign`
--
ALTER TABLE `leave_assign`
 ADD PRIMARY KEY (`assign_id`), ADD UNIQUE KEY `assign_id` (`assign_id`);

--
-- Indexes for table `leave_employee_new`
--
ALTER TABLE `leave_employee_new`
 ADD PRIMARY KEY (`leave_id`), ADD UNIQUE KEY `leave_id` (`leave_id`), ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
 ADD PRIMARY KEY (`leave_type_id`), ADD UNIQUE KEY `leave_type_id` (`leave_type_id`);

--
-- Indexes for table `total_carry_forward_with_assigned`
--
ALTER TABLE `total_carry_forward_with_assigned`
 ADD UNIQUE KEY `no` (`no`), ADD KEY `id` (`id`);

--
-- Indexes for table `t_activity`
--
ALTER TABLE `t_activity`
 ADD PRIMARY KEY (`act_id`), ADD UNIQUE KEY `act_id` (`act_id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
 ADD PRIMARY KEY (`admin_id`), ADD UNIQUE KEY `admin_id` (`admin_id`), ADD KEY `priority_id` (`priority_id`);

--
-- Indexes for table `t_carry_forward`
--
ALTER TABLE `t_carry_forward`
 ADD UNIQUE KEY `no` (`no`), ADD KEY `id` (`id`);

--
-- Indexes for table `t_dept`
--
ALTER TABLE `t_dept`
 ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `t_employee`
--
ALTER TABLE `t_employee`
 ADD PRIMARY KEY (`emp_id`), ADD UNIQUE KEY `emp_id` (`emp_id`), ADD UNIQUE KEY `emp_code` (`emp_code`), ADD KEY `priority_id` (`priority_id`), ADD KEY `assign_to` (`assign_to`), ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `t_evenement`
--
ALTER TABLE `t_evenement`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `t_ex_employee`
--
ALTER TABLE `t_ex_employee`
 ADD PRIMARY KEY (`emp_id`), ADD UNIQUE KEY `emp_id` (`emp_id`), ADD UNIQUE KEY `emp_code` (`emp_code`), ADD KEY `priority_id` (`priority_id`), ADD KEY `assign_to` (`assign_to`), ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `t_manage_activity`
--
ALTER TABLE `t_manage_activity`
 ADD PRIMARY KEY (`manage_act_id`), ADD UNIQUE KEY `manage_act_id` (`manage_act_id`), ADD KEY `act_id` (`act_id`), ADD KEY `priority_id` (`priority_id`), ADD KEY `pri_id` (`pri_id`);

--
-- Indexes for table `t_priority_role`
--
ALTER TABLE `t_priority_role`
 ADD PRIMARY KEY (`priority_id`), ADD UNIQUE KEY `priority_id` (`priority_id`);

--
-- Indexes for table `t_privilage`
--
ALTER TABLE `t_privilage`
 ADD PRIMARY KEY (`pri_id`), ADD UNIQUE KEY `pri_id` (`pri_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
MODIFY `no` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `leave_assign`
--
ALTER TABLE `leave_assign`
MODIFY `assign_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leave_employee_new`
--
ALTER TABLE `leave_employee_new`
MODIFY `leave_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
MODIFY `leave_type_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `total_carry_forward_with_assigned`
--
ALTER TABLE `total_carry_forward_with_assigned`
MODIFY `no` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_activity`
--
ALTER TABLE `t_activity`
MODIFY `act_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_carry_forward`
--
ALTER TABLE `t_carry_forward`
MODIFY `no` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_employee`
--
ALTER TABLE `t_employee`
MODIFY `emp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_manage_activity`
--
ALTER TABLE `t_manage_activity`
MODIFY `manage_act_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `t_priority_role`
--
ALTER TABLE `t_priority_role`
MODIFY `priority_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
