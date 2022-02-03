<?php 

// class StaticExample {
//     public static $number = 1;

//     public static function hello(){
//         return "Hello " . self::$number++ . "x.";
//     }
// }

// echo StaticExample::$number;
// echo "<br>";
// echo StaticExample::hello();
// echo "<br>";
// echo StaticExample::hello();
// echo "<br>";

class StaticExample {
    public static $number = 1;

    public static function hello(){
        return "Hello " . self::$number++ . "x. <br>";
    }
}

$obj1 = new StaticExample();
echo $obj1->hello();
echo $obj1->hello();
echo $obj1->hello();

echo "<hr>";

$obj2 = new StaticExample();
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();







?>