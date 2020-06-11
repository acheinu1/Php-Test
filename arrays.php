<?php
//indexed arrays
    $people =array("kevin", "mark", "john", "joshua");
    // echo $people[0] ;
    $cars = ["toyota", "mercedes", " honda", 3, 6, 406 ];
    // echo $cars[5]; // prints the index 5
    $cars[6] = "bmw";
    $cars[7] = "benz";
    $cars[] = "508";
    // print_r($cars); // printing all values in the array
    // var_dump($cars); // prints all the values in the arrays and ids the types


    //associative arrays
      $countries =["one"=> "canada", "two" => "Usa", "three" => "Paris", "four" => "Uae"]  ;
    // echo $countries["one"];
    // echo $countries["four"];
    $countries["five"]="france";

    // echo $countries["five"];
    // var_dump($countries);
    print_r($countries);
?>