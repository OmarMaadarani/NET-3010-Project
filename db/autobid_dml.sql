-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 08:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autobid`
--
CREATE DATABASE IF NOT EXISTS `autobid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autobid`;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `userID`, `listingID`, `imgPath`, `imageName`) VALUES
(6, 3, 5, '/NET-3010-Project/imgs/listings/5/2018_BMW_M5_Automatic_4.4.jpg', '2018_BMW_M5_Automatic_4.4.jpg'),
(7, 3, 6, '/NET-3010-Project/imgs/listings/6/Honda_Civic_Type_R_(FK;_France)_front_view.jpg', 'Honda_Civic_Type_R_(FK;_France)_front_view.jpg');

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listingID`, `userID`, `carMake`, `carModel`, `price`, `mileage`, `year`, `description`) VALUES
(5, 3, 'BMW', '5 Series', '1000000.00', 1000000, 2018, 'The 2018 BMW M5 is a high-performance luxury sports sedan that offers exhilarating driving dynamics, refined comfort, and cutting-edge technology. It comes with a powerful 4.4-liter V8 engine that produces 600 horsepower and 553 lb-ft of torque, paired with an eight-speed automatic transmission and rear-wheel drive (AWD optional). The M5 features aggressive styling cues, such as enlarged front air intakes, wider fenders, and a rear spoiler, along with distinctive M badges. Inside, the cabin offers premium materials, comfortable seating, and advanced infotainment and driver-assistance features. The 2018 BMW M5 delivers impressive performance, with a 0-60 mph acceleration time of just 3.2 seconds, making it a thrilling and luxurious choice for enthusiasts who demand the best in performance and luxury.'),
(6, 3, 'Honda', 'Civic', '400000.00', 600000, 2021, 'The 2021 Honda Civic Type R is a high-performance hatchback that offers a thrilling driving experience and sporty styling. It features a turbocharged 2.0-liter four-cylinder engine that produces 306 horsepower and 295 lb-ft of torque, mated to a six-speed manual transmission for an engaging driving experience. The Civic Type R boasts a track-tuned suspension, Brembo brakes, and aggressive aerodynamics for improved performance and handling. It also offers a unique, race-inspired interior with sporty seats, a sport steering wheel, and advanced technology features, including a touchscreen infotainment system with navigation and smartphone integration. With its powerful performance, track-ready capabilities, and distinctive looks, the 2021 Honda Civic Type R is a top choice for driving enthusiasts who crave excitement on the road.');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `lastlogin`, `permissions`) VALUES
(1, '', 'admin', 'password', '0000-00-00', 3),
(2, '', 'customer', 'password', '0000-00-00', 2),
(3, 'omzy123@hotmail.com', 'omzy', 'Ommafa', '0000-00-00', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
