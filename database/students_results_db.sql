-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2024 at 08:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_results_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tab`
--

CREATE TABLE `admin_tab` (
  `staff_id` int(100) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tab`
--

INSERT INTO `admin_tab` (`staff_id`, `staff_name`, `phone_no`, `staff_email`, `username`, `admin_password`) VALUES
(1, 'Rubanga Kene', '0398938', 'rubanga@gmail.com', 'solo', '123'),
(2, 'JOSEPHINE', '647736', 'jose@gmail.com', 'joselyne', '12345'),
(3, 'Ojiambo Bruno', '078364353', 'ojiambo@gmail.com', 'bruno', 'bruno20'),
(4, 'Otim Denis', '0783681', 'ot@gmail.com', 'timo', 'timo');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` int(5) NOT NULL,
  `math_f` int(5) DEFAULT NULL,
  `math_eoy` int(5) DEFAULT NULL,
  `math_t` varchar(5) DEFAULT NULL,
  `eng_f` int(5) DEFAULT NULL,
  `eng_eoy` int(5) DEFAULT NULL,
  `eng_t` varchar(5) DEFAULT NULL,
  `his_f` int(5) DEFAULT NULL,
  `his_eoy` int(5) DEFAULT NULL,
  `his_t` varchar(5) DEFAULT NULL,
  `geo_f` int(5) DEFAULT NULL,
  `geo_eoy` int(5) DEFAULT NULL,
  `geo_t` varchar(5) DEFAULT NULL,
  `phy_f` int(5) DEFAULT NULL,
  `phy_eoy` int(5) DEFAULT NULL,
  `phy_t` varchar(5) DEFAULT NULL,
  `chem_f` int(5) DEFAULT NULL,
  `chem_eoy` int(5) DEFAULT NULL,
  `chem_t` varchar(5) DEFAULT NULL,
  `bio_f` int(5) DEFAULT NULL,
  `bio_eoy` int(5) DEFAULT NULL,
  `bio_t` varchar(5) DEFAULT NULL,
  `ent_f` int(5) DEFAULT NULL,
  `ent_eoy` int(5) DEFAULT NULL,
  `ent_t` varchar(5) DEFAULT NULL,
  `cst_f` int(5) DEFAULT NULL,
  `cst_eoy` int(5) DEFAULT NULL,
  `cst_t` varchar(5) DEFAULT NULL,
  `pe_f` int(5) DEFAULT NULL,
  `pe_eoy` int(5) DEFAULT NULL,
  `pe_t` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `math_f`, `math_eoy`, `math_t`, `eng_f`, `eng_eoy`, `eng_t`, `his_f`, `his_eoy`, `his_t`, `geo_f`, `geo_eoy`, `geo_t`, `phy_f`, `phy_eoy`, `phy_t`, `chem_f`, `chem_eoy`, `chem_t`, `bio_f`, `bio_eoy`, `bio_t`, `ent_f`, `ent_eoy`, `ent_t`, `cst_f`, `cst_eoy`, `cst_t`, `pe_f`, `pe_eoy`, `pe_t`) VALUES
(4, 12, 70, 'AS', 10, 63, 'SZ', 15, 49, 'CZ', 15, 55, 'CB', 16, 72, 'NM', 11, 70, 'MK', 15, 78, 'NH', 18, 71, 'NM', 20, 67, 'LK', 12, 77, 'OJ'),
(12, 17, 70, 'OP', 16, 77, 'OJP', 15, 72, 'DS', 15, 60, 'NM', 16, 70, 'PD', 16, 45, 'WN', 18, 55, 'NM', 17, 60, 'BF', 20, 66, 'AV', 20, 80, 'WJ'),
(17, 12, 66, 'DK', 19, 76, 'HD', 17, 67, 'JH', 16, 66, 'HG', 14, 70, 'WS', 15, 75, 'HV', 13, 55, 'BV', 14, 77, 'NT', 17, 65, 'VF', 15, 66, 'WE'),
(18, 9, 30, 'NM', 6, 10, 'BN', 12, 60, 'KK', 16, 78, 'HJ', 12, 50, 'VC', 9, 55, 'DS', 10, 45, 'TF', 8, 60, 'UK', 8, 66, 'OK', 12, 76, 'AF'),
(22, 16, 70, 'DC', 14, 68, 'OB', 10, 55, 'PL', 12, 66, 'BG', 17, 75, 'UR', 18, 64, 'SO', 20, 59, 'LP', 15, 78, 'AH', 18, 68, 'RH', 20, 76, 'MC'),
(33, 22, 55, 'EF', 22, 66, 'RG', 22, 66, 'VG', 22, 66, 'BV', 22, 66, 'GG', 22, 66, 'TG', 22, 66, 'HG', 22, 66, 'VF', 25, 66, 'DF', 22, 66, 'VB'),
(35, 18, 70, 'SD', 16, 67, 'TH', 15, 72, 'GH', 14, 66, 'BV', 19, 75, 'HG', 10, 65, 'YJ', 16, 62, 'GT', 13, 77, 'DF', 16, 71, 'DA', 12, 71, 'AK'),
(36, 17, 49, 'AA', 12, 74, 'CV', 11, 57, 'BV', 10, 75, 'NM', 16, 67, 'OL', 20, 70, 'TG', 20, 64, 'GH', 20, 45, 'DS', 20, 55, 'VF', 20, 66, 'HG'),
(46, 20, 68, 'KL', 19, 30, 'ED', 10, 45, 'VF', 5, 22, 'BG', 12, 46, 'GH', 8, 40, 'JH', 16, 72, 'DFR', 12, 76, 'HJE', 10, 67, 'ASD', 20, 80, 'RR'),
(47, 16, 80, 'MM', 17, 73, 'NM', 15, 63, 'BN', 10, 55, 'VM', 15, 74, 'ED', 15, 65, 'OK', 15, 55, 'BV', 10, 55, 'BHD', 16, 40, 'OP', 10, 36, 'KL'),
(48, 12, 34, 'AS', 12, 65, 'CV', 10, 65, 'AD', 9, 54, 'FD', 20, 77, 'CV', 18, 32, 'CZ', 20, 45, 'AS', 13, 34, 'FD', 10, 65, 'CV', 20, 19, 'NB'),
(51, 18, 70, 'DE', 19, 74, 'SD', 18, 75, 'AE', 17, 72, 'TR', 17, 66, 'PN', 18, 64, 'TE', 16, 66, 'GF', 17, 77, 'KJ', 12, 70, 'VB', 16, 69, 'CF'),
(56, 12, 70, 'HF', 12, 66, 'JH', 12, 56, 'GH', 13, 55, 'HG', 12, 78, 'RG', 12, 65, 'HG', 14, 66, 'HG', 12, 78, 'GF', 14, 44, 'VF', 17, 55, 'GH'),
(57, 19, 79, 'OJ', 18, 68, 'GH', 20, 70, 'GB', 17, 58, 'DH', 2, 34, 'JN', 17, 78, 'KN', 20, 80, 'VF', 18, 65, 'NH', 13, 76, 'TG', 20, 80, 'JK');

-- --------------------------------------------------------

--
-- Table structure for table `student_tab`
--

CREATE TABLE `student_tab` (
  `student_id` int(255) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `student_sex` varchar(10) NOT NULL,
  `parent_contact` varchar(20) NOT NULL,
  `student_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_tab`
--

INSERT INTO `student_tab` (`student_id`, `student_name`, `class`, `DOB`, `student_sex`, `parent_contact`, `student_photo`) VALUES
(4, 'Akiki Shalom', 'S.1', '2006-11-24', 'M', '0789373793', 'images/IMG-20230717-WA0002.jpg'),
(5, 'Ssemanda James', 'S.1', '2007-11-20', 'M', '078354647', 'images/'),
(6, 'Nasiwa Debie', 'S.3', '2007-11-08', 'F', '074638354824', 'images/'),
(11, 'Mercy Blessing', 'S.4', '2003-11-09', 'F', '0947463', 'images/'),
(12, 'Muzaki Grace', 'S.2', '2007-11-08', 'F', '0879797979', 'images/'),
(15, 'Mausi Benjamin', 'S.1', '2001-11-01', 'M', '0324242511', 'images/'),
(16, 'Letaru Esther', 'S.1', '2004-10-04', 'M', '0768676977', 'images/'),
(17, 'Mumbejja Miriam', 'S.1', '1999-06-28', 'M', '0756445466', 'images/'),
(18, 'Ekidu Noah', 'S.1', '1997-09-03', 'M', '0788878889', 'images/'),
(19, 'Kitiibwa Mercy', 'S.1', '2002-09-09', 'M', '0755554644', 'images/'),
(21, 'Nandutu Brenda', 'S.1', '2006-02-01', 'M', '0785677697', 'images/'),
(22, 'Nabanoba Costa', 'S.1', '2004-10-08', 'M', '0724368725', 'images/'),
(23, 'Amentono Anna Lillian', 'S.2', '0005-04-23', 'F', '0700000879', 'images/'),
(24, 'Ebunyu Isaac', 'S.2', '1999-09-09', 'M', '0709078676', 'images/'),
(25, 'Muweesi Eddie', 'S.2', '1988-04-27', 'M', '0787968676', 'images/'),
(26, 'Namboozo Mary', 'S.2', '2000-03-12', 'F', '0766667878', 'images/'),
(27, 'Mugide Marion', 'S.2', '2007-05-27', 'F', '0768688968', 'images/'),
(28, 'Suubi Jeremiah', 'S.2', '2001-12-30', 'M', '0768554634', 'images/'),
(29, 'Sanyu Patience', 'S.4', '2003-12-03', 'F', '0706657456', 'images/'),
(30, 'Kyomuhendo Hadijah', 'S.4', '1999-11-22', 'F', '0744534231', 'images/'),
(31, 'Kwagala Jane', 'S.4', '2000-04-07', 'F', '0775677567', 'images/'),
(33, 'Kibet Jacob', 'S.4', '1999-12-14', 'M', '0788898076', 'images/'),
(34, 'kintu Isaac', 'S.3', '2000-09-30', 'M', '0755655575', 'images/'),
(35, 'Kirabo Yvonne', 'S.3', '2001-11-01', 'F', '0768665656', 'images/'),
(36, 'Arionget Irene', 'S.3', '2002-11-22', 'F', '0775656565', 'images/'),
(37, 'Nabirye Winnie', 'S.3', '1999-09-02', 'F', '0787906760', 'images/'),
(38, 'Omalut Henry', 'S.3', '1998-06-04', 'M', '0766765343', 'images/'),
(39, 'Othieno Emmanuel', 'S.3', '1999-08-04', 'M', '0766766768', 'images/'),
(40, 'Galandi Dennis', 'S.3', '2000-07-05', 'M', '0733323221', 'images/'),
(41, 'Olupot Naboth', 'S.3', '1997-05-06', 'M', '0711723432', 'images/'),
(42, 'Malinde Godwin Bright', 'S.3', '2006-11-10', 'M', '0701234566', 'images/'),
(44, 'Kizza Derick', 'S.2', '2006-11-23', 'M', '222332113', 'images/'),
(46, 'Ozitiru Josephine', 'S.4', '2000-11-14', 'F', '0783547352', 'images/'),
(47, 'Kirevu Benerd', 'S.2', '2002-01-01', 'M', '074863833', 'images/IMG-20230726-WA0005.jpg'),
(48, 'Abbo Grace Marion', 'S.1', '2000-02-12', 'M', '0786966567', 'images/'),
(50, 'Pokli Kenedy', 'S.1', '2024-01-11', 'M', '038028392', 'images/'),
(51, 'Nalweyiso Michelle', 'S.1', '0010-01-09', 'F', '0783089294', 'images/IMG-20230717-WA0002.jpg'),
(52, 'Akello Jane', 'S.2', '2024-01-04', 'F', '038392723', 'images/IMG-20230726-WA0029.jpg'),
(53, 'Just Testing', 'S.4', '2024-01-17', 'F', '94303820', 'images/IMG-20230801-WA0024.jpg'),
(54, 'Awillli Latifah', 'S.4', '2002-10-10', 'F', '0948937389', ''),
(55, 'Samalie Kigen', 'S.1', '2024-01-11', 'F', '084947383', 'images/solomon.jpeg'),
(56, 'Wanyenze Godfrey', 'S.4', '2024-02-23', 'M', '078638723', 'images/solomon.jpeg'),
(57, 'Kitibwa Grace', 'S.3', '2022-02-28', 'F', '0789374794', 'images/solomon.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_code` int(20) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `formative_mark` int(2) DEFAULT NULL,
  `eoy_mark` int(2) DEFAULT NULL,
  `total` int(3) DEFAULT NULL,
  `teacher_in` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_name`, `formative_mark`, `eoy_mark`, `total`, `teacher_in`) VALUES
(1, 'Mathematics', NULL, NULL, NULL, NULL),
(2, 'English', NULL, NULL, NULL, NULL),
(3, 'History', NULL, NULL, NULL, NULL),
(4, 'Geography', NULL, NULL, NULL, NULL),
(5, 'Physics', NULL, NULL, NULL, NULL),
(6, 'Chemistry', NULL, NULL, NULL, NULL),
(7, 'Biology', NULL, NULL, NULL, NULL),
(8, 'Entrepreneurship', NULL, NULL, NULL, NULL),
(9, 'Computer Studies', NULL, NULL, NULL, NULL),
(12, 'Physical Education', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tab`
--
ALTER TABLE `admin_tab`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_tab`
--
ALTER TABLE `student_tab`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tab`
--
ALTER TABLE `admin_tab`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_tab`
--
ALTER TABLE `student_tab`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_code` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_tab` (`student_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
