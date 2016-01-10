<?php
require './DBconnection.php';

$allRecipes = $databaseConnection->query("SELECT * FROM syntages ORDER BY id DESC");

for($i=0;$i<2;$i++)
{
    $recipe = $allRecipes->fetch_assoc();
    echo "<form action='showRecipe.php' method='POST'>".
         "<input type='hidden' name='onoma_sintagis' id='onoma_sintagis' value='{$recipe['onoma_sintagis']}''>".
         "<input type='submit' id='quantity1' name='quantity1' value = '{$recipe['onoma_sintagis']}' placeholder=''>"."</form>"; 
}
        

