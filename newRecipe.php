<html>
    <head>
        <title>Add Recipe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/insertOneMoreIngredient.js"></script>
    </head>
    <body>
        <div>    
            <form action="addNewRecipe.php" method="POST">
                <input type="text" id="onoma_sintagis" name="onoma_sintagis" placeholder="Recipe Name"> 
                <input type="text" id="katigoria" name="katigoria" placeholder="Category">                  
                <input type="text" id="xronos_ektelesis" name="xronos_ektelesis" placeholder="Executing Time">     
                <table id="ingredients">
                    <tr>
                        <td><strong>Ingredient :</strong></td>
                        <td><strong>Quantity :</strong></td>
                    </tr>
                    <tr>                    
                        <td><strong>1. </strong><input type="text" id="ingredient1" name="ingredient1" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity1" name="quantity1" placeholder="Quantity"></td>
                    </tr>                             
                    <tr>                    
                        <td><strong>2. </strong><input type="text" id="ingredient2" name="ingredient2" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity2" name="quantity2" placeholder="Quantity"></td>
                    </tr>
                    <tr>                    
                        <td><strong>3. </strong><input type="text" id="ingredient3" name="ingredient3" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity3" name="quantity3" placeholder="Quantity"></td>
                    </tr> 
                    <tr>                    
                        <td><strong>4. </strong><input type="text" id="ingredient4" name="ingredient4" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity4" name="quantity4" placeholder="Quantity"></td>
                    </tr> 
                    <tr>                    
                        <td><strong>5. </strong><input type="text" id="ingredient5" name="ingredient5" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity5" name="quantity5" placeholder="Quantity"></td>
                    </tr> 
                    <tr>                    
                        <td><strong>6. </strong><input type="text" id="ingredient6" name="ingredient6" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity6" name="quantity6" placeholder="Quantity"></td>
                    </tr> 
                    <tr>                    
                        <td><strong>7. </strong><input type="text" id="ingredient7" name="ingredient7" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity7" name="quantity7" placeholder="Quantity"></td>
                    </tr> 
                    <tr>                    
                        <td><strong>8. </strong><input type="text" id="ingredient8" name="ingredient8" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity8" name="quantity8" placeholder="Quantity"></td>
                    </tr>
                    <tr>                    
                        <td><strong>9. </strong><input type="text" id="ingredient9" name="ingredient9" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity9" name="quantity9" placeholder="Quantity"></td>
                    </tr> 
                    <tr>                    
                        <td><strong>10. </strong><input type="text" id="ingredient10" name="ingredient10" placeholder="Ingredient"></td>
                        <td><input type="text" id="quantity10" name="quantity10" placeholder="Quantity"></td>
                    </tr> 
                    <tr>
                        <td><textarea id="odigies_ektelesis" name="odigies_ektelesis" placeholder="Odigies ektelesis"></textarea></td>
                    </tr>
                </table>
                <button>Submit</button>
            </form>            
        </div>
    </body>
</html>
