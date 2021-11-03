CREATE TABLE IF NOT EXISTS recipe(
    recipeID INT auto_increment, 
    foodcatID INT, 
    recipename VARCHAR,
    recipedesc VARCHAR, 
    preptime TIME,
    cooketime TIME,
    PRIMARY KEY(recipeID),
    FOREIGN KEY(foodcatID) REFERENCES FoodCat(foodcatID),
);
