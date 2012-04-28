DROP TABLE IF EXISTS `owners`;
CREATE TABLE owners (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255),
	`last_name` varchar(255),
	`address` varchar(255),
	`city` varchar(255),
	`telephone` varchar(56),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS pet_types;
CREATE TABLE pet_types (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `pets`;
CREATE TABLE `pets` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255),
	`birth_date` datetime,
	`owner_id` int(11),
	`pet_type_id` int(11),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `specialties`;
CREATE TABLE `specialties` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `vet_specialties`;
CREATE TABLE `vet_specialties` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`specialty_id` int(11),
	`vet_id` int(11),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `vets`;
CREATE TABLE `vets` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255),
	`last_name` varchar(255),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS `visits`;
CREATE TABLE `visits` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`visit_date` datetime,
	`description` varchar(512),
	`pet_id` int(11),
	`created` datetime,
	`modified` datetime,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB;
