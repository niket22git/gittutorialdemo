<?php

    $JSON = file_get_contents("wizard.json");
    $jsonIterator  = json_decode($JSON,true);

    foreach ($jsonIterator as $item){
        echo $item["name"]. " 's wand is ";
        foreach($item["wand"] as $sub_element){
            echo $sub_element["wood"] . ", ";
            echo $sub_element["length"] ,", with a ";
            echo $sub_element["core"] ." core.";
        }
        echo "<br>";
    }
?>