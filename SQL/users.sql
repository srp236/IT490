---------------------
--Table structure for `users`
---------------------

USE `IT490`;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
    `id`             INT              AUTO_INCREMENT,
    `fname`          VARCHAR(20)      NOT NULL, 
    `lname`          VARCHAR(30)      NOT NULL,
    `username`       VARCHAR(60)      NOT NULL,
    `email`          VARCHAR(60)      NOT NULL,
    `password`       VARCHAR(60)      NOT NULL,
    `created`        timestamp        default CURRENT_TIMESTAMP,
    PRIMARY KEY(`id`),
    UNIQUE(`id`),
    UNIQUE (`username`),
    UNIQUE (`email`)
);

---------------------
--Table structure for `userSess`
---------------------
DROP TABLE IF EXISTS `userSess`;

CREATE TABLE `userSess` (
    `sessID`          CHAR(32)         NOT NUll,
    `username`        VARCHAR(20)      NOT NUll,
    `logTime`         time             NOT NULL
    FOREIGN KEY(`username`) REFERENCES `users`(`username`),
    PRIMARY KEY(`username`),
    UNIQUE(`sessID`)
);