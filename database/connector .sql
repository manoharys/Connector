-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 07:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connector`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(70) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(22, 'hello', 'sharuk_khan', 'manu_ys', '2020-08-19 17:28:29', 'no', 248),
(23, 'hello ', 'vin_diesel', 'manu_ys', '2020-08-19 17:29:06', 'no', 248),
(24, 'hello\r\n', 'justin_bb', 'manu_ys', '2020-08-19 17:29:31', 'no', 248),
(25, 'ada', 'the_rock', 'manu_ys', '2020-08-19 18:22:18', 'no', 248),
(26, 'asdfa', 'the_rock', 'manu_ys', '2020-08-19 18:22:20', 'no', 249),
(27, 'adsfasd', 'the_rock', 'manu_ys', '2020-08-19 18:22:22', 'no', 249),
(28, 'adsfad', 'the_rock', 'manu_ys', '2020-08-19 18:22:25', 'no', 248);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `user_to`, `user_from`) VALUES
(32, 'manu_ys', 'the_rock');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(52, 'jhon_cena', 248),
(53, 'manu_ys', 248),
(54, 'vin_diesel', 248),
(56, 'sharuk_khan', 248),
(57, 'justin_bb', 248),
(58, 'the_rock', 249),
(59, 'the_rock', 248);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(171, 'manu_ys', 'justin_bb', 'hii dude whats up', '2020-08-19 17:12:30', 'yes', 'yes', 'no'),
(172, 'manu_ys', 'the_rock', 'hyy buddy', '2020-08-19 17:13:53', 'yes', 'yes', 'no'),
(173, 'manu_ys', 'the_rock', 'good night\r\n', '2020-08-19 17:13:58', 'yes', 'yes', 'no'),
(174, 'the_rock', 'manu_ys', 'hello dude ', '2020-08-19 17:14:18', 'yes', 'yes', 'no'),
(175, 'the_rock', 'manu_ys', 'good night', '2020-08-19 17:14:24', 'yes', 'yes', 'no'),
(176, 'the_rock', 'manu_ys', 'swt dreams', '2020-08-19 17:14:33', 'yes', 'yes', 'no'),
(177, 'manu_ys', 'the_rock', 'good night\r\n', '2020-08-19 17:14:49', 'yes', 'yes', 'no'),
(178, 'manu_ys', 'the_rock', 'asdfasdf', '2020-08-19 17:14:59', 'yes', 'yes', 'no'),
(179, 'manu_ys', 'the_rock', 'adfadf', '2020-08-19 17:15:01', 'yes', 'yes', 'no'),
(180, 'manu_ys', 'the_rock', 'adasdf', '2020-08-19 17:15:03', 'yes', 'yes', 'no'),
(181, 'the_rock', 'manu_ys', 'adfsda', '2020-08-19 17:15:18', 'yes', 'yes', 'no'),
(182, 'the_rock', 'manu_ys', 'asdfadf', '2020-08-19 17:15:21', 'yes', 'yes', 'no'),
(183, 'the_rock', 'manu_ys', 'adfadf', '2020-08-19 17:15:23', 'yes', 'yes', 'no'),
(184, 'manu_ys', 'jhon_cena', 'hyy dude', '2020-08-19 17:16:16', 'yes', 'yes', 'no'),
(185, 'jhon_cena', 'manu_ys', 'hyy you cant see me', '2020-08-19 17:16:37', 'yes', 'yes', 'no'),
(186, 'jhon_cena', 'manu_ys', 'asdfasdf', '2020-08-19 17:16:55', 'yes', 'yes', 'no'),
(187, 'jhon_cena', 'manu_ys', 'dffffffffffffadf asdf asdfa asdfwefgjsty afdg aertafdg', '2020-08-19 17:17:01', 'yes', 'yes', 'no'),
(188, 'jhon_cena', 'manu_ys', 'asdf adfasreehsf fgsfdgaret', '2020-08-19 17:17:05', 'yes', 'yes', 'no'),
(189, 'jhon_cena', 'manu_ys', 'asdf afwerawec adasdf', '2020-08-19 17:17:09', 'yes', 'yes', 'no'),
(190, 'manu_ys', 'jhon_cena', 'adf', '2020-08-19 17:17:27', 'yes', 'yes', 'no'),
(191, 'manu_ys', 'jhon_cena', 'adfasdf', '2020-08-19 17:17:29', 'yes', 'yes', 'no'),
(192, 'manu_ys', 'jhon_cena', 'asdf as f', '2020-08-19 17:17:32', 'yes', 'yes', 'no'),
(193, 'manu_ys', 'jhon_cena', 'adf asdf ', '2020-08-19 17:17:35', 'yes', 'yes', 'no'),
(194, 'manu_ys', 'jhon_cena', 'asdf asdf asdf aretfv adsf asdf', '2020-08-19 17:17:40', 'yes', 'yes', 'no'),
(195, 'manu_ys', 'vin_diesel', 'Yo manu whats man', '2020-08-19 17:19:07', 'yes', 'yes', 'no'),
(196, 'manu_ys', 'vin_diesel', 'sfgfg', '2020-08-19 17:19:44', 'yes', 'yes', 'no'),
(197, 'vin_diesel', 'manu_ys', 'hyy brother', '2020-08-19 17:21:28', 'yes', 'no', 'no'),
(198, 'vin_diesel', 'manu_ys', 'whats up', '2020-08-19 17:21:35', 'yes', 'no', 'no'),
(199, 'manu_ys', 'vin_diesel', 'do want to roll again', '2020-08-19 17:21:47', 'yes', 'yes', 'no'),
(200, 'manu_ys', 'vin_diesel', 'and american muscle is for sale', '2020-08-19 17:25:53', 'yes', 'yes', 'no'),
(201, 'vin_diesel', 'manu_ys', 'sure man ', '2020-08-19 17:26:10', 'yes', 'no', 'no'),
(202, 'manu_ys', 'vin_diesel', 'okay', '2020-08-19 17:27:14', 'yes', 'yes', 'no'),
(203, 'manu_ys', 'sharuk_khan', 'hello manu', '2020-08-19 17:28:05', 'yes', 'yes', 'no'),
(204, 'manu_ys', 'justin_bb', 'hyy ', '2020-08-19 17:29:48', 'yes', 'yes', 'no'),
(205, 'manu_ys', 'sharuk_khan', 'hello good night', '2020-08-19 17:40:48', 'yes', 'yes', 'no'),
(206, 'manu_ys', 'the_rock', 'adfasdf', '2020-08-19 17:41:53', 'yes', 'yes', 'no'),
(207, 'manu_ys', 'the_rock', 'adfasdf', '2020-08-19 17:41:55', 'yes', 'yes', 'no'),
(208, 'the_rock', 'manu_ys', 'ljljafd', '2020-08-19 17:47:36', 'yes', 'yes', 'no'),
(209, 'the_rock', 'manu_ys', 'adfa', '2020-08-19 17:48:54', 'yes', 'yes', 'no'),
(210, 'jhon_cena', 'manu_ys', 'adfa', '2020-08-19 17:48:58', 'no', 'no', 'no'),
(211, 'manu_ys', 'the_rock', 'hello\r\n', '2020-08-19 18:22:06', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`, `opened`, `viewed`) VALUES
(8, 'manu_ys', 'jhon_cena', 'Jhon Cena liked your post', 'post.php?id=248', '2020-08-19 17:18:12', 'no', 'yes'),
(9, 'manu_ys', 'vin_diesel', 'Vin Diesel liked your post', 'post.php?id=248', '2020-08-19 17:26:56', 'no', 'yes'),
(10, 'manu_ys', 'sharuk_khan', 'Sharuk Khan liked your post', 'post.php?id=248', '2020-08-19 17:27:50', 'no', 'yes'),
(11, 'manu_ys', 'sharuk_khan', 'Sharuk Khan liked your post', 'post.php?id=248', '2020-08-19 17:28:19', 'no', 'yes'),
(12, 'manu_ys', 'sharuk_khan', 'Sharuk Khan commented on your post', 'post.php?id=248', '2020-08-19 17:28:29', 'no', 'yes'),
(13, 'manu_ys', 'vin_diesel', 'Vin Diesel commented on your post', 'post.php?id=248', '2020-08-19 17:29:06', 'no', 'yes'),
(14, 'sharuk_khan', 'vin_diesel', 'Vin Diesel commented on a post you commented on', 'post.php?id=248', '2020-08-19 17:29:06', 'no', 'no'),
(15, 'manu_ys', 'justin_bb', 'Justin Bb liked your post', 'post.php?id=248', '2020-08-19 17:29:25', 'no', 'yes'),
(16, 'manu_ys', 'justin_bb', 'Justin Bb commented on your post', 'post.php?id=248', '2020-08-19 17:29:31', 'no', 'yes'),
(17, 'sharuk_khan', 'justin_bb', 'Justin Bb commented on a post you commented on', 'post.php?id=248', '2020-08-19 17:29:31', 'no', 'no'),
(18, 'vin_diesel', 'justin_bb', 'Justin Bb commented on a post you commented on', 'post.php?id=248', '2020-08-19 17:29:32', 'no', 'no'),
(19, 'manu_ys', 'the_rock', 'The Rock liked your post', 'post.php?id=249', '2020-08-19 18:22:13', 'no', 'no'),
(20, 'manu_ys', 'the_rock', 'The Rock liked your post', 'post.php?id=248', '2020-08-19 18:22:15', 'no', 'no'),
(21, 'manu_ys', 'the_rock', 'The Rock commented on your post', 'post.php?id=248', '2020-08-19 18:22:18', 'no', 'no'),
(22, 'sharuk_khan', 'the_rock', 'The Rock commented on a post you commented on', 'post.php?id=248', '2020-08-19 18:22:18', 'no', 'no'),
(23, 'vin_diesel', 'the_rock', 'The Rock commented on a post you commented on', 'post.php?id=248', '2020-08-19 18:22:18', 'no', 'no'),
(24, 'justin_bb', 'the_rock', 'The Rock commented on a post you commented on', 'post.php?id=248', '2020-08-19 18:22:18', 'no', 'no'),
(25, 'manu_ys', 'the_rock', 'The Rock commented on your post', 'post.php?id=249', '2020-08-19 18:22:20', 'no', 'no'),
(26, 'manu_ys', 'the_rock', 'The Rock commented on your post', 'post.php?id=249', '2020-08-19 18:22:22', 'no', 'no'),
(27, 'manu_ys', 'the_rock', 'The Rock commented on your post', 'post.php?id=248', '2020-08-19 18:22:25', 'no', 'no'),
(28, 'sharuk_khan', 'the_rock', 'The Rock commented on a post you commented on', 'post.php?id=248', '2020-08-19 18:22:25', 'no', 'no'),
(29, 'vin_diesel', 'the_rock', 'The Rock commented on a post you commented on', 'post.php?id=248', '2020-08-19 18:22:25', 'no', 'no'),
(30, 'justin_bb', 'the_rock', 'The Rock commented on a post you commented on', 'post.php?id=248', '2020-08-19 18:22:25', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`) VALUES
(232, 'hyy everyOne', 'the_rock', 'none', '2020-08-19 16:22:56', 'no', 'no', 0, 'assets/images/posts/5f3d35c09ff50download.jpg'),
(233, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/D0STjbmtMjY\' ></iframe><br>', 'the_rock', 'none', '2020-08-19 16:23:22', 'no', 'no', 0, ''),
(234, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/TUP6egI600w\' ></iframe><br>', 'the_rock', 'none', '2020-08-19 16:23:37', 'no', 'no', 0, ''),
(235, 'hyy everone\r\n', 'jhon_cena', 'none', '2020-08-19 16:25:40', 'no', 'yes', 0, 'assets/images/posts/5f3d36642dd7ejohn-cena-raw-und'),
(236, 'hyy everyone', 'jhon_cena', 'none', '2020-08-19 16:26:05', 'no', 'yes', 0, 'assets/images/posts/5f3d367de155djohn-cena-nikki-b'),
(237, 'hello everyone\r\n', 'jhon_cena', 'none', '2020-08-19 16:26:45', 'no', 'yes', 0, 'assets/images/posts/5f3d36a5519308f1063491f4710386'),
(238, 'hyy', 'jhon_cena', 'none', '2020-08-19 16:27:44', 'no', 'no', 0, 'assets/images/posts/5f3d36e0a906fe.jpg'),
(239, 'yo', 'jhon_cena', 'none', '2020-08-19 16:28:02', 'no', 'no', 0, 'assets/images/posts/5f3d36f2162fffhj.jpg'),
(240, 'hello everyone ', 'jhon_cena', 'none', '2020-08-19 16:28:18', 'no', 'no', 0, 'assets/images/posts/5f3d370257e79df.jpg'),
(241, 'brother', 'vin_diesel', 'none', '2020-08-19 16:30:36', 'no', 'no', 0, 'assets/images/posts/5f3d378c7f97eimages (1).jpg'),
(242, 'yo', 'vin_diesel', 'none', '2020-08-19 16:30:47', 'no', 'no', 0, 'assets/images/posts/5f3d3797d477bimages.jpg'),
(243, 'hello everyOne', 'sharuk_khan', 'none', '2020-08-19 16:33:07', 'no', 'no', 0, 'assets/images/posts/5f3d3823c5c68adadf.jpg'),
(244, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/jlliV_Nit7I\' ></iframe><br>', 'sharuk_khan', 'none', '2020-08-19 17:04:05', 'no', 'no', 0, ''),
(245, 'ODINSON', 'thor_odinson', 'none', '2020-08-19 17:06:57', 'no', 'no', 0, 'assets/images/posts/5f3d40118bfd3download (2).jpg'),
(246, 'HELLOOO', 'thor_odinson', 'none', '2020-08-19 17:07:47', 'no', 'yes', 0, 'assets/images/posts/5f3d4043dfd22maxresdefault (1)'),
(247, 'DFD', 'thor_odinson', 'none', '2020-08-19 17:08:11', 'no', 'no', 0, 'assets/images/posts/5f3d405bb2ee2DFDF.jpg'),
(248, 'hello', 'manu_ys', 'none', '2020-08-19 17:09:49', 'no', 'no', 6, 'assets/images/posts/5f3d40bd3dbe7erererer.JPG'),
(249, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/_qyw6LC5pnE\' ></iframe><br>', 'manu_ys', 'none', '2020-08-19 17:30:54', 'no', 'no', 1, ''),
(250, 'good night', 'manu_ys', 'none', '2020-08-19 17:31:29', 'no', 'yes', 0, 'assets/images/posts/5f3d45d15266dpic.JPG'),
(251, 'life', 'justin_bb', 'none', '2020-08-19 17:35:33', 'no', 'no', 0, 'assets/images/posts/5f3d46c5786baadfadfadf.jpg'),
(252, 'hello', 'justin_bb', 'none', '2020-08-19 17:35:52', 'no', 'no', 0, 'assets/images/posts/5f3d46d8a9f9bdfdfd.jpg'),
(253, 'life', 'justin_bb', 'none', '2020-08-19 17:36:04', 'no', 'no', 0, 'assets/images/posts/5f3d46e421476imagedfdfs.jpg'),
(254, 'family', 'vin_diesel', 'none', '2020-08-19 17:37:42', 'no', 'no', 0, 'assets/images/posts/5f3d4746f069dasdfasdf.jpg'),
(255, 'family', 'vin_diesel', 'none', '2020-08-19 17:37:43', 'no', 'yes', 0, 'assets/images/posts/5f3d47472be4easdfasdf.jpg'),
(256, 'adf', 'vin_diesel', 'none', '2020-08-19 17:38:07', 'no', 'no', 0, 'assets/images/posts/5f3d475f5e893adfadf.jpg'),
(257, 'rip', 'sharuk_khan', 'none', '2020-08-19 17:39:16', 'no', 'no', 0, 'assets/images/posts/5f3d47a437571afd.jpg'),
(258, '<br><iframe width=\'420\' height=\'315\' src=\'https://www.youtube.com/embed/2HmDsmWaaV4\' ></iframe><br>', 'sharuk_khan', 'none', '2020-08-19 17:39:56', 'no', 'no', 0, ''),
(259, 'hello', 'manu_ys', 'none', '2020-08-19 18:20:13', 'no', 'yes', 0, 'assets/images/posts/5f3d513d3cc88favicon.jpg'),
(260, 'hello', 'manu_ys', 'none', '2020-08-19 18:22:46', 'no', 'no', 0, 'assets/images/posts/5f3d51d69a6f6asdfafda.png');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `title` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`title`, `hits`) VALUES
('Hello', 10),
('Guys', 1),
('Looking', 1),
('Future', 1),
('Hyy', 6),
('Budies', 1),
('Whats', 1),
('Food', 1),
('Dude', 1),
('Lots', 1),
('Life', 3),
('Post', 1),
('Sdsd', 1),
('Sdf', 1),
('Sdfdfd', 1),
('Eeeeeee', 1),
('Gud', 2),
('Evening', 2),
('Everonern', 1),
('Everyonern', 1),
('Yo', 2),
('Brother', 1),
('ODINSON', 1),
('HELLOOO', 1),
('DFD', 1),
('Night', 1),
('Family', 2),
('Adf', 1),
('Rip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `singup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `singup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(28, 'Manu', 'Ys', 'manu_ys', 'manu1@gmail.com', 'e3a755898e086e55fecc6299d7e7de69', '2020-08-19', 'assets/images/profile_pic/manu_ys4a8680b166b0e086147d0b61e6f44afen.jpeg', 5, 7, 'no', ',jhon_cena,sharuk_khan,vin_diesel,justin_bb,thor_odinson,the_rock,'),
(29, 'Justin', 'Bb', 'justin_bb', 'manu2@gmail.com', 'e3a755898e086e55fecc6299d7e7de69', '2020-08-19', 'assets/images/profile_pic/justin_bbd44dd4ac2d6d5217fbb16cad5db48372n.jpeg', 3, 0, 'no', ',manu_ys,'),
(30, 'The', 'Rock', 'the_rock', 'manu3@gmail.com', 'e3a755898e086e55fecc6299d7e7de69', '2020-08-19', 'assets/images/profile_pic/the_rock1e55103395afeb7525bb2796a1d38d2bn.jpeg', 3, 0, 'no', ',manu_ys,'),
(31, 'Jhon', 'Cena', 'jhon_cena', 'manu4@gmail.com', 'e3a755898e086e55fecc6299d7e7de69', '2020-08-19', 'assets/images/profile_pic/jhon_cena32bb4111e66081b87f4943b67c2eb44an.jpeg', 6, 0, 'no', ',manu_ys,'),
(32, 'Vin', 'Diesel', 'vin_diesel', 'manu5@gmail.com', 'e3a755898e086e55fecc6299d7e7de69', '2020-08-19', 'assets/images/profile_pic/vin_diesel6de14d620d977db6cc9b559251c2c287n.jpeg', 5, 0, 'no', ',manu_ys,'),
(33, 'Sharuk', 'Khan', 'sharuk_khan', 'manu6@gmail.com', 'e3a755898e086e55fecc6299d7e7de69', '2020-08-19', 'assets/images/profile_pic/sharuk_khanf6b5181dd97a11de302ec501bb9ad087n.jpeg', 4, 0, 'no', ',manu_ys,'),
(34, 'Thor', 'Odinson', 'thor_odinson', 'manu7@gmail.com', '50c12fa74c45325f552de36b45c701b6', '2020-08-19', 'assets/images/profile_pic/thor_odinson3e688998d8cd1e4d62361bae1ccc13fcn.jpeg', 3, 0, 'no', ',manu_ys,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
