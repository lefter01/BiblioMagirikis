<?php

require './DBconnection.php';

$allRecipes = $databaseConnection->query("SELECT onoma_sintagis FROM syntages ORDER BY id DESC");
$i=0;
echo '<link type="text/css" rel="stylesheet" href="css/showAllRecipes.css">';
foreach($allRecipes as $recipe)
{       
echo "<form action='showRecipe.php' method='POST'>".
         "<input type='hidden' name='onoma_sintagis' id='onoma_sintagis' value='{$recipe['onoma_sintagis']}''>".
         "<input type='submit' id='quantity1' name='quantity1' value = '{$recipe['onoma_sintagis']}' placeholder=''>"."</form>"; 
}