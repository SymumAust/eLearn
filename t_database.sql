-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 06, 2022 at 07:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_show`
--

CREATE TABLE `card_show` (
  `id` int(100) NOT NULL,
  `domain_name` text NOT NULL,
  `sub_domain_name` text NOT NULL,
  `topic_text_title` text NOT NULL,
  `text_off_topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_show`
--

INSERT INTO `card_show` (`id`, `domain_name`, `sub_domain_name`, `topic_text_title`, `text_off_topic`) VALUES
(1, 'hello', 'it\'s my city', 'it is a card', 'life is good');

-- --------------------------------------------------------

--
-- Table structure for table `carsoul`
--

CREATE TABLE `carsoul` (
  `id` int(100) NOT NULL,
  `linkImage` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carsoul`
--

INSERT INTO `carsoul` (`id`, `linkImage`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `carsoul_link`
--

CREATE TABLE `carsoul_link` (
  `id` int(100) NOT NULL,
  `linkImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carsoul_link`
--

INSERT INTO `carsoul_link` (`id`, `linkImage`) VALUES
(1, 'C:\\xampp\\htdocs\\Project_eLearn\\eLearn\\images\\carsoul_image\\image1.jpg'),
(2, 'C:\\xampp\\htdocs\\Project_eLearn\\eLearn\\images\\carsoul_image\\image2.jpg'),
(3, 'images/carsoul_image/image2.jpg'),
(4, 'images/carsoul_image/image1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` int(11) NOT NULL,
  `Email` int(11) NOT NULL,
  `Subject` int(11) NOT NULL,
  `Message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES
(0, 0, 0, 0),
(0, 0, 0, 0),
(0, 0, 0, 0),
(0, 0, 0, 0),
(0, 0, 0, 0),
(0, 0, 0, 0),
(0, 0, 0, 0),
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Symum', '190204105@aust.edu', 'Software', 'Please Update'),
('Symum', '190204105@aust.edu', 'Software', 'Please Update'),
('Md. Symum Hossain', '190204105@aust.edu', 'n/a', 'n/a'),
('eLearn', 'elarncommunity2022@gmail.com', 'Problems of Software', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `header1` text NOT NULL,
  `subHeader` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `c_id` int(200) NOT NULL,
  `imageFile` text NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `price` decimal(60,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`c_id`, `imageFile`, `title`, `details`, `price`) VALUES
(1, '1.png', 'JavaScript for Beginners', 'Learn javascript online and supercharge your web design with this Javascript for beginners training course.', '29'),
(2, '2.png', ' Introduction to Web Development', 'Are you Interested in Learning Web Development? Enroll in this Free course for a Dynamic Introduction to the Profession!', '49'),
(3, '3.jpg', 'Learn Microsoft Excel 2013-Advanced', 'Insider Method: Learn Advanced Techniques for Microsoft Excel 2013 Fast - Without Lectures, Books, or Night Classes', '9'),
(4, '4.png', 'Learn Python', 'Python For Beginners : This course is meant for absolute beginners in programming or in python. It\'s valuable', '39'),
(5, '5.png', 'Data Analysis', 'Business Analytics will help demystify data and strengthen your analytical skills.', '49'),
(6, '6.png', 'Organize leadership', 'Learn how to set and communicate direction, influence through other managers.', '29'),
(7, '7.jpg', ' Design Thinkiing and Innovation', 'Uncover innovation solution to your most challenging business problems.', '49'),
(8, '8.jpeg', 'Sustainable Business Strategy', 'Develop the tools and techniques to become a purpose-driven business.', '89'),
(9, '9.jpg', ' Financial Accounting and Economics', 'Discover what\'s behind the numbers in financial statements', '9'),
(10, 'headC.jpeg', 'Learn Computing', 'Computer is a big industry. Learn and achieve your Success. Computer Engineers are the best in world.', '78');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(200) NOT NULL,
  `imageFile` text NOT NULL,
  `name` text NOT NULL,
  `occupation` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `imageFile`, `name`, `occupation`, `details`) VALUES
(1, 'member2.jpg', 'Marzia Binta Monir', 'Student, Aust CSE', '@eLearn is a very good platform. It helps me lot to enrich my skills. I completed two courses with elearn.'),
(4, 'apu.jpg', 'Marshia Mahzabin', 'Student, AUST CSE', 'eLearn is very helpful towards students. I appreciate their work lot.'),
(5, 'Symum.jpg', 'Md. Symum Hossain', 'Student, CSE, AUST', 'eLearn is one of the best platform to the global universe. Hope they will continue their journey to help the students.'),
(6, 'peter-jones-WZROBIlY8Rg-unsplash.jpg', 'Peter Johns', 'IBM, London', 'elearn is a leading platform. I support their work'),
(7, '044.jpg', 'Rozario Arnold', 'Businessman', 'The platform is very good to learn new stuffs everyday. Thanks to @eLearn');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lession_details` text NOT NULL,
  `c_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lession_details`, `c_id`) VALUES
(2, 'Introduction 6', 'v.mp4', 6),
(4, 'Introduction', 'rain.mp4', 9),
(5, 'Learn Under 12 minute', 'w.mp4', 6),
(6, 'Learn', 'w.mp4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lesson2`
--

CREATE TABLE `lesson2` (
  `lesson_id` int(11) NOT NULL,
  `lesson_details` int(11) NOT NULL,
  `lesson_name` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_course_table`
--

CREATE TABLE `m_course_table` (
  `m_course_id` int(100) NOT NULL,
  `email` text NOT NULL,
  `temp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_course_table`
--

INSERT INTO `m_course_table` (`m_course_id`, `email`, `temp`) VALUES
(0, '190204105@aust.edu', 0),
(0, '190204105@aust.edu', 0),
(9, '190204105@aust.edu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_table`
--

CREATE TABLE `m_table` (
  `m_id` int(200) NOT NULL,
  `email` text NOT NULL,
  `temp` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_table`
--

INSERT INTO `m_table` (`m_id`, `email`, `temp`, `price`) VALUES
(6, 'symumhossain1@gmail.com', 1, 0),
(6, '190204105@aust.edu', 3, 0),
(1, '190204105@aust.edu', 4, 0),
(9, '190204105@aust.edu', 5, 0),
(5, '190204105@aust.edu', 6, 0),
(3, 'symumhossain1@gmail.com', 7, 0),
(2, '190204105@aust.edu', 8, 0),
(4, 'symumhossain1@gmail.com', 9, 39),
(7, '190204105@aust.edu', 10, 49);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `name`, `email`, `price`) VALUES
(1, 'symum', '190204105@aust.edu', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userimage`
--

CREATE TABLE `userimage` (
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userimage`
--

INSERT INTO `userimage` (`image`) VALUES
('044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL,
  `imageUser` text NOT NULL,
  `stat` int(20) NOT NULL,
  `login_status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `password`, `email`, `Status`, `imageUser`, `stat`, `login_status`) VALUES
(25, 'Symum', '$2y$10$M2o3g0JXCMONyFhUjpZY4O2s8wmzPpRTKx1qVq9Wyzl6CWN.1PM0i', 'symumhossain1@gmail.com', 1, '3.jpg', 0, 0),
(26, 'symumAUST', '$2y$10$votXqnMxbRq3nwaXdMzkoON7et1dU44SLYo1RNHwzh0uquoXyyaMO', '190204105@aust.edu', 1, '3.jpg', 0, 0),
(100, 'admin', 'admin', '2022', 1, '3.jpg', 0, 0),
(101, 'symumBANGLADESH', '$2y$10$N9HhK25ZGGMIiPuuW5kSguRqDG0GOYFevE8KVBPUGm9RX3pdbxpgm', 'symum952000@gmail.com', 1, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`c_id`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `course_id` (`c_id`);

--
-- Indexes for table `lesson2`
--
ALTER TABLE `lesson2`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `m_table`
--
ALTER TABLE `m_table`
  ADD PRIMARY KEY (`temp`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_table`
--
ALTER TABLE `m_table`
  MODIFY `temp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `course_id` FOREIGN KEY (`c_id`) REFERENCES `course_table` (`c_id`);

--
-- Constraints for table `lesson2`
--
ALTER TABLE `lesson2`
  ADD CONSTRAINT `lesson2_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course_table` (`c_id`);

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_fk_name` FOREIGN KEY (`order_id`) REFERENCES `user_table` (`id`),
  ADD CONSTRAINT `order_foreign_key_name` FOREIGN KEY (`order_id`) REFERENCES `course_table` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
