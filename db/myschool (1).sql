-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 04:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_student`
--

CREATE TABLE `all_student` (
  `id` int(11) NOT NULL,
  `application_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_student`
--

INSERT INTO `all_student` (`id`, `application_id`, `name`, `gmail`, `password`, `department`) VALUES
(1, 1, 'Akash', 'akash@gmail.com', '$2y$10$S.tTTbXjG6QrqS/mh..nUeV6mG/ccwsEQN6axqKEGOG5qDyMVs5JW', 'science'),
(2, 3, 'Rokon', 'rokon@gmail.com', '$2y$10$vGkMNiU0RcM7ZMV/ZE0xs.GgRRJusDU9HwiG2GHjTB2HCFWGS/AAa', 'science'),
(3, 5, 'Hamidul', 'hamid@gmail.com', '$2y$10$peY2HOzV6YWFwAOIpZ56yO1z7KPnamiN8a45xyy0sMqKPelAJBtUK', 'science'),
(4, 9, 'Abu Soheb', 'soheb@gmail.com', '$2y$10$EF6sr3jWBpIvha2GBHWjmePj/rR3RCtFMBRSE/0mGcGqxqT/bsptu', 'business'),
(5, 10, 'Siam Ahmed', 'siam@gmail.com', '$2y$10$PzZ4/McO6K2dhk2beidcveH5a9lTMs8es1ygbCSfqZ1Jpa6ee9z2m', 'humanitys'),
(6, 11, 'Rony Hasan', 'rony@gmail.com', '$2y$10$gFvDnlKuLIHvSiItGTe45.ub4X3gkgRhZYOfndSfwy3TLqgKSt5J6', 'humanitys'),
(7, 8, 'Arif Mahmud', 'arif@gmail.com', '$2y$10$VVWW/fp7vEl7cn1ffWfnv.kMJgiPwoWe6g9glqd9x0ysJF3EKsb76', 'humanitys'),
(8, 6, 'Hasan Mahmud', 'hasan@gmail.com', '$2y$10$97b40ZgU2fy3uHg2AlURr.wDL9rJ..Qm2.572aQQbt6CjFA3Wikga', 'business'),
(9, 7, 'Monalisha Islam', 'monalisha@gmail.com', '$2y$10$J7SsEJ3jYvf0ADKxQIVFyuiHmIc14CgZOBYtk8F7si5zbULVHFW2.', 'business');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `daily_status` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student_id`, `daily_status`, `date`) VALUES
(1, 10, 'Absent', '2023-12-04'),
(2, 9, 'Absent', '2023-12-04'),
(3, 5, 'Absent', '2023-12-04'),
(4, 3, 'Absent', '2023-12-04'),
(5, 1, 'Present', '2023-12-04'),
(6, 6, 'Present', '2023-12-04'),
(7, 7, 'Absent', '2023-12-04'),
(8, 11, 'Absent', '2023-12-04'),
(9, 8, 'Present', '2023-12-04'),
(10, 3, 'Absent', '2023-12-05'),
(11, 9, 'Present', '2023-12-05'),
(12, 1, 'Present', '2023-12-07'),
(13, 3, 'Present', '2023-12-07'),
(14, 5, 'Present', '2023-12-07'),
(15, 10, 'Absent', '2023-12-07'),
(16, 11, 'Present', '2023-12-07'),
(17, 8, 'Absent', '2023-12-07'),
(18, 9, 'Present', '2023-12-07'),
(19, 6, 'Present', '2023-12-07'),
(20, 7, 'Absent', '2023-12-07'),
(21, 1, 'Present', '2023-12-08'),
(22, 5, 'Present', '2023-12-08'),
(23, 3, 'Present', '2023-12-08'),
(24, 9, 'Absent', '2023-12-08'),
(25, 6, 'Present', '2023-12-08'),
(26, 7, 'Present', '2023-12-08'),
(27, 8, 'Present', '2023-12-08'),
(28, 10, 'Absent', '2023-12-08'),
(29, 11, 'Present', '2023-12-08'),
(30, 1, 'Present', '2023-12-09'),
(31, 3, 'Present', '2023-12-09'),
(32, 5, 'Present', '2023-12-09'),
(33, 9, 'Present', '2023-12-09'),
(34, 6, 'Present', '2023-12-09'),
(35, 7, 'Present', '2023-12-09'),
(36, 10, 'Present', '2023-12-09'),
(37, 11, 'Present', '2023-12-09'),
(38, 8, 'Present', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `days` varchar(20) DEFAULT NULL,
  `firstTeacher` varchar(20) NOT NULL,
  `seconTeacher` varchar(20) NOT NULL,
  `thirdTeacher` varchar(20) NOT NULL,
  `fourthTeacher` varchar(20) NOT NULL,
  `fivthTeacher` varchar(20) NOT NULL,
  `sixTeacher` varchar(20) NOT NULL,
  `firstSubject` varchar(20) NOT NULL,
  `secondSubject` varchar(20) NOT NULL,
  `thirdSubject` varchar(20) NOT NULL,
  `fourthSubject` varchar(20) NOT NULL,
  `fivthSubject` varchar(20) NOT NULL,
  `sixSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`) VALUES
(1, 'science'),
(2, 'business'),
(3, 'humanitys'),
(4, 'non-tech');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `folder_name` varchar(500) NOT NULL,
  `file_size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `file_name`, `folder_name`, `file_size`) VALUES
(1, 0, 'OIP (4).jpeg', 'photoGallery/', '12426'),
(2, 0, 'OIP (6).jpeg', 'photoGallery/', '12946'),
(3, 0, 'OIP (3).jpeg', 'photoGallery/', '20210'),
(4, 0, 'OIP.jpeg', 'photoGallery/', '17468'),
(5, 0, 'OIP (1).jpeg', 'photoGallery/', '11697'),
(6, 0, 'OIP (2).jpeg', 'photoGallery/', '12470'),
(7, 0, 'OIP (5).jpeg', 'photoGallery/', '13099'),
(8, 0, 'OIP (8).jpeg', 'photoGallery/', '14156'),
(9, 0, 'OIP (7).jpeg', 'photoGallery/', '12485'),
(10, 0, 'download (7).jpeg', 'photoGallery/', '14324'),
(11, 0, 'OIP (9).jpeg', 'photoGallery/', '21029'),
(12, 0, 'OIP (10).jpeg', 'photoGallery/', '20299');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `bangla` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `math` int(3) NOT NULL,
  `phyORaccoutORhist` int(3) NOT NULL,
  `bioORfinanORsoci` int(3) NOT NULL,
  `chemiORechoORgeo` int(3) NOT NULL,
  `fourth_sub` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `banglaGrade` varchar(10) NOT NULL,
  `englishGrade` varchar(10) NOT NULL,
  `mathGrade` varchar(10) NOT NULL,
  `phyORaccORhisGrade` varchar(10) NOT NULL,
  `bioORfinanORsociGrade` varchar(10) NOT NULL,
  `cheORechoORgeoGrade` varchar(10) NOT NULL,
  `fourthGrade` varchar(10) NOT NULL,
  `banglaPoint` float NOT NULL,
  `englishPoint` float NOT NULL,
  `mathPoint` float NOT NULL,
  `phyORaccORhisPoint` float NOT NULL,
  `bioORfinanORsociPoint` float NOT NULL,
  `cheORechoORgeoPoint` float NOT NULL,
  `fourthPoint` float NOT NULL,
  `withOutFouthTotalPoint` float NOT NULL,
  `GPAwithOutFourth` float NOT NULL,
  `totalPoint` float NOT NULL,
  `totalGPA` float NOT NULL,
  `avgGrade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `student_id`, `bangla`, `english`, `math`, `phyORaccoutORhist`, `bioORfinanORsoci`, `chemiORechoORgeo`, `fourth_sub`, `total`, `banglaGrade`, `englishGrade`, `mathGrade`, `phyORaccORhisGrade`, `bioORfinanORsociGrade`, `cheORechoORgeoGrade`, `fourthGrade`, `banglaPoint`, `englishPoint`, `mathPoint`, `phyORaccORhisPoint`, `bioORfinanORsociPoint`, `cheORechoORgeoPoint`, `fourthPoint`, `withOutFouthTotalPoint`, `GPAwithOutFourth`, `totalPoint`, `totalGPA`, `avgGrade`) VALUES
(13, 6, 45, 85, 85, 75, 71, 85, 75, 446, 'C', 'A+', 'A+', 'A', 'A', 'A+', 'A', 2, 5, 5, 4, 4, 5, 4, 25, 4.16667, 29, 4.5, 'A'),
(14, 7, 78, 80, 98, 95, 91, 92, 90, 534, 'A', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 4, 5, 5, 5, 5, 5, 5, 29, 4.83333, 34, 5.33333, 'A+'),
(15, 1, 66, 75, 84, 91, 45, 75, 97, 436, 'A-', 'A', 'A+', 'A+', 'C', 'A', 'A+', 3.5, 4, 5, 5, 2, 4, 5, 23.5, 3.91667, 28.5, 4.41667, 'A'),
(16, 3, 32, 66, 75, 75, 84, 96, 86, 428, 'F', 'A-', 'A', 'A', 'A+', 'A+', 'A+', 0, 3.5, 4, 4, 5, 5, 5, 21.5, 3.58333, 0, 0, 'F'),
(17, 9, 91, 82, 80, 69, 75, 80, 75, 477, 'A+', 'A+', 'A+', 'A-', 'A', 'A+', 'A', 5, 5, 5, 3.5, 4, 5, 4, 27.5, 4.58333, 31.5, 4.91667, 'A'),
(18, 5, 66, 54, 78, 75, 98, 78, 80, 449, 'A-', 'B', 'A', 'A', 'A+', 'A', 'A+', 3.5, 3, 4, 4, 5, 4, 5, 23.5, 3.91667, 28.5, 4.41667, 'A'),
(19, 8, 12, 70, 58, 54, 95, 96, 95, 385, 'F', 'A', 'B', 'B', 'A+', 'A+', 'A+', 0, 4, 3, 3, 5, 5, 5, 20, 3.33333, 0, 0, 'F'),
(20, 10, 65, 58, 70, 95, 95, 80, 80, 463, 'A-', 'B', 'A', 'A+', 'A+', 'A+', 'A+', 3.5, 3, 4, 5, 5, 5, 5, 25.5, 4.25, 30.5, 4.75, 'A'),
(21, 11, 65, 58, 96, 54, 57, 94, 65, 424, 'A-', 'B', 'A+', 'B', 'B', 'A+', 'A-', 3.5, 3, 5, 3, 3, 5, 3.5, 22.5, 3.75, 26, 4, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL,
  `notice_subject` text NOT NULL,
  `notice_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`notice_id`, `notice_subject`, `notice_desc`) VALUES
(1, 'Victory Day', 'Victory Day (Bengali: বিজয় দিবস Bijôy Dibôsh) is a national holiday in Bangladesh celebrated on 16 December\r\nSo This day is Holiday in Bangladesh'),
(2, 'Victory Day', 'Victory Day (Bengali: বিজয় দিবস Bijôy Dibôsh) is a national holiday in Bangladesh celebrated on 16 December .\r\n\r\nSo This day is Holiday in Bangladesh'),
(3, 'Victory Day', 'Victory Day (Bengali: বিজয় দিবস Bijôy Dibôsh) is a national holiday in Bangladesh celebrated on 16 December.\r\nSo This day is Holiday in Bangladesh'),
(4, 'Holiday', '12/12/2023 is Holiday');

-- --------------------------------------------------------

--
-- Table structure for table `onlineformdata`
--

CREATE TABLE `onlineformdata` (
  `id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nidno` int(20) NOT NULL,
  `past_school` varchar(50) NOT NULL,
  `passing_year` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `choice_department` varchar(30) NOT NULL,
  `contact` int(50) NOT NULL,
  `last_gpa` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `photo_folder` varchar(50) NOT NULL,
  `photo_rename` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `marrital_status` varchar(20) NOT NULL,
  `hometown` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `OTP` varchar(200) NOT NULL,
  `status` enum('pending','admitted','','') NOT NULL DEFAULT 'pending',
  `application_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlineformdata`
--

INSERT INTO `onlineformdata` (`id`, `student_name`, `father_name`, `mother_name`, `birthday`, `gender`, `nidno`, `past_school`, `passing_year`, `blood`, `choice_department`, `contact`, `last_gpa`, `religion`, `photo_folder`, `photo_rename`, `country`, `marrital_status`, `hometown`, `email`, `OTP`, `status`, `application_date`) VALUES
(1, 'AkashChowdhury', ' Ahmed Shehzad', 'Sanzana Sarker', '2000-01-10', 'male', 548521548, 'Rangpur Cant Public', '2020', 'AB+', 'science', 1478523698, '4.69', 'Islam', 'studentIMG/', 'teach.png', 'Bangladesh', 'single', 'Rangpur', 'akash@gmail.com', '7957182a4f2f4e7d4ef789460ed3ff10', 'admitted', '2023-11-30 02:01:49'),
(3, 'Rokon Hasan', ' Abdur Rahim', 'Rahima Begum', '2000-07-10', 'male', 2147483647, 'Rangpur Technical School', '2021', 'AB+', 'humanitys', 2147483647, '4.72', 'Islam', 'studentIMG/', 'rokon.png', 'Bangladesh', 'single', 'Rangpur', 'rokon@gmail.com', '37c6af617befdefcb1747bfc284705a9', 'admitted', '2023-12-08 04:58:16'),
(5, 'Hamid Ahmed', ' Helal Uddin', 'Halima Begum', '2001-01-11', 'male', 2147483647, 'Dhaka College', '2021', 'B+', 'science', 2147483647, '4.75', 'Islam', 'studentIMG/', 'male22.jpg', 'Bangladesh', 'single', 'Dhaka', 'hamid@gmail.com', '800f658a99ddd3b4f11d7a04a5d8ab0f', 'admitted', '2023-11-30 02:50:39'),
(6, 'Hasan  Mahmud', ' Mohammad Usuf', 'Aklima Khatun', '2001-11-14', 'male', 2147483647, 'Charmichael College', '2021', 'AB+', 'business', 154862596, '4.90', 'Islam', 'studentIMG/', 'hasan.png', 'Bangladesh', 'single', 'Rangpur', 'hasan@gmail.com', '7fd97a01b2a7c56ee828c7fdfe02a624', 'admitted', '2023-12-03 02:42:37'),
(7, 'Monalisha Akther', ' Mosiur Rahman', 'Marjina Begum', '2002-11-02', 'female', 2147483647, 'Rangpur Cant Public', '2021', 'O+', 'business', 1548625965, '4.55', 'Islam', 'studentIMG/', 'monalisa.jpeg', 'Bangladesh', 'single', 'Rangpur', 'monalisha@gmail.com', '7cb68d65fa885b81f44d37abffed89db', 'admitted', '2023-12-03 02:42:37'),
(8, 'Arif Mahmud', ' Rabiul Haque', 'Rita Begum', '2000-11-03', 'male', 2147483647, 'Rangpur City College', '2020', 'O+', 'humanitys', 1548625965, '4.72', 'Islam', 'studentIMG/', 'arif.png', 'Bangladesh', 'single', 'Rangpur', 'arif@gmail.com', '76eee41024bc610b133db26c16b48db9', 'admitted', '2023-12-03 02:40:33'),
(9, 'Abu    Soheb', ' Moksedul Islam', 'Abuna Begum', '2002-12-01', 'male', 452365148, 'Rangpur Technical School', '2020', 'O+', 'business', 1548484848, '4.80', 'Islam', 'studentIMG/', 'download (3).jpeg', 'Bangladesh', 'single', 'Rangpur', 'soheb123@gmail.com', '7d7b8c80e554dd985c6dd8732f856a3e', 'admitted', '2023-12-09 01:36:04'),
(10, 'Siam  Ahmed', ' Momidul Islam', 'Lavly Begum', '2006-11-30', 'male', 2147483647, 'Rangpur City College', '2021', 'AB-', 'humanitys', 1548625963, '4.72', 'Islam', 'studentIMG/', 'siam.jpg', 'Bangladesh', 'single', 'Rangpur', 'siam@gmail.com', '2d0c053d013105c3d03625b424d0488e', 'admitted', '2023-12-03 03:06:03'),
(11, 'Rony Hasan', ' Jalil Ahmed', 'Renu Begum', '2000-12-01', 'male', 152463551, 'Charmichael College', '2021', 'O+', 'humanitys', 2147483647, '4.69', 'Islam', 'studentIMG/', 'rony.jpg', 'Bangladesh', 'single', 'Rangpur', 'rony@gmail.com', 'd880293af016156a09d92ce2e6f1a352', 'admitted', '2023-12-03 03:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `voucher_no` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `fee_reason` varchar(30) NOT NULL,
  `total_fee` varchar(10) NOT NULL DEFAULT '10000',
  `payment_ammount` int(20) NOT NULL,
  `total_pay` varchar(20) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_methode` varchar(20) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `current_due` varchar(20) NOT NULL,
  `payment_status` enum('pending','paid','','') NOT NULL DEFAULT 'pending',
  `accepting_date` varchar(100) NOT NULL,
  `accpt_date` varchar(20) NOT NULL,
  `today_collection` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`voucher_no`, `student_id`, `name`, `gmail`, `fee_reason`, `total_fee`, `payment_ammount`, `total_pay`, `payment_date`, `payment_methode`, `account_no`, `current_due`, `payment_status`, `accepting_date`, `accpt_date`, `today_collection`) VALUES
(1, 3, 'Rokon Hasan', 'rokon@gmail.com', 'tution fee', '10000', 500, '500', '2023-12-05 00:48:49', 'bkash', '450', '29500', 'pending', '', '', 0),
(2, 9, 'Abu    Soheb', 'soheb@gmail.com', 'registration fee', '10000', 500, '500', '2023-12-07 14:01:46', 'rocket', '0154145754', '29500', 'paid', '2023-12-07 08:01:46pm', '2023-12-07', 0),
(3, 5, 'Hamid Ahmed', 'hamid@gmail.com', 'registration fee', '10000', 1000, '1000', '2023-12-08 02:03:54', 'Nagad', '0154852658', '9000', 'paid', '2023-12-08 08:03:54am', '2023-12-08', 0),
(4, 5, 'Hamid Ahmed', 'hamid@gmail.com', 'registration fee', '10000', 1000, '2000', '2023-12-08 02:03:41', 'Nagad', '0154852658', '28000', 'pending', '', '', 0),
(5, 1, 'AkashChowdhury', 'akash@gmail.com', 'admission fee', '10000', 950, '950', '2023-12-08 02:04:44', 'Bkash', '0154145754', '29050', 'paid', '2023-12-08 08:04:44am', '2023-12-08', 0),
(6, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '1000', '2023-12-08 14:18:20', 'bkash', '01541655511', '29000', 'paid', '2023-12-08 08:18:20pm', '2023-12-08', 0),
(7, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '1500', '2023-12-08 02:25:22', 'bkash', '01541655511', '28500', 'pending', '', '', 0),
(8, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '2000', '2023-12-08 02:25:26', 'bkash', '01541655511', '28000', 'pending', '', '', 0),
(9, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '2500', '2023-12-09 01:51:51', 'bkash', '01541655511', '27500', 'paid', '2023-12-09 07:51:51am', '2023-12-09', 0),
(10, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '3000', '2023-12-09 01:51:52', 'bkash', '01541655511', '27000', 'paid', '2023-12-09 07:51:52am', '2023-12-09', 0),
(11, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '3500', '2023-12-09 01:51:52', 'bkash', '01541655511', '26500', 'paid', '2023-12-09 07:51:52am', '2023-12-09', 0),
(12, 9, 'Abu    Soheb', 'soheb@gmail.com', 'monthly fee', '10000', 500, '4000', '2023-12-08 02:27:42', 'bkash', '01541655511', '26000', 'pending', '', '', 0),
(13, 9, 'Abu    Soheb', 'soheb@gmail.com', 'registration fee', '10000', 500, '4500', '2023-12-09 01:51:54', 'bkash', '01541', '25500', 'paid', '2023-12-09 07:51:54am', '2023-12-09', 0),
(14, 9, 'Abu    Soheb', 'soheb@gmail.com', 'registration fee', '10000', 500, '5000', '2023-12-08 02:29:21', 'bkash', '01541', '25000', 'pending', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salarysheet`
--

CREATE TABLE `salarysheet` (
  `id` int(11) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `basic` int(20) NOT NULL,
  `houserent` int(10) NOT NULL,
  `medical` int(10) NOT NULL,
  `coveyance` int(10) NOT NULL,
  `bonus` int(10) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salarysheet`
--

INSERT INTO `salarysheet` (`id`, `teacher_id`, `basic`, `houserent`, `medical`, `coveyance`, `bonus`, `total`) VALUES
(1, 1, 1542, 3123, 1313, 6221, 3123, 15322),
(2, 3, 12000, 4545, 7540, 1000, 4510, 29595);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  `dept_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `dept_id`) VALUES
(1, 'Sociology', 3),
(2, 'Bangla', 4),
(3, 'English', 4),
(4, 'Math', 4),
(5, 'Physics', 1),
(6, 'Chemistry', 1),
(7, 'Biology', 1),
(8, 'Higher Math', 1),
(9, 'Agricultural', 4),
(10, 'Health Stadis', 4),
(11, 'Social Science', 4),
(12, 'Accounting', 2),
(13, 'Finance', 2),
(14, 'History', 3),
(15, 'Geography', 3),
(16, 'municipal policy', 3),
(17, 'Religion', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_regi`
--

CREATE TABLE `teacher_regi` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_gmail` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `teacher_nid` int(20) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `photo_folder` varchar(30) NOT NULL,
  `photo_rename` varchar(50) NOT NULL,
  `status` enum('pending','active','','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_regi`
--

INSERT INTO `teacher_regi` (`id`, `teacher_name`, `teacher_gmail`, `contact`, `teacher_nid`, `birthday`, `gender`, `designation`, `department`, `subject`, `photo_folder`, `photo_rename`, `status`) VALUES
(1, 'Ashraf Khandakar', 'ashraf@gmail.com', '015482154822', 215485115, '1991-11-11', 'Male', 'senior teacher', '2', '2', 'teacheIMG/', 't3.jpg', 'active'),
(3, 'Jobnob Chowdhury', 'joynob123@gmail.com', '01548552548', 2147483647, '1996-11-14', 'Female', 'junior teacher', '4', '4', 'teacheIMG/', 'female2.jpg', 'active'),
(5, 'Mostakin Islam', 'mostakin@gmail.com', '01548521547', 2147483647, '1994-10-31', 'Male', 'senior teacher', '2', '2', 'teacheIMG/', 'mostakin.png', 'active'),
(6, 'Nabila Binte Rahman', 'nabila@gmail.com', '01548625963', 2147483647, '1993-11-15', 'Male', 'junior teacher', '2', '2', 'teacheIMG/', 'sumiya.png', 'active'),
(7, 'Rokeya Rahman', 'rokeya@gmail.com', '017548625963', 2147483647, '1991-11-22', 'Female', 'senior teacher', '1', '1', 'teacheIMG/', 'rokeya.png', 'pending'),
(8, 'Shishir Ahmed', 'shishir@gmail.com', '015486259632', 2147483647, '1996-11-09', 'Male', 'junior teacher', '3', '3', 'teacheIMG/', 'shishirahmed.png', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_student`
--
ALTER TABLE `all_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `onlineformdata`
--
ALTER TABLE `onlineformdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`voucher_no`);

--
-- Indexes for table `salarysheet`
--
ALTER TABLE `salarysheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_regi`
--
ALTER TABLE `teacher_regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_student`
--
ALTER TABLE `all_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `class_schedule`
--
ALTER TABLE `class_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `onlineformdata`
--
ALTER TABLE `onlineformdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `voucher_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `salarysheet`
--
ALTER TABLE `salarysheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher_regi`
--
ALTER TABLE `teacher_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
