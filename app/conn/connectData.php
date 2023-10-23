<?php
    $jsonString = file_get_contents('app/data/shoes.json');
    $shoe_array = json_decode($jsonString, true);
    
?>