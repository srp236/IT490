Select
    r.recipeID AS rID,
    r.recipename AS rName,
    r.recipedesc AS rDesc,
    r.preptime AS pTime,
    r.cuisine AS cuisine,
    r.cooktime AS cTime,
    c.course_name AS course,
    f.foodcat AS fCat
  FROM recipe AS r
  JOIN foodcat AS fc ON fc.food_category_id = r.food_category_id
 
