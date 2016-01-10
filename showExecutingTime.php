<?php

require './DBconnection.php';

$allRecipes = $databaseConnection->query("SELECT DISTINCT xronos_ektelesis FROM syntages ORDER BY xronos_ektelesis ASC");
$i=0;
foreach($allRecipes as $recipe)
{    
    echo "<form action='showExecutingTimeRecipes.php' method='POST'>".
         "<input type='hidden' name='xronos_ektelesis' id='xronos_ektelesis' value='{$recipe['xronos_ektelesis']}''>".
         "<input type='submit' id='#' name='#' value = '{$recipe['xronos_ektelesis']}' placeholder=''>"."</form>";     
}