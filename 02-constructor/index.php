<?php

    // CLASS
    class Players {
        public $name,$id,$type,$health;

        // CONSTRUCTOR
        public function __construct( $name = "Anonymous", $id = "000000", $type = "Human", $health = 100.0 ) {
            $this->name = $name;
            $this->id = $id;
            $this->type = $type;
            $this->health = $health;
        }

        public function getLabel(){
            $string = "Name: $this->name,<br>" .
                "Id: $this->id,<br>" .
                "Type: $this->type,<br>" .
                "Health: $this->health,<br>" .
                "<br>";
            return $string;
        }
    }

    // OBJECT
    $player_1 = new Players("DikDns", "000001", "Human", 95.2);

    // CREATE INSTANCE OBJECT 2
    $player_2 = new Players("Doobwuz", "000002", "Elf", 83.7);

    echo $player_1->getLabel();
    echo $player_2->getLabel();

    





?>