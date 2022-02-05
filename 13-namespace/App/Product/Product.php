<?php
    abstract class Product {
        protected $title,$author,$publisher,$price,$discount = 0;

        // CONSTRUCTOR
        public function __construct( $title = "Untitled", $author = "Unknown", $publisher = "Unknown", $price = 0) {
            $this->title = $title;
            $this->author = $author;
            $this->publisher = $publisher;
            $this->price = $price;
        }

        abstract public function getInfoProduct();

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
?>