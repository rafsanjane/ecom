-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 03:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(11) NOT NULL,
  `percent` decimal(10,0) NOT NULL,
  `ammount` decimal(10,0) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `select_type` varchar(20) NOT NULL DEFAULT 'percent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `percent`, `ammount`, `coupon_code`, `select_type`) VALUES
(2, '0', '500', 'EID-UL-Adha-2022', 'Ammount'),
(3, '35', '0', 'EID-UL-FITAR-2022', 'Percent'),
(4, '0', '1000', 'EID-UL-FITAR-2021', 'Ammount'),
(5, '40', '0', 'EID-UL-Adha-2021', 'Percent'),
(6, '25', '0', 'EID-UL-Adha-2022', 'Percent'),
(7, '0', '250', 'EID-UL-Adha-2022', 'Ammount'),
(8, '0', '300', 'EID-UL-Adha-2022', 'Ammount'),
(9, '0', '350', 'EID-UL-Adha-2022', 'Ammount');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_status` varchar(20) NOT NULL,
  `delivery_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `discount_ammount` float NOT NULL,
  `paid_ammount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feature_image` varchar(255) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `user_id`, `feature_image`, `gallery`, `product_name`, `description`, `quantity`, `price`, `discount_price`) VALUES
(1, 3, 1, 'img/1646054370.webp', '[\"img/1646054370.webp\",\"img/1646054370.webp\"]', '0.5 Carat Created Diamond Engagement Ring Romantic Fine Jewelry White Gold Color Solid 925 Silver Wedding Band for Woman NR036', '<ul>\r\n	<li>Brand Name:&nbsp;yanhui</li>\r\n	<li>Metals Type:&nbsp;Silver</li>\r\n	<li>Metal Stamp:&nbsp;925,Sterling</li>\r\n	<li>Gender:&nbsp;Women</li>\r\n	<li>Main Stone:&nbsp;Zircon</li>\r\n	<li>CertificateType:&nbsp;Third Party Appraisal</li>\r\n	<li>Fine or Fashion:&nbsp;Fine</li>\r\n	<li>Setting Type:&nbsp;Prong Setting</li>\r\n	<li>Side Stone:&nbsp;Zircon</li>\r\n	<li>Item Type:&nbsp;Rings</li>\r\n	<li>Certificate Number:&nbsp;see pics</li>\r\n	<li>Model Number:&nbsp;03</li>\r\n	<li>Shapepattern:&nbsp;Round</li>\r\n	<li>Style:&nbsp;TRENDY</li>\r\n	<li>Rings Type:&nbsp;Wedding Bands</li>\r\n	<li>is_customized:&nbsp;Yes</li>\r\n	<li>Occasion:&nbsp;Wedding</li>\r\n	<li>Stamp/Logo:&nbsp;S925</li>\r\n</ul>\r\n', 9, 12300, 428.35),
(2, 1, 3, '', '[\"img/1646054663.webp\",\"img/1646054663.webp\"]', 'Original Lenovo LP1S TWS Earphone Wireless Bluetooth 5.0 Headphones Waterproof Sport Headsets Noise Reduction Earbuds with Mic', '<p>Lenovo LP2 Wirless Bluetooth 5.0 Earphones Stereo Bass Touch Control Wireless Headphone Sports Earbuds Waterproof Headset Mic</p>\r\n\r\n<p><strong>About Dropshipping:</strong><br />\r\n<br />\r\n1.Accept Dropshipping, and we will DO NOT put any invoices, QR codes, promotions in the shipment, So Don’t worry, Just buy it, we will do anything well for you.<br />\r\n2.We are guarantee each device be tested rigorously before shipped out, SO all products can guarantee 100% high quality before sent out. Thank you very much!<br />\r\n<br />\r\nName：<br />\r\nLenovo LP2<br />\r\n<br />\r\nFeature<br />\r\n1, Bluetooth V5.0, support most of bluetooth devices and lower power consumption<br />\r\n2, 300mAh charging case can full charge 2 earphones around 5 times, offer more 24 Hours musci time<br />\r\n3, With waterproof technology, no need to worry about water and sweat anymore<br />\r\n4, 10mms dual drive units, enjoy 9D strong deep bass music sound<br />\r\n5, Popular touch control function, support switch songs, phone call and call voice assiatant.<br />\r\n<br />\r\nAccessories Lists:<br />\r\n2* Bluetooth Earphones<br />\r\n1* Charging Case<br />\r\n1* USB Cable<br />\r\n1* User Manual</p>\r\n', 5, 600, 450),
(3, 4, 1, 'img/1646055649.webp', '[\"img/1646055649.webp\",\"img/1646055649.webp\"]', 'JMPRS Vintage Women Plaid Shirts Autumn Long Sleeve Oversize Button Up Tops Korean Loose Casual Fall Outwear Femme Shirts', '<ul>\r\n	<li>Brand Name:&nbsp;JMPRS</li>\r\n	<li>Pattern Type:&nbsp;Geometric</li>\r\n	<li>Clothing Length:&nbsp;Regular</li>\r\n	<li>Material:&nbsp;Polyester</li>\r\n	<li>Material:&nbsp;Cotton</li>\r\n	<li>Collar:&nbsp;O-Neck</li>\r\n	<li>Origin:&nbsp;CN(Origin)</li>\r\n	<li>Season:&nbsp;Winter</li>\r\n	<li>Decoration:&nbsp;NONE</li>\r\n	<li>Sleeve Length(cm):&nbsp;Full</li>\r\n	<li>Sleeve Style:&nbsp;Regular</li>\r\n	<li>Thickness:&nbsp;STANDARD</li>\r\n	<li>Style:&nbsp;Casual</li>\r\n	<li>Age:&nbsp;Ages 16-28 Years Old</li>\r\n	<li>Closure Type:&nbsp;None</li>\r\n	<li>Gender:&nbsp;WOMEN</li>\r\n</ul>\r\n', 50, 1300, 924.64),
(5, 2, 2, 'img/1646076614.webp', '[\"img/1646076614.webp\",\"img/1646076614.webp\"]', 'Mens Casual 100% Cotton Oxford Solid Dress Shirt Single Patch Pocket Long Sleeve Standard-Fit Comfortable Button-Down Men Shirts', '<p><strong>1) If you can not understand our size description or you are doubt about size , Please contact with us . you also can remark your height ,weight and other measurements in order, e.g 180cm /80kg or 5&#39;11&#39;&#39;/175lb.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2) Normally, the shirt size should be bigger than your body size. you can check your usual shirt. if your body chest is 100cm, we suggest you choose shirt with 104cm or 108cm.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3）Please check the size of the order carefully, or contact us before you place the order. There may be 1-3 cm of measurement error.</strong></p>\r\n\r\n<p>​​​​​​</p>\r\n\r\n<ul>\r\n	<li>Brand Name:&nbsp;PAULFITZGERALD</li>\r\n	<li>Origin:&nbsp;CN(Origin)</li>\r\n	<li>Material:&nbsp;Cotton</li>\r\n	<li>Material:&nbsp;Polyester Fiber</li>\r\n	<li>Applicable Scene:&nbsp;Daily</li>\r\n	<li>Shirts Type:&nbsp;Casual Shirts</li>\r\n	<li>Sleeve Length(cm):&nbsp;Full</li>\r\n	<li>Style:&nbsp;Smart Casual</li>\r\n	<li>Applicable Season:&nbsp;Spring and Autumn</li>\r\n	<li>Collar:&nbsp;Turn-down Collar</li>\r\n	<li>Closure Type:&nbsp;Single Breasted</li>\r\n	<li>Item Type:&nbsp;Shirts</li>\r\n	<li>Sleeve Style:&nbsp;Regular</li>\r\n	<li>Gender:&nbsp;MEN</li>\r\n	<li>Model Number:&nbsp;XSF HW</li>\r\n	<li>Fabric Type:&nbsp;Oxford</li>\r\n	<li>Pattern Type:&nbsp;Solid</li>\r\n	<li>Size:&nbsp;S/M/L/XL/2XL/3XL/4XL</li>\r\n	<li>Style:&nbsp;mens dress shirts</li>\r\n	<li>Color:&nbsp;Blue/Black/ Gray/Red/white/green/Pink</li>\r\n</ul>\r\n', 500, 1200, 1000),
(6, 3, 1, '', '{\"0\":\"img/1646077306.webp\",\"6\":\"img/1646623308.webp\",\"7\":\"img/1646623308.webp\",\"8\":\"img/1646623308.webp\"}', '0.5 Carat Created Diamond Engagement Ring', '<h2><strong>0.5 Carat Created Diamond Engagement Ring Romantic Fine Jewelry White Gold Color Solid 925 Silver Wedding Band for Woman NR036</strong></h2>\r\n\r\n<ul>\r\n	<li>Brand Name: yanhui</li>\r\n	<li>Metals Type: Silver</li>\r\n	<li>Metal Stamp: 925,Sterling</li>\r\n	<li>Gender: Women</li>\r\n	<li>Main Stone: Zircon</li>\r\n	<li>CertificateType: Third Party Appraisal</li>\r\n	<li>Fine or Fashion: Fine</li>\r\n	<li>Setting Type: Prong Setting</li>\r\n	<li>Side Stone: Zircon</li>\r\n	<li>Item Type: Rings</li>\r\n	<li>Certificate Number: see pics</li>\r\n	<li>Model Number: 03</li>\r\n	<li>Shapepattern: Round</li>\r\n	<li>Style: TRENDY</li>\r\n	<li>Rings Type: Wedding Bands</li>\r\n	<li>is_customized: Yes</li>\r\n	<li>Occasion: Wedding</li>\r\n	<li>Stamp/Logo: S925</li>\r\n</ul>\r\n', 15, 7000, 5500),
(19, 1, 3, '', '{\"0\":\"img/1646629479_209772168562259267f1c51.webp\",\"1\":\"img/1646629479_96994529862259267f1cd8.webp\",\"2\":\"img/1646629479_74439945962259267f1d71.webp\",\"4\":\"img/1646629503.webp\"}', 'Original Lenovo LP1S TWS Earphone Wireless Bluetooth 5.0 Headphones Waterproof Sport Headsets Noise Reduction Earbuds with Mic', '', 4, 11500, 428.35);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category_name`, `category_slug`, `category_image`) VALUES
(1, 'Gadget and Gear', 'Gadget-Gear', 'img/1644808203.webp'),
(2, 'MENS Wearing', 'mens-wearing', 'img/1644809547.webp'),
(3, 'Jewelry', 'jewelry', 'img/1646054240.webp'),
(4, 'Women Wearing', 'women-wearing', 'img/1646055510.webp');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_phone` varchar(18) NOT NULL,
  `receiver_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `password` varchar(255) NOT NULL,
  `social_login_token` varchar(70) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `password`, `social_login_token`, `role`) VALUES
(1, 'Alex', 'Alex@gmail.com', '016000000', '1234', '', 'User'),
(2, 'John Wick', 'john@gmail.com', '0180000000', '1234', '', 'Admin'),
(3, 'Roxie J. Douglas', 'RoxieJDouglas@armyspy.com', '609-984-8503', '111', '', 'Seller'),
(5, 'Anta', 'anta@gmail.com', '5149627237', '1234', '', 'Admin'),
(7, 'R Jani', 'email@gmail.com', '500005000', '4444', '', 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
