USE `IT490`;

DROP TABLE IF EXISTS`recipe`;

CREATE TABLE `recipe`(
    `recipeid`    INT auto_increment, 
    `dishname`    VARCHAR(20), 
    `ptime`       VARCHAR(20),
    `ctime`       VARCHAR(20), 
    `ingred `     VARCHAR(255),
    `instruc`     VARCHAR(255),
    PRIMARY KEY(`recipeID`),
);
