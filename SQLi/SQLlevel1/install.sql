-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2009 at 12:42 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

CREATE DATABASE IF NOT EXISTS `SQLlevel1`;

use SQLlevel1;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bypass`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO SQLlevel1.user (`username`, `password`) VALUES
('admin', '8b7035a74515c8ae027bc6830a94c6da');
