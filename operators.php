<?php
    $modulous = 11 % 2;
    echo "modulous operation: $modulous</br>";
    $exponent = 10 ** 2;
    echo "exponent operation: $exponent</br>";
    $data = 10;
    $data += 4; // this compound assignment operator works for most of the operators
    $data **= 4;
    echo "compound assignment operator with exponent: $data</br>";
    $data++;
    echo "post-fix operator:";
    var_dump($data++);
    echo "</br>";
    echo "pre-fix operator: ";
    var_dump(++$data);
    echo "</br>";

    // Similar to JavaScript we have loose equality and strict equality 
    var_dump(
        1 == 1,
        1 == "1",
        1 === "1"
    );
    echo "</br>";
    var_dump(
        (string) [1]
    );
    echo "</br>";
    // you can supress error by adding the "@" symbol
    @var_dump(
        (string) [1]
    );

    echo "</br>";

    $age = 30;
    $data = $age > 18 && $age < 65;
    var_dump($data);
    // you can also use "and" for "&&" but most developers use "&&"

    printf("</br>I am %d years old</br>", $age);
    var_dump($AGE);
?>