-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2020 at 09:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `User_Password` varchar(255) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Zipcode` int(11) DEFAULT NULL,
  `Lat` double DEFAULT NULL,
  `Lon` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`User_ID`, `User_Name`, `Email`, `User_Password`, `Rating`, `Address`, `Phone`, `Zipcode`, `Lat`, `Lon`) VALUES
(1, 'Jianjia', 'jianjia2@illinois.edu', 'nnttfozf123.', 4.93, '1903N Lincoln Ave', '2173050751', 61801, 40.129822, -88.22069),
(2, 'alena.sorokina', 'alena3@illinois.edu', 'mypassword123', 4.99, '308 E Green st', '2174197091', 61820, 40.111054, -88.203975),
(3, 'Vardhan', 'vdongre2@illinois.edu', 'some_k3yw0rd', 4.98, '48 E John Street', '2170000000', 61820, 40.111054, -88.203975),
(4, 'aidana', 'aidana2@illinois.edu', 'aidana_96', 4.97, '308 E Green st', '2170000000', 61820, 40.114768, -88.231228),
(5, 'Kelin', 'kelind2@illinois.edu', 'skhauia1n2g3', 4.92, '309 E Green st', '2170000000', 61820, 40.110230, -88.234221),
(6, 'Sparsh', 'sparsha2@illinois.edu', 'spa2019', 4.85, '402 s wright st', '2170000000', 61820, 40.111054, -88.203975),
(7, 'Altaf', 'sheikaltaf@gmail.com', '$2y$10$/T9CTYjOLvek5YBn7volhOxnrnWCaxIVpGbOW5wrlQPJJyjm3KR1G', 4.83, '305 s white st', '217-908-9190', 61820, 40.119570, -88.234232),
(8, 'Meera', 'mnair@gmail.com', '$2y$10$etyTkU2RFJgWR2/5P3hmI.NQzks5uoKxzW2eJoRgv7H/paccGFD9S', 4.84, '1000-1098 W Clark St', '718-910-8989', 61820, 40.115783, -88.221175),
(9, 'myrad', 'myranda@yahoo.com', '$2y$10$DDUPzVCI6SqN4Y67dp75we1DcTTW13sPezSkR1cIkoo38og6fw/Ge', 4.89, '601 E White St', '217-512-0987', 61820, 40.114448, -88.229898),
(10, 'martinjones', 'jones@hotmail.com', '$2y$10$9dursXXM2fA67MNHjDytgOeS576sCqk0.pbkCfe6KUv/fn4iX4XgK', 4.90, '507 E Clark St', '312-987-5678', 61820, 40.115260, -88.231143),
(11, 'patrinick', 'patrnico2@illinois.edu', '$2y$10$DRI4N1uMaLhb/0VnO1TGh.uYVGrQGxyXU1KNLo6DSwo58mkisL17S', 4.91, '601 E White St', '712-212-4345', 61820, 40.114456, -88.229941),
(12, 'michael', 'neal@illinois.edu', '$2y$10$EeoUQeZWGyrou3OpkDLjEOl37VX0ms5XF1fJtXLd5n/mw1RnFv6Ha', 4.93, '305 s white st', '312-234-4567', 61820, 40.119570, -88.234232),
(13, 'akash', 'jain2@illinois.edu', '$2y$10$F1D/pKn4yKouAiTyCrHETeS3jMRvpePsB4uchxaMi7twWuJYTcBQq', 4.99, '305 s white st', '312-241-2324', 61820, 40.119570, -88.234232),
(14, 'jessica', 'jjones@illinois.edu', '$2y$10$P8Ha/8S7UuiQ3knR.XEBYe8yfmCi4kuGX8PMFF6ujECd0NbJaR7le', 4.87, '305 s white st', '312-121-1121', 61820, 40.119570, -88.234232),
(15, 'miranda', 'mira3@illinois.edu', '$2y$10$BiouznUgMvtE/fd8nvvUHeJdLXJ1BRxTWElzwQJX930vfraqIHIIa', 4.67, '601 E White St', '217-821-9809', 61820, 40.114456, -88.229941),
(16, 'olyuwa', 'osammy2@illinois.edu', '$2y$10$uCYCTgWuHvQiJzyIaSUBTu6iG4/4Vw2N9CDZWT3SCUlgg7ZtnRbem', 4.78, '601 E White St', '312-234-8978', 61820, 40.114456, -88.229941),
(17, 'idah', 'imdeani@illinois.edu', '$2y$10$WPkQw4Q7t5CSvKmWsMm./uBoY9TdWmDyrcNjKYNVSVHDCmwU56Fai', 4.89, '507 E Clark St', '512-212-2634', 61820, 40.115260, -88.231143),
(18, 'hyoun', 'hlee2@illinois.edu', '$2y$10$vbKLSur4jHaeqa.jxq96v.Zsd92vLbSyPZ.Sthm/BHM4QA7uU4Fca', 4.25, '507 E Clark St', '217-987-9876', 61820, 40.115260, -88.231143),
(19, 'dustin', 'dxiao2@illinois.edu', 'qwerty', 4.8, '508 E White St', '312-234-9876', 61820, 40.114768, -88.231228),
(20, 'vivek', 'vdon2@illinois.edu', 'qwerty', 4.4, '508 E White St', '989-786-8789', 61820, 40.114768, -88.231228),
(21, 'jimbo', 'jimmy2@illinois.edu', '1234qwerty', 4.2, '508 E White St', '312-290-8000', 61820, 40.114768, -88.231228),
(22, 'Amanda', 'aspencer2@illinois.edu', 'qwerty', 4.5, '310 E Springfield Ave', '2170000000', 61820, 40.113344, -88.235058),
(23, 'Nicole', 'nspencer2@illinois.edu', 'qwerty', 4.5, '310 E Springfield Ave', '2170000000', 61820, 40.113344, -88.235058);

-- --------------------------------------------------------

--
-- Table structure for table `Favorite`
--

CREATE TABLE `Favorite` (
  `Favorite_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Product_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Favorite`
--

INSERT INTO `Favorite` (`Favorite_ID`, `User_ID`, `Product_ID`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 1, 20),
(4, 4, 1),
(5, 4, 8),
(6, 2, 2),
(7, 2, 4),
(8, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(50) DEFAULT NULL,
  `Seller_ID` int(11) NOT NULL,
  `Product_image` varchar(200) DEFAULT NULL,
  `Price_Sell` double DEFAULT NULL,
  `Price_New` double DEFAULT NULL,
  `Price_Recommend` double DEFAULT NULL,
  `Date_Post` date DEFAULT cast(current_timestamp() as date),
  `Sold_Or_Not` int(11) DEFAULT 0,
  `Category` varchar(50) DEFAULT NULL,
  `Product_Description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Product_ID`, `Product_Name`, `Seller_ID`, `Product_image`, `Price_Sell`, `Price_New`, `Price_Recommend`, `Date_Post`, `Sold_Or_Not`, `Category`, `Product_Description`) VALUES
(1, 'AirPods', 1, '1.png', 140, 199, 150, '2020-07-19', 1, 'Electronics', 'AirPods with wireless charger case'),
(2, 'iphone charger', 2, '2.png', 15, 30, 20, '2020-07-17', 0, 'Electronics', 'New iPhone charger, Lightning Cable 6FT'),
(3, 'Lamp', 1, '3.png', 5, 15, 10, '2020-07-18', 0, 'Electronics', 'Brand new lamp, suitable for students'),
(4, 'Mouse & Keyboarad', 3, '4.png', 20, 40, 20, '2020-07-18', 0, 'Electronics', 'Wireless Mouse and Keyboard for Macbook Pro/Air'),
(5, 'Monitor', 3, '5.png', 15, 75, 50, '2020-07-18', 0, 'Electronics', 'Samsung Monitor LED'),
(6, 'Alexa Dot', 3, '6.png', 10, 39.99, 10, '2020-07-18', 0, 'Electronics', 'Amazon Alexa Dot Voice-activated virtual assistant (White)'),
(7, 'Rice Cooker', 3, '7.png', 15, 22.99, 10, '2020-07-19', 0, 'Electronics', 'Electric cooker'),
(8, 'Nail polish', 5, '8.png', 6, 9, 7, '2020-07-18', 1, 'Beauty', 'essie nail polish, color: a-list'),
(9, 'Nail polish', 5, '9.png', 6, 9, 7, '2020-07-18', 1, 'Beauty', 'essie nail polish, color: eternal optimist'),
(10, 'Nail polish', 5, '10.png', 6, 9, 7, '2020-07-18', 1, 'Beauty', 'essie nail polish, color: set in stones'),
(11, 'Calculator', 6, '11.png', 8, 12, 10, '2020-07-21', 0, 'Electronics', 'Casio Scientific Calculator fx-100MS'),
(12, 'candle', 4, '12.png', 3, 5, 5, '2020-07-18', 0, 'Household', 'Candle from Wallmart with vanilla scent'),
(13, 'beats x wireless headphones', 4, '13.png', 15, 150, 0, '2020-07-19', 0, 'Electronics', 'Beats X wireless headphones, one of the ears is broken'),
(14, 'sleeping bag', 7, '14.png', 20, 30, 25, '2020-07-18', 1, 'Household', 'sleeping bag from Wallmart, never used'),
(15, 'nail polish remover', 8, '15.png', 20, 30, 25, '2020-07-18', 1, 'Beauty', 'sleeping bag from Wallmart, never used'),
(16, 'book \"Kite Runner\"', 9, '16.png', 8, 15, 10, '2020-07-18', 1, 'Books', 'Kite Runner by Khaled Hosssoft cover from Amazon'),
(17, 'book \"The Chimp Paradox\"', 5, '17.png', 10, 20, 10, '2020-07-18', 0, 'Books', 'The Chimp Paradox by Steve Peters in soft cover'),
(18, 'book Surely, you are joking Mr. Feynman', 3, '18.png', 10, 15, 10, '2020-07-18', 0, 'Books', 'Surely You are Joking, Mr. Feynman!\": Adventures of a Curious Character as Told to Ralph Leighton (Arrow Books) (Paperback) - Common'),
(19, 'book \"The color purple\"', 5, '19.png', 10, 15, 10, '2020-07-19', 0, 'Books', 'The Color Purple: A Novel Paperback by Alice Walker'),
(20, 'JBL earpods ', 8, '20.png', 15, 40, 10, '2020-07-21', 0, 'Electronics', 'wireless JBL earpods, sometimes connection is not stable in one of the ears'),
(21, 'Amazon Women Long Sleeve T-Shirt', 10, '21.png', 15, 30, 10, '2020-07-20', 0, 'Fashion', 'Longsleeve with Amazon Logo'),
(22, 'Desk ', 5, '22.png', 50, 100, 10, '2020-07-20', 0, 'Furniture', 'Computer desk, size: 100*50*72CM (L*W*H : 39.4 * 19.7 * 28.3 Inches), Brown Desktop Black Frame.'),
(23, 'Coffee table', 3, '23.png', 50, 75, 10, '2020-07-20', 0, 'Furniture', 'Small coffee table, size: 80*50*42CM'),
(24, 'Desk Lamp', 4, '24.png', 25, 40, 10, '2020-07-20', 0, 'Furniture', 'Adjustable desk lamp '),
(25, 'Cracking the Coding Interview, volume 2', 9, '25.png', 15, 27, 10, '2020-08-05', 0, 'Books', 'the interview preparation you need to get the top software developer jobs'),
(26, 'AAAI Conference proceedings', 7, '26.png', 20, 40, 10, '2020-08-05', 0, 'Books', 'publication collection from AAAI 2020 conference'),
(27, 'Computer table', 6, '27.png', 30, 60, 10, '2020-08-05', 0, 'Books', 'Portable Folding Table'),
(28, 'Floor lamp', 1, '28.png', 10, 30, 10, '2020-08-05', 0, 'Furniture', 'Suitable for large bedroom');

-- --------------------------------------------------------

--
-- Table structure for table `Purchase_Record`
--

CREATE TABLE `Purchase_Record` (
  `Purchase_ID` int(11) NOT NULL,
  `Seller_ID` int(11) NOT NULL,
  `Buyer_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `TimeOfPurchase` date DEFAULT NULL,
  `Rating_Quality` double DEFAULT NULL,
  `Rating_Description_VS_Quality` double DEFAULT NULL,
  `Rating_User_Satisfaction` double DEFAULT NULL,
  `Review` varchar(300) DEFAULT 'no review yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Purchase_Record`
--

INSERT INTO `Purchase_Record` (`Purchase_ID`, `Seller_ID`, `Buyer_ID`, `Product_ID`, `Location`, `TimeOfPurchase`, `Rating_Quality`, `Rating_Description_VS_Quality`, `Rating_User_Satisfaction`, `Review`) VALUES
(1, 4, 1, 16, 'Grainger', '2020-07-21', 4, 4.5, 4.7, 'I was almost relieved when, partway into reading The Kite Runner, I realised this was definitely a ‘good’ book. Otherwise, I’m not sure that I could have written a review. It would be very difficult to criticise a book so widely adored.'),
(2, 1, 5, 1, 'Grainger', '2020-07-21', 4, 5, 4.6, 'Very good and new. Like it!'),
(3, 4, 2, 15, 'Green Street', '2020-07-20', 5, 4.9, 5, 'I like the color!'),
(4, 5, 1, 8, 'County Market', '2020-07-25', 5, 4.9, 5, 'I like the nail polish!'),
(5, 5, 1, 9, 'County Market', '2020-07-25', 5, 3.5, 5, 'no review yet'),
(6, 5, 1, 10, 'County Market', '2020-07-25', 5, 4.6, 4.3, 'no review yet'),
(7, 2, 4, 2, 'County Market', '2020-07-25', 5, 4.6, 4.3, 'no review yet'),
(8, 2, 4, 20, 'County Market', '2020-07-25', 5, 4.6, 4.3, 'This earpods is comfortable, very good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `Favorite`
--
ALTER TABLE `Favorite`
  ADD PRIMARY KEY (`Favorite_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`,`Product_ID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `Purchase_Record`
--
ALTER TABLE `Purchase_Record`
  ADD PRIMARY KEY (`Purchase_ID`),
  ADD UNIQUE KEY `Seller_ID` (`Seller_ID`,`Buyer_ID`,`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Favorite`
--
ALTER TABLE `Favorite`
  MODIFY `Favorite_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Purchase_Record`
--
ALTER TABLE `Purchase_Record`
  MODIFY `Purchase_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;