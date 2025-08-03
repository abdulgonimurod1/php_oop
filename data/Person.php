<?php

class Person
{

    const AUTHOR = "Abdul Goni";

    var string $name;
    var ?string $address = null; // Nullable property
    var string $country = "Indonesia"; // Default value

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    function sayHello(?string $name){
        if(is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        }else{
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info(){
        echo "Author: " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object of Person {$this->name} is being destroyed" . PHP_EOL;
    }

}