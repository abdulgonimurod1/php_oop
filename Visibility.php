<?php

require_once "data/Product.php";

$product = new Product("Laptop", 1500);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Keyboard", 100);
echo $dummy->info();