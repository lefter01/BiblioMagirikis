<?php

require './DBconnection.php';

if (isset($_POST['onoma_sintagis'])) {
    $recipes = $databaseConnection->query("SELECT * FROM syntages WHERE onoma_sintagis = '{$_POST['onoma_sintagis']}' ORDER BY id DESC");

    $recipe = $recipes->fetch_assoc(); 
        echo "<a href='index.php'>Go To Main Page</a>"."</br>";
        echo 
            "Συνταγή: ".$recipe['onoma_sintagis']."</br>"
            ."Χρονος Εκτελεσηs: " . $recipe['xronos_ektelesis']."</br>".
            "<div>
                    <ul>
                    Υλικά
                        <li>{$recipe['ing1']}</li>
                        <li>{$recipe['ing2']}</li>
                        <li>{$recipe['ing3']}</li>
                        <li>{$recipe['ing4']}</li>
                        <li>{$recipe['ing5']}</li>    
                        <li>{$recipe['ing6']}</li>
                        <li>{$recipe['ing7']}</li>
                        <li>{$recipe['ing8']}</li>
                        <li>{$recipe['ing9']}</li>
                        <li>{$recipe['ing10']}</li>
                    </ul>
            </div>".
        "<div>
                    <ul>
                    Ποσότητα 
                        <li>{$recipe['quant1']}</li>
                        <li>{$recipe['quant2']}</li>
                        <li>{$recipe['quant3']}</li>
                        <li>{$recipe['quant4']}</li>
                        <li>{$recipe['quant5']}</li>    
                        <li>{$recipe['quant6']}</li>
                        <li>{$recipe['quant7']}</li>
                        <li>{$recipe['quant8']}</li>
                        <li>{$recipe['quant9']}</li>
                        <li>{$recipe['quant10']}</li>
                    </ul>
        </div>" ;
    
}