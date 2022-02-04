<?php
    /* 
    ! Magic Constants
        __LINE__
        __FILE__
        __DIR__
        __FUNCTION__
        __CLASS__
        __TRAIT__
        __METHOD__
        __NAMESPACE__
    */

    // Cara Satu
    // define("NAMA", "ANDIKA");

    // echo __FILE__;
    // echo "<br>";


    // class Coba {
    //     // Cara Dua
    //     const NAMA = "Andika";
    // };

    // echo Coba::NAMA;
    // echo "<br>";

    class Coba {
        public static $const = __CLASS__;
    };

    echo Coba::$const;

?>