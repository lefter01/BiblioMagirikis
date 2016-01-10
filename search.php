<?php
require './DBconnection.php';

if(isset($_POST['search']))
{       
    $search = $_POST['search'];
    if($search != '')
    {
            $searchResult = $databaseConnection->query("SELECT onoma_sintagis FROM syntages WHERE (katigoria='{$search}') OR (onoma_sintagis='{$search}')"
        . " OR(xronos_ektelesis='{$search}')"
        . "OR (ing1='{$search}')"
        . "OR (ing2='{$search}')"
        . "OR (ing3='{$search}')"
        . "OR (ing4='{$search}')"
        . "OR (ing5='{$search}')"
        . "OR (ing6='{$search}')"
        . "OR (ing7='{$search}')"
        . "OR (ing8='{$search}')"
        . "OR (ing9='{$search}')"
        . "OR (ing10='{$search}') ORDER BY id DESC");

        
            foreach($searchResult as $recipe)
            {  
                    echo "<form action='showRecipe.php' method='POST'>".
                     "<input type='hidden' name='onoma_sintagis' id='onoma_sintagis' value='{$recipe['onoma_sintagis']}''>".
                     "<input type='submit' id='#' name='#' value = '{$recipe['onoma_sintagis']}' placeholder=''>"."</form>";
            }  
         
    } 
}