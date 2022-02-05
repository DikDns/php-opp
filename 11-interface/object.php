<?php
    interface Info {
        public function getInfo();
    }

    // CLASS
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
    
    //! IMPLEMENTS INFO
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

    //! IMPLEMENTS INFO
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

    

    class PrintInfo {
        private $productList = array();

        public function setProductList(Product $product){
            $this->productList[] = $product;
        }

        public function print() {
            $str = "PRODUCT LIST : <br>";
            foreach($this->productList as $product){
                $str .= "- {$product->getInfo()} <br>";
            }
            return $str;
        }
    }

?>