<?php

    // CLASS
    class Players {
        public $name = "Anonymous",
            $id = "000000",
            $type = "Human",
            $health = 100.0;

        public function getLabel(){
            $string = "name: $this->name,<br>" .
                "id: $this->id,<br>" .
                "type: $this->type,<br>" .
                "health: $this->health,<br>" .
                "<br>";
            return $string;
        }
    }

    // OBJECT
    $player_1 = new Players();

    // MANIPULATE OBJECT INSTANCES
    $player_1->name = "DikDns";
    $player_1->id = "000001";
    $player_1->health = 95.2;
    // ADD PROPERTY
    $player_1->special = "MOD";   // Careful

    // CREATE INSTANCE OBJECT 2
    $player_2 = new Players();

    $player_2->name = "Doobwuz";
    $player_2->id = "000002";
    $player_2->health = 42.8;
    $player_2->type = "Elf";

    echo $player_1->getLabel();
    echo $player_2->getLabel();

    





?>