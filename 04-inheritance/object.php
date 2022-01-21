<?php
    // CLASS
    class Players {
        public $name,$id,$type,$health,$mod;

        // CONSTRUCTOR
        public function __construct( $name = "Anonymous", $id = "000000", $type = "Human", $health = 100.0, $mod = false) {
            $this->name = $name;
            $this->id = $id;
            $this->type = $type;
            $this->health = $health;
            $this->mod = $mod;
        }

        public function getInfo(){
            $string = "$this->name ($this->id) | $this->health";

            return $string;
        }
        
    }

    class Human extends Players {
        public function getInfo(){
            $string = "Human : $this->name ($this->id) | $this->health";
            return $string;
        }
    }

    class Elf extends Players {
        public function getInfo(){
            $string = "Elf : $this->name ($this->id) | $this->health";
            return $string;
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