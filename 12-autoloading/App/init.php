<?php
    
    // require_once "Product/Info.php";
    // require_once "Product/Product.php";
    // require_once "Product/Comic.php";
    // require_once "Product/VideoGame.php";
    // require_once "Product/PrintInfo.php";
    
    spl_autoload_register(function( $class ){
        require_once __DIR__ . "/Product/"  . $class . ".php";
    });

?>