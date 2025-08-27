<?php

class Product{
    private string $name;
    private int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getPrice(): int{
        return $this->price;
    }
}

class ProductDummy extends Product{
    public function info(): string{
        // return "Product $this->name, Price $this->price"; // error karena private
        return "Product {$this->getName()}, Price {$this->getPrice()}";
    }
}