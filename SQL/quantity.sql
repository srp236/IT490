CREATE TABLE IF NOT EXIST quantity(
    quantityID INT auto_increment,
    recipeID INT,
    ingredientsID INT,
    iMeasurementID INT,
    iQuantity float,
    PRIMARY KEY(quantityID),
    FOREIGN KEY(recipeID) REFERENCES recipe(recipeID),
    FOREIGN KEY(ingredientsID) REFERENCES ingredients(ingredientsID),
    FOREIGN KEY(measureID) REFERENCES measurements(measureID),
);
