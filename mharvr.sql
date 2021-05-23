-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2021 at 09:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mharvr`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `tratment_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `score` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `virtual_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `avalibility`
--

CREATE TABLE `avalibility` (
  `avalibility_id` int(11) NOT NULL,
  `mh_professional_id` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `time` time NOT NULL,
  `day` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `guardian_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `relation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intake_form`
--

CREATE TABLE `intake_form` (
  `form_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `martial_status` text NOT NULL,
  `family_system` varchar(100) NOT NULL,
  `socioeconomic_status` text NOT NULL,
  `strength` varchar(400) NOT NULL,
  `weakness` varchar(400) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `family_relation` text NOT NULL,
  `friends_relation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mh_professional`
--

CREATE TABLE `mh_professional` (
  `mh_professional_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `work_experience` varchar(500) NOT NULL,
  `certification` varchar(100) NOT NULL,
  `professional_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `residential_add` varchar(500) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perscription`
--

CREATE TABLE `perscription` (
  `perscription_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `med_name` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `dose` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `physical`
--

CREATE TABLE `physical` (
  `physical_id` int(11) NOT NULL,
  `avalibility_id` int(11) NOT NULL,
  `fees` float NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `specialist` varchar(200) NOT NULL,
  `plot_no` varchar(100) NOT NULL,
  `timing` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `user_type`, `email`, `password`) VALUES
(1, 'sana rehan', '', 'sanarehan10@mharvr.com', '123'),
(2, 'mustafa ali', '', 'mustafa_ali@mharvr.com', '246'),
(3, 'samreen raza', '', 'samreenraza@mharvr.com', '369'),
(4, 'rida imtiaz', '', 'ridaimtiaz@mharvr.com', 'asd'),
(5, 'hamza ahmed', '', 'hamzaahmed@mharvr.com', 'qwerty'),
(6, 'hammad', '', 'hammad45@mharvr.com', '23'),
(7, 'amar riaz', '', 'amarriaz45@mharvr.com', '23sep'),
(8, 'asim raza', '', 'asim@mharvr.com', 'cat'),
(9, 'anum', '', 'anum10@gmail.com', '23'),
(10, 'samreen raza', '', 'samreenraza12@mharvr.com', '25d55ad283aa400af464c76d713c07ad'),
(11, 'amara', 'Patient', 'amara89@gmail.com', '604b0641712d7abaa82cc37bdc5f57ea');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `analysis` varchar(500) NOT NULL,
  `period` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `therapy`
--

CREATE TABLE `therapy` (
  `therapy_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `treatment_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_process`
--

CREATE TABLE `treatment_process` (
  `treatment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `mh_professional_id` int(11) NOT NULL,
  `therapy_id` int(11) NOT NULL,
  `disorder_type` varchar(100) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `virtual`
--

CREATE TABLE `virtual` (
  `virtual_id` int(11) NOT NULL,
  `avalibility_id` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `link` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `tratment_id` (`tratment_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `virtual_id` (`virtual_id`);

--
-- Indexes for table `avalibility`
--
ALTER TABLE `avalibility`
  ADD PRIMARY KEY (`avalibility_id`),
  ADD KEY `mh_professional_id` (`mh_professional_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`guardian_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `intake_form`
--
ALTER TABLE `intake_form`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `mh_professional`
--
ALTER TABLE `mh_professional`
  ADD PRIMARY KEY (`mh_professional_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `appointment_id` (`appointment_id`);

--
-- Indexes for table `perscription`
--
ALTER TABLE `perscription`
  ADD PRIMARY KEY (`perscription_id`),
  ADD KEY `report_id` (`report_id`);

--
-- Indexes for table `physical`
--
ALTER TABLE `physical`
  ADD PRIMARY KEY (`physical_id`),
  ADD KEY `avalibility_id` (`avalibility_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`therapy_id`),
  ADD KEY `form_id` (`form_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `treatment_process`
--
ALTER TABLE `treatment_process`
  ADD PRIMARY KEY (`treatment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `mh_professional_id` (`mh_professional_id`);

--
-- Indexes for table `virtual`
--
ALTER TABLE `virtual`
  ADD PRIMARY KEY (`virtual_id`),
  ADD KEY `avalibility_id` (`avalibility_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `avalibility`
--
ALTER TABLE `avalibility`
  MODIFY `avalibility_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `guardian_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intake_form`
--
ALTER TABLE `intake_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mh_professional`
--
ALTER TABLE `mh_professional`
  MODIFY `mh_professional_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perscription`
--
ALTER TABLE `perscription`
  MODIFY `perscription_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physical`
--
ALTER TABLE `physical`
  MODIFY `physical_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `therapy`
--
ALTER TABLE `therapy`
  MODIFY `therapy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment_process`
--
ALTER TABLE `treatment_process`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `virtual`
--
ALTER TABLE `virtual`
  MODIFY `virtual_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`tratment_id`) REFERENCES `treatment_process` (`treatment_id`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`virtual_id`) REFERENCES `virtual` (`virtual_id`);

--
-- Constraints for table `avalibility`
--
ALTER TABLE `avalibility`
  ADD CONSTRAINT `avalibility_ibfk_1` FOREIGN KEY (`mh_professional_id`) REFERENCES `mh_professional` (`mh_professional_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`treatment_id`) REFERENCES `treatment_process` (`treatment_id`);

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `intake_form`
--
ALTER TABLE `intake_form`
  ADD CONSTRAINT `intake_form_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `mh_professional`
--
ALTER TABLE `mh_professional`
  ADD CONSTRAINT `mh_professional_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`appointment_id`);

--
-- Constraints for table `perscription`
--
ALTER TABLE `perscription`
  ADD CONSTRAINT `perscription_ibfk_1` FOREIGN KEY (`report_id`) REFERENCES `report` (`report_id`);

--
-- Constraints for table `physical`
--
ALTER TABLE `physical`
  ADD CONSTRAINT `physical_ibfk_1` FOREIGN KEY (`avalibility_id`) REFERENCES `avalibility` (`avalibility_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`treatment_id`) REFERENCES `treatment_process` (`treatment_id`);

--
-- Constraints for table `therapy`
--
ALTER TABLE `therapy`
  ADD CONSTRAINT `therapy_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `intake_form` (`form_id`),
  ADD CONSTRAINT `therapy_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `therapy_ibfk_3` FOREIGN KEY (`treatment_id`) REFERENCES `treatment_process` (`treatment_id`);

--
-- Constraints for table `treatment_process`
--
ALTER TABLE `treatment_process`
  ADD CONSTRAINT `treatment_process_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `treatment_process_ibfk_2` FOREIGN KEY (`mh_professional_id`) REFERENCES `mh_professional` (`mh_professional_id`);

--
-- Constraints for table `virtual`
--
ALTER TABLE `virtual`
  ADD CONSTRAINT `virtual_ibfk_1` FOREIGN KEY (`avalibility_id`) REFERENCES `avalibility` (`avalibility_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
