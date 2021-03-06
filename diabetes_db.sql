CREATE DATABASE `diabetes` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE TABLE `exam_type` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `exercise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `time_period` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `duration` varchar(5) DEFAULT NULL,
  `intensity` varchar(50) DEFAULT NULL,
  `comment` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `exercise_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `food_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `serve_size` varchar(50) DEFAULT NULL,
  `carbs` int(11) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  `fav` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `inject_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `insulin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `time_period` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `doseage` int(11) NOT NULL,
  `inject_type` varchar(50) NOT NULL,
  `comment` mediumtext,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `insulin_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `labtest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `range` varchar(50) DEFAULT NULL,
  `comments` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `meal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `meal` varchar(25) DEFAULT NULL,
  `food_item` varchar(50) DEFAULT NULL,
  `svgs` decimal(32,2) DEFAULT NULL,
  `carbs` int(11) DEFAULT NULL,
  `totalcarbs` double DEFAULT NULL,
  `favorite` tinyint(4) DEFAULT NULL,
  `comment` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `medication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `time_period` varchar(50) DEFAULT NULL,
  `medication` varchar(50) DEFAULT NULL,
  `dose` varchar(50) DEFAULT NULL,
  `no_pills` int(11) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `medicine_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medication` varchar(50) DEFAULT NULL,
  `dose` varchar(50) DEFAULT NULL,
  `filled_on` date DEFAULT NULL,
  `refill_due` date DEFAULT NULL,
  `parmacy` varchar(50) DEFAULT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  `prescrp_no` varchar(50) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
CREATE TABLE `readings` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `read_date` date NOT NULL,
  `read_time` time NOT NULL,
  `time_period` varchar(25) DEFAULT NULL,
  `glucose_value` int(4) NOT NULL,
  `sample_site` varchar(20) DEFAULT NULL,
  `last_meal` int(11) DEFAULT NULL,
  `comment` longtext,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `site_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` varchar(45) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `test_types` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `hide` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `period_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `period` varchar(45) DEFAULT NULL,
  `hide` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `address3` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonetype` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
