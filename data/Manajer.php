<?php

class Manajer
{
    var string $nama;

    var string $title;

    public function __construct(string $nama = "", string $title = "Manajer")
    {
        $this->nama = $nama;
        $this->title = $title;
    }
}

class VicePresiden extends Manajer
{
    function sayHello(string $name): void{
        echo "Hello $name, my name is Vice President " . $this->nama . PHP_EOL;
    }

    public function __construct(string $nama = "")
    {
        parent::__construct($nama, "Vice President");
    }
}