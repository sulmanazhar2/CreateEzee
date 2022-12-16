-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 04:26 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `createezze`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Email` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL,
  `Admin_Contact` int(100) NOT NULL,
  `Admin_Pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Admin_Name`, `Admin_Email`, `Admin_Password`, `Admin_Contact`, `Admin_Pic`) VALUES
(1, 'Mian Asjad ', 'asjad.rizwan1234@gmail.com', '123456', 2147483647, 'Mian.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(100) NOT NULL,
  `IP_address` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Profile_Pic` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `LastName`, `Email`, `Password`, `Contact`, `City`, `Country`, `Profile_Pic`, `Gender`) VALUES
(1, 'Mian', 'Asjad', 'asjad.rizwan1234@gmail.com', '1234567', '03218861675', 'Lahore', 'PK', 'Mian.jpeg', ''),
(2, 'Asjad', 'Rizwan', 'asjad@gmail.com', '000000', '090078601', 'Lahore', 'PK', 'user2.png', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `Order_Id` int(100) NOT NULL,
  `Customer_Id` int(100) NOT NULL,
  `Invoice_no` int(100) NOT NULL,
  `Product_Id` int(100) NOT NULL,
  `Qty` int(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Order_status` varchar(100) NOT NULL,
  `Due_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`Order_Id`, `Customer_Id`, `Invoice_no`, `Product_Id`, `Qty`, `Size`, `Order_status`, `Due_amount`) VALUES
(1, 1, 309097366, 0, 0, 'Medium', 'paid', 0),
(2, 1, 594984632, 0, 0, 'Small', 'paid', 0),
(3, 1, 1801623767, 4, 1, 'Large', 'pending', 1524),
(4, 1, 381078818, 1, 1, 'Large', 'pending', 70),
(5, 1, 381078818, 3, 1, 'Large', 'pending', 195),
(6, 1, 381078818, 4, 2, 'Large', 'pending', 3243),
(7, 1, 1447482459, 6, 2, 'Large', 'pending', 156);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `amount_sent` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `payment_code` varchar(100) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `ref_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `invoice_no`, `amount_sent`, `payment_mode`, `payment_code`, `payment_date`, `ref_no`) VALUES
(1, '309097366', '52', 'Western Union', '8623', '2020-07-16 15:54:22', '659'),
(2, '309097366', '52', 'Western Union', '8623', '2020-07-16 15:54:22', '659'),
(3, '594984632', '455', 'Western Union', '75775', '2020-07-16 15:55:28', '775855'),
(4, '594984632', '455', 'Western Union', '75775', '2020-07-16 15:55:28', '775855');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `Order_Id` int(100) NOT NULL,
  `Customer_Id` int(100) NOT NULL,
  `Invoice_no` int(100) NOT NULL,
  `Product_Id` int(100) NOT NULL,
  `Qty` int(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`Order_Id`, `Customer_Id`, `Invoice_no`, `Product_Id`, `Qty`, `Size`, `Order_status`) VALUES
(1, 1, 309097366, 0, 0, 'Medium', 'pending'),
(2, 1, 594984632, 0, 0, 'Small', 'pending'),
(3, 1, 1801623767, 4, 1, 'Large', 'pending'),
(4, 1, 381078818, 1, 1, 'Large', 'pending'),
(5, 1, 381078818, 3, 1, 'Large', 'pending'),
(6, 1, 381078818, 4, 2, 'Large', 'pending'),
(7, 1, 1447482459, 6, 2, 'Large', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(100) NOT NULL,
  `Pr_name` varchar(100) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Image1` varchar(100) NOT NULL,
  `Image2` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Sale_Price` int(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Pr_name`, `Manufacturer`, `Category`, `Image1`, `Image2`, `Price`, `Sale_Price`, `Description`, `Label`) VALUES
(1, 'Mens Shirt', 'CreateEzze', 'Available', 'HTB1.SgHadjv4eJjSZFvq6ywyFXaL-247x300.jpg', 'HTB1_uGsiPihSKJjy0Fiq6AuiFXaw-247x300.jpg', 70, 65, 'This is a best design in the market', ''),
(2, 'Women tshirt', 'Random', 'Available', 'sad-happy-247x300.jpg', '19-1-247x300.jpg', 70, 55, 'Good', ''),
(3, 'Kids', 'CreateEzze', 'Available', '1.jpeg', '2.jpeg', 125, 66, 'Kids', ''),
(4, 'Gym', 'Random', 'Gym', 'm-product-2.jpg', 'm-product-7.jpg', 1524, 654, 'Best', 'Available'),
(5, 'Hello', 'CreateEzze', 'Womens', 'hoodie_front.png', 'hat.png', 5446, 323, 'Hat', 'Available'),
(6, 'Dholna', 'CreateEzze', 'Mens', 'pillow.png', 'shoe.png', 78, 90, 'xyz', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Pic` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `Name`, `Email`, `Password`, `Contact`, `Address`, `City`, `Country`, `Pic`, `Gender`) VALUES
(1, 'Mian Asjad', 'asjad.rizwan1234@gmail.com', '1234567', '03218861675', 'NO Address', 'Lahore', 'PK', 'Mian.jpeg', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
