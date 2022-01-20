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

        
    }

    class Printed {
        public function print( Players $players){
            $string = "Name: $players->name,<br>" .
                "Id: $players->id,<br>" .
                "Type: $players->type,<br>" .
                "Health: $players->health,<br>";
            return $string;
        }
    }
?>