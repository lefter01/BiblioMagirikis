<?php

require './DBconnection.php';
echo '<link type="text/css" rel="stylesheet" href="css/showCategories.css">';
$allRecipes = $databaseConnection->query("SELECT DISTINCT katigoria FROM syntages ORDER BY id DESC");
$i=0;
foreach($allRecipes as $recipe)
{    
    echo "<form action='showCategoryRecipes.php' method='POST'>".
         "<input type='hidden' name='category' id='category' value='{$recipe['katigoria']}''>".
         "<input type='submit' id='quantity1' name='quantity1' value = '{$recipe['katigoria']}' placeholder=''>"."</form>";     
}