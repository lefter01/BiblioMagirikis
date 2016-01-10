<?php
require './DBconnection.php';


if(isset($_POST['category']))
{
    $categoryRecipes = $databaseConnection->query("SELECT onoma_sintagis,katigoria FROM syntages ORDER BY id DESC");

   while($recipe = $categoryRecipes->fetch_assoc()) 
   {
       if($recipe['katigoria'] == $_POST['category'])
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
