-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2023 at 03:33 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20584311_foodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSCODE` varchar(255) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `EMAIL`, `PASSCODE`, `NAME`, `ADDRESS`) VALUES
(1, 'john@example.com', 'abc12311', 'John Smith', '123 Main Street'),
(2, 'jane@example.com', 'def45611', 'Jane Doe', '456 Elm Avenue'),
(3, 'mike@example.com', 'ghi78911', 'Mike Johnson', '789 Oak Lane'),
(4, 'sarah@example.com', 'jkl01211', 'Sarah Anderson', '012 Pine Road'),
(5, 'david@example.com', 'mno34511', 'David Thompson', '345 Maple Drive'),
(6, 'lisa@example.com', 'pqr67811', 'Lisa Brown', '678 Cherry Lane'),
(7, 'peter@example.com', 'stu90111', 'Peter Wilson', '901 Cedar Court'),
(8, 'emily@example.com', 'vwx23411', 'Emily Davis', '234 Walnut Street'),
(9, 'matt@example.com', 'yza56711', 'Matt Anderson', '567 Birch Avenue'),
(10, 'jessica@example.com', 'bcd89011', 'Jessica White', '890 Spruce Road'),
(11, 'alex@example.com', 'efg12311', 'Alex Johnson', '123 Oak Lane'),
(12, 'natalie@example.com', 'hij45611', 'Natalie Thompson', '456 Maple Drive'),
(13, 'ryan@example.com', 'klm78911', 'Ryan Evans', '789 Cherry Lane'),
(14, 'sophia@example.com', 'nop01211', 'Sophia Martinez', '012 Cedar Court'),
(15, 'william@example.com', 'qrs34511', 'William Lee', '345 Walnut Street'),
(16, 'olivia@example.com', 'tuv67811', 'Olivia Davis', '678 Birch Avenue'),
(17, 'jacob@example.com', 'wxy90111', 'Jacob Anderson', '901 Spruce Road'),
(18, 'mia@example.com', 'zab23411', 'Mia Brown', '234 Oak Lane'),
(19, 'ethan@example.com', 'cde56711', 'Ethan Wilson', '567 Maple Drive'),
(20, 'ava@example.com', 'fgh89011', 'Ava White', '890 Cherry Lane'),
(21, 'user123@gmail.com', 'user123@', NULL, NULL),
(22, 'user1234@gmail.com', 'user1234', NULL, NULL),
(23, 'user12345@gmail.com', 'user12345', NULL, NULL),
(24, 'user4321@yahoo.com', 'user4321', NULL, NULL),
(25, 'user4321@hotmail.com', 'user4321', NULL, NULL),
(26, 'user4321@user', 'user4321', NULL, NULL),
(27, 'goodboy123@gmail.com', 'goodboy123', NULL, NULL),
(28, 'user1234@user', 'user1234', NULL, NULL),
(29, 'foodies@gmail.com', 'user1234', NULL, NULL),
(30, 'haroon@gmail.comm', 'user1234', NULL, NULL),
(31, 'haroon@gmail.commm', 'user1234', NULL, NULL),
(32, 'lion@gmail.commm', 'qazwsx234', NULL, NULL),
(33, 'haroon@gmail.com123', '11231ada', NULL, NULL),
(34, 'user12345@test', 'user12345', NULL, NULL),
(55, 'mansoor123@user', 'user12345', NULL, NULL),
(56, 'user1234@funny', 'user1234@funny', NULL, NULL),
(57, 'kashif@ned.com', 'cheetah.cr', NULL, NULL),
(58, 'chaoderanony@gmail.com', '123450S@', NULL, NULL),
(59, 'rashidhaque20@gmail.com', 'S1230980', NULL, NULL),
(60, 'mansoor@foodies.com', '12345678', NULL, NULL),
(61, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customerphone`
--

CREATE TABLE `customerphone` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `PHONE_NO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerphone`
--

INSERT INTO `customerphone` (`CUSTOMER_ID`, `PHONE_NO`) VALUES
(1, '+92 3001234567'),
(2, '+92 3112345678'),
(3, '+92 3223456789'),
(4, '+92 3334567890'),
(5, '+92 3445678901'),
(6, '+92 3556789012'),
(7, '+92 3667890123'),
(8, '+92 3778901234'),
(9, '+92 3889012345'),
(10, '+92 3990123456'),
(11, '+92 3009876543'),
(12, '+92 3118765432'),
(13, '+92 3227654321'),
(14, '+92 3336543210'),
(15, '+92 3445432109'),
(16, '+92 3554321098'),
(17, '+92 3663210987'),
(18, '+92 3772109876'),
(19, '+92 3881098765'),
(20, '+92 3990987654'),
(0, '333-1234567'),
(0, '333-1234567'),
(0, '333-1234567'),
(0, '333-1234567'),
(0, '333-1234567'),
(0, '333-1234567'),
(56, '333-1234567'),
(57, '333-2322121'),
(58, '333-1234567'),
(59, '334-3957952'),
(60, '333-1234567'),
(61, '');

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `FOOD_ITEM_ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `PRICE` decimal(10,2) NOT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`FOOD_ITEM_ID`, `NAME`, `PRICE`, `DESCRIPTION`) VALUES
(1, 'Chicken Biryani', 1000.00, 'Fragrant rice dish with tender chicken'),
(2, 'Beef Kebabs', 800.00, 'Grilled skewers of seasoned beef'),
(3, 'Vegetable Curry', 700.00, 'Assorted vegetables in a flavorful curry'),
(4, 'Mutton Karahi', 1200.00, 'Spicy and aromatic mutton curry'),
(5, 'Fish and Chips', 900.00, 'Deep-fried fish fillets with fries'),
(6, 'Beef Burger', 600.00, 'Juicy beef patty with fresh toppings'),
(7, 'Chicken Tikka', 1100.00, 'Grilled marinated chicken skewers'),
(8, 'Vegetable Fried Rice', 800.00, 'Stir-fried rice with mixed vegetables'),
(9, 'Lamb Korma', 1300.00, 'Rich and creamy lamb curry'),
(10, 'Cheese Pizza', 1000.00, 'Classic pizza topped with melted cheese'),
(11, 'Pasta Alfredo', 900.00, 'Creamy pasta with Parmesan sauce'),
(12, 'Chicken Shawarma', 700.00, 'Thinly sliced grilled chicken in a wrap'),
(13, 'Vegetable Lasagna', 1100.00, 'Layers of pasta, vegetables, and cheese'),
(14, 'Beef Tacos', 800.00, 'Tasty beef filling in crispy taco shells'),
(15, 'Mango Lassi', 300.00, 'Refreshing yogurt-based mango drink'),
(16, 'Chicken Noodle Soup', 600.00, 'Comforting soup with chicken and noodles'),
(17, 'Falafel Wrap', 700.00, 'Fried chickpea balls in a wrap'),
(18, 'Egg Fried Rice', 800.00, 'Stir-fried rice with scrambled eggs'),
(19, 'Paneer Tikka Masala', 1000.00, 'Grilled paneer in a spiced tomato sauce'),
(20, 'Chicken Caesar Salad', 900.00, 'Fresh salad with grilled chicken'),
(21, 'Mushroom Risotto', 1100.00, 'Creamy rice dish with mushrooms'),
(22, 'Beef Stir Fry', 800.00, 'Sautéed beef and vegetables'),
(23, 'Hummus and Pita', 600.00, 'Chickpea dip served with pita bread'),
(24, 'Chicken Satay', 1100.00, 'Skewered and grilled chicken with sauce'),
(25, 'Vegetable Biryani', 900.00, 'Fragrant rice dish with mixed vegetables'),
(26, 'Chicken Parmesan', 1200.00, 'Breaded chicken topped with marinara'),
(27, 'Shrimp Fried Rice', 1000.00, 'Stir-fried rice with succulent shrimp'),
(28, 'Mango Sticky Rice', 700.00, 'Sweet dessert with sticky rice and mango'),
(29, 'Veggie Burger', 900.00, 'Plant-based patty with fresh toppings'),
(30, 'Chicken Curry', 1100.00, 'Flavorful curry with tender chicken');

-- --------------------------------------------------------

--
-- Table structure for table `loyalcustomer`
--

CREATE TABLE `loyalcustomer` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `YEAR_ACC_CREATED` int(11) NOT NULL,
  `DISCOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loyalcustomer`
--

INSERT INTO `loyalcustomer` (`CUSTOMER_ID`, `YEAR_ACC_CREATED`, `DISCOUNT`) VALUES
(1, 2014, 6),
(1, 2004, 23);

-- --------------------------------------------------------

--
-- Table structure for table `ordereditem`
--

CREATE TABLE `ordereditem` (
  `SALES_ORDER_ID` int(11) NOT NULL,
  `FOOD_ITEM_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordereditem`
--

INSERT INTO `ordereditem` (`SALES_ORDER_ID`, `FOOD_ITEM_ID`, `QUANTITY`) VALUES
(2, 1, 3),
(2, 2, 3),
(3, 1, 1),
(3, 3, 3),
(4, 3, 1),
(5, 3, 1),
(6, 2, 1),
(7, 1, 1),
(8, 2, 1),
(9, 4, 1),
(10, 2, 7),
(10, 1, 3),
(11, 1, 4),
(11, 2, 3),
(12, 1, 4),
(12, 2, 3),
(13, 1, 1),
(14, 11, 4),
(14, 12, 2),
(15, 2, 1),
(16, 1, 1),
(17, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT_ID` int(11) NOT NULL,
  `SALES_ORDER_ID` int(11) NOT NULL,
  `PAYMENT_METHOD_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAYMENT_ID`, `SALES_ORDER_ID`, `PAYMENT_METHOD_ID`) VALUES
(1, 5, 0),
(2, 6, 0),
(3, 7, 2),
(4, 8, 2),
(5, 9, 1),
(6, 10, 1),
(7, 12, 1),
(8, 13, 1),
(9, 14, 1),
(10, 15, 1),
(11, 16, 1),
(12, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `PAYMENT_METHOD_ID` int(11) NOT NULL,
  `NAME` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`PAYMENT_METHOD_ID`, `NAME`) VALUES
(1, 'CASH ON DELIVERY'),
(2, 'CREDIT CARD');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `RESTAURANT_ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`RESTAURANT_ID`, `NAME`, `ADDRESS`) VALUES
(1, 'Cafe Delight', '123 Main Street, Cityville'),
(2, 'The Hungry Grill', '456 Elm Avenue, Townsville'),
(3, 'Pasta Paradise', '789 Oak Lane, Villageland'),
(4, 'Spice Junction', '321 Pine Road, Boroughville'),
(5, 'Taste of India', '654 Maple Court, Hamletown'),
(6, 'Burger Bistro', '987 Cedar Drive, Suburbia'),
(7, 'Pizza Palace', '234 Walnut Street, Metropolis'),
(8, 'Noodle House', '567 Birch Lane, Megatown'),
(9, 'Seafood Sensation', '890 Spruce Avenue, Urbantown'),
(10, 'Mexican Fiesta', '1234 Ivy Lane, Cityville'),
(11, 'Sushi Sake', '5678 Oak Street, Townsville'),
(12, 'Italian Delights', '9012 Maple Road, Villageland'),
(13, 'Flavor Fusion', '3456 Pine Avenue, Boroughville'),
(14, 'Grill Master', '7890 Cedar Lane, Hamletown'),
(15, 'Crispy Crust', '1234 Walnut Drive, Suburbia'),
(16, 'Wok n\' Roll', '5678 Pine Street, Metropolis'),
(17, 'BBQ Junction', '9012 Birch Lane, Megatown'),
(18, 'Taco Time', '3456 Spruce Court, Urbantown'),
(19, 'Cafe Italia', '7890 Ivy Avenue, Cityville'),
(20, 'The Steakhouse', '123 Main Street, Townsville'),
(21, 'Bistro Bliss', '456 Elm Avenue, Villageland'),
(22, 'Asian Fusion', '789 Oak Lane, Boroughville'),
(23, 'Mediterranean Delight', '321 Pine Road, Hamletown'),
(24, 'Deli Supreme', '654 Maple Court, Suburbia'),
(25, 'Brew House', '987 Cedar Drive, Metropolis'),
(26, 'Golden Dragon', '234 Walnut Street, Megatown'),
(27, 'Casa de Tapas', '567 Birch Lane, Urbantown'),
(28, 'Breakfast Haven', '890 Spruce Avenue, Cityville'),
(29, 'Urban Diner', '1234 Ivy Lane, Townsville'),
(30, 'Pizzeria Express', '5678 Oak Street, Villageland'),
(31, 'Soul Kitchen', '9012 Maple Road, Boroughville'),
(32, 'Bistro Brunch', '3456 Pine Avenue, Hamletown'),
(33, 'Cafe Coco', '7890 Cedar Lane, Suburbia'),
(34, 'Harvest Grill', '1234 Walnut Drive, Metropolis');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantitem`
--

CREATE TABLE `restaurantitem` (
  `FOOD_ITEM_ID` int(11) NOT NULL,
  `RESTAURANT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurantitem`
--

INSERT INTO `restaurantitem` (`FOOD_ITEM_ID`, `RESTAURANT_ID`) VALUES
(28, 1),
(3, 1),
(11, 1),
(19, 1),
(25, 1),
(6, 1),
(12, 1),
(28, 2),
(3, 2),
(11, 2),
(19, 2),
(25, 2),
(6, 2),
(12, 2),
(6, 3),
(25, 3),
(13, 3),
(8, 3),
(10, 3),
(30, 3),
(23, 3),
(8, 4),
(11, 4),
(1, 4),
(24, 4),
(25, 4),
(26, 4),
(22, 4),
(24, 5),
(5, 5),
(2, 5),
(30, 5),
(17, 5),
(7, 5),
(16, 5),
(23, 6),
(17, 6),
(11, 6),
(10, 6),
(6, 6),
(28, 6),
(14, 6),
(25, 7),
(12, 7),
(5, 7),
(11, 7),
(15, 7),
(3, 7),
(4, 7),
(9, 8),
(26, 8),
(1, 8),
(5, 8),
(29, 8),
(17, 8),
(22, 8),
(17, 9),
(12, 9),
(20, 9),
(15, 9),
(9, 9),
(11, 9),
(13, 9),
(25, 10),
(29, 10),
(9, 10),
(22, 10),
(4, 10),
(10, 10),
(24, 10),
(10, 11),
(20, 11),
(12, 11),
(2, 11),
(12, 11),
(30, 11),
(25, 11),
(7, 12),
(5, 12),
(24, 12),
(3, 12),
(5, 12),
(19, 12),
(28, 12),
(22, 13),
(29, 13),
(6, 13),
(16, 13),
(19, 13),
(12, 13),
(25, 13),
(3, 14),
(4, 14),
(6, 14),
(11, 14),
(16, 14),
(8, 14),
(18, 14),
(29, 15),
(5, 15),
(25, 15),
(12, 15),
(27, 15),
(19, 15),
(26, 15),
(30, 16),
(1, 16),
(7, 16),
(5, 16),
(3, 16),
(30, 16),
(8, 16),
(9, 17),
(13, 17),
(12, 17),
(1, 17),
(18, 17),
(6, 17),
(5, 17),
(3, 18),
(22, 18),
(23, 18),
(7, 18),
(12, 18),
(5, 18),
(22, 18),
(20, 19),
(22, 19),
(5, 19),
(3, 19),
(30, 19),
(14, 19),
(11, 19),
(22, 20),
(25, 20),
(1, 20),
(14, 20),
(3, 20),
(28, 20),
(20, 20),
(25, 21),
(29, 21),
(8, 21),
(22, 21),
(25, 21),
(20, 21),
(8, 21),
(8, 22),
(29, 22),
(19, 22),
(12, 22),
(4, 22),
(14, 22),
(22, 22),
(29, 23),
(4, 23),
(8, 23),
(12, 23),
(9, 23),
(13, 23),
(26, 23),
(10, 24),
(16, 24),
(2, 24),
(25, 24),
(21, 24),
(28, 24),
(20, 24),
(3, 25),
(12, 25),
(19, 25),
(28, 25),
(20, 25),
(9, 25),
(27, 25),
(9, 26),
(8, 26),
(3, 26),
(11, 26),
(29, 26),
(21, 26),
(28, 26),
(23, 27),
(13, 27),
(6, 27),
(14, 27),
(20, 27),
(5, 27),
(9, 27),
(14, 28),
(7, 28),
(25, 28),
(30, 28),
(11, 28),
(19, 28),
(16, 28),
(12, 29),
(21, 29),
(9, 29),
(18, 29),
(17, 29),
(7, 29),
(12, 29),
(26, 30),
(2, 30),
(30, 30),
(17, 30),
(26, 30),
(29, 30),
(16, 30),
(14, 31),
(20, 31),
(7, 31),
(8, 31),
(23, 31),
(26, 31),
(5, 31),
(27, 32),
(26, 32),
(13, 32),
(30, 32),
(28, 32),
(4, 32),
(18, 32),
(13, 33),
(30, 33),
(22, 33),
(17, 33),
(5, 33),
(2, 33),
(12, 33),
(19, 34),
(16, 34),
(2, 34),
(10, 34),
(7, 34),
(14, 34),
(11, 34);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantphone`
--

CREATE TABLE `restaurantphone` (
  `RESTAURANT_ID` int(11) NOT NULL,
  `PHONE_NO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salesorder`
--

CREATE TABLE `salesorder` (
  `SALES_ORDER_ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `SALES_ORDER_DATE` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salesorder`
--

INSERT INTO `salesorder` (`SALES_ORDER_ID`, `CUSTOMER_ID`, `SALES_ORDER_DATE`) VALUES
(1, 4, '2023-07-02'),
(2, 6, '2023-07-02'),
(3, 11, '2023-07-02'),
(4, 11, '2023-07-02'),
(5, 11, '2023-07-02'),
(6, 11, '2023-07-02'),
(7, 11, '2023-07-03'),
(8, 11, '2023-07-03'),
(9, 11, '2023-07-03'),
(10, 1, '2023-07-03'),
(11, 57, '2023-07-03'),
(12, 57, '2023-07-03'),
(13, 1, '2023-07-09'),
(14, 59, '2023-07-13'),
(15, 1, '2023-07-15'),
(16, 1, '2023-07-15'),
(17, 1, '2023-07-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `salesorder`
--
ALTER TABLE `salesorder`
  ADD PRIMARY KEY (`SALES_ORDER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salesorder`
--
ALTER TABLE `salesorder`
  MODIFY `SALES_ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
