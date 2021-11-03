Select
    r.recipeID AS rID
    r.recipename AS rName
    r.recipedesc AS rDesc
    r.preptime AS pTime
    r.cooktime AS cTime
    f.foodcat AS fCat
  FROM recipe AS r
  JOIN foodcat AS
