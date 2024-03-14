<?php
    // this is a PHP script
    echo "<h1>Hello World!</h1>";
    echo "My name is John</br>";

    // integer
    $age = 30;
    var_dump($age);

    // null
    $data = NULL;
    // if you don't define variable and then reference it then that variable's data type will be null
    var_dump($data);

    echo "</br>";

    // boolean
    $is_logged_in = true;
    var_dump($is_logged_in);

    // float
    echo "</br>";
    $price = 100.01;
    #$price = 10_000_000;
    var_dump($price);

    // strings
    #string interpolation can happen both in string literals and function parameters
    $name = "John is $age years old";
    echo "</br>$name";
    $name[0] = "X";
    echo "</br>{$name}</br>";

    // arrays
    $order_1 = "Salad";
    $order_2 = "Burger";
    $orders = [$order_1, $order_2, "Pizza", 100.1];
    $orders[] = "tomato soup";
    var_dump($orders);

    // associative arrays use keys for numbers
    echo "</br>";
    $orders = ["john" => $orders[0], "jane" => $orders[1], $orders[2]];
    $orders["bob"] = "Chicken";
    var_dump($orders);
    echo "</br>";

    // nested arrays
    $orders["john"] = ["Salad"];
    var_dump($orders);
    echo "\n";
    var_dump($orders["john"][0]);
    echo "\n";
?>