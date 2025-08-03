<?php

class Manajer
{
    var string $nama;

    function sayHello(string $name): void{
        echo "Hello $name, my name is " . $this->nama;
    }
}

class VicePresiden extends Manajer
{

}