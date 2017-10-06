-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 05:55 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19881`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nis` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `status_vote` varchar(13) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nis`, `username`, `nama_lengkap`, `kelas`, `jurusan`, `status_vote`) VALUES
(1, 'jovvi', 'Joviandro nopier marbun', '12', 'RPL', '1'),
(2, 'Yiek', 'Yiek alfian', '12', 'RPL', '0'),
(3, 'Fahrizal', 'Fahrizal Syaripdin', '12', 'RPL', '1'),
(4, 'aqsa', 'Muhammad Aqsyal', '12', 'RPL', '0'),
(5, 'Aldin', 'Aldin abb', '12', 'RPL', '1');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `user` varchar(255) NOT NULL,
  `timestamps` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`user`, `timestamps`, `log`) VALUES
('12345', 'Wed, 27 Sep 2017 15:42:02 +0200', 'Login'),
('Fajrizal', 'Wed, 27 Sep 2017 15:46:08 +0200', 'Login'),
('Fajrizal', 'Wed, 27 Sep 2017 15:51:11 +0200', 'pilih calon3'),
('Fahrizal Syaripdin', 'Thu, 28 Sep 2017 03:03:29 +0200', 'Login'),
('Fahrizal Syaripdin', 'Thu, 28 Sep 2017 03:03:47 +0200', 'pilih calon1'),
('Muhammad Aqsyal', 'Thu, 28 Sep 2017 03:03:52 +0200', 'Login'),
('Fahrizal Syaripdin', 'Thu, 28 Sep 2017 03:06:20 +0200', 'Login'),
('Fahrizal Syaripdin', 'Thu, 28 Sep 2017 03:06:42 +0200', 'pilih calon2'),
('Fahrizal Syaripdin', 'Thu, 28 Sep 2017 03:06:48 +0200', 'pilih calon1'),
('Joviandro nopier marbun', 'Thu, 28 Sep 2017 03:23:21 +0200', 'Login'),
('Joviandro nopier marbun', 'Thu, 28 Sep 2017 03:31:12 +0200', 'pilih calon1'),
('Joviandro nopier marbun', 'Thu, 28 Sep 2017 03:31:21 +0200', 'pilih calon2'),
('Aldin abb', 'Thu, 28 Sep 2017 03:32:37 +0200', 'Login'),
('Aldin abb', 'Thu, 28 Sep 2017 03:32:57 +0200', 'pilih calon2'),
('Yiek alfian', 'Thu, 28 Sep 2017 03:34:03 +0200', 'Login'),
('Muhammad Aqsyal', 'Thu, 28 Sep 2017 05:23:45 +0200', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `calon` varchar(33) NOT NULL,
  `jumlah_vote` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`calon`, `jumlah_vote`) VALUES
('calon1', 2),
('calon2', 3),
('calon3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`calon`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
