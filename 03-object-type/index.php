<?php

    include "object.php";

    

    // OBJECT
    $player_1 = new Players("DikDns", "000001", "Human", 95.2);

    // CREATE INSTANCE OBJECT 2
    $player_2 = new Players("Doobwuz", "000002", "Elf", 83.7);

    $print = new Printed();

    echo "<hr>";
    echo $print->print($player_1);
    echo "<hr>";
    echo $print->print($player_2);
    echo "<hr>";

    





?>