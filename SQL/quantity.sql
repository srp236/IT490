CREATE TABLE IF NOT EXIST quantity(
    quantityID INT auto_increment,
    recipeID INT,
    ingredientsID INT,
    iMeasurementID INT,
    iQuantity float,
    Primary Key(quantityID),
    
