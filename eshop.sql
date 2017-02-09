-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2016 at 02:13 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cd`
--

CREATE TABLE `cd` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Artist` text NOT NULL,
  `Company` text NOT NULL,
  `Genre` text NOT NULL,
  `Year` year(4) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd`
--

INSERT INTO `cd` (`ID`, `Title`, `Artist`, `Company`, `Genre`, `Year`, `Stock`, `Price`) VALUES
(1, 'The last samurai', 'Hans Zimmer', 'Sony Music', 'Soundtrack', 2006, 3, '17.90'),
(2, 'The Dark Knight', 'Hans Zimmer', 'Sony Music', 'Soundtrack', 2008, 3, '18.40'),
(3, 'High Voltage', 'Ac/Dc', 'Atlantic Records', 'Hard Rock', 1976, 7, '4'),
(4, 'DanceMasters vol.2', 'Michael Tsaousopoulos', 'AthensDeejay', 'House', 2010, 0, '6.30'),
(15, 'Krufa', 'Mitropanos', 'Minos EMI', 'Greek', 2014, 4, '18.50'),
(16, 'Da Vinci Code', 'Hans Zimmer', 'Sony Music', 'Soundtrack', 2006, 2, '12.00'),
(17, 'Illuminati OST', 'Hans Zimmer', 'International', 'Soundtrack', 2009, 3, '12.50'),
(18, 'Star Wars OST', 'John Williams', 'Lucasfilm', 'Soundtrack', 1978, 0, '17.50'),
(19, 'St.Anger', 'Metallica', 'Sony Music', 'Hard Rock', 1998, 3, '15.00'),
(20, 'Ace of Spades', 'Motorhead', 'Sony Music', 'Hard Rock', 1986, 3, '12.00'),
(21, 'Complete Clapton', 'Eric Clapton', 'Universal', 'Country', 2011, 4, '9.99'),
(22, 'Volkerball', 'Rammstein', 'Sony Music', 'Metal', 2006, 2, '13.48'),
(23, 'Boy', 'U2', 'Island', 'Rock', 1980, 5, '12.00'),
(24, 'No Line On The Horizon', 'U2', 'Island', 'Rock', 2009, 14, '32.99'),
(25, 'Hypnotize', 'System Of A Down', 'Sony Music', 'Metal', 2005, 6, '7.99'),
(26, 'Toxicity', 'System Of A Down', 'Sony Music', 'Metal', 2001, 5, '4.90'),
(27, 'Pasxalino Glenti', 'Various Artists', 'EMI', 'Greek', 2011, 5, '19.99'),
(29, 'Live-Odeon of Herodes Atticus', 'Filippos Pliatsikas', 'EMI', 'Greek', 2014, 4, '17'),
(30, 'Jazz Compilation', 'Various Artists', 'Energy', 'Jazz', 2015, 10, '22.50'),
(31, 'Best Hits-Barry White', 'Barry White', 'Universal', 'R&B and soul', 1989, 6, '14.20'),
(32, 'Mirage', 'Armin Van Buuren', 'Armada', 'House', 2010, 5, '8'),
(33, 'Let the music play', 'Barry White', 'Energy', 'R&B and soul', 1984, 2, '28.50'),
(34, 'Riding with the king', 'BB King', 'Universal', 'Country', 2002, 4, '16.60'),
(35, 'House of Cards (Original Soundtrack)', 'Jeff Beal', 'Sony Music', 'Soundtrack', 2015, 8, '10'),
(36, 'Californication', 'Red Hot Chilli Peppers', 'Island', 'Rock', 2002, 5, '11.50'),
(37, 'Wake up and smell the coffee', 'The Cranberies', 'Digital Records', 'Rock', 2001, 2, '8.20'),
(39, 'Roses', 'The Cranberies', 'Digital Records', 'Rock', 2012, 6, '14'),
(41, 'Eat and drink masters', 'Antonis Martsakis', 'Minos EMI', 'Greek', 2010, 3, '12.50'),
(43, 'The only choice', 'Mellises', 'Cobalt', 'Greek', 2013, 7, '16'),
(44, 'Clock', 'Madonna', 'Universal', 'Pop', 2000, 2, '6');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Id` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Artist` varchar(20) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Id`, `UserID`, `Title`, `Artist`, `Price`) VALUES
(6, 7, 'Complete Cl', 'Eric Clapto', 9.99),
(7, 7, 'Star Wars O', 'John Willia', 17.5),
(8, 7, 'Hypnotize', 'System Of A Down', 7.99),
(9, 7, 'Krufa', 'Mitropanos', 45.9),
(10, 11, 'Complete Clapton', 'Eric Clapton', 9.99),
(11, 7, 'Ace of Spades', 'Motorhead', 19.99),
(12, 9, 'Boy', 'U2', 6.88),
(13, 1, 'Krufa', 'Mitropanos', 45.9),
(14, 1, 'House of Cards (Orig', 'Jeff Beal', 10),
(15, 1, 'No Line On The Horiz', 'U2', 32.99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IDUser` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `email` text NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `CreditCardNumber` varchar(11) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IDUser`, `Username`, `Password`, `Name`, `Surname`, `email`, `Phone`, `CreditCardNumber`, `Address`) VALUES
(1, 'isidoros', 'antee', 'isidor', 'koutsoumbos', 'nonono@hotmail.com', '2147483647', '23451324', 'kokoko'),
(2, 'giokou', 'pirosvestis', 'giwrgos', 'koutsoumbos', 'firefighter@fireservice.gr', '2147483647', '2147483647', 'voutza'),
(3, 'olga', 'hairstylist', 'olga', 'kuriazoydi', 'olgashair@hotmail.com', '2147483647', '23456778', 'nea_smirni'),
(4, 'katerina', 'mour', 'katerina', 'mourtzouni', '', '555879421', '98481723', 'kainourgio'),
(7, 'nikos', 'nikas', 'nikos', 'nikolaou', 'nikas@hotmail.com', '#########', '554978123', 'kalistratous 9'),
(9, 'antkorko', '12345', 'Antwnis', 'Korkontzilas', 'antouan@hotmail.com', '#########', '9985741321', 'Gkanogianni 67'),
(10, 'admin', 'admin', 'Kostantinos', 'Antonis', 'k_antonis@teilam.gr', '6943219783', '68771468337', 'Lamia'),
(11, 'magda93', 'magdagiannaka', 'Magdalini', 'Giannaka', 'maggia93@hotmail.com', '#######', '12345678912', 'Satwvriandou'),
(12, 'Stratos7', 'giannakos', 'Eustratios', 'Yiannakos', 's_y11@hotmail.com', '########', '4787652312', 'Dhmokratias 14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cd`
--
ALTER TABLE `cd`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
