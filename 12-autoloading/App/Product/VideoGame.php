<?php
    class VideoGame extends Product implements Info {
        private $playTime;

        public function __construct($title = "Untitled", $author = "Unknown", $publisher = "Unknown", $price = 0, $playTime){
            parent::__construct($title, $author, $publisher, $price);
            $this->playTime = $playTime;
        }

        public function getInfoProduct() {
            $string = "$this->title | $this->author, $this->publisher ($$this->price)";
            return $string;
        }

        public function getInfo(){
            return $this->getInfoProduct() . " ~ $this->playTime hours.";
        }
    }
?>