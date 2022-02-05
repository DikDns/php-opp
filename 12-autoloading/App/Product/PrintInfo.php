<?php
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