---------------------
--Table structure for `recipe`
---------------------

USE `IT490`;

DROP TABLE IF EXISTS`recipe`;

CREATE TABLE `recipe` (
    `recipeID` INT AUTO_INCREMENT,
    `foodcatID` INT
    ``


)
CREATE TABLE IF NOT EXISTS recipe(
    recipeID INT auto_increment, 
    foodcatID INT, 
    recipename VARCHAR(48),
    recipedesc VARCHAR(255), 
    preptime TIME,
    cooketime TIME,
    PRIMARY KEY(recipeID),
    FOREIGN KEY(foodcatID) REFERENCES foodcat(foodcatID)
);
