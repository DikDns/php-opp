<?php
    
    // require_once "Product/Info.php";
    // require_once "Product/Product.php";
    // require_once "Product/Comic.php";
    // require_once "Product/VideoGame.php";
    // require_once "Product/PrintInfo.php";
    // require_once "Product/User.php";

    // require_once "Service/User.php";
    
    //! AUTOLOAD
    spl_autoload_register(function( $class ){
        
        //* EXCLUDE NAMESPACE 
        $class = explode("\\", $class);
        $class =  end($class);

        require_once __DIR__ . "/Product/"  . $class . ".php";
    });

    spl_autoload_register(function( $class ){

        //* EXCLUDE NAMESPACE 
        $class = explode("\\", $class);
        $class =  end($class);

        require_once __DIR__ . "/Service/"  . $class . ".php";
    });

?>