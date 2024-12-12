-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 01:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feane`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_home`
--

CREATE TABLE `about_home` (
  `id_about_home` int(11) NOT NULL,
  `img_about_home` text NOT NULL,
  `title_about_home` varchar(120) NOT NULL,
  `discraption_about_home` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_home`
--

INSERT INTO `about_home` (`id_about_home`, `img_about_home`, `title_about_home`, `discraption_about_home`) VALUES
(1, 'about-img.png', 'We Are Feane', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.');

-- --------------------------------------------------------

--
-- Table structure for table `about_inner`
--

CREATE TABLE `about_inner` (
  `id_about_inner` int(11) NOT NULL,
  `img_about_inner` text NOT NULL,
  `title_about_inner` varchar(100) NOT NULL,
  `discraption_about_inner` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_inner`
--

INSERT INTO `about_inner` (`id_about_inner`, `img_about_inner`, `title_about_inner`, `discraption_about_inner`) VALUES
(1, 'about-img.png', 'We Are Feane', 'of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.');

-- --------------------------------------------------------

--
-- Table structure for table `book_table_home`
--

CREATE TABLE `book_table_home` (
  `id_book_table_home` int(11) NOT NULL,
  `name_book_home` varchar(150) NOT NULL,
  `phone_book_home` varchar(200) NOT NULL,
  `email_book_home` varchar(200) NOT NULL,
  `person_book_home` varchar(50) NOT NULL,
  `date_book_home` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_table_home`
--

INSERT INTO `book_table_home` (`id_book_table_home`, `name_book_home`, `phone_book_home`, `email_book_home`, `person_book_home`, `date_book_home`) VALUES
(4, 'Samer', '0799628677', 'samer@gmail.com', '4', '2023-09-08'),
(5, 'Omar', '+962 775432133', 'omar@yahoo.com', '3', '2023-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `book_table_inner`
--

CREATE TABLE `book_table_inner` (
  `id_book_table_inner` int(11) NOT NULL,
  `name_book_inner` varchar(100) NOT NULL,
  `phone_book_inner` varchar(150) NOT NULL,
  `email_book_inner` varchar(150) NOT NULL,
  `person_book_inner` varchar(50) NOT NULL,
  `date_book_inner` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_table_inner`
--

INSERT INTO `book_table_inner` (`id_book_table_inner`, `name_book_inner`, `phone_book_inner`, `email_book_inner`, `person_book_inner`, `date_book_inner`) VALUES
(2, 'Samer', '0788463452', 'samer@gmail.com', '2', '2023-09-26'),
(4, 'Sara', '0788463452', 'Sara21@gmail.com', '4', '2023-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `book_table_profile`
--

CREATE TABLE `book_table_profile` (
  `id_user_profile` int(11) NOT NULL,
  `name_book_profile` varchar(100) NOT NULL,
  `phone_book_profile` varchar(150) NOT NULL,
  `email_book_profile` varchar(150) NOT NULL,
  `person_book_profile` varchar(150) NOT NULL,
  `date_book_profile` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feeback` int(11) NOT NULL,
  `img_feeback` text NOT NULL,
  `name_feedback` varchar(150) NOT NULL,
  `discraption_feeback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feeback`, `img_feeback`, `name_feedback`, `discraption_feeback`) VALUES
(2, 'client2.jpg', 'Mike Hamell', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .'),
(3, 'client1.jpg', 'Moana Michell', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore .');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `facebook_footer` varchar(200) NOT NULL,
  `twitter_footer` varchar(200) NOT NULL,
  `instagram_footer` varchar(200) NOT NULL,
  `location_footer` varchar(150) NOT NULL,
  `phone_footer` varchar(150) NOT NULL,
  `email_footer` varchar(150) NOT NULL,
  `Name_footer` varchar(50) NOT NULL,
  `slogin` varchar(300) NOT NULL,
  `time_open` varchar(50) NOT NULL,
  `time_close` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `facebook_footer`, `twitter_footer`, `instagram_footer`, `location_footer`, `phone_footer`, `email_footer`, `Name_footer`, `slogin`, `time_open`, `time_close`) VALUES
(1, 'https://www.facebook.com', 'https://twitter.com', 'https://www.instagram', 'jordan - amman', '+962 0799048621', 'sssss@gmail.com', 'Feane', 'Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with', '08:00', '14:00');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `img_tab` text NOT NULL,
  `title_tab` varchar(100) NOT NULL,
  `name_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `img_tab`, `title_tab`, `name_logo`) VALUES
(1, 'favicon.png', 'Feane', 'Feane');

-- --------------------------------------------------------

--
-- Table structure for table `mneu_home`
--

CREATE TABLE `mneu_home` (
  `id_MneuCart_home` int(11) NOT NULL,
  `img_MneuCart_home` text NOT NULL,
  `name_MneuCart_home` varchar(100) NOT NULL,
  `content_MneuCart_home` varchar(500) NOT NULL,
  `price_MneuCart_home` varchar(70) NOT NULL,
  `mneus_home` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mneu_home`
--

INSERT INTO `mneu_home` (`id_MneuCart_home`, `img_MneuCart_home`, `name_MneuCart_home`, `content_MneuCart_home`, `price_MneuCart_home`, `mneus_home`) VALUES
(4, 'f1.png', 'Delicious1 Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '20', 'pizza'),
(5, 'f2.png', 'Delicious Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '15', 'burger'),
(6, 'f3.png', 'Delicious2 Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '17', 'pizza'),
(7, 'f4.png', 'Delicious Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '18', 'pasta'),
(8, 'f5.png', 'French Fries', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '10', 'fries'),
(9, 'f6.png', 'Delicious3 Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '15', 'pizza'),
(10, 'f7.png', 'Tasty1 Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '12', 'burger'),
(11, 'f8.png', 'Tasty2 Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '14', 'burger'),
(13, 'f9.png', 'Delicious2 Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '10', 'pasta');

-- --------------------------------------------------------

--
-- Table structure for table `mneu_inner`
--

CREATE TABLE `mneu_inner` (
  `id_MneuCart_inner` int(11) NOT NULL,
  `mneus_inner` varchar(80) NOT NULL,
  `img_MneuCart_inner` text NOT NULL,
  `name_MneuCart_inner` varchar(120) NOT NULL,
  `content_MneuCart_inner` varchar(500) NOT NULL,
  `price_MneuCart_inner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mneu_inner`
--

INSERT INTO `mneu_inner` (`id_MneuCart_inner`, `mneus_inner`, `img_MneuCart_inner`, `name_MneuCart_inner`, `content_MneuCart_inner`, `price_MneuCart_inner`) VALUES
(4, 'pizza', 'f1.png', 'Delicious1 Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '20'),
(5, 'burger', 'f2.png', 'Delicious1 Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '15'),
(6, 'pizza', 'f3.png', 'Delicious2 Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '17'),
(7, 'pasta', 'f4.png', 'Delicious Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '18'),
(8, 'fries', 'f5.png', 'French Fries', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '10'),
(9, 'pizza', 'f6.png', 'Delicious3 Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '15'),
(10, 'burger', 'f7.png', 'Tasty1 Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '12'),
(11, 'burger', 'f8.png', 'Tasty Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '14'),
(15, 'pasta', 'f9.png', 'sdafa', 'skmdkmlk kmefmke knmome ', '23');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id_offers` int(11) NOT NULL,
  `img_offers` text NOT NULL,
  `title_offers` varchar(80) NOT NULL,
  `offer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id_offers`, `img_offers`, `title_offers`, `offer`) VALUES
(1, 'o1.jpg', 'Tasty Thursdays', '20'),
(2, 'o2.jpg', 'Pizza Days', '15');

-- --------------------------------------------------------

--
-- Table structure for table `slide_bar`
--

CREATE TABLE `slide_bar` (
  `id_slidebar` int(11) NOT NULL,
  `img_slidebar` varchar(150) NOT NULL,
  `title_slidebar` varchar(100) NOT NULL,
  `title_slidebar2` varchar(100) NOT NULL,
  `title_slidebar3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide_bar`
--

INSERT INTO `slide_bar` (`id_slidebar`, `img_slidebar`, `title_slidebar`, `title_slidebar2`, `title_slidebar3`) VALUES
(2, 'hero-bg.jpg', 'Fast Food Restaurant', 'Fast Food Restaurant', 'Fast Food Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `sopingcart`
--

CREATE TABLE `sopingcart` (
  `id_toCart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(150) NOT NULL,
  `img_toCart` text NOT NULL,
  `title_toCart` varchar(150) NOT NULL,
  `price_toCart` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sopingcart`
--

INSERT INTO `sopingcart` (`id_toCart`, `id_user`, `name_user`, `img_toCart`, `title_toCart`, `price_toCart`) VALUES
(29, 39, 'Ahmad150', 'f4.png', 'Delicious Pasta', '18'),
(30, 39, 'Ahmad150', 'f9.png', 'sdafa', '23'),
(31, 40, 'nadia', 'f5.png', 'French Fries', '10'),
(32, 40, 'nadia', 'f8.png', 'Tasty Burger', '14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `pass_user` varchar(200) NOT NULL,
  `phone_user` varchar(100) NOT NULL,
  `address_user` varchar(150) NOT NULL,
  `email_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `pass_user`, `phone_user`, `address_user`, `email_user`) VALUES
(38, 'user six', '1234asde', '0781532075', 'Amman', 'usersix@gmail.com'),
(39, 'Ahmad150', '1q2w3e4r5t', '0799048644', 'irbid', 'ahmad@yahoo.com'),
(40, 'nadia', 'asdf12345', '0666663331', 'Amman', 'nadia@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_home`
--
ALTER TABLE `about_home`
  ADD PRIMARY KEY (`id_about_home`);

--
-- Indexes for table `about_inner`
--
ALTER TABLE `about_inner`
  ADD PRIMARY KEY (`id_about_inner`);

--
-- Indexes for table `book_table_home`
--
ALTER TABLE `book_table_home`
  ADD PRIMARY KEY (`id_book_table_home`);

--
-- Indexes for table `book_table_inner`
--
ALTER TABLE `book_table_inner`
  ADD PRIMARY KEY (`id_book_table_inner`);

--
-- Indexes for table `book_table_profile`
--
ALTER TABLE `book_table_profile`
  ADD PRIMARY KEY (`id_user_profile`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feeback`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `mneu_home`
--
ALTER TABLE `mneu_home`
  ADD PRIMARY KEY (`id_MneuCart_home`);

--
-- Indexes for table `mneu_inner`
--
ALTER TABLE `mneu_inner`
  ADD PRIMARY KEY (`id_MneuCart_inner`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id_offers`);

--
-- Indexes for table `slide_bar`
--
ALTER TABLE `slide_bar`
  ADD PRIMARY KEY (`id_slidebar`);

--
-- Indexes for table `sopingcart`
--
ALTER TABLE `sopingcart`
  ADD PRIMARY KEY (`id_toCart`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_home`
--
ALTER TABLE `about_home`
  MODIFY `id_about_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_inner`
--
ALTER TABLE `about_inner`
  MODIFY `id_about_inner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_table_home`
--
ALTER TABLE `book_table_home`
  MODIFY `id_book_table_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_table_inner`
--
ALTER TABLE `book_table_inner`
  MODIFY `id_book_table_inner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_table_profile`
--
ALTER TABLE `book_table_profile`
  MODIFY `id_user_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feeback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mneu_home`
--
ALTER TABLE `mneu_home`
  MODIFY `id_MneuCart_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mneu_inner`
--
ALTER TABLE `mneu_inner`
  MODIFY `id_MneuCart_inner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id_offers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slide_bar`
--
ALTER TABLE `slide_bar`
  MODIFY `id_slidebar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sopingcart`
--
ALTER TABLE `sopingcart`
  MODIFY `id_toCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
