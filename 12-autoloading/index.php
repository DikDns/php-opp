<?php

    require_once "App/init.php";

    // OBJECT
    $product_1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30, 100);
    $product_2 = new VideoGame("Uncharted", "Neil Druckman", "Sony Computer", 100, 50);

    $print_product = new PrintInfo();

    $print_product->setProductList($product_1);
    $print_product->setProductList($product_2);

    echo $print_product->print();

    echo "<hr>";

    $coba = new Coba();



?>