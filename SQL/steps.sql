CREATE TABLE IF NOT EXISTS steps(
    stepID INT auto_increment,
    recipeID INT,
    stepNum INT, 
    stepDesc VARCHAR,
    PRIMARY KEY(stepID),
    FOREIGN KEY(recipeID) REFERENCES recipe(recipeID),
);
