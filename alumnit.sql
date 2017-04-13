-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 08:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnit`
--
CREATE DATABASE IF NOT EXISTS `alumnit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alumnit`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(20) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `timeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumniId` int(20) NOT NULL,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `timeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verified` varchar(50) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumniId`, `fName`, `lName`, `email`, `password`, `timeCreated`, `verified`) VALUES
(1, 'Roger', 'Jones', 'roger.jones@gmail.com', 'roger', '2017-04-11 05:54:10', 'No'),
(2, 'Mike', 'Mick', 'Mikey@gmail.com', 'mike', '2017-04-11 05:52:50', 'Yes'),
(3, 'Lloyd', 'Jeff', 'lj@hotmail.com', 'lloyd', '2017-04-11 05:52:50', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(20) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `alumniId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degreeId` int(20) NOT NULL,
  `degreeName` varchar(50) NOT NULL,
  `degreeClass` varchar(50) NOT NULL,
  `yearGrad` int(20) NOT NULL,
  `alumniId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `linkId` int(20) NOT NULL,
  `image` int(100) NOT NULL,
  `facebook` int(100) NOT NULL,
  `linkedin` int(100) NOT NULL,
  `alumniId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `personalId` int(20) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `birthCountry` varchar(50) NOT NULL,
  `alumniId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumniId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degreeId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`linkId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personalId`),
  ADD UNIQUE KEY `alumniId` (`alumniId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumniId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degreeId` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `linkId` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `personalId` int(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);

--
-- Constraints for table `link`
--
ALTER TABLE `link`
  ADD CONSTRAINT `link_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`alumniId`) REFERENCES `alumni` (`alumniId`);
--
-- Database: `movie_rentals`
--
CREATE DATABASE IF NOT EXISTS `movie_rentals` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movie_rentals`;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `type`, `number`, `timecreated`) VALUES
(1, 'Spider Doggo', 'Action', 75, '2017-04-07 13:06:47'),
(2, 'Rengar', 'Action', 33, '2017-04-07 13:07:43'),
(3, 'HayDay', 'Triller', 66, '2017-04-07 13:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '0',
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` datetime NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`ID`, `text`, `time`, `userid`) VALUES
(1, 'buy groceries', '2017-03-10 12:14:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `email`, `password`) VALUES
(1, 'bob', 'bob@gmail.com', '2fa5f61a6ed559ffafe67ec039fb5c12f7e85333'),
(27, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(28, 'doug', 'doug@gmail.com', '0798ebecfb7bc4dfb9d0445c2fa030eb64e1fa1c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"alumnit\",\"table\":\"alumni\"},{\"db\":\"alumnit\",\"table\":\"admin\"},{\"db\":\"alumnit\",\"table\":\"company\"},{\"db\":\"alumnit\",\"table\":\"link\"},{\"db\":\"alumnit\",\"table\":\"personal\"},{\"db\":\"alumnit\",\"table\":\"degree\"},{\"db\":\"uwicourse\",\"table\":\"courses\"},{\"db\":\"movie_rentals\",\"table\":\"movies\"},{\"db\":\"movie_rentals\",\"table\":\"users\"},{\"db\":\"mydb\",\"table\":\"user\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2017-02-27 06:10:52', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `telecom`
--
CREATE DATABASE IF NOT EXISTS `telecom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `telecom`;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `date` date NOT NULL,
  `plan` varchar(255) NOT NULL,
  `minutes` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `customerID`, `date`, `plan`, `minutes`, `data`) VALUES
(3, 1, '2017-02-08', 'Student', 250, 20),
(4, 2, '2017-02-04', 'Anytime', 120, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`) VALUES
(1, 'Jeremy'),
(2, 'Hilary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `customerID_2` (`customerID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`id`) ON UPDATE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `uwicourse`
--
CREATE DATABASE IF NOT EXISTS `uwicourse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uwicourse`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `credit` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `credit`, `level`) VALUES
(1, 'INFO1503', 'Web Tech', 4, 3),
(2, 'INFO3410', 'Web Security', 4, 3),
(3, 'INFO3210', 'java Sc', 4, 3),
(4, 'oiuo88', 'jjj', 4, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
