USE `IT490`; 

DROP TABLE IF EXISTS `userSess`;

CREATE TABLE `userSess` (
    `sessID`          CHAR(32)         NOT NUll,
    `username`        VARCHAR(20)      NOT NUll,
    `logTime`         time             NOT NULL,
    UNIQUE(`sessID`)
);
