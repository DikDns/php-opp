<?php

    include "object.php";

    

    // OBJECT
    $product_1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30, 100);

    $product_2 = new VideoGame("Uncharted", "Neil Druckman", "Sony Computer", 100, 50);

    echo "<hr>";
    echo $product_1->getInfo();
    echo "<hr>";
    echo $product_2->getInfo();
    echo "<hr>";
    
    echo $product_1->getAuthor();



?>