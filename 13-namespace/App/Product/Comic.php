<?php 
    class Comic extends Product implements Info {
        private $page;

        public function __construct($title = "Untitled", $author = "Unknown", $publisher = "Unknown", $price = 0, $page){
            parent::__construct($title, $author, $publisher, $price);
            $this->page = $page;
        }

        public function getInfoProduct() {
            $string = "$this->title | $this->author, $this->publisher ($$this->price)";
            return $string;
        }

        public function getInfo(){
            return $this->getInfoProduct() . " - $this->page pages.";
        }
    }
?>