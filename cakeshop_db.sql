-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 11:21 PM
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
-- Database: `cakeshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('GitOPcEsZa6t2K6JM18G', 'dJOtrLagl3V1DyKa7g1E', 'kdrYfxxGDEjyf8ggJF0f', '850', '1'),
('oWV4gDNsJ5W4vILPQ7b6', 'dJOtrLagl3V1DyKa7g1E', 'uL930ynETQ7s5nxePcTu', '650', '1'),
('0LixyuorqIlTGNFdZRg8', 'dJOtrLagl3V1DyKa7g1E', 'p8cDfKOKF51xYvjvJFyd', '660', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cust_products`
--

CREATE TABLE `cust_products` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_products`
--

INSERT INTO `cust_products` (`id`, `name`, `detail`, `price`, `image`) VALUES
('eMREJI9Kj0sE6QiKDvlA', 'Pineapple Cake', 'Add more pineapple jam', '900', 'J5MJNXhjNzXSsGKOJ1Fc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('gYHXzCtPFfkiWuNZaFUi', 'dJOtrLagl3V1DyKa7g1E', 'Sinthia Ishrat', '1235678999', '2114951011@uits.edu.bd', 'Dhaka Bangladesh, trimohoni link road, Dhaka, Bangladesh - 1219', 'home', 'cash on delivery', 'kdrYfxxGDEjyf8ggJF0f', '850', '1', '2024-05-01', 'in progress'),
('ejfp4yUzsnS4VoUGaf6S', 'dJOtrLagl3V1DyKa7g1E', 'Sanjida', '163085741', 'sanjida@gmail.com', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', 'kdrYfxxGDEjyf8ggJF0f', '850', '1', '2024-05-01', 'in progress'),
('BP1ezQ3CNhE0P97Dp9kR', 'dJOtrLagl3V1DyKa7g1E', 'Sanjida', '163085741', 'sanjida@gmail.com', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', '1CtnEBLNJ61UT6J3NQUA', '850', '1', '2024-05-01', 'in progress'),
('n29VhpKHR10ryM0xQycL', 'dJOtrLagl3V1DyKa7g1E', 'Sanjida', '163085741', 'sanjida@gmail.com', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', 'NAFjD39de7bPWdHap2zy', '680', '1', '2024-05-01', 'in progress'),
('KChWF1MZPb716115Qv1U', 'dJOtrLagl3V1DyKa7g1E', 'Sanjida', '163085741', 'sanjida@gmail.com', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', 'Xk8KMH8KN0RjUo1RJnDn', '80', '1', '2024-05-01', 'in progress'),
('5m80y3QmvuwknYUQHsNm', 'dJOtrLagl3V1DyKa7g1E', 'Arif', '1234567', 'arif@gmail.com', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'office', 'credit or debit card', 'JltejsIzQEgvFoH0wBsi', '70', '1', '2024-05-02', 'in progress'),
('z2ghLS18hgLzM04XGbQR', 'dJOtrLagl3V1DyKa7g1E', 'Arif', '1234567', 'arif@gmail.com', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'office', 'credit or debit card', '1CtnEBLNJ61UT6J3NQUA', '850', '1', '2024-05-02', 'in progress'),
('GLYkq5WF45aNIgVb7zx3', 'dJOtrLagl3V1DyKa7g1E', 'Sinthia Ishrat', '1235677888', '2114951011@uits.edu.bd', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', 'FjaTFnXnXdh5kYDKvUuo', '900', '3', '2024-05-02', 'in progress'),
('Iq6t1OwSdEFpLKjOwRKk', 'dJOtrLagl3V1DyKa7g1E', 'Sinthia Ishrat', '1235677888', '2114951011@uits.edu.bd', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', '1CtnEBLNJ61UT6J3NQUA', '850', '2', '2024-05-02', 'in progress'),
('8OFf03NmqXae2KSIdIhJ', 'dJOtrLagl3V1DyKa7g1E', 'Sinthia Ishrat', '1235677888', '2114951011@uits.edu.bd', 'Dhaka Bangladesh, trimohoni link road, Dhaka,  - ', 'home', 'cash on delivery', 'I45SEf1P9OtMx4TJWlME', '900', '3', '2024-05-02', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `ordersinfo`
--

CREATE TABLE `ordersinfo` (
  `ID` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `top_line` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordersinfo`
--

INSERT INTO `ordersinfo` (`ID`, `cust_name`, `top_line`, `details`, `flavour`, `contact`) VALUES
(4, 'Sinthia', 'HBD sanji', 'Color of the cake will be Blue', 'Vanilla', 6737387),
(5, 'Refath', 'HBD Rafi', 'Add some cherry on top', 'Strawberry', 345667687),
(11, 'Tanha', 'HBD to Urmi', 'Give 4/5 cherry on top of the cake', 'Blueberry', 455678),
(14, 'Tithy', 'HBD sanji', 'Spread some sprinkles on the top', 'Rashmalai', 1234568),
(15, 'Ria', 'HBD to Foysal', 'Spread some sprinkles on the top', 'Blueberry', 1421123456);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
('kdrYfxxGDEjyf8ggJF0f', 'lemon cake', '850', 'o9U3utShISNUYU0nQhn4.jpeg'),
('1CtnEBLNJ61UT6J3NQUA', 'Chocolate cake', '850', 'ZIEV7IqDeOCVNLGOT4KI.jpg'),
('I45SEf1P9OtMx4TJWlME', 'Mango Cake', '900', 'UkdsI5y8GXudEjiuW5Lu.jpg'),
('FjaTFnXnXdh5kYDKvUuo', 'Rashmalai Cake', '900', 'ptN3k9wBEs0vMyhALv1F.jpg'),
('p8cDfKOKF51xYvjvJFyd', 'Butterscotch Box Cake', '660', 'lWJeECI8DZ5Qp82Fca2v.png'),
('nWdXiD7SeX7UzIN5Ijai', 'Strawberry Box Cake', '660', 'OOpnGs1ZysnXRIsbMT4Q.png'),
('NAFjD39de7bPWdHap2zy', 'Mango Box Cake', '680', 'RUw2pelFpcieQRdbFCzZ.png'),
('uL930ynETQ7s5nxePcTu', 'Blueberry Box Cake', '650', 'ceqIPE46oESNNDBf6oim.png'),
('YrZofEwvT8tJ3DyCrQbd', 'Chocolate bento cake', '260', '6IGv8wQDo02GY5rkBhLe.jpg'),
('MVpAUyKC7fstYMJiOJy8', 'Blueberry Bento Cake', '280', '1dpdpAC1RoEn0dqOnGzy.jpg'),
('Gn8hwz6Rj3msVAkeUmHU', 'Mango Bento Cake', '280', 'UfZYmXu4PlZ75mHC26p9.jpg'),
('emfVPMWRiXNyoYBfYusu', 'Butterscotch Bento Cake', '260', 'AP9x8gxrq8pP7PXt5Jt3.jpg'),
('PDyOYf5orFdxR4pVczlf', 'Chocolate  cupcake', '90', '6feN8wMVuOrFFr6GafsI.jpg'),
('Xk8KMH8KN0RjUo1RJnDn', 'Butterscotch Cupake', '80', 'j0jbSyuocBFTDKqhwikR.jpg'),
('hDfTEoXqtlwGSHn3PhmT', 'Strawberry Cupake', '80', 'EOe6ytzZduTtfATZY1zA.jpg'),
('cQd8OrBz3xcgaq7BQ0zt', 'Vanilla Cupcake', '70', 'oo7vsXFkqPedostFDoOb.jpg'),
('p8tum48P1gBLvKLFqN1F', 'Chocolate Pastry', '90', 's2RDufMiskQ7E8GWJwhl.jpg'),
('JltejsIzQEgvFoH0wBsi', 'Vanilla Pastry', '70', 'BFHPtXhfqlVZA86ORbK3.jpg'),
('YOsihlkCca7Ph1IM4VMn', 'Strawberry pastry', '80', 'jcxjPk1hMWmkhugXLHvQ.jpg'),
('rUurjr4NE78tGuxEw9Jb', 'Mango Pastry', '90', 'BeLchz8csABqtppbbC3o.jpeg'),
('SvL55RpWyYAPNdF36stf', 'choco orange cake', '900', 'kdgnZ9Uq5spP2LqFjF4y.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `mail`, `password`) VALUES
(1, 'Sinthia', 'sinthia12@gmail.com', '1234'),
(2, 'Shanzida', 'shanzida12@gmail.com', '1020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordersinfo`
--
ALTER TABLE `ordersinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordersinfo`
--
ALTER TABLE `ordersinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
