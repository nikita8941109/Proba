<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> <pre>  
<?php

    // 1

    function my_fun($x){
        return $x*$x;
    }

    $a="my_fun";

    echo $a(2);
    echo "<br>";
    echo $a(3);
    echo "<br>";
    
    // 2

    function my_fun2($name){
        $name();
    }
    my_fun2(function(){
        echo "Hello"."<br>";
    });

    // 3

    $a=function($name){
        echo "Hello $name<br>";
    };

    $a("Piter");

    $b=$a;

    $b("Alex");
    echo "<br>";

    // 4

    function speed_test($fun, $arg, $n=100000){
        $time1 = microtime(TRUE);

        for ($i=0; $i < $n ; $i++){
            $fun($arg);
        }
        
        $time2 = microtime(TRUE);

        return $time2 - $time1;
    }
    // echo pow(2, .5); // 2^(1/2)
    function my_sqrt($x){
        return pow($x, .5);
    }

    echo speed_test("sqrt", 20);
    echo "<br>";
    echo speed_test("my_sqrt", 20);

    // 5
    echo "<br>";
    $a1 = array(1,2,3,4,5,6,7,8,9,10);
    print_r($a1);

    $a2 = array_map(function($x){return $x*$x;}, $a1);
    print_r($a2);

    // n

    
?></pre>
</body>
</html>