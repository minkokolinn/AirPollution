-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 29, 2022 at 03:43 PM
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
-- Database: `airpollutiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `PostalAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `PhoneNumber`, `Email`, `Password`, `PostalAddress`) VALUES
(1, 'root', '09123456789', 'root@gmail.com', 'root123', 'Myanmar'),
(2, 'admin', '09876452387', 'admin@gmail.com', 'admin123', 'Taunggyi, Myanmar');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryID` int(11) NOT NULL,
  `CountryName` varchar(30) DEFAULT NULL,
  `PollutionRate` varchar(50) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Description` text,
  `CountryImage1` varchar(255) DEFAULT NULL,
  `CountryImage2` varchar(255) DEFAULT NULL,
  `CountryImage3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryID`, `CountryName`, `PollutionRate`, `Year`, `Description`, `CountryImage1`, `CountryImage2`, `CountryImage3`) VALUES
(1, 'Myanmar', '86.70', 2019, 'Destination Myanmar, a country in Southeast Asia, bordering the Andaman Sea and the Bay of Bengal south. It is bordered in north and northeast by China, in east by Laos and Thailand, in west by Bangladesh and the Indian states of Nagaland, Manipur and Mizoram. The country is also known as Burma and called the Golden Land.\r\nThe country covers an area of 676,578 kmÂ², making it almost twice the size of Germany or slightly smaller than the U.S. state of Texas.\r\nProbably the highest elevation in both Myanmar and Southeast Asias is Mount Hkakabo Razi (Khaka Borazi) at  located  Kachin state near the countrys northern border with China, about 110 km (70 mi) north of Putao. Burmas main rivers are the Chindwin (the Mighty Chindwin) the Irrawaddy (Ayeyarwady).\r\nMyanmar has a population of  million people. Largest city, former capital, the economic center of Myanmar is Yangon. Since Burmas new capital is Naypyidaw, a planned city in central. Spoken languages are Burmese (official). Kachin, Kayah, Karen, Chin, Mon, Rakhine, and Shan are regional languages. Rohingya, the language of the Rohingya people from Rakhine State is spoken by about 1.3 million. According to the United Nations, the Rohingya are one of the most persecuted minorities in the world. In 2017 hundreds of thousands Rohingya fled from western Myanmar into neighboring Bangladesh because of the repression and violence they face in Myanmar.', 'CountryImage/myanmar1.jpg', 'CountryImage/myanmar2.jpg', 'CountryImage/myanmar3.jpg'),
(2, 'Thailand', '169', 2016, 'About 90 percent of the people are Buddhist, but about three million Muslims live in the south near the border with Malaysia.\r\n\r\nThai children go to elementary school for six years. Then they may attend high school for another six years, but their families must pay for the education. Boys begin military training in ninth grade.\r\n\r\nFood in Thailand is influenced by Chinese and Indian cultures. Most Thai dishes are spicy and many common dishes include hot chilies, lemongrass, basil, ginger, and coconut milk.\r\n\r\nThai farmers cultivate mulberry trees that feed silkworms. The worms create silk, which is made into beautiful silk clothing in Thailand, France, and the United States.\r\n\r\nBangkok is called the Venice of the East because there are 83 canals. As many as 10,000 boats full of fruits, vegetables, and fish crowd the canals and create a floating market.\r\n\r\nThe city of Bangkok is home to many impressive Buddhist structures featuring gold-layered spires, graceful pagodas, and giant Buddha statues.', 'CountryImage/thailand1.jfif', 'CountryImage/thailand2.jpg', 'CountryImage/thailand3.jpg'),
(3, 'American', '60', 2018, 'Throughout its history, the United States has been a nation of immigrants. The population is diverse with people from all over the world seeking refuge and a better way of life.\r\n\r\nThe country is divided into six regions: New England, the mid-Atlantic, the South, the Midwest, the Southwest, and the West. European settlers came to New England in search of religious freedom. These states are Connecticut, Maine, Massachusetts, New Hampshire, Rhode Island, and Vermont.\r\n\r\nThe mid-Atlantic region includes Delaware, Maryland, New Jersey, New York, Pennsylvania, and the city of Washington, D.C. These industrial areas attracted millions of European immigrants and gave rise to some of the East Coasts largest cities: New York, Baltimore, Philadelphia.\r\n\r\nThe South includes Alabama, Arkansas, Florida, Georgia, Kentucky, Louisiana, Mississippi, North Carolina, South Carolina, Tennessee, Virginia, West Virginia, all of which struggled after the Civil War, which lasted\r\n\r\nThe Midwest is home to the countrys agricultural base and is called the breadbasket. The region comprises the states of Illinois, Indiana, Iowa, Kansas, Michigan, Minnesota, Missouri, Nebraska, North Dakota, Ohio, South Dakota, and Wisconsin.\r\n\r\nThe Southwest is a beautiful stark landscape of prairie and desert. The states of Arizona, New Mexico, Oklahoma, and Texas are considered the Southwest and are home to some of the worlds great natural marvels, including the Grand Canyon and Carlsbad Caverns.\r\n\r\nThe American West, home of rolling plains and the cowboy, is a symbol of the pioneering spirit of the United States. The West is diverse, ranging from endless wilderness to barren desert, coral reefs to Arctic tundra, Hollywood to Yellowstone. The states of the West include Alaska, Colorado, California, Hawaii, Idaho, Montana, Nevada, Oregon, Utah, Washington, and Wyoming.', 'CountryImage/usa1.jpg', 'CountryImage/usa2.jpg', 'CountryImage/usa3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `FeedbackDate` varchar(20) DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `UserID`, `FeedbackDate`, `Comment`) VALUES
(1, 1, '2020-01-10', 'It is useful to view this site. I can get many information about pollutions. It has very good responsiblity'),
(2, 1, '2019-03-16', 'Everyone should see this website to maintain health problem associated with pollution and to maintain global warming');

-- --------------------------------------------------------

--
-- Table structure for table `qanda`
--

CREATE TABLE `qanda` (
  `QuestionID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `QuestionDate` varchar(30) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qanda`
--

INSERT INTO `qanda` (`QuestionID`, `UserID`, `Question`, `QuestionDate`, `Answer`) VALUES
(1, 1, 'How can i create another account!', '2020-01-10', 'You can create account by register page!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `DateOfBirth` varchar(30) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `PostalAddress` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(20) DEFAULT NULL,
  `ProfileImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `PhoneNumber`, `Email`, `Password`, `DateOfBirth`, `Gender`, `PostalAddress`, `PostalCode`, `ProfileImage`) VALUES
(1, 'mgmg', '09254325731', 'mgmg@gmail.com', '123', '28/03/2002', 'Male', 'United Kingdom', 'PC_00123', 'ProfileImage/p1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Indexes for table `qanda`
--
ALTER TABLE `qanda`
  ADD PRIMARY KEY (`QuestionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qanda`
--
ALTER TABLE `qanda`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
