<?php

    include "object.php";

    

    // OBJECT
    $player_1 = new Human("DikDns", "000001", "Human", 95.2, true);

    // CREATE INSTANCE OBJECT 2
    $player_2 = new Elf("Doobwuz", "000002", "Elf", 83.7);

    $print = new Printed();

    // echo "<hr>";
    // echo $print->print($player_1);
    // echo "<hr>";
    // echo $print->print($player_2);
    // echo "<hr>";
    
    echo "<hr>";
    echo $player_1->getInfo();
    echo "<hr>";
    echo $player_2->getInfo();
    echo "<hr>";
    





?>