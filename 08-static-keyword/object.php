<?php
    // CLASS
    class Product {
        public $title,$author,$publisher,$price,$discount = 0;

        // CONSTRUCTOR
        public function __construct( $title = "Untitled", $author = "Unknown", $publisher = "Unknown", $price = 0) {
            $this->title = $title;
            $this->author = $author;
            $this->publisher = $publisher;
            $this->price = $price;
        }

        public function getInfo(){
            $string = "$this->title | $this->author, $this->publisher ($$this->price)";
            return $string;
        }

        public function setDiscount($disc){
            $this->discount = $disc;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price - ($this->price*$this->discount/100);
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setAuthor($author){
            $this->author = $author;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function setPublisher($publisher){
            $this->publisher = $publisher;
        }

        public function getPublisher(){
            return $this->publisher;
        }
        
    }



    class Comic extends Product {
        public $page;

        public function __construct($title = "Untitled", $author = "Unknown", $publisher = "Unknown", $price = 0, $page){
            parent::__construct($title, $author, $publisher, $price);
            $this->page = $page;
        }

        public function getInfo(){
            return parent::getInfo() . " - $this->page pages.";
        }
    }


    class VideoGame extends Product {
        public $playTime;

        public function __construct($title = "Untitled", $author = "Unknown", $publisher = "Unknown", $price = 0, $playTime){
            parent::__construct($title, $author, $publisher, $price);
            $this->playTime = $playTime;
        }

        public function getInfo(){
            return parent::getInfo() . " ~ $this->playTime hours.";
        }
    }

?>