<?php
require './DBconnection.php';


if(isset($_POST['xronos_ektelesis']))
{
    $categoryRecipes = $databaseConnection->query("SELECT onoma_sintagis,xronos_ektelesis FROM syntages ORDER BY onoma_sintagis DESC");

   while($recipe = $categoryRecipes->fetch_assoc()) 
   {
       if($recipe['xronos_ektelesis'] == $_POST['xronos_ektelesis'])
       {
           echo "<form action='showRecipe.php' method='POST'>".
         "<input type='hidden' name='onoma_sintagis' id='onoma_sintagis' value='{$recipe['onoma_sintagis']}''>".
         "<input type='submit' id='quantity1' name='quantity1' value = '{$recipe['onoma_sintagis']}' placeholder=''>"."</form>";  
           
       }       
   }
    
}
else
{
    header("Location: showCategories.php");
}
