<?php
    // CLASS
    class Players {
        public $name,$id,$type,$health;

        // CONSTRUCTOR
        public function __construct( $name = "Anonymous", $id = "000000", $type = "Human", $health = 100.0) {
            $this->name = $name;
            $this->id = $id;
            $this->type = $type;
            $this->health = $health;
        }

        public function getInfo(){
            $string = "$this->name ($this->id) | $this->health";

            return $string;
        }
        
    }

    class Human extends Players {

        public $human;

        public function __construct($name = "Anonymous", $id = "000000", $type = "Human", $health = 100.0, $human = "Child"){

            parent::__construct($name, $id, $type, $health);
            $this->human = $human;

        }

        public function getInfo(){
            $string = "$this->type : " . parent::getInfo() . " ($this->human)";
            return $string;
        }
    }

    class Elf extends Players {

        public $elf;

        public function __construct($name = "Anonymous", $id = "000000", $type = "Human", $health = 100.0, $elf = "Gird"){

            parent::__construct($name, $id, $type, $health);
            $this->elf = $elf;

        }

        public function getInfo(){
            $string = "$this->type : " . parent::getInfo() . " ($this->elf)";
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